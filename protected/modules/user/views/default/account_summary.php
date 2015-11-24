<?php
$baseUrl = Yii::app()->theme->baseUrl;
?>
<div id="js_foreground" class="vx_foreground-container foreground-container">

<div class="vx_globalNav_mobile globalNav_mobile js_globalNavView">
	<a href="AccountSummary" class="js_toggleMobileMenu vx_globalNav-toggleTrigger nemo_mobileNavMenuToggle noPrint">Main Menu</a>
	<div class="vx_globalNav-brand_mobile"><a href="AccountSummary"><img src="assets/images/logo_212x56.png" alt="Vaad HaChessed" width="106" height="28"></a></div>
	<div class="vx_globalNav-actions_mobile">
		<ul class="vx_globalNav-actionsList_mobile">
			<li class="vx_globalNav-actionItem_mobile globalNav_notificationItem vx_globalNav-notificationItem_mobile js_notificationButtonView nemo_headerNotifications" data-autodisplay="false"><a href="#" class="vx_globalNav-link_notifications notifications_mobile js_notifications-toggleTrigger nemo_notificationsMobileTrigger" name="openNotifications" data-pagename="main:walletweb:notification:open:" data-pagename2="main:walletweb:notification:open::::" role="button" title="Notifications"><span class="vx_globalNav-iconWrapper_secondary"><span class="vx_globalNav-navIcon vx_globalNav-navIcon_linkNotifications"></span><span class="vx_notificationCount notificationLength-0">0</span></span><span class="vx_globalNav-navText_secondary vx_globalNav-navText_secondaryMobile">Notifications</span></a></li>
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
			<!--
			<div id="js_progressMeterView" class="progressMeter nemo_progressMeterView" data-total-percentage="80" data-hide-percent-animation="">
				<div id="js_outerCircle" class="outerCircle">
					<div class="half lessThan50">
						<div class="pie right" style="-webkit-transform: rotate(180deg); -moz-transform: rotate(180deg); -ie-transform: rotate(180deg); -o-transform: rotate(180deg); transform: rotate(180deg);"></div>
					</div>
					<div class="half greaterThan50 js_greaterThan50">
						<div class="pie left" style="-webkit-transform: rotate(108deg); -moz-transform: rotate(108deg); -ie-transform: rotate(108deg); -o-transform: rotate(108deg); transform: rotate(108deg);"></div>
					</div>
				</div>
				<div id="js_innerCircle" class="innerCircle">
					<div class="profilePhotoTable">
						<div id="js_profilePhotoView" class="profilePhotoContainer hasFileReader" name="EM_Photo_Start" data-pagename="main:walletweb:summary::main" data-pagename2="main:walletweb:summary::main:::" data-track-type="link">
							<a id="js_profilePhotoParent" class="profilePhotoParent " name="emUploadPhotoStart" data-profile-photo="{}" data-wurfl="{}"><span id="js_user_icon" class="profilePhotoIcon icon icon-profile-add-large" aria-hidden="true" data-hover-text="Add a photo"></span></a>
						</div>
					</div>
					<div id="js_percentageContainer" class="percentageContainer nemo_percentageContainer">
						<div id="js_percentage" class="nemo_accountCompletionPercent fadeOut hide">80%</div>
					</div>
				</div>
			</div>
			-->

			<div id="js_toggleProfileStatus" class="welcomeMessage js_selectModule selectModule " data-module-number="0">
				<p class="vx_h2 engagementWelcomeMessage nemo_welcomeMessageHeader">Welcome, User!</p>
				<p class="toggleProfileStatus">
				<button id="js_engagementActionTrigger" class="vx_btn-link engagement-actionText vx_small-text js_emTrigger nemo_engagementActionTrigger" aria-controls="js_emSlideDownContainer" name="EM_AcctSetup_Open" data-pagename="main:walletweb:summary::main" data-pagename2="main:walletweb:summary::main:::" data-track-type="link"><span class="profileStatusText">Powered by Klaftech Data Systems</span></button>
				<!--<span class="icon icon-small icon-arrow-down-small nemo_profileStatusDownArrow" aria-hidden="true"></span>-->
				</p>
			</div>
		</div>

		<div id="js_engagementActions" class="col-sm-5 engagementActions">
			<ul class="actionsContainer nemo_actionsContainer">
				<li class="actionItem"><a href="DonateNow.html" role="button" data-module-number="1" name="EM_SendMoney" data-pagename="main:walletweb:summary::main" data-pagename2="main:walletweb:summary::main:::" data-track-type="link" class="vx_small-text selectModule nemo_transferSelect js_selectModule animate"><span class="icon icon-medium icon-send-money" aria-hidden="true"></span><span>Donate Now</span></a></li>
				<li class="actionItem"><a href="MeshulachSearch" target="_blank" role="button" data-pagename="main:walletweb:summary::main" data-pagename2="main:walletweb:summary::main:::" data-track-type="link" data-module-number="2" name="EM_DownloadApp" class="vx_small-text js_selectModule selectModule nemo_appSelect"><span class="icon icon-medium icon-calendar" aria-hidden="true"></span>Meshulach Search</a></li>
				<!--<li class="actionItem"><a href="" role="button" name="EM_Mpi" data-pagename="main:walletweb:summary::main" data-pagename2="main:walletweb:summary::main:::" data-track-type="link" data-module-number="3" class="vx_small-text js_selectModule js_mpiOffer selectModule nemo_mpiSelect"><span class="icon icon-medium icon-phone " aria-hidden="true"></span>Get more time to pay</a></li>-->
			</ul>
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


<!--
<section class="walletModule nemo_sellingToolsModule sellingToolsModule" aria-labelledby="walletModuleHeader">
	<h3 class="vx_h5 moduleHeader"><a href="" target="_top" class="moduleHeaderLink nemo_sellingToolsHeader" name="sellingToolsHeader" {~}data-pagename="main:walletweb:summary::main" data-pagename2="main:walletweb:summary::main:::" data-track-type="link">Selling tools</a></h3>
	<ul class="moduleListItems">
		<li><a href="#" target="_top" class="nemo_sellingToolsInvoice" name="sellingToolsInvoice" data-pagename="main:walletweb:summary::main" data-pagename2="main:walletweb:summary::main:::" data-track-type="link">Manage invoices</a></li>
		<li><a href="#" target="_blank" class="nemo_sellingToolsMOS" name="sellingToolsMOS" data-pagename="main:walletweb:summary::main" data-pagename2="main:walletweb:summary::main:::" data-track-type="link">MultiOrder shipping</a></li>
		<li><a href="#" target="_blank" class="nemo_sellingToolsSellerPref" name="sellingToolsSellerPref" data-pagename="main:walletweb:summary::main" data-pagename2="main:walletweb:summary::main:::" data-track-type="link">Seller preferences</a></li>
	</ul>
</section>
-->

<!--
<div class="accountStatusModule nemo_accountStatusModule">
	<h3 class="vx_h5">More about your account</h3>
	<ul>
		<li><a href="#" target="" class="nemo_acctStatusUpgrade" name="Summary_AcctStatusUpgrade" data-pagename="main:walletweb:summary::main" data-pagename2="main:walletweb:summary::main:::" data-track-type="link">Upgrade to a Business account</a></li>
		<li><a href="#" target="_top" class="small-text nemo_acctStatusResCenter" name="Summary_ResolutionCenter" data-pagename="main:walletweb:summary::main" data-pagename2="main:walletweb:summary::main:::" data-track-type="link">Resolve a problem in our Resolution Center</a></li>
	</ul>
</div>
-->

</div>

<div class="col-sm-8 activityModuleContainer" id="js_transactionCollection">
<div class="twbs_alert vx_alert txnDelayMessage js_txnDelayMessage nemo_txnDelayMessage hidden" data-hide-transaction-delay-message="true"><span class="icon icon-small icon-info-small" aria-hidden="true"></span><p class="vx_alert-text">Your latest transactions may take a few minutes to show up in your activity.</p></div>



<!-- Transaction History Starts Here -->
<section class="activityModule js_completedModule nemo_completedModule" aria-labelledby="activityModuleHeaderCompleted">

<h3 id="activityModuleHeaderCompleted" class="vx_h5 moduleHeader nemo_activityModuleHeaderCompleted">
	<a href="Activity" class="moduleHeaderLink nemo_moduleHeaderLink">All Transactions</a>
</h3>


<ul class="transactionList js_transactionList">

<!--
<li class="transactionRow transactionRowHover js_transactionItem-8CS39531NT9790358" data-href="/myaccount/transaction/details/8CS39531NT9790358">
	<div class="transactionItem js_transactionItem nemo_transactionItem">
		<div class="row">
			<div class="col-xs-1">
				<h4 class="accessAid">
					<span class="transactionDescription">Billing Unlimited - Thank You</span>
					<span class="transactionType vx_small-text">Payment received </span>
				</h4>
				<div id="txnDate-8CS39531NT9790358" class="dateParts js_transactionDescriptionLink linkedBlock js_linkedBlock" data-href="/myaccount/transaction/details/8CS39531NT9790358">
					<span class="dateMonth vx_h7">Sep</span> <span class="dateDay vx_h4">29</span> <span class="accessAid">2015</span>
				</div>
			</div>
			<div class="col-xs-11 transactionDetailsContainer js_transactionDetailsContainer">
				<a id="txnDescription-8CS39531NT9790358" class="transactionDescriptionContainer js_transactionDescriptionContainer linkedBlock js_linkedBlock" href="/myaccount/transaction/details/8CS39531NT9790358" role="button" aria-expanded="false" aria-controls="transactionDetails-8CS39531NT9790358" aria-describedby="txnDate-8CS39531NT9790358 txnAmountAndCurrency-8CS39531NT9790358">
					<span class="transactionDescription">Billing Unlimited - Thank You</span>
					<span class="transactionType vx_small-text">Payment received </span>
				</a>
				<div id="txnAmountAndCurrency-8CS39531NT9790358" class="transactionAmount js_transactionDescriptionLink linkedBlock js_linkedBlock primaryCurrency " data-href="/myaccount/transaction/details/8CS39531NT9790358">
					<span aria-hidden="true" class="isPositive vx_h3">+</span>
					<span class="netAmount vx_h4" dir="rtl">$36.59 <span class="vx_h7 currencyCode">CAD</span></span>
				</div>
				<div class="vx_small-text action">
					<span class="icon icon-small icon-action-arrow-half-small" aria-hidden="true"></span>
					<span class="message hidden-phone">OK to ship. What's next?</span> <a href="" target="_blank" class="nemo_actions-printShippingLabel">Print shipping label</a>
					<a href="cmd=_add-tracking-details&info=3ZZPpQWpXfjY5x_adC8oqGqUNw82xsvZ50SzMPTAk8fZO5g8IWAXTLn1000" class="nemo_actions-addTracking">Add tracking info</a>
				</div>
			</div>
		</div>
	</div>				
	<div id="transactionDetails-8CS39531NT9790358" class="js_transactionDetails highlightTransactionPanel hide" role="region" aria-busy="false" aria-labelledby="txnDescription-8CS39531NT9790358"></div>
</li>
-->



<li class="transactionRow transactionRowHover js_transactionItem" data-href="">
	<div class="transactionItem js_transactionItem nemo_transactionItem">
		<div class="row">
			<div class="col-xs-1">
				<h4 class="accessAid">
					<span class="transactionDescription">(Visit Code) Solicitor Name Here</span>
					<span class="transactionType vx_small-text">Donation </span>
				</h4>
				<div id="txnDate" class="dateParts js_transactionDescriptionLink linkedBlock js_linkedBlock" data-href="">
					<span class="dateMonth vx_h7">Sep</span>
					<span class="dateDay vx_h4">07</span>
					<span class="accessAid">2015</span>
				</div>
			</div>
			<div class="col-xs-11 transactionDetailsContainer js_transactionDetailsContainer">
					<a id="txnDescription" class="transactionDescriptionContainer js_transactionDescriptionContainer linkedBlock js_linkedBlock" href="?trans=transaction_hash" role="button" aria-expanded="false" aria-controls="" aria-describedby="">
						<span class="transactionDescription">(Visit Code) Solicitor Name Here</span>
						<!--<span class="transactionType vx_small-text"> </span>-->
					</a>
				<div id="txnAmountAndCurrency" class="transactionAmount js_transactionDescriptionLink linkedBlock js_linkedBlock primaryCurrency " data-href="">
					<span aria-hidden="true" class="isNegative vx_h3">-</span>
					<span class="accessAid">negative</span>
					<span class="netAmount vx_h4" dir="rtl">$18.00 </span>
				</div>
				
				<div class="vx_small-text action">
					<span class="icon icon-small icon-action-arrow-half-small" aria-hidden="true"></span>
					<span class="message">Transaction Type - Donation or Payment</span> <!--<a href="" target="_blank" class="nemo_actions-track">Cancel</a>-->
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
					<span class="transactionDescription">(Visit Code) Solicitor Name Here</span>
					<span class="transactionType vx_small-text">Donation </span>
				</h4>
				<div id="txnDate" class="dateParts js_transactionDescriptionLink linkedBlock js_linkedBlock" data-href="">
					<span class="dateMonth vx_h7">Sep</span>
					<span class="dateDay vx_h4">18</span>
					<span class="accessAid">2015</span>
				</div>
			</div>
			<div class="col-xs-11 transactionDetailsContainer js_transactionDetailsContainer">
					<a id="txnDescription" class="transactionDescriptionContainer js_transactionDescriptionContainer linkedBlock js_linkedBlock" href="?trans=transaction_hash" role="button" aria-expanded="false" aria-controls="" aria-describedby="">
						<span class="transactionDescription">(Visit Code) Solicitor Name Here</span>
						<!--<span class="transactionType vx_small-text"> </span>-->
					</a>
				<div id="txnAmountAndCurrency" class="transactionAmount js_transactionDescriptionLink linkedBlock js_linkedBlock primaryCurrency " data-href="">
					<span aria-hidden="true" class="isNegative vx_h3">-</span>
					<span class="accessAid">negative</span>
					<span class="netAmount vx_h4" dir="rtl">$32.00 </span>
				</div>
				
				<div class="vx_small-text action">
					<span class="icon icon-small icon-action-arrow-half-small" aria-hidden="true"></span>
					<span class="message">Donation</span> <!--<a href="" target="_blank" class="nemo_actions-track">Cancel</a>-->
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
					<span class="transactionDescription">Payment</span>
					<span class="transactionType vx_small-text">Payment </span>
				</h4>
				<div id="txnDate" class="dateParts js_transactionDescriptionLink linkedBlock js_linkedBlock" data-href="">
					<span class="dateMonth vx_h7">Nov</span>
					<span class="dateDay vx_h4">04</span>
					<span class="accessAid">2015</span>
				</div>
			</div>
			<div class="col-xs-11 transactionDetailsContainer js_transactionDetailsContainer">
					<a id="txnDescription" class="transactionDescriptionContainer js_transactionDescriptionContainer linkedBlock js_linkedBlock" href="?trans=transaction_hash" role="button" aria-expanded="false" aria-controls="" aria-describedby="">
						<span class="transactionDescription">Payment - Thank You</span>
						<!--<span class="transactionType vx_small-text"> </span>-->
					</a>
				<div id="txnAmountAndCurrency" class="transactionAmount js_transactionDescriptionLink linkedBlock js_linkedBlock primaryCurrency " data-href="">
					<span aria-hidden="true" class="isPositive vx_h3">+</span>
					<span class="accessAid">positive</span>
					<span class="netAmount vx_h4" dir="rtl">$72.00 </span>
				</div>
				
				<div class="vx_small-text action">
					<span class="icon icon-small icon-action-arrow-half-small" aria-hidden="true"></span>
					<span class="message">Payment</span> <a href="" target="_blank" class="nemo_actions-track">Print Receipt</a>
				</div>
			</div>
		</div>
	</div>
	<div id="transactionDetails" class="js_transactionDetails highlightTransactionPanel hide" role="region" aria-busy="false" aria-labelledby="txnDescription"></div>
</li>


</ul>


<div class="footerLink">
<a href="Activity" class="nemo_viewAll" name="Summary_ViewAll" data-pagename="main:walletweb:summary::main" data-pagename2="main:walletweb:summary::main:::" {~}data-track-type="link">View all</a></div>

</section>

</div></div></div></div></div></div>
</div>

<section id="fullscreentooltip"></section>
<div id="alertDialogs" class="alertDialogs"></div>


<!-- Standard Footer Scripts -->
<script type="text/javascript" src="<?php echo $baseUrl; ?>/assets/js/pp_jscode_080706.js"></script>
<div id="analytics" data-pagename="main:walletweb:summary::main" data-c25="main:walletweb:summary::main:::" data-c27="main:walletweb:summary::main|EM_SendMoney_Close" data-c28="" data-v56="US"></div>
<script type="text/javascript">var s = s || {t: function() {
                }};
            s.prop71 = "Nodejs";
            s.prop6 = "DBNSU89BSDME8";
            s.prop7 = "personal";
            s.prop10 = "US";
            s.prop40 = "503f220d4725e";
            s.prop20 = "1445970621303";
            s.prop1 = "walletexpnodeweb/public/templates/summary/index.dust";
            s.pageName = "main:walletweb:summary::home";
            s.eVar31 = "main:consumer:summary::main";
            s.eVar25 = "main:consumer:summary::main:::";
            s.prop25 = "main:walletweb:summary::home:::";
            s.channel = "summary";
            s.prop51 = "";
            s.hier1 = "";
            s.prop35 = "::";
            s.prop37 = "consumer";
            s.prop30 = "";
            s.prop31 = "";
            s.eVar2 = "";
            s.prop52 = "|us_8ball_wallet_ppcash_test,us_8ball_wallet_cip_flow_test,us_onb_unilateral_signup_flow_test,us_8ball_activity_running_balance_control,us_8ball_summary_alpha_control,us_8ball_activity_experience_beta_treatment,us_8ball_transaction_details_control,8ball_wallet_fmx_bwop_control,us_8ball_activity_elastic_search_control";
            /************ DO NOT ALTER ANYTHING BELOW THIS LINE ! *************/function scOnload() {
                var s_code = s.t();
                if (s_code)
                    document.write(s_code);
            }
            if (window.addEventListener) {
                window.addEventListener('load', scOnload, false);
            } else if (window.attachEvent) {
                window.attachEvent('onload', scOnload);
            }
            ;
            if (navigator.appVersion.indexOf('MSIE') >= 0)
                document.write(unescape('%3C') + '\!-' + '-')</script>
<noscript>&lt;img src="https://paypal.112.2O7.net/b/ss/paypalglobal/1/H.6--NS/0?pageName=NonJavaScript" alt="" height="1" width="1" border="0"&gt;</noscript>
<!-- DO NOT REMOVE THIS COMMENT --><!-- End SiteCatalyst Code -->
<script type="text/javascript" src="assets/js/pa.js"></script>
<script type="text/javascript">(function() {
                if (typeof PAYPAL.analytics != "undefined") {
                    PAYPAL.core = PAYPAL.core || {};
                    PAYPAL.core.pta = PAYPAL.analytics.setup({data: 'pgrp=main%3Awalletweb%3Asummary%3A%3Ahome&page=main%3Awalletweb%3Asummary%3A%3Ahome%3A%3A%3A&qual=&tmpl=walletexpnodeweb%2Fpublic%2Ftemplates%2Fsummary%2Findex.dust&pgst=1445970621303&lgin=%3A%3A&vers=consumer&calc=503f220d4725e&rsta=&pgtf=Nodejs&s=ci&ccpg=&csci=cf1a19d90fab4566a10cb5db137cd41c&comp=walletexpnodeweb&tsrce=mppnodeweb&goal=&fltp=&flnm=&erpg=&erfd=&eccd=&cust=DBNSU89BSDME8&acnt=personal&aver=&rstr=&pfid=&bztp=&mbtp=&pxtid=%7Cus_8ball_wallet_ppcash_test%2Cus_8ball_wallet_cip_flow_test%2Cus_onb_unilateral_signup_flow_test%2Cus_8ball_activity_running_balance_control%2Cus_8ball_summary_alpha_control%2Cus_8ball_activity_experience_beta_treatment%2Cus_8ball_transaction_details_control%2C8ball_wallet_fmx_bwop_control%2Cus_8ball_activity_elastic_search_control&xe=881%2C610%2C903%2C488%2C425%2C1050%2C427%2C908%2C1567&xt=1804%2C1222%2C2021%2C956%2C817%2C2348%2C823%2C2037%2C3666&qt=2021%2C817%2C823%2C956%2C1222%2C1310%2C1804%2C2037%2C2348%2C3060%2C3666&qc=2689025%2C2687233%2C2687233%2C2687233%2C2689025%2C2688001%2C2689025%2C2687233%2C2687233%2C2688001%2C2687233', url: 'https:\/\/t.paypal.com\/ts'});
                }
            }());</script>
<noscript>&lt;img src="https:\/\/t.paypal.com\/ts?nojs=1&amp;pgrp=main%3Awalletweb%3Asummary%3A%3Ahome&amp;page=main%3Awalletweb%3Asummary%3A%3Ahome%3A%3A%3A&amp;qual=&amp;tmpl=walletexpnodeweb%2Fpublic%2Ftemplates%2Fsummary%2Findex.dust&amp;pgst=1445970621303&amp;lgin=%3A%3A&amp;vers=consumer&amp;calc=503f220d4725e&amp;rsta=&amp;pgtf=Nodejs&amp;s=ci&amp;ccpg=&amp;csci=cf1a19d90fab4566a10cb5db137cd41c&amp;comp=walletexpnodeweb&amp;tsrce=mppnodeweb&amp;goal=&amp;fltp=&amp;flnm=&amp;erpg=&amp;erfd=&amp;eccd=&amp;cust=DBNSU89BSDME8&amp;acnt=personal&amp;aver=&amp;rstr=&amp;pfid=&amp;bztp=&amp;mbtp=&amp;pxtid=%7Cus_8ball_wallet_ppcash_test%2Cus_8ball_wallet_cip_flow_test%2Cus_onb_unilateral_signup_flow_test%2Cus_8ball_activity_running_balance_control%2Cus_8ball_summary_alpha_control%2Cus_8ball_activity_experience_beta_treatment%2Cus_8ball_transaction_details_control%2C8ball_wallet_fmx_bwop_control%2Cus_8ball_activity_elastic_search_control&amp;xe=881%2C610%2C903%2C488%2C425%2C1050%2C427%2C908%2C1567&amp;xt=1804%2C1222%2C2021%2C956%2C817%2C2348%2C823%2C2037%2C3666&amp;qt=2021%2C817%2C823%2C956%2C1222%2C1310%2C1804%2C2037%2C2348%2C3060%2C3666&amp;qc=2689025%2C2687233%2C2687233%2C2687233%2C2689025%2C2688001%2C2689025%2C2687233%2C2687233%2C2688001%2C2687233" alt="" height="1" width="1" border="0"&gt;</noscript>
<script src="assets/js/app.js"></script>
<div style="position: absolute; top: 0px;"><object width="1" height="1" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" id="midflash"><param name="movie" value="https://www.paypalobjects.com/en_US/m/midOpt.swf"><param name="wmode" value="transparent"><param name="quality" value="high"><param name="menu" value="false"><param name="allowScriptAccess" value="always"><embed src="https://www.paypalobjects.com/en_US/m/midOpt.swf" quality="high" width="1" height="1" name="midflash" allowscriptaccess="always" type="application/x-shockwave-flash" pluginspage="http://www.adobe.com/go/getflashplayer"></object></div>
<script type="text/javascript">var dataLayer = {};</script>
<script type="text/javascript" src="<?php echo $baseUrl; ?>/assets/js/bootstrap.js"></script>
<!-- End Stardand Footer Scripts -->