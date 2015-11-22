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
						<h3 class="box-title">Visit List</h3>
						<?php $this->widget('zii.widgets.grid.CGridView', array(
												'id'=>'visits-grid',
												'itemsCssClass' => 'table table-bordered table-hover dataTable',
												'dataProvider'=>$visits->solicitors($model->id),
												// 'filter'=>$visits,
												'columns'=>array(
													'visit_code',
													'reason',
													'start_date',
												),
											)); ?>
						<h3 class="box-title">Payment List</h3>
						<?php $this->widget('zii.widgets.grid.CGridView', array(
												'id'=>'solicitor-credit-grid',
												'itemsCssClass' => 'table table-bordered table-hover dataTable',
												'dataProvider'=>$payments->payment($model->id),
												// 'filter'=>$visits,
												'columns'=>array(
													array(
												            'name' => 'visit',
												            'type' => 'raw',
												            'value' => array($this, 'gridVisit'),
												        ),
													'amount',
													'mode',
													'date_entered'
												),
											)); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
