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
			<form name="filtersForm"  class="filters-form" id="js_filters-form" action="<?php echo base_url()."/user/donate/step3"       ?>">
				<p><span>.</span></p>
				<p><span>.</span></p>
				<input name="VisitCode" type="hidden" value="VisitCode">
			</form>
                    <a href="<?php echo base_url()."/user/donate/step3"?>">
                    <!--<input name="continueButton" class="vx_btn vx_btn-secondary vx_btn-small filters-searchBtn js_filters-searchBtn nemo_filters-searchBtn validateBeforeSubmit" type="submit" role="button" aria-selected="false" value="Continue">-->
                    </a>
		</section>
	</section>
</div>


	
	
<div id="js_transactionCollection">

<section class="activityModule js_completedModule nemo_completedModule" aria-labelledby="activityModuleHeaderCompleted">
<h3 id="activityModuleHeaderCompleted" class="vx_h5 moduleHeader withStatements nemo_activityModuleHeaderCompleted">Solicitor Visit List</h3>


<ul class="transactionList js_transactionList">
<?php   
  foreach($visit_list as $visit)
  {    
?>

<li class="transactionRow transactionRowHover js_transactionItem" data-href="">
	<div class="transactionItem js_transactionItem nemo_transactionItem">
		<div class="row">
			<div class="col-xs-1">
				<div id="txnDate" class="dateParts js_transactionDescriptionLink linkedBlock js_linkedBlock" data-href="">
				<span class="dateMonth vx_h7"> </span> <span class="dateDay vx_h4"></span> <span class="accessAid">2015</span></div>
			</div>
					
			<div class="col-xs-11 transactionDetailsContainer js_transactionDetailsContainer">
				<a id="txnDescription" class="transactionDescriptionContainer js_transactionDescriptionContainer linkedBlock js_linkedBlock" href="?trans=transaction_hash" role="button" aria-expanded="false" aria-controls="" aria-describedby="">
					<span class="transactionDescription"><?php   echo $visit->visit_code." (". $visit->reason.")";   ?></span>
					<!--<span class="transactionType vx_small-text"> </span>-->
				</a>
						
				<div id="txnAmountAndCurrency" class="transactionAmount js_transactionDescriptionLink linkedBlock js_linkedBlock primaryCurrency " data-href="">
                                    <a href="<?php echo base_url(); ?>/solicitor/search/donate?id=<?php echo $visit->visit_code; ?>"><span class="netAmount vx_h4" dir="rtl">Donate</span></a>
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