<?php
include '../global-library/database.php';


$id2 = isset($_POST['data-salon-id']) ? $_POST['data-salon-id'] : '';
// Check if the favorite tag is clicked
if (isset($_POST['add_to_favorites'])) {
    // Assuming you have a user ID stored in $user_id variable

    $sln = $conn->prepare("SELECT * FROM bs_salon WHERE s_id = '$id2' AND is_deleted != '1'");
	$sln->execute();
	$sln_data = $sln->fetch();
		$s_description = $sln_data['s_description'];

    // Check if the salon is already in favorites
    $stmt_check = $conn->prepare("SELECT COUNT(*) FROM bs_favorite WHERE user_id = :user_id AND s_id = :s_id AND s_description = :s_description");
    $stmt_check->bindParam(':user_id', $userId, PDO::PARAM_INT);
    $stmt_check->bindParam(':s_id', $id2, PDO::PARAM_INT);
    $stmt_check->bindParam(':s_description', $s_description, PDO::PARAM_STR);
    $stmt_check->execute();
    $count = $stmt_check->fetchColumn();
    
    if ($count > 0) {
        // Salon already exists in favorites
        echo "";
    } else {
        // Insert into the database
        $stmt_insert = $conn->prepare("INSERT INTO bs_favorite (user_id, s_description, s_id) VALUES (:user_id, :s_description, :s_id)");
        $stmt_insert->bindParam(':user_id', $userId, PDO::PARAM_INT);
        $stmt_insert->bindParam(':s_id', $id2, PDO::PARAM_INT);
        $stmt_insert->bindParam(':s_description', $s_description, PDO::PARAM_STR);
        
        if ($stmt_insert->execute()) {
			echo "";
        } else {
            // Insertion failed
            echo "Error: " . $stmt_insert->errorInfo()[2]; // Using errorInfo() to get the error message
        }
    }
}
?>
<main>
	    <div class="container margin_30">
	        <div class="row">
	            <aside class="col-lg-3" id="sidebar_fixed">
				<form class="needs-validation" novalidate method="post" action="index.php"  enctype="multipart/form-data" name="form" id="form">
	                <div class="filter_col">
	                    <div class="inner_bt"><a href="#" class="open_filters"><i class="ti-close"></i></a></div>
							<div class="filter_type version_2">
								<h4><a href="#filter_1" data-bs-toggle="collapse" class="opened">Filters</a></h4>
								<div class="collapse show" id="filter_1">
									<ul>
										<li>
											<label class="container_check">All<small></small>
												<input type="checkbox" name="dep[]" value="1">
												<span class="checkmark"></span>
											</label>
										</li>
									<?php
										$sql2 = $conn->prepare("SELECT * FROM bs_dep");
										$sql2->execute();
										
										if ($sql2->rowCount() > 0) {
											while ($sql2_data = $sql2->fetch()) {
												$d_id = $sql2_data['d_id'];
												$d_name = $sql2_data['d_name'];
									?>
										<li>
											<label class="container_check"><?php echo $d_name; ?><small></small>
												<input type="checkbox" name="dep[]" value="<?php echo $d_name; ?>">
												<span class="checkmark"></span>
											</label>
										</li>
									<?php
											}
										} else {
											// Handle case where no categories are found
										}
									?>
									</ul>
								</div>
								<!-- /filter_type -->
							</div>
	                    <!-- /filter_type -->
	                    <div class="filter_type version_2">
	                        <h4><a href="#filter_2" data-bs-toggle="collapse" class="opened">Ratings</a></h4>
	                        <div class="collapse show" id="filter_2">
	                            <ul>
	                                <li>
	                                    <label class="container_check"><div class="rating"><i class="icon-star voted"></i>
	                                        <input type="checkbox">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                </li>
	                                <li>
	                                    <label class="container_check"><div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i>
	                                        <input type="checkbox">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                </li>
	                                <li>
	                                    <label class="container_check"><div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i>
	                                        <input type="checkbox">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                </li>
	                                <li>
	                                    <label class="container_check"><div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i>
	                                        <input type="checkbox">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                </li>
                                    <li>
	                                    <label class="container_check"><div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i>
	                                        <input type="checkbox">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                </li>
	                            </ul>
	                        </div>
	                    </div>
	                    <!-- /filter_type -->
	                    <div class="filter_type version_2">
	                        <h4><a href="#filter_3" data-bs-toggle="collapse" class="opened">Top salons</a></h4>
	                        <div class="collapse show" id="filter_3">
	                            <ul>
	                            </ul>
	                        </div>
	                    </div>
	                    <!-- /filter_type -->
	                    <div class="filter_type version_2">
	                        <h4><a href="#filter_4" data-bs-toggle="collapse" class="opened">Price</a></h4>
	                        <div class="collapse show" id="filter_4">
	                            <ul>
	                                <li>
	                                    <label class="container_check">$0 — $50<small>11</small>
	                                        <input type="checkbox">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                </li>
	                                <li>
	                                    <label class="container_check">$50 — $100<small>08</small>
	                                        <input type="checkbox">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                </li>
	                                <li>
	                                    <label class="container_check">$100 — $150<small>05</small>
	                                        <input type="checkbox">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                </li>
	                                <li>
	                                    <label class="container_check">$150 — $200<small>18</small>
	                                        <input type="checkbox">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                </li>
	                            </ul>
	                        </div>
	                    </div>
	                    <!-- /filter_type -->
	                    <div class="buttons">
							<button  class="btn_1" type="submit">Filter</button><a href="#0" class="btn_1 gray">Reset</a>
	                    </div>
	                </div>
				</form>
	            </aside>
	            <!-- /col -->
	            <div class="col-lg-9">
	                <div class="top_banner">
	                    <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.3)">
	                        <div class="container pl-lg-5">
	                            <div class="breadcrumbs">
	                                <ul>
	                                    <li><a href="#">Home</a></li>
	                                    <li><a href="#">Salons</a></li>
	                                </ul>
	                            </div>
	                            <h1>All salons</h1>
	                        </div>
	                    </div>
	                    <img src="<?php echo WEB_ROOT;?>img\slides\display4.jpg" class="img-fluid" alt="">
	                </div>
	                <!-- /top_banner -->
	            <div id="stick_here"></div>
	                <div class="toolbox elemento_stick add_bottom_30">
	                    <div class="container">
	                        <ul class="clearfix">
	                            <li>
	                                <a href="#0"><i class="ti-view-grid"></i></a>
	                                <!-- <a href="listing-row-1-sidebar-left.html"><i class="ti-view-list"></i></a> -->
	                            </li>
	                        </ul>
	                    </div>
	                </div>
	                <!-- /toolbox -->
					<div class="row small-gutters">
						<?php
						if (isset($_POST['dep'])) {
							foreach ($_POST['dep'] as $dep) {
								if($dep == 1){ $filter = ""; } else {
								 $filter = " AND dep_id LIKE '%" . $dep . "%'";
								}
							}
						} else {
							$filter = "";
						}

					$sql = $conn->prepare("SELECT * FROM bs_salon WHERE is_deleted != '1' $filter");
					$sql->execute();
					while ($row = $sql->fetch(PDO::FETCH_ASSOC)):

						
						?>
						<div class="col-6 col-md-4">
							<div class="grid_item">
								<!-- <span class="ribbon off">-30%</span> -->
								<figure class="fixed-size-image">
									<!-- Use data-salon-id to store the salon ID -->
                                    <a href="<?php echo WEB_ROOT?>business_details/index.php?s_id=<?php echo $row["s_id"]; ?>" class="salon-link" data-salon-id="<?php echo $row["s_id"]; ?>">
                                        <img class="fixed-size-image" src="<?php echo WEB_ROOT;?>adminpanel/assets/images/salon/<?php echo $row["image"]; ?>" alt="<?php echo $row["s_description"]; ?>">
                                    </a>
								</figure>
								<a href="<?php echo WEB_ROOT?>business_details/index.php?s_id=<?php echo $row["s_id"]; ?>" class="salon-link" data-salon-id="<?php echo $row["s_id"]; ?>">
                                    <h3><b><?php echo $row["s_description"]; ?></b></h3>
									<br>
									<h3><small><b><?php echo $row["dep_id"]; ?></b></small></h3>
                                </a>
                                <br>
                                <small><?php echo $row["address"]; ?></small>
								<div class="rating">
                                    <i class="icon-star voted"></i>
                                    <i class="icon-star voted"></i>
                                    <i class="icon-star voted"></i>
                                    <i class="icon-star voted"></i>
                                    <i class="icon-star"></i>
                             	</div>
								<ul>
								<form class="needs-validation" novalidate method="post" action="index.php"  enctype="multipart/form-data" name="form" id="form">
									<?php 
									$s_id = $row['s_id'];
									$s_description = $row['s_description'];
									
									// Check if the salon is already in favorites
									$fvT_chk = $conn->prepare("SELECT * FROM bs_favorite WHERE user_id = '$userId' AND s_id = '$s_id' AND s_description = '$s_description'");
									$fvT_chk->execute();

									if ($fvT_chk->rowCount() > 0) {
										// Salon already exists in favorites	
										echo '<input type="hidden" name="s_id-delete" value="' . $s_id. '">
												<input type="hidden" name="s_description-delete" value="' . $s_description. '">
												<li><button type="submit" name="remove_from_favorites" class="tooltip-1 btn btn-primary add-to-favorites favorite-button favorite-added" data-bs-toggle="tooltip" data-bs-placement="left" title="Added to favorites" data-salon-id="' . $s_id . '"><i class="fa-solid fa-heart"></i></button></li>';
									} else {
										// Salon not in favorites
										echo '<input type="hidden" name="data-salon-id" value="' . $row["s_id"] . '">
												<li><button type="submit" name="add_to_favorites" class="tooltip-1 btn btn-primary add-to-favorites favorite-button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites" data-salon-id="' . $row["s_id"] . '"><i class="fa-regular fa-heart"></i></button></li>';
									}
									?>
									</form>
									<?php
									if (isset($_POST['remove_from_favorites'])) {
										// Get user_id, s_id, and s_description from the form submission
										$s_id = $_POST['s_id-delete'];
										$s_description = $_POST['s_description-delete'];

										// Prepare and execute the DELETE query
										$stmt_delete = $conn->prepare("DELETE FROM bs_favorite WHERE user_id = :user_id AND s_id = :s_id AND s_description = :s_description");
										$stmt_delete->bindParam(':user_id', $userId, PDO::PARAM_INT);
										$stmt_delete->bindParam(':s_id', $s_id, PDO::PARAM_INT);
										$stmt_delete->bindParam(':s_description', $s_description, PDO::PARAM_STR);

										if ($stmt_delete->execute()) {
											// Redirect back to the list view after successful deletion
											header("Location: index.php?view=list");
											exit(); // Ensure script termination after header redirection
										} else {
											// Deletion failed
											echo "Error: " . $stmt_delete->errorInfo()[2]; // Using errorInfo() to get the error message
										}
									}
									?>
									<!-- <li><button type="submit" name="add_to_favorites" class="tooltip-1 btn btn-primary add-to-favorites favorite-button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="fa-regular fa-heart"></i></button></li>
									<li><button type="submit" name="add_to_favorites" class="tooltip-1 btn btn-primary add-to-favorites favorite-button" data-bs-toggle="tooltip" data-bs-placement="left" title="Added to favorites"><i class="fa-solid fa-heart"></i></button></li> -->
								</ul> 
							</div>
							<!-- /grid_item -->
						</div>
						<!-- /col -->
                 <?php endwhile; ?>
					</div>
					<!-- /row -->
	            </div>
	            <!-- /col -->
	        </div>
	        <!-- /row -->
	    </div>
	    <!-- /container -->
	</main>
	<!-- /main -->