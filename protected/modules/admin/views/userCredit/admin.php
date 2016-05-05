<section class="content-header">
  <h1>
    Manage
    <small>User Credits</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url().'/admin'; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="<?php echo base_url().'/admin/userCredit'; ?>"><i class="fa fa-dashboard"></i> User Credits</a></li>
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
						$('form.search-button').submit(function(){
							$('#user-credit-grid').yiiGridView('update', {
								data: $(this).serialize()
							});
							return false;
						});
						");
						$this->renderPartial('_search',array(
									'model'=>$model,
									'users'=>$users,
								)); ?>
			</div>
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">User Credit List</h3>
				</div>
				<div class="box-body">
					<div class="dataTables_wrapper form-inline dt-bootstrap">
						<div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div>
						<div class="row">
							<div class="col-sm-12 table-responsive">
								<?php $this->widget('zii.widgets.grid.CGridView', array(
										'id'=>'user-credit-grid',
										'itemsCssClass' => 'table table-bordered table-hover dataTable',
										'dataProvider'=>$model->search(),
										'columns'=>array(
											array(
												'name' => 'user_id',
												'value' => array($this, 'gridUser')
											),
											'amount',
											'mode',
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