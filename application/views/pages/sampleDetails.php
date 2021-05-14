    <script src="<?php echo base_url(); ?>assets/js/jspdf.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/pdfFromHTML.js" type="text/javascript"></script>

    <!-- https://stackoverflow.com/questions/14853779/adding-input-elements-dynamically-to-form -->

    <!-- Page Content -->
    <div class="container" role="main">
    	<div class="l--content">
			<div id="Body_T4A5AE2D0003">
				<div class="breadcrumb">
					<span id="Body_T4A5AE2D0003_ctl00_ctl00_BreadcrumbLabel" style="display:none;"></span>
				</div>
			</div>
			<div class="sf_cols row">
				<div class="sf_colsOut col_three_fourth" data-placeholder-label="Contact Us Short Content">
					<div id="Body_T4A5AE2D0005_Col00" class="sf_colsIn ">
                        <div id="HTMLtoPDF">
                            <div class="sfContentBlock"><h2>Sample Details:</h2>
								<?php echo form_open('booking/inputSampleDetails'); ?>

                                <div class="container">
                                    <div class="row">
                                        <div class="row loginForm">
                                            <div class="col-md-12">
                                                <div class="form-group col-md-3">
                                                    <input type="text" class="form-control" name="sampleId1" placeholder="Sample ID">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <input type="text" class="form-control" name="sampleDescription1" placeholder="Sample Description">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <input type="text" class="form-control" name="wavelengthRange1" placeholder="Wavelength Range">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <input type="text" class="form-control" name="sampleBackground1" placeholder="Sample Background/ Preparations">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group col-md-3">
                                                    <input type="text" class="form-control" name="sampleId2" placeholder="Sample ID">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <input type="text" class="form-control" name="sampleDescription2" placeholder="Sample Description">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <input type="text" class="form-control" name="wavelengthRange2" placeholder="Wavelength Range">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <input type="text" class="form-control" name="sampleBackground2" placeholder="Sample Background/ Preparations">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group col-md-3">
                                                    <input type="text" class="form-control" name="sampleId3" placeholder="Sample ID">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <input type="text" class="form-control" name="sampleDescription3" placeholder="Sample Description">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <input type="text" class="form-control" name="wavelengthRange3" placeholder="Wavelength Range">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <input type="text" class="form-control" name="sampleBackground3" placeholder="Sample Background/ Preparations">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group col-md-3">
                                                    <input type="text" class="form-control" name="sampleId1" placeholder="Sample ID">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <input type="text" class="form-control" name="sampleDescription4" placeholder="Sample Description">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <input type="text" class="form-control" name="wavelengthRange4" placeholder="Wavelength Range">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <input type="text" class="form-control" name="sampleBackground4" placeholder="Sample Background/ Preparations">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group col-md-3">
                                                    <input type="text" class="form-control" name="sampleId5" placeholder="Sample ID">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <input type="text" class="form-control" name="sampleDescription5" placeholder="Sample Description">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <input type="text" class="form-control" name="wavelengthRange5 placeholder="Wavelength Range">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <input type="text" class="form-control" name="sampleBackground5" placeholder="Sample Background/ Preparations">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <!-- <input type="text" name="total" value="<?php echo $total ?>" style="display: none">
                                <input type="text" name="equipmentCost" value="<?php echo $equipmentCost ?>" style="display: none">
                                <input type="text" name="fromDate" value="<?php echo $fromDate ?>" style="display: none">
                                <input type="text" name="toDate" value="<?php echo $toDate ?>" style="display: none">
                                <input type="text" name="fromTime" value="<?php echo $fromTime ?>" style="display: none">
                                <input type="text" name="toTime" value="<?php echo $toTime ?>" style="display: none"> -->
                                <!-- Submit -->
                                <button type="submit" class="btn btn-primary btn-block">Confirm Booking</button>
                                <?php echo form_close(); ?>
							</div>
                        </div>
                    </div>
				</div>
			</div>
    	</div>
    </div>

<script>
$(document).ready(function() {
    var max_fields = 10;
    var wrapper = $(".container1");
    var add_button = $(".add_form_field");

    var x = 1;
    $(add_button).click(function(e) {
        e.preventDefault();
        if (x < max_fields) {
            x++;
            $(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="delete">Delete</a></div>'); //add input box
        } else {
            alert('You Reached the limits')
        }
    });

    $(wrapper).on("click", ".delete", function(e) {
        e.preventDefault();
        $(this).parent('div').remove();
        x--;
    })
});
</script>
<style>
    td, th {
        border: 1px solid black;
        padding: 12px 30px;
    }
    table {
        width: 100%;
    }
</style>