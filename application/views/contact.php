<script>
$(document).ready(function() { 
      $(".Contact").addClass("active");
});
</script>
<style type="text/css">
	.social-links
	{
		margin-bottom: 10px;
		margin-top: 10px;
	}
	.single-page-header
	{
		background-image: url("<?=base_url('assets/images/slide/Contact-Us.jpg')?>");
	}
</style>
<!--
End Fixed Navigation
==================================== -->

<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Contact Us</h2>
				<ol class="breadcrumb header-bradcrumb">
				  <li><a href="<?=base_url('Home')?>">Home</a></li>
				  <li class="active">Contact Us</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<!-- Srart Contact Us
		=========================================== -->		
	<section class="contact-us" id="contact">
		<div class="container">
			<div class="row">
				
				<!-- section title -->
				<div class="title text-center" >
					<h2>Get In Touch</h2>
					<!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate facilis eveniet maiores ab maxime nam ut numquam molestiae quaerat incidunt?</p>-->
					<div class="border"></div>
				</div>
				<!-- /section title -->
				
				<!-- Contact Details -->
				<div class="contact-details col-md-6 " >
					<h3>Contact Details</h3>
					<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, vero, provident, eum eligendi blanditiis ex explicabo vitae nostrum facilis asperiores dolorem illo officiis ratione vel fugiat dicta laboriosam labore adipisci.</p>-->
					<ul class="contact-short-info" >
						<?php
						foreach ($contactdata as $key) {
						?>
						<li>
							<i class="tf-ion-ios-home"></i>
							<span><?=$key->contact_address?></span>
						</li>
						<li>
							<i class="tf-ion-android-phone-portrait"></i>
							<span>Phone: <?=$key->contact_phone?></span>
						</li>
						<li>
							<i class="tf-ion-android-mail"></i>
							<span>Email: <?=$key->contact_email?></span>
						</li>
						
					</ul>
					<div class="social-links">
		              <a target="_blank" href="<?=$key->twitter?>" class="twitter"><i class="fa fa-twitter"></i></a>
		              <a target="_blank" href="<?=$key->facebook?>" class="facebook"><i class="fa fa-facebook"></i></a>
		              <a target="_blank" href="<?=$key->instagram?>" class="instagram"><i class="fa fa-instagram"></i></a>
		              <a target="_blank" href="<?=$key->youtube?>" class="youtube"><i class="fa fa-youtube"></i></a>
		              <a target="_blank" href="<?=$key->linkedin?>" class="linkedin"><i class="fa fa-linkedin"></i></a>
		            </div>
		            <?php
						}?>
					<!-- Footer Social Links -->
					<!-- <div class="social-icon">
						<ul>
							<li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
							<li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
							<li><a href="#"><i class="tf-ion-social-dribbble-outline"></i></a></li>
							<li><a href="#"><i class="tf-ion-social-linkedin-outline"></i></a></li>
						</ul>
					</div> -->
					<!--/. End Footer Social Links -->
				</div>
				<!-- / End Contact Details -->
					
				<!-- Contact Form -->
				<div class="contact-form col-md-6 " >
					<form id="contact-form" role="form">
					
						<div class="form-group">
							<input type="text" placeholder="Your Name" class="form-control" name="name" id="name" required="">
						</div>
						<div class="form-group">
							<input type="text" placeholder="Your Phone" class="form-control" name="phone" id="phone" minlength="10" maxlength="10" title="Invalid Input">
						</div>
						<div class="form-group">
							<input type="email" placeholder="Your Email" class="form-control" name="email" id="email"  required="">
						</div>
						
						<div class="form-group">
							<input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
						</div>
						
						<div class="form-group">
							<textarea rows="6" placeholder="Message" class="form-control" name="message" id="message" required=""></textarea>	
						</div>
						
						<div id="mail-success" class="success">
							Your Mail is Successfully Sent
						</div>
						
						<div id="mail-fail" class="error">
							Failed to sent the Mail
						</div>
						
						<button type="submit"  class="btn btn-lg btn-primary">Submit</button>
						
					<!-- 	<div id="cf-submit">
							<input type="submit" id="contact-submit" class="btn btn-transparent" value="Submit">
						</div>		 -->				
						
					</form>
				</div>
				<!-- ./End Contact Form -->
			
			</div> <!-- end row -->
		</div> <!-- end container -->
	</section> <!-- end section -->
<script type="text/javascript">
$("#contact-form").submit(function(e){
        e.preventDefault();
        var formData = new FormData($(this)[0]);
        // for (var value of formData.values()) {
        //    console.log(value); 
        // }
         // var data = CKEDITOR.instances.editor1.getData();
         // formData.append('content', data);
        $.ajax({
            url:"<?=base_url('Contact/sendmail')?>",
             type:"post",
             data:formData,
             contentType:false,
             processData:false,
             cache:false,
            success:function(response)
            {
               var response=JSON.parse(response);
                console.log(response);
            //   if(response.status==1){
            //     $('#mail-success').show();
            //     alert(response.msg);
            //     location.reload();
            //   }
            //   else
            //   {
            //   $('#mail-fail').show();
            //   location.reload();
            //   }
            }
        });
    });
</script>