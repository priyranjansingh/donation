<!DOCTYPE html>
<html lang="en_US" dir="ltr" class="js">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<?php
      $baseUrl = Yii::app()->theme->baseUrl; 
      $cs = Yii::app()->getClientScript();
      Yii::app()->clientScript->registerCoreScript('jquery');
?>
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">

<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $baseUrl;?>/assets/icons/pp144.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $baseUrl;?>/assets/icons/pp114.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $baseUrl;?>/assets/icons/pp72.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo $baseUrl;?>/assets/icons/pp64.png">
<link rel="shortcut icon" sizes="196x196" href="<?php echo $baseUrl;?>/assets/icons/pp196.png">
<link rel="shortcut icon" type="image/x-icon" href="<?php echo $baseUrl;?>/assets/icons/favicon.ico">
<link rel="icon" type="image/x-icon" href="<?php echo $baseUrl;?>/assets/icons/pp32.png">

<title>Vaad HaChessed: Summary</title>

<link rel="stylesheet" href="<?php echo $baseUrl;?>/assets/css/summary.app.ltr.css">
<link rel="stylesheet" href="<?php echo $baseUrl;?>/assets/css/summary.ltr.css">
<script type="text/javascript" async="" src="<?php echo $baseUrl;?>/assets/js/802b93f0fe41b41869a2e449e704709d.js"></script>
<script>document.documentElement.className = "js";</script>

<!--[if lt IE 9]>
<script>(function (a) {var b = ('section,article,aside,hgroup,header,footer,nav,figure,figcaption,video,audio,track,embed,mark,progress,' +'meter,time,data,ruby,rt,rp,bdi,wbr,canvas,command,details,datalist,keygen,output').split(','), c = b.length;while (c) { a(b[c-=1]); }}(document.createElement));</script>
<link rel="stylesheet" href="https://www.paypalobjects.com/web/res/709/23abf5e8b1bf8b1ab6bb4f64a09fa/css/ie.ltr.css" />
<script src="https://www.paypalobjects.com/web/res/709/23abf5e8b1bf8b1ab6bb4f64a09fa/js/lib/shim/es5.min.js"></script>
<![endif]-->

<script type="text/javascript" charset="utf-8" async="" src="assets/js/summary-4.4.js"></script>
</head>


<body data-iswireless="" data-istablet="" data-view-name="summary/index">


<!--[if lte IE 8]>
<div class="banner-notification--container js_banner-notification--container nemo_banner-notification--container"><div class="banner-notification--content js_banner-notification--content"><div class="banner-notification--table js_banner-notification--table"><span class="icon icon-small icon-attention-small"></span><p>Your browser is out of date. Get the latest version to see all your account features.</p></div></div></div><![endif]-->

<!-- Page Header with Links -->
<div class="vx_globalNav_main globalNav_main js_globalNavView" id="header" role="banner" data-show-warning="">
	<div class="vx_globalNav-container">
		<div class="vx_globalNav-brand_desktop">
			<a href="Website"><img src="<?php echo $baseUrl;?>/assets/images/logo_212x56.png" alt="Vaad HaChessed" width="106" height="28" class="nemo_regularPpLogo"></a>
		</div>
		<div class="vx_globalNav-navContainer noPrint">
			<nav id="navMenu" class="vx_globalNav-nav" role="navigation">
				<ul class="vx_globalNav-list">
					<li><a href="AccountSummary" class="vx_isActive nemo_globalNavSummaryLink"><span class="vx_globalNav-iconWrapper"><span class="vx_globalNav-navIcon globalNav-icon_linkSummary"></span></span> <span class="vx_globalNav-navText">Summary</span></a></li>
					<li><a href="History" class=" nemo_globalNavActivityLink"><span class="vx_globalNav-iconWrapper"><span class="vx_globalNav-navIcon globalNav-icon_linkActivity"></span></span> <span class="vx_globalNav-navText">History</span></a></li>
					<li><a href="SMS" class=" nemo_globalNavTransferLink"><span class="vx_globalNav-iconWrapper"><span class="vx_globalNav-navIcon globalNav-icon_linkTransfer"></span></span> <span class="vx_globalNav-navText">SMS</span></a></li>
					<!--<li><a href="" class=" nemo_globalNavWalletLink"><span class="vx_globalNav-iconWrapper"><span class="vx_globalNav-navIcon globalNav-icon_linkShop"></span></span> <span class="vx_globalNav-navText">Wallet</span></a></li>-->
					<li><a href="Contact" class=" nemo_globalNavShopLink"><span class="vx_globalNav-iconWrapper"><span class="vx_globalNav-navIcon globalNav-icon_linkWallet"></span></span> <span class="vx_globalNav-navText">Contact</span></a></li>
				</ul>
				<ul class="vx_globalNav-list_secondary">
					<li class="vx_globalNav-actionItem_mobile globalNav_notificationItem vx_globalNav-notificationItem_mobile js_notificationButtonView nemo_headerNotifications" data-autodisplay="false"><a href="" class="vx_globalNav-link_notifications notifications_desktop js_notifications-toggleTrigger nemo_notificationsDesktopTrigger" name="openNotifications" data-pagename="main:walletweb:notification:open:" data-pagename2="main:walletweb:notification:open::::" role="button" title="Notifications"><span class="vx_globalNav-iconWrapper_secondary"><span class="vx_globalNav-navIcon vx_globalNav-navIcon_linkNotifications"></span><span class="vx_notificationCount notificationLength-0">0</span></span><span class="vx_globalNav-navText_secondary vx_globalNav-navText_secondaryMobile">Notifications</span></a></li>
					<li><a href="Account" class="vx_globalNav-link_settings" name="settings" title="Account"><span class="vx_globalNav-iconWrapper_secondary"><span class="vx_globalNav-navIcon vx_globalNav-navIcon_linkSettings"></span></span><span class="vx_globalNav-navText_secondary">Account</span></a></li>
					<li class="globalNav-listItem_mobile"><a href="Help" class="vx_globalNav-link_help" name="help"><span class="vx_globalNav-iconWrapper_secondary"><span class="vx_globalNav-navIcon vx_globalNav-navIcon_linkHelp"></span></span><span class="vx_globalNav-navText_secondary">Help</span></a></li>
					<li class="globalNav-listItem_mobile"><a href="DonateNow" class="vx_globalNav-link_help" name="DonateNow"><span class="vx_globalNav-iconWrapper_secondary"><span class="vx_globalNav-navIcon vx_globalNav-navIcon_linkWallet"></span></span><span class="vx_globalNav-navText_secondary">Donate Now</span></a></li>
					<li class="globalNav-listItem_mobile"><a href="MeshulachSearch" class="vx_globalNav-link_help" name="MeshulachSearch"><span class="vx_globalNav-iconWrapper_secondary"><span class="vx_globalNav-navIcon vx_globalNav-navIcon_linkCalendar"></span></span><span class="vx_globalNav-navText_secondary">Meshulach Search</span></a></li>
					<li class="vx_globalNav-listItem_logout"><a href="Logout" class="vx_globalNav-link_logout nemo_logoutBtn">Log out</a></li>
				</ul>
				<ul class="profile visible-leftnav unstyled">
					<li>Test Account</li>
					<li class="email">test@abc.com</li>
				</ul>
			</nav>
		</div>
	</div>
</div>

<div id="sidepanelNotifications" class="vx_sidepanel sidepanel js_sidepanelView noPrint panel js_globalNotifs-sidepanel" tabindex="-1">
	<div class="vx_sidepanel-headerContainer">
		<h3 class="vx_h3 vx_sidepanel-header">Notifications</h3>
	</div>
	<div class="vx_sidepanel-body">
		<ul class="globalNotifs-list">
			<li><span class="globalNotifs-item"><span class="globalNotifs-message globalNotifs-message_noNotifs">No Notifications</span></span></li>
		</ul>
	</div>
</div>


<div id="js_foreground" class="vx_foreground-container foreground-container">

<div class="vx_globalNav_mobile globalNav_mobile js_globalNavView">
	<a href="AccountSummary" class="js_toggleMobileMenu vx_globalNav-toggleTrigger nemo_mobileNavMenuToggle noPrint">Main Menu</a>
	<div class="vx_globalNav-brand_mobile"><a href="AccountSummary"><img src="<?php echo $baseUrl;?>/assets/images/logo_212x56.png" alt="Vaad HaChessed" width="106" height="28"></a></div>
	<div class="vx_globalNav-actions_mobile">
		<ul class="vx_globalNav-actionsList_mobile">
			<li class="vx_globalNav-actionItem_mobile globalNav_notificationItem vx_globalNav-notificationItem_mobile js_notificationButtonView nemo_headerNotifications" data-autodisplay="false"><a href="https://www.paypal.com/myaccount/home#" class="vx_globalNav-link_notifications notifications_mobile js_notifications-toggleTrigger nemo_notificationsMobileTrigger" name="openNotifications" data-pagename="main:walletweb:notification:open:" data-pagename2="main:walletweb:notification:open::::" role="button" title="Notifications"><span class="vx_globalNav-iconWrapper_secondary"><span class="vx_globalNav-navIcon vx_globalNav-navIcon_linkNotifications"></span><span class="vx_notificationCount notificationLength-0">0</span></span><span class="vx_globalNav-navText_secondary vx_globalNav-navText_secondaryMobile">Notifications</span></a></li>
		</ul>
	</div>
</div>


<div class="contents vx_mainContent" id="contents" role="main" aria-labelledby="heading1">
<div id="js_summaryView" class="mainContents summaryContainer">

 

<h1 id="heading1" class="accessAid">Account Summary</h1>


<!-- Start of Blue Engagement Header Bar -->
<div id="js_engagementModuleView" class="engagementModule nemo_engagementModule" data-engagement-badges="">

<div class="engagementSneakPeek-pullTab js_engagementSneakPeek-pullTab js_engagementSneakPeek-trigger">
	<span class="icon icon-small icon-arrow-down-small" aria-hidden="true"></span>
</div>

<div class="engagementMainBar-container js_engagementMainBar-container">
	<div class="summarySection engagementMainBar row">
		<div class="col-sm-7 progressAndWelcome">
			
			<div id="js_toggleProfileStatus" class="welcomeMessage js_selectModule selectModule " data-module-number="0">
				<p class="vx_h2 engagementWelcomeMessage nemo_welcomeMessageHeader">Welcome, User!</p>
				<p class="toggleProfileStatus">
				<button id="js_engagementActionTrigger" class="vx_btn-link engagement-actionText vx_small-text js_emTrigger nemo_engagementActionTrigger" aria-controls="js_emSlideDownContainer" name="EM_AcctSetup_Open" data-pagename="main:walletweb:summary::main" data-pagename2="main:walletweb:summary::main:::" data-track-type="link"><span class="profileStatusText">Powered by Klaftech Data Systems</span></button>
				<!--<span class="icon icon-small icon-arrow-down-small nemo_profileStatusDownArrow" aria-hidden="true"></span>-->
				</p>
			</div>
		</div>
             <?php  echo $content;   ?>

		<div id="js_engagementActions" class="col-sm-5 engagementActions">
			<ul class="actionsContainer nemo_actionsContainer">
				<li class="actionItem"><a href="DonateNow" role="button" data-module-number="1" name="EM_SendMoney" data-pagename="main:walletweb:summary::main" data-pagename2="main:walletweb:summary::main:::" data-track-type="link" class="vx_small-text selectModule nemo_transferSelect js_selectModule animate"><span class="icon icon-medium icon-send-money" aria-hidden="true"></span><span>Donate Now</span></a></li>
				<li class="actionItem"><a href="MeshulachSearch" target="_blank" role="button" data-pagename="main:walletweb:summary::main" data-pagename2="main:walletweb:summary::main:::" data-track-type="link" data-module-number="2" name="EM_DownloadApp" class="vx_small-text js_selectModule selectModule nemo_appSelect"><span class="icon icon-medium icon-calendar" aria-hidden="true"></span>Meshulach Search</a></li>
				<!--<li class="actionItem"><a href="" role="button" name="EM_Mpi" data-pagename="main:walletweb:summary::main" data-pagename2="main:walletweb:summary::main:::" data-track-type="link" data-module-number="3" class="vx_small-text js_selectModule js_mpiOffer selectModule nemo_mpiSelect"><span class="icon icon-medium icon-phone " aria-hidden="true"></span>Get more time to pay</a></li>-->
			</ul>
		</div>
	</div>
</div>

<div id="js_emSlideDownContainer" aria-expanded="false" role="alertdialog" tabindex="-1" class="emSlideDownContainer nemo_emSlideDownContainer collapseEm hide" data-em-open="false" data-current-module="" data-new-user="" data-total-percentage="80" data-hide-sneak-peek="false" data-hide-account-completion="false" aria-label="">
	<div class="engagementSneakPeek-overlay js_engagementSneakPeek-overlay"></div>
	
	<div id="aria_engagementStatus" data-engagement-stage="accountSetup" class="emModule dimBorderLine js_emModule engagementStatusModule js_engagementStatusModule nemo_engagementStatus " tabindex="-1">
		<div id="js_BadgeLanding" class="emModuleContent">
			<div id="profileStateContainer" class="setupbadgeBanner-container js_profileStates nemo_profileStates nemo_badges badgeDisplay">
				<div class="setupbadgeBanner-container badgeDisplay js_badgeDisplay js_badges js_badgeChild nemo_profileStates nemo_badges active"><p class="statusGreeting vx_h1">Get more from PayPal by setting up the basics.</p>
					<ul id="js_profileStates" class="profileStates nemo_profileStates">
						<li class="setupStep-state nemo_account nemo_account_created nemo_setup_button setupStep-doneState accountCreated"><span class="icon icon-medium icon-checkmark-small setupStep-icon" aria-hidden="true"></span><span class="setupStep-stateContent">Account created</span></li>
						<li class="setupStep-state nemo_bank nemo_setup_button setupStep-doneState"><span class="icon icon-medium icon-checkmark-small setupStep-icon" aria-hidden="true"></span><span class="setupStep-stateContent">Bank confirmed</span></li>
						<li class="setupStep-state nemo_email nemo_setup_button setupStep-doneState"><span class="icon icon-medium icon-checkmark-small setupStep-icon" aria-hidden="true"></span><span class="setupStep-stateContent">Email confirmed</span></li>
						<li class="setupStep-state nemo_card nemo_setup_button setupStep-doneState"><span class="icon icon-medium icon-checkmark-small setupStep-icon" aria-hidden="true"></span><span class="setupStep-stateContent">Card linked</span></li>
						<li class="setupStep-state nemo_mobile nemo_setup_button"><a href="https://www.paypal.com/myaccount/settings" target="_top" class="setupStep-mainLink js_setupStep nemo_setupStep-mainLink isShown" name="EM_Mobile_Confirmed" data-pagename="main:walletweb:summary::main" data-pagename2="main:walletweb:summary::main:::" data-track-type="link"><span class="setupStep-container"><span class="icon icon-medium icon-phone setupStep-icon" aria-hidden="true"></span><span class="setupStep-stateContentContainer"><span class="setupStep-cta">Confirm mobile</span></span></span><span class="setupStep-overlayContainer"><span class="setupStep-overlayIconContainer"><span class="setupStep-overlayIconSubContainer  setupStep-overlayIconSubContainer_phone"><span class="setupStep-inlineIcon"><span class="icon icon-medium icon-phone"></span></span></span></span><span class="setupStep-overlayCtaContainer"><span class="setupStep-overlayCta">Confirm mobile</span><span class="setupStep-overlayContent">Extra protection for your account.</span></span></span></a></li>
					</ul>
				</div>
			</div>
			<a href="https://www.paypal.com/myaccount/home#" class="js_dismiss emClose emClose_acctCompletion nemo_emClose" role="button" data-pagename="main:walletweb:summary::main" data-pagename2="main:walletweb:summary::main:::" data-track-type="link" name="EM_BadgeSetup_Close"><span class="icon icon-small icon-close-small" aria-hidden="true"></span><span class="speakableText">close</span></a>
		</div>
	</div>

	<div class="emModule js_emModule transferBannerContainer nemo_EM_SendMoneyBanner" data-is-sneak-peek-available="true" data-sneak-peek-texts="[&quot;Send money between friends. It’s free if you’re both in the U.S. and you use your bank or balance.&quot;, &quot;Send money to a friend, even if they’re not on PayPal yet.&quot;, &quot;Sending money is the simple way to pay someone back right away.&quot;]" data-sneak-peek-link-name="[&quot;SneakPeek_SendMoney_Free&quot;, &quot;SneakPeek_SendMoney_Unilateral&quot;, &quot;SneakPeek_SendMoney_Simple&quot;]" data-bg-img="">
		<div class="emModuleContent">
			<div class="engagementSneakPeek js_engagementSneakPeek hide">
				<button class="js_engagementSneakPeek-trigger engagementSneakPeek-trigger vx_btn-link" data-sneak-peek-click="" data-pagename="main:walletweb:summary::main" data-track-type="link" name="SneakPeek_SendMoney_Simple"><span class="engagementSneakPeek-content js_engagementSneakPeek-content small-text">Sending money is the simple way to pay someone back right away.</span></button>
			</div>
			<div class="mpiBannerContainer js_mpiBannerContainer transferBanner">
				<div class="row">
					<div class="col-xs-6 transferActionColumns transferActionSeparator">
						<a href="https://www.paypal.com/myaccount/transfer/buy" target="_top" class="nemo_primaryActionButton_transferBuy transferPrimaryActions" name="EM_SendMoney_CTA" data-pagename="main:walletweb:summary::main" data-pagename2="main:walletweb:summary::main:::" data-track-type="link"><span class="icon icon-register engagementAction-icon_transferDesktop" aria-hidden="true"></span><span class="transferPrimaryActionContent vx_h3">Pay for goods or services</span><span class="icon icon-arrow-right-small engagementAction-rightArrowIcon_transferDesktop" aria-hidden="true"></span></a><p class="transferPrimaryActionBody">There’s no fee for you.</p><p>And you’re covered by <a href="https://www.paypal.com/us/webapps/mpp/ua/useragreement-full" target="_blank" class="transferSecondaryActionText nemo_secondaryAction_transferPurchaseProtection" name="emOfferTransferBuySecondaryAction" data-pagename="main:consumer:summary::main" data-pagename2="main:consumer:summary::main:::" data-track-type="link">Purchase Protection</a>.</p>
					</div>
					<div class="col-xs-6 transferActionColumns">
						<a href="https://www.paypal.com/myaccount/transfer/send" target="_top" class="nemo_primaryActionButton_transferSend transferPrimaryActions" name="EM_SendMoney_CTA" data-pagename="main:walletweb:summary::main" data-pagename2="main:walletweb:summary::main:::" data-track-type="link">
							<span class="icon icon-send-money engagementAction-icon_transferDesktop" aria-hidden="true"></span><span class="transferPrimaryActionContent vx_h3">Send money to friends or family</span><span class="icon icon-arrow-right-small engagementAction-rightArrowIcon_transferDesktop" aria-hidden="true"></span>
						</a>
						<p class="transferPrimaryActionBody">It’s free in the U.S. when you use bank or balance.</p>
					</div>
				</div>
			</div>
			<a href="https://www.paypal.com/myaccount/home#" class="js_dismiss emClose nemo_emClose" role="button" name="EM_SendMoney_Close" data-pagename="main:walletweb:summary::main" data-pagename2="main:walletweb:summary::main:::" data-track-type="link"><span class="icon icon-small icon-close-small" aria-hidden="true"></span><span class="speakableText">close</span></a>
		</div>
	</div>

	<div class="emModule js_emModule nemo_EM_DownloadAppBanner" data-is-sneak-peek-available="" data-sneak-peek-texts="" data-sneak-peek-link-name="" data-bg-img="https://www.paypalobjects.com/webstatic/mktg/home/em_app.jpg" style="background: url(https://www.paypalobjects.com/webstatic/mktg/home/em_app.jpg) 50% 50% / cover no-repeat white;">
		<div class="emModuleContent js_emModuleContent">
			<div class="mpiBannerContainer js_mpiBannerContainer">
				<div class="mpiBanner mpi-right">
					<div class="mpiTextContainer" style="color: #fff;">
						<h3 class="mpiHeader vx_h1" style="color: #fff;">More ways to use PayPal with the app</h3>
						<p class="mpiBody vx_h4">Check your account anywhere. Pay at local stores and restaurants. And save with special offers (like $5 off at a local shop).</p>
						<a href="https://www.paypal.com/webapps/mpp/pos-app-microsite" class="vx_btn mpiPrimaryAction js_emPrimaryAction nemo_primaryActionButton_EM_DownloadApp" target="_blank" name="EM_DownloadApp_CTA" data-pagename="main:walletweb:summary::main" data-pagename2="main:walletweb:summary::main:::" data-track-type="link">Get the App</a>
					</div>
				</div>
			</div>
			<a href="https://www.paypal.com/myaccount/home#" class="js_dismiss emClose nemo_emClose" role="button" name="EM_DownloadApp_Close" data-pagename="main:walletweb:summary::main" data-pagename2="main:walletweb:summary::main:::" data-track-type="link" style="color: #fff;">
				<span class="icon icon-small icon-close-small" aria-hidden="true"></span><span class="speakableText">close</span>
			</a>
		</div>
	</div>

	<div class="emModule js_emModule nemo_EM_MpiBanner" data-is-sneak-peek-available="" data-sneak-peek-texts="" data-sneak-peek-link-name="" data-bg-img="https://www.paypalobjects.com/webstatic/MarketingOperations/NA/NA2015/US/imgPPC1015_AO99ACQA_1900X568.jpg" style="background: url(https://www.paypalobjects.com/webstatic/MarketingOperations/NA/NA2015/US/imgPPC1015_AO99ACQA_1900X568.jpg) 50% 50% / cover no-repeat rgb(255, 255, 255);">
		<div class="emModuleContent js_emModuleContent">
			<div class="mpiBannerContainer js_mpiBannerContainer">
				<div class="mpiBanner mpi-left">
					<div class="mpiTextContainer" style="color: #2c2e2f;">
						<h3 class="mpiHeader vx_h1" style="color: #2c2e2f;">Create special moments with special financing.</h3>
						<p class="mpiBody vx_h4">Enjoy 6 months special financing on purchases of $99+ with PayPal Credit, a flexible credit line available where PayPal is accepted.</p>
						<a href="https://www.paypal.com/webapps/mch/cmd/?v=3.0&t=1445970621&fdata=JA0MW3EHXlZNSVtAFUZbWlxkeV50ZFtkFSAtUmt-XFtVUnZrfl0-PBBaZgpoX3JTdwsBAn4EX19OSVhWTkgiJD0cHS9jIQAjGyx0AjghBFMaBis0PUY.MBZdPVc8DXEDPAsOACZFVxURHx1KCwUBAwpoeFtwYV5yRW8qBzh1JSc-LhMdflEpJUlWc10.DC8SbFVcUnUEWFZNQF1AHUVLCQ88LVd3Zlh6R289HzUhDlRcU3RpfkR1ZlpXc0wiVXpSZVFRUXMBX1dfEw8cQBwJV1xjcF5wYl92UCw9UhoEIyomQTcqPUEtOxUTPFc.Nz8fIQFVJCpbAQQWER8UCwEKGAcxdFl2YVZzUCo6CDAsV1peVXVgfl8jIRMVMEk4DHYHMF1YBHYAWldMQF0RHEQICV82e1gjaFckEC8sXG97XU8ADDM.KlcuPBBaNFloWClTZlNZU3MHDFdIFQ5BTkdfDFdsLwwjNF10RX5vGSo8GAAJWnFpagZxZEBfbQlhXXNfaFBYUXcRJAsJMwwAbhoYBBocJwl4YEByUAolBBopGioCEiksEVwraEVJZR4lDz9bORAcFjASXidcQitVHzMOGAsxIB4kIR4uD2c5DiA4CwVDBCg1fQAONAQXOUF0Ww0BJA0MQ3BzNzUwRSFJfEdIWFg0OhkgJScmU3oNWRRxUyguNgZpaAN9bTY&cks=NzE4Zjc3MDNmNmM5Nzk4NWQ5NDI1OTQ1YjI5ODAxNDQ&e=1.0" class="vx_btn mpiPrimaryAction js_emPrimaryAction nemo_primaryActionButton_EM_Mpi" target="_blank" data-pagename="main:walletweb:summary::main" data-pagename2="main:walletweb:summary::main:::" data-track-type="link" style="background-color: #0083cf;">Apply Now</a>
						<p class="vx_small-text">Offer only available when you check out with PayPal and choose PayPal Credit. Subject to credit approval. See Terms.</p>
					</div>
				</div>
			</div>
			<a href="https://www.paypal.com/myaccount/home#" class="js_dismiss emClose nemo_emClose" role="button" name="EM_Mpi_Close" data-pagename="main:walletweb:summary::main" data-pagename2="main:walletweb:summary::main:::" data-track-type="link" style="color: #2c2e2f;">
				<span class="icon icon-small icon-close-small" aria-hidden="true"></span>
				<span class="speakableText">close</span>
			</a>
		</div>
	</div>
</div>


</div>
<!-- End of Blue Engagement Header Bar -->



<div class="mainBody">
<div id="summary" class="summarySection">

<div class="row">

<div class="col-sm-4 summaryModuleContainer">

<div class="twbs_alert vx_alert txnDelayMessage js_txnDelayMessage txnDelayMessage_mobile nemo_txnDelayMessageMobile hidden" data-hide-transaction-delay-message="true">
	<span class="icon icon-small icon-info-small" aria-hidden="true"></span><p class="vx_alert-text">Your latest transactions may take a few minutes to show up in your activity.</p>
</div>
 
<!-- Balance Panel -->
<section class="walletModule nemo_balanceModule" aria-labelledby="walletModuleHeader">
	<div class="balanceModule">
		<h3 class="vx_h5 moduleHeader"><a href="" class=" moduleHeaderLink" name="balanceDetails" data-pagename="main:walletweb:wallet:balance:details" data-pagename2="main:walletweb:wallet:balance:details:::" data-track-type="link">Account Balance</a></h3>
		<div class="balanceNumeral nemo_balanceNumeral"><span class="vx_h2">$502.00</span>
		<span class="vx_small-text numeralLabel">Available Credit: $100</span>
		</div>
	<!--
	<ul class="balanceActions nemo_balanceActions">
		<li class="addMoney dividedCellLeft"><a href="DonateNoe" class="addFunds nemo_addFunds" id="addFunds" data-push-replace="false" name="Summary_AddMoney" data-pagename="main:walletweb:summary::main" data-pagename2="main:walletweb:summary::main:::" data-track-type="link">Donate Now</a></li>
		<li class="withdrawMoney"><a role="button" href="MeshulachSearch" data-push-replace="false" class="withdrawFunds nemo_withdrawFunds" id="withdrawFunds" name="transfer" data-pagename="main:walletweb:summary::main" data-pagename2="main:walletweb:summary::main:::" data-track-type="link">Meshulach Search</a></li>
	</ul>
	-->
	</div>
</section>


<div id="payAfterDelivery" class="payAfterDelivery"></div>

<!-- not shown on mobile <section class="walletModule fiModule nemo_fiModule" aria-labelledby="walletModuleHeader">-->
<section class="walletModule nemo_sellingToolsModule sellingToolsModule" aria-labelledby="walletModuleHeader">
	<h3 class="vx_h5 moduleHeader"><a href="LinkNumber" target="_top" class="moduleHeaderLink nemo_fiModule-headerLink" data-user-config-features-bank="true" name="FIModule_BanksAndCards" data-pagename="main:walletweb:FIModule:walletPage" data-pagename2="main:walletweb:FIModule:walletPage:::" data-track-type="link">Linked Phone Numbers</a></h3><div class="moduleListItems js_fiModule-listView" data-link-bank="/myaccount/wallet/add/bank" data-link-card="/myaccount/wallet/add/card" data-wallet-page="/myaccount/wallet" data-link-target="_top" data-link-bank-attributes="class=&#39;nemo_fiModule-actions nemo_fiModule-linkBank&#39;" data-link-bank-us-attributes="class=&#39;nemo_fiModule-actions nemo_fiModule-linkBank&#39; name=&#39;linkBank_benefit1&#39; data-pagename=&#39;main:consumer:summary::main&#39; data-pagename2=&#39;main:consumer:summary::main:::&#39; data-track-type=&#39;link&#39;" data-link-card-attributes="class=&#39;nemo_fiModule-actions nemo_fiModule-linkCard&#39;" data-update-fi-attributes="class=&#39;nemo_fiModule-actions nemo_fiModule-updateInWallet&#39;" data-user-config-features-bank="true">
	<ul class="fiModule-list">
		<li class="fiModule-table">
			<div class="fiModule-cell fiModule-cell_icon">
				<div aria-hidden="true" class="fiModule-icon icon icon-medium icon-visa-logo nemo_fiModule-bankIcon"></div>
			</div>
			<div class="fiModule-cell">
				<span class="fiModule-fiType">212-555-4545</span>
			</div>
		</li>
		<li class="fiModule-table">
			<div class="fiModule-cell_icon">
				<div aria-hidden="true" class="icon icon-visa-logo nemo_fiModule-cardIcon_visa icon-medium fiModule-icon"></div>
			</div>
			<div class="fiModule-cell_details">
				<span class="fiModule-fiType">212-545-5444</span>
			</div>
		</li>
	</ul>
	<div><p class="fiModule-ctaText"><a href="LinkNumber" target="_top" class="nemo_fiModule-actions nemo_fiModule-updateInWallet">Add Authorized Number</a> to your account.</p></div>
	</div>
</section>



</div>

<div class="col-sm-8 activityModuleContainer" id="js_transactionCollection">
<div class="twbs_alert vx_alert txnDelayMessage js_txnDelayMessage nemo_txnDelayMessage hidden" data-hide-transaction-delay-message="true"><span class="icon icon-small icon-info-small" aria-hidden="true"></span><p class="vx_alert-text">Your latest transactions may take a few minutes to show up in your activity.</p></div>



<!-- Transaction History Starts Here -->
<section class="activityModule js_completedModule nemo_completedModule" aria-labelledby="activityModuleHeaderCompleted">

<h3 id="activityModuleHeaderCompleted" class="vx_h5 moduleHeader nemo_activityModuleHeaderCompleted">
	<a href="History" class="moduleHeaderLink nemo_moduleHeaderLink">All Transactions</a>
</h3>


<ul class="transactionList js_transactionList">





<li class="transactionRow transactionRowHover js_transactionItem" data-href="">
	<div class="transactionItem js_transactionItem nemo_transactionItem">
		<div class="row">
			<div class="col-xs-1">
				<h4 class="accessAid">
					<span class="transactionDescription">(415865) Yitzchok Katzenstein</span>
					<span class="transactionType vx_small-text">Donation </span>
				</h4>
				<div id="txnDate" class="dateParts js_transactionDescriptionLink linkedBlock js_linkedBlock" data-href="">
					<span class="dateMonth vx_h7">Sep</span>
					<span class="dateDay vx_h4">07</span>
					<span class="accessAid">2015</span>
				</div>
			</div>
			<div class="col-xs-11 transactionDetailsContainer js_transactionDetailsContainer">
					<a id="txnDescription" class="transactionDescriptionContainer js_transactionDescriptionContainer linkedBlock js_linkedBlock" href="transaction.php?hash=SNIDU484105DF" role="button" aria-expanded="false" aria-controls="" aria-describedby="">
						<span class="transactionDescription">(415865) Yitzchok Katzenstein</span>
						<!--<span class="transactionType vx_small-text">Donation </span>-->
					</a>
				<div id="txnAmountAndCurrency" class="transactionAmount js_transactionDescriptionLink linkedBlock js_linkedBlock primaryCurrency " data-href="">
					<span aria-hidden="true" class="isNegative vx_h3">-</span>
					<span class="accessAid">negative</span>
					<span class="netAmount vx_h4" dir="rtl">$18.00 </span>
				</div>
				
				<div class="vx_small-text action">
					<span class="icon icon-small icon-action-arrow-half-small" aria-hidden="true"></span>
					<span class="message hidden-phone">Donation</span> <!--<a href="" target="_blank" class="nemo_actions-track">Cancel</a>-->
				</div>
			</div>
		</div>
	</div>
	<div id="transactionDetails" class="js_transactionDetails highlightTransactionPanel hide" role="region" aria-busy="false" aria-labelledby="txnDescription"></div>
</li>



<li class="transactionRow transactionRowHover js_transactionItem" data-href="">
	<div class="transactionItem js_transactionItem nemo_transactionItem">
		<div class="row">
			<div class="col-xs-1">
				<h4 class="accessAid">
					<span class="transactionDescription">(514862) Moshe Getzel</span>
					<span class="transactionType vx_small-text">Donation </span>
				</h4>
				<div id="txnDate" class="dateParts js_transactionDescriptionLink linkedBlock js_linkedBlock" data-href="">
					<span class="dateMonth vx_h7">Sep</span>
					<span class="dateDay vx_h4">18</span>
					<span class="accessAid">2015</span>
				</div>
			</div>
			<div class="col-xs-11 transactionDetailsContainer js_transactionDetailsContainer">
					<a id="txnDescription" class="transactionDescriptionContainer js_transactionDescriptionContainer linkedBlock js_linkedBlock" href="transaction.php?hash=SNIDU484105DF" role="button" aria-expanded="false" aria-controls="" aria-describedby="">
						<span class="transactionDescription">(514862) Moshe Getzel</span>
						<!--<span class="transactionType vx_small-text">Donation </span>-->
					</a>
				<div id="txnAmountAndCurrency" class="transactionAmount js_transactionDescriptionLink linkedBlock js_linkedBlock primaryCurrency " data-href="">
					<span aria-hidden="true" class="isNegative vx_h3">-</span>
					<span class="accessAid">negative</span>
					<span class="netAmount vx_h4" dir="rtl">$32.00 </span>
				</div>
				
				<div class="vx_small-text action">
					<span class="icon icon-small icon-action-arrow-half-small" aria-hidden="true"></span>
					<span class="message hidden-phone">Donation</span> <!--<a href="" target="_blank" class="nemo_actions-track">Cancel</a>-->
				</div>
			</div>
		</div>
	</div>
	<div id="transactionDetails" class="js_transactionDetails highlightTransactionPanel hide" role="region" aria-busy="false" aria-labelledby="txnDescription"></div>
</li>




<li class="transactionRow transactionRowHover js_transactionItem" data-href="">
	<div class="transactionItem js_transactionItem nemo_transactionItem">
		<div class="row">
			<div class="col-xs-1">
				<h4 class="accessAid">
					<span class="transactionDescription">Payment - Tizku L'mitzvos</span>
					<span class="transactionType vx_small-text">Payment </span>
				</h4>
				<div id="txnDate" class="dateParts js_transactionDescriptionLink linkedBlock js_linkedBlock" data-href="">
					<span class="dateMonth vx_h7">Nov</span>
					<span class="dateDay vx_h4">04</span>
					<span class="accessAid">2015</span>
				</div>
			</div>
			<div class="col-xs-11 transactionDetailsContainer js_transactionDetailsContainer">
					<a id="txnDescription" class="transactionDescriptionContainer js_transactionDescriptionContainer linkedBlock js_linkedBlock" href="transaction.php?hash=KDFNDSDF541451" role="button" aria-expanded="false" aria-controls="" aria-describedby="">
						<span class="transactionDescription">Payment - Tizku L'mitzvos</span>
						<!--<span class="transactionType vx_small-text">Donation </span>-->
					</a>
				<div id="txnAmountAndCurrency" class="transactionAmount js_transactionDescriptionLink linkedBlock js_linkedBlock primaryCurrency " data-href="">
					<span aria-hidden="true" class="isPositive vx_h3">+</span>
					<span class="accessAid">positive</span>
					<span class="netAmount vx_h4" dir="rtl">$72.00 </span>
				</div>
				
				<div class="vx_small-text action">
					<span class="icon icon-small icon-action-arrow-half-small" aria-hidden="true"></span>
					<span class="message hidden-phone">Payment</span> <a href="" target="_blank" class="nemo_actions-track">Print Receipt</a>
				</div>
			</div>
		</div>
	</div>
	<div id="transactionDetails" class="js_transactionDetails highlightTransactionPanel hide" role="region" aria-busy="false" aria-labelledby="txnDescription"></div>
</li>


</ul>


<div class="footerLink">
<a href="History" class="nemo_viewAll" name="Summary_ViewAll" data-pagename="main:walletweb:summary::main" data-pagename2="main:walletweb:summary::main:::" {~}data-track-type="link">View all</a></div>

</section>

</div></div></div></div></div></div>

<div id="footer" class="noPrint nemo_footer vx_globalFooter-container" role="contentinfo">
	<div class="vx_globalFooter">
		<div class="vx_globalFooter-content">
			<p class="vx_hidden-phone vx_globalFooterLink-classic"><a href="http://klaftech.com" target="_top" class="nemo_classicLink" name="classic" data-pagename="main:walletweb:classic:start::" data-pagename2="main:walletweb:classic:start::::">Developer</a></p>

			<ul class="vx_globalFooterList-links">
				<li><a href="Help" target="_top" class="nemo_helpLink" name="footerHelp">Help</a></li>
				<li><a href="Contact" target="_top" class="nemo_contactLink" name="contact">Contact</a></li>
				<li><a href="" target="_blank" class="nemo_securityLink" name="footerSecurity">Security</a></li>
			</ul>

			<p class="vx_globalFooterLink-feedback" id="siteFeedback">
			<p class="vx_globalFooterCopyright nemo_copyrightText">©2015 Klaftech Data Systems LLC. All rights reserved.</p>

		</div>
	</div>
</div>

</div>

<section id="fullscreentooltip"></section>
<div id="alertDialogs" class="alertDialogs"></div>


<!-- Standard Footer Scripts -->
<script type="text/javascript" src="<?php echo $baseUrl;?>/assets/js/pp_jscode_080706.js"></script>
<div id="analytics" data-pagename="main:walletweb:summary::main" data-c25="main:walletweb:summary::main:::" data-c27="main:walletweb:summary::main|EM_SendMoney_Close" data-c28="" data-v56="US"></div>
<script type="text/javascript">var s = s || {t: function(){}};s.prop71="Nodejs";s.prop6="DBNSU89BSDME8";s.prop7="personal";s.prop10="US";s.prop40="503f220d4725e";s.prop20="1445970621303";s.prop1="walletexpnodeweb/public/templates/summary/index.dust";s.pageName="main:walletweb:summary::home";s.eVar31="main:consumer:summary::main";s.eVar25="main:consumer:summary::main:::";s.prop25="main:walletweb:summary::home:::";s.channel="summary";s.prop51="";s.hier1="";s.prop35="::";s.prop37="consumer";s.prop30="";s.prop31="";s.eVar2="";s.prop52="|us_8ball_wallet_ppcash_test,us_8ball_wallet_cip_flow_test,us_onb_unilateral_signup_flow_test,us_8ball_activity_running_balance_control,us_8ball_summary_alpha_control,us_8ball_activity_experience_beta_treatment,us_8ball_transaction_details_control,8ball_wallet_fmx_bwop_control,us_8ball_activity_elastic_search_control";/************ DO NOT ALTER ANYTHING BELOW THIS LINE ! *************/function scOnload(){var s_code=s.t();if(s_code)document.write(s_code);}if (window.addEventListener){window.addEventListener('load',scOnload,false);} else if (window.attachEvent){window.attachEvent('onload', scOnload);};if(navigator.appVersion.indexOf('MSIE')>=0)document.write(unescape('%3C')+'\!-'+'-')</script>
<noscript>&lt;img src="https://paypal.112.2O7.net/b/ss/paypalglobal/1/H.6--NS/0?pageName=NonJavaScript" alt="" height="1" width="1" border="0"&gt;</noscript>
<!-- DO NOT REMOVE THIS COMMENT --><!-- End SiteCatalyst Code -->
<script type="text/javascript" src="assets/js/pa.js"></script>
<script type="text/javascript">(function(){if(typeof PAYPAL.analytics != "undefined"){PAYPAL.core = PAYPAL.core || {};PAYPAL.core.pta = PAYPAL.analytics.setup({data:'pgrp=main%3Awalletweb%3Asummary%3A%3Ahome&page=main%3Awalletweb%3Asummary%3A%3Ahome%3A%3A%3A&qual=&tmpl=walletexpnodeweb%2Fpublic%2Ftemplates%2Fsummary%2Findex.dust&pgst=1445970621303&lgin=%3A%3A&vers=consumer&calc=503f220d4725e&rsta=&pgtf=Nodejs&s=ci&ccpg=&csci=cf1a19d90fab4566a10cb5db137cd41c&comp=walletexpnodeweb&tsrce=mppnodeweb&goal=&fltp=&flnm=&erpg=&erfd=&eccd=&cust=DBNSU89BSDME8&acnt=personal&aver=&rstr=&pfid=&bztp=&mbtp=&pxtid=%7Cus_8ball_wallet_ppcash_test%2Cus_8ball_wallet_cip_flow_test%2Cus_onb_unilateral_signup_flow_test%2Cus_8ball_activity_running_balance_control%2Cus_8ball_summary_alpha_control%2Cus_8ball_activity_experience_beta_treatment%2Cus_8ball_transaction_details_control%2C8ball_wallet_fmx_bwop_control%2Cus_8ball_activity_elastic_search_control&xe=881%2C610%2C903%2C488%2C425%2C1050%2C427%2C908%2C1567&xt=1804%2C1222%2C2021%2C956%2C817%2C2348%2C823%2C2037%2C3666&qt=2021%2C817%2C823%2C956%2C1222%2C1310%2C1804%2C2037%2C2348%2C3060%2C3666&qc=2689025%2C2687233%2C2687233%2C2687233%2C2689025%2C2688001%2C2689025%2C2687233%2C2687233%2C2688001%2C2687233', url:'https:\/\/t.paypal.com\/ts'});}}());</script>
<noscript>&lt;img src="https:\/\/t.paypal.com\/ts?nojs=1&amp;pgrp=main%3Awalletweb%3Asummary%3A%3Ahome&amp;page=main%3Awalletweb%3Asummary%3A%3Ahome%3A%3A%3A&amp;qual=&amp;tmpl=walletexpnodeweb%2Fpublic%2Ftemplates%2Fsummary%2Findex.dust&amp;pgst=1445970621303&amp;lgin=%3A%3A&amp;vers=consumer&amp;calc=503f220d4725e&amp;rsta=&amp;pgtf=Nodejs&amp;s=ci&amp;ccpg=&amp;csci=cf1a19d90fab4566a10cb5db137cd41c&amp;comp=walletexpnodeweb&amp;tsrce=mppnodeweb&amp;goal=&amp;fltp=&amp;flnm=&amp;erpg=&amp;erfd=&amp;eccd=&amp;cust=DBNSU89BSDME8&amp;acnt=personal&amp;aver=&amp;rstr=&amp;pfid=&amp;bztp=&amp;mbtp=&amp;pxtid=%7Cus_8ball_wallet_ppcash_test%2Cus_8ball_wallet_cip_flow_test%2Cus_onb_unilateral_signup_flow_test%2Cus_8ball_activity_running_balance_control%2Cus_8ball_summary_alpha_control%2Cus_8ball_activity_experience_beta_treatment%2Cus_8ball_transaction_details_control%2C8ball_wallet_fmx_bwop_control%2Cus_8ball_activity_elastic_search_control&amp;xe=881%2C610%2C903%2C488%2C425%2C1050%2C427%2C908%2C1567&amp;xt=1804%2C1222%2C2021%2C956%2C817%2C2348%2C823%2C2037%2C3666&amp;qt=2021%2C817%2C823%2C956%2C1222%2C1310%2C1804%2C2037%2C2348%2C3060%2C3666&amp;qc=2689025%2C2687233%2C2687233%2C2687233%2C2689025%2C2688001%2C2689025%2C2687233%2C2687233%2C2688001%2C2687233" alt="" height="1" width="1" border="0"&gt;</noscript>
<script src="assets/js/app.js"></script>
<div style="position: absolute; top: 0px;"><object width="1" height="1" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" id="midflash"><param name="movie" value="https://www.paypalobjects.com/en_US/m/midOpt.swf"><param name="wmode" value="transparent"><param name="quality" value="high"><param name="menu" value="false"><param name="allowScriptAccess" value="always"><embed src="https://www.paypalobjects.com/en_US/m/midOpt.swf" quality="high" width="1" height="1" name="midflash" allowscriptaccess="always" type="application/x-shockwave-flash" pluginspage="http://www.adobe.com/go/getflashplayer"></object></div>
<script type="text/javascript">var dataLayer = {};</script>
<script type="text/javascript" src="<?php echo $baseUrl;?>/assets/js/bootstrap.js"></script>
<!-- End Stardand Footer Scripts -->

</body>
</html>