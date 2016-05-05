<?php
$baseUrl = Yii::app()->theme->baseUrl;
?>
<script src="<?php echo base_url(); ?>/assets/fancybox/jquery.fancybox.js"></script>
<link href="<?php echo base_url(); ?>/assets/fancybox/jquery.fancybox.css" rel="stylesheet">
<script>
    $(document).ready(function() {
        $("#edit_primary_email").fancybox();
        $("#edit_user_address").fancybox();
        $("#edit_mobile").fancybox();
        $("#edit_phone").fancybox();
        $("#edit_name").fancybox();
        $("#edit_spouse").fancybox();
    });
</script>    


<section class="todo">
    <div class="ml-header relative clear">
        <div class="p-20">
            <h3 class="mdl-color-text--white m-t-20 m-b-5">Settings</h3>
        </div>
    </div>
    <div class="mdl-grid mdl-grid--no-spacing mdl-grid-p-15 cards-top" style="padding-bottom: 0px;">
        <div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet p-r-10-tablet">
            <div class="mdl-card mdl-shadow--0dp  mdl-color--cyan profile-head ">
                <div class="profile-avatar">
                    <span><img height="100" width="100" alt="" src="<?php echo $baseUrl; ?>/assets/img/profiles/avatar3.jpg"></span>
                    <div class="profile-name">
                        <h3><?php echo Yii::app()->session['first_name'] . " " . Yii::app()->session['last_name']; ?></h3>
                        <i>Member since 2015</i>
                    </div>
                </div>
                <div class="mdl-card__menu">
                    <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                        <i class="material-icons">more_vert</i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="mdl-grid mdl-grid--no-spacing todo">
        <div class="mdl-cell mdl-cell--6-col mdl-cell--6-col-tablet mdl-cell--6-col-phone no-p-l">
            <div class="ml-card-holder p-20">
                <div class="mdl-card mdl-shadow--1dp back-none">
                    <div class="panel back-none no-margin">

                        <div class="panel-body-list  p-20">
                            <div class="mdl-card__title ">
                                <h2 class="mdl-card__title-text">
                                    Address
                                </h2>
                            </div>
                            <div class="form-wizard condensed" id="wizard-3">

                                <ul class="ml-list-actions-text">
                                    <li>
                                        <a  href="#user_address" id="edit_user_address">
                                            <button  class="mdl-button mdl-js-button mdl-button--icon f-right address-edit" >
                                                <i class="material-icons f15">edit</i>
                                            </button>
                                        </a>    
                                        <a href="">
                                            <?php echo $addr_model->address; ?>
                                            <?php echo $addr_model->city; ?>,<?php echo $addr_model->state; ?>,  <?php echo $addr_model->zip; ?>
                                            <div class="mdl-color-text--grey-400 f11">Primary Address</div>
                                        </a>
                                    </li>
                                </ul>
                                <div class="p-20">
                                    &nbsp;
                                </div>             
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="p-20">
                &nbsp;
            </div>
        </div>

        <div class="mdl-cell mdl-cell--6-col mdl-cell--6-col-tablet mdl-cell--6-col-phone no-p-l">
            <div class="ml-card-holder p-20">
                <div class="mdl-card mdl-shadow--1dp back-none">
                    <div class="panel back-none no-margin">

                        <div class="panel-body-list  p-20">
                            <div class="mdl-card__title ">
                                <h2 class="mdl-card__title-text">
                                    Email
                                </h2>
                            </div>
                            <div class="form-wizard condensed" id="wizard-3">

                                <ul class="ml-list-actions-text">
                                    <li>
                                        <a  href="#primary_email" id="edit_primary_email">
                                            <button class="mdl-button mdl-js-button mdl-button--icon f-right address-edit" data-upgraded=",MaterialButton">
                                                <i class="material-icons f15">edit</i>
                                            </button>
                                        </a>     
                                        <a href="">
                                            <?php echo $email_model->email; ?>
                                            <div class="mdl-color-text--grey-400 f11">Primary</div>

                                        </a>

                                    </li>
                                    <?php if (!empty($email_model->email2)) { ?>      
                                        <li>

                                            <button ng-click="todoService.editTodo(todo)" class="mdl-button mdl-js-button mdl-button--icon f-right address-edit" data-upgraded=",MaterialButton">
                                                <i class="material-icons f15">edit</i>
                                            </button>
                                            <a href="">
                                                email.1@sample.com
                                                <div class="mdl-color-text--grey-400 f11">Secondary</div>
                                            </a>
                                        </li>
                                    <?php } ?>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-20">
                &nbsp;
            </div>
        </div>

        <div class="mdl-cell mdl-cell--6-col mdl-cell--6-col-tablet mdl-cell--6-col-phone no-p-l">
            <div class="ml-card-holder ml-card-holder-first p-20">
                <div class="mdl-card mdl-shadow--1dp back-none">
                    <div class="panel back-none no-margin">

                        <div class="panel-body-list  p-20">
                            <div class="mdl-card__title ">
                                <h2 class="mdl-card__title-text">
                                    Other options
                                </h2>
                            </div>
                            <div class="form-wizard condensed" id="wizard-3">

                                <ul class="ml-list-actions-text">
                                    <li>
                                        <a href="#name" id="edit_name">
                                            <button  class="mdl-button mdl-js-button mdl-button--icon f-right address-edit" data-upgraded=",MaterialButton">
                                                <i class="material-icons f15">edit</i>
                                            </button>
                                        </a>     
                                        <div class="pull-left ml-list-icon account-set-lan">
                                            <h5>
                                                Name
                                            </h5>
                                        </div>
                                        <a href="">
                                            <?php echo $name_model->first_name . " " . $name_model->last_name; ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#spouse" id="edit_spouse">
                                        <button class="mdl-button mdl-js-button mdl-button--icon f-right address-edit" data-upgraded=",MaterialButton">
                                            <i class="material-icons f15">edit</i>
                                        </button>
                                        </a>    
                                        <div class="pull-left ml-list-icon account-set-lan">
                                            <h5>
                                                Spouse
                                            </h5>
                                        </div>
                                        <a href="">
                                            <?php echo $spouse_model->spouse_name;   ?>
                                        </a>
                                    </li>
                                </ul>
                                <div class="p-20">
                                    &nbsp;
                                </div>             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-20">
                &nbsp;
            </div>
        </div>

        <div class="mdl-cell mdl-cell--6-col mdl-cell--6-col-tablet mdl-cell--6-col-phone no-p-l">
            <div class="ml-card-holder ml-card-holder-first p-20">
                <div class="mdl-card mdl-shadow--1dp back-none">
                    <div class="panel back-none no-margin">

                        <div class="panel-body-list  p-20">
                            <div class="mdl-card__title ">
                                <h2 class="mdl-card__title-text">
                                    Phone
                                </h2>
                            </div>
                            <div class="form-wizard condensed" id="wizard-3">

                                <ul class="ml-list-actions-text">
                                    <li>
                                        <a href="#mobile" id="edit_mobile">
                                            <button  class="mdl-button mdl-js-button mdl-button--icon f-right address-edit" data-upgraded=",MaterialButton">
                                                <i class="material-icons f15">edit</i>
                                            </button>
                                        </a>    
                                        <a href="">
                                            <?php echo $mobile_model->mobile; ?>
                                            <div class="mdl-color-text--grey-400 f11">Mobile</div>

                                        </a>

                                    </li>

                                    <li>
                                        <a href="#phone" id="edit_phone">
                                            <button  class="mdl-button mdl-js-button mdl-button--icon f-right address-edit" data-upgraded=",MaterialButton">
                                                <i class="material-icons f15">edit</i>
                                            </button>
                                        </a>    
                                        <a href="">
                                            <?php echo $phone_model->phone; ?>
                                            <div class="mdl-color-text--grey-400 f11">Secondary, Home</div>

                                        </a>

                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-20">
                &nbsp;
            </div>
        </div>

    </div>
    <div>
        <div id="primary_email" style="display:none">
            <div class="panel-body-list  p-20">
                <?php
                $form = $this->beginWidget('CActiveForm', array(
                    'id' => 'primary_email-form',
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
                <div class="form-wizard condensed" id="wizard-3">



                    <div class="mdl-textfield mdl-js-textfield">
                        <?php echo $form->textField($email_model, 'email', array('placeholder' => 'email', 'class' => 'mdl-textfield__input')); ?>
                        <?php echo $form->error($email_model, 'email'); ?>
                    </div>

                    <div class="form-actions wizard mgtp-20">
                        <div class="row mgbt-xs-0">
                            <div class="col-xs-12 text-center">
                                <?php echo CHtml::hiddenField('scenario', 'email_submit', array('id' => 'hiddenInput')); ?>
                                <?php echo CHtml::submitButton('Submit', array("value" => "Update", "class" => "btn vd_btn next mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent button-full")); ?>
                            </div>
                        </div>
                        <?php $this->endWidget(); ?>
                    </div>
                    </form>
                </div>
            </div>                   
        </div></div>


    <div style="display:none">
        <div style="width:400px;" id="user_address" style="display:none">
            <div class="panel-body-list  p-20">
                <?php
                $form = $this->beginWidget('CActiveForm', array(
                    'id' => 'user_address-form',
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
                <div class="form-wizard condensed" id="wizard-3">



                    <div class="mdl-textfield mdl-js-textfield">
                        <?php echo $form->textField($addr_model, 'address', array('placeholder' => 'Address', 'class' => 'mdl-textfield__input')); ?>
                        <?php echo $form->error($addr_model, 'address'); ?>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield">
                        <?php echo $form->textField($addr_model, 'city', array('placeholder' => 'City', 'class' => 'mdl-textfield__input')); ?>
                        <?php echo $form->error($addr_model, 'city'); ?>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield">
                        <?php echo $form->dropDownList($addr_model, 'state', Yii::app()->params['state'], array("placeholder" => "State", 'class' => "width-12   select2-chosen  width-100")); ?>
                        <?php echo $form->error($addr_model, 'state'); ?>
                    </div>

                    <div class="mdl-textfield mdl-js-textfield">
                        <?php echo $form->textField($addr_model, 'zip', array('placeholder' => 'Zip', 'class' => 'mdl-textfield__input')); ?>
                        <?php echo $form->error($addr_model, 'zip'); ?>
                    </div>

                    <div class="form-actions wizard mgtp-20">
                        <div class="row mgbt-xs-0">
                            <div class="col-xs-12 text-center">
                                <?php echo CHtml::hiddenField('scenario', 'addr_submit', array('id' => 'hiddenInput')); ?>
                                <?php echo CHtml::submitButton('Submit', array("value" => "Update", "class" => "btn vd_btn next mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent button-full")); ?>
                            </div>
                        </div>
                        <?php $this->endWidget(); ?>
                    </div>
                    </form>
                </div>
            </div>                   
        </div></div>



    <div style="display:none">
        <div style="width:400px;" id="mobile" style="display:none">
            <div class="panel-body-list  p-20">
                <?php
                $form = $this->beginWidget('CActiveForm', array(
                    'id' => 'mobile-form',
                    'enableClientValidation' => true,
                    'clientOptions' => array(
                        'validateOnSubmit' => true,
                    ),
                    'htmlOptions' => array(
                        'autcomplete' => "off",
                        'class' => "sky-form",
                    ),
                ));
                ?>
                <div class="form-wizard condensed" id="wizard-3">



                    <div class="mdl-textfield mdl-js-textfield">
                        <?php echo $form->textField($mobile_model, 'mobile', array('placeholder' => 'Mobile', 'class' => 'mdl-textfield__input')); ?>
                        <?php echo $form->error($mobile_model, 'mobile'); ?>
                    </div>
                    <div class="form-actions wizard mgtp-20">
                        <div class="row mgbt-xs-0">
                            <div class="col-xs-12 text-center">
                                <?php echo CHtml::hiddenField('scenario', 'mobile_submit', array('id' => 'hiddenInput')); ?>
                                <?php echo CHtml::submitButton('Submit', array("value" => "Update", "class" => "btn vd_btn next mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent button-full")); ?>
                            </div>
                        </div>
                        <?php $this->endWidget(); ?>
                    </div>
                    </form>
                </div>
            </div>                   
        </div></div>


    <div style="display:none">
        <div style="width:400px;" id="phone" style="display:none">
            <div class="panel-body-list  p-20">
                <?php
                $form = $this->beginWidget('CActiveForm', array(
                    'id' => 'phone-form',
                    'enableClientValidation' => true,
                    'clientOptions' => array(
                        'validateOnSubmit' => true,
                    ),
                    'htmlOptions' => array(
                        'autcomplete' => "off",
                        'class' => "sky-form",
                    ),
                ));
                ?>
                <div class="form-wizard condensed" id="wizard-3">



                    <div class="mdl-textfield mdl-js-textfield">
                        <?php echo $form->textField($phone_model, 'phone', array('placeholder' => 'Phone', 'class' => 'mdl-textfield__input')); ?>
                        <?php echo $form->error($phone_model, 'phone'); ?>
                    </div>
                    <div class="form-actions wizard mgtp-20">
                        <div class="row mgbt-xs-0">
                            <div class="col-xs-12 text-center">
                                <?php echo CHtml::hiddenField('scenario', 'phone_submit', array('id' => 'hiddenInput')); ?>
                                <?php echo CHtml::submitButton('Submit', array("value" => "Update", "class" => "btn vd_btn next mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent button-full")); ?>
                            </div>
                        </div>
                        <?php $this->endWidget(); ?>
                    </div>
                    </form>
                </div>
            </div>                   
        </div></div>


    <div style="display:none">
        <div style="width:400px;" id="name" style="display:none">
            <div class="panel-body-list  p-20">
                <?php
                $form = $this->beginWidget('CActiveForm', array(
                    'id' => 'name-form',
                    'enableClientValidation' => true,
                    'clientOptions' => array(
                        'validateOnSubmit' => true,
                    ),
                    'htmlOptions' => array(
                        'autcomplete' => "off",
                        'class' => "sky-form",
                    ),
                ));
                ?>
                <div class="form-wizard condensed" id="wizard-3">



                    <div class="mdl-textfield mdl-js-textfield">
                        <?php echo $form->textField($name_model, 'first_name', array('placeholder' => 'First Name', 'class' => 'mdl-textfield__input')); ?>
                        <?php echo $form->error($name_model, 'first_name'); ?>
                    </div>
                     <div class="mdl-textfield mdl-js-textfield">
                        <?php echo $form->textField($name_model, 'last_name', array('placeholder' => 'Last Name', 'class' => 'mdl-textfield__input')); ?>
                        <?php echo $form->error($name_model, 'last_name'); ?>
                    </div>
                    <div class="form-actions wizard mgtp-20">
                        <div class="row mgbt-xs-0">
                            <div class="col-xs-12 text-center">
                                <?php echo CHtml::hiddenField('scenario', 'name_submit', array('id' => 'hiddenInput')); ?>
                                <?php echo CHtml::submitButton('Submit', array("value" => "Update", "class" => "btn vd_btn next mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent button-full")); ?>
                            </div>
                        </div>
                        <?php $this->endWidget(); ?>
                    </div>
                    </form>
                </div>
            </div>                   
        </div></div>
    
    
        <div style="display:none">
        <div style="width:400px;" id="spouse" style="display:none">
            <div class="panel-body-list  p-20">
                <?php
                $form = $this->beginWidget('CActiveForm', array(
                    'id' => 'spouse-form',
                    'enableClientValidation' => true,
                    'clientOptions' => array(
                        'validateOnSubmit' => true,
                    ),
                    'htmlOptions' => array(
                        'autcomplete' => "off",
                        'class' => "sky-form",
                    ),
                ));
                ?>
                <div class="form-wizard condensed" id="wizard-3">



                     <div class="mdl-textfield mdl-js-textfield">
                        <?php echo $form->textField($spouse_model, 'spouse_name', array('placeholder' => 'Spouse Name', 'class' => 'mdl-textfield__input')); ?>
                        <?php echo $form->error($spouse_model, 'spouse_name'); ?>
                    </div>
                    <div class="form-actions wizard mgtp-20">
                        <div class="row mgbt-xs-0">
                            <div class="col-xs-12 text-center">
                                <?php echo CHtml::hiddenField('scenario', 'spouse_submit', array('id' => 'hiddenInput')); ?>
                                <?php echo CHtml::submitButton('Submit', array("value" => "Update", "class" => "btn vd_btn next mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent button-full")); ?>
                            </div>
                        </div>
                        <?php $this->endWidget(); ?>
                    </div>
                    </form>
                </div>
            </div>                   
        </div></div>





</section>