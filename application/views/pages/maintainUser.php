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
                        <div class="sfContentBlock"><h2>User Maintainence</h2>
                            <!-- opening of the form -->
                            <?php echo form_open('admin/maintainUserSearch'); ?>    
                                <div class="row loginForm">
                                    <div class="col-md-4 col-md-offset-4">
                                        <h1 class="text-center"></h1>

                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control" placeholder="Enter User Email Address" required autofocus>
                                        </div>

                                        <!-- Submit -->
                                        <button type="submit" class="btn btn-primary btn-block">Search User</button>

                                    </div>
                                </div>
                            <?php echo form_close(); ?>
                            <!-- closing of the form -->
                            <div class="clearfix"></div>

                            <br>
                            <br>
                            
                            <?php if ($users) { ?>
                            <table>
                                <tr>
                                    <th>User Name</th>
                                    <th>Email</th>
                                    <th>Student Id</th>
                                    <th>Internal Student</th>
                                    <th>Role</th>
                                </tr>
                                <?php foreach($users as $key => $user_data) { ?>
                                    <tr>
                                        <td><?php echo $user_data->username ?></td>
                                        <td><?php echo $user_data->email ?></td>
                                        <td><?php echo $user_data->studentId ?></td>
                                        <td><?php echo $user_data->internalStudent ?></td>
                                        <td id="<?php echo $user_data->id ?>" data-user-id="<?php echo $user_data->id ?>">
                                            <select>
                                                <option <?php echo $user_data->rolePermissions === '1' ? 'selected' : '' ?> value="1">Super Admin</option>
                                                <option <?php echo $user_data->rolePermissions === '2' ? 'selected' : '' ?> value="2">Admin Staff View</option>
                                                <option <?php echo $user_data->rolePermissions === '3' ? 'selected' : '' ?> value="3">Admin Staff Edit</option>
                                                <option <?php echo $user_data->rolePermissions === '10' ? 'selected' : '' ?> value="10">Student</option>
                                                <option <?php echo $user_data->rolePermissions === '11' ? 'selected' : '' ?> value="11">Blocked</option>
                                            </select>
                                        </td>
                                    </tr>
                                <?php } ?>
                                
                            </table>
                            <?php } ?>
                        </div>
					</div>
				</div>
			</div>
    	</div>
    </div>

<script>
    const select = $('select');
    const parent = $(select.closest('td')[0]);
    select.on('change', function() {
        $.post("updateUserRole", {
            userId: parent.data('user-id'),
            rolePermissions: this.value
        },
        function(data, status) {
            // TODO
        });
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