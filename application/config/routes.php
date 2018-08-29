<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.2.4 or newer
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package    CodeIgniter
 * @author    EllisLab Dev Team
 * @copyright    Copyright (c) 2008 - 2014, EllisLab, Inc. (http://ellislab.com/)
 * @copyright    Copyright (c) 2014, British Columbia Institute of Technology (http://bcit.ca/)
 * @license    http://opensource.org/licenses/MIT	MIT License
 * @link    http://codeigniter.com
 * @since    Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Home';
$route['login'] = 'Home/login';
$route['404_override'] = 'custom_error';
$route['translate_uri_dashes'] = FALSE;
$route['logout'] = 'Home/logout';

$route['barang'] = 'C_barang';
$route['simpan_barang'] = 'C_barang/simpan';
$route['ubah_barang/(:any)'] = 'C_barang/ubah/$1';
$route['hapus_barang/(:any)'] = 'C_barang/hapus/$1';


$route['master_kategori'] = 'C_master/master_kategori';
$route['simpan_kategori'] = 'C_master/simpan_kategori';
$route['ubah_kategori/(:any)'] = 'C_master/ubah_kategori/$1';
$route['hapus_kategori/(:any)'] = 'C_master/hapus_kategori/$1';

$route['master_barang'] = 'C_master/master_barang';
$route['simpan_barang'] = 'C_master/simpan_barang';
$route['get_ubah_barang/(:any)'] = 'C_master/get_ubah_barang/$1';
$route['ubah_barang/(:any)'] = 'C_master/ubah_barang/$1';
$route['hapus_barang/(:any)'] = 'C_master/hapus_barang/$1';

$route['master_merk'] = 'C_master/master_merk';
$route['simpan_merk'] = 'C_master/simpan_merk';
$route['ubah_merk/(:any)'] = 'C_master/ubah_merk/$1';
$route['hapus_merk/(:any)'] = 'C_master/hapus_merk/$1';

$route['master_satuan'] = 'C_master/master_satuan';
$route['simpan_satuan'] = 'C_master/simpan_satuan';
$route['ubah_satuan/(:any)'] = 'C_master/ubah_satuan/$1';
$route['hapus_satuan/(:any)'] = 'C_master/hapus_satuan/$1';

$route['penambahan_stock'] = 'C_stock/penambahan_stock';
$route['simpan_stock_barang'] = 'C_stock/save_penambahan_stock';
$route['hapus_penambahan_stock/(:any)/(:any)'] = 'C_stock/delete_penambahan_stock/$1/$2';



/* End of file routes.php */
/* Location: ./application/config/routes.php */