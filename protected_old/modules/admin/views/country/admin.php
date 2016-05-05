<section class="content-header">
  <h1>
    Manage
    <small>Countries</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url().'/admin'; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="<?php echo base_url().'/admin/country'; ?>"><i class="fa fa-dashboard"></i> Country</a></li>
    <li class="active">Manage</li>
  </ol>
</section>
<section class="content">
	
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Country List</h3>
				</div>
				<div class="box-body">
					<div class="dataTables_wrapper form-inline dt-bootstrap">
						<div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div>
						<div class="row">
							<div class="col-sm-12 table-responsive">
								<?php $this->widget('zii.widgets.grid.CGridView', array(
										'id'=>'country-grid',
										'itemsCssClass' => 'table table-bordered table-hover dataTable',
										'dataProvider'=>$model->search(),
										'filter'=>$model,
										'columns'=>array(
											'name',
											'short_code',
											array(
												'class'=>'CButtonColumn',
											),
										),
									)); ?>
							</div>
						</div>
						<div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>
<?php
/* @var $this CountryController */
/* @var $model Country */
/*
$this->breadcrumbs=array(
	'Countries'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Country', 'url'=>array('index')),
	array('label'=>'Create Country', 'url'=>array('create')),
);
*/
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#country-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Countries</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php // echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->


