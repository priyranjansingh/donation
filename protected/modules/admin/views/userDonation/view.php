<?php
/* @var $this UserDonationController */
/* @var $model UserDonation */

$this->breadcrumbs=array(
	'User Donations'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List UserDonation', 'url'=>array('index')),
	array('label'=>'Create UserDonation', 'url'=>array('create')),
	array('label'=>'Update UserDonation', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete UserDonation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UserDonation', 'url'=>array('admin')),
);
?>

<h1>View UserDonation #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'visit_id',
		'mobile',
		'solicitor_id',
		'amount',
		'mode',
		'payment_status',
		'reference_number',
		'status',
		'deleted',
		'created_by',
		'modified_by',
		'date_entered',
		'date_modified',
	),
)); ?>
