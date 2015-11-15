<?php
/* @var $this UserDonationController */
/* @var $model UserDonation */

$this->breadcrumbs=array(
	'User Donations'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UserDonation', 'url'=>array('index')),
	array('label'=>'Create UserDonation', 'url'=>array('create')),
	array('label'=>'View UserDonation', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage UserDonation', 'url'=>array('admin')),
);
?>

<h1>Update UserDonation <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>