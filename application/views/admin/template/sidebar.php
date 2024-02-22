<?php
if(!isset($_SESSION['logged_in'][0]->admin_id))
{
    redirect(base_url('admin/Login')); 
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Mining Management Systems, Community portals, Information Technology">
  
     <meta name="author" content="JOG DIGITAL INNOVATIONS">
  <link rel="shortcut icon" type="image/x-icon" href="<?=base_url('assets/images/favicon.png')?>" />

    <title>JOG Admin</title>

    <!-- Bootstrap -->
    <link href="<?=base_url('assets/admin/vendors/bootstrap/dist/css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?=base_url('assets/admin/vendors/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet"> 
    <!-- NProgress -->
    <link href="<?=base_url('assets/admin/vendors/nprogress/nprogress.css')?>" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?=base_url('assets/admin/vendors/iCheck/skins/flat/green.css')?>" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="<?=base_url('assets/admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')?>" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?=base_url('assets/admin/vendors/jqvmap/dist/jqvmap.min.css')?>" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?=base_url('assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.css')?>" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?=base_url('assets/admin/build/css/custom.min.css')?>" rel="stylesheet">
     <!-- Datatables -->
    
    <link href="<?=base_url('assets/admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/admin/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/admin/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/admin/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/admin/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')?>" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <!--  <script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
 -->         <script src="https://cdn.ckeditor.com/4.14.0/full/ckeditor.js"></script>
  </head>
<style type="text/css">
  #cke_editor1
  {
    padding: 1px !important;
  }
</style>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;background: #fff">
            <!--   <a href="<?=base_url('admin/Home')?>" class="site_title"><i class="fa fa-paw"></i> <span></span></a> -->
              <a class="navbar-brand logo pl-5 site_title" href="<?=base_url('admin/Home')?>">
            <!--  <i class="fa fa-paw"></i>  -->
                 <span class="logo-md"> <img class="logo-default" src="<?=base_url('assets/images/jogindia.png')?>" alt="logo" width="120" height="35"></span>
                 <div class="logo-sm d-none"> <img class="logo-default" src="<?=base_url('assets/images/jogindia.png')?>" alt="logo" width="50" height="25"></div>
               </a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <!-- <div class="profile_pic">
                <img src="<?=base_url('assets/admin/images/img.jpg')?>" alt="..." class="img-circle profile_img">
              </div> -->
              <div class=" text-center text-white">
                <h2>Welcome</h2>
             <!--    <h2>John Doe</h2> -->
              </div>
            </div>
            <!-- /menu profile quick info -->
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <!-- <h3>General</h3> -->
                <ul class="nav side-menu">
                  <li><a href="<?=base_url('admin/Home')?>"><i class="fa fa-home"></i> Home </a></li>
                  <li><a><i class="fa fa-info"></i> About Us  <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?=base_url('admin/About')?>">Add About Form</a></li>
                      <li><a href="<?=base_url('admin/About/view_aboutus_list')?>">View AboutUs</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-briefcase"></i> Services<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?=base_url('admin/Services')?>">Add Services</a></li>
                      <li><a href="<?=base_url('admin/Services/view_services')?>">View servicesList</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Products<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?=base_url('admin/Products')?>">Add Products</a></li>
                      <li><a href="<?=base_url('admin/Products/view_products')?>">View ProductsList</a></li>
                    </ul>
                  </li>
                    <li><a><i class="fa fa-edit"></i> Media Room<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?=base_url('admin/Media')?>">Add Media</a></li>
                      <li><a href="<?=base_url('admin/Media/view_media')?>">View Medialist</a></li>
                    </ul>
                  </li>
                   <li><a><i class="fa fa-edit"></i> Portfolio<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?=base_url('admin/Portfolio/add_portcat')?>">Add Portfolio Category</a></li>
                      <li><a href="<?=base_url('admin/Portfolio/view_portcat_list')?>">View Portfolio Category</a></li>
                      <li><a href="<?=base_url('admin/Portfolio')?>">Add Portfolio </a></li>                    
                      <li><a href="<?=base_url('admin/Portfolio/view_portfolio_list')?>">View Portfolio</a></li>
                    </ul>
                  </li>
                    <li><a><i class="fa fa-edit"></i> Technology<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?=base_url('admin/Technology')?>">Add Technology</a></li>
                      <li><a href="<?=base_url('admin/Technology/view_technology')?>">View Technology</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Team<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?=base_url('admin/Team')?>">Add Team Member</a></li>
                      <li><a href="<?=base_url('admin/Team/view_team_list')?>">View TeamList</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Testimonials<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?=base_url('admin/Testimonial')?>">Add Testimonials</a></li>
                      <li><a href="<?=base_url('admin/Testimonial/view_testimonial_list')?>">View TestimonialList</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> What do we offer<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?=base_url('admin/Offers')?>">Add Offers</a></li>
                      <li><a href="<?=base_url('admin/Offers/view_offers')?>">View offers</a></li>
                    </ul>
                  </li>
                    <li><a><i class="fa fa-edit"></i> Why choose Us<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?=base_url('admin/Chooseus')?>">Add chooseus Form</a></li>
                      <li><a href="<?=base_url('admin/Chooseus/view_chooseus')?>">View chooseus</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-list-alt"></i> Contact Details <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?=base_url('admin/Contactdetails')?>">Edit Contact Details</a></li>
                      <li><a href="<?=base_url('admin/Contactdetails/view_contact_details')?>">View Contact Details List</a></li>
                    </ul>
                  </li>
                  <li><a href="<?=base_url('admin/Password')?>"><i class="fa fa-unlock-alt"></i>  Reset Password</a></li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small d-none">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?=base_url()?>assets/admin/images/img.jpg" alt="">Admin
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="<?=base_url('admin/Login/logout')?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>
                <li role="presentation" class="nav-item dropdown open">
                </li>
              </ul>
            </nav>
          </div>
        </div>

<script>
  $(document).on("click",".toggle",function(){
    // alert("SDds");
    $(".logo-sm").toggleClass("d-none");
    $(".site_title").toggleClass("pl-5");
    
  }) 
</script>

