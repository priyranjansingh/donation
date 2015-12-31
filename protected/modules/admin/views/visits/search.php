<section class="content-header">
  <h1>
    Search
    <small>Visit</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url().'/admin'; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="<?php echo base_url().'/admin/visits'; ?>"><i class="fa fa-dashboard"></i> Visits</a></li>
    <li class="active">Search</li>
  </ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Visit</h3>
				</div>
				<?php 
					$form=$this->beginWidget('CActiveForm', array(
						'id'=>'visits-search-form',
						// Please note: When you enable ajax validation, make sure the corresponding
						// controller action is handling ajax validation correctly.
						// There is a call to performAjaxValidation() commented in generated controller code.
						// See class documentation of CActiveForm for details on this.
						'enableAjaxValidation'=>false,
						)); 
				?>
				<div class="box-body">
					<div class="form-group">
						<div class="col-xs-12">
							<?php echo $form->labelEx($model,'visit_code'); ?>
							<?php echo $form->textField($model,'visit_code',array('size'=>60,'maxlength'=>255,'class' => 'form-control')); ?>
							<?php echo $form->error($model,'visit_code'); ?>
						</div>
					</div>
				</div>
				<div class="box-footer">
				    <?php echo CHtml::link('Back',array('/admin/solicitor'),array("class" => 'btn btn-info pull-right',"style"=>"margin-left:10px;")); ?>
					<?php echo CHtml::submitButton('Search',array("class" => 'btn btn-info pull-right')); ?>
				</div>
				<?php $this->endWidget(); ?>
			</div>
		</div>
	</div>
</section>