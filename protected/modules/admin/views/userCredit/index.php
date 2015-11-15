<?php
/* @var $this UserCreditController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'User Credits',
);

$this->menu=array(
	array('label'=>'Create UserCredit', 'url'=>array('create')),
	array('label'=>'Manage UserCredit', 'url'=>array('admin')),
);
?>

<h1>User Credits</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
