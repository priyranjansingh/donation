<?php
/* @var $this UserCreditController */
/* @var $model UserCredit */

$this->breadcrumbs=array(
	'User Credits'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UserCredit', 'url'=>array('index')),
	array('label'=>'Create UserCredit', 'url'=>array('create')),
	array('label'=>'View UserCredit', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage UserCredit', 'url'=>array('admin')),
);
?>

<h1>Update UserCredit <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>