<?php
/* @var $this TaxReceiptController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tax Receipts',
);

$this->menu=array(
	array('label'=>'Create TaxReceipt', 'url'=>array('create')),
	array('label'=>'Manage TaxReceipt', 'url'=>array('admin')),
);
?>

<h1>Tax Receipts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
