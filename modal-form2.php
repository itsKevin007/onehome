<div id="myModal2" class="modal">
    <div class="modal-content" >
            <span style="width: 70% !important;" class="close2">&times;</span>
        <div class="borders mt-3">
            
            <div class="modal-body" >

                <form class="needs-validation" novalidate method="post" action="process-independent.php" enctype="multipart/form-data" name="form" id="form2">			
                        
                        <div class="row mb-4">
                            <div class="col-12 col-sm-4 mb-3">
                                <img src="images/icons/bluelogoh.png" alt="One Home Solutions" style="width:100%; height:auto;">
                            </div>
                            <div class="col-12 col-sm-8 text-center text-sm-right">
                                <h2 style="color:#022C5C;"><b>Independent Service Provider (LVM)</b></h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-3">
                                <div class="form-group">
                                    <label class="form-label" for="firstname">First Name:</label>
                                    <input type="text" id="firstname" name="firstname" placeholder="Enter Your First Name" required>
                                </div>
                            </div>
                            <div class="col-12 col-sm-3">
                                <div class="form-group">
                                    <label for="middlename">Middle Name:</label>
                                    <input type="text" id="middlename" name="middlename" placeholder="Enter Your Last Name" required>
                                </div>
                            </div>
                            <div class="col-12 col-sm-3">
                                <div class="form-group">
                                    <label for="lastname">Last Name:</label>
                                    <input type="text" id="lastname" name="lastname" placeholder="Enter Your Last Name" required>
                                </div>
                            </div>
                            <div class="col-12 col-sm-3">
                                <div class="form-group">
                                    <label for="suffix">Suffix:</label>
                                    <input type="text" id="suffix" name="suffix" placeholder="Ex: Sr./ Jr.">
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
                                    <input type="text" id="connum" name="connum" placeholder="Enter Your Contact Number" required>
                                </div>
                            </div>
                        </div>
                        <label for="bankdetails" class="text-center">Complete Address:</label>  
						<!-- <div class="row mb-2">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="region">Region:</label>

									<input type="text" id="region_text" name="region_text" placeholder="Enter Your Region" required>
                                    
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="province">Province:</label>

                                
									<input type="text" id="province_text" name="province_text" placeholder="Enter Your Province" required>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="city">City/Municipality:</label>
                                    
									<input type="text" id="city_text" name="city_text" placeholder="Enter Your Province" required>
									
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="barangay">Barangay:</label>
                                    <input type="text" id="barangay_text" name="barangay_text" placeholder="Enter Your Province" required>
                                </div>
                            </div>
                        </div>  -->
                        <div class="row mb-2">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="region">Region:</label>
                                    <select name="region" class="form-control form-control-md" id="region2"></select>
                                    <input type="hidden" id="region-text2" class="form-control form-control-md" name="region_text" required>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="province">Province:</label>
                                    <select name="province" class="form-control form-control-md" id="province2"></select>
                                    <input type="hidden" id="province-text2" class="form-control form-control-md" name="province_text" required>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="city">City/Municipality:</label>
                                    <select name="city" class="form-control form-control-md" id="city2"></select>
                                    <input type="hidden" id="city-text2" class="form-control form-control-md" name="city_text" required>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="barangay">Barangay:</label>
                                    <select name="barangay" class="form-control form-control-md" id="barangay2"></select>
                                    <input type="hidden" id="barangay-text2" class="form-control form-control-md" name="barangay_text" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="zipcode">Zip Code:</label>
                                    <input type="text" id="zipcode" name="zipcode" placeholder="Enter Your Zip Code." required>
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
                        <div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<label for="pername">Contact Person Name:</label>
									<input type="text" id="pername" name="pername" placeholder="Enter Your Contact Person Name">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label for="perpos">Contact Person Position:</label>
									<input type="text" id="perpos" name="perpos" placeholder="Enter Your Contact Person Position">
								</div>
							</div>
						</div>
							<div class="row">
								<div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="TaxIdentification">Tax Identification Number (TIN):</label>
                                        <input type="text" id="TaxIdentification" name="tin" placeholder="Enter Your TIN">
                                    </div>
                                </div>
							</div>
							<hr>
							<p>Business Permits and Licenses</p>
							<div class="row">
								<div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="dti">DTI #:</label>
                                        <input type="text" id="dti" name="dti" placeholder="Enter Your DTI">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="mayorper">Mayor's Permit #:</label>
                                        <input type="text" id="mayorper" name="mayorper" placeholder="Enter Your Mayor's Permit #">
                                    </div>
								</div>
								<div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="cor">COR/2303:</label>
                                        <input type="text" id="cor" name="cor" placeholder="Enter Your COR/2303">
                                    </div>
								</div>
							</div>
							
							<div id="inputContainer">
								<div class="col-lg-6">
									<div class="form-group">
										<label for="affiliate">Affilitations and Membership:</label>
										<input type="text" id="affiliate" name="affiliate[]" placeholder="Enter Your Affilitations and Membership:">
									</div>
								</div>	
							</div>
							<div class="col-lg-12">
								<div class="form-group" style="text-align: center;">								
									<button type="button" class="app_btn" id="addButton">+</button>					
								</div>
							</div>

							<div id="inputContainer1">						
								<div class="col-lg-6">
									<div class="form-group">
										<label for="aandr">Awards and Recognitions:</label>
										<input type="text" id="aandr" name="aandr[]" placeholder="Enter Your Awards and Recognitions">
									</div>
								</div>
							</div>	
					
								
							<div class="col-lg-12">
								<div class="form-group" style="text-align: center;">								
									<button type="button" class="app_btn" id="addButton1">+</button>					
								</div>
							</div>

							<hr>
							<b style="font-size: 12px;">Services/Products Offered</b><br>

							<div class="col-lg-12">
								<div class="form-group">
									<label for="serprod">Service / Product Categories:</label>
									<input type="text" id="serprod" name="serprod" placeholder="Enter Your Services/Products Offered:">
								</div>
							</div>
							

							<div class="row">
								<div class="col-lg-3">
									<label for="bankdetails">Geographic Areas Covered:</label>
								</div>
								<div class="col-lg-3">
									<div class="form-group">
										<div class="row"><div> <label for="Luzon">Luzon:</label></div><div><input type="checkbox" id="Luzon" name="geographL" value="1"></div></div>
									</div>
								</div>
								<div class="col-lg-3">
									<div class="form-group">
										<div class="row"><div> <label id="Visayas">Visayas:</label></div><div><input type="checkbox" id="Visayas" name="geographV" value="1"></div></div>
									</div>
								</div>
								<div class="col-lg-3">
									<div class="form-group">
										<div class="row"><div> <label for="Mindanao">Mindanao:</label></div><div><input type="checkbox" id="Mindanao" name="geographM" value="1"></div></div>
									</div>
								</div>
							</div> 
							<div class="row">
								<div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="assess">Assessment Fee Rate:</label>
                                        <input type="text" id="assess" name="assess" placeholder="Enter Your Assessment">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="kmmain">+ per 10 KM (From Main City):</label>
                                        <input type="text" id="kmmain" name="kmmain" placeholder="+ per 10 KM (From Main City)">
                                    </div>
								</div>
							</div>

							<p style="font-size: 12px;">Description of Services/Products:</p><br>
							<div id="inputContainer2">						
								<div class="col-lg-6">
									<div class="form-group">										
										<input type="text" id="DescriptionServices" name="DesSerProd[]" placeholder="Enter Your Description of Services/Products">
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group" style="text-align: center;">								
									<button type="button" class="app_btn" id="addButton2">+</button>					
								</div>
							</div>

							<p style="font-size: 12px;">Services Offered:</p><br>
							<div id="inputContainer3">						
								<div class="col-lg-6">
									<div class="form-group">										
										<input type="text" id="seroffered" name="seroffered[]" placeholder="Enter Your Services Offered">
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group" style="text-align: center;">								
									<button type="button" class="app_btn" id="addButton3">+</button>					
								</div>
							</div>
							<hr><br>
							<b style="font-size: 12px;">Financial Information:</b>
                            <p style="font-size: 12px;">AUDITED FINANCIAL STATEMENT (LAST 2-3 YEARS): **ATTACH A DOCUMENT FOR REFERENCE**</p>
							<div class="col-lg-12">
								<div class="form-group">
								<label for="credref">Credit References:</label>										
									<input type="text" id="credref" name="credref" placeholder="Enter Your Credit References">
								</div>
							</div>
							<p style="font-size: 12px;">BANK REFERENCES: (TO DEPOSIT PAYMENT)</p>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
									<label for="bank">Bank:</label>										
										<input type="text" id="bank" name="bank" placeholder="Enter Your Bank">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
									<label for="branch">Branch:</label>										
										<input type="text" id="branch" name="branch" placeholder="Enter Your Branch">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
									<label for="accname">Account Name:</label>										
										<input type="text" id="accname" name="accname" placeholder="Enter Your Account Name">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
									<label for="accno">Account No:</label>										
										<input type="text" id="accno" name="accno" placeholder="Enter Your Account No">
									</div>
								</div>
							</div>
							<hr>
							<p style="font-size: 12px;"><span style="font-weight: bold">Insurance</span> (DO NOT INPUT IF NOT APPLICABLE)</p>
							<div class="row">
								<div class="col-lg-2">
									<div class="form-group">
										<label for="accname">General Liability Insurance:</label>																
									</div>
								</div>
								<div class="col-lg-2">
									<div class="form-group">
										<div class="radio-group">
											<div class="row"><div> <label for="LiabilityYes">Yes:</label></div><div><input type="radio" id="LiabilityYes" name="liabilityin" value="1"></div></div>
										</div>
									</div>
								</div>
								<div class="col-lg-2">
									<div class="form-group">
										<div class="radio-group">
											<div class="row"><div> <label for="LiabilityNo">No:</label></div><div><input type="radio" id="LiabilityNo" name="liabilityin" value="0"></div></div>
										</div>
									</div>
								</div>
								<div class="col-lg-2">
									<div class="form-group">
										<label for="liabilityinno">Policy No/Expiry Date:</label>																				
									</div>
								</div>
								<div class="col-lg-4">
									<div class="form-group">
										<div class="radio-group">																				
											<input type="text" id="liabilityinsu" name="liabilityinsu" placeholder="Enter Your Policy No/Expiry Date:">
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-2">
									<div class="form-group">
										<label for="accname">Worker's Compensation Insurance:</label>																
									</div>
								</div>
								<div class="col-lg-2">
									<div class="form-group">
										<div class="radio-group">
											<div class="row"><div> <label for="workeryes">Yes:</label></div><div><input type="radio" id="workeryes" name="compenin" value="1"></div></div>
										</div>
									</div>
								</div>
								<div class="col-lg-2">
									<div class="form-group">
										<div class="radio-group">
											<div class="row"><div> <label for="workerno">No:</label></div><div><input type="radio" id="workerno" name="compenin" value="0"></div></div>
										</div>
									</div>
								</div>
								<div class="col-lg-2">
									<div class="form-group">
										<label for="compeninno">Policy No/Expiry Date:</label>																				
									</div>
								</div>
								<div class="col-lg-4">
									<div class="form-group">																				
										<input type="text" id="compeninno" name="compeninsu" placeholder="Enter Your Policy No/Expiry Date:">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-2">
									<div class="form-group">
										<label for="accname">Professional Indemnity Insurance:</label>																
									</div>
								</div>
								<div class="col-lg-2">
									<div class="form-group">
										<div class="radio-group">
											<div class="row"><div> <label for="indemyes">Yes:</label></div><div><input type="radio" id="indemyes" name="indemin" value="1"></div></div>
										</div>
									</div>
								</div>
								<div class="col-lg-2">
									<div class="form-group">
										<div class="radio-group">
											<div class="row"><div> <label for="indemno">No:</label></div><div><input type="radio" id="indemno" name="indemin" value="0"></div></div>
										</div>
									</div>
								</div>
								<div class="col-lg-2">
									<div class="form-group">
										<label for="indeminno">Policy No/Expiry Date:</label>																				
									</div>
								</div>
								<div class="col-lg-4">
									<div class="form-group">																				
										<input type="text" id="indeminno" name="indeminsu" placeholder="Enter Your Policy No/Expiry Date:">
									</div>
								</div>
							</div>
							<hr>
							<b style="font-size: 12px;">References and Experience</b>
							<label for="client">Clients</label>
							<div id="inputContainer4">						
								<div class="col-lg-6">
									<div class="form-group">										
										<input type="text" id="client" name="client[]" placeholder="Enter Your Clients">
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group" style="text-align: center;">								
									<button type="button" class="app_btn" id="addButton4">+</button>					
								</div>
							</div>
							<label for="clientref">Client References</label>
							<div id="inputContainer5">						
								<div class="col-lg-6">
									<div class="form-group">										
										<input type="text" id="clientref" name="clientref[]" placeholder="Enter Your Client References">
									</div>
								</div>
							</div>
                            <div class="col-lg-12">
								<div class="form-group" style="text-align: center;">								
									<button type="button" class="app_btn" id="addButton5">+</button>					
								</div>
							</div>

                            <br><br>
							<hr>
							<b class="acc-holder">SERVICE PROVIDER</b><br>  
							<b class="acc-holder">SERVICE PROVIDER WAIVER OF LIABILITY AND HOLD HARMLESS AGREEMENT</b><br><br>
							<p>This Service Provider Waiver of Liability and Hold Harmless Agreement is made and entered into by and between the undersigned</p>
							<div class="form-group"><input type="text" id="waiver" name="waiver" placeholder="Enter the name."></div>
							<p>and One Home Solutions (OHS).</p><br>
							<p>1. Acknowledgment of Role</p>
							<p>The Service Provider acknowledges that OHS is a platform that connects clients with independent Service Provider for
                                convenience. OHS does not provide any services directly and is not involved in the actual performance of services rendered by the
                                Contractor.
							</p>
							<p>2. Release and Waiver</p>
							<p>The Service Provider hereby fully and forever releases, waives, discharges, and covenants not to sue OHS, its affiliates, employees,
                                agents, officers, and directors from any and all claims, demands, actions, causes of action, liabilities, damages, costs, expenses, or
                                obligations of any kind or nature whatsoever, whether known or unknown, including but not limited to claims arising from the
                                performance or non-performance of services by the Service Provider to any client engaged through the OHS platform.
							</p>
							<p>3. Disclaimer of Warranties and Guarantees</p>
							<p>OHS makes no representations or warranties, express or implied, regarding the volume or quality of client referrals, or the
                                suitability of clients referred to the Service Provider. The Service Provider agrees that any concerns or disputes arising out of
                                services provided to clients must be addressed directly with the client and not with OHS.
							</p>
							<p>4. Indemnification</p>
							<p>The Service Provider agrees to indemnify, defend, and hold harmless OHS from and against any and all claims, damages, liabilities,
                                costs, and expenses (including attorneys' fees) arising from or related to (i) the Service Provider’s use of the OHS platform, (ii) the
                                performance or non-performance of services by the Service Provider to any client, and (iii) any actions, omissions, or conduct of
                                the Service Provider.
							</p>
							<p>5. Limitation of Liability</p>
							<p>Under no circumstances shall OHS be liable for any direct, indirect, incidental, consequential, special, or punitive damages, or any
                                other damages whatsoever, arising out of or related to the services provided by the Service Provider to any client, whether in
                                contract, tort, or otherwise, even if advised of the possibility of such damages.
							</p>
                            <p>6. Compliance with Laws and Regulations</p>
							<p>The Service Provider agrees to comply with all applicable laws, regulations, and industry standards in the performance of services
                                to clients. The Service Provider acknowledges that OHS has no control or responsibility over the Service Provider’s compliance
                                with such laws and regulations.
							</p>
							<p>7. Severability</p>
							<p>If any provision of this Agreement is found to be invalid or unenforceable, the remaining provisions shall continue to be valid and
                                enforceable to the fullest extent permitted by law.
							</p>
							<p>8. Governing Law</p>
							<p>This Agreement shall be governed by and construed in accordance with the laws of [Insert Jurisdiction], without regard to its
                                conflict of law principles.
							</p>
							<p>9. Entire Agreement</p>
							<p>This Agreement constitutes the entire understanding between the parties with respect to the subject matter hereof and
                                supersedes all prior and contemporaneous agreements, understandings, and representations, whether written or oral, related to
                                such subject matter.
							</p><br>
							<p>IN WITNESS WHEREOF, the Client has read and understood this Agreement and voluntarily signs it, intending to be legally
								bound.
							</p><br><br>

							<div class="form-group">
								<div class="radio-group">
									<div class="row"><div><input type="checkbox" name="agree" value="agree">:</div><div>&nbsp;<b class="acc-holder">If you check this box, you hereby agree to the terms and conditions.:</b></div></div>                                            
								</div>
							</div>
						
                        <!-- Hidden field for reCAPTCHA token -->
						<input type="hidden" name="recaptcha_response" id="recaptchaResponse2">
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
<script>
	// Second Modal
	var modal2 = document.getElementById("myModal2");
    var btn2 = document.getElementById("openModalBtn2"); // Independent Service Provider button
    var span2 = document.getElementsByClassName("close2")[0];

    btn2.onclick = function() {
        modal2.style.display = "block";
    }

    span2.onclick = function() {
        modal2.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal2) {
            modal2.style.display = "none";
        }
    }

    
</script>

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


<script>
        document.getElementById('addButton').addEventListener('click', function() {
            var container = document.getElementById('inputContainer');
            var newInputGroup = document.createElement('div');
            
            newInputGroup.innerHTML = `
				
					<div class="col-lg-6">
						<div class="form-group">
							<label for="affiliate">Affilitations and Membership:</label>
							<input type="text" id="affiliate" name="affiliate[]" placeholder="Enter Your DTI">
						</div>
					</div>
		
            `;
            
            container.appendChild(newInputGroup);
        });

		document.getElementById('addButton1').addEventListener('click', function() {
            var container = document.getElementById('inputContainer1');
            var newInputGroup1 = document.createElement('div');
            
            newInputGroup1.innerHTML = `
				
				<div class="col-lg-6">
					<div class="form-group">
						<label for="aandr">Awards and Recognitions:</label>
						<input type="text" id="aandr" name="aandr[]" placeholder="Enter Your DTI">
					</div>
				</div>
			
            `;
            
            container.appendChild(newInputGroup1);
        });

		document.getElementById('addButton2').addEventListener('click', function() {
            var container = document.getElementById('inputContainer2');
            var newInputGroup2 = document.createElement('div');
            
            newInputGroup2.innerHTML = `
				
				<div class="col-lg-6">
					<div class="form-group">										
						<input type="text" id="DescriptionServices" name="DesSerProd[]" placeholder="Enter Your Services/Products Offered">
					</div>
				</div>
			
            `;
            
            container.appendChild(newInputGroup2);
        });

		document.getElementById('addButton3').addEventListener('click', function() {
            var container = document.getElementById('inputContainer3');
            var newInputGroup3 = document.createElement('div');
            
            newInputGroup3.innerHTML = `
				
				<div class="col-lg-6">
					<div class="form-group">										
						<input type="text" id="seroffered" name="seroffered[]" placeholder="Enter Your Services Offered">
					</div>
				</div>
			
            `;
            
            container.appendChild(newInputGroup3);
        });

		document.getElementById('addButton4').addEventListener('click', function() {
            var container = document.getElementById('inputContainer4');
            var newInputGroup4 = document.createElement('div');
            
            newInputGroup4.innerHTML = `
				
				<div class="col-lg-6">
					<div class="form-group">										
						<input type="text" id="client" name="client[]" placeholder="Enter Your Clients">
					</div>
				</div>
			
            `;
            
            container.appendChild(newInputGroup4);
        });

		document.getElementById('addButton5').addEventListener('click', function() {
            var container = document.getElementById('inputContainer5');
            var newInputGroup5 = document.createElement('div');
            
            newInputGroup5.innerHTML = `
				
				<div class="col-lg-6">
					<div class="form-group">										
						<input type="text" id="clientref" name="clientref[]" placeholder="Enter Your Client References">
					</div>
				</div>
			
            `;
            
            container.appendChild(newInputGroup5);
        });
</script>
