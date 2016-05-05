<section class="content-header">
      <h1>
        Dashboard
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li class="active">Dashboard</li>
      </ol>
    </section>

<section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-user"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Users</span>
              <span class="info-box-number"><?php echo $user; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Solicitors</span>
              <span class="info-box-number"><?php echo $solicitor; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Payment</span>
              <span class="info-box-number"><?php echo $t_donation; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-cart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Donation</span>
              <span class="info-box-number"><?php echo $t_debit; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-8">
          <!-- MAP & BOX PANE -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Last 10 Users</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="row">
                <div class="col-md-12 col-sm-12">
                  <div class="table-responsive">
                    <?php 
                        $this->widget('zii.widgets.grid.CGridView', array(
                                'id'=>'users-grid',
                                'itemsCssClass' => 'table table-bordered table-hover dataTable',
                                'dataProvider'=>$users->search(),
                                'enablePagination'=>false,
                                'columns'=>array(
                                  'first_name',
                                  'last_name',
                                  'username',
                                  'email',
                                ),
                              )); 
                    ?>
                  </div>  
                </div>
                <!-- /.col -->
                
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          
          <!-- TABLE: LATEST ORDERS -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Last 10 Solicitors</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <?php $this->widget('zii.widgets.grid.CGridView', array(
                    'id'=>'solicitor-grid',
                    'itemsCssClass' => 'table table-bordered table-hover dataTable',
                    'dataProvider'=>$solicitors->search(),
                    'enablePagination'=>false,
                    'columns'=>array(
                      'solicitor_code',
                      'first_name',
                      'last_name',
                      'mobile',
                    ),
                  )); ?>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <div class="col-md-4">
          <div class="box box-default info-box">
            <div class="box-header with-border">
              <h3 class="box-title">Recent 10 User Payment</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body">
              <div class="table-responsive">
                <?php $this->widget('zii.widgets.grid.CGridView', array(
                    'id'=>'donation-grid',
                    'itemsCssClass' => 'table table-bordered table-hover dataTable',
                    'dataProvider'=>$donations->search(),
                    'enablePagination'=>false,
                    'columns'=>array(
                      array(
                              'name' => 'user_id',
                              'value' => array($this, 'gridUser'),
                          ),
                          array(
                              'name' => 'solicitor_id',
                              'value' => array($this, 'gridSolicitor'),
                          ),
                      'amount',
                    ),
                  )); ?>
              </div>
            </div>
          </div>
          <div class="box box-default info-box">
            <div class="box-header with-border">
              <h3 class="box-title">Recent 10 Solicitor Payment</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </div>
            </div>
            <div class="box-body">
              <div class="table-responsive">
                <?php $this->widget('zii.widgets.grid.CGridView', array(
                    'id'=>'solicitor-credit-grid',
                    'itemsCssClass' => 'table table-bordered table-hover dataTable',
                    'dataProvider'=>$payments->search(),
                    'enablePagination'=>false,
                    'columns'=>array(
                      array(
                              'name' => 'solicitor_id',
                              'value' => array($this, 'gridSolicitor'),
                          ),
                      array(
                              'name' => 'visit_id',
                              'value' => array($this, 'gridVisit'),
                          ),
                      'amount',
                    ),
                  )); ?>
              </div>
            </div>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>