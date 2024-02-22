<script>
$(document).ready(function() { 
      $(".Service").addClass("active");
});
</script>
<!--
End Fixed Navigation
==================================== -->
<style type="text/css">
	.service-item:hover>p
	{
		color: white
	}
	.service-item:hover
	{
		background: #133b55;
		color: white;
	}
	.service-item
	{
		height:250px !important;
	}
	p
	{
		text-align: center !important;
	}
	.single-page-header
	{
		background-image: url("<?=base_url('assets/images/slide/Our-Services.jpg')?>");
	}
</style>
<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Our Services</h2>
				<ol class="breadcrumb header-bradcrumb">
				  <li><a href="<?=base_url('Home')?>">Home</a></li>
				  <li class="active">Our Services</li>
				</ol>
			</div>
		</div>
	</div>
</section>


<!-- Start Services Section
		==================================== -->
<section class="service-2 section">
  <div class="container">
    <div class="row">

      <!-- section title -->
      <div class="title text-center"  >
        <h2 >Our Services</h2>
       
        <div class="border"></div>
      </div>
      <!-- /section title -->
      <div class="col-md">
        <div class="row text-center">
        	<?php
        	foreach($servicedata as $data)
        	{
        	?>
        	<a  href="<?=base_url()?>viewservices/<?=$data->service_id?>">
	          <div class="col-md-6  col-sm-6 col-xs-12">
	            <div class="service-item">
					<img src="<?=base_url('assets/admin/uploads/Service/Icons/').$data->icon?>" width="50" height="50">
	              <h4><?=$data->services?></h4>
	              <p><?=$data->brief?></p>
	            </div>
	          </div><!-- END COL -->
	      </a>
          	<?php
      		}
      		?>
        </div>
      </div>
    </div>    <!-- End row -->
  </div>    <!-- End container -->
</section>
 <!-- End section -->

<!--
Start Call To Action
==================================== -->
<section class="call-to-action section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2>Let's Create Something Together</h2>
				<!--<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin bibendum auctor, <br> nisi elit consequat ipsum, nesagittis sem nid elit. Duis sed odio sitain elit.</p>-->
				<a href="<?=base_url('Contact')?>" class="btn btn-main">Contact Us</a>
			</div>
		</div> 		<!-- End row -->
	</div>   	<!-- End container -->
</section>   <!-- End section -->

<!-- Start Team Skills
		=========================================== -->
		
	<!-- 	<section class="team-skills section-sm" id="skills">
			<div class="container">
				<div class="row">
				 -->
					<!-- section title -->
				<!-- 	<div class="title text-center">
						<h2>Our Skills</h2> -->
						<!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus fugiat, vel veniam, eos et delectus eveniet molestiae. Esse, voluptas ratione.</p>-->
						<!-- <div class="border"></div>
					</div> -->
					<!-- /section title -->
					
				<!-- 	<div class="col-md-5">
						<div class="team-skills-content">
							<h2>Simple To Start</h2>
							<p>Vestibulum nisl tortor, consectetur quis imperdiet bium, letcu. Sedndime ntumiaculis ex, in faucibus lorem accumsan non. Donec mattis tin unt metuorbi sed tort Igor aman luctus dignissim. Vestibulum nisl tortor, consectetur quis imperdiet bium, letcu. Sedndime ntumiaculis ex, in faucibus lorem accumsan non.</p>
							<a href="<?=base_url('Contact')?>" class="btn btn-main mt-20">Contact Us</a>
						</div>
					</div> -->
					<!-- <div class="col-md-6 col-md-offset-1">
						<div class="progress-block">
							<ul>
								<li>
									<span>Photoshop</span>
									<div class="progress">
										<div class="progress-bar" style="width: 90%;">
									    </div>
									</div>
								</li>
								<li>
									<span>Web Application</span>
									<div class="progress">
										<div class="progress-bar" style="width: 85%;">
									    </div>
									</div>
								</li>
								<li>
									<span>Andriod Application</span>
									<div class="progress">
										<div class="progress-bar" style="width: 92%;">
									    </div>
									</div>
								</li>
								<li>
									<span>IOS Development</span>
									<div class="progress">
										<div class="progress-bar" style="width: 78%;">
									    </div>
									</div>
								</li>
							</ul>
							
						</div>
					</div>
				</div>  		 --><!-- End row -->
		<!-- 		
			</div>   --> 
				<!-- End container -->
	<!-- 	</section>  --> 
	 <!-- End section -->

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
							<h2>Why People choose Vision Technosoft</h2>
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