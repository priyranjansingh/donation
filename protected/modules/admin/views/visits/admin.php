<section class="content-header">
  <h1>
    Manage
    <small>Visits</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url().'/admin'; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="<?php echo base_url().'/admin/visits'; ?>"><i class="fa fa-dashboard"></i> Visits</a></li>
    <li class="active">Manage</li>
  </ol>
</section>
<section class="content">
	
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Search</h3>
				</div>
				<?php 
						Yii::app()->clientScript->registerScript('search', "
						$('.search-form form').submit(function(){
							$('#solicitor-credit-grid').yiiGridView('update', {
								data: $(this).serialize()
							});
							return false;
						});
						");
						$this->renderPartial('_search',array(
									'model'=>$model,
									'solicitors'=>$solicitors
								)); ?>
			</div>
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Solicitor Visit List</h3>
				</div>
				<div class="box-body">
					<div class="dataTables_wrapper form-inline dt-bootstrap">
						<div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div>
						<div class="row">
							<div class="col-sm-12 table-responsive">
								<?php $this->widget('zii.widgets.grid.CGridView', array(
										'id'=>'visits-grid',
										'itemsCssClass' => 'table table-bordered table-hover dataTable',
										'dataProvider'=>$model->search(),
										'filter'=>$model,
										'columns'=>array(
											'visit_code',
											'reason',
											'solicitor_id',
											'start_date',
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