 <div class="header ">


            <div class="pull-left full-height visible-sm visible-xs">

                <div class="sm-action-bar">
                    <a data-toggle="sidebar" class="btn-link toggle-sidebar" href="#">
                        <span class="icon-set menu-hambuger"></span>
                    </a>
                </div>

            </div>

            <div class="pull-right full-height visible-sm visible-xs">

                <div class="sm-action-bar">
                    <a data-toggle-element="#quickview" data-toggle="quickview" class="btn-link" href="#">
                        <span class="icon-set menu-hambuger-plus"></span>
                    </a>

                </div>

            </div>

            <div class=" pull-left sm-table">
                <div class="header-inner">
                    <div class="brand inline">
                        <img  data-src-retina="<?php echo $baseUrl; ?>/assets/img/logo_2x.png" data-src="<?php echo $baseUrl; ?>/assets/img/logo.png" alt="logo" src="<?php echo $baseUrl; ?>/assets/img/logo.png">
                    </div>

                  
                    <ul class="main-menu">
                        <li><a href="<?php echo base_url()."/user/default/accountsummary"; ?>">Summary</a></li>
                    </ul>
                    
                </div>
            </div>
           
            <div class=" pull-right">

                <div class="visible-lg visible-md m-t-10">
                    <div class="pull-left p-r-10 p-t-10 fs-16 font-heading">
                        <span class="semi-bold"><?php echo Yii::app()->session['first_name'] . " " . Yii::app()->session['last_name']; ?></span> 
                    </div>
                    <div class="dropdown pull-right">
                        <button aria-expanded="false" aria-haspopup="true" data-toggle="dropdown" type="button" class="profile-dropdown-toggle">
                            <span class="thumbnail-wrapper d32 circular inline m-t-5">
                                <img width="32" height="32" data-src-retina="<?php echo $baseUrl; ?>/assets/img/profiles/avatar_small2x.jpg" data-src="<?php echo $baseUrl; ?>/assets/img/profiles/avatar.jpg" alt="" src="<?php echo $baseUrl; ?>/assets/img/profiles/avatar.jpg">
                            </span>
                        </button>
                        <ul role="menu" class="dropdown-menu profile-dropdown">
                            <li><a href="#"><i class="pg-settings_small"></i> Settings</a>
                            </li>
                            
                            <li class="bg-master-lighter">
                                <a class="clearfix" href="<?php echo base_url()."/user/default/logout"?>">
                                    <span class="pull-left">Logout</span>
                                    <span class="pull-right"><i class="pg-power"></i></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>