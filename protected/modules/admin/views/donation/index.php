<?php
/* @var $this UserDonationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'User Donations',
);

$this->menu=array(
	array('label'=>'Create UserDonation', 'url'=>array('create')),
	array('label'=>'Manage UserDonation', 'url'=>array('admin')),
);
?>

<h1>User Donations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
