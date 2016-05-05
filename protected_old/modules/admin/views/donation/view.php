<section class="content-header">
  <h1>
    Payments
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url().'/admin'; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="<?php echo base_url().'/admin/donation'; ?>"><i class="fa fa-dashboard"></i> Payments</a></li>
    <li class="active">View</li>
  </ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title"><?php echo $solicitor->first_name.' '.$solicitor->last_name; ?> <small><a href="<?php echo base_url().'/admin/donation/update?id='.$model->id; ?>">EDIT</a></small></h3>
				</div>
				<div class="box-body">
					<div class="col-xs-12 table-responsive">
						<?php $this->widget('zii.widgets.CDetailView', array(
								// 'itemsCssClass' => 'table table-bordered table-hover dataTable',
								'htmlOptions' => array("class" => "table table-bordered table-hover dataTable"),
								'data'=>$model,
								'attributes'=>array(
									array(
							            'label'=>'User',
							            'type'=>'raw',
							            'value'=>Users::model()->findByPk($model->user_id)->username,
							        ),
							        array(
							            'label'=>'Solictor',
							            'type'=>'raw',
							            'value'=>Solicitor::model()->findByPk($model->solicitor_id)->solicitor_code,
							        ),
							        array(
							            'label'=>'Visit',
							            'type'=>'raw',
							            'value'=>Visits::model()->findByPk($model->visit_id)->visit_code,
							        ),
									'mobile',
									'amount',
									'mode',
									'payment_status',
									'reference_number',
								),
							)); ?>
					</div>
				</div>
				<div class="box-footer">
					<?php echo CHtml::link('Back',array('/admin/donation'),array("class" => 'btn btn-info pull-right',"style"=>"margin-left:10px;")); ?>
				</div>
			</div>
		</div>
	</div>
</section>
