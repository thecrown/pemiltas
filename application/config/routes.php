<?php
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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'welcome';
// admin
$route['dashboard'] = 'admin';
$route['dashboard/login'] = 'login/admin';

$route['daftar-pemilih'] = 'admin/daftar_pemilih';
$route['tambah-pemilih'] = 'admin/add_pemilih';
$route['valid-pemilih'] = 'admin/valid_pemilih';
$route['hapus-pemilih/(:num)'] = 'admin/delete_pemilih/$1';
$route['pemilih-update/(:num)'] = 'admin/valid_update/$1';
$route['update-pemilih/(:num)'] = 'admin/update_pemilih/$1';

//kandidat bem
$route['kandidat-bem'] = 'admin/daftar_kandidat_bem';
$route['tambah-ketua-bem'] = 'admin/add_kandidat_bem_ketua';
$route['tambah-wakil-bem'] = 'admin/add_kandidat_bem_wakil';
$route['kandidat-ketua'] = 'admin/valid_ketua_bem';
$route['kandidat-wakil'] = 'admin/valid_wakil_bem';
$route['hapus-kandidat/(:num)'] = 'admin/hapus_kandidat_bem/$1';


$route['hitung-vote'] = 'admin/hitung_vote';
$route['kandidat-senat'] = 'admin/daftar_kandidat_senat';

// user
$route['login'] = 'login/user';
$route['user/vote-bem'] = 'user/bem';
$route['user/vote-senat'] = 'user/senat';
$route['user/vote-review'] = 'user/review';
$route['user/thanks'] = 'user/thanks';
$route['logout'] = 'login/logout';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;