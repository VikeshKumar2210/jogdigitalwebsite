<footer id="footer" class="bg-one">
  <div class="top-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-3 col-lg-3">
    <img src="https://www.jogdigitalinnovations.com/assets/images/jog_dif.png" alt="Company Logo" style="max-width: 100%; height: auto;">
</div>

        <!-- End of .col-sm-3 -->

        <div class="col-sm-2 col-md-2 col-lg-2">
          <ul>
            <li><h3>Our Services</h3></li>
			 <?php
            foreach ($servicedata as $services) {
            ?>
            <li><a  href="<?=base_url()?>viewservices/<?=$services->service_id?>"><?=$services->services?></a></li>
			<?php
			}
			?>
          </ul>
        </div>
		 <div class="col-sm-2 col-md-2 col-lg-2">
          <ul>
            <li><h3>Our Products</h3></li>
			 <?php
            foreach ($productdata as $products) {
            ?>
            <li><a  href="<?=base_url()?>viewproducts/<?=$products->product_id?>"><?=$products->products?></a></li>
			<?php
			}
			?>
          </ul>
        </div>
        <div class="col-sm-2 col-md-2 col-lg-2">
          <ul id="footlink">
            <li><h3>Quick Links</h3></li>
            <li class="Home"><a href="<?=base_url('Home')?>">Home</a></li>
            <li class="About"><a href="<?=base_url('About')?>">About Us</a></li>
            <li class="Service"><a href="<?=base_url('Service')?>">Services</a></li>
             <li class="Products"><a href="<?=base_url('Products')?>">Products</a></li>
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
            <li class="Contact"><a href="<?=base_url('Contact')?>">Contact</a></li>

          </ul>
        </div>
        <!-- End of .col-sm-3 -->

        <div class="col-sm-3 col-md-3 col-lg-3">
          <ul>
            <li><h3>Connect with us Socially</h3></li>
            <?php
            foreach ($contactdata as $contact) {
            ?>
            <li><a target="_blank" href="<?=$contact->facebook?>"><i class="fa fa-facebook"></i> Facebook</a></li>
            <li><a target="_blank" href="<?=$contact->twitter?>"><i class="fa fa-twitter"></i> Twitter</a></li>
            <li><a target="_blank" href="<?=$contact->youtube?>"><i class="fa fa-youtube"></i> Youtube</a></li>
            <li><a target="_blank" href="<?=$contact->instagram?>"><i class="fa fa-instagram"></i> Instagram</a></li>
            <li><a target="_blank" href="<?=$contact->linkedin?>"><i class="fa fa-linkedin"></i> LinkedIn</a></li>
            <?php
            }
           ?>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

      </div>
    </div> <!-- end container -->
  </div>
  <div class="footer-bottom">
    <h5>Copyright 2024. All rights reserved.</h5>
    <h6>Design and Developed by <a href="<?=base_url('Home')?>">JOG Digital Innovations pvt ltd</a></h6>
  </div>
</footer> <!-- end footer -->


    <!-- end Footer Area
    ========================================== -->
    
    <!-- 
    Essential Scripts
    =====================================-->
    
  <!-- Main jQuery -->
    <script src="<?=base_url('assets/plugins/jquery/dist/jquery.min.js')?>"></script>
    <!-- Swiper slider  -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- AOS ANIMATION  -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<!-- AOS ANIMATION  -->

    <!-- Bootstrap 3.1 -->
    <script src="<?=base_url('assets/plugins/bootstrap/js/bootstrap.min.js')?>"></script>
    <!-- Parallax -->
    <script src="<?=base_url('assets/plugins/parallax/jquery.parallax-1.1.3.js')?>"></script>
    <!-- lightbox -->
    <script src="<?=base_url('assets/plugins/lightbox2/dist/js/lightbox.min.js')?>"></script>
    <!-- slick Carousel -->
    <script src="<?=base_url('assets/plugins/slick-carousel/slick/slick.min.js')?>"></script>
    <!-- Portfolio Filtering -->
    <script src="<?=base_url('assets/plugins/mixitup/dist/mixitup.min.js')?>"></script>
    <!-- Smooth Scroll js -->
    <script src="<?=base_url('assets/plugins/smooth-scroll/dist/js/smooth-scroll.min.js')?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/plugins/revo-slider/js/jquery.themepunch.tools.min.js')?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/plugins/revo-slider/js/jquery.themepunch.revolution.min.js')?>"></script>
    <!-- Custom js -->
    <script src="<?=base_url('assets/js/script.js')?>"></script>

      <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
    (Load Extensions only on Local File Systems ! 
    The following part can be removed on Server for On Demand Loading) --> 
    <script type="text/javascript" src="<?=base_url('assets/plugins/revo-slider/js/extensions/revolution.extension.actions.min.js')?>"></script> 
    <script type="text/javascript" src="<?=base_url('assets/plugins/revo-slider/js/extensions/revolution.extension.carousel.min.js')?>"></script> 
    <script type="text/javascript" src="<?=base_url('assets/plugins/revo-slider/js/extensions/revolution.extension.kenburn.min.js')?>"></script> 
    <script type="text/javascript" src="<?=base_url('assets/plugins/revo-slider/js/extensions/revolution.extension.layeranimation.min.js')?>"></script> 
    <script type="text/javascript" src="<?=base_url('assets/plugins/revo-slider/js/extensions/revolution.extension.migration.min.js')?>"></script> 
    <script type="text/javascript" src="<?=base_url('assets/plugins/revo-slider/js/extensions/revolution.extension.navigation.min.js')?>"></script> 
    <script type="text/javascript" src="<?=base_url('assets/plugins/revo-slider/js/extensions/revolution.extension.parallax.min.js')?>"></script> 
    <script type="text/javascript" src="<?=base_url('assets/plugins/revo-slider/js/extensions/revolution.extension.slideanims.min.js')?>"></script> 
    <script type="text/javascript" src="<?=base_url('assets/plugins/revo-slider/js/extensions/revolution.extension.video.min.js')?>"></script>
   <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
   <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>
<script>
  
    /* https://learn.jquery.com/using-jquery-core/document-ready/ */
    jQuery(document).ready(function() {
 
        /* initialize the slider based on the Slider's ID attribute */
        jQuery('#rev_slider_1').show().revolution({
 
            /* options are 'auto', 'fullwidth' or 'fullscreen' */
            sliderLayout: 'fullscreen',
 
            /* basic navigation arrows and bullets */
            navigation: {
 
                arrows: {
                    style:"zeus",
                    enable:true,
                    hide_onmobile:true,
                    hide_under:600,
                    hide_onleave:true,
                    hide_delay:200,
                    hide_delay_mobile:1200,
                    tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                    left: {
                      h_align:"left",
                      v_align:"center",
                      h_offset:30,
                      v_offset:0
                    },
                    right: {
                      h_align:"right",
                      v_align:"center",
                      h_offset:30,
                      v_offset:0
                    }
                  }
                  ,
                  bullets: {
                    enable:false,
                    hide_onmobile:true,
                    hide_under:600,
                    style:"metis",
                    hide_onleave:true,
                    hide_delay:200,
                    hide_delay_mobile:1200,
                    direction:"horizontal",
                    h_align:"center",
                    v_align:"bottom",
                    h_offset:0,
                    v_offset:30,
                    space:5,
                    tmp:'<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">{{title}}</span>'
                  }
            }
        });
    });
</script>



  </body>

</html>
