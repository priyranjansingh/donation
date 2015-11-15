<?php
/* @var $this SolicitorCreditController */
/* @var $model SolicitorCredit */

$this->breadcrumbs=array(
	'Solicitor Credits'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SolicitorCredit', 'url'=>array('index')),
	array('label'=>'Create SolicitorCredit', 'url'=>array('create')),
	array('label'=>'View SolicitorCredit', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SolicitorCredit', 'url'=>array('admin')),
);
?>

<h1>Update SolicitorCredit <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>