<?php
/* @var $this TaxReceiptController */
/* @var $model TaxReceipt */

$this->breadcrumbs=array(
	'Tax Receipts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TaxReceipt', 'url'=>array('index')),
	array('label'=>'Manage TaxReceipt', 'url'=>array('admin')),
);
?>

<h1>Create TaxReceipt</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>