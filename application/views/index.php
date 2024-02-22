<script>
$(document).ready(function() { 
      $(".Home").addClass("active");
});

<?php
   $query = $this->db->query("UPDATE admin SET visiters = visiters+1");
?>
</script>
<style type="text/css">

/*
Fade content bs-carousel with hero headers
Code snippet by maridlcrmn (Follow me on Twitter @maridlcrmn) for Bootsnipp.com
Image credits: unsplash.com
*/

/********************************/
/*       Fade Bs-carousel       */
/********************************/
.fade-carousel {
    position: relative;
    height: 100vh;
}
.fade-carousel .carousel-inner .item {
    height: 100vh;
}
.fade-carousel .carousel-indicators > li {
    margin: 0 2px;
    background-color: #1a1a1a;
    border-color: #1a1a1a;
    opacity: .7;
}
.fade-carousel .carousel-indicators > li.active {
  width: 10px;
  height: 10px;
  opacity: 1;
}

/********************************/
/*          Hero Headers        */
/********************************/
.hero {
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: 3;
    color: #fff;
    text-align: center;
    text-transform: uppercase;
    text-shadow: 1px 1px 0 rgba(0,0,0,.75);
      -webkit-transform: translate3d(-50%,-50%,0);
         -moz-transform: translate3d(-50%,-50%,0);
          -ms-transform: translate3d(-50%,-50%,0);
           -o-transform: translate3d(-50%,-50%,0);
              transform: translate3d(-50%,-50%,0);
}
.hero h1 {
    font-size: 6em;    
    font-weight: bold;
    margin: 0;
    padding: 0;
}

.fade-carousel .carousel-inner .item .hero {
    opacity: 0;
    -webkit-transition: 2s all ease-in-out .1s;
       -moz-transition: 2s all ease-in-out .1s; 
        -ms-transition: 2s all ease-in-out .1s; 
         -o-transition: 2s all ease-in-out .1s; 
            transition: 2s all ease-in-out .1s; 
}
.fade-carousel .carousel-inner .item.active .hero {
    opacity: 1;
    -webkit-transition: 2s all ease-in-out .1s;
       -moz-transition: 2s all ease-in-out .1s; 
        -ms-transition: 2s all ease-in-out .1s; 
         -o-transition: 2s all ease-in-out .1s; 
            transition: 2s all ease-in-out .1s;    
}

/********************************/
/*            Overlay           */
/********************************/
/*.overlay {
    position: absolute;
    width: 100%;
    top:35%;
    height: 30%;
    z-index: 2;
    background-color: #133b55;
    opacity: .7;
}*/

/********************************/
/*          Custom Buttons      */
/********************************/
.btn.btn-lg {padding: 10px 40px;}
.btn.btn-hero,
.btn.btn-hero:hover,
.btn.btn-hero:focus {
    color: #f5f5f5;
    background-color: #1abc9c;
    border-color: #1abc9c;
    outline: none;
    margin: 20px auto;
}

/********************************/
/*       Slides backgrounds     */
/********************************/
.fade-carousel .slides .slide-1, 
.fade-carousel .slides .slide-2 {
  height: 100vh;
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
}
.fade-carousel .slides .slide-1 {
  background-image: url('<?=base_url('assets/images/slider/slider-bg-1.jpg')?>'); 
}
.fade-carousel .slides .slide-2 {
  background-image: url('<?=base_url('assets/images/slider/slider-bg-2.jpg')?>');
}

.captions
	{
		font-family: "Good Times Rg", "Source Sans Pro", sans-serif;
		line-height: 60px;
		text-transform: uppercase;
		font-weight: 700; 
		letter-spacing:2px;
		font-size:50px
	} 
	.descrip
	{
		 font-family: "Good Times Rg", "Source Sans Pro", sans-serif;
		 z-index: 7;
		 font-size: 12px !important;
		 margin-top:10px;
	}
/********************************/
/*          Media Queries       */
/********************************/
@media screen and (min-width: 980px){
    .hero { width: 980px; }    
}
@media screen and (max-width: 640px){
    .hero h1 { font-size: 4em; }    
}
@media only screen and (max-width: 500px) {
	.hero
	{
		width: 100% !important;
	}
	.captions
	{
		font-family: 'Catamaran', sans-serif !important;
		line-height: 25px;
		text-transform: uppercase;
		font-weight: 500; 
		letter-spacing:2px;
		font-size:21px
	} 
	.descrip
	{
		 font-family: sans-serif !important;
		 z-index: 7;
		 padding: 0px 10px;
		 line-height: 15px;
		 font-size: 9px !important;
		 margin-top:5px;

	}
}
@media only screen and (max-width: 800px) and (min-width: 500px){
	.captions
	{
		font-family: 'Catamaran', sans-serif !important;
		line-height: 30px;
		text-transform: uppercase;
		font-weight: 500; 
		letter-spacing:2px;
		font-size:30px
	} 
	.descrip
	{
		 font-family: sans-serif !important;
		 z-index: 7;
		 font-size: 8px !important;
		 margin-top:10px;

	}
}
@media screen and (max-width: 800px) and (min-width: 600px) {
	.hero
	{
		padding-top:60px !important;
	}

	.captions
	{
		font-family: 'Catamaran', sans-serif !important;
		line-height: 30px;
		text-transform: uppercase;
		font-weight: 500; 
		letter-spacing:2px;
		font-size:30px
	} 
	.descrip
	{
		 font-family: sans-serif !important;
		 z-index: 7;
		 font-size: 8px !important;
		 margin-top:10px;

	}
}
@media screen and (max-width: 900px) and (min-width: 800px) {
	.hero
	{

		padding-top:60px !important;
	}
	.captions
	{
		font-family: 'Catamaran', sans-serif !important;
		line-height: 23px;
		text-transform: uppercase;
		font-weight: 500; 
		letter-spacing:2px;
		font-size:40px
	} 
	.descrip
	{
		 font-family: sans-serif !important;
		 z-index: 7;
		 font-size: 12px !important;
		 margin-top:8px;

	}
}
@media screen and (max-width: 1100px) and (min-width: 900px) {

	.captions
	{
		font-family: 'Catamaran', sans-serif !important;
		line-height: 23px;
		text-transform: uppercase;
		font-weight: 500; 
		letter-spacing:2px;
		font-size:50px
	} 
	.descrip
	{
		 font-family: sans-serif !important;
		 z-index: 7;
		 font-size: 18px !important;
		 margin-top:10px;

	}
}

.service-item:hover>p
{
	color: white
}
.service-item:hover
{
	background: #133b55;
	color: white;
}




/*



@media only screen and (max-width: 600px) {
	
	.captions
	{
		margin-top: 20px !important;
		font-size:15px !important;
		line-height: 20px !important; 
	} 
	.section
	{
		padding:50px 0px !important;
	}
}
.tparrows 
{
	top:59% !important;
}
.service-item:hover>p
{
	color: white
}
.service-item:hover
{
	background: #133b55;
	color: white;
}
.tp-loop-wrap
{
	top:10px !important;
}
/*.tp-parallax-wrap
{
	top:210px !important;
}*/
/*.captions-title
	{
		font-size: 28px !important;
		line-height: 30px !important;
	}*/


</style>

<!------ Include the above in your HEAD tag ---------->

<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
  <!-- Overlay -->
  <div class="overlay"></div>

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1"></li>
  </ol>
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item slides active">
      <div class="slide-1"></div>
      <div class="hero container" style="padding-top: 100px">
        <hgroup>
            <div class="row captions">Crafting Digital Experience</div>        
            <div class="row descrip">We do not just build softwares. We craft experience for our users through world  class techniques & technologies to make softwares easy to use and extremely convenient.</div>
        </hgroup>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-2"></div>
      <div class="hero container"  style="padding-top: 100px">        
        <hgroup>
            <div class="row captions">We Combine Design and Creativity</div>      
             <div class="row descrip">We at JOG Digital Innovations strive to provide our partners with the latest designs  and UI developed by our experienced team of professionals. </div>
        </hgroup>       
      </div>
    </div>
  </div> 
</div>
<?php
if(!empty($offerdata))
{
	?>
<!--
Start About Section
==================================== -->
<section class="service-2 section">
  <div class="container">
    <div class="row">

      <!-- section title -->
      <div class="title text-center"  >
        <h2>What Do We Offer</h2>
        <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, earum. </p> -->
        <div class="border"></div>
      </div>
      <!-- /section title -->

      <div class="col-md-4 text-center">
        <img src="<?=base_url('assets/images/about/member.jpg')?>" class="inline-block img img-responsive" alt="">
      </div>
      <div class="col-md-8">
        <div class="row text-center">
        	<?php
        	foreach ($offerdata as $data) {
    		?>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="service-item">
              <?php
            	if(!empty($data->offer_image))
            	{
            	?>            	
              	<img class="img img-fluid" src="<?=base_url('assets/admin/uploads/Offer/').$data->offer_image?>" style="width: 100px;height: 100px">
              <?php
	          }
	          ?>
              <h4><?=$data->offer_name?></h4>
              <p><?=$data->offer_description?></p>
            </div>
          </div><!-- END COL -->
          <?php
     	 }
      	?>
        </div>
      </div>
    </div>    <!-- End row -->
  </div>    <!-- End container -->
</section>   <!-- End section -->

<?php
}
?>
<!--
Start Call To Action
==================================== -->
<section class="call-to-action section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2>Let's Create Something Together</h2>
			<!--	<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin bibendum auctor, <br> nisi elit consequat ipsum, nesagittis sem nid elit. Duis sed odio sitain elit.</p>-->
				<a href="<?=base_url('Contact')?>" class="btn btn-main">Contact Us</a>
			</div>
		</div> 		<!-- End row -->
	</div>   	<!-- End container -->
</section>   <!-- End section -->

<!--
		Start Counter Section
		==================================== -->
		<?php
		foreach ($chooseus as $data) 
		{
			$happy_client=$data->happy_client;
			$project_completed=$data->project_completed;
		if(($happy_client!=0)OR($project_completed!=0))
		{
		?>
		<section  class="counter-wrapper section-sm" >
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="title">
							<h2>Why People choose JOG Digital Innovations</h2>
							<!-- <p>Vestibulum nisl tortor, consectetur quis imperdiet bibendum, laoreet sed arcu. Sed condimentum iaculis ex, in faucibus lorem accumsan non. Donec mattis tincidunt metus. Morbi sed tortor a risus luctus dignissim.</p> -->
						</div>
					</div>
					<?php
					if($data->happy_client!=0)
					{
						?>
					
					<!-- first count item -->
					<div class="col-md-6 col-sm-6 col-xs-6 text-center " >
						<div class="counters-item">
							<img src="<?=base_url('assets/images/logo/Happy_clients.png')?>" width="50" height="50">
							<div>
							   <span class="counter" data-count="<?=$data->happy_client?>"></span> <span>+</span> 
							</div>
							<h3>Happy Clients</h3>
						</div>
					</div>
					<!-- end first count item -->
					<?php
					}
					?>
						<?php
					if($data->project_completed!=0)
					{
						?>
					
					<!-- second count item -->
					<div class="col-md-6 col-sm-6 col-xs-6 text-center " >
						<div class="counters-item">
							<img src="<?=base_url('assets/images/logo/Projects_completed.png')?>" width="50" height="50">
							<div>
							  <span class="counter" data-count="<?=$data->project_completed?>"></span> <span>+</span> 
							</div>
							<h3>Projects completed</h3>
						</div>
					</div>
					<?php
				}
					?>
					
					<!-- end second count item -->
				
					<!-- third count item -->
					<!-- <div class="col-md-4 col-sm-6 col-xs-6 text-center "  >
						<div class="counters-item">
							<i class="tf-ion-ios-compose-outline"></i>
							<div>
							    <span class="counter" data-count="99">0</span>
							</div>
				            <h3>Positive feedback</h3>
							
						</div>
					</div> -->
					<!-- end third count item -->
					
					<!-- fourth count item -->
					<!-- <div class="col-md-3 col-sm-6 col-xs-6 text-center ">
						<div class="counters-item kill-border">
							<i class="tf-ion-ios-bolt-outline"></i>
							<div>
							    <span class="counter" data-count="250">0</span>
							</div>
							<h3>Cups of Coffee</h3>
						</div>
					</div> -->
					<!-- end fourth count item -->
				</div> 		<!-- end row -->
			</div>   	<!-- end container -->
		</section> 
		<?php
					}
				}
					?>  <!-- end section -->

<!-- Start Testimonial
=========================================== -->

<?php
if(!empty($testimonial))
{?>		
	<section class="testimonial section" id="testimonial">
		<div class="container">
			<div class="row">				
				<div class="col-lg-12">
					<!-- testimonial wrapper -->
					<div class="testimonial-slider">
						<!-- testimonial single -->
						<?php
					foreach ($testimonial as $test) {
					?>
						<div class="item text-center">
							<i class="tf-ion-chatbubbles"></i>
							<!-- client info -->
							<div class="client-details">
								<p><?=$test->test_profile?></p>
							</div>
							<!-- /client info -->
							<!-- client photo -->
							<div class="client-thumb">
								<img class="img-responsive" src="<?=base_url('assets/admin/uploads/testimonial/').$test->test_image?>" alt="<?=$test->test_name?>">
							</div>
							<div class="client-meta">
								<h3><?=$test->test_name?></h3>
								<span><?=$test->test_designation?></span>
							</div>
							<!-- /client photo -->
						</div>
						<!-- /testimonial single -->
					<?php
					}
					?>	
					</div>
				</div> 		<!-- end col lg 12 -->
			</div>	    <!-- End row -->
		</div>       <!-- End container -->
	</section>    <!-- End Section -->
<?php
}
?>
<!--
		Start Blog Section
		=========================================== -->
				
	<!-- <section class="blog" id="blog">
		<div class="container">
			<div class="row">
-->
				<!-- section title -->
			<!-- 	<div class="title text-center ">
					<h2> Latest <span class="color">Posts</span></h2>
					<div class="border"></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus facere accusamus, reprehenderit libero inventore nam.</p>
				</div> -->
				<!-- /section title -->
				<!-- single blog post -->
				<!-- <article class="col-md-4 col-sm-6 col-xs-12 clearfix " >
					<div class="post-item">
						<div class="media-wrapper">
							<img src="<?=base_url('assets/images/blog/post-1.jpg')?>" alt="amazing caves coverimage" class="img-responsive">
						</div>
						
						<div class="content">
							<h3><a href="single-post.html">Simple Image Post</a></h3>
							<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non skateboard dolor brunch.</p>
							<a class="btn btn-main" href="single-post.html">Read more</a>
						</div>
					</div>						
				</article> -->
				<!-- /single blog post -->
				
				<!-- single blog post -->
				<!-- <article class="col-md-4 col-sm-6 col-xs-12 "  >
					<div class="post-item">
						<div class="media-wrapper">
							<img src="<?=base_url('assets/images/blog/post-2.jpg')?>" alt="amazing caves coverimage" class="img-responsive">
						</div>
						
						<div class="content">
							<h3><a href="single-post.html">Simple Image Post</a></h3>
							<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non skateboard dolor brunch.</p>
							<a class="btn btn-main" href="single-post.html">Read more</a>
						</div>
					</div>						
				</article> -->
				<!-- end single blog post -->
				
				<!-- single blog post -->
				<!-- <article class="col-md-4 col-sm-6 col-xs-12 "  >
					<div class="post-item">
						<div class="media-wrapper">
							<img src="<?=base_url('assets/images/blog/post-3.jpg')?>" alt="amazing caves coverimage" class="img-responsive">
						</div>
						
						<div class="content">
							<h3><a href="single-post.html">Simple Image Post</a></h3>
							<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non skateboard dolor brunch.</p>
							<a class="btn btn-main" href="single-post.html">Read more</a>
						</div>
					</div>						
				</article> -->
				<!-- end single blog post -->
			<!-- </div> --> <!-- end row -->
		<!-- </div> --> <!-- end container -->
	<!--</section> --> <!-- end section -->

