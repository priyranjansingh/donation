<?php
$baseUrl = Yii::app()->theme->baseUrl;
?>
<link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/donatenow.app.ltr.css">
<div class="container-fluid contents flexify" id="contents" role="main" aria-labelledby="heading1">
    <section class="mainContents row transfer  funnelPage_experiment_3 pageName-funnelPage pageName-recipientPage" id="transfer">
        <div id="transfer-page" class="fadeInUp">
            <?php
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'step1-form',
                'enableClientValidation' => true,
                //'enableAjaxValidation'=>true,
                'clientOptions' => array(
                    'validateOnSubmit' => true,
                ),
                'htmlOptions' => array(
                    'autcomplete' => "off",
                    'class' => "sky-form",
                ),
            ));
            ?>
            <h2 class="txtCenter fade in" style="display: block;">Search Solicitor</h2>
            <p class="header-copy fade in" style="display: block;">Please enter the solicitor name.</p>
            <div class="contacts-circle-list fade in" style="display: block;">
                <div class="recipientView">
                    <div class="recipient-input-row">
                        <div class="recipient-input-form-fields clearfix">
                            <div class="recipient-input-wrapper hideNext col-sm-9 col-xs-12">
                                <div class="textInput tall recipient recipient recipient lap">
                                    <label for="recipient"></label>
                                  
                                    <?php echo $form->textField($model, 'solicitor_name', array('placeholder' => 'Solicitor Name', 'class' => 'hasHelp validate recipientInput')); ?>
                                    <?php echo $form->error($model, 'solicitor_name'); ?>
                                    <div class="clearInput icon-close-small hide" data-clear="recipient"><span class="accessAid">Clear input</span></div>
                                </div>
                            </div>

                            <input type="submit" tabindex="-1" class="btn btn-primary recipient-next animated col-sm-3 col-xs-12 fadeInRight" value="Next">
                        </div>

                        <div class="contact-typeahead-wrapper col-sm-9 col-xs-12">
                            <ul class="input-typeahead contact-typeahead"></ul>
                        </div>
                    </div>
                </div>

                <div class="contact-drilldown" tabindex="0">&nbsp;</div>
            </div>
            <?php $this->endWidget(); ?>
        </div>
        <div class="sidepanel fundingOptions animated" tabindex="-1"></div>
    </section>
</div>