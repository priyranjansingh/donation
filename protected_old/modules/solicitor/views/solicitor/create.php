<?php
/* @var $this SolicitorController */
/* @var $model Solicitor */

$this->breadcrumbs=array(
	'Solicitors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Solicitor', 'url'=>array('index')),
	array('label'=>'Manage Solicitor', 'url'=>array('admin')),
);
?>

<h1>Create Solicitor</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>