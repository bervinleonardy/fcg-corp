<?php defined('BASEPATH') OR exit('No direct script access allowed');

// if (!$this->ion_auth->logged_in()) {
// 	// redirect them to the login page
// 	redirect('auth/login', 'refresh');
// }

// Load kunjungan
$alsite 			= current_url();
$alamat_kunjungan 	= str_replace('index.php/','',$alsite);
$this->kunjungan->counter($alamat_kunjungan);

// require_once('head_nfe.php');
require_once('head_arsha.php');
// require_once('head.php');
// require_once('header.php');
require_once('header_arsha.php');
// require_once('menu.php');
// require_once('menu_nfe.php');
require_once('menu_arsha.php');
// require_once('konten.php');
// require_once('footer.php');
require_once('footer_arsha.php');
// require_once('footer_nfe.php');