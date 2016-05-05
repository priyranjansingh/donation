<section class="todo">
    <div class="ml-header relative clear">
        <div class="p-20">
            <h3 class="mdl-color-text--white m-t-20 m-b-5">Solicitor Visits</h3>
            <h4 class="mdl-color-text--indigo-100 m-b-20 no-m-t w100"></h4>
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
                        <div class="panel-body-list  p-20">
                            <form role="form" action="#" class="form-horizontal">
                                <div class="form-wizard condensed" id="wizard-3">
                                    <div class="tab-pane active  text-center">
                                        <h4>Solicitor Visit List</h4>
                                        <table class="mdl-data-table mdl-js-data-table ml-data-table">
                                            <colgroup>
                                                <col class="auto-cell-size">
                                            </colgroup>

                                            <tbody>
                                                <?php
                                                if (!empty($visit_list)) {
                                                    foreach ($visit_list as $visit) {
                                                        ?>
                                                        <tr>
                                                            <td>

                                                            </td>
                                                            <td class="mdl-data-table__cell--non-numeric">
                                                                <div class="">Visit Code - <?php echo $visit->visit_code . " (" . $visit->reason . ")"; ?></div>
                                                            </td>
                                                            <td>
                                                                <a href="<?php echo base_url(); ?>/solicitor/search/donate?id=<?php echo $visit->visit_code; ?>"><span class="netAmount vx_h4" dir="rtl">Donate</span></a>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                    }
                                                }
                                                else
                                                {
                                                ?>    
                                                        <tr>
                                                            <td style="text-align: center">
                                                                <h4>Sorry! there is not any active visits.</h4>
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