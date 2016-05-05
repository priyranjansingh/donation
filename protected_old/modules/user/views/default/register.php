<section>
    <div class="ml-header relative clear">
        <div class="p-20">
            <h3 class="mdl-color-text--white m-t-20 m-b-5 t-center">Vaad HaChessed User Portal</h3>

        </div>
    </div>

    <div class="mdl-grid mdl-grid--no-spacing ">

        <div class="mdl-cell mdl-cell--3-col mdl-cell--3-col-tablet mdl-cell--3-col-phone no-p-l ">
            &nbsp;
        </div>
        <div class="mdl-cell mdl-cell--6-col mdl-cell--6-col-tablet mdl-cell--6-col-phone no-p-l">
            <div class="ml-card-holder ml-card-holder-first p-20">
                <div class="mdl-card mdl-shadow--1dp back-none">
                    <div class="panel back-none no-margin">

                        <div class="panel-body-list  p-20">
                            <div class="mdl-card__title ">
                                <h2 class="mdl-card__title-text">
                                    <i class="material-icons mdl-color-text--grey m-r-5 lh-13">account_circle</i>
                                    Register
                                </h2>
                            </div>
                            <div class="p-l-20 p-r-20 p-b-20">
                                <?php
                                $form = $this->beginWidget('CActiveForm', array(
                                    'id' => 'registration-form',
                                    'enableClientValidation' => true,
                                    //'enableAjaxValidation'=>true,
                                    'clientOptions' => array(
                                        'validateOnSubmit' => true,
                                    ),
                                    'htmlOptions' => array(
                                        'autcomplete' => "off",
                                    ),
                                ));
                                ?>
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">
                                    <?php echo $form->textField($model, 'username', array("placeholder" => "Username", "class" => "mdl-textfield__input")); ?>
                                    <?php echo $form->error($model, 'username'); ?>
                                </div>

                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">
                                    <?php echo $form->passwordField($model, 'password', array("placeholder" => "Password", "class" => "mdl-textfield__input")); ?>
                                    <?php echo $form->error($model, 'password'); ?>
                                </div>
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">
                                    <?php echo $form->passwordField($model, 'confirm_password', array("placeholder" => "Re-enter password", "class" => "mdl-textfield__input")); ?>
                                    <?php echo $form->error($model, 'confirm_password'); ?>
                                </div>
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">
                                    <?php echo $form->textField($model, 'first_name', array("placeholder" => "First Name", "class" => "mdl-textfield__input")); ?>
                                    <?php echo $form->error($model, 'first_name'); ?>
                                </div>
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">
                                    <?php echo $form->textField($model, 'last_name', array("placeholder" => "Last Name", "class" => "mdl-textfield__input")); ?>
                                    <?php echo $form->error($model, 'last_name'); ?>
                                </div>
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">
                                    <?php echo $form->textField($model, 'spouse_name', array("placeholder" => "Spouse Name", "class" => "mdl-textfield__input")); ?>
                                    <?php echo $form->error($model, 'spouse_name'); ?>
                                </div>
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">
                                    <?php echo $form->textField($model, 'email', array("placeholder" => "Email address", "class" => "mdl-textfield__input")); ?>
                                    <?php echo $form->error($model, 'email'); ?>
                                </div>
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">
                                    <?php echo $form->textField($model, 'mobile', array("placeholder" => "Mobile phone", "class" => "mdl-textfield__input")); ?>
                                    <?php echo $form->error($model, 'mobile'); ?>
                                </div>
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">
                                    <?php echo $form->textField($model, 'address', array("placeholder" => "Street address (No PO Box)", "class" => "mdl-textfield__input")); ?>
                                    <?php echo $form->error($model, 'address'); ?>
                                </div>
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">
                                    <?php echo $form->textField($model, 'city', array("placeholder" => "City", "class" => "mdl-textfield__input")); ?>
                                    <?php echo $form->error($model, 'city'); ?>
                                </div>
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">
                                    <?php echo $form->dropDownList($model, 'state',Yii::app()->params['state'], array("placeholder" => "State", 'class' => "width-12   select2-chosen  width-100")); ?>
                                    <?php echo $form->error($model, 'state'); ?>
                                </div>
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">
                                    <?php echo $form->textField($model, 'zip', array("placeholder" => "ZIP code", "class" => "mdl-textfield__input")); ?>
                                    <?php echo $form->error($model, 'zip'); ?>
                                </div>

                                <div class="m-t-20">
                                    <?php echo CHtml::submitButton('Register', array("class" => "mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect mdl-color--light-green")); ?>

                                    <a href="<?php echo base_url(); ?>/user/default/login">
                                        <button type="button" class="mdl-button mdl-js-button mdl-js-ripple-effect" data-upgraded=",MaterialButton,MaterialRipple">
                                        Cancel
                                        <span class="mdl-button__ripple-container"><span class="mdl-ripple is-animating" style="width: 202.82px; height: 202.82px; transform: translate(-50%, -50%) translate(54px, 15px);"></span></span></button>
                                    </a>    
                                </div>
                                <?php $this->endWidget(); ?>     
                            </div>      
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>