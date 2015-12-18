<?php 
	$form=$this->beginWidget('CActiveForm', array(
		'id'=>'solicitor-form',
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
			<?php echo $form->labelEx($model,'username'); ?>
			<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>255,'class' => 'form-control')); ?>
			<?php echo $form->error($model,'username'); ?>
		</div>
		<div class="col-xs-6">
			<?php echo $form->labelEx($model,'email'); ?>
			<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255,'class' => 'form-control')); ?>
			<?php echo $form->error($model,'email'); ?>
		</div>
	</div>
	<div class="form-group">
		<div class="col-xs-6">
			<?php echo $form->labelEx($model,'first_name'); ?>
			<?php echo $form->textField($model,'first_name',array('size'=>60,'maxlength'=>255,'class' => 'form-control')); ?>
			<?php echo $form->error($model,'first_name'); ?>
		</div>
		<div class="col-xs-6">
			<?php echo $form->labelEx($model,'last_name'); ?>
			<?php echo $form->textField($model,'last_name',array('size'=>60,'maxlength'=>255,'class' => 'form-control')); ?>
			<?php echo $form->error($model,'last_name'); ?>
		</div>
	</div>
	<div class="form-group">
		<div class="col-xs-6">
			<?php echo $form->labelEx($model,'email2'); ?>
			<?php echo $form->textField($model,'email2',array('size'=>60,'maxlength'=>255,'class' => 'form-control')); ?>
			<?php echo $form->error($model,'email2'); ?>
		</div>
		<div class="col-xs-6">
			<?php echo $form->labelEx($model,'address'); ?>
			<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>255,'class' => 'form-control')); ?>
			<?php echo $form->error($model,'address'); ?>
		</div>
	</div>
	<div class="form-group">
		<div class="col-xs-6">
			<?php echo $form->labelEx($model,'city'); ?>
			<?php echo $form->textField($model,'city',array('size'=>60,'maxlength'=>255,'class' => 'form-control')); ?>
			<?php echo $form->error($model,'city'); ?>
		</div>
		<div class="col-xs-6">
			<?php echo $form->labelEx($model,'state'); ?>
			<?php echo $form->textField($model,'state',array('size'=>60,'maxlength'=>255,'class' => 'form-control')); ?>
			<?php echo $form->error($model,'state'); ?>
		</div>
	</div>
	<div class="form-group">
		<div class="col-xs-6">
			<?php echo $form->labelEx($model,'country'); ?>
			<?php echo $form->textField($model,'country',array('size'=>60,'maxlength'=>36,'class' => 'form-control')); ?>
			<?php echo $form->error($model,'country'); ?>
		</div>
		<div class="col-xs-6">
			<?php echo $form->labelEx($model,'zip'); ?>
			<?php echo $form->textField($model,'zip',array('class' => 'form-control')); ?>
			<?php echo $form->error($model,'zip'); ?>
		</div>
	</div>
	<div class="form-group">
		<div class="col-xs-6">
			<?php echo $form->labelEx($model,'mobile'); ?>
			<?php echo $form->textField($model,'mobile',array('size'=>16,'maxlength'=>16,'class' => 'form-control')); ?>
			<?php echo $form->error($model,'mobile'); ?>
		</div>
		<div class="col-xs-6">
			<?php echo $form->labelEx($model,'credit_limits'); ?>
			<?php echo $form->textField($model,'credit_limits',array('size'=>16,'maxlength'=>16,'class' => 'form-control')); ?>
			<?php echo $form->error($model,'credit_limits'); ?>
		</div>
	</div>
	<div class="form-group">
		<div class="col-xs-6">
			<?php echo $form->labelEx($model,'phone'); ?>
			<?php echo $form->textField($model,'phone',array('size'=>16,'maxlength'=>16,'class' => 'form-control')); ?>
			<?php echo $form->error($model,'phone'); ?>
		</div>
		<div class="col-xs-6">
			<?php echo $form->labelEx($model,'notify_solicitor'); ?>
			<?php echo $form->dropDownList($model,'notify_solicitor',getParam('boolean'),array('class' => 'form-control')); ?>
			<?php echo $form->error($model,'notify_solicitor'); ?>
		</div>
	</div>
	<div class="form-group">
		<div class="col-xs-6">
			<?php echo $form->labelEx($model,'is_active'); ?>
			<?php echo $form->dropDownList($model,'is_active',getParam('boolean'),array('class' => 'form-control')); ?>
			<?php echo $form->error($model,'is_active'); ?>
		</div>
		<div class="col-xs-6">
			<?php echo $form->labelEx($model,'is_admin'); ?>
			<?php echo $form->dropDownList($model,'is_admin',getParam('boolean'),array('class' => 'form-control')); ?>
			<?php echo $form->error($model,'is_admin'); ?>
		</div>
	</div>
	<div class="form-group">
		<div class="col-xs-6">
			<?php echo $form->labelEx($model,'mobile_verified'); ?>
			<?php echo $form->dropDownList($model,'mobile_verified',getParam('boolean'),array('class' => 'form-control')); ?>
			<?php echo $form->error($model,'mobile_verified'); ?>
		</div>
		<div class="col-xs-6">
			<?php echo $form->labelEx($model,'phone_verified'); ?>
			<?php echo $form->dropDownList($model,'phone_verified',getParam('boolean'),array('class' => 'form-control')); ?>
			<?php echo $form->error($model,'phone_verified'); ?>
		</div>
	</div>
</div>
<div class="box-footer">
    <?php echo CHtml::link('Back',array('/admin/users'),array("class" => 'btn btn-info pull-right',"style"=>"margin-left:10px;")); ?>
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array("class" => 'btn btn-info pull-right')); ?>
</div>

<?php $this->endWidget(); ?>