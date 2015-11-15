<?php
/* @var $this UserCreditController */
/* @var $model UserCredit */

$this->breadcrumbs=array(
	'User Credits'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UserCredit', 'url'=>array('index')),
	array('label'=>'Manage UserCredit', 'url'=>array('admin')),
);
?>

<h1>Create UserCredit</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>