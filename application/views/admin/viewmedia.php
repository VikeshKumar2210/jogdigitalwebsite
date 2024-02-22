
        <!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <!-- <div class="title_left">
        <h3>View About US list</h3>
      </div> -->
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="x_title">
            <h2>View Press Release list</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="row">
              <div class="col-sm-12">
                <div class="card-box table-responsive">
                  <table id="datatable" class="table table-striped table-bordered w-100">
                    <thead>
                      <tr>
                        <th class="text-center">Sr No.</th>
                        <th class="text-center">Press Release Title</th>   
                        <th class="text-center">Photo</th>                   
                        <th class="text-center">Description</th>        
                        <th class="text-center">Release Date</th>               
                        <th class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $count=1;
                      foreach ($mediadata as $data) {
                        ?>
                      <tr>
                        <td class="text-center"><?=$count?></td>
                        <td class="text-center"><?=$data->release_title?></td>
                          <td class="text-center"><img class="img-responsive" src="<?=base_url('assets/admin/uploads/Media/').$data->media_pics?>" style="height:50px"></td>
                        <td class="text-center"><?=$data->description?></td>
                        <td class="text-center"><?=$data->release_date?></td>
                       <td class="text-center d-flex justify-content-center"><form method="post" action="<?=base_url('admin/Media/editmedia')?>">  <input type="hidden" name="media_id" value="<?=$data->media_id?>" class="form-control"><button type="submit" class="btn btn-primary">Edit</button></form><a class="btn btn-danger" id="mediadelete" media_id="<?=$data->media_id?>" image_name="<?=$data->media_pics?>" href="javascript:void(0)">Delete</a></td>
                      </tr>
                    <?php
                    $count++;
                     }
                    ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>

 
        <!-- /page content -->

<script type="text/javascript">
  $(document).on("click","#mediadelete",function(){
    var ele =$(this);
    if (confirm("Are you sure?")) 
    {
     var media_id =ele.attr("media_id");
      var image_name=ele.attr("image_name");
     $.ajax({
            url:"<?=base_url('admin/Media/deletemedia')?>",
             type:"post",
             data:{media_id:media_id,image_name:image_name},
             cache:false,

            success:function(response)
            {
              console.log(response);
              response=JSON.parse(response);
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
    }
    
  }) 
</script>