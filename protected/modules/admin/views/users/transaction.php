<section class="content-header">
    <h1>
        Transaction
        <small>List</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url() . '/admin'; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="<?php echo base_url() . '/admin/users'; ?>"><i class="fa fa-dashboard"></i> Users</a></li>
        <li class="active">Manage</li>
    </ol>
</section>
<section class="content">

    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Transaction List</h3>
                </div>
                <div class="box-body">
                    <div class="dataTables_wrapper form-inline dt-bootstrap">
                        <div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div>
                        <div class="row">
                            <div class="col-sm-12 table-responsive">
                                <table class="table table-hover">
                                    <tr>
                                        <th>Date</th>
                                        <th>Type</th>
                                        <th>Solicitor Info</th>
                                        <th>Amount</th>
                                    </tr>
                                    <?php
                                    foreach ($user_trans as $trans) {
                                        if ($trans->Donation) {
                                            ?>
                                            <tr>
                                                <td><?php echo date("d-m-Y", strtotime($trans->date_entered)); ?></td>
                                                <td>Donation</td>
                                                <td>
                                                    (<?php echo $trans->Donation->visit->visit_code; ?>)
                                                    <?php echo $trans->Donation->solicitor->first_name . " " . $trans->Donation->solicitor->last_name; ?>
                                                </td>
                                                <td>$<?php echo $trans->debit; ?></td>
                                            </tr>
                                            <?php
                                        } else if ($trans->Usercredit) {
                                            ?>      
                                            <tr>
                                                <td><?php echo date("d-m-Y", strtotime($trans->date_entered)); ?></td>
                                                <td>Payment</td>
                                                <td></td>
                                                <td>$<?php echo $trans->credit; ?></td>
                                            </tr> 
                                            <?php
                                        }
                                    }
                                    ?>   

                                </table>
                            </div>
                        </div>
                        <div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>