<?php
if ( ! function_exists('check_and_write'))
{
	/**
	 * Write File
	 *
	 * Writes data to the file specified in the path.
	 * Creates a new file if non-existent.
	 *
	 * @param	string	$path	File path
	 * @param	string	$data	Data to write
	 * @param	string	$mode	fopen() mode (default: 'wb')
	 * @return	bool
	 */
	function check_and_write($last_query)
	{
		$ci =& get_instance();
		
		$nama_aplikasi = $ci->session->userdata('nama_aplikasi');
		$waktu=date("Ym");
		$name_file= $nama_aplikasi.'_'.$waktu.'.txt';
		
		$last_query= str_replace(array("\r","\n")," ",$last_query);
		
		$user_login = $ci->session->userdata('username');
		$ip_a=$ci->input->ip_address();
		$time_work= date("Y-m-d H:i:s");
		$write_to_text= '['.$user_login.'|'.$ip_a.'|'.$last_query.'|'.$time_work.']'."\n";
		
		$vPath ='/apps/rec/'.$name_file;
		//var_dump($vPath);
		$tulis = write_file("$vPath", $write_to_text,'a+');
		
		//return($write_to_text);
	
		
	}
}
?>