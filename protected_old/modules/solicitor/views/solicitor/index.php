<?php
/* @var $this SolicitorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Solicitors',
);

$this->menu=array(
	array('label'=>'Create Solicitor', 'url'=>array('create')),
	array('label'=>'Manage Solicitor', 'url'=>array('admin')),
);
?>

<h1>Solicitors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
