<?php
/* @var $this SolicitorController */
/* @var $model Solicitor */
/* @var $form CActiveForm */
?>
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
			<?php echo $form->labelEx($model,'solicitor_code'); ?>
			<?php echo $form->textField($model,'solicitor_code',array('size'=>60,'maxlength'=>255,'class' => 'form-control')); ?>
			<?php echo $form->error($model,'solicitor_code'); ?>
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
			<?php echo $form->textField($model,'country',array('size'=>60,'maxlength'=>255,'class' => 'form-control')); ?>
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
			<?php echo $form->labelEx($model,'gender'); ?>
			<?php echo $form->dropDownList($model,'gender',getParam('gender'),array('class' => 'form-control')); ?>
			<?php echo $form->error($model,'gender'); ?>
		</div>
		<div class="col-xs-6">
			<?php echo $form->labelEx($model,'married'); ?>
			<?php echo $form->dropDownList($model,'married',getParam('married'),array('class' => 'form-control')); ?>
			<?php echo $form->error($model,'married'); ?>
		</div>
	</div>
	<div class="form-group">
		<div class="col-xs-6">
			<?php echo $form->labelEx($model,'children'); ?>
			<?php echo $form->dropDownList($model,'children',getParam('children'),array('empty' => 'Select Children', 'class' => 'form-control')); ?>
			<?php echo $form->error($model,'children'); ?>
		</div>
		<div class="col-xs-6">
			<?php echo $form->labelEx($model,'mobile'); ?>
			<?php echo $form->textField($model,'mobile',array('size'=>16,'maxlength'=>16,'class' => 'form-control')); ?>
			<?php echo $form->error($model,'mobile'); ?>
		</div>
	</div>
	<div class="form-group">
		<div class="col-xs-6">
			<?php echo $form->labelEx($model,'email'); ?>
			<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255,'class' => 'form-control')); ?>
			<?php echo $form->error($model,'email'); ?>
		</div>
		<div class="col-xs-6">
			<?php echo $form->labelEx($model,'date_of_estd'); ?>
			<?php // echo $form->textField($model,'date_of_estd',array('class' => 'form-control')); ?>
			<div class="input-group dateholder">
				<input type="text" class="form-control" value="<?php echo $model->date_of_estd; ?>" name="Solicitor[date_of_estd]">
            </div>
			<?php echo $form->error($model,'date_of_estd'); ?>
		</div>
	</div>
	<div class="form-group">
		<div class="col-xs-6">
			<?php echo $form->labelEx($model,'freezed'); ?>
			<?php echo $form->dropDownList($model,'freezed',getParam('boolean'),array('class' => 'form-control')); ?>
			<?php echo $form->error($model,'freezed'); ?>
		</div>
		<div class="col-xs-6"></div>
	</div>
</div>
<div class="box-footer">
        <?php echo CHtml::link('Back',array('/admin/solicitor'),array("class" => 'btn btn-info pull-right',"style"=>"margin-left:10px;")); ?>
	<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array("class" => 'btn btn-info pull-right')); ?>
</div>
<?php $this->endWidget(); ?>