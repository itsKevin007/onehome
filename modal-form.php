<div id="myModal" class="modal">
        <div class="modal-content" >
                <span class="close">&times;</span>
            <div class="borders mt-3">
                
                <div class="modal-body" >

                    <form class="needs-validation" novalidate method="post" action="process-client.php" enctype="multipart/form-data" name="form" id="form">			
                            
                            <div class="row mb-4">
                                <div class="col-12 col-sm-4 mb-3">
                                    <img src="images/icons/bluelogoh.png" alt="One Home Solutions" style="width:100%; height:auto;">
                                </div>
                                <div class="col-12 col-sm-8 text-center text-sm-right">
                                    <h2 style="color:#022C5C;"><b>Client Information</b></h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-3">
                                    <div class="form-group">
                                        <label class="form-label" for="firstname">First Name:</label>
                                        <input type="text" id="firstname" name="firstname" placeholder="Enter Your First Name">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3">
                                    <div class="form-group">
                                        <label for="middlename">Middle Name:</label>
                                        <input type="text" id="middlename" name="middlename" placeholder="Enter Your Last Name">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3">
                                    <div class="form-group">
                                        <label for="lastname">Last Name:</label>
                                        <input type="text" id="lastname" name="lastname" placeholder="Enter Your Last Name">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3">
                                    <div class="form-group">
                                        <label for="suffix">Suffix:</label>
                                        <input type="text" id="suffix" name="suffix" placeholder="Ex: Sr./ Jr.">
                                    </div>
                                </div>

                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="nationality">Nationality:</label>
                                        <input type="text" id="nationality" name="nationality" placeholder="Enter Your Nationality">
                                    </div>
                                </div>
                                <div class="col-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="birth">Date of Birth:</label>
                                        <input type="date" id="birth" name="birth" onchange="calculateAge()">
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <div class="form-group">
                                        <label for="age">Age:</label>
                                        <input type="number" id="age" name="age" placeholder="Enter Your Age" readonly>
                                    </div>
                                </div>

                                <script>
                                    function calculateAge() {
                                        const birthDateInput = document.getElementById('birth').value;
                                        const ageInput = document.getElementById('age');

                                        if (birthDateInput && birthDateInput.length === 10) { // Ensure date is fully entered in the format YYYY-MM-DD
                                            const birthDate = new Date(birthDateInput);
                                            const today = new Date();
                                            let age = today.getFullYear() - birthDate.getFullYear();
                                            const monthDifference = today.getMonth() - birthDate.getMonth();

                                            // Adjust age if the current date is before the birthday in the current year
                                            if (monthDifference < 0 || (monthDifference === 0 && today.getDate() < birthDate.getDate())) {
                                                age--;
                                            }

                                            ageInput.value = age; // Set the calculated age in the input field
                                        } else {
                                            ageInput.value = ''; // Clear the age field if no birth date is selected or incomplete
                                        }
                                    }
                                </script>

                            </div>
                            <div class="row mb-1">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="govid">Type of Government ID:</label>
                                        <input type="text" id="govid" name="govid" placeholder="Enter Your Government ID">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="idnum">ID Number:</label>
                                        <input type="text" id="idnum" name="idnum" placeholder="Enter Your ID Number">
                                    </div>
                                </div>

                            </div>
                            <div class="row mb-2">
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="gender">Gender:</label>
                                        <div class="radio-group">
                                            <div class="row"><div> <label>Male:</label></div><div><input type="radio" name="gender" value="Male"></div></div>
                                            <div class="row"><div> <label>Female:</label></div><div><input type="radio" name="gender" value="Female"></div></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="civilStatus">Civil Status:</label>
                                        <select id="civilStatus" name="civil" class="form-control">
                                            <option value="" selected disabled>Choose Civil Status</option>
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Single Parent">Single Parent</option>
                                            <option value="Separated/Divorced">Separated/Divorced</option>
                                            <option value="Widowed">Widowed</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="emailadd">Email Address:</label>
                                        <input type="email" id="emailadd" name="emailadd" placeholder="Enter Your Email" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="connum">Contact Number:</label>
                                        <input type="text" id="connum" name="connum" placeholder="Enter Your Contact Number">
                                    </div>
                                </div>
                            </div>
							<label for="bankdetails" class="text-center">Complete Address:</label>                           
                            <div class="row mb-2">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="region">Region:</label>
                                        <select name="region" class="form-control form-control-md" id="region"></select>
                                        <input type="hidden" id="region-text" class="form-control form-control-md" name="region_text" required>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="province">Province:</label>
                                        <select name="province" class="form-control form-control-md" id="province"></select>
                                        <input type="hidden" id="province-text" class="form-control form-control-md" name="province_text" required>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="city">City/Municipality:</label>
                                        <select name="city" class="form-control form-control-md" id="city"></select>
                                        <input type="hidden" id="city-text" class="form-control form-control-md" name="city_text" required>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="barangay">Barangay:</label>
                                        <select name="barangay" class="form-control form-control-md" id="barangay"></select>
                                        <input type="hidden" id="barangay-text" class="form-control form-control-md" name="barangay_text" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="zipcode">Zip Code:</label>
                                        <input type="text" id="zipcode" name="zipcode" placeholder="Enter Your Zip Code.">
                                    </div>
                                </div> 
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="subdivision">Subdivision/Village:</label>
                                        <input type="text" id="subdivision" name="subdivision" placeholder="Enter Your Subdivision/Village">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="street">Street/Name:</label>
                                        <input type="text" id="street" name="street" placeholder="Enter Your Street">
                                    </div>
                                </div>                                                                                             
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="unit">Unit/Floor:</label>
                                        <input type="text" id="unit" name="unit" placeholder="Enter Your Unit/Floor">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="building">Building Name:</label>
                                        <input type="text" id="building" name="building" placeholder="Enter Your Building Name">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="phase">Phase:</label>
                                        <input type="text" id="phase" name="phase" placeholder="Enter Your Phase">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="blocklot">Block and Lot:</label>
                                        <input type="text" id="blocklot" name="blocklot" placeholder="Enter Your Block and Lot.">
                                    </div>
                                </div>
                            </div>
                            <br><hr>
                            <b class="acc-holder">To be filled out by Account Holder</b><br>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="membershipType">Type of Membership:</label>
                                        <select id="membershipType" name="membership" class="form-control">
                                            <option value="" selected disabled>Choose Type of Membership</option>
                                            <option value="Platinum">Platinum</option>
                                            <option value="Basic">Basic</option>
                                            <option value="Platinum Commercial">Platinum Commercial</option>
                                            <option value="Basic Commercial">Basic Commercial</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="gender">Form of Payment:</label>
                                        <div class="radio-group">
                                            <div class="row"><div><label>Cash:</label></div><div><input type="radio" name="payment" value="cash"></div></div>
                                            <div class="row"><div><label>Check:</label></div><div><input type="radio" name="payment" value="check"></div></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="amount">Amount P:</label>
                                        <input type="text" id="amount" name="amount" placeholder="Enter the amount.">
                                    </div>
                                </div>
                            </div>
                            <label for="bankdetails" class="text-center">Bank Details (if paid through check):</label>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="gender">Bank:</label>
                                        <input type="text" id="bank" name="bank" placeholder="Enter the Bank.">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="branch">Branch:</label>
                                        <input type="text" id="branch" name="branch" placeholder="Enter the Branch.">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="checknum">Check No.:</label>
                                        <input type="text" id="checknum" name="checknum" placeholder="Enter the Check No.">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="accnum">Account No.:</label>
                                        <input type="text" id="accnum" name="accnum" placeholder="Enter the Account No.">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="gender">With Proof of Billing:</label>
                                        <div class="radio-group">
                                            <div class="row"><div><label>Yes:</label></div><div><input type="radio" name="billing" value="Yes"></div></div>
                                            <div class="row"><div><label>No:</label></div><div><input type="radio" name="billing" value="No"></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<br><hr>
                            <p class="acc-holder">For our workers to easily locate your property, we would like to put our logo sticker at your gate or perimeter wall.</p>
							<div class="row">
								<div class="col-lg-3"></div>
									<div class="col-lg-3">
										<div class="form-group">
											<div class="radio-group">
												<div class="row"><div><label>Yes:</label></div><div><input type="radio" name="gateperimeter" value="Yes"></div></div>                                            
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<div class="form-group">
											<div class="radio-group">
												<div class="row"><div><label>No:</label></div><div><input type="radio" name="gateperimeter" value="No"></div></div>
											</div>
										</div>
									</div>
								<div class="col-lg-3"></div>
                            </div>
							<br><br>
							<hr>
							<b class="acc-holder">Client</b><br>  
							<b class="acc-holder">WAIVER OF LIABILITY AND HOLD HARMLESS AGREEMENT</b><br><br>
							<p>This Waiver of Liability and Hold Harmless Agreement is made and entered into by and between the undersigned</p>
							<div class="form-group"><input type="text" id="waiver" name="waiver" placeholder="Enter the name."></div>
							<p>and One Home Solutions (OHS).</p><br>
							<p>1. Acknowledgment of Services Provided</p>
							<p>The Client acknowledges that OHS is a platform that connects clients with independent third-party contractors
								("Contractors") for convenience. OHS does not provide any services directly and is not involved in the actual performance of
								services rendered by the Contractors.
							</p>
							<p>2. Release and Waiver</p>
							<p>The Client hereby fully and forever releases, waives, discharges, and covenants not to sue OHS, its affiliates, employees,
								agents, officers, and directors from any and all claims, demands, actions, causes of action, liabilities, damages, costs,
								expenses, or obligations of any kind or nature whatsoever, whether known or unknown, including but not limited to claims
								arising from the performance or non-performance of services by any Contractor engaged by the Client through the OHS
								platform.
							</p>
							<p>3. Disclaimer of Warranties and Guarantees</p>
							<p>OHS makes no representations or warranties, express or implied, regarding the qualifications, quality, or suitability of any
								Contractor. The Client agrees that any concerns or disputes arising out of the services provided by a Contractor must be
								addressed directly with the Contractor and not with OHS.
							</p>
							<p>4. Indemnification</p>
							<p>The Client agrees to indemnify, defend, and hold harmless OHS from and against any and all claims, damages, liabilities,
								costs, and expenses (including attorneys' fees) arising from or related to (i) the Client’s use of the OHS platform, (ii) the
								performance or non-performance of services by any Contractor, and (iii) any actions, omissions, or conduct of the
								Contractors.
							</p>
							<p>5. Limitation of Liability</p>
							<p>Under no circumstances shall OHS be liable for any direct, indirect, incidental, consequential, special, or punitive damages, or
								any other damages whatsoever, arising out of or related to the services provided by any Contractor, whether in contract,
								tort, or otherwise, even if advised of the possibility of such damages.
							</p>
							<p>6. Severability</p>
							<p>If any provision of this Agreement is found to be invalid or unenforceable, the remaining provisions shall continue to be valid
								and enforceable to the fullest extent permitted by law.
							</p>
							<p>7. Governing Law</p>
							<p>This Agreement shall be governed by and construed in accordance with the laws of [Insert Jurisdiction], without regard to its
								conflict of law principles.
							</p>
							<p>8. Entire Agreement</p>
							<p>This Agreement constitutes the entire understanding between the parties with respect to the subject matter hereof and
								supersedes all prior and contemporaneous agreements, understandings, and representations, whether written or oral,
								related to such subject matter.
							</p><br>
							<p>IN WITNESS WHEREOF, the Client has read and understood this Agreement and voluntarily signs it, intending to be legally
								bound.
							</p><br><br>

							<div class="form-group">
								<div class="radio-group">
									<div class="row"><div><input type="checkbox" name="agree" value="agree">:</div><div>&nbsp;<b class="acc-holder">If you check this box, you hereby agree to the terms and conditions.:</b></div></div>                                            
								</div>
							</div>

							<hr>
							<!-- <div class="col-lg-12"><br><br>
								<b style="float: right; font-size: 12px"> Property Location Sketch</b>
							</div> -->
                            <div class="row">
                                <div class="col-12 col-sm-4 mb-3">
                                    <img src="images/icons/bluelogoh.png" alt="One Home Solutions" style="width:100%; height:auto;">
                                </div>
                                <div class="col-12 col-sm-8 text-center text-sm-right">
                                    <h2 style="color:#022C5C;"><b>Property Location Pin</b></h2>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <input type="hidden" class="form-control form-control-sm" id="long" name="long" autocomplete="off" />
                                <input type="hidden" class="form-control form-control-sm" id="lat" name="lat"  autocomplete="off"/>
                                <div class="col-12">
                                    <div id="map" style="height: 400px; width: 100%;border-radius:15px;"></div> <!-- Adjust height as needed -->
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-12 col-sm-12">
                                    <button type="submit" class="btn btn-lg btn-primary" style="width:100%;height:40px;background-color:#022C5C;border:1px #022C5C solid;color:white;border-radius:15px;">Submit Form</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="<?php echo WEB_ROOT;?>libraries/leaflet/leaflet.css" />
<script src="<?php echo WEB_ROOT;?>libraries/leaflet/leaflet.js"></script>

<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("openModalBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // Initialize the map variable
    var map;
    var marker;
    var currentLocation; // To store the current location

    // Function to initialize the map
    function initMap() {
        // Default location (Bacolod City)
        var defaultLocation = [10.6462477, 122.9193268];

        // Initialize the map
        map = L.map('map').setView(defaultLocation, 15); // Set the default view

        // Add OpenStreetMap tile layer
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://tridentechnology.com/">Trident Technology</a>'
        }).addTo(map);

        // Initialize a marker at the default position
        marker = L.marker(defaultLocation, { draggable: true }).addTo(map);

        // Get the user's current location
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var lat = position.coords.latitude;
                var lng = position.coords.longitude;

                // Set the map view to the user's current location
                currentLocation = [lat, lng]; // Store the current location
                map.setView(currentLocation, 13); // Zoom level can be adjusted

                // Move the marker to the user's current location
                marker.setLatLng(currentLocation);

                // Update the lat and long input fields
                document.getElementById('lat').value = lat.toFixed(6);
                document.getElementById('long').value = lng.toFixed(6);
            }, function() {
                // If geolocation fails, keep the default location
                alert("Geolocation service failed. Using default location.");
                currentLocation = defaultLocation; // Use the default location
            });
        } else {
            alert("Geolocation is not supported by this browser.");
            currentLocation = defaultLocation; // Use the default location
        }

        // Update the marker and input fields on map click
        map.on('click', function(e) {
            var lat = e.latlng.lat;
            var lng = e.latlng.lng;

            // Move the marker to the clicked location
            marker.setLatLng(e.latlng);

            // Set the map view to the clicked location
            map.setView(e.latlng, map.getZoom()); // Keep the current zoom level

            // Update the lat and long input fields
            document.getElementById('lat').value = lat.toFixed(6);
            document.getElementById('long').value = lng.toFixed(6);
        });

        // Update lat/lng inputs if the marker is dragged
        marker.on('dragend', function(e) {
            var position = marker.getLatLng();
            map.setView(position, map.getZoom()); // Center the map on the new marker position with current zoom level
            document.getElementById('lat').value = position.lat.toFixed(6);
            document.getElementById('long').value = position.lng.toFixed(6);
        });
    }

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
        initMap(); // Initialize the map when opening the modal
        if (map) {
            map.invalidateSize(); // Fix rendering issues in modal
        }
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
