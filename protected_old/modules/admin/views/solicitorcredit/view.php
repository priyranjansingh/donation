<section class="content-header">
  <h1>
    Solicitor Payment
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url().'/admin'; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="<?php echo base_url().'/admin/solicitorCredit'; ?>"><i class="fa fa-dashboard"></i> Solicitor Payment</a></li>
    <li class="active">View</li>
  </ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Solicitor Payment For <?php echo $solicitor->first_name.' '.$solicitor->last_name.' ('.$solicitor->solicitor_code.')'; ?> <small><a href="<?php echo base_url().'/admin/solicitorCredit/update?id='.$model->id; ?>">EDIT</a></small></h3>
				</div>
				<div class="box-body">
					<div class="col-xs-12 table-responsive">
						<?php $this->widget('zii.widgets.CDetailView', array(
								// 'itemsCssClass' => 'table table-bordered table-hover dataTable',
								'htmlOptions' => array("class" => "table table-bordered table-hover dataTable"),
								'data'=>$model,
								'attributes'=>array(
									array(
							            'label'=>'Solicitor',
							            'type'=>'raw',
							            'value'=>$solicitor->first_name.' '.$solicitor->last_name.' ('.$solicitor->solicitor_code.')',
							        ),
							        array(
							            'label'=>'Visit',
							            'type'=>'raw',
							            'value'=>$model->visitName($model->visit_id),
							        ),
									'amount',
									'mode',
									'date_entered'
								),
							)); ?>
						<div class="col-xs-12">
                             <?php echo CHtml::link('Back', array('/admin/solicitor/donations','id'=>$model->solicitor_id), array("class" => 'btn btn-info pull-right', "style" => "margin-left:10px;")); ?>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>