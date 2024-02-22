
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
                        <th class="text-center">Happy Clients</th>                     
                        <th class="text-center">Projects completed</th>                    
                        <th class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $count=1;
                      foreach ($chooseusdata as $data) {
                        ?>
                      <tr>
                        <td class="text-center"><?=$count?></td>
                        <td class="text-center"><?=$data->happy_client?></td>
                        <td class="text-center"><?=$data->project_completed?></td>
                       <form method="post" action="<?=base_url('admin/Chooseus/index')?>"> <td class="text-center"><button type="submit" class="btn btn-primary">Edit</button></td></form>
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
