<section class="content-header">
    <h1>
        Manage
        <small>Solicitor</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url() . '/admin'; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="<?php echo base_url() . '/admin/solicitor'; ?>"><i class="fa fa-dashboard"></i> Solicitor</a></li>
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
							$('#solicitor-grid').yiiGridView('update', {
								data: $(this).serialize()
							});
							return false;
						});
						");
                $this->renderPartial('_search', array(
                    'model' => $model,
                ));
                ?>
            </div>
            <div class="box">
                <div class="box-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="box-title">Solicitor List</h3>
                        </div>
                        <div class="col-sm-2">
                            <a href="<?php echo base_url() . '/admin/solicitor/create'; ?>">
                                <button class="btn btn-block btn-primary">Add Solicitor</button>
                            </a>
                        </div>
                        <div class="col-sm-2">
                            <a href="<?php echo base_url() . '/admin/visits/create'; ?>">
                                <button class="btn btn-block btn-primary">Add Visit</button>
                            </a>
                        </div>
                         <div class="col-sm-2">
                            <a href="<?php echo base_url() . '/admin/donation/create'; ?>">
                                <button class="btn btn-block btn-primary">Add Donation</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-body">
                    <div class="dataTables_wrapper form-inline dt-bootstrap">
                        <div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div>
                        <div class="row">
                            <div class="col-sm-12 table-responsive">
                                <?php
                                $this->widget('zii.widgets.grid.CGridView', array(
                                    'id' => 'solicitor-grid',
                                    'itemsCssClass' => 'table table-bordered table-hover dataTable',
                                    'dataProvider' => $model->search(),
                                    // 'filter'=>$model,
                                    'columns' => array(
                                        'solicitor_code',
                                        'first_name',
                                        'last_name',
                                        'city',
                                        'country',
                                        array
                                            (
                                            'class' => 'CButtonColumn',
                                            'template' => '{visits}',
                                            'buttons' => array
                                                (
                                                'visits' => array
                                                    (
                                                    'label' => 'Visits',
                                                    'url' => 'Yii::app()->createUrl("admin/solicitor/donations", array("id"=>$data->id))',
                                                ),
                                            ),
                                        ),
                                        array(
                                            'class' => 'CButtonColumn',
                                        ),
                                    ),
                                ));
                                ?>
                            </div>
                        </div>
                        <div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>