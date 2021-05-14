    <!-- https://itsolutionstuff.com/post/codeigniter-fullcalendar-exampleexample.html -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" /> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" /> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script> -->
    <!-- depricate from aove plug in -->

    <!-- links to the JS file -->
    <!-- http://preview.uedsky.com/demo/reserving -->
    <script src="<?php echo base_url(); ?>assets/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/moment.js"></script>
    <script src="<?php echo base_url(); ?>assets/fullcalendar.js"></script>
    <script src="<?php echo base_url(); ?>assets/notify.js"></script>
    <script src="<?php echo base_url(); ?>assets/strbuf.js"></script>
    <script src="<?php echo base_url(); ?>assets/jquery.qrcode.js"></script>
    <script src="<?php echo base_url(); ?>assets/bootstrap.js"></script>
    <!-- end of the JS file -->

    <!-- links to the styles -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/reserving.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fullcalendar.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/backend_framework.css">
    <!-- end to the styles -->

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
                            <br>
                            <div class="container">
                                <style>
                                    h1, h2 { font-weight: 100; }
                                    h1 { text-align: center; display: none; }
                                    .fc th { font-weight: 400; }
                                </style>
                                <h1 style="display: block; font-style: italic;">
                                    <?php
                                        if ($equipmentSelection) {
                                            echo 'Equipment Selected: ', $equipmentSelection;
                                        }
                                    ?>
                                </h1>
                                
                                <!-- calendar template begin -->
                                <div id="calendar" class="fc fc-ltr fc-unthemed">
                                <div class="fc-toolbar">
                                    <div class="fc-left">
                                        <div class="fc-button-group"><button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left"><span class="fc-icon fc-icon-left-single-arrow"></span></button><button type="button" class="fc-next-button fc-button fc-state-default fc-corner-right"><span class="fc-icon fc-icon-right-single-arrow"></span></button></div>
                                        <button type="button" class="fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right">today</button>
                                    </div>
                                    <div class="fc-right">
                                        <div class="fc-button-group"><button type="button" class="fc-agendaWeek-button fc-button fc-state-default fc-corner-left fc-state-active">week</button><button type="button" class="fc-agendaDay-button fc-button fc-state-default fc-corner-right">day</button></div>
                                    </div>
                                    <div class="fc-center">
                                        <h2>May 12 — 18, 2019</h2>
                                    </div>
                                    <div class="fc-clear"></div>
                                </div>
                                <div class="fc-view-container" style="display: none">
                                    <div class="fc-view fc-agendaWeek-view fc-agenda-view" style="">
                                        <table>
                                            <thead class="fc-head">
                                            <tr>
                                                <td class="fc-head-container fc-widget-header">
                                                    <div class="fc-row fc-widget-header" style="border-right-width: 1px; margin-right: 16px;">
                                                        <table>
                                                        <thead>
                                                            <tr>
                                                                <th class="fc-axis fc-widget-header" style="width:39px"></th>
                                                                <th class="fc-day-header fc-widget-header fc-sun" data-date="2019-05-12">Sun 5/12</th>
                                                                <th class="fc-day-header fc-widget-header fc-mon" data-date="2019-05-13">Mon 5/13</th>
                                                                <th class="fc-day-header fc-widget-header fc-tue" data-date="2019-05-14">Tue 5/14</th>
                                                                <th class="fc-day-header fc-widget-header fc-wed" data-date="2019-05-15">Wed 5/15</th>
                                                                <th class="fc-day-header fc-widget-header fc-thu" data-date="2019-05-16"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Autumn 5/16</font></font></th>
                                                                <th class="fc-day-header fc-widget-header fc-fri" data-date="2019-05-17">Fri 5/17</th>
                                                                <th class="fc-day-header fc-widget-header fc-sat" data-date="2019-05-18">Sat 5/18</th>
                                                            </tr>
                                                        </thead>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                            </thead>
                                            <tbody class="fc-body">
                                            <tr>
                                                <td class="fc-widget-content">
                                                    <div class="fc-time-grid-container fc-scroller" style="height: 527px;">
                                                        <div class="fc-time-grid">
                                                        <div class="fc-bg">
                                                            <table>
                                                                <tbody>
                                                                    <tr>
                                                                    <td class="fc-axis fc-widget-content" style="width:39px"></td>
                                                                    <td class="fc-day fc-widget-content fc-sun fc-future" data-date="2019-05-12"></td>
                                                                    <td class="fc-day fc-widget-content fc-mon fc-future" data-date="2019-05-13"></td>
                                                                    <td class="fc-day fc-widget-content fc-tue fc-future" data-date="2019-05-14"></td>
                                                                    <td class="fc-day fc-widget-content fc-wed fc-future" data-date="2019-05-15"></td>
                                                                    <td class="fc-day fc-widget-content fc-thu fc-future" data-date="2019-05-16"></td>
                                                                    <td class="fc-day fc-widget-content fc-fri fc-future" data-date="2019-05-17"></td>
                                                                    <td class="fc-day fc-widget-content fc-sat fc-future" data-date="2019-05-18"></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="fc-slats">
                                                            <table>
                                                                <tbody>
                                                                    <tr data-time="00:00:00">
                                                                    <td class="fc-axis fc-time fc-widget-content" style="width:39px"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">12am</font></font></span></td>
                                                                    <td class="fc-widget-content"></td>
                                                                    </tr>
                                                                    <tr data-time="00:30:00" class="fc-minor">
                                                                    <td class="fc-axis fc-time fc-widget-content" style="width:39px"></td>
                                                                    <td class="fc-widget-content"></td>
                                                                    </tr>
                                                                    <tr data-time="01:00:00">
                                                                    <td class="fc-axis fc-time fc-widget-content" style="width:39px"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1am</font></font></span></td>
                                                                    <td class="fc-widget-content"></td>
                                                                    </tr>
                                                                    <tr data-time="01:30:00" class="fc-minor">
                                                                    <td class="fc-axis fc-time fc-widget-content" style="width:39px"></td>
                                                                    <td class="fc-widget-content"></td>
                                                                    </tr>
                                                                    <tr data-time="02:00:00">
                                                                    <td class="fc-axis fc-time fc-widget-content" style="width:39px"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2am</font></font></span></td>
                                                                    <td class="fc-widget-content"></td>
                                                                    </tr>
                                                                    <tr data-time="02:30:00" class="fc-minor">
                                                                    <td class="fc-axis fc-time fc-widget-content" style="width:39px"></td>
                                                                    <td class="fc-widget-content"></td>
                                                                    </tr>
                                                                    <tr data-time="03:00:00">
                                                                    <td class="fc-axis fc-time fc-widget-content" style="width:39px"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3am</font></font></span></td>
                                                                    <td class="fc-widget-content"></td>
                                                                    </tr>
                                                                    <tr data-time="03:30:00" class="fc-minor">
                                                                    <td class="fc-axis fc-time fc-widget-content" style="width:39px"></td>
                                                                    <td class="fc-widget-content"></td>
                                                                    </tr>
                                                                    <tr data-time="04:00:00">
                                                                    <td class="fc-axis fc-time fc-widget-content" style="width:39px"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4am</font></font></span></td>
                                                                    <td class="fc-widget-content"></td>
                                                                    </tr>
                                                                    <tr data-time="04:30:00" class="fc-minor">
                                                                    <td class="fc-axis fc-time fc-widget-content" style="width:39px"></td>
                                                                    <td class="fc-widget-content"></td>
                                                                    </tr>
                                                                    <tr data-time="05:00:00">
                                                                    <td class="fc-axis fc-time fc-widget-content" style="width:39px"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5am</font></font></span></td>
                                                                    <td class="fc-widget-content"></td>
                                                                    </tr>
                                                                    <tr data-time="05:30:00" class="fc-minor">
                                                                    <td class="fc-axis fc-time fc-widget-content" style="width:39px"></td>
                                                                    <td class="fc-widget-content"></td>
                                                                    </tr>
                                                                    <tr data-time="06:00:00">
                                                                    <td class="fc-axis fc-time fc-widget-content" style="width:39px"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6am</font></font></span></td>
                                                                    <td class="fc-widget-content"></td>
                                                                    </tr>
                                                                    <tr data-time="06:30:00" class="fc-minor">
                                                                    <td class="fc-axis fc-time fc-widget-content" style="width:39px"></td>
                                                                    <td class="fc-widget-content"></td>
                                                                    </tr>
                                                                    <tr data-time="07:00:00">
                                                                    <td class="fc-axis fc-time fc-widget-content" style="width:39px"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">7am</font></font></span></td>
                                                                    <td class="fc-widget-content"></td>
                                                                    </tr>
                                                                    <tr data-time="07:30:00" class="fc-minor">
                                                                    <td class="fc-axis fc-time fc-widget-content" style="width:39px"></td>
                                                                    <td class="fc-widget-content"></td>
                                                                    </tr>
                                                                    <tr data-time="08:00:00">
                                                                    <td class="fc-axis fc-time fc-widget-content" style="width:39px"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">8am</font></font></span></td>
                                                                    <td class="fc-widget-content"></td>
                                                                    </tr>
                                                                    <tr data-time="08:30:00" class="fc-minor">
                                                                    <td class="fc-axis fc-time fc-widget-content" style="width:39px"></td>
                                                                    <td class="fc-widget-content"></td>
                                                                    </tr>
                                                                    <tr data-time="09:00:00">
                                                                    <td class="fc-axis fc-time fc-widget-content" style="width:39px"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9am</font></font></span></td>
                                                                    <td class="fc-widget-content"></td>
                                                                    </tr>
                                                                    <tr data-time="09:30:00" class="fc-minor">
                                                                    <td class="fc-axis fc-time fc-widget-content" style="width:39px"></td>
                                                                    <td class="fc-widget-content"></td>
                                                                    </tr>
                                                                    <tr data-time="10:00:00">
                                                                    <td class="fc-axis fc-time fc-widget-content" style="width:39px"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10am</font></font></span></td>
                                                                    <td class="fc-widget-content"></td>
                                                                    </tr>
                                                                    <tr data-time="10:30:00" class="fc-minor">
                                                                    <td class="fc-axis fc-time fc-widget-content" style="width:39px"></td>
                                                                    <td class="fc-widget-content"></td>
                                                                    </tr>
                                                                    <tr data-time="11:00:00">
                                                                    <td class="fc-axis fc-time fc-widget-content" style="width:39px"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">11am</font></font></span></td>
                                                                    <td class="fc-widget-content"></td>
                                                                    </tr>
                                                                    <tr data-time="11:30:00" class="fc-minor">
                                                                    <td class="fc-axis fc-time fc-widget-content" style="width:39px"></td>
                                                                    <td class="fc-widget-content"></td>
                                                                    </tr>
                                                                    <tr data-time="12:00:00">
                                                                    <td class="fc-axis fc-time fc-widget-content" style="width:39px"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">12pm</font></font></span></td>
                                                                    <td class="fc-widget-content"></td>
                                                                    </tr>
                                                                    <tr data-time="12:30:00" class="fc-minor">
                                                                    <td class="fc-axis fc-time fc-widget-content" style="width:39px"></td>
                                                                    <td class="fc-widget-content"></td>
                                                                    </tr>
                                                                    <tr data-time="13:00:00">
                                                                    <td class="fc-axis fc-time fc-widget-content" style="width:39px"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1pm</font></font></span></td>
                                                                    <td class="fc-widget-content"></td>
                                                                    </tr>
                                                                    <tr data-time="13:30:00" class="fc-minor">
                                                                    <td class="fc-axis fc-time fc-widget-content" style="width:39px"></td>
                                                                    <td class="fc-widget-content"></td>
                                                                    </tr>
                                                                    <tr data-time="14:00:00">
                                                                    <td class="fc-axis fc-time fc-widget-content" style="width:39px"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2pm</font></font></span></td>
                                                                    <td class="fc-widget-content"></td>
                                                                    </tr>
                                                                    <tr data-time="14:30:00" class="fc-minor">
                                                                    <td class="fc-axis fc-time fc-widget-content" style="width:39px"></td>
                                                                    <td class="fc-widget-content"></td>
                                                                    </tr>
                                                                    <tr data-time="15:00:00">
                                                                    <td class="fc-axis fc-time fc-widget-content" style="width:39px"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3pm</font></font></span></td>
                                                                    <td class="fc-widget-content"></td>
                                                                    </tr>
                                                                    <tr data-time="15:30:00" class="fc-minor">
                                                                    <td class="fc-axis fc-time fc-widget-content" style="width:39px"></td>
                                                                    <td class="fc-widget-content"></td>
                                                                    </tr>
                                                                    <tr data-time="16:00:00">
                                                                    <td class="fc-axis fc-time fc-widget-content" style="width:39px"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4pm</font></font></span></td>
                                                                    <td class="fc-widget-content"></td>
                                                                    </tr>
                                                                    <tr data-time="16:30:00" class="fc-minor">
                                                                    <td class="fc-axis fc-time fc-widget-content" style="width:39px"></td>
                                                                    <td class="fc-widget-content"></td>
                                                                    </tr>
                                                                    <tr data-time="17:00:00">
                                                                    <td class="fc-axis fc-time fc-widget-content" style="width:39px"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5pm</font></font></span></td>
                                                                    <td class="fc-widget-content"></td>
                                                                    </tr>
                                                                    <tr data-time="17:30:00" class="fc-minor">
                                                                    <td class="fc-axis fc-time fc-widget-content" style="width:39px"></td>
                                                                    <td class="fc-widget-content"></td>
                                                                    </tr>
                                                                    <tr data-time="18:00:00">
                                                                    <td class="fc-axis fc-time fc-widget-content" style="width:39px"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6pm</font></font></span></td>
                                                                    <td class="fc-widget-content"></td>
                                                                    </tr>
                                                                    <tr data-time="18:30:00" class="fc-minor">
                                                                    <td class="fc-axis fc-time fc-widget-content" style="width:39px"></td>
                                                                    <td class="fc-widget-content"></td>
                                                                    </tr>
                                                                    <tr data-time="19:00:00">
                                                                    <td class="fc-axis fc-time fc-widget-content" style="width:39px"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">7pm</font></font></span></td>
                                                                    <td class="fc-widget-content"></td>
                                                                    </tr>
                                                                    <tr data-time="19:30:00" class="fc-minor">
                                                                    <td class="fc-axis fc-time fc-widget-content" style="width:39px"></td>
                                                                    <td class="fc-widget-content"></td>
                                                                    </tr>
                                                                    <tr data-time="20:00:00">
                                                                    <td class="fc-axis fc-time fc-widget-content" style="width:39px"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">8pm</font></font></span></td>
                                                                    <td class="fc-widget-content"></td>
                                                                    </tr>
                                                                    <tr data-time="20:30:00" class="fc-minor">
                                                                    <td class="fc-axis fc-time fc-widget-content" style="width:39px"></td>
                                                                    <td class="fc-widget-content"></td>
                                                                    </tr>
                                                                    <tr data-time="21:00:00">
                                                                    <td class="fc-axis fc-time fc-widget-content" style="width:39px"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9pm</font></font></span></td>
                                                                    <td class="fc-widget-content"></td>
                                                                    </tr>
                                                                    <tr data-time="21:30:00" class="fc-minor">
                                                                    <td class="fc-axis fc-time fc-widget-content" style="width:39px"></td>
                                                                    <td class="fc-widget-content"></td>
                                                                    </tr>
                                                                    <tr data-time="22:00:00">
                                                                    <td class="fc-axis fc-time fc-widget-content" style="width:39px"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10pm</font></font></span></td>
                                                                    <td class="fc-widget-content"></td>
                                                                    </tr>
                                                                    <tr data-time="22:30:00" class="fc-minor">
                                                                    <td class="fc-axis fc-time fc-widget-content" style="width:39px"></td>
                                                                    <td class="fc-widget-content"></td>
                                                                    </tr>
                                                                    <tr data-time="23:00:00">
                                                                    <td class="fc-axis fc-time fc-widget-content" style="width:39px"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">11pm</font></font></span></td>
                                                                    <td class="fc-widget-content"></td>
                                                                    </tr>
                                                                    <tr data-time="23:30:00" class="fc-minor">
                                                                    <td class="fc-axis fc-time fc-widget-content" style="width:39px"></td>
                                                                    <td class="fc-widget-content"></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="fc-content-skeleton">
                                                            <table>
                                                                <tbody>
                                                                    <tr>
                                                                    <td class="fc-axis" style="width:39px"></td>
                                                                    <td>
                                                                        <div class="fc-content-col">
                                                                            <div class="fc-event-container fc-helper-container"></div>
                                                                            <div class="fc-event-container"></div>
                                                                            <div class="fc-highlight-container"></div>
                                                                            <div class="fc-bgevent-container"></div>
                                                                            <div class="fc-business-container">
                                                                                <div class="fc-nonbusiness fc-bgevent" style="top: 0px; bottom: -1055px;"></div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="fc-content-col">
                                                                            <div class="fc-event-container fc-helper-container"></div>
                                                                            <div class="fc-event-container"></div>
                                                                            <div class="fc-highlight-container"></div>
                                                                            <div class="fc-bgevent-container"></div>
                                                                            <div class="fc-business-container">
                                                                                <div class="fc-nonbusiness fc-bgevent" style="top: 0px; bottom: -395px;"></div>
                                                                                <div class="fc-nonbusiness fc-bgevent" style="top: 791px; bottom: -1055px;"></div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="fc-content-col">
                                                                            <div class="fc-event-container fc-helper-container"></div>
                                                                            <div class="fc-event-container"></div>
                                                                            <div class="fc-highlight-container"></div>
                                                                            <div class="fc-bgevent-container"></div>
                                                                            <div class="fc-business-container">
                                                                                <div class="fc-nonbusiness fc-bgevent" style="top: 0px; bottom: -395px;"></div>
                                                                                <div class="fc-nonbusiness fc-bgevent" style="top: 791px; bottom: -1055px;"></div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="fc-content-col">
                                                                            <div class="fc-event-container fc-helper-container"></div>
                                                                            <div class="fc-event-container">
                                                                                <a class="fc-time-grid-event fc-v-event fc-event fc-start fc-end fc-draggable fc-resizable fc-short" title="Training room (40 people) in 7 days" style="top: 461px; bottom: -483px; z-index: 1; left: 0%; right: 0%;">
                                                                                <div class="fc-content">
                                                                                    <div class="fc-time" data-start="10:30" data-full="10:30 AM - 11:00 AM"><span>10:30 - 11:00</span></div>
                                                                                    <div class="fc-title">Quatation</div>
                                                                                </div>
                                                                                <div class="fc-bg"></div>
                                                                                <div class="fc-resizer fc-end-resizer"></div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="fc-highlight-container"></div>
                                                                            <div class="fc-bgevent-container"></div>
                                                                            <div class="fc-business-container">
                                                                                <div class="fc-nonbusiness fc-bgevent" style="top: 0px; bottom: -395px;"></div>
                                                                                <div class="fc-nonbusiness fc-bgevent" style="top: 791px; bottom: -1055px;"></div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="fc-content-col">
                                                                            <div class="fc-event-container fc-helper-container"></div>
                                                                            <div class="fc-event-container"></div>
                                                                            <div class="fc-highlight-container"></div>
                                                                            <div class="fc-bgevent-container"></div>
                                                                            <div class="fc-business-container">
                                                                                <div class="fc-nonbusiness fc-bgevent" style="top: 0px; bottom: -395px;"></div>
                                                                                <div class="fc-nonbusiness fc-bgevent" style="top: 791px; bottom: -1055px;"></div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="fc-content-col">
                                                                            <div class="fc-event-container fc-helper-container"></div>
                                                                            <div class="fc-event-container"></div>
                                                                            <div class="fc-highlight-container"></div>
                                                                            <div class="fc-bgevent-container"></div>
                                                                            <div class="fc-business-container">
                                                                                <div class="fc-nonbusiness fc-bgevent" style="top: 0px; bottom: -395px;"></div>
                                                                                <div class="fc-nonbusiness fc-bgevent" style="top: 791px; bottom: -1055px;"></div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="fc-content-col">
                                                                            <div class="fc-event-container fc-helper-container"></div>
                                                                            <div class="fc-event-container"></div>
                                                                            <div class="fc-highlight-container"></div>
                                                                            <div class="fc-bgevent-container"></div>
                                                                            <div class="fc-business-container">
                                                                                <div class="fc-nonbusiness fc-bgevent" style="top: 0px; bottom: -1055px;"></div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <hr class="fc-divider fc-widget-header" style="display: none;">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                </div>
                                <dl class="text-muted usage">
                                <dt><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Using help</font></font></dt>
                                <dd>
                                    <ol>
                                        <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Click or drag the area to create an appointment</font></font></li>
                                        <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Drag to change the appointment time</font></font></li>
                                        <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Drag the appointment below the = number to change the appointment duration</font></font></li>
                                    </ol>
                                </dd>
                                </dl>
                                <!-- calendar template end  -->

                                <!-- pop up modal -->
                                <script id="pop_tpl" type="text/html">
                                    <div class="bubble">
                                        <a class="close" href="javascript:">&times;</a>

                                        <!-- TODO form action -->
                                        <form action="reservationUpdate" method="post">
                                        <!-- <form action="#" method="post"> -->
                                            <input name="id" type="hidden" value="${id}"/>
                                            <input name="start" type="hidden" value="${start}"/>
                                            <input name="end" type="hidden" value="${end}"/>
                                            <div class="group-wrap">
                                                <label>Time：</label>
                                                <div class="input-wrapper">${time}</div>
                                            </div>
                                            <div class="group-wrap">
                                                <label>Title：</label>
                                                <div>
                                                    <input class="input" type="text" name="title" value="${title}"/>
                                                    <span class="text-muted space-before">For example: Technical </span>
                                                </div>
                                            </div>
                                            <div class="group-wrap" style="display: none">
                                                <label>Location：</label>
                                                <select class="input-wrapper" name="room_id"></select>
                                            </div>
                                            <div class="group-wrap" style="padding-bottom:3px">
                                                <label></label>
                                                <div class="input-wrapper">
                                                    <a href="event-del" class="pull-right btn-delete" data-id="${id}">Reserve</a>
                                                    <button type="submit" class="btn btn-primary">Reserve</button>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="arrow"></div>
                                    </div>
                                </script>
                                <script>
                                $(function() {
                                
                                    $.notify.defaults({
                                        autoHideDelay: 3000,
                                        globalPosition: 'top center',
                                        elementPosition: 'right middle',
                                        className: 'success'
                                    });
                                
                                    var rooms = [
                                        { id: 0, name: 'Room 1', color: '', deleted: 0 },
                                        { id: 1, name: 'Room 2', color: '#42c176'},
                                        { id: 2, name: 'Room 3', color: '#f99338'},
                                        { id: 3, name: 'Room 4', color: '#bd4af1'},
                                        { id: 4, name: 'Room 5', color: '#608ff5'}
                                    ];
                                    var roomsAvailable = rooms.filter(function(room) {
                                        return !room.deleted;
                                    });
                                    var options = new strbuf();
                                    options.pushArray('<option value="${id}">${name}</option>', roomsAvailable);
                                
                                    function popAdd(evt, jsEvent, view) {
                                        popClose(); // close other pops
                                
                                        if(!('id' in evt) && (evt.start - 480*60*1000 < new Date())) {
                                            $.notify('Cannot make reservation before current date！', 'warn');
                                            calendar.fullCalendar('unselect');
                                            return;
                                        }
                                
                                        var eventData = {
                                            id: evt.id,
                                            title: evt.title,
                                            start: evt.start.unix(),
                                            end: evt.end ? evt.end.unix() : '',
                                            time: $.fullCalendar.formatRange(evt.start, evt.end || evt.start.add(1, 'hour'), 'MMMM D H:mm')
                                        };
                                        var html = strbuf($('#pop_tpl').html(), eventData, '');
                                        var pop = $(html).appendTo(document.body);
                                        pop.find('.close').click(function() {
                                            popClose();
                                            calendar.fullCalendar('unselect'); // cancel selected.
                                        });
                                        pop.keydown(function(e) {
                                            if(e.which === 27) {
                                                pop.find('.close').click();
                                            }
                                        });
                                        pop.find('[name=title]').select();
                                        var selectRoom = pop.find('[name=room_id]').html(options.toString());
                                        if(evt.room_id != null && rooms[evt.room_id].deleted) { // deleted room
                                
                                        } else {
                                            selectRoom.val(evt.room_id || roomsAvailable[0].id);
                                        }
                                        pop.find('.btn-delete').toggle('id' in evt).click(function() {
                                            var id = $(this).data('id');
                                            $.post('reservation-del', { id: id }, function(json) {
                                                if(json.code === 0 ) {
                                                    calendar.fullCalendar('removeEvents', id );
                                                    $.notify('删除成功！');
                                                    popClose();
                                                }
                                            });
                                            return false;
                                        });
                                        // position
                                        var element = $(jsEvent.target).closest('.fc-event');
                                        var sty = element.offset(), cls = 'bubble-top';
                                        if(!sty) {
                                            sty = { left: jsEvent.pageX, top: jsEvent.pageY };
                                        }
                                        sty.left -= (pop.outerWidth() - element.outerWidth()) / 2;
                                        if(sty.top - pop.outerHeight() - 12 > $(document).scrollTop()) {
                                            sty.top -= pop.outerHeight() + 12;
                                        } else {
                                            cls = 'bubble-bottom';
                                            sty.top += element.outerHeight() + 12;
                                        }
                                        pop.addClass(cls).css(sty);
                                
                                        pop.find('form').submit(function() {
                                            var form = this; // assigning this to form
                                            var titleInput = form.title;
                                            if(!titleInput.value.trim().length) {
                                                $(titleInput).notify('Please enter a title！', 'warn')
                                                titleInput.focus();
                                                return false;
                                            }
                                            $.post(this.action, $(this).serialize(), function(json) {
                                                // TODO HARIS integrate this with BE
                                                var event = {
                                                    id: json.data,
                                                    title: form.title.value,
                                                    room_id: form.room_id.value,
                                                    start: form.start.value,
                                                    end: form.end.value
                                                };


                                                console.log(event);
                                                // console.log(json);
                                                // console.log(form);
                                                console.log(this.action);
                                                console.log('XXXXXXXXXXXX');


                                                calendar.fullCalendar('renderEvent', event);
                                                calendar.fullCalendar('unselect'); // unselect to update UI.
                                                if(json.code === 0) {
                                                    if(json.data) { // add
                                                        var event = {
                                                            id: json.data,
                                                            title: form.title.value,
                                                            room_id: form.room_id.value,
                                                            start: form.start.value,
                                                            end: form.end.value
                                                        };
                                                        calendar.fullCalendar('renderEvent', event);
                                                        calendar.fullCalendar('unselect'); // unselect to update UI.
                                                    } else {
                                                        $.extend(evt, {
                                                            title: form.title.value,
                                                            room_id: form.room_id.value,
                                                            color: rooms[form.room_id.value].color
                                                        });
                                                        calendar.fullCalendar('updateEvent', evt);
                                                    }
                                
                                                    $.notify('Successfully saved');
                                                    popClose();
                                                }
                                            });
                                            return false;
                                        });
                                    }
                                    function popClose() {
                                        $('.bubble').remove();
                                    }
                                    $(document).click(function(e) {
                                        if(!$(e.target).closest('#calendar,.bubble').length) {
                                            popClose();
                                        }
                                    });
                                
                                    function updateEvent(event, delta, revertFunc) {
                                        var params = {
                                            id: event.id,
                                            start: event.start.unix(),
                                            end: event.end ? event.end.unix() : ''
                                        };
                                        $.post('reservationUpdate', params, function(json) {

                                            console.log('reservation update');
                                            // console.log(json);

                                            if(json.code === 0 ) {
                                                $.notify('Reserved complete');
                                            }
                                        });
                                    }
                                
                                    var calendar = $('#calendar').fullCalendar({
                                        header: {
                                            left: 'prev,next today',
                                            center: 'title',
                                            right: 'agendaWeek,agendaDay'
                                        },
                                        defaultView: 'agendaWeek',
                                        defaultTimedEventDuration: '01:00',
                                        allDaySlot: false,
                                        scrollTime: '08:00',
                                        businessHours: {
                                            start: '9:00',
                                            end: '18:00'
                                        },
                                        height: 600,
                                        lang: /^en-/.test(navigator.language) ? 'en' : 'zh-cn',
                                        eventOverlap: function(stillEvent, movingEvent) {
                                            return true;
                                        },
                                        events: function(start, end, timezone, callback) {
                                            // TODO HARIS get the data on initial load
                                            // $.get('reservations', {start: start.unix(), end: end.unix()}, function(json) {
                                            //     if(json.code === 0) {
                                            //         callback(json.data);
                                            //     }
                                            // });
                                        },
                                        eventDataTransform: function(eventData) {
                                            if( 'room_id' in eventData ) {
                                                eventData.start = moment.unix(eventData.start - 0).utcOffset(0).format();
                                                eventData.end && (eventData.end = moment.unix(eventData.end - 0).utcOffset(0).format());
                                                eventData.color = eventData.room_id && rooms[eventData.room_id].color;
                                            }
                                            return eventData;
                                        },
                                        editable: true,
                                        eventDrop: updateEvent,
                                        eventResize: updateEvent,
                                        eventClick: popAdd,
                                        selectable: true,
                                        selectHelper: true,
                                        select: function(start, end, jsEvent, view) {
                                            popAdd.call(this, {start: start, end: end}, jsEvent, view);
                                        },
                                        unselectCancel: '.bubble',
                                        unselect: function() {
                                            popClose();
                                        },
                                        eventRender: function(event, element) {
                                            var start = moment.unix(event.start.unix() - 480*60).fromNow();
                                            if(event.room_id) {
                                                element.attr('title', rooms[event.room_id].name + ' ' + start);
                                            }
                                        },
                                        loading: function() {
                                
                                        }
                                    });
                                
                                });
                                </script>
                            </div>
                            <a class="viewMoreButton" href="<?php echo base_url().'booking/generateQuatationDetails' ?>">Make a booking --></a>
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
   