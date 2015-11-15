<?php
/* @var $this VisitsController */
/* @var $model Visits */

$this->breadcrumbs=array(
	'Visits'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Visits', 'url'=>array('index')),
	array('label'=>'Create Visits', 'url'=>array('create')),
	array('label'=>'Update Visits', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Visits', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Visits', 'url'=>array('admin')),
);
?>

<h1>View Visits #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'visit_code',
		'reason',
		'description',
		'solicitor_id',
		'start_date',
		'end_date',
		'status',
		'deleted',
		'created_by',
		'modified_by',
		'date_entered',
		'date_modified',
	),
)); ?>
