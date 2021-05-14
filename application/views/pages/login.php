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
							<div class="sfContentBlock"><h2>Login</h2>
                                
                                <!-- opening of the form -->
                                <?php echo form_open('user/userLogin'); ?>
                                    <div class="row loginForm">
                                        <div class="col-md-4 col-md-offset-4">
                                            <h1 class="text-center"></h1>

                                            <div class="form-group">
                                                <input type="text" name="email" class="form-control" placeholder="Enter Email" required autofocus>
                                            </div>

                                            <div class="form-group">
                                                <input type="password" name="password" class="form-control" placeholder="Enter Password" required autofocus>
                                            </div>
                                            
                                            <!-- I am not a robot -->
                                            <div class="g-recaptcha" data-sitekey="6LfHhI8UAAAAADeaIlCSZNZDzJpUvBg8PEx8tif3"></div>
                                            <br>
                                            <!-- Submit -->
                                            <button type="submit" class="btn btn-primary btn-block">Login</button>
											
											<!-- Register User -->
                                            <a class="btn btn-primary btn-block" href="<?php echo base_url(); ?>user/register">Register</a>
                                            <a class="btn btn-primary btn-block" href="<?php echo base_url(); ?>user/forgetPassword">Forgot user password</a>

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
