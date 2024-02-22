
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
            <h2>View Contact Detail list</h2>
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
                        <th class="text-center">Address</th>                     
                        <th class="text-center">Phone No</th>                    
                        <th class="text-center">Email ID</th>
                        <th class="text-center">Facebook ID</th>
                        <th class="text-center">Twitter ID</th>
                        <th class="text-center">Youtube ID</th>
                        <th class="text-center">Instagram ID</th>
                        <th class="text-center">LinkedinID</th>
                        <th class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $count=1;
                      foreach ($contactdata as $data) {
                        ?>
                      <tr>
                        <td class="text-center"><?=$count?></td>
                        <td class="text-center"><?=$data->contact_address?></td>
                        <td class="text-center"><?=$data->contact_phone?></td>
                        <td class="text-center"><?=$data->contact_email?></td>
                        <td class="text-center"><?=$data->facebook?></td>
                        <td class="text-center"><?=$data->twitter?></td>
                        <td class="text-center"><?=$data->youtube?></td>
                        <td class="text-center"><?=$data->instagram?></td>
                        <td class="text-center"><?=$data->linkedin?></td>
                       <form method="post" action="<?=base_url('admin/Contactdetails/index')?>"> <td class="text-center"><button type="submit" class="btn btn-primary">Edit</button></td></form>
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
