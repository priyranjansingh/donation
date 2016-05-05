<section class="content-header">
  <h1>
    Add Solicitor
    <small>Visit</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url().'/admin'; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="<?php echo base_url().'/admin/visits'; ?>"><i class="fa fa-dashboard"></i> Visits</a></li>
    <li class="active">Add</li>
  </ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Solicitor Visit</h3>
				</div>
				<?php $this->renderPartial('_form', array('model'=>$model,'solicitors' => $solicitors)); ?>
			</div>
		</div>
	</div>
</section>