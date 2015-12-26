<?php
$baseUrl = Yii::app()->theme->baseUrl;
?>
<section>

    <div class="demo-header-color relative clear " style="min-height: 220px;">

        <div class="p-20">
            <h4 class="mdl-color-text--white m-t-20 m-b-5">Welcome User</h4>
            <h5 class="mdl-color-text--white m-b-25 no-m-t w100">Dashboard and KPI information for informed users</h5>
        </div>
    </div>


    <div class="mdl-grid mdl-grid--no-spacing mdl-grid-p-15 cards-top" style="padding-top:0px;">
        <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet p-t-10 mdl-grid--no-spacing">

            <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet p-r-10-tablet full-desktop">
                <div class="mdl-card mdl-shadow--0dp  mdl-color--cyan">
                    <div class="mdl-card__title block">
                        <h4 class="mdl-card__title-text mdl-color-text--white f20 w600">Account Balance</h4>
                        <div class="f30 mdl-color-text--white"><?php echo "$" . number_format($user_balance, 2); ?></div>
                        <div class="f20 mdl-color-text--white">Available Credit: <?php echo "$" . $user_model->credit_limits; ?></div>
                    </div>


                </div>
                <div class="w300 m-t-5 m-b-20">

                </div>
            </div>
            <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet full-desktop">
                <div class="mdl-card mdl-shadow--0dp  mdl-color--amber">
                    <div class="mdl-card__title block">
                        <h4 class="mdl-card__title-text mdl-color-text--white f20 w600">Action</h4>
                    </div>
                    <div class="p-15 text-center">

                        <button ng-click="todoService.clearCompleted()" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent mdl-color--amber-700">
                            Donate Now
                        </button>

                        <button ng-click="todoService.clearCompleted()" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent mdl-color--orange-900">
                            Meshulach Search
                        </button>
                    </div>
                    <div class="mdl-card__menu">

                    </div>
                </div>
                <div class="w300 m-t-5 m-b-20">

                </div>
            </div>



            <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet p-l-10-tablet full-desktop">
                <div class="mdl-card mdl-shadow--0dp  mdl-color--pink-300">
                    <div class="mdl-card__title block">
                        <h4 class="mdl-card__title-text mdl-color-text--white f20 w600">Linked Phone Numbers</h4>
                        <div class="f11 mdl-color-text--white"> Latest 10 May, 10:00</div>
                    </div>
                    <table class="mdl-data-table ml-table-striped mdl-js-data-table ml-data-table is-upgraded" data-upgraded=",MaterialDataTable">
                        <colgroup>
                            <col class="auto-cell-size">
                        </colgroup>

                        <tbody>
                            <tr>
                                <td><img src="<?php echo $baseUrl; ?>/assets/img/icons/ballicons/visa.png"></td>
                                <td class="mdl-data-table__cell--non-numeric">212-555-4545</td>

                            </tr>
                            <tr>
                                <td><img src="<?php echo $baseUrl; ?>/assets/img/icons/ballicons/visa.png"></td>
                                <td class="mdl-data-table__cell--non-numeric">212-555-4545</td>

                            </tr>

                        </tbody>
                    </table>
                    <div class="mdl-card__supporting-text  mdl-color-text--white">
                        Add authorized Number to your account
                    </div>
                    <div class="mdl-card__menu">
                    </div>
                </div>
                <div class="w300 m-t-5 m-b-20">

                </div>
            </div>







        </div>

        <div class="mdl-cell mdl-cell--8-col mdl-cell--8-col-tablet p-r-10-tablet p-t-10 mdl-grid--no-spacing">
            <div class="block">
                <div class="block-heading">
                    <div class="main-text h2">
                        All Transactions
                    </div>
                    <div class="block-controls">
                        <span class="icon icon-cross icon-size-medium block-control-remove" aria-hidden="true"></span>
                        <span class="icon icon-arrow-down icon-size-medium block-control-collapse" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="block-content-outer">
                    <div class="block-content-inner">
                        <div class="table-responsive">
                            <table class="table table-condensed table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="col-xs-1">Date</th>
                                        <th class="col-xs-2">Detail</th>
                                        <th class="col-xs-2">Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($user_trans as $trans) {
                                        if ($trans->Donation) {
                                            ?>    
                                            <tr>
                                                <td>
                                                    <?php echo date("M", strtotime($trans->date_entered)); ?>
                                                    <?php echo date("d", strtotime($trans->date_entered)); ?>
                                                    <?php echo date("Y", strtotime($trans->date_entered)); ?>
                                                <td>
                                                    (<?php echo $trans->Donation->visit->visit_code; ?>) 
                                                    <?php echo $trans->Donation->solicitor->first_name . " " . $trans->Donation->solicitor->last_name; ?>
                                                </td>
                                                <td>
                                                    - $<?php echo $trans->debit; ?>
                                                    Transaction Type - Donation
                                                </td>
                                            </tr>
                                            <?php
                                        } else {
                                            ?>     
                                            <tr>
                                                <td>
        <?php echo date("M", strtotime($trans->date_entered)); ?>
                                                    <?php echo date("d", strtotime($trans->date_entered)); ?>
                                                    <?php echo date("Y", strtotime($trans->date_entered)); ?>

                                                <td>
                                                    Payment - Thank You
                                                </td>
                                                <td>
                                                    + $<?php echo $trans->credit; ?>
                                                    Payment <a href="" target="_blank">Print Receipt</a>
                                                </td>
                                            </tr>
        <?php
    }
}
?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>