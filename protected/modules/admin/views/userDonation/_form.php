<?php
/* @var $this UserDonationController */
/* @var $model UserDonation */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-donation-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>36,'maxlength'=>36)); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id',array('size'=>36,'maxlength'=>36)); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'visit_id'); ?>
		<?php echo $form->textField($model,'visit_id',array('size'=>36,'maxlength'=>36)); ?>
		<?php echo $form->error($model,'visit_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mobile'); ?>
		<?php echo $form->textField($model,'mobile',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'solicitor_id'); ?>
		<?php echo $form->textField($model,'solicitor_id',array('size'=>36,'maxlength'=>36)); ?>
		<?php echo $form->error($model,'solicitor_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'amount'); ?>
		<?php echo $form->textField($model,'amount',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mode'); ?>
		<?php echo $form->textField($model,'mode',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'mode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'payment_status'); ?>
		<?php echo $form->textField($model,'payment_status',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'payment_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reference_number'); ?>
		<?php echo $form->textField($model,'reference_number',array('size'=>36,'maxlength'=>36)); ?>
		<?php echo $form->error($model,'reference_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'deleted'); ?>
		<?php echo $form->textField($model,'deleted'); ?>
		<?php echo $form->error($model,'deleted'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by',array('size'=>36,'maxlength'=>36)); ?>
		<?php echo $form->error($model,'created_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modified_by'); ?>
		<?php echo $form->textField($model,'modified_by',array('size'=>36,'maxlength'=>36)); ?>
		<?php echo $form->error($model,'modified_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_entered'); ?>
		<?php echo $form->textField($model,'date_entered'); ?>
		<?php echo $form->error($model,'date_entered'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_modified'); ?>
		<?php echo $form->textField($model,'date_modified'); ?>
		<?php echo $form->error($model,'date_modified'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->