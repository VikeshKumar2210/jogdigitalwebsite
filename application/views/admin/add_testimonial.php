<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Add Testimonial</h3>
      </div>

    </div>

    <div class="clearfix"></div>

    <div class="row">
      <!-- form input mask -->
      <div class="col-md-8 offset-md-2 col-sm-12  ">
        <div class="x_panel">
          <div class="x_title">
            <h2>Testimonial Form</h2>
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
            <form class="form-horizontal form-label-left" id="test_form">
              <div class="form-group row">
                <label class="control-label col-md-2 col-sm-3 col-xs-3">Name</label>
                <div class="col-md-9 col-sm-9 col-xs-9">
                  <input type="text" name="name" class="form-control">
                </div>
              </div>
              <div class="form-group row">
                <label class="control-label col-md-2 col-sm-3 col-xs-3">Designation</label>
                <div class="col-md-9 col-sm-9 col-xs-9">
                  <input type="text" name="designation" class="form-control">
                </div>
              </div>
              <div class="form-group row">
                <label class="control-label col-md-2 col-sm-3 col-xs-3">Profile</label>
                <div class="col-md-9 col-sm-9 col-xs-9">
                  <input type="text" name="profile" class="form-control">
                </div>
              </div>
               <div class="form-group row">
                <label class="control-label col-md-2 col-sm-3 col-xs-3">Profile Images</label>
                <div class="col-md-9 col-sm-9 col-xs-9">
                  <input type="file" name="images" class="form-control">
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
$("#test_form").submit(function(e){
        e.preventDefault();
        var formData= new FormData($(this)[0]);
        $.ajax({
            url:"<?=base_url('admin/Testimonial/insertdata')?>",
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