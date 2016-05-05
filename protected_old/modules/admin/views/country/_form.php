<?php
/* @var $this CountryController */
/* @var $model Country */
/* @var $form CActiveForm */
?>
<?php 
	$form=$this->beginWidget('CActiveForm', array(
		'id'=>'country-form',
		// Please note: When you enable ajax validation, make sure the corresponding
		// controller action is handling ajax validation correctly.
		// There is a call to performAjaxValidation() commented in generated controller code.
		// See class documentation of CActiveForm for details on this.
		'enableAjaxValidation'=>false,
		)); 
?>
<div class="box-body">
	<div class="form-group">
		<?php echo $form->errorSummary($model); ?>
		<div class="col-xs-6">
			<?php echo $form->labelEx($model,'name'); ?>
			<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255,'class' => 'form-control')); ?>
			<?php echo $form->error($model,'name'); ?>
		</div>
		<div class="col-xs-6">
			<?php echo $form->labelEx($model,'short_code'); ?>
			<?php echo $form->textField($model,'short_code',array('size'=>60,'maxlength'=>64,'class' => 'form-control')); ?>
			<?php echo $form->error($model,'short_code'); ?>
		</div>
	</div>
</div>
<div class="box-footer">
	<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array("class" => 'btn btn-info pull-right')); ?>
</div>
<?php $this->endWidget(); ?>
