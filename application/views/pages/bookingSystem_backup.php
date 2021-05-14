	<!-- refer to https://docs.dhtmlx.com/scheduler/howtostart_php.html -->
	<!-- refer to https://docs.dhtmlx.com/scheduler/ -->
	<!-- refer to https://docs.dhtmlx.com/scheduler/howtostart_guides.html -->
	<script src="https://cdn.dhtmlx.com/scheduler/edge/dhtmlxscheduler.js"></script>
	<link href="https://cdn.dhtmlx.com/scheduler/edge/dhtmlxscheduler_material.css" 
		rel="stylesheet" type="text/css" charset="utf-8">
	<style>
		html, body{
			margin:0px;
			padding:0px;
			height:100%;
			overflow:hidden;
		}

	</style>

	<!-- Page Content -->
    <div class="container" role="main">
    	<div class="l--content">
			<div id="Body_T4A5AE2D0003">
			
			</div>
			<div class="sf_cols row">
				<div class="sf_colsOut col_three_fourth" data-placeholder-label="Contact Us Short Content">
					<div id="Body_T4A5AE2D0005_Col00" class="sf_colsIn ">
						</div>
							<div class="sfContentBlock"><h2>Booking System</h2>
                            <a href="<?php echo base_url().'booking/requestBooking' ?>">
								<button class="btn btn-primary btn-block">Request Booking</button>
							</a>    
							<div id="scheduler_here" class="dhx_cal_container" style='width:100%; height:100%;'>
								<div class="dhx_cal_navline">
									<div class="dhx_cal_prev_button">&nbsp;</div>
									<div class="dhx_cal_next_button">&nbsp;</div>
									<div class="dhx_cal_today_button"></div>
									<div class="dhx_cal_date"></div>
									<div class="dhx_cal_tab" name="day_tab"></div>
									<div class="dhx_cal_tab" name="week_tab"></div>
									<div class="dhx_cal_tab" name="month_tab"></div>
								</div>
								<div class="dhx_cal_header"></div>
								<div class="dhx_cal_data"></div>
								</div>
								<script>
									scheduler.config.xml_date="%Y-%m-%d %H:%i";
									scheduler.init('scheduler_here', new Date(), "week");
									scheduler.load("<?php echo base_url()?>events", "json");
						
									var dp = new dataProcessor("/events");
									dp.setTransactionMode("REST"); // use to transfer data with REST
									dp.init(scheduler);
								</script>

							</div>
					</div>
				</div>
			</div>
    	</div>
    </div>
