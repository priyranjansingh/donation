<?php
/* @var $this UserCreditController */
/* @var $model UserCredit */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
	<div class="box-body">
		<div class="form-group">
			<div class="col-xs-3">
				<?php echo $form->label($model,'user_id'); ?>
				<?php echo $form->dropDownList($model,'user_id',$users,array('empty' => 'Select User','class' => 'form-control')); ?>
			</div>
			<div class="col-xs-3">
				<?php echo $form->label($model,'mode'); ?>
				<?php echo $form->dropDownList($model,'mode',getParam('payment_mode'),array('empty' => 'Select Mode','class' => 'form-control')); ?>
			</div>
			<div class="col-xs-3">
				<?php echo $form->label($model,'amount'); ?>
				<?php echo $form->textField($model,'amount',array('size'=>16,'maxlength'=>16,'class' => 'form-control')); ?>	
			</div>
		</div>
	</div>
	<div class="box-footer">
		<?php echo CHtml::submitButton('Search',array("class" => 'btn btn-info search-button')); ?>
		<a href="<?php echo base_url().'/admin/userCredit/manage' ?>" class="btn btn-warning">Clear</a>
	</div>
<?php $this->endWidget(); ?>
