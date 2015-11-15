<?php
/* @var $this TaxReceiptController */
/* @var $model TaxReceipt */

$this->breadcrumbs=array(
	'Tax Receipts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TaxReceipt', 'url'=>array('index')),
	array('label'=>'Create TaxReceipt', 'url'=>array('create')),
	array('label'=>'Update TaxReceipt', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TaxReceipt', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TaxReceipt', 'url'=>array('admin')),
);
?>

<h1>View TaxReceipt #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'receipt_number',
		'path',
		'status',
		'deleted',
		'created_by',
		'modified_by',
		'date_entered',
		'date_modified',
	),
)); ?>
