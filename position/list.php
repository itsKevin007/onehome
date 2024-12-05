<?php
if (!defined('WEB_ROOT')) {
    header('Location: ../index.php');
    exit;
}

$errorMessage = (isset($_GET['error']) && $_GET['error'] != '') ? $_GET['error'] : '&nbsp;';

?>
<style rel="stylesheet">
td {
    vertical-align: super;
}
</style>
<h6 class="mb-0 text-uppercase">Subscriber / Client</h6><br>
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
							</div><div class="col">
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
							</div><div class="col">
						</div>
                    <?php
						}else if($errorMessage == 'Modified successfully.')
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
							</div><div class="col">
						</div>
					<?php
						 }else if($errorMessage == 'Data already exist! Data entry failed.')
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
							</div><div class="col">
						</div>
					<?php								
						} else {}
					?>
        <hr/>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <div class="mb-3">
						<button type="button"  data-bs-toggle="modal" data-bs-target="#exampleLargeModal" class="btn btn-light"><i class='bx bx-user me-0'>+</i>
					</div>
					<?php include 'add.php'; ?>
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                $sql = $conn->prepare("SELECT * FROM tbl_position WHERE is_deleted != :is_deleted ORDER BY posname DESC");
                                $sql->bindValue(':is_deleted', '1', PDO::PARAM_INT);
                                $sql->execute();

                                if ($sql->rowCount() > 0) {
                                    $ctr = 1;
                                    while ($sql_data = $sql->fetch()) {
                                            $posid = $sql_data['posid'];
                                            $posname = $sql_data['posname'];
                                            $descript = $sql_data['descript'];

                                            $uid = $sql_data['uid'];

                            ?>
                                        <tr>
                                            <td><?php echo $ctr++; ?></td>
                                            <td><?php echo $posname; ?></td>
                                            <td><?php echo $descript; ?></td>
                              
                                            <td>

                                                <div class="btn-group">                                                                                                      
                                                        <button type="button" data-bs-toggle="modal" data-bs-target="#<?php echo $uid; ?>" class="btn btn-light px-3 radius-30" aria-expanded="false"><i class="lni lni-pencil-alt"></i>
                                                        </button>                                            
                                                </div>&nbsp;

                                                <a href="process.php?action=delete&id=<?php echo $uid; ?>"  onClick="return confirmDelete()">
                                                    <div class="btn-group">                                                                                                      
                                                            <button type="button" class="btn btn-danger px-3 radius-30" aria-expanded="false"><span><i class="lni lni-trash"></i></span>                                                                                                     
                                                    </div>
                                                </a>
                                                
                                                &nbsp;                                              
                                            </td>
                                        </tr>
                            <?php
                                include 'modify.php';
                                    }
                                }else{}

                            ?>
                        </tbody>
                    
                    </table>
                </div>
            </div>
        </div>

        
<link rel="stylesheet" href="<?php echo WEB_ROOT;?>libraries/leaflet/leaflet.css" />
<script src="<?php echo WEB_ROOT;?>libraries/leaflet/leaflet.js"></script>

<script>
    let map, marker;

    // Function to initialize or update the map
    function updateMap(latitude, longitude) {
        const mapContainer = document.getElementById('map');
        // Initialize the map
        map = L.map(mapContainer).setView([latitude, longitude], 20);
        
        // Add OpenStreetMap tile layer
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© Trident3chnology'
        }).addTo(map);

        // Add marker to the map
        marker = L.marker([latitude, longitude]).addTo(map);

    }

    function initMap(latNum, longNum) {
        map = L.map('map').setView([latNum, longNum], 20);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© Trident3chnology'
        }).addTo(map);
        marker = L.marker([latitude, longitude]).addTo(map);
    }

    function updateMap1(latNum, longNum) {
        $('#viewTicket').on('shown.bs.modal', function () {
            map.invalidateSize();
            // Update marker position and popup content
            marker.setLatLng([latNum, longNum]).openPopup();
        });

        // Remove the event listener after the modal is hidden to prevent multiple bindings
        $('#viewTicket').on('hidden.bs.modal', function () {
            $('#viewTicket').off('shown.bs.modal');
        });

            document.addEventListener('DOMContentLoaded', function() {
            initMap(latNum, longNum);
        });
    }

    // Event listener for the "View Live Map" button
    document.getElementById('viewMapBtn').addEventListener('click', function () {
        const latitude = document.getElementById('lat').value;
        const longitude = document.getElementById('long').value;

        if (latitude && longitude) {
            // Convert the values to numbers
            const latNum = parseFloat(latitude);
            const longNum = parseFloat(longitude);

            // Update the map with the new coordinates
            updateMap1(latNum, longNum);
        }
    });

</script>