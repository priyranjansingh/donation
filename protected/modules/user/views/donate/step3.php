<section class="todo" ng-controller="TodoController as todo">
    <div class="ml-header relative clear">
        <div class="p-20">
            <h3 class="mdl-color-text--white m-t-20 m-b-5">Donate</h3>
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
                                <div class="form-wizard condensed" id="wizard-3">
                                    <div class="tab-pane active  text-center">
                                        <div class="p-30">
                                            <h4>You're donating to <?php echo $visit_model->solicitor->first_name . " " . $visit_model->solicitor->last_name; ?><h4>
                                                    <?php
                                                    $form = $this->beginWidget('CActiveForm', array(
                                                        'id' => 'step3-form',
                                                        'enableClientValidation' => true,
                                                        //'enableAjaxValidation'=>true,
                                                        'clientOptions' => array(
                                                            'validateOnSubmit' => true,
                                                        ),
                                                        'htmlOptions' => array(
                                                            'autcomplete' => "off",
                                                            'class' => "transferPage send previewPage",
                                                        ),
                                                    ));
                                                    ?>
                                                    <div class="mdl-textfield mdl-js-textfield">
                                                        <?php echo $form->textField($step3_model, 'amount', array('placeholder' => 'Amount', 'class' => 'mdl-textfield__input')); ?>
                                                        <?php echo $form->error($step3_model, 'amount'); ?>
                                                    </div>
                                                    <div class="mdl-textfield mdl-js-textfield">
                                                        <?php echo $form->textArea($step3_model, 'message', array('placeholder' => 'Write a short note (optional)', 'id' => 'message', 'class' => 'mdl-textfield__input')); ?>
                                                    </div>
                                                    <div class="form-actions wizard mgtp-20">
                                                        <div class="row mgbt-xs-0">
                                                            <div class="col-xs-12 text-center">
                                                                <?php echo CHtml::submitButton('Submit', array("value" => "Donate", "class" => "btn vd_btn next mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent button-full")); ?>
                                                            </div>
                                                        </div>
                                                    <?php $this->endWidget(); ?>
                                                    </div>
                                                    </div>
                                                    </div>
                                                    </div>
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