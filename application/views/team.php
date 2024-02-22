<script>
$(document).ready(function() { 
    $(".Team").addClass("active");
});
</script>
<!--
End Fixed Navigation
==================================== -->

<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Our Team</h2>
				<ol class="breadcrumb header-bradcrumb">
				  <li><a href="<?=base_url('Home')?>">Home</a></li>
				  <li class="active">Our Team</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<?php
if(!empty($ourteam))
{?>
	<section class="team" id="team">
		<div class="container">
			<div class="row">
			
				<!-- section title -->
			
				<div class="title text-center " >
					<h2>Our Team</h2>
					<!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque quasi tempora obcaecati, quis similique quos.</p>-->
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

<<!--
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
							<i class="tf-ion-ios-alarm-outline"></i>
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
							<i class="tf-ion-ios-analytics-outline"></i>
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