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
							<div class="sfContentBlock"><h2>Register</h2>
								
								<?php echo validation_errors(); ?>

                                <!-- opening of the form -->
                                <?php echo form_open('user/registerUser'); ?>
                                    <div class="row loginForm">
                                        <div class="col-md-4 col-md-offset-4">
                                            <h1 class="text-center"></h1>
										
											<!-- user name -->
											<div class="form-group">
                                                <input type="text" name="username" class="form-control" placeholder="Enter Username" required autofocus>
											</div>
											
											<!-- email -->
											<div class="form-group">
												<input type="email" class="form-control" name="email" placeholder="Email">
											</div>
											
											<!-- email -->
											<div class="form-group">
												<input type="text" class="form-control" name="studentId" placeholder="Identification Number">
											</div>

											<!-- phone number -->
											<div class="form-group">
												<input type="number" class="form-control" name="phoneNumber" placeholder="Phone Number">
											</div>

											<!-- internal student -->
											<div class="form-group">
												<label>Are you a University Malaya Student</label>
												<div class="radio">
													<label><input type="radio" name="internalStudent" value="yes">Yes</label>
												</div>
												<div class="radio">
													<label><input type="radio" name="internalStudent" value="no" checked>No</label>
												</div>
											</div>

											<!-- upload Matric card -->
											<div class="form-group" id="uploadId">
												<label>Please attach a copy of your Identity Card</label>
												<input type="file" name="matricCardFile" id="matricCardFile">
											</div>

											<!-- upload Matric card -->
											<div class="form-group" id="uploadMatricCard" style="display: none;">
												<label>Please attach a copy of your matric card</label>
												<input type="file" name="matricCardFile" id="matricCardFile">
											</div>

											<!-- password -->
											<div class="form-group">
                                                <input type="password" name="password" class="form-control" placeholder="Enter Password" required autofocus>
											</div>
											
											<!-- repeat password -->
											<div class="form-group">
                                                <input type="password" name="passwordRepeat" class="form-control" placeholder="Repeat Password" required autofocus>
                                            </div>

                                            <!-- I am not a robot -->
                                            <div class="g-recaptcha" data-sitekey="6LfHhI8UAAAAADeaIlCSZNZDzJpUvBg8PEx8tif3"></div>
                                            <br>
                                            
                                            <!-- Submit -->
                                            <button type="submit" class="btn btn-primary btn-block">Register</button>

											<!-- Register User -->
                        					<a class="viewMoreButton" href="<?php echo base_url().'user/login' ?>"><-- Login</a>
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
		var uploadId = $('#uploadId');
		var uploadMatricCard = $('#uploadMatricCard');
		$(':radio[name="internalStudent"]').change(function() {
			var category = $(this).filter(':checked').val();
			if (category === 'yes') {
				uploadMatricCard.show();
				uploadId.hide();
			} else {
				uploadId.show();
				uploadMatricCard.hide();
			}
		});
	</script>