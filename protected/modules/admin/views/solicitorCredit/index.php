<?php
/* @var $this SolicitorCreditController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Solicitor Credits',
);

$this->menu=array(
	array('label'=>'Create SolicitorCredit', 'url'=>array('create')),
	array('label'=>'Manage SolicitorCredit', 'url'=>array('admin')),
);
?>

<h1>Solicitor Credits</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
