<section class="content-header">
  <h1>
    Users
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url().'/admin'; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="<?php echo base_url().'/admin/users'; ?>"><i class="fa fa-dashboard"></i> Users</a></li>
    <li class="active">View</li>
  </ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title"><?php echo $model->first_name.' '.$model->last_name; ?> <small><a href="<?php echo base_url().'/admin/users/update?id='.$model->id; ?>">EDIT</a></small></h3>
				</div>
				<div class="box-body">
					<div class="col-xs-12 table-responsive">
						<?php $this->widget('zii.widgets.CDetailView', array(
								// 'itemsCssClass' => 'table table-bordered table-hover dataTable',
								'htmlOptions' => array("class" => "table table-bordered table-hover dataTable"),
								'data'=>$model,
								'attributes'=>array(
									'username',
									'first_name',
									'last_name',
									'address',
									'city',
									'state',
									'country',
									'zip',
									'email',
									'email2',
									'mobile',
									'phone',
									'notify_solicitor',
									'credit_limits',
									'is_active',
									'is_admin',
									'mobile_verified',
									'phone_verified',
								),
							)); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>