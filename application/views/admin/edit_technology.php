<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Edit Technology</h3>
      </div>

    </div>

    <div class="clearfix"></div>

    <div class="row">
      <!-- form input mask -->
      <div class="col-md-8 offset-md-2 col-sm-12  ">
        <div class="x_panel">
          <div class="x_title">
            <h2>Edit Technology Form</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            <?php
            foreach ($techdata as $data) 
            {
              ?>
            <form class="form-horizontal form-label-left" id="tech_form">
              <input type="hidden" name="tech_id" value="<?=$data['tech_id']?>" class="form-control">
               <input type="hidden" name="old_image" value="<?=$data['tech_image']?>" class="form-control">
             
                <div class="form-group row">
                <label class="control-label col-md-2 col-sm-3 col-xs-3">Old Image</label>
                <div class="col-md-9 col-sm-9 col-xs-9">
                  <img class="img-responsive" src="<?=base_url('assets/admin/uploads/Technology/').$data['tech_image']?>" style="height:50px">
                </div>
              </div>
              <div class="form-group row">
                <label class="control-label col-md-2 col-sm-3 col-xs-3">New Image</label>
                <div class="col-md-9 col-sm-9 col-xs-9">
                  <input type="file" name="images"  class="form-control">
                </div>
              </div>
               <div class="form-group row">
                <label class="control-label col-md-2 col-sm-3 col-xs-3">Technology Name</label>
                <div class="col-md-9 col-sm-9 col-xs-9">
                  <input type="text" name="tech_name" value="<?=$data['tech_name']?>" class="form-control">
                </div>
              </div>

              <div class="ln_solid"></div>

              <div class="form-group row">
                <div class="col-md-8 offset-md-3 text-right">
                  <!-- <button type="" class="btn btn-primary">Cancel</button> -->
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>
              </div>
            </form>
             <?php
             }
            ?>
          </div>
        </div>
      </div>
      <!-- /form input mask -->

    </div>
                <!-- /image cropping -->
  </div>
</div>
        <!-- /page content -->
<script type="text/javascript">
$("#tech_form").submit(function(e){
        e.preventDefault();
        var formData= new FormData($(this)[0]);
        $.ajax({
            url:"<?=base_url('admin/Technology/updatedata')?>",
             type:"post",
             data:formData,
             contentType:false,
             processData:false,
             cache:false,
            success:function(response)
            {
              var response=JSON.parse(response); 
              if(response.status==1){
               alert(response.msg);
               location.reload();
              }
              else if(response.status=="0"){
                alert(response.msg);
              }
            }
        });
    });
</script>