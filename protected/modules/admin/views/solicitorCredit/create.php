<?php
/* @var $this SolicitorCreditController */
/* @var $model SolicitorCredit */

$this->breadcrumbs=array(
	'Solicitor Credits'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SolicitorCredit', 'url'=>array('index')),
	array('label'=>'Manage SolicitorCredit', 'url'=>array('admin')),
);
?>

<h1>Create SolicitorCredit</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>