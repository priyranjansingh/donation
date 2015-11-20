<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
	'htmlOptions'=>array('class' => 'search-form')
)); ?>
<div class="box-body">
	<div class="form-group">
		<div class="col-xs-4">
			<?php echo $form->label($model,'visit_code'); ?>
			<?php echo $form->textField($model,'visit_code',array('size'=>60,'maxlength'=>255,'class' => 'form-control')); ?>
		</div>
		<div class="col-xs-4">
			<?php echo $form->label($model,'reason'); ?>
			<?php echo $form->textField($model,'reason',array('size'=>60,'maxlength'=>255,'class' => 'form-control')); ?>
		</div>
		<div class="col-xs-4">
			<?php echo $form->label($model,'solicitor_id'); ?>
			<?php echo $form->dropDownList($model,'solicitor_id',$solicitors,array('empty' => 'Select Solicitor','class' => 'form-control')); ?>
		</div>
	</div>
</div>
<div class="box-footer">
	<?php echo CHtml::submitButton('Search',array("class" => 'btn btn-info search-button')); ?>
	<a href="<?php echo base_url().'/admin/users/manage' ?>" class="btn btn-warning">Clear</a>
</div>
<?php $this->endWidget(); ?>