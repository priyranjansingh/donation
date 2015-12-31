<section class="content-header">
    <h1>
        Visit: <?php echo $visit; ?>
        <small>Donations</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url() . '/admin'; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="<?php echo base_url() . '/admin/visits'; ?>"><i class="fa fa-dashboard"></i> Visits</a></li>
        <li class="active"><?php echo $visit; ?></li>
    </ol>
</section>
<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <div class="row">
                <div class="col-xs-4" style="float:right;">
                    <a href="<?php echo base_url().'/admin/visits/create'; ?>" class="btn btn-info" style="float:right;">Add Visit</a>
                </div>    
            </div>
            <?php if(count($visits)): ?>
            <?php $i = 1; foreach($visits as $visit): ?>
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">
                            Visit: <?php echo $visit['visit_code']; ?> | 
                            Solicitor: <?php echo $visit['first_name'].' '.$visit['last_name']; ?> | 
                            <?php echo $visit['start_date'].' - '.$visit['end_date']; ?> | 
                            Active: <?php echo $visit['visit_active']; ?> | 
                            Total: <?php echo $visit['amount']; ?>
                            <a href="<?php echo base_url().'/admin/visits/close?id='.$visit['visit_id']; ?>" class="btn btn-info">Close Visit</a>
                            <a href="<?php echo base_url().'/admin/visits/update?id='.$visit['visit_id']; ?>" class="btn btn-info">EDIT</a>
                            <a href="<?php echo base_url().'/admin/donation/create?visit='.$visit['visit_id']; ?>" class="btn btn-info">Make Payment</a>
                        </h3>
                    </div>
                    <div class="box-body">
                        <div class="dataTables_wrapper form-inline dt-bootstrap">
                            <div class="row">
                                <div class="col-sm-12 table-responsive">
                                    <?php
                                    $this->widget('zii.widgets.grid.CGridView', array(
                                        'id' => 'donation-grid-'.$i,
                                        'itemsCssClass' => 'table table-bordered table-hover dataTable',
                                        'dataProvider' => $donation->users($visit['user_id'],$visit['visit_id']),
                                        'enablePagination' => true,
                                        'columns' => array(
                                            array(
                                                  'name' => 'user_id',
                                                  'value' => array($this, 'gridUser'),
                                              ),
                                            'amount',
                                            'date_entered',
                                            array
                                                (
                                                'class' => 'CButtonColumn',
                                                'template' => '{edit}',
                                                'buttons' => array
                                                    (
                                                    'edit' => array
                                                        (
                                                        'label' => 'EDIT',
                                                        'url' => 'Yii::app()->createUrl("admin/donation/update", array("id"=>$data->id))',
                                                    ),
                                                ),
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
            <?php $i++; endforeach; ?>
            <?php else : ?>
                No Donation History For this solicitor
            <?php endif; ?>
        </div>
    </div>

</section>