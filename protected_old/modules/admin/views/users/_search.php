<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
	'htmlOptions'=>array('class' => 'search-form')
)); ?>
<div class="box-body">
	<div class="form-group">
		<div class="col-xs-3">
			<?php echo $form->label($model,'username'); ?>
			<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>255,'class' => 'form-control')); ?>
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
<!--	<div class="form-group">
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
	</div>-->
<!--	<div class="form-group">
		<div class="col-xs-6">
			<?php echo $form->label($model,'credit_limits'); ?>
			<?php echo $form->textField($model,'credit_limits',array('size'=>60,'maxlength'=>255,'class' => 'form-control')); ?>
		</div>
		<div class="col-xs-6">
			<?php echo $form->label($model,'is_admin'); ?>
			<?php echo $form->dropDownList($model,'is_admin',getParam('boolean'),array('empty'=>'Have Admin Access','class' => 'form-control')); ?>
		</div>
	</div>-->
</div>
<div class="box-footer">
	<?php echo CHtml::submitButton('Search',array("class" => 'btn btn-info search-button')); ?>
	<a href="<?php echo base_url().'/admin/users/manage' ?>" class="btn btn-warning">Clear</a>
</div>
<?php $this->endWidget(); ?>
