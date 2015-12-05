<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'user-credit-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation' => false,
        ));
?>
<div class="box-body">
    <div class="form-group">
        <div class="col-xs-6">
            <?php echo $form->labelEx($model,'user_id'); ?>
            <?php echo $form->dropDownList($model,'user_id',$users,array('class' => 'form-control','empty' => 'Select User')); ?>
	    <?php echo $form->error($model,'user_id'); ?>
        </div>
    </div>
</div>



<div class="box-body">
    <div class="form-group">
         <div class="col-xs-6">
            <?php echo $form->labelEx($model,'mode'); ?>
            <?php echo $form->dropDownList($model,'mode',getParam('payment_mode'),array('empty' => 'Select Payment Mode','class' => 'form-control')); ?>
	    <?php echo $form->error($model,'mode'); ?>
        </div>
        <div class="col-xs-6">
            <?php echo $form->labelEx($model, 'amount'); ?>
            <?php echo $form->textField($model, 'amount', array('size' => 60, 'maxlength' => 36,'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'amount'); ?>
        </div>
    </div>
</div>

<div class="box-footer">
    <?php echo CHtml::link('Back', array('/admin/users'), array("class" => 'btn btn-info pull-right', "style" => "margin-left:10px;")); ?>
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Add' : 'Save', array("class" => 'btn btn-info pull-right')); ?>
</div>

<?php $this->endWidget(); ?>