	<!-- Page Content -->
    <div class="container" role="main">
    	<div class="l--content">
			<div id="Body_T4A5AE2D0003">
				<div class="breadcrumb">
					<span id="Body_T4A5AE2D0003_ctl00_ctl00_BreadcrumbLabel" style="display:none;"></span>
					<!-- <div id="ctl00_Body_T4A5AE2D0003_ctl00_ctl00_Breadcrumb" class="RadSiteMap RadSiteMap_Default">
						<ul class="rsmFlow rsmLevel rsmOneLevel">
							<li class="rsmItem sfBreadcrumbNavigation"><a class="rsmLink" href="../../../home" title="University of Malaya, the foremost and premier Research University (RU) in Malaysia. more than 27,000 students with 17 faculties research centres">Home</a><span class="sfBreadcrumbNodeSeparator">/</span></li>
							<li class="rsmItem sfBreadcrumbNavigation"><a class="rsmLink" href="../../../about-um" title="University of Malaya (UM), the foremost and premier Research University (RU) in Malaysia.">About UM</a><span class="sfBreadcrumbNodeSeparator">/</span></li>
							<li class="rsmItem sfBreadcrumbNavigation"><a class="rsmLink" href="../../administration" title="Administration UNIVERSITI MALAYA">Administration</a><span class="sfBreadcrumbNodeSeparator">/</span></li>
							<li class="rsmItem sfBreadcrumbNavigation"><a class="rsmLink" href="../deputy-vc-s-office">Deputy VC’s Office</a><span class="sfBreadcrumbNodeSeparator">/</span></li>
							<li class="rsmItem sfNoBreadcrumbNavigation"><a class="rsmLink" href="javascript: void(0)">Research & Innovation</a></li>
						</ul>
					</div> -->
				</div>
			</div>
			<div class="sf_cols row">
				<div class="sf_colsOut col_three_fourth" data-placeholder-label="Contact Us Short Content">
					<div id="Body_T4A5AE2D0005_Col00" class="sf_colsIn ">
						</div>
							<div class="sfContentBlock"><h2>Submit Quotation Details</h2>
								
								<?php echo validation_errors(); ?>

                                <!-- opening of the form -->
                                <?php echo form_open('booking/generateQuatation'); ?>
                                    <div class="row loginForm">
                                        <div class="col-md-12">
                                            <h1 class="text-center"></h1>
											
											<p>From: <input type="text" name="fromDate" class="form-control" required autofocus id="datepicker" placeholder="Enter from date"></p>
											
											<input type="text"  name="fromTime" class="form-control" required autofocus id="timepicker" placeholder="Enter from time"></p>
											
											<p>To: <input type="text"  name="toDate"  class="form-control" required autofocus id="datepicker2"  placeholder="Enter to time"></p>

											<input type="text"  name="toTime" class="form-control" required autofocus id="timepicker2"  placeholder="Enter to time"></p>
											
											<br>
											<br>
											<!-- row 1 -->
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label>
															<input type="checkbox" name="DensityMeter" value="DensityMeter " > Density Meter 
														</label>
													</div>

													<div class="form-group">
														<label>
															<input type="checkbox"  name="DSC"  value="DSC" > Differential Scanning Calorimetry (DSC)
														</label>
													</div>

													<div class="form-group">
														<label>
															<input type="checkbox"  name="InsituDSC"  value="InsituDSC" > Differential Scanning Calorimetry (In situ-DSC) 
														</label>
													</div>

													<div class="form-group">
														<label>
															<input type="checkbox"  name="CHNOS"  value="CHNOS" > Elemental Analyzer (CHNOS)
														</label>
													</div>
													<div class="form-group">
														<label>
															<input type="checkbox" name="GPC" value="GPC" > Gel Permeation Chromatography (GPC) 
														</label>
													</div>

													<div class="form-group">
														<label>
															<input type="checkbox" name="HallEffect" value="HallEffect" > Hall Effect
														</label>
													</div>

													<div class="form-group">
														<label>
															<input type="checkbox" name="HPLC" value="HPLC" > HPLC 
														</label>
													</div>

													<div class="form-group">
														<label>
															<input type="checkbox" name="IC" value="IC" > Ion Chromatography (IC)
														</label>
													</div>
												</div>
												<!-- end of row 1 -->
												<div class="col-md-6">
													<div class="form-group">
														<label>
															<input type="checkbox" name="ExsituFTIR" value="ExsituFTIR" > Fourier Transform Infra Red (Ex situ-FTIR) 
														</label>
													</div>

													<div class="form-group">
														<label>
															<input type="checkbox" name="InsituFTIR" value="InsituFTIR" > Fourier Transform Infra Red (In situ-FTIR) 
														</label>
													</div>

													<div class="form-group">
														<label>
															<input type="checkbox" name="FreezeDryer" value="FreezeDryer" > Freeze Dryer
														</label>
													</div>

													<div class="form-group">
														<label>
															<input type="checkbox" name="TCDFID" value="TCDFID" > Gas Chromatography  (TCD-FID)
														</label>
													</div>

													<div class="form-group">
														<label>
															<input type="checkbox" name="GCMS" value="GCMS" > Gas Chromatography (GC-MS)
														</label>
													</div>

												</div>
												<!-- end of row 2 -->
											</div>
											
                                            <!-- Submit -->
                                            <button type="submit" class="btn btn-primary btn-block">Generate Quatation</button>
                                        </div>
									</div>
							
                                <?php echo form_close(); ?>
                                <!-- closing of the form -->

							</div>
					</div>
				</div>
			</div>
    	</div>
    </div>


<script>
	$( function() {
		$( "#datepicker" ).datepicker();
		$( "#datepicker2" ).datepicker();
		$('#timepicker').timepicker({ 'scrollDefault': 'now' });
		$('#timepicker2').timepicker({ 'scrollDefault': 'now' });
  	} );
</script>