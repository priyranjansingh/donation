<section class="content-header">
  <h1>
    Update
    <small>Solicitor Payment</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url().'/admin'; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="<?php echo base_url().'/admin/solicitorcredit'; ?>"><i class="fa fa-dashboard"></i> Solicitor Payment</a></li>
    <li><a href="<?php echo base_url().'/admin/solicitorcredit/view?id='.$model->id; ?>"><i class="fa fa-dashboard"></i> View</a></li>
    <li class="active">Update</li>
  </ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Update Payment For Solicitor <?php echo $model->first_name.' '.$model->last_name; ?></h3>
				</div>
				<?php $this->renderPartial('_form', array('model'=>$model,'solicitors'=>$solicitors)); ?>
			</div>
		</div>
	</div>
</section>