<div class="vx_globalNav_main globalNav_main js_globalNavView   navbar navbar-fixed-top header navbar-header noPrint js_globalNavView" id="header" role="banner" data-show-warning="">
	<div class="vx_globalNav-container">
		<div class="vx_globalNav-brand_desktop">
			<a href="Website"><img src="<?php echo $baseUrl;?>/assets/images/logo_212x56.png" alt="Vaad HaChessed" width="106" height="28" class="nemo_regularPpLogo"></a>
		</div>
		<div class="vx_globalNav-navContainer noPrint">
			<nav id="navMenu" class="vx_globalNav-nav" role="navigation">
				<ul class="vx_globalNav-list">
					<li><a href="<?php echo base_url()."/user/default/accountsummary"; ?>" class="vx_isActive nemo_globalNavSummaryLink"><span class="vx_globalNav-iconWrapper"><span class="vx_globalNav-navIcon globalNav-icon_linkSummary"></span></span> <span class="vx_globalNav-navText">Summary</span></a></li>
					<li><a href="History" class=" nemo_globalNavActivityLink"><span class="vx_globalNav-iconWrapper"><span class="vx_globalNav-navIcon globalNav-icon_linkActivity"></span></span> <span class="vx_globalNav-navText">History</span></a></li>
					<li><a href="SMS" class=" nemo_globalNavTransferLink"><span class="vx_globalNav-iconWrapper"><span class="vx_globalNav-navIcon globalNav-icon_linkTransfer"></span></span> <span class="vx_globalNav-navText">SMS</span></a></li>
					<!--<li><a href="" class=" nemo_globalNavWalletLink"><span class="vx_globalNav-iconWrapper"><span class="vx_globalNav-navIcon globalNav-icon_linkShop"></span></span> <span class="vx_globalNav-navText">Wallet</span></a></li>-->
					<li><a href="Contact" class=" nemo_globalNavShopLink"><span class="vx_globalNav-iconWrapper"><span class="vx_globalNav-navIcon globalNav-icon_linkWallet"></span></span> <span class="vx_globalNav-navText">Contact</span></a></li>
				</ul>
				<ul class="vx_globalNav-list_secondary">
					<li class="vx_globalNav-actionItem_mobile globalNav_notificationItem vx_globalNav-notificationItem_mobile js_notificationButtonView nemo_headerNotifications" data-autodisplay="false"><a href="" class="vx_globalNav-link_notifications notifications_desktop js_notifications-toggleTrigger nemo_notificationsDesktopTrigger" name="openNotifications" data-pagename="main:walletweb:notification:open:" data-pagename2="main:walletweb:notification:open::::" role="button" title="Notifications"><span class="vx_globalNav-iconWrapper_secondary"><span class="vx_globalNav-navIcon vx_globalNav-navIcon_linkNotifications"></span><span class="vx_notificationCount notificationLength-0">0</span></span><span class="vx_globalNav-navText_secondary vx_globalNav-navText_secondaryMobile">Notifications</span></a></li>
					<li><a href="Account" class="vx_globalNav-link_settings" name="settings" title="Account"><span class="vx_globalNav-iconWrapper_secondary"><span class="vx_globalNav-navIcon vx_globalNav-navIcon_linkSettings"></span></span><span class="vx_globalNav-navText_secondary">Account</span></a></li>
					<li class="globalNav-listItem_mobile"><a href="Help" class="vx_globalNav-link_help" name="help"><span class="vx_globalNav-iconWrapper_secondary"><span class="vx_globalNav-navIcon vx_globalNav-navIcon_linkHelp"></span></span><span class="vx_globalNav-navText_secondary">Help</span></a></li>
					<li class="globalNav-listItem_mobile"><a href="<?php echo base_url()."/user/donate/step1";     ?>" class="vx_globalNav-link_help" name="DonateNow"><span class="vx_globalNav-iconWrapper_secondary"><span class="vx_globalNav-navIcon vx_globalNav-navIcon_linkWallet"></span></span><span class="vx_globalNav-navText_secondary">Donate Now</span></a></li>
					<li class="globalNav-listItem_mobile"><a href="MeshulachSearch" class="vx_globalNav-link_help" name="MeshulachSearch"><span class="vx_globalNav-iconWrapper_secondary"><span class="vx_globalNav-navIcon vx_globalNav-navIcon_linkCalendar"></span></span><span class="vx_globalNav-navText_secondary">Meshulach Search</span></a></li>
					<li class="vx_globalNav-listItem_logout"><a href="<?php echo base_url()."/user/default/logout"  ?>" class="vx_globalNav-link_logout nemo_logoutBtn">Log out</a></li>
				</ul>
				<ul class="profile visible-leftnav unstyled">
					<li>Test Account</li>
					<li class="email">test@abc.com</li>
				</ul>
			</nav>
		</div>
	</div>
</div>
<div class="navbar-print onlyPrint" data-show-warning="">
	<div class="row">
		<div class="col-xs-12"><img src="assets/images/logo_212x56.png" alt="Vaad HaChessed" width="106" height="28"></div>
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
