
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
            <h2>View Team list</h2>
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
                  <table id="datatable-buttons" class="table table-striped table-bordered w-100">
                    <thead>
                      <tr>
                        <th class="text-center">Sr No.</th>
                        <th class="text-center">Member_Name</th>                     
                        <th class="text-center">Member_Designation</th>
                        <th class="text-center">Member_profile</th>
                        <th class="text-center">Member_image</th>
                        <th class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $count=1;
                      foreach ($teamdata as $data) {
                        ?>
                      <tr>
                        <td class="text-center"><?=$count?></td>
                        <td class="text-center"><?=$data->team_name?></td>
                        <td class="text-center"><?=$data->team_designation?></td>
                        <td class="text-center"><?=$data->team_profile?></td>
                          <td class="text-center"><img class="img-responsive" src="<?=base_url('assets/admin/uploads/team/').$data->team_image?>" style="height:50px"></td>
                        <td class="text-center"><a class="btn btn-danger" id="teamdelete" team_id="<?=$data->team_id?>" image_name="<?=$data->team_image?>" href="javascript:void(0)">Delete</a></td>
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
  $(document).on("click","#teamdelete",function(){
    var ele =$(this);
    if (confirm("Are you sure?")) 
    {
     var team_id =ele.attr("team_id");
     var image_name=ele.attr("image_name");
     $.ajax({
            url:"<?=base_url('admin/Team/deleteteam')?>",
             type:"post",
             data:{team_id:team_id,image_name:image_name},
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