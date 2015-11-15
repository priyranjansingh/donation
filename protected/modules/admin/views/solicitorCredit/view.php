<?php
/* @var $this SolicitorCreditController */
/* @var $model SolicitorCredit */

$this->breadcrumbs=array(
	'Solicitor Credits'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SolicitorCredit', 'url'=>array('index')),
	array('label'=>'Create SolicitorCredit', 'url'=>array('create')),
	array('label'=>'Update SolicitorCredit', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SolicitorCredit', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SolicitorCredit', 'url'=>array('admin')),
);
?>

<h1>View SolicitorCredit #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'solicitor_id',
		'visit_id',
		'amount',
		'mode',
		'status',
		'deleted',
		'created_by',
		'modified_by',
		'date_entered',
		'date_modifed',
	),
)); ?>
