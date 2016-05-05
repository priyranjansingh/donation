<section>
    <div class="ml-header relative clear" >
        <div class="p-20" >
            <h3 class="mdl-color-text--white m-t-20 m-b-5 t-center">Vaad HaChessed User Portal</h3>
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

                            <div class="mdl-card__title ">
                                <h2 class="mdl-card__title-text">
                                    <i class="material-icons mdl-color-text--grey m-r-5 lh-13">account_circle</i>
                                    Login
                                </h2>
                            </div>
                            <div class="p-l-20 p-r-20 p-b-20">
                                <?php
                                $form = $this->beginWidget('CActiveForm', array(
                                    'id' => 'login-form',
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
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">

                                    <?php echo $form->textField($model, 'username', array('placeholder' => 'Username', 'class' => 'mdl-textfield__input')); ?>
                                    <?php echo $form->error($model, 'username'); ?>
                                </div>
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">
                                    <?php echo $form->passwordField($model, 'password',array('placeholder' => 'Password','class'=>'mdl-textfield__input')); ?>
                                    <?php echo $form->error($model, 'password', array('placeholder' => 'Password')); ?>
                                </div>

                                <div class="m-t-20">
                                    <button  type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect mdl-color--light-blue">
                                        Login
                                    </button>
                                    <a href="<?php echo base_url(); ?>/user/default/register"><button type="button" class="mdl-button mdl-js-button mdl-js-ripple-effect">
                                        Register
                                        </button></a>
                                      
                                </div>
                                <?php $this->endWidget(); ?>
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