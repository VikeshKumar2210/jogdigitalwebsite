<!DOCTYPE html>

<html class="no-js"> <!--<![endif]-->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Softwares,Mobile apps, Web, Community portals, Information Technology">
  <meta name="keywords" content="HTML, CSS, JavaScript,Flutter,Android,Kotlin,Dehradun,Best IT company in Dehradun,SEO,Software Consulting,Consulting">
  
  <meta name="author" content="JOG DIGITAL INNOVATIONS PVT LTD">

  <title>JOG DIGITAL INNOVATIONS PVT LTD</title>

<!-- Mobile Specific Meta
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Favicon -->
   <link rel="shortcut icon" type="image/x-icon" href="<?=base_url('assets/images/favicon.ico')?>" />
  
  <!-- CSS
  ================================================== -->
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/plugins/revo-slider/css/settings.css')?>">
  <!-- RS5.0 Layers and Navigation Styles -->
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/plugins/revo-slider/css/layers.css')?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/plugins/revo-slider/css/navigation.css')?>">
  <!-- REVOLUTION STYLE SHEETS -->
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/plugins/revo-slider/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css')?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/plugins/revo-slider/fonts/font-awesome/css/font-awesome.min.css')?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/plugins/revo-slider/css/settings.css')?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/plugins/revo-slider/css/layers.css')?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/plugins/revo-slider/css/navigation.css')?>"> 
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="<?=base_url('assets/plugins/themefisher-font/style.css')?>">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="<?=base_url('assets/plugins/bootstrap/css/bootstrap.min.css')?>">
  <!-- Lightbox.min css -->
  <link rel="stylesheet" href="<?=base_url('assets/plugins/lightbox2/dist/css/lightbox.min.css')?>">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="<?=base_url('assets/plugins/slick-carousel/slick/slick.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/plugins/slick-carousel/slick/slick-theme.css')?>">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>">
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <link href="<?=base_url('assets/css/ionicons.min.css')?>" rel="stylesheet">
     <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-P5VC7MWSTG"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-P5VC7MWSTG');
</script>
 <!--
  Start Preloader
  ==================================== -->
  <div id="preloader">
    <div class='preloader'>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div> 
  <!--
  End Preloader
  ==================================== -->
<!--
Fixed Navigation
==================================== -->
<header class="navigation navbar navbar-fixed-top bg-white">
   <div class="container">
      <div class="navbar-header">
         <!-- responsive nav button -->
         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         </button>
         <!-- /responsive nav button -->
         <!-- logo -->
         <a class="navbar-brand logo" href="<?=base_url()?>">
            <img class="logo-default" src="<?=base_url('assets/images/jogindia.png')?>" alt="logo" width="200" />
            <img class="logo-white" src="<?=base_url('assets/images/jogwhite.png')?>" alt="logo" width="200" />
         </a>
         <!-- /logo -->
      </div>
      <!-- main nav -->
      <nav class="collapse navbar-collapse navbar-right">
         <ul id="nav" class="nav navbar-nav menu">
            <li class="Home"><a href="<?=base_url()?>">Home</a></li>
            <li class="About"><a href="<?=base_url('About')?>">About Us</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Our Offerings <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li class="Service"><a href="<?=base_url('Service')?>">Services</a></li>
                <li class="Products"><a href="<?=base_url('Products')?>">Products</a></li>
              </ul>
           </li>
  
           <li class="Portfolio"><a href="<?=base_url('Portfolio')?>">Portfolio</a></li>
           <li class="Media"><a href="<?=base_url('Media')?>">Media Room</a></li>
           <?php
           $query = $this->db->query("select * FROM my_team")->result();
           if(!empty($query))
           {
           ?>
            <li class="Team"><a href="<?=base_url('Team')?>">Team</a></li>
           <?php
           }
           ?>
  <!--          <li><a href="<?=base_url('Pricing')?>">Pricing</a></li> -->
           <li class="Contact"><a href="<?=base_url('Contact')?>">Contact</a></li>
         </ul>
      </nav>
      <!-- /main nav -->
   </div>
</header>
<?php
include 'scrolltotop.php';
?>
<!--
End Fixed Navigation
==================================== -->