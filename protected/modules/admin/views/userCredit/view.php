<?php
/* @var $this UserCreditController */
/* @var $model UserCredit */

$this->breadcrumbs=array(
	'User Credits'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List UserCredit', 'url'=>array('index')),
	array('label'=>'Create UserCredit', 'url'=>array('create')),
	array('label'=>'Update UserCredit', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete UserCredit', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UserCredit', 'url'=>array('admin')),
);
?>

<h1>View UserCredit #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'amount',
		'mode',
		'status',
		'deleted',
		'created_by',
		'modified_by',
		'date_entered',
		'date_modified',
	),
)); ?>
