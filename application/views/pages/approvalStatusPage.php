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
                        <div class="sfContentBlock"><h2>APPROVAL STATUS</h2>
                            <table>
                                <tr>
                                    <th>Item</th>
                                    <th>Cost (MYR)</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Attachments</th>
                                </tr>
                                <?php foreach($eventData as $key => $user_data) { ?>
                                    <tr>
                                        <td><?php echo $key + 1; ?></td>
                                        <td><?php echo $user_data->total ?></td>
                                        <td><?php echo $user_data->date ?></td>
                                        <td style="<?php echo $user_data->status === '1' ? 'background: #a0dca0;' : 'background: #ff1d1d;' ?>">
                                            <?php
                                                if ($user_data->status === '2') {
                                                    echo '<button onclick= window.location.href ='.base_Url().'admin/pendingApproval/'.$user_data->id.'">';
                                                }
                                                if ($user_data->status === '1') {
                                                    echo 'Approved';
                                                } else {
                                                    if ($user_data->status === '2') {
                                                        echo 'Pending Approval';
                                                    } else {
                                                        echo 'Pending Payment';
                                                    }
                                                }
                                                if ($user_data->status === '2') {
                                                    echo '</button>';
                                                }
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                                echo '<a href="'.base_url().'/assets/images/uploads/im.png" download>Download attachment</a>';
                                            ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </table>
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