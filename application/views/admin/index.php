
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row">
          <div class="tile_count w-100">
           <a href="<?=base_url('admin/Services/view_services')?>">
            <div class="col-md-3 col-sm-4 tile_stats_count text-center">
              <div class="p-2 card">
              <span class="count_top"><i class="fa fa-clock-o"></i> Total Services</span>
              <div class="count"><?=$countservice?></div>
              </div>
            </div></a>
            <a href="<?=base_url('admin/Products/view_products')?>">
              <div class="col-md-3 col-sm-4 tile_stats_count text-center">
                <div class="p-2 card">
              <span class="count_top"><i class="fa fa-clock-o"></i> Total Products</span>
              <div class="count"><?=$countproduct?></div>
            </div>
            </div></a>
            <a href="<?=base_url('admin/Team/view_team_list')?>">
              <div class="col-md-3 col-sm-4 tile_stats_count text-center">
                <div class="p-2 card">
                <span class="count_top"><i class="fa fa-users"></i> Total Team</span>
                <div class="count green"><?=$countourteam?></div>
              </div>
              </div>
            </a>
            <a href="<?=base_url('admin/Portfolio/view_portfolio_list')?>">
              <div class="col-md-3 col-sm-4 tile_stats_count text-center">
                <div class="p-2 card">
                <span class="count_top"><i class="fa fa-photo"></i> Total Portfolios</span>
                <div class="count"><?=$countportfolio?></div>
                </div>
              </div>
            </a>
            <a href="javascipt:void(0);">
            <div class="col-md-3 col-sm-4 tile_stats_count text-center">
              <?php
              foreach ($admindata as $admins) {
               ?>
              <div class="p-2 card">
              <span class="count_top"><i class="fa fa-photo"></i> Total Visiters</span>
              <div class="count"><?=$admins->visiters?></div>
              </div>
              <?php
              }
              ?>
            </div>
            </a>
          </div>
        </div>


            </div>
          </div>
        </div>
        <!-- /page content -->

     