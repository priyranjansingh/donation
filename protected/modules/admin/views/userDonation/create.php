<?php
/* @var $this UserDonationController */
/* @var $model UserDonation */

$this->breadcrumbs=array(
	'User Donations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UserDonation', 'url'=>array('index')),
	array('label'=>'Manage UserDonation', 'url'=>array('admin')),
);
?>

<h1>Create UserDonation</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>