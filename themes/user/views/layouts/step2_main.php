<!DOCTYPE html>
<html lang="en_US" dir="ltr" class="js js flexbox cssanimations">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<?php
        $baseUrl = Yii::app()->theme->baseUrl;
        $cs = Yii::app()->getClientScript();
        Yii::app()->clientScript->registerCoreScript('jquery');
        ?>

<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/icons/ico144.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/icons/ico114.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/icons/ico72.png">
<link rel="apple-touch-icon-precomposed" href="assets/icons/ico64.png">
<link rel="shortcut icon" sizes="196x196" href="assets/icons/ico196.png">
<link rel="shortcut icon" type="image/x-icon" href="assets/icons/favicon.ico">
<link rel="icon" type="image/x-icon" href="assets/icons/ico32.png">

<title>Vaad HaChessed | Donate Now</title>
<link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/donatenow.app.ltr.css">
<script type="text/javascript" async="" src="<?php echo $baseUrl; ?>/assets/js/802b93f0fe41b41869a2e449e704709d.js"></script>

<link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/activity.app.ltr.css">
<link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/activity.ltr.css">
</head>


<body data-iswireless="" data-istablet="" data-view-name="transfer/index" data-js-path="" data-template-path="">

<!--
<body data-iswireless="" data-istablet="" data-view-name="transfer/index" 
data-js-path="https://www.paypalobjects.com/web/res/36c/ac59074d919d584958240dc76ef26/js" 
data-template-path="https://www.paypalobjects.com/web/res/36c/ac59074d919d584958240dc76ef26/templates/US/en/%s.js">
-->

<div class="navbar navbar-fixed-top header navbar-header noPrint js_globalNavView" id="header" role="banner" data-show-warning="">
	<div class="navbar-inner">
		<div class="navBanner clearfix">
			<a href="#" class="toggleMenu visible-leftnav pull-left nemo_mobileNavMenuToggle">Main Menu</a>
			
			<div class="brand">
				<a href="Website"><img src="assets/images/logo_212x56.png" alt="Vaad HaChessed" width="106" height="28" class="nemo_regularPpLogo"></a>
			</div>
			
			<div class="headerActions">
				<ul class="navSecondary">
					<li class="notifications js_notificationButtonView notifications_mobile nemo_headerNotifications" data-autodisplay="false"><a href="#" class="js_notifications-toggleTrigger alerts nemo_notificationsMobileTrigger" name="openNotifications" data-pagename="main:walletweb:notification:open:" data-pagename2="main:walletweb:notification:open::::" role="button" title="Notifications"><span class="accessAid">Notifications</span><span class="notificationCount notificationLength-0">0</span></a></li>
				</ul>
			</div>
		</div>
		
		<nav id="navMenu" class="navMenu clearfix noPrint" role="navigation">
			<ul class="globalNav clearfix">
				<li><a href="AccountSummary.html" class="navLink nemo_globalNavSummaryLink"><span class="globalNav-iconWrapper"><span class="globalNav-icon globalNav-icon_linkSummary"></span></span> <span class="navText">Summary</span></a></li>
				<li><a href="Activity.html" class="navLink nemo_globalNavActivityLink"><span class="globalNav-iconWrapper"><span class="globalNav-icon globalNav-icon_linkActivity"></span></span> <span class="navText">Activity</span></a></li>
				<li><a href="SMS" class="navLink nemo_globalNavTransferLink"><span class="globalNav-iconWrapper"><span class="globalNav-icon globalNav-icon_linkTransfer"></span></span> <span class="navText">SMS</span></a></li>
				<!--<li><a href="" class="navLink nemo_globalNavWalletLink"><span class="globalNav-iconWrapper"><span class="globalNav-icon globalNav-icon_linkShop"></span></span> <span class="navText">Wallet</span></a></li>-->
				<li><a href="Contact" class="navLink nemo_globalNavShopLink" target="_top"><span class="globalNav-iconWrapper"><span class="globalNav-icon globalNav-icon_linkWallet"></span></span> <span class="navText">Contact</span></a></li>
			</ul>
			
			<ul class="navSecondary">
				<li class="notifications js_notificationButtonView notifications_desktop nemo_headerNotifications" data-autodisplay="false"><a href="#" class="js_notifications-toggleTrigger alerts nemo_notificationsDesktopTrigger" name="openNotifications" data-pagename="main:walletweb:notification:open:" data-pagename2="main:walletweb:notification:open::::" role="button" title="Notifications"><span class="accessAid">Notifications</span><span class="notificationCount notificationLength-0">0</span></a></li>
				<li><a href="Settings.html" class="navLink" name="settings" title="Account & Settings"><span class="globalNav-iconWrapper globalNav-iconWrapper_settings"><span class="globalNav-icon globalNav-icon_linkSettings"></span></span> <span class="navText visible-leftnav">Account & Settings</span></a></li>
				<li><a href="Help" class="navLink visible-leftnav" name="help"><span class="globalNav-iconWrapper"><span class="globalNav-icon globalNav-icon_linkHelp"></span></span> <span class="navText">Help</span></a></li>
				<li><a href="DonateNow.html" class="navLink active visible-leftnav" name="donateNow"><span class="globalNav-iconWrapper"><span class="globalNav-icon globalNav-icon_linkWallet"></span></span> <span class="navText">Donate Now</span></a></li>
				<li><a href="MeshulachSearch" class="navLink visible-leftnav" name="meshulachSearch"><span class="globalNav-iconWrapper"><span class="globalNav-icon globalNav-icon_linkCalendar"></span></span> <span class="navText">Meshulach Search</span></a></li>

				<li class="logout"><a href="Logout" class="btn btn-small btn-secondary logout">Log out</a></li>
			</ul>
			
			<ul class="profile visible-leftnav unstyled">
				<li>Sample User</li>
				<li class="email">sample@sample.com</li>
			</ul>
		</nav>
	</div>
</div>



<div class="navbar-print onlyPrint" data-show-warning="">
	<div class="row">
		<div class="col-xs-12"><img src="assets/images/logo_212x56.png" alt="Vaad HaChessed" width="106" height="28"></div>
	</div>
</div>

<div class="sidepanel js_globalNotifs-sidepanel noPrint nemo_notificationsPanel" tabindex="-1">
	<div id="sidepanelNotifications" class="sidepanelContainer panel">
		<div class="sidepanel-header">
			<div class="row"><div><h3>Notifications </h3></div></div>
		</div>
		
		<div class="sidepanel-body">
			<ul class="globalNotifs-list">
				<li><span class="globalNotifs-item"><span class="globalNotifs-message globalNotifs-message_noNotifs">No Notifications</span></span></li>
			</ul>
		</div>
	</div>
</div>







<div class="contents vx_mainContent" id="contents" role="main" aria-labelledby="heading1">


<section id="js_activityView" class="mainContents accountSection activityContainer">


	

<div>
	<section id="js_filterView" class="filters-container" data-preset-custom-startdate="" data-preset-custom-enddate="" data-preset-search-term="">
		<section class="filters-section js_filters-section show-phone">
			<form name="filtersForm" method="get" class="filters-form" id="js_filters-form" action="DonateNow3.html">
				<p><span>.</span></p>
				<p><span>.</span></p>
				<input name="VisitCode" type="hidden" value="VisitCode">
				<input name="continueButton" class="vx_btn vx_btn-secondary vx_btn-small filters-searchBtn js_filters-searchBtn nemo_filters-searchBtn validateBeforeSubmit" type="submit" role="button" aria-selected="false" value="Continue">
			</form>
		</section>
	</section>
</div>


	
	
<div id="js_transactionCollection">

<section class="activityModule js_completedModule nemo_completedModule" aria-labelledby="activityModuleHeaderCompleted">
<h3 id="activityModuleHeaderCompleted" class="vx_h5 moduleHeader withStatements nemo_activityModuleHeaderCompleted">Previous Donations to ->Solicitor Name Here<- (layout below is exactly the same as on Activity Page)</h3>


<ul class="transactionList js_transactionList">
	

<li class="transactionRow transactionRowHover js_transactionItem" data-href="">
	<div class="transactionItem js_transactionItem nemo_transactionItem">
		<div class="row">
			<div class="col-xs-1">
				<div id="txnDate" class="dateParts js_transactionDescriptionLink linkedBlock js_linkedBlock" data-href="">
				<span class="dateMonth vx_h7">Sep</span> <span class="dateDay vx_h4">07</span> <span class="accessAid">2015</span></div>
			</div>
					
			<div class="col-xs-11 transactionDetailsContainer js_transactionDetailsContainer">
				<a id="txnDescription" class="transactionDescriptionContainer js_transactionDescriptionContainer linkedBlock js_linkedBlock" href="?trans=transaction_hash" role="button" aria-expanded="false" aria-controls="" aria-describedby="">
					<span class="transactionDescription">(Visit Code) Solicitor Name Here</span>
					<!--<span class="transactionType vx_small-text"> </span>-->
				</a>
						
				<div id="txnAmountAndCurrency" class="transactionAmount js_transactionDescriptionLink linkedBlock js_linkedBlock primaryCurrency " data-href="">
					<span aria-hidden="true" class="isNegative vx_h3">-</span><span class="accessAid">negative</span> <span class="netAmount vx_h4" dir="rtl">$18.00 </span>
				</div>
				
				<div class="vx_small-text action">
					<span class="icon icon-small icon-action-arrow-half-small" aria-hidden="true"></span>
					<span class="message">Transaction Type - Donation or Payment</span>
					
					<!--<a href="" target="_blank" class="nemo_actions-track">Cancel</a>
					<a href="addTracking" class="nemo_actions-addTracking">Add tracking info</a>-->
				</div>

			</div>
		</div>
	</div>
	<div id="transactionDetails" class="js_transactionDetails highlightTransactionPanel hide" role="region" aria-busy="false" aria-labelledby=""></div>
</li>


<li class="transactionRow transactionRowHover js_transactionItem" data-href="">
	<div class="transactionItem js_transactionItem nemo_transactionItem">
		<div class="row">
			<div class="col-xs-1">
				<div id="txnDate" class="dateParts js_transactionDescriptionLink linkedBlock js_linkedBlock" data-href="">
				<span class="dateMonth vx_h7">Sep</span> <span class="dateDay vx_h4">18</span> <span class="accessAid">2015</span></div>
			</div>
					
			<div class="col-xs-11 transactionDetailsContainer js_transactionDetailsContainer">
				<a id="txnDescription" class="transactionDescriptionContainer js_transactionDescriptionContainer linkedBlock js_linkedBlock" href="?trans=transaction_hash" role="button" aria-expanded="false" aria-controls="" aria-describedby="">
					<span class="transactionDescription">(Visit Code) Solicitor Name Here</span>
					<!--<span class="transactionType vx_small-text"> </span>--></a>
						
				<div id="txnAmountAndCurrency" class="transactionAmount js_transactionDescriptionLink linkedBlock js_linkedBlock primaryCurrency " data-href="">
					<span aria-hidden="true" class="isNegative vx_h3">-</span><span class="accessAid">negative</span> <span class="netAmount vx_h4" dir="rtl">$32.00 </span>
				</div>
				
				<div class="vx_small-text action">
					<span class="icon icon-small icon-action-arrow-half-small" aria-hidden="true"></span>
					<span class="message">Donation</span>
					
					<!--<a href="" target="_blank" class="nemo_actions-track">Cancel</a>
					<a href="addTracking" class="nemo_actions-addTracking">Add tracking info</a>-->
				</div>

			</div>
		</div>
	</div>
	<div id="transactionDetails" class="js_transactionDetails highlightTransactionPanel hide" role="region" aria-busy="false" aria-labelledby=""></div>
</li>


</ul>

</section>


</div>

<div class="loadMore-container js_loadMore-container" data-show-load-more="" data-next-page-token=""></div>
<div class="spinner loading hide"><p>Searching...</p></div>
</section>
</div>
























<div id="footer" class="navbar footer noPrint animated med nemo_footer" role="contentinfo">
	<div class="navbar-inner">
		<div class="navbar-content">
			<p class="hidden-phone footerLink-classic"><a href="http://klaftech.com" target="_top" class="nemo_classicLink" name="classic" data-pagename="main:walletweb:classic:start::" data-pagename2="main:walletweb:classic:start::::">Developer</a></p>
			<ul class="inline footerList-links footerList-links_primary">
				<li><a href="Help" target="_top" class="nemo_helpLink" name="footerHelp">Help</a></li>
				<li><a href="Contact" target="_top" class="nemo_contactLink" name="contact">Contact</a></li>
				<li><a href="Security" target="_blank" class="nemo_securityLink" name="footerSecurity">Security</a></li>
			</ul>
			
			<p class="footerLink-feedback" id="siteFeedback">
			<!--<a href="#" class="beta feedback nemo_feedback hidden-phone">Feedback</a></p>-->
			<p class="footerCopyright nemo_copyrightText">©2015 Klaftech Data Systems LLC. All rights reserved.</p>
			
			<!--
			<ul class="inline footerList-links footerList-links_secondary">
				<li><a href="" target="_top" name="privacy" class="nemo_privacyLink">Privacy</a></li>
				<li><a href="" target="_top" name="legal" class="nemo_legalLink">Legal</a></li>
				<li><a href="" target="_top" name="policyUpdates" class="nemo_policyUpdatesLink">Policy updates</a></li>
			</ul>
			-->
		</div>
	</div>
</div>


<section id="fullscreentooltip"></section>

<script type="text/javascript" src="<?php echo $baseUrl; ?>/assets/js/pp_jscode_080706.js"></script>
<script type="text/javascript" src="<?php echo $baseUrl; ?>/assets/js/pa.js"></script>
<script src="<?php echo $baseUrl; ?>/assets/js/app2.js"></script>

<script src="<?php echo $baseUrl; ?>/assets/js/bootstrap.js"></script>

</body>
</html>