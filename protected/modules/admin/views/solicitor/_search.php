<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
<div class="box-body">
	<div class="form-group">
		<div class="col-xs-3">
			<?php echo $form->label($model,'solicitor_code'); ?>
			<?php echo $form->textField($model,'solicitor_code',array('size'=>60,'maxlength'=>255,'class' => 'form-control')); ?>
		</div>
		<div class="col-xs-3">
			<?php echo $form->label($model,'first_name'); ?>
			<?php echo $form->textField($model,'first_name',array('size'=>60,'maxlength'=>255,'class' => 'form-control')); ?>
		</div>
		<div class="col-xs-3">
			<?php echo $form->label($model,'last_name'); ?>
			<?php echo $form->textField($model,'last_name',array('size'=>60,'maxlength'=>255,'class' => 'form-control')); ?>
		</div>
		<div class="col-xs-3">
			<?php echo $form->label($model,'email'); ?>
			<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255,'class' => 'form-control')); ?>
		</div>
	</div>
	<div class="form-group">
		<div class="col-xs-3">
			<?php echo $form->label($model,'city'); ?>
			<?php echo $form->textField($model,'city',array('size'=>60,'maxlength'=>255,'class' => 'form-control')); ?>
		</div>
		<div class="col-xs-3">
			<?php echo $form->label($model,'state'); ?>
			<?php echo $form->textField($model,'state',array('size'=>60,'maxlength'=>255,'class' => 'form-control')); ?>
		</div>
		<div class="col-xs-3">
			<?php echo $form->label($model,'country'); ?>
			<?php echo $form->textField($model,'country',array('size'=>60,'maxlength'=>255,'class' => 'form-control')); ?>
		</div>
		<div class="col-xs-3">
			<?php echo $form->label($model,'zip'); ?>
			<?php echo $form->textField($model,'zip',array('size'=>60,'maxlength'=>255,'class' => 'form-control')); ?>
		</div>
	</div>
	<div class="form-group">
		<div class="col-xs-6">
			<?php echo $form->label($model,'date_of_estd'); ?>
			<div class="input-group dateholder">
				<input type="text" class="form-control" name="Solicitor[date_of_estd]">
            </div>
		</div>
		<div class="col-xs-6">
			<?php echo $form->label($model,'freezed'); ?>
			<?php echo $form->dropDownList($model,'freezed',getParam('boolean'),array('empty'=>'Select Freeze','class' => 'form-control')); ?>
		</div>
	</div>
</div>
<div class="box-footer">
	<?php echo CHtml::submitButton('Search',array("class" => 'btn btn-info search-button')); ?>
	<a href="<?php echo base_url().'/admin/solicitor/manage' ?>" class="btn btn-warning">Clear</a>
</div>
<?php $this->endWidget(); ?>