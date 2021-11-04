<?php
// Site
$site_info = $this->konfigurasi_model->listing();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo $title; ?></title>
<meta name="description" content="<?php echo strip_tags($site_info->tentang).', '.$title ?>">
<meta name="keywords" content="<?php echo $site_info->keywords.', '.$title  ?>">
<meta name="author" content="<?php echo $site_info->namaweb ?>">
<!-- icon -->
<link rel="shortcut icon" href="<?php echo $this->website->icon(); ?>">
<!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Plugin css -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/meetup/css/open-iconic-bootstrap.min.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/meetup/css/animate.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/meetup/css/owl.carousel.min.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/meetup/css/owl.theme.default.min.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/meetup/css/magnific-popup.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/meetup/css/aos.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/meetup/css/ionicons.min.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/meetup/css/flaticon.css" media="all" />
<!-- own style css -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/meetup/css/icomoon.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/meetup/css/style.css" media="all" />
<!-- DataTables CSS -->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/datatables/dataTables.bootstrap4.css">
<!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/select2/select2.min.css">
  <style type="text/css" media="screen">
  	p {
  		margin-bottom: 15px;
  	}
  </style>
</head>

<body>
