<section class="content-header">
  <h1>
    Solicitor
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url().'/admin'; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="<?php echo base_url().'/admin/solicitor'; ?>"><i class="fa fa-dashboard"></i> Solicitors</a></li>
    <li class="active">View</li>
  </ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title"><?php echo $model->first_name.' '.$model->last_name; ?> <small><a href="<?php echo base_url().'/admin/solicitor/update?id='.$model->id; ?>">EDIT</a></small></h3>
				</div>
				<div class="box-body">
					<div class="col-xs-12 table-responsive">
						<?php $this->widget('zii.widgets.CDetailView', array(
								// 'itemsCssClass' => 'table table-bordered table-hover dataTable',
								'htmlOptions' => array("class" => "table table-bordered table-hover dataTable"),
								'data'=>$model,
								'attributes'=>array(
									'solicitor_code',
									'first_name',
									'last_name',
									'address',
									'city',
									'state',
									'country',
									'zip',
									'married',
									'children',
									'email',
									'mobile',
									'gender',
									'date_of_estd',
									'freezed'
								),
							)); ?>
					</div>
				<?php echo CHtml::link('Back',array('/admin/solicitor'),array("class" => 'btn btn-info pull-right')); ?>
				</div>
				<?php if(count($visits)): ?>
            <?php $i = 1; foreach($visits as $visit): ?>
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">
                            Visit: <?php echo $visit['visit_code']; ?> | 
                            <?php echo $visit['start_date'].' - '.$visit['end_date']; ?> | 
                            Active: <?php echo $visit['visit_active']; ?> | 
                            Total: <?php echo $visit['amount']; ?>
                            <a href="<?php echo base_url().'/admin/visits/update?id='.$visit['visit_id']; ?>" class="btn btn-info">EDIT</a>
                            <a href="<?php echo base_url().'/admin/solicitorCredit/create?solicitor='.$model->id.'&visit='.$visit['visit_id']; ?>" class="btn btn-info">Make Payment</a>
                        </h3>
                    </div>
                    <div class="box-body">
                    	<h3 class="box-title">Donations</h3> 
                        <div class="dataTables_wrapper form-inline dt-bootstrap">
                            <div class="row">
                                <div class="col-sm-12 table-responsive">
                                    <?php
                                    $this->widget('zii.widgets.grid.CGridView', array(
                                        'id' => 'donation-grid-'.$i,
                                        'itemsCssClass' => 'table table-bordered table-hover dataTable',
                                        'dataProvider' => $donation->solicitor($model->id,$visit['visit_id']),
                                        'enablePagination' => true,
                                        'columns' => array(
                                            array(
                                                  'name' => 'user_id',
                                                  'value' => array($this, 'gridUser'),
                                              ),
                                            'amount',
                                            'date_entered',
                                            array
                                                (
                                                'class' => 'CButtonColumn',
                                                'template' => '{edit}',
                                                'buttons' => array
                                                    (
                                                    'edit' => array
                                                        (
                                                        'label' => 'EDIT',
                                                        'url' => 'Yii::app()->createUrl("admin/donation/update", array("id"=>$data->id))',
                                                    ),
                                                ),
                                            ),
                                        ),
                                    ));
                                    ?>
                                </div>
                            </div>
                            <div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div>
                        </div>
                        <h3 class="box-title">Payments</h3> 
                        <div class="dataTables_wrapper form-inline dt-bootstrap">
                            <div class="row">
                                <div class="col-sm-12 table-responsive">
                                    <?php
                                    $this->widget('zii.widgets.grid.CGridView', array(
                                        'id' => 'donation-grid-'.$i,
                                        'itemsCssClass' => 'table table-bordered table-hover dataTable',
                                        'dataProvider' => $payments->solicitor($model->id,$visit['visit_id']),
                                        'enablePagination' => true,
                                        'columns' => array(
                                            'amount',
                                            'mode',
                                            'date_entered',
                                            array
                                                (
                                                'class' => 'CButtonColumn',
                                                'template' => '{edit}',
                                                'buttons' => array
                                                    (
                                                    'edit' => array
                                                        (
                                                        'label' => 'EDIT',
                                                        'url' => 'Yii::app()->createUrl("admin/solicitorCredit/update", array("id"=>$data->id))',
                                                    ),
                                                ),
                                            ),
                                        ),
                                    ));
                                    ?>
                                </div>
                            </div>
                            <div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div>
                        </div>
                    </div>
                </div>
            <?php $i++; endforeach; ?>
            <?php else : ?>
                No Donation History For this solicitor
            <?php endif; ?>
			</div>
		</div>
	</div>
</section>
