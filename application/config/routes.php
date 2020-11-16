<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'frontend';

$route['daftar'] = 'frontend/pendaftaran';
$route['visimisi'] = 'frontend/visimisi';
$route['alur'] = 'frontend/alur';
$route['pengumuman'] = 'frontend/pengumuman';
$route['pengajuan'] = 'frontend/pengajuan';



$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['login'] = 'Auth/login';
$route['logout'] = 'Auth/logout';

// ADMIN
$route['admin/user/edit/(:any)'] = 'Admin/edituser/$1';
$route['admin/user/hapus/(:any)'] = 'Admin/hapususer/$1';
$route['admin/pendaftar/edit/(:any)'] = 'Admin/detailpendaftar/$1';
$route['admin/daftarhapus/(:any)'] = 'Admin/hapusdaftar/$1';
$route['admin/datapengumuman'] = 'Admin/datapengumuman';

// OPERATOR
$route['operator/user/edit/(:any)'] = 'Operator/edituser/$1';
$route['operator/user/hapus/(:any)'] = 'Operator/hapususer/$1';
$route['operator/pendaftar/edit/(:any)'] = 'Operator/detailpendaftar/$1';
$route['operator/daftarhapus/(:any)'] = 'Operator/hapusdaftar/$1';
$route['operator/datapengumuman'] = 'Operator/datapengumuman';
