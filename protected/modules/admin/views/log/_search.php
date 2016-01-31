<?php 
// pre($os,true);
$form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
	<div class="box-body">
	<div class="form-group">
		<div class="row">
			<div class="col-xs-3">
				<?php echo $form->label($model,'user_id'); ?>
				<?php echo $form->dropDownList($model,'user_id',$users,array('empty' => 'Select User','class' => 'form-control')); ?>
			</div>
			<div class="col-xs-3">
				<?php echo $form->label($model,'ip_address'); ?>
				<?php echo $form->textField($model,'ip_address',array('size'=>16,'maxlength'=>16,'class' => 'form-control')); ?>	
			</div>
			<div class="col-xs-3">
				<?php echo $form->label($model,'browser'); ?>
				<?php echo $form->dropDownList($model,'browser',$browsers,array('empty' => 'Select Browser','class' => 'form-control')); ?>
			</div>
			<div class="col-xs-3">
				<?php echo $form->label($model,'os'); ?>
				<?php echo $form->dropDownList($model,'os',$os,array('empty' => 'Select Os','class' => 'form-control')); ?>
			</div>		
		</div>
		<div class="row">
			<div class="col-xs-3">
				<?php echo $form->label($model,'platform'); ?>
				<?php echo $form->dropDownList($model,'platform',$platforms,array('empty' => 'Select Platform','class' => 'form-control')); ?>
			</div>		
		</div>
		</div>
		<div class="box-footer">
			<?php echo CHtml::submitButton('Search',array("class" => 'btn btn-info search-button')); ?>
			<a href="<?php echo base_url().'/admin/log/manage' ?>" class="btn btn-warning">Clear</a>
		</div>
	</div>
<?php $this->endWidget(); ?>