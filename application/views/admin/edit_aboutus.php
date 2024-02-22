<!-- page abtent -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Edit About Us</h3>
      </div>

    </div>

    <div class="clearfix"></div>

    <div class="row">
      <!-- form input mask -->
      <div class="col-md-8 offset-md-2 col-sm-12  ">
        <div class="x_panel">
          <div class="x_title">
            <h2>Edit About Us Form</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_abtent">
            <br />
            <?php
            foreach ($aboutdata as $abt) 
            {
              ?>
            <form class="form-horizontal form-label-left" id="about_form">
              <input type="hidden" name="about_id" value="<?=$abt->about_id?>" class="form-abtrol">
               <input type="hidden" name="old_images" value="<?=$abt->about_image?>" class="form-abtrol">
              <div class="form-group row">
                <label class="control-label col-md-2 col-sm-3 col-xs-3">Title</label>
                <div class="col-md-9 col-sm-9 col-xs-9">
                  <input type="text" name="title" value="<?=$abt->about_title?>" class="form-control">
                </div>
              </div>
              <div class="form-group row">
                <label class="control-label col-md-2 col-sm-3 col-xs-3">Old Image</label>
                <div class="col-md-9 col-sm-9 col-xs-9">
                  <img class="img-responsive" src="<?=base_url('assets/admin/uploads/About/').$abt->about_image?>" style="height:50px">
                </div>
              </div>
              <div class="form-group row">
                <label class="control-label col-md-2 col-sm-3 col-xs-3">New Image</label>
                <div class="col-md-9 col-sm-9 col-xs-9">
                  <input type="file" name="images" class="form-control">
                </div>
              </div>
              <div class="form-group row">
                <label class="control-label col-md-2 col-sm-3 col-xs-3">Content</label>
                <div class="col-md-9 col-sm-9 col-xs-9">
                  <textarea name="content" id="editor1" class="form-control" required="required"><?=$abt->about_content?></textarea>
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
        <!-- /page abtent -->

<script type="text/javascript">
$("#about_form").submit(function(e){
        e.preventDefault();
        var formData = new FormData($(this)[0]);
        // for (var value of formData.values()) {
        //    console.log(value); 
        // }
         var data = CKEDITOR.instances.editor1.getData();
         formData.append('content', data);
        $.ajax({
            url:"<?=base_url('admin/About/updatedata')?>",
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
              else
              {
                alert(response.msg);
              }
            }
        });
    });
</script>