<script>
$(document).ready(function() { 

      // remove classes from all
      // $("li").removeClass("active");
      // add class to the one we clicked
      $(".Media").addClass("active");
       $('#example').DataTable();
});
</script>
<style type="text/css">
	.dataTables_filter
	{
		float: right !important;
	}
	.paging_simple_numbers
	{
		float: right;
	}
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
</style>
<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Media Room</h2>
				<ol class="breadcrumb header-bradcrumb">
				  <li><a href="<?=base_url('Home')?>">Home</a></li>
				  <li class="active">Media Room</li>
				</ol>
			</div>
		</div>
	</div>
</section>


<section class="company-mission section-sm">
	<div class="container">
		<div class="row">
		<?php
		foreach ($mediadata as $data) {
			?>
			<h1><?=$data->release_title?></h1>
			<?php
			if(!empty($data->media_pics))
			{
				?>
			<div class="images"><img class="img img-responsive" src="<?=base_url('assets/admin/uploads/Media/').$data->media_pics?>"></div>
			<?php
			}
			?>
			<h5><?=$data->release_date?></h5>
			<div><?=$data->description?></div>
		<?php
		}
		?>
		</div>
		<div class="row pull-right">
			<a  href="<?=base_url('Media')?>" class="btn btn-primary">Back</a>
		</div>
	</div>
</section>


