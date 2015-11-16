<div id="content" class="contentContainer">
    <header><div class="company-logo"></div></header>

    <div id="main" class="main " role="main">

        <section id="login" class="login" data-role="page" data-title="Log in to your Vaad HaChessed User Portal account">
            <h1 class="headerText accessAid">Log in to your Vaad HaChessed User Portal account</h1>
            <!--<form action="AccountSummary.html" method="post" class="proceed maskable" name="login" autocomplete="off" novalidate>-->

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
            <div id="passwordSection" class="clearfix">
                <div class="textInput" id="login_emaildiv">
                    <div class="fieldWrapper">
                        <?php echo $form->textField($model, 'username', array('placeholder' => 'Username')); ?>
                        <?php echo $form->error($model, 'username'); ?>
                    </div>
                </div>

                <div class="textInput lastInputField" id="login_passworddiv">
                    <div class="fieldWrapper">
                     <?php echo $form->passwordField($model, 'password'); ?>
                     <?php echo $form->error($model, 'password',array('placeholder' => 'Password')); ?>
                    </div>
                </div>
            </div>

            <div class="actions actionsSpaced">
                <button class="button actionContinue" type="submit" id="btnLogin" name="btnLogin" value="Login">Log In</button>
            </div>
            <div class="forgotLink"><a href="RecoverPassword" id="forgotPasswordModal" class="scTrack:unifiedlogin-click-forgot-password">Forgot your email or password?</a>
                <div class="pwr-modal" id="forgot-password-modal" class="forgotPasswordModal" aria-label="Password Recovery">
                    <iframe id="pwdIframe" data-src="PasswordRecovery.html" scrolling="no" data-auto-reload="true" data-tabindex="0"></iframe>
                </div>
            </div>
            </form>
            <?php $this->endWidget(); ?>
            <a href="CreateAccount" class="button secondary" id="createAccount">Sign Up</a>
        </section>
    </div>
</div>