<section class="content-header">
  <h1>
    Update
    <small>Payment</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url().'/admin'; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="<?php echo base_url().'/admin/users'; ?>"><i class="fa fa-dashboard"></i> Users</a></li>
    <li class="active">Update</li>
  </ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Payment</h3>
				</div>
				<?php $this->renderPartial('_update', array('model'=>$model,'users'=>$users)); ?>
			</div>
		</div>
	</div>
</section>
