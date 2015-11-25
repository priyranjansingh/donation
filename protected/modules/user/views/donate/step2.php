<?php
$baseUrl = Yii::app()->theme->baseUrl;
?>
<link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/donatenow.app.ltr.css">
<script type="text/javascript" async="" src="<?php echo $baseUrl; ?>/assets/js/802b93f0fe41b41869a2e449e704709d.js"></script>

<link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/activity.app.ltr.css">
<link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/activity.ltr.css">
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
<h3 id="activityModuleHeaderCompleted" class="vx_h5 moduleHeader withStatements nemo_activityModuleHeaderCompleted">Previous Donations to <?php echo $visit_model->solicitor->first_name." ".$visit_model->solicitor->last_name;   ?></h3>


<ul class="transactionList js_transactionList">
<?php   
  foreach($prev_don_model as $donation)
  {    
?>

<li class="transactionRow transactionRowHover js_transactionItem" data-href="">
	<div class="transactionItem js_transactionItem nemo_transactionItem">
		<div class="row">
			<div class="col-xs-1">
				<div id="txnDate" class="dateParts js_transactionDescriptionLink linkedBlock js_linkedBlock" data-href="">
				<span class="dateMonth vx_h7"><?php echo date("M", strtotime($donation->date_entered)); ?> </span> <span class="dateDay vx_h4"><?php echo date("d", strtotime($donation->date_entered)); ?></span> <span class="accessAid">2015</span></div>
			</div>
					
			<div class="col-xs-11 transactionDetailsContainer js_transactionDetailsContainer">
				<a id="txnDescription" class="transactionDescriptionContainer js_transactionDescriptionContainer linkedBlock js_linkedBlock" href="?trans=transaction_hash" role="button" aria-expanded="false" aria-controls="" aria-describedby="">
					<span class="transactionDescription">(<?php echo $donation->visit->visit_code;  ?>) <?php  echo $donation->solicitor->first_name. " ".$donation->solicitor->last_name ;    ?></span>
					<!--<span class="transactionType vx_small-text"> </span>-->
				</a>
						
				<div id="txnAmountAndCurrency" class="transactionAmount js_transactionDescriptionLink linkedBlock js_linkedBlock primaryCurrency " data-href="">
					<span aria-hidden="true" class="isNegative vx_h3">-</span><span class="accessAid">negative</span> <span class="netAmount vx_h4" dir="rtl">$<?php echo $donation->amount;    ?> </span>
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
 <?php  }  ?>


</ul>

</section>


</div>

<div class="loadMore-container js_loadMore-container" data-show-load-more="" data-next-page-token=""></div>
<div class="spinner loading hide"><p>Searching...</p></div>
</section>
</div>

<section id="fullscreentooltip"></section>

<script type="text/javascript" src="<?php echo $baseUrl; ?>/assets/js/pp_jscode_080706.js"></script>
<script type="text/javascript" src="<?php echo $baseUrl; ?>/assets/js/pa.js"></script>
<script src="<?php echo $baseUrl; ?>/assets/js/app2.js"></script>

<script src="<?php echo $baseUrl; ?>/assets/js/bootstrap.js"></script>