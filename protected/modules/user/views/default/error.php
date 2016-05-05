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
                                    Error <?php echo $code; ?>
                                </h2>
                            </div>
                            <div class="p-l-20 p-r-20 p-b-20">
                                <?php echo CHtml::encode($message); ?>
                                <br/>
                                <?php if(!isFrontUserLoggedIn()): ?>
                                    <a href="<?php echo base_url(); ?>/user">Back To Login</a>
                                <?php else: ?>
                                    <a href="<?php echo base_url(); ?>/user">Back To Dashboard</a>
                                <?php endif; ?>
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