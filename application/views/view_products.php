<script>
$(document).ready(function() { 

      // remove classes from all
      // $("li").removeClass("active");
      // add class to the one we clicked
      $(".Product").addClass("active");
});
</script>

<section class="single-page-header">
	<!-- <div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Product</h2>
				<ol class="breadcrumb header-bradcrumb">
				  <li><a href="<?=base_url('Home')?>">Home</a></li>
				  <li class="active">Product</li>
				</ol>
			</div>
		</div>
	</div> -->
</section>


<section class="company-mission section-sm">
	<div class="container">
		<div class="row">
		<?php
		foreach ($productsdata as $data) {
			?>
			<h1><?=ucfirst($data->products)?></h1>
			<div><?=$data->description?></div>
		<?php
			if(!empty($data->product_image))
			{
				$imagesrc=base_url()."assets/admin/uploads/Product/".$data->product_image;	
			}
			else
			{
				$imagesrc=base_url()."assets/images/slide/Our-Services.jpg";
			}
		}
		?>
		</div>
		<div class="row pull-right">
			<a  href="<?=base_url('Products')?>" class="btn btn-primary">Back</a>
		</div>
	</div>
</section>



<style type="text/css">
		.images
	{
		display: flex;
		justify-content: center;
	}
	.images>img
	{
		max-height: 300px;
	}
	.row
	{
		padding:0px 10px;
	}
.single-page-header
{
background-image: url("<?=$imagesrc?>") !important;
background-size: cover !important;
min-height: 350px !important;
}
.single-page-header:before {
    background: rgba(0, 0, 0, 0) !important;
  }
</style>