<section class="todo">
    <div class="ml-header relative clear">
        <div class="p-20">
            <h3 class="mdl-color-text--white m-t-20 m-b-5">Donate</h3>
            <h4 class="mdl-color-text--indigo-100 m-b-20 no-m-t w100">Your Previous donations</h4>
        </div>
    </div>
    <div class="mdl-grid mdl-grid--no-spacing">
        <div class="mdl-cell mdl-cell--3-col mdl-cell--3-col-tablet mdl-cell--3-col-phone no-p-l ">
            &nbsp;
        </div>
        <div class="mdl-cell mdl-cell--6-col mdl-cell--6-col-tablet mdl-cell--6-col-phone no-p-l">
            <div class="ml-card-holder ml-card-holder-first p-20">
                <div class="mdl-card mdl-shadow--1dp back-none">
                    <div class="panel back-none no-margin">
                        <?php echo CHtml::link('Continue', base_url() . "/user/donate/step3", array("value" => "Next", "class" => "btn vd_btn next mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent ")); ?>
                        <div class="panel-body-list  p-20">
                            <form role="form" action="#" class="form-horizontal">
                                <div class="form-wizard condensed" id="wizard-3">
                                    <div class="tab-pane active  text-center">
                                        <h4>Previous Donations to <?php echo $visit_model->solicitor->first_name . " " . $visit_model->solicitor->last_name; ?></h4>
                                        <table class="mdl-data-table mdl-js-data-table ml-data-table">
                                            <colgroup>
                                                <col class="auto-cell-size">
                                            </colgroup>

                                            <tbody>
                                                <?php
                                                if (!empty($prev_don_model)) {
                                                    foreach ($prev_don_model as $donation) {
                                                        ?>
                                                        <tr>
                                                            <td>
                                                                <div class="small">
                                                                    <?php echo date("M", strtotime($donation->date_entered)) ; ?>
                                                                    <?php
                                                                    if (date("Y", strtotime($donation->date_entered)) != date('Y')) {
                                                                        echo " , " . date("Y", strtotime($donation->date_entered));
                                                                    }
                                                                    ?>

                                                                </div>
                                                                <h3 class="mdl-color-text--cyan no-margin "><?php echo date("d", strtotime($donation->date_entered)); ?></h3>
                                                            </td>
                                                            <td class="mdl-data-table__cell--non-numeric">
                                                                <div class="">(<?php echo $donation->visit->visit_code; ?>) <?php echo $donation->solicitor->first_name . " " . $donation->solicitor->last_name; ?></div>
                                                                <ul class="list-unstyled f12">
                                                                    <li>
                                                                        <i class="material-icons f14">check_circle</i>
                                                                        Transaction Type - Donation
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                            <td>- $<?php echo $donation->amount; ?>  </td>
                                                        </tr>
    <?php
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
                            </form>          
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mdl-cell mdl-cell--3-col mdl-cell--3-col-tablet mdl-cell--3-col-phone no-p-l">
        &nbsp;
    </div>
</div>
<div class="p-30">
    &nbsp;
</div>
</section>