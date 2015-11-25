<?php
$baseUrl = Yii::app()->theme->baseUrl;
?>
<link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/donatenow.app.ltr.css">
<script type="text/javascript" async="" src="<?php echo $baseUrl; ?>/assets/js/802b93f0fe41b41869a2e449e704709d.js"></script>

<div class="container-fluid contents flexify" id="contents" role="main" aria-labelledby="heading1">
    <section class="mainContents row transfer  funnelPage_experiment_3 pageName-funnelPage pageName-recipientPage pageName-previewPage" id="transfer">
        <div id="transfer-page" class="fadeInUp">
            <form name="sendMoney" method="POST" action="<?php echo base_url()."/user/donate/step3"; ?>" novalidate="false" class="transferPage send previewPage">
                <div class="alertInfo negative-balance hide fade in" style="display: block;">
                    <p>You have an outstanding balance. The negative balance has been added to this transaction.</p>
                </div>

                <div class="preview-page-wrapper fade in" style="display: block;">
                    <div class="preview-amount-wrapper ">
                        <div class="preview-recipient ">
                            <p class="preview-sendTo" title="Solicitor Name">You're donating to <?php echo $visit_model->solicitor->first_name." ".$visit_model->solicitor->last_name;   ?></p>
                        </div>

                        <div class="preview-amount">
                            <div class="amountWrapper col-xs-4" data-error-min="The amount must be greater than 0. Please enter a larger amount." data-error-max="Sorry, that amount exceeds the limit. Please enter a smaller amount." data-error-required="Please enter an amount.">
                                <div class="amountSymbolWrapper" dir="ltr">
                                    <span class="amountSymbolWrapper-currencySymbol">$</span>
                                    <div id="hiddenInputMirror" class="amountWrapper_hiddenInputMirror" style="font-size: 60px;">0.00</div>
                                    <div class="textInput amount amountSymbolWrapper-textInput amount amount lap" style="width: 126px;">
                                        <label for="amount" class="accessAid"></label>
                                        <input id="amount" name="amount" type="text" class="hasHelp validate amountSymbolWrapper-input " required="required" aria-required="true" value="" autocomplete="off" dir="ltr" pattern="[^\d]{0,}(\d+)[\.|\.]?(\d{0,})?" min="0" data-decimal-separator="/" style="font-size: 60px;">
                                        <p class="help-error" id="amount-help-error">Please enter an amount.</p>

                                        <div class="clearInput icon-close-small hide" data-clear="amount">
                                            <span class="accessAid">Clear input</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="preview-message-wrapper">
                            <div id="transfer_note_container" class="preview-note-container">
                                <div data-reactid=".0">
                                    <div class="textArea lap note preview-message-textarea-wrap" data-reactid=".0.0">
                                        <label for="message" data-reactid=".0.0.0">Write a note (Optional)</label>
                                        <textarea id="message" name="message" class="hasHelp validate preview-message-textArea" maxlength="1000" aria-required="false" data-reactid=".0.0.1"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="preview-toggle-travelerRule grow-wrapper fade in" style="display: block;">&nbsp;</div>
                <p class="preview-policy x-small txtCenter fade in" style="display: block;">View <a href="" target="_blank">our policies</a> and your payment method rights.</p>

                <div class="preview-buttons fade in" style="display: block;">
                    <input type="submit" tabindex="0" class="btn btn-primary preview-getFundingOptions validateBeforeSubmit" value="Continue">
                </div>

                <div class="preview-cancel-wrapper x-small txtCenter fade in" style="display: block;">
                    <a href="AccountSummary.html">Cancel</a>
                </div>
            </form>
        </div>
    </section>
</div>
<script type="text/javascript" src="<?php echo $baseUrl; ?>/assets/js/pp_jscode_080706.js"></script>
<script type="text/javascript" src="<?php echo $baseUrl; ?>/assets/js/pa.js"></script>
<script src="<?php echo $baseUrl; ?>/assets/js/app2.js"></script>

<script src="<?php echo $baseUrl; ?>/assets/js/bootstrap.js"></script>