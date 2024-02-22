<script>
$(document).ready(function() { 
      $(".Portfolio").addClass("active");
});
</script>
<style type="text/css">
	.portfolio-block>img
	{
		width: 100%;
		min-height: 308px;
	}
	@media only screen and (max-width: 600px) 
	{
		.portfolio-block>img
		{
			width: 100%;
			min-height: 150px;
			max-height: 150px;
		}
	}
	.service-item:hover h4
	{
	   color: #133b55;
	}
		.single-page-header
	{
		background-image: url("<?=base_url('assets/images/slide/Portfolio.jpg')?>");
	}
</style>
<!--
End Fixed Navigation
==================================== -->

<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Portfolio</h2>
				<ol class="breadcrumb header-bradcrumb">
				  <li><a href="<?=base_url('Home')?>">Home</a></li>
				  <li class="active">Portfolio</li>
				</ol>
			</div>
		</div>
	</div>
</section>
<?php
if(!empty($techdata))
{?>
<!--
Start About Section
==================================== -->
<section class="service-2 section">
  <div class="container">
    <div class="row">

      <!-- section title -->
      <div class="title text-center"  >
        <h2>Technologies we use</h2>
       
        <div class="border"></div>
      </div>
      <!-- /section title -->
      <div class="col-md">
        <div class="row text-center">
        	<?php
        	foreach($techdata as $data)
        	{
        	?>
	          <div class="col-md-3 col-sm-6 col-xs-12">
	            <div class="service-item">
	            	<?php
	            	if(!empty($data->tech_image))
	            	{
	            	?>            	
	              	<img class="img img-fluid" src="<?=base_url('assets/admin/uploads/Technology/').$data->tech_image?>" style="width: 100px;height: 100px">
	              <?php
		          }
		          ?>
	              <h4><?=$data->tech_name?></h4>
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
<!-- Start Portfolio Section
		=========================================== -->
		
		<section class="portfolio section-sm" id="portfolio">
			<div class="container-fluid">
				<div class="row " >
					<div class="col-lg-12">
					
						<!-- section title -->
						<div class="title text-center">
							<h2>Our Works</h2>
						<!--	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, veritatis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, vitae? </p>-->
							<div class="border"></div>
						</div>
						<!-- /section title -->

						<div class="portfolio-filter">
							<button type="button" data-filter="all">All</button>
							<?php
							foreach ($port_category as $key) {
								?>
								<button type="button" data-filter=".<?=$key->portcat_name?>"><?=$key->portcat_name?></button>
							<?php
							}
							?>
							<!-- <button type="button" data-filter=".photography">Photography</button>
							<button type="button" data-filter=".ios">IOS App</button>
							<button type="button" data-filter=".development">Development</button>
							<button type="button" data-filter=".design">Design</button> -->
						</div>

						

					
						<div class="portfolio-items-wrapper">
							<div class="row">
								<?php
								foreach ($portfolio as $data) {
								?>
								<div class="col-md-3 col-sm-6 col-xs-6 mix <?=$data->portcat_name?>" >
							    	<div class="portfolio-block">
							    		<img class="img-responsive" src="<?=base_url('assets/admin/uploads/Portfolio/').$data->port_image?>" alt="">
							    		<div class="caption">
							    			<div style="display: flex;justify-content: center;">
							    			<a class="search-icon" href="<?=base_url('assets/admin/uploads/Portfolio/').$data->port_image?>" data-lightbox="image-1">
							    				<i class="tf-ion-ios-search-strong" style="width:10px"></i>
								    		</a>
							    			<a class="search-icon" target="_blank" href="<?=$data->port_url?>">
							    				<i class="tf-ion-navigate" style="width:10px"></i>
								    		</a>
								    		</div>								    		
							    			<h4><a href="<?=$data->port_url?>"><?=$data->port_name?></a></h4>
							    		</div>
							    	</div>
							    </div>
							    	<?php
									}
									?>
							</div>
						</div>
						
					</div> <!-- /end col-lg-12 -->
				</div> <!-- end row -->
			</div>	<!-- end container -->
		</section>   <!-- End section -->

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