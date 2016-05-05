<?php 
	$form=$this->beginWidget('CActiveForm', array(
		'id'=>'solicitor-credit-form',
		// Please note: When you enable ajax validation, make sure the corresponding
		// controller action is handling ajax validation correctly.
		// There is a call to performAjaxValidation() commented in generated controller code.
		// See class documentation of CActiveForm for details on this.
		'enableAjaxValidation'=>false,
		)); 
?>
<div class="box-body">
	<div class="form-group">
		<div class="col-xs-6">
			<?php echo $form->labelEx($model,'solicitor_id'); ?>
			<?php 
				echo $form->dropDownList($model,'solicitor_id',$solicitors,
											array('empty' => 'Select Solicitor',
												  'class' => 'form-control',
												      'ajax' => array(
														                'type' => 'POST',
														                'url' => CController::createUrl('loadvisits'),
														                'update' => '#SolicitorCredit_visit_id',
														                'data' => array('solicitor' => 'js:this.value'),
														        ))); 
			?>
			<?php echo $form->error($model,'solicitor_id'); ?>
		</div>
		<div class="col-xs-6">
			<?php echo $form->labelEx($model,'visit_id'); ?>
			<?php echo $form->dropDownList($model,'visit_id',$visits,array('empty'=> 'Select Visit Code','class' => 'form-control')); ?>
			<?php echo $form->error($model,'visit_id'); ?>
		</div>
	</div>
	<div class="form-group">
		<div class="col-xs-6">
			<?php echo $form->labelEx($model,'amount'); ?>
			<?php echo $form->textField($model,'amount',array('size'=>60,'maxlength'=>16,'class' => 'form-control')); ?>
			<?php echo $form->error($model,'amount'); ?>
		</div>
		<div class="col-xs-6">
			<?php echo $form->labelEx($model,'mode'); ?>
			<?php echo $form->dropDownList($model,'mode',getParam('payment_mode'),array('class' => 'form-control')); ?>
			<?php echo $form->error($model,'mode'); ?>
		</div>
	</div>
</div>
<div class="box-footer">
	<?php echo CHtml::link('Back',array('/admin/solicitor'),array("class" => 'btn btn-info pull-right',"style"=>"margin-left:10px;")); ?>
	<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array("class" => 'btn btn-info pull-right')); ?>
</div>
<?php $this->endWidget(); ?>