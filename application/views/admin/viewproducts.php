
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
            <h2>View Products list</h2>
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
                        <th class="text-center">Icon</th>    
                        <th class="text-center">products</th>  
                         <th class="text-center">Brief</th>  
                        <th class="text-center">Product images</th>                   
                        <th class="text-center">Description</th>                    
                        <th class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $count=1;
                      foreach ($productdata as $data) {
                        ?>
                      <tr>
                        <td class="text-center"><?=$count?></td>
                         <td class="text-center"><img class="img-responsive" src="<?=base_url('assets/admin/uploads/Product/Icons/').$data->icon?>" style="height:50px"></td>
                        <td class="text-center"><?=$data->products?></td>
                         <td class="text-center"><?=$data->brief?></td>
                         <td class="text-center"><img class="img-responsive" src="<?=base_url('assets/admin/uploads/Product/').$data->product_image?>" style="height:50px"></td>
                        <td class="text-center"><?=$data->description?></td>
                       <td class="text-center d-flex justify-content-center"><form method="post" action="<?=base_url('admin/Products/editproducts')?>">  <input type="hidden" name="product_id" value="<?=$data->product_id?>" class="form-control"><button type="submit" class="btn btn-primary">Edit</button></form><a class="btn btn-danger" id="productdelete" product_id="<?=$data->product_id?>" image_name="<?=$data->product_image?>" href="javascript:void(0)">Delete</a></td>
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
  $(document).on("click","#productdelete",function(){
    var ele =$(this);
    if (confirm("Are you sure?")) 
    {
     var product_id =ele.attr("product_id");
     var image_name=ele.attr("image_name");
     $.ajax({
            url:"<?=base_url('admin/Products/deleteproducts')?>",
             type:"post",
             data:{product_id:product_id,image_name:image_name},
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