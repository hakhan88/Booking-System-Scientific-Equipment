    
    <!-- chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>

    <!-- export to pdf scripts -->
    <script src="<?php echo base_url(); ?>assets/js/jspdf.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/pdfFromHTML.js" type="text/javascript"></script>
    <!-- end of export to pdf scripts -->

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
                        <a class="viewMoreButton" href="<?php echo base_url().'admin/dashboard' ?>"><-- Go Back</a>

                       <!-- opening of the form -->
                        <?php echo form_open('booking/generateQuatation'); ?>
                            <div class="row loginForm">
                                <div class="col-md-12">
                                    <h1 class="text-center"></h1>
                                    
                                    <p>From: <input type="text" name="fromDate" class="form-control" required autofocus id="datepicker" placeholder="Enter from date"></p>
                                    <p>To: <input type="text"  name="toDate"  class="form-control" required autofocus id="datepicker2"  placeholder="Enter to time"></p>
                                    <br>
                                    <br>
                                    
                                    <!-- Submit -->
                                    <button type="submit" class="btn btn-primary btn-block">Filter</button>
                                </div>
                            </div>
                    
                        <?php echo form_close(); ?>
                        <!-- closing of the form -->

                        <br>
                        <br>
                        <!-- export PDF button -->
                        <button class="btn btn-primary btn-block"  onclick="HTMLtoPDF()">Export Report</button>
                        <!-- end of export PDF button -->

                        <div id="HTMLtoPDF">

                            <!-- equipment reports -->
                            <div class="sfContentBlock"><h2>CATEGORY BY EQUIPMENT</h2>
                                <canvas id="myChartIndividual" width="400" height="400"></canvas>
                                <script>
                                    var ctx = document.getElementById("myChartIndividual").getContext('2d');
                                    var myChart = new Chart(ctx, {
                                        type: 'bar',
                                        data: {
                                            labels: [
                                                    "DSC",
                                                    "EDX",
                                                    "FTIR",
                                                    "FREEZE DRYER",
                                                    "GC",
                                                    "GC FID",
                                                    "GC-TCD",
                                                    "HPLC",
                                                    "IC",
                                                    "PL",
                                                    "PSD"
                                                ],
                                            datasets: [{
                                                label: 'RM x 100',
                                                data: [12, 19, 3, 5, 2, 3, 5, 1, 9, 5, 3],
                                                backgroundColor: [
                                                    'rgba(255, 159, 64, 0.2)',
                                                    'rgba(255, 99, 132, 0.2)',
                                                    'rgba(255, 159, 64, 0.2)',
                                                    'rgba(255, 206, 86, 0.2)',
                                                    'rgba(54, 162, 235, 0.2)',
                                                    'rgba(75, 192, 192, 0.2)',
                                                    'rgba(153, 102, 255, 0.2)',
                                                    'rgba(255, 159, 64, 0.2)',
                                                    'rgba(255, 99, 132, 0.2)',
                                                    'rgba(255, 159, 64, 0.2)',
                                                    'rgba(54, 162, 235, 0.2)'
                                                ],
                                                borderColor: [
                                                    'rgba(255, 206, 86, 1)',
                                                    'rgba(255,99,132,1)',
                                                    'rgba(54, 162, 235, 1)',
                                                    'rgba(255, 206, 86, 1)',
                                                    'rgba(75, 192, 192, 1)',
                                                    'rgba(153, 102, 255, 1)',
                                                    'rgba(255, 206, 86, 1)',
                                                    'rgba(255, 206, 86, 1)',
                                                    'rgba(255,99,132,1)',
                                                    'rgba(255, 206, 86, 1)',
                                                    'rgba(255, 159, 64, 1)'
                                                ],
                                                borderWidth: 1
                                            }]
                                        },
                                        options: {
                                            scales: {
                                                yAxes: [{
                                                    ticks: {
                                                        beginAtZero:true
                                                    }
                                                }]
                                            }
                                        }
                                    });
                                </script>
                            </div>
                            <!-- end of equipment reports -->

                            <!-- cumulative reports -->
                            <div class="sfContentBlock"><h2>CUMULATIVE REPORTS</h2>
                                <canvas id="myChart" width="400" height="400"></canvas>
                                <script>
                                    var ctx = document.getElementById("myChart").getContext('2d');
                                    var myChart = new Chart(ctx, {
                                        type: 'bar',
                                        data: {
                                            labels: ["January", "Febuary", "March", "April", "May"],
                                            datasets: [{
                                                label: 'RM x 100',
                                                data: [12, 19, 3, 5, 2, 3],
                                                backgroundColor: [
                                                    'rgba(255, 99, 132, 0.2)',
                                                    'rgba(54, 162, 235, 0.2)',
                                                    'rgba(255, 206, 86, 0.2)',
                                                    'rgba(75, 192, 192, 0.2)',
                                                    'rgba(153, 102, 255, 0.2)',
                                                    'rgba(255, 159, 64, 0.2)'
                                                ],
                                                borderColor: [
                                                    'rgba(255,99,132,1)',
                                                    'rgba(54, 162, 235, 1)',
                                                    'rgba(255, 206, 86, 1)',
                                                    'rgba(75, 192, 192, 1)',
                                                    'rgba(153, 102, 255, 1)',
                                                    'rgba(255, 159, 64, 1)'
                                                ],
                                                borderWidth: 1
                                            }]
                                        },
                                        options: {
                                            scales: {
                                                yAxes: [{
                                                    ticks: {
                                                        beginAtZero:true
                                                    }
                                                }]
                                            }
                                        }
                                    });
                                </script>
                            </div>
                            <!-- end of cumulative reports -->

                            <!-- table report -->
                            <table>
                                    <tr>
                                        <td>Instrument</td>
                                        <td>Jan</td>
                                        <td>Feb</td>
                                        <td>March</td>
                                        <td>Apr</td>
                                        <td>May</td>
                                        <td>TOTAL</td>
                                    </tr>
                                    <tr>
                                        <td>DSC</td>
                                        <td>3</td>
                                        <td>8</td>
                                        <td></td>
                                        <td></td>
                                        <td>2</td>
                                        <td>13</td>
                                    </tr>
                                    <tr>
                                        <td>FTIR</td>
                                        <td></td>
                                        <td></td>
                                        <td>5</td>
                                        <td>1</td>
                                        <td></td>
                                        <td>6</td>
                                    </tr>
                                    <tr>
                                        <td>FREEZE DRYER</td>
                                        <td></td>
                                        <td></td>
                                        <td>38</td>
                                        <td>5</td>
                                        <td>4</td>
                                        <td>47</td>
                                    </tr>
                                    <tr>
                                        <td>GC</td>
                                        <td>1</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>GC FID</td>
                                        <td></td>
                                        <td></td>
                                        <td>4</td>
                                        <td>11</td>
                                        <td></td>
                                        <td>15</td>
                                    </tr>
                            </table>
                            <!-- end of table report -->
                        </div>

                        <br>
                        <br>
                        
                        <!-- export PDF button -->
                        <button class="btn btn-primary btn-block"  onclick="HTMLtoPDF()">Export Report</button>
                        <!-- end of export PDF button -->

					</div>
				</div>
			</div>
    	</div>
    </div>

<script>
    $(function() {
		$("#datepicker").datepicker();
		$("#datepicker2").datepicker();
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
