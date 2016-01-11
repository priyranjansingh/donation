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
                        <a href="<?php echo base_url() . "/user/donate/step1"; ?>">
                            <button  class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent mdl-color--amber-700">
                                Donate Now
                            </button>
                        </a>    
                        <a href="<?php echo base_url() . "/solicitor/search/step1"; ?>">
                            <button ng-click="todoService.clearCompleted()" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent mdl-color--orange-900">
                                Meshulach Search
                            </button>
                        </a>
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
                                                <h4>There is not any previous donations.</h4>
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
    </div>
</section>