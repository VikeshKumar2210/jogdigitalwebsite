<script>
$(document).ready(function() { 

      $(".About").addClass("active");
});
</script>
<style type="text/css">
	.aboutimg
	{
		width: 100%;
		max-height: 300px;
	}
	h2
	{
		color:#133b55 !important;
	}
	.single-page-header
	{
		background-image: url("<?=base_url('assets/images/slide/About-Us.jpg')?>");
	}
	
</style>
<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 style="color:white !important">About Us</h2>
				<ol class="breadcrumb header-bradcrumb">
				  <li><a href="<?=base_url('Home')?>">Home</a></li>
				  <li class="active">About Us</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<section class="about-shot-info section-sm">
	<div class="container">
		<div class="row">
			<?php
			$i=1;
			foreach ($aboutdata as $about)
			{
			if($i==1)
			{
				if(!empty($about->about_image))
				{
				?>
					<div class="col-md-12 mt-20">
						<img class="img-responsive aboutimg" src="<?=base_url('assets/admin/uploads/About/').$about->about_image?>" alt="about_image">
					</div>
				<?php
				}
				?>
				<div class="col-md-12">
					<h2><?=$about->about_title?></h2>
					<?=$about->about_content?>
				</div>
			<?php
				}
				$i++;
			}
			?>
		</div>
	</div>
</section>

<section class="company-mission section-sm ">
	<div class="container">
		<div class="row">
			<?php
				$i=1;
				foreach ($aboutdata as $about) {
					if($i>1 && $i<=3)
					{
						?>
						
					<div class="col-md-6">
						<?php
						if(!empty($about->about_image))
						{
						?>
						<img class="img-responsive mt-30" src="<?=base_url('assets/admin/uploads/About/').$about->about_image?>" alt="">
							<?php
						}?>
						<h2 class="text-center"><?=$about->about_title?></h2>
						<?=$about->about_content?>
						
					</div>
					<?php
				}
				$i++;
			}
			?>
		</div>
	</div>
</section>


<!-- Start Our Team
		=========================================== -->
			<?php
				if(!empty($ourteam))
				{?>
	<section class="team" id="team">
		<div class="container">
			<div class="row">
			
				<!-- section title -->
			
				<div class="title text-center " >
					<h2>Our Team</h2><!-- 
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque quasi tempora obcaecati, quis similique quos.</p> -->
					<div class="border"></div>
				</div>
				<!-- /section title -->
				
				<!-- team member -->
				<?php
					foreach ($ourteam as $team) {
					?>
					<div class="col-md-4 col-sm-6 " >
		               <div class="team-member text-center">
							<div class="member-photo">
								<!-- member photo -->
								<img class="img-responsive" src="<?=base_url('assets/admin/uploads/team/').$team->team_image?>" alt="<?=$team->team_name?>">
								<!-- /member photo -->
								
								<!-- member social profile -->
								<!-- <div class="mask">
									<ul class="clearfix">
										<li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
										<li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
										<li><a href="#"><i class="tf-ion-social-google-outline"></i></a></li>
										<li><a href="#"><i class="tf-ion-social-dribbble"></i></a></li>
									</ul>
								</div> -->
								<!-- /member social profile -->
							</div>
							
							<!-- member name & designation -->
							<div class="member-content">
								<h3><?=$team->team_name?></h3>
								<span><?=$team->team_designation?></span>
								<p><?=$team->team_profile?></p>
							</div>
							<!-- /member name & designation -->
						</div>
		            </div>
		            <?php
		        	}
		        ?>
				<!-- end team member -->
				
				<!-- team member -->
			
				<!-- end team member -->
			</div>  	<!-- End row -->
		</div>   	<!-- End container -->
	</section>   <!-- End section -->
<?php
}
?>
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
		<section  class="counter-wrapper section-sm bg-gray mt-20" >
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="title">
							<h2 >Why People choose Etechify Solutions</h2>
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

<!--
Start Call To Action
==================================== -->
<section class="call-to-action section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2 style="color:white !important">Let's Create Something Together</h2>
				<!--<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin bibendum auctor, <br> nisi elit consequat ipsum, nesagittis sem nid elit. Duis sed odio sitain elit.</p>-->
				<a href="<?=base_url('Contact')?>" class="btn btn-main">Contact Us</a>
			</div>
		</div> 		<!-- End row -->
	</div>   	<!-- End container -->
</section>   <!-- End section -->
