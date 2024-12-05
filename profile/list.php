<?php
if (!defined('WEB_ROOT')) {
    header('Location: ../index.php');
    exit;
}

$errorMessage = (isset($_GET['error']) && $_GET['error'] != '') ? $_GET['error'] : '&nbsp;';

$userId = $user_data['user_id'];

$firstname = $user_data['firstname'];
$lastname = $user_data['lastname'];
$middlename = $user_data['middlename'];
$pos_id = $user_data['pos_id'];
$email = $user_data['email'];
$address = $user_data['address'];
$connum = $user_data['contactno'];

$pass1 = $user_data['pass_text'];

$sql = $conn->prepare("SELECT * FROM tbl_position WHERE posid = '$pos_id' AND is_deleted != '1'");
$sql->execute();
$rowc = $sql->rowCount();
if($rowc > 0){
	$sql_data = $sql->fetch();
	$posname = $sql_data['posname'];
}else{
	$posname = '';
}


$name = $firstname . ' ' . $middlename . ' '.$lastname; 
?>
			<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">User Profile</div>
						<div class="ps-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="<?php echo ADM_ROOT; ?>"><i class="bx bx-home-alt"></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">User Profile</li>
								</ol>
							</nav>
						</div>
						<div class="ms-auto">
							<div class="btn-group">
								<button type="button" class="btn btn-light">Settings</button>
								<button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
								</button>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
									<a class="dropdown-item" href="javascript:;">Another action</a>
									<a class="dropdown-item" href="javascript:;">Something else here</a>
									<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
								</div>
							</div>
						</div>
				</div>
				
		<!-- Button trigger modal -->
			<!--end breadcrumb-->
				<div class="container">
					<div class="main-body">
					<?php
						if($errorMessage == 'Deleted successfully.')
						{
					?>
						<div class="alert border-0 alert-dismissible fade show py-2">
							<div class="d-flex align-items-center">
								<div class="font-35 text-white"><i class='bx bxs-check-circle'></i>
								</div>
								<div class="ms-3">
									<h6 class="mb-0 text-white"><?php echo $errorMessage; ?></h6>
								</div>
							</div>
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>
					<?php
						}else if($errorMessage == 'Added successfully.')
						{
					?>
						<div class="alert border-0 alert-dismissible fade show py-2">
							<div class="d-flex align-items-center">
								<div class="font-35 text-white"><i class='bx bxs-check-circle'></i>
								</div>
								<div class="ms-3">
									<h6 class="mb-0 text-white"><?php echo $errorMessage; ?></h6>
								</div>
							</div>
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>
					<?php
						 }else if($errorMessage == 'Email already exist! Data entry failed.')
						{
					?>	
						<div class="alert border-0 alert-dismissible fade show py-2">
							<div class="d-flex align-items-center">
								<div class="font-35 text-white"><i class="fadeIn animated bx bx-trash-alt"></i>
								</div>
								<div class="ms-3">
									<h6 class="mb-0 text-white"><?php echo $errorMessage; ?></h6>
								</div>
							</div>
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>
					<?php								
						} else {}
					?>
						<form action="process.php?action=add" method="post">
							<div class="row">								
								<div class="col-lg-4">
									<div class="card">
										<div class="card-body">
											<div class="d-flex flex-column align-items-center text-center">
												<img src="<?php echo ADM_ROOT; ?>assets/images/user/<?php echo $user_data['image']; ?>" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
												<div class="mt-3">
													<h4><?php echo $name; ?></h4>
													<p class="mb-1"><?php echo $posname; ?></p>												
												</div>
											</div>
											<div class="row mb-3">
												<div class="col-sm-12" >
													<input type="text" class="form-control" id="user" value="<?php echo $email; ?>" readonly/>
												</div>
											</div>
											<div class="row mb-3">
												<div class="col-sm-12 input-group" id="show_hide_password">
													<input class="form-control" type="password" id="pass" name="pass_word" value="<?php echo $pass1; ?>" required>
													<div class="input-group-append">
														<a href="javascript:;" onclick="showHidePassword();" class="input-group-text"><i class="bx bx-show-alt" id="show_eye"></i></a>
													</div>
												</div>
											</div>
											<script>
												function showHidePassword(){
													var x = document.getElementById("pass");
													var eye = document.getElementById("show_eye");
													if (x.type === "password") {
														x.type = "text";
														eye.classList.remove('bx-show-alt');
														eye.classList.add('bx-hide');
													} else {
														x.type = "password";
														eye.classList.remove('bx-hide');
														eye.classList.add('bx-show-alt');
													}
												}
											</script>
											
										</div>
									</div>
								</div>
								<div class="col-lg-8">
									<div class="card">
										<div class="card-body">
											<div class="row mb-3">
												<div class="col-sm-3">
													<h6 class="mb-0" for="firstname">First Name</h6>
												</div>
												<div class="col-sm-9" >
													<input type="text" class="form-control" id="firstname" name="finame" value="<?php echo $firstname; ?>" required/>
												</div>
											</div>
											<div class="row mb-3">
												<div class="col-sm-3">
													<h6 class="mb-0" for="middlename">Middle Name</h6>
												</div>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="middlename" name="miname" value="<?php echo $middlename; ?>" />
												</div>
											</div>
											<div class="row mb-3">
												<div class="col-sm-3">
													<h6 class="mb-0" for="lastname">Last Name</h6>
												</div>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="lastname" name="laname" value="<?php echo $lastname; ?>" required/>
												</div>
											</div>
											<div class="row mb-3">
												<div class="col-sm-3">
													<h6 class="mb-0" for="position">Position:</h6>
												</div>
												<div class="col-sm-9">
													<select class="form-select mb-3" name="uposition" aria-label="Default select example" required>
														<option value="<?php echo $pos_id; ?>"><?php echo $posname; ?></option>
														<?php
															$sql = $conn->prepare("SELECT * FROM tbl_position WHERE posid != '$pos_id' ORDER BY posname ASC");
															$sql->execute();
															while($row = $sql->fetch()){
																$posid = $row['posid'];
																$posname1 = $row['posname'];
														?>
															<option value="<?php echo $posid; ?>"><?php echo $posname1; ?></option>
														<?php
															}
														?>
													</select>
												</div>
											</div>
											<div class="row mb-3">
												<div class="col-sm-3">
													<h6 class="mb-0">Email</h6>
												</div>
												<div class="col-sm-9">
													<input type="email.com" name="u_email" class="form-control" value="<?php echo $email; ?>" required/>
												</div>
											</div>
											<div class="row mb-3">
												<div class="col-sm-3">
													<h6 class="mb-0">Contact Number</h6>
												</div>
												<div class="col-sm-9">
													<input type="number" name="connum" class="form-control" value="<?php echo $connum; ?>"/>
												</div>
											</div>
											<div class="row mb-3">
												<div class="col-sm-3">
													<h6 class="mb-0">Address</h6>
												</div>
												<div class="col-sm-9">
													<input type="text" name="address" class="form-control" value="<?php echo $address; ?>" required/>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-3"></div>
												<div class="col-sm-9">
													<input type="submit" class="btn btn-light px-4" value="Save Changes" />
												</div>
											</div>
										</div>
									</div>
								</div>
								
							</div>
						</form>
					</div>
				</div>