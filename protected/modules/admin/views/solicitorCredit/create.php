<section class="content-header">
  <h1>
    Add
    <small>Solicitor Payment</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url().'/admin'; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="<?php echo base_url().'/admin/solicitorCredit'; ?>"><i class="fa fa-dashboard"></i> Solicitor Payment</a></li>
    <li class="active">Add</li>
  </ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Solicitor Payment</h3>
				</div>
				<?php $this->renderPartial('_form', array('model'=>$model,'solicitors'=>$solicitors,'visits'=>$visits)); ?>
			</div>
		</div>
	</div>
</section>