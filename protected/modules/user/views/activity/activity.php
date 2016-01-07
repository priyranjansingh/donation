<section class="todo">
  <div class="0 ml-header relative clear">
    <div class="f-right m-30 hide-from-tablet">
      <button class="mdl-button mdl-js-button mdl-color-text--white mdl-js-ripple-effect f12" data-upgraded=",MaterialButton,MaterialRipple"> <i class="material-icons ml-button-icon">menu</i> Simple <span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
      <button class="mdl-button mdl-js-button  mdl-color-text--white mdl-js-ripple-effect f12" data-upgraded=",MaterialButton,MaterialRipple"> <i class="material-icons ml-button-icon">list</i> Detailed <span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
    </div>
    <div class="p-20">
      <h3 class="mdl-color-text--white m-t-20 m-b-5">Activity</h3>
      <h4 class="mdl-color-text--indigo-100 m-b-20 no-m-t w100">Manage your activity from the dashboard or here with additional filters.</h4>
    </div>
  </div>
  <div class="mdl-grid p-20 mdl-grid--no-spacing mdl-color--grey-100">
    <div class="mdl-cell mdl-cell--3-col mdl-cell--12-col-tablet mdl-cell--12-col-phone mdl-color--grey-100">
      <div class="p-40 p-r-20 p-20--small">
        <div class=" mdl-color-text--blue-grey-400">
          <h3><i class="material-icons f-left m-r-5">format_list_numbered</i> Filters</h3>
          <p>Filter Here</p>
          <div class="m-t-30">
            <form action="activity/filter" id="js_filters-form" class="filters-form" method="post" name="filtersForm">
				<div class="vx_form-group filters-date">
					<div class="dropdown dateDropdown js_dateDropdown">
						
						<button aria-expanded="false" aria-live="assertive" data-toggle="dropdown" type="button" id="dateDropdown-btn" class="dropdown-toggle dateDropdown-toggle form-control vx_form-control"><span class="dateDropdown-label js_dateDropdown-label">Last 90 days</span>
						<span class="caret"></span><input type="hidden" value="90" class="js_filters-control js_filters-control-timeFrame" name="timeFrame"></button>
						
						<ul aria-labelledby="dateDropdown-btn" role="menu" class="dropdown-menu dateDropdown-menu">
							<li class="js_filters-presetDate " role="presentation"><a data-track-type="link" data-pagename2="main:walletweb:activity::dropdown:::" data-pagename="main:walletweb:activity::dropdown" name="LastMonth" data-value="30" href="#" role="menuitem">October</a></li>
							<li class="js_filters-presetDate active" role="presentation"><a data-track-type="link" data-pagename2="main:walletweb:activity::dropdown:::" data-pagename="main:walletweb:activity::dropdown" name="Last90" data-value="90" href="#" role="menuitem">Last 90 days</a></li>
							<li class="js_filters-presetDate " role="presentation"><a data-track-type="link" data-pagename2="main:walletweb:activity::dropdown:::" data-pagename="main:walletweb:activity::dropdown" name="YTD" data-value="thisYear" href="#" role="menuitem">2015</a></li>
							<li class="js_filters-presetDate " role="presentation"><a data-track-type="link" data-pagename2="main:walletweb:activity::dropdown:::" data-pagename="main:walletweb:activity::dropdown" name="LastYear" data-value="lastYear" href="#" role="menuitem">2014</a></li>
							<li class="divider" role="presentation"></li>
							<li role="presentation">
								<div class="customDate-container js_customDate-container">
									<input type="hidden" value="MM/DD/YY" id="js_dateFormat">
									<div class="customDate-inputGroup">
									<input type="text" data-placeholder="mm/dd/yyyy" aria-invalid="false" class="vx_form-control js_filters-control js_filters-control-startDate" id="startDate" name="startDate" placeholder="From">
										
									</div>
									<div class="customDate-inputGroup"><input type="text" data-placeholder="mm/dd/yyyy" aria-invalid="false" class="vx_form-control js_filters-control js_filters-control-endDate" id="endDate" name="endDate"  placeholder="To"></div></div><div class="customDate-actions">
                                    <button class="vx_btn vx_btn-secondary vx_btn-small customDate-saveBtn js_customDate-saveBtn validateBeforeSubmit btn btn-primary" name="saveDates">Save Dates</button>
                                    </div>
                                    </li>
						</ul>
					</div>
				</div>
				
				<div class="vx_form-group filters-transactionType">
					
					
					<select class="vx_form-control js_filters-control js_filters-control-transactionType" id="transactionType" name="transactionType">
						<option value="ALL">All activity</option>
						<option value="PAYMENT_RECEIVED">Payments received</option>
						<option value="PAYMENT_SENT">Payments sent</option>
						<option value="WITHDRAW">Money withdrawn</option>
						<option value="REFUND">Refunds</option>
						<option value="PAD">Pay after delivery</option>
					</select>
				</div>
				
				<input type="submit" value="View" aria-selected="false" role="button" class="vx_btn vx_btn-secondary vx_btn-small filters-searchBtn js_filters-searchBtn nemo_filters-searchBtn validateBeforeSubmit mdl-button mdl-button--raised mdl-button--colored" name="filterSubmit"><input type="hidden" value="activity/index" name="flow_name">
			</form>
          </div>
        </div>
      </div>
    </div>
    <div class="mdl-cell mdl-cell--9-col mdl-cell--12-col-tablet mdl-cell--12-col-phone no-p-l">
      <div class="p-20 ml-card-holder ml-card-holder-first">
        <div class="mdl-card mdl-shadow--1dp">
          <div class="mdl-card__title">
            <h2 class="mdl-card__title-text">All Transactions</h2>
          </div>
          <div class="p-30">
            <table class="mdl-data-table mdl-js-data-table ml-data-table">
              <colgroup>
              <col class="auto-cell-size">
              </colgroup>
              <tbody>
                <tr>
                  <td><div class="small">SEP</div>
                    <h3 class="mdl-color-text--cyan no-margin ">07</h3></td>
                  <td class="mdl-data-table__cell--non-numeric"><div class="">(Visit Code) Solicitor Name Here</div>
                    <ul class="list-unstyled f12">
                      <li> <i class="material-icons f14">check_circle</i> Transaction Type - Donation or Payment </li>
                    </ul></td>
                  <td>- $18.00 </td>
                </tr>
                <tr>
                  <td><div class="small">SEP</div>
                    <h3 class="mdl-color-text--cyan no-margin ">07</h3></td>
                  <td class="mdl-data-table__cell--non-numeric"><div class="">(Visit Code) Solicitor Name Here</div>
                    <ul class="list-unstyled f12">
                      <li> <i class="material-icons f14">check_circle</i> Transaction Type - Donation or Payment </li>
                    </ul></td>
                  <td>- $18.00 </td>
                </tr>
                <tr>
                  <td><div class="small">SEP</div>
                    <h3 class="mdl-color-text--cyan no-margin ">07</h3></td>
                  <td class="mdl-data-table__cell--non-numeric"><div class="">(Visit Code) Solicitor Name Here</div>
                    <ul class="list-unstyled f12">
                      <li> <i class="material-icons f14">check_circle</i> Transaction Type - Donation or Payment </li>
                    </ul></td>
                  <td>- $18.00 </td>
                </tr>
                <tr>
                  <td><div class="small">SEP</div>
                    <h3 class="mdl-color-text--cyan no-margin ">07</h3></td>
                  <td class="mdl-data-table__cell--non-numeric"><div class="">(Visit Code) Solicitor Name Here</div>
                    <ul class="list-unstyled f12">
                      <li> <i class="material-icons f14">check_circle</i> Transaction Type - Donation or Payment </li>
                    </ul></td>
                  <td>- $18.00 </td>
                </tr>
                <tr>
                  <td><div class="small">SEP</div>
                    <h3 class="mdl-color-text--cyan no-margin ">07</h3></td>
                  <td class="mdl-data-table__cell--non-numeric"><div class="">(Visit Code) Solicitor Name Here</div>
                    <ul class="list-unstyled f12">
                      <li> <i class="material-icons f14">check_circle</i> Transaction Type - Donation or Payment </li>
                    </ul></td>
                  <td>- $18.00 </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="mdl-grid p-20"> &nbsp; </div>
  <div class="mdl-grid mdl-grid--no-spacing mdl-grid-p-15 copyright sm-text-center">
    <div class="mdl-cell-12-col"> Vaad HaChessed User Portal &copy; 2015 <span class="sm-block"><a class="m-l-10 m-r-10" href="#">Terms of use</a> | <a class="m-l-10" href="#">Privacy Policy</a></span> </div>
  </div>
</section>