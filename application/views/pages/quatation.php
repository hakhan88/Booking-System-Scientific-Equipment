    <script src="<?php echo base_url(); ?>assets/js/jspdf.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/pdfFromHTML.js" type="text/javascript"></script>

    <!-- https://www.youtube.com/watch?v=_EqYMNdbrsc -->

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
                            <div class="sfContentBlock"><h2>Quotation:</h2>
                                <button class="btn btn-primary btn-block"  onclick="HTMLtoPDF()">Export Quotation</button>
                                <br>
                                <br>
								<?php echo form_open('booking/confirmBooking', array('onsubmit' => 'confirm(\'Do you really want to submit the form?\')')); ?>

                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-8"></div>    
                                        <div class="col-sm-4 navbar-brand">
						                    <img src="<?php echo base_url(); ?>assets/images/nano_logo.png">
                                        </div>    
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8">
                                            TO:
                                            <br>
                                            Fong Chng Saun Quote No : NC-2-QT/UM/18/64 
                                            <br>
                                            Centre for Occupational and Environmental Health, Quote Date : 8 May 2019
                                            <br>
                                            Department of Social and Preventive Medicine, Validity : 30 days
                                            <br>
                                            Faculty of Medicine, University of Malaya,
                                        </div>
                                        <div class="col-sm-4">
                                            Quote Date : 8 May 2019
                                            <br>
                                            Validity : 30 days
                                            <br>
                                            Terms : 30 days
                                            <br>
                                            Currency : Malaysian Ringgit
                                            <br>
                                            Contact : Nur Azrin Daud
                                            <br>
                                            Tel : 03-7967 6273
                                            <br>
                                            Email : ts_nanocat@ um.edu.my
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                As per your request, we are please to submit the following quotation:-
                                <table>
                                    <tr>
                                        <th>Itm</th>
                                        <th>DESCRIPTION</th>
                                        <th>QTY</th>
                                        <th>UNIT PRICE (RM)</th>
                                        <th>EXTENDED PRICE (RM)</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            GC-MS Analysis
                                            Model: Agilent’s Gas Chromatography
                                            Detector- MSD
                                            Column – DB624
                                            Capillary- 60m x 320mm x 0.18 mm nominal
                                            Temperature- 260 o C max
                                            Amount of samples required: 10ml
                                            DELIVERABLE: GC-MS chromatogram and raw data.
                                        </td>
                                        <td>40</td>
                                        <td>75.00</td>
                                        <td>3000.00</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>Discount 20 %</td>
                                        <td>600.00</td>
                                    </tr>
                                    <tr>
                                        <td style="border: 0px;text-align: right;"></td>
                                        <td style="border: 0px;text-align: right;"></td>
                                        <td style="border: 0px;text-align: right;"></td>
                                        <td style="border: 0px;text-align: right;">Total</td>
                                        <td style="background: #bbbbbb;">2400.00</td>
                                    </tr>
                                </table>
                                <br>
                                <br>
                                NOTE:
                                <br>
                                1. Price/s quoted above is/are ex-Peninsular Malaysia.
                                <br>
                                2. Delivery is 2 weeks upon receipt of Purchase Order.
                                <br>
                                3. Terms: 100% within 30 days upon delivery.
                                <!-- <input type="text" name="total" value="<?php echo $total ?>" style="display: none">
                                <input type="text" name="equipmentCost" value="<?php echo $equipmentCost ?>" style="display: none">
                                <input type="text" name="fromDate" value="<?php echo $fromDate ?>" style="display: none">
                                <input type="text" name="toDate" value="<?php echo $toDate ?>" style="display: none">
                                <input type="text" name="fromTime" value="<?php echo $fromTime ?>" style="display: none">
                                <input type="text" name="toTime" value="<?php echo $toTime ?>" style="display: none"> -->
                                <!-- Submit -->
                                <button type="submit" class="btn btn-primary btn-block">Confirm Booking</button>
                                <?php echo form_close(); ?>
                                <button class="btn btn-primary btn-block" onclick="window.location.href='<?php echo base_Url() ?>booking/equipments'">Book another equipment</button>
							</div>
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