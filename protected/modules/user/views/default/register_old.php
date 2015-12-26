<div id="content">
    <div id="main" class="falcon">
        <div class="nsb_6_18">
            <div class="falconTray">
                <div id="pageLevelMessage" role="alert" class="clearfix">
                    <div class="message"></div>
                </div>

                <div class="trayNavOuter clearfix">
                    <div class="progress" id="progress" aria-describedby="navigationMenu">
                        <div class="progressOuter">
                            <div class="progress_meter" id="progress_meter" aria-describedby="navigationMenu"></div>
                        </div>
                        <div class="progressLowerHr"></div>
                    </div>
                    <div class="trayNavInner clearfix" id="onboardingContent" role="main">
                        <?php //pre($model->attributes); pre($model->errors);  ?>
                        <section id="create">
                            <header><h1 class="falconHeaderText">
                                    <div id="accountSignup">Sign up for an account</div></h1>
                            </header>
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
                                    'class' => "formMedium lap proceed",
                                ),
                            ));
                            ?>
                            <h2 id="accountSignupMessage" class="subheaderText">Create a login</h2>
                            <div class="row-fluid">
                                <div class="row-fluid">
                                    <div class="textInput username span12">
                                        <?php echo $form->textField($model, 'username', array("placeholder" => "Username")); ?>
                                        <?php echo $form->error($model, 'username'); ?>
                                    </div>
                                </div>
                            </div>
                            <div id="usernameCheck" class="errorContainer message" style="display: none;margin-bottom:20px;">
                                <ul>
                                    <li class="restriction active"><username id="usernameCheckId"></username>&nbsp;already exists. &nbsp; <br><button class="button skipPost" id="loginExistingAccountBtn" data-validate="false" value="login" type="button">Log In</button>&nbsp;or enter a different username to create a new account.</li>
                                </ul>
                            </div>

                            <div id="passwordSection" class="row-fluid ">
                                <div class="textInput password enterPassword span6">
                                    <?php echo $form->passwordField($model, 'password', array("placeholder" => "Password")); ?>
                                    <?php echo $form->error($model, 'password'); ?>
                                </div>
                                <div class="textInput password confirmPassword span6">
                                    <?php echo $form->passwordField($model, 'confirm_password', array("placeholder" => "Re-enter password")); ?>
                                    <?php echo $form->error($model, 'confirm_password'); ?>
                                </div>
                            </div>

                            <div id="businessContactDetails">
                                <h2 class="subheaderText"> Enter your contact information</h2>

                                <div class="row-fluid " id="businessContact">
                                    <div class="textInput firstName span6">
                                        <?php echo $form->textField($model, 'first_name', array("placeholder" => "First Name")); ?>
                                        <?php echo $form->error($model, 'first_name'); ?>
                                    </div>
                                    <div class="textInput lastName span6">
                                        <?php echo $form->textField($model, 'last_name', array("placeholder" => "Last Name")); ?>
                                        <?php echo $form->error($model, 'last_name'); ?>
                                    </div>
                                </div>

                                <div class="row-fluid" id="businessNameNumber">
                                    <div class="textInput businessName span7">
                                        <?php echo $form->textField($model, 'spouse_name', array("placeholder" => "Spouse Name")); ?>
                                        <?php echo $form->error($model, 'spouse_name'); ?>
                                    </div>
                                </div>

                                <div class="row-fluid">
                                    <div class="textInput emailaddress span12">
                                        <?php echo $form->textField($model, 'email', array("placeholder" => "Email address")); ?>
                                        <?php echo $form->error($model, 'email'); ?>
                                    </div>
                                </div>

                                <div class="row-fluid">
                                    <div class="textInput phoneNumber span5">
                                        <?php echo $form->textField($model, 'mobile', array("placeholder" => "Mobile phone")); ?>
                                        <?php echo $form->error($model, 'mobile'); ?>
                                    </div>
                                </div>

                                <div class="" id="businessAddress" aria-expanded="">
                                    <div class="row-fluid">
                                        <div class="textInput span12 streetAddress">
                                            <?php echo $form->textField($model, 'address', array("placeholder" => "Street address (No PO Box)")); ?>
                                            <?php echo $form->error($model, 'address'); ?>
                                        </div>
                                    </div>

                                    <div class="cityState row-fluid clearfix">
                                        <div class="textInput span6 city createCityWrap">
                                            <?php echo $form->textField($model, 'city', array("placeholder" => "City")); ?>
                                            <?php echo $form->error($model, 'city'); ?>
                                        </div>
                                        <div class="selectDropdown state show createStateWrap span3">
                                        <?php echo $form->dropDownList($model, 'state',array(""=>"State","WY"=>"WY"), array("placeholder" => "State")); ?>
                                        <?php echo $form->error($model, 'state'); ?>
                                        </div>

                                        <div class="textInput span3 zip">
                                           
                                             <?php echo $form->textField($model, 'zip', array("placeholder" => "ZIP code")); ?>
                                            <?php echo $form->error($model, 'zip'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="createTerms checkbox">
                                <p>I have read and agree to the <a target="_blank" href="">Vaad HaChessed User Agreement</a>&nbsp;&&nbsp;<a target="_blank" href="">Privacy Policy</a>.&nbspI am authorized to add the phone number entered above and understand Vaad HaChessed may contact me with automated calls and texts as described in the above agreements.</p>
                            </div>
                            <?php echo CHtml::submitButton('Agree and Continue', array("class" => "button actionContinue")); ?>
                            <?php $this->endWidget(); ?>     
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>