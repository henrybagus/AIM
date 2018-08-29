<?php
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	if ( ! function_exists('show_clock'))
	{
		function show_clock()
		{
			$arr_hari 			= array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
			$arr_bulan 			= array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli","Agustus","September","Oktober","November","Desember");
			$arr_bulan_index 	= array("01"=>"Januari", "02"=>"Februari", "03"=>"Maret", "04"=>"April", "05"=>"Mei", "06"=>"Juni", "07"=>"Juli", "08"=>"Agustus", "09"=>"September", "10"=>"Oktober", "11"=>"November", "12"=>"Desember");
			$arr_bul 			= array("Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul","Agu","Sep","Okt","Nov","Des");
			
			return $arr_hari[date("w")].", ".date("d")." ".$arr_bulan[date("m")-1]." ".date("Y");
		}   
	}
	
	if ( ! function_exists('show_full_date_indo_format'))
	{
		function show_full_date_indo_format($hari,$tgl,$bln,$thn)
		{
			$arr_hari 			= array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
			$arr_bulan 			= array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli","Agustus","September","Oktober","November","Desember");
			$arr_bulan_index 	= array("01"=>"Januari", "02"=>"Februari", "03"=>"Maret", "04"=>"April", "05"=>"Mei", "06"=>"Juni", "07"=>"Juli", "08"=>"Agustus", "09"=>"September", "10"=>"Oktober", "11"=>"November", "12"=>"Desember");
			$arr_bul 			= array("Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul","Agu","Sep","Okt","Nov","Des");
			
			return $arr_hari[$hari].", ".$tgl." ".$arr_bulan[$bln-1]." ".$thn;
		}   
	}
	
	if ( ! function_exists('show_date_indo_format'))
	{
		function show_date_indo_format($tgl,$bln,$thn)
		{
			$arr_hari 			= array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
			$arr_bulan 			= array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli","Agustus","September","Oktober","November","Desember");
			$arr_bulan_index 	= array("01"=>"Januari", "02"=>"Februari", "03"=>"Maret", "04"=>"April", "05"=>"Mei", "06"=>"Juni", "07"=>"Juli", "08"=>"Agustus", "09"=>"September", "10"=>"Oktober", "11"=>"November", "12"=>"Desember");
			$arr_bul 			= array("Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul","Agu","Sep","Okt","Nov","Des");
			
			return $tgl." ".$arr_bulan[$bln-1]." ".$thn;
		}   
	}