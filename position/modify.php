<div class="modal fade" id="<?php echo $uid; ?>" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			
				<div class="modal-header">
					<h5 class="modal-title">ADD SUBSCRIBER</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-xl-12 mx-auto">
								<div class="card border-top border-0 border-4 border-white">
									<div class="card-body p-5">		
									<form class="needs-validation" novalidate method="post" action="process.php?action=modify" enctype="multipart/form-data" name="form" id="form">					
									<div class="mb-3">
											<label for="pname" class="form-label">Position name: </label>
											<input type="text" class="form-control" id="pname" name="posname" placeholder="Position Name" autocomplete="off" value="<?php echo $posname; ?>" required />
											<div class="invalid-feedback">
												Please provide a valid Position name.
											</div>
										</div>
										<div class="mb-3">
											<label for="description" class="form-label">Description: </label>
											<textarea class="form-control" id="description" name="descript" placeholder="Description" autocomplete="off" required ><?php echo $descript; ?></textarea>
											<div class="invalid-feedback">
												Please provide a valid Description.
											</div>
										</div>
                                        <input type="hidden" name="id" value="<?php echo $uid; ?>" />
										<button type="button" style="float: left;" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
										<button type="submit" style="float: right;" class="btn btn-primary">Save</button>
									</form>									

								</div> <!-- end card-body-->
							</div> <!-- end card-->
						</div> <!-- end col-->
					</div>
				</div>
			
			</form>
		</div>
	</div>
</div>