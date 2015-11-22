<section class="content-header">
  <h1>
    Update
    <small>Payment</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url().'/admin'; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="<?php echo base_url().'/admin/donation'; ?>"><i class="fa fa-dashboard"></i> Payments</a></li>
    <li><a href="<?php echo base_url().'/admin/donation/view?id='.$model->id; ?>"><i class="fa fa-dashboard"></i> View</a></li>
    <li class="active">Update</li>
  </ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title"><?php echo $model->user_id; ?></h3>
				</div>
				<?php $this->renderPartial('_form', array('model'=>$model)); ?>
			</div>
		</div>
	</div>
</section>