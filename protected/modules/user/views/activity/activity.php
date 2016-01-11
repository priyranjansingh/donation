<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<section class="todo" ng-controller="TodoController as todo">
    <div class="0 ml-header relative clear">
        <div class="f-right m-30 hide-from-tablet">
            <a href="<?php echo base_url(); ?>/user/activity/export">
                <button class="mdl-button mdl-js-button mdl-color-text--white mdl-js-ripple-effect f12" data-upgraded=",MaterialButton,MaterialRipple"> <i class="material-icons ml-button-icon">menu</i> Export <span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
            </a>
        </div>
        <div class="p-20">
            <h3 class="mdl-color-text--white m-t-20 m-b-5">Activity</h3>
            <h4 class="mdl-color-text--indigo-100 m-b-20 no-m-t w100">Manage your activity from the dashboard or here with additional filters.</h4>
        </div>
    </div>
    <div class="mdl-grid p-20 mdl-grid--no-spacing mdl-color--grey-100">
        <div class="mdl-cell mdl-cell--3-col mdl-cell--12-col-tablet mdl-cell--12-col-phone mdl-color--grey-100">
            <div class="p-40 p-r-20 p-20--small">
                <div class=" mdl-color-text--blue-grey-400">
                    <div class="m-t-10">
                        <form id="srch_frm" action="<?php echo base_url(); ?>/user/activity/" id="js_filters-form" class="filters-form" method="post" name="filtersForm">
                            <div class="vx_form-group filters-date">
                                <input type="text" id="from_date" name="from_date" value="<?php echo $from_date ?>" placeholder="From Date">
                            </div>
                            <div id="from_date_err"> 
                            </div>    

                            <div class="vx_form-group filters-date">
                                <input type="text" id="to_date" name="to_date" value="<?php echo $to_date ?>" placeholder="To Date">
                            </div>
                            <div id="to_date_err"> 
                            </div>  

                            <div class="vx_form-group filters-transactionType">


                                <select class="vx_form-control js_filters-control js_filters-control-transactionType" id="transactionType" name="activity_type">
                                    <option value="ALL" <?php echo ($activity_type == 'ALL') ? 'selected' : '' ?>   >All activity</option>
                                    <option value="PAYMENT_RECEIVED" <?php echo ($activity_type == 'PAYMENT_RECEIVED') ? 'selected' : '' ?>>Payments received</option>
                                    <option value="DONATION" <?php echo ($activity_type == 'DONATION') ? 'selected' : '' ?>>Donation</option>
                                </select>
                            </div>

                            <input id="search_activity" type="submit" value="View" aria-selected="false" role="button" class="vx_btn vx_btn-secondary vx_btn-small filters-searchBtn js_filters-searchBtn nemo_filters-searchBtn validateBeforeSubmit mdl-button mdl-button--raised mdl-button--colored" name="filterSubmit"><input type="hidden" value="activity/index" name="flow_name">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="mdl-cell mdl-cell--9-col mdl-cell--12-col-tablet mdl-cell--12-col-phone no-p-l">
            <div class="p-20 ml-card-holder ml-card-holder-first">
                <div class="mdl-card mdl-shadow--1dp">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">All Transactions</h2>
                    </div>
                    <div class="p-30">
                        <table class="mdl-data-table mdl-js-data-table ml-data-table">
                            <colgroup>
                                <col class="auto-cell-size">
                            </colgroup>
                            <tbody>
                                <?php
                                if (!empty($user_trans)) {
                                    foreach ($user_trans as $trans) {
                                        if ($trans->Donation) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <div class="small">
                                                        <?php echo date("M", strtotime($trans->date_entered)); ?>
                                                        <?php
                                                        if (date("Y", strtotime($trans->date_entered)) != date('Y')) {
                                                            echo " , " . date("Y", strtotime($trans->date_entered));
                                                        }
                                                        ?>
                                                    </div>
                                                    <h3 class="mdl-color-text--cyan no-margin "><?php echo date("d", strtotime($trans->date_entered)); ?></h3>
                                                </td>
                                                <td class="mdl-data-table__cell--non-numeric">
                                                    <div class="">
                                                        (<?php echo $trans->Donation->visit->visit_code; ?>) 
                                                        <?php echo $trans->Donation->solicitor->first_name . " " . $trans->Donation->solicitor->last_name; ?>
                                                    </div>
                                                    <ul class="list-unstyled f12">
                                                        <li>
                                                            <i class="material-icons f14">check_circle</i>
                                                            Transaction Type - Donation
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td>- $<?php echo $trans->debit; ?>  </td>
                                                <td>Donation  </td>
                                            </tr>
                                            <?php
                                        } else {
                                            ?>    
                                            <tr>
                                                <td>
                                                    <div class="small">
                                                        <?php echo date("M", strtotime($trans->date_entered)); ?>
                                                        <?php
                                                        if (date("Y", strtotime($trans->date_entered)) != date('Y')) {
                                                            echo " , " . date("Y", strtotime($trans->date_entered));
                                                        }
                                                        ?>
                                                    </div>
                                                    <h3 class="mdl-color-text--cyan no-margin "><?php echo date("d", strtotime($trans->date_entered)); ?></h3>
                                                </td>
                                                <td class="mdl-data-table__cell--non-numeric">
                                                    Payment - Thank You
                                                    <ul class="list-unstyled f12">
                                                        <li>
                                                            <i class="material-icons f14">check_circle</i>
                                                            <a href="<?php echo base_url(); ?>/user/default/download?flag=<?php echo $trans->Usercredit->id; ?>">Download Receipt</a> 
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td>+ $<?php echo $trans->credit; ?>  </td>
                                                <td>Payment</td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                } else {
                                    ?> 
                                    <tr >
                                        <td style="text-align: center;">
                                            <h4>There is not any record.</h4>
                                        </td>   
                                    </tr>   
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function() {
    $("#from_date").datepicker({
    dateFormat: "yy-mm-dd"
    });
            $("#to_date").datepicker({
    dateFormat: "yy-mm-dd"
    });
            $("#search_activity").click(function(e) {
    e.preventDefault();
            var from_date = $('#from_date').val();
            var to_date = $('#to_date').val();
            var from_date_flag, to_date_flag = false;
            if (from_date == '')
    {
    $("#from_date_err").html("From date can not be blank");
            from_date_flag = false;
    }
    else
    {
    $("#from_date_err").html("");
            from_date_flag = true;
    }
    if (to_date == '')
    {
    $("#to_date_err").html("To date can not be blank");
            to_date_flag = false;
    }
    else
    {
    $("#to_date_err").html("");
            to_date_flag = true;
    }

    if (from_date_flag == true && to_date_flag == true)
    {
    $("#srch_frm").submit();
    }


    });
    });
</script>








