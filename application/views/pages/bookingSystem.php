<!-- https://itsolutionstuff.com/post/codeigniter-fullcalendar-exampleexample.html -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>
  
	<!-- Page Content -->
    <div class="container" role="main">
    	<div class="l--content">
			<div class="sf_cols row">
				<div class="sf_colsOut col_three_fourth" data-placeholder-label="Contact Us Short Content">
					<div id="Body_T4A5AE2D0005_Col00" class="sf_colsIn ">
                        <div class="sfContentBlock">
                            <br>
                            <br>
                            <br>
                            <h3>Choose equipment</h3>
                            <?php echo form_open('booking/equipmentSelected'); ?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>
                                                <input type="radio" name="equipmentSelection" value="DensityMeter " > Density Meter 
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label>
                                                <input type="radio"  name="equipmentSelection"  value="DSC" > Differential Scanning Calorimetry (DSC)
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label>
                                                <input type="radio"  name="equipmentSelection"  value="InsituDSC" > Differential Scanning Calorimetry (In situ-DSC) 
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label>
                                                <input type="radio"  name="equipmentSelection"  value="CHNOS" > Elemental Analyzer (CHNOS)
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>
                                                <input type="radio" name="equipmentSelection" value="GPC" > Gel Permeation Chromatography (GPC) 
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label>
                                                <input type="radio" name="equipmentSelection" value="HallEffect" > Hall Effect
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label>
                                                <input type="radio" name="equipmentSelection" value="HPLC" > HPLC 
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label>
                                                <input type="radio" name="equipmentSelection" value="IC" > Ion Chromatography (IC)
                                            </label>
                                        </div>
                                    </div>
                                    <!-- end of row 1 -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>
                                                <input type="radio" name="equipmentSelection" value="ExsituFTIR" > Fourier Transform Infra Red (Ex situ-FTIR) 
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label>
                                                <input type="radio" name="equipmentSelection" value="InsituFTIR" > Fourier Transform Infra Red (In situ-FTIR) 
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label>
                                                <input type="radio" name="equipmentSelection" value="FreezeDryer" > Freeze Dryer
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label>
                                                <input type="radio" name="equipmentSelection" value="TCDFID" > Gas Chromatography  (TCD-FID)
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label>
                                                <input type="radio" name="equipmentSelection" value="GCMS" > Gas Chromatography (GC-MS)
                                            </label>
                                        </div>

                                    </div>
                                    <!-- end of row 2 -->
                                    
                                    <!-- Submit -->
                                    <button type="submit" class="btn btn-primary btn-block">Select Equipment</button>

                                </div>
                             <?php echo form_close(); ?>
                            <!-- closing of the form -->
                            <div class="clearfix"></div>
                            <br>
                            <br>
                        </div>
					</div>
				</div>
			</div>
    	</div>
    </div>
<style>
    td, th {
        border: 1px solid black;
        padding: 12px 30px;
    }
    table {
        width: 100%;
    }
</style>
