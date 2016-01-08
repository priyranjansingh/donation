<?php 
	$form=$this->beginWidget('CActiveForm', array(
		'id'=>'visits-form',
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
			<?php echo $form->labelEx($model,'solicitor_id'); ?>
			<?php echo $form->dropDownList($model,'solicitor_id',$solicitors,array('empty' => 'Select Solicitor','class' => 'form-control select2')); ?>
			<?php echo $form->error($model,'solicitor_id'); ?>
		</div>
	</div>
	<div class="form-group">
		<div class="col-xs-6">
			<?php echo $form->labelEx($model,'visit_code'); ?>
			<?php echo $form->textField($model,'visit_code',array('size'=>60,'maxlength'=>255,'class' => 'form-control')); ?>
			<?php echo $form->error($model,'visit_code'); ?>
		</div>
		<div class="col-xs-6">
			<?php echo $form->labelEx($model,'reason'); ?>
			<?php echo $form->textField($model,'reason',array('size'=>60,'maxlength'=>512,'class' => 'form-control')); ?>
			<?php echo $form->error($model,'reason'); ?>
		</div>
	</div>
	<div class="form-group">
		<div class="col-xs-12">
			<?php echo $form->labelEx($model,'description'); ?>
			<?php echo $form->textArea($model,'description',array('rows'=>6,'cols'=>50,'class' => 'form-control')); ?>
			<?php echo $form->error($model,'description'); ?>
		</div>
	</div>
	<div class="form-group">
		<div class="col-xs-6">
			<?php echo $form->labelEx($model,'start_date'); ?>
			<?php // echo $form->textField($model,'start_date',array('class' => 'form-control calendar')); ?>
			<div class="input-group dateholder">
				<input type="text" class="form-control" name="Visits[start_date]" value="<?php echo $model->start_date; ?>">
            </div>
			<?php echo $form->error($model,'start_date'); ?>
		</div>
		<div class="col-xs-6">
			<?php echo $form->labelEx($model,'end_date'); ?>
			<?php //echo $form->textField($model,'end_date',array('class' => 'form-control calendar')); ?>
			<div class="input-group dateholder">
				<input type="text" class="form-control" name="Visits[end_date]" value="<?php echo $model->end_date; ?>">
            </div>
			<?php echo $form->error($model,'end_date'); ?>
		</div>
	</div>
</div>
<div class="box-footer">
    <?php echo CHtml::link('Back',array('/admin/solicitor'),array("class" => 'btn btn-info pull-right',"style"=>"margin-left:10px;")); ?>
	<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array("class" => 'btn btn-info pull-right')); ?>
</div>
<?php $this->endWidget(); ?>