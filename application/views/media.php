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
	.row
	{
		padding: 0px 10px;
	}
		.single-page-header
	{
		background-image: url("<?=base_url('assets/images/slide/Media-Room.jpg')?>");
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
<!-- <section class="about-shot-info section-sm">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-20">
				<h2>Media Room</h2>
				<p>Lorems ipsum dolor sit amet, consectetur adipisicing elit. Facere in suscipit voluptatum totam dolores assumenda vel, quia earum voluptatem blanditiis vero accusantium saepe aliquid nulla nemo accusamus, culpa inventore! Culpa nemo aspernatur tenetur, at quam aliquid reprehenderit obcaecati dicta illum mollitia, perferendis hic, beatae voluptates? Ex labore, obcaecati harum nam.</p>
			</div>
		</div>
	</div>
</section> -->

<section class="company-mission section-sm">
	<div class="container">
		<div class="row">
			<div class="table table-responsive">
			<table id="example" class="table table-striped table-bordered" style="width:100%">
				<h2>Press Release</h2>
        <thead>
            <tr>
                <th>Date</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        	<?php
        	foreach ($mediadata as $data) {
        		?>
            <tr>           
                <td><?=$data->release_date?></td>
                <td><a href="<?=base_url()?>viewdatas/<?=$data->media_id?>"><?=$data->release_title?></a></td>        
            </tr>
            <?php
        }
        ?>
        </tbody>
    <!--     <tfoot>
            <tr>
                <th>Date</th>
                <th></th>
            </tr>
        </tfoot> -->
    </table>
    </div>
		</div>
	</div>
</section>


