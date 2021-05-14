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
							<div class="sfContentBlock"><h2>Upload Documents:</h2>
								<!-- opening of the form -->
                                <?php echo form_open('booking/uploadDocumentsAction'); ?>
                                    <div class="row loginForm">
                                        <div class="col-md-4 col-md-offset-4">
                                            <h1 class="text-center"></h1>

											<!-- upload Matric card -->
											<div class="form-group">
												<label>Please attach a documnets for the proof of payment</label>
												<input type="file" name="image" enctype="multipart/form-data">
												<input type="text" name="itemId" value="<?php echo $itemId ?>" style="display:none">
											</div>

                                            <!-- Submit -->
                                            <button type="submit" class="btn btn-primary btn-block">Upload Documents</button>
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


<style>

</style>