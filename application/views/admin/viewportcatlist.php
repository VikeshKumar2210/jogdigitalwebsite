
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
            <h2>View Portfolio Category list</h2>
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
                        <th>Sr No.</th>                 
                        <th>Portfolio category Name</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                       <?php
                      $count=1;
                      foreach ($portcatdata as $data) {
                        ?>
                      <tr>
                        <td><?=$count?></td>
                        <td><?=$data->portcat_name?></td>
                   <!--      <td><a class="btn btn-danger" id="portcatdelete" about_id="<?=$data->port_id?>" href="javascript:void(0)">Deactive</a></td> -->
                        <td><a class="btn btn-danger" id="portcatdelete" portcat_id="<?=$data->portcat_id?>" href="javascript:void(0)">Delete</a></td>
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
  $(document).on("click","#portcatdelete",function(){
    var ele =$(this);
    if (confirm("Are you sure?")) 
    {
     var portcat_id =ele.attr("portcat_id");
     $.ajax({
            url:"<?=base_url('admin/Portfolio/deleteportfoliocat')?>",
             type:"post",
             data:{portcat_id:portcat_id},
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
