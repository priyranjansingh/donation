<?php
/* @var $this SolicitorController */
/* @var $model Solicitor */

$this->breadcrumbs=array(
	'Solicitors'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Solicitor', 'url'=>array('index')),
	array('label'=>'Create Solicitor', 'url'=>array('create')),
	array('label'=>'Update Solicitor', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Solicitor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Solicitor', 'url'=>array('admin')),
);
?>

<h1>View Solicitor #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'solicitor_code',
		'first_name',
		'last_name',
		'address',
		'city',
		'state',
		'country',
		'zip',
		'married',
		'children',
		'email',
		'mobile',
		'gender',
		'date_of_estd',
		'freezed',
		'status',
		'deleted',
		'created_by',
		'modified_by',
		'date_entered',
		'date_modified',
	),
)); ?>
