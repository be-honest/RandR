<?php 


$userClass = new userClass();
$users = $userClass->getAllUsers();
// print_r($users);
require_once 'views/layouts/header.php';
require_once 'views/layouts/nav.php';
?>


<div class="container p-t-lg">
	<div class="row">
		<div class="col col-md-8 col-md-offset-2">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h4>USERS</h4>
				</div>
				<div class="panel-body">
					<ul class="nav nav-pills">
						<li class="active">
						    <a href="register-admin.php">
						      <span class="icon icon-add-user"></span>
						   			ADMIN
						    </a>
						  </li>
						  <li class="active">
							    <a href="register-user.php">
						      <span class="icon icon-users"></span>
						     	USER
						    </a>
						</li>
					</ul>
				</div>
			</div>
		</div>	
	</div>
	
</div>

<div class="container">
	<div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <div id="imaginary_container"> 
            	<div class="panel panel-info">
            		<div class="panel-body">
		                <table id="user-data" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
							<thead>
								<tr>
								<th>User Type</th>
								<th>Username</th>
								<th>Password</th>
								<th>Status</th>
								<th>Name</th>
								</tr>
							</thead>
							<tbody>
									<?php 
										foreach($users as $user)
										{
											?> <tr>
												<td><?php echo $user['user_type_id'];?></td>
												<td><?php echo $user['username'];?></td>
												<td><?php echo $user['password'];?></td>
												<td><?php echo $user['status_id'];?></td>
												<td><?php echo $user['first_name'];?></td>
												</tr>
										<?php  } ?>

								
							</tbody>
							
						</table>
	                </div>
                </div>
            </div>
        </div>
	</div>
</div>


<?php
require_once 'views/layouts/footer.php';
?>