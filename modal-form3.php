<div id="myModal3" class="modal">
    <div class="modal-content" >
            <span style="width: 70% !important;" class="close3">&times;</span>
        <div class="borders mt-3">
            
            <div class="modal-body" >

                <form class="needs-validation" novalidate method="post" action="process-company.php" enctype="multipart/form-data" name="form" id="form3">			
                        
                        <div class="row mb-4">
                            <div class="col-12 col-sm-4 mb-3">
                                <img src="images/icons/bluelogoh.png" alt="One Home Solutions" style="width:100%; height:auto;">
                            </div>
                            <div class="col-12 col-sm-8 text-center text-sm-right">
                                <h2 style="color:#022C5C;"><b>Service Provider Information</b></h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label" for="firstname">Company Business Name:</label>
                                    <input type="text" id="firstname" name="firstname" placeholder="Enter Your Business Name" required>
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
                        </div> -->
                        <div class="row mb-2">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="region">Region:</label>
                                    <select name="region" class="form-control form-control-md" id="region3"></select>
                                    <input type="hidden" id="region-text3" class="form-control form-control-md" name="region_text" required>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="province">Province:</label>
                                    <select name="province" class="form-control form-control-md" id="province3"></select>
                                    <input type="hidden" id="province-text3" class="form-control form-control-md" name="province_text" required>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="city">City/Municipality:</label>
                                    <select name="city" class="form-control form-control-md" id="city3"></select>
                                    <input type="hidden" id="city-text3" class="form-control form-control-md" name="city_text" required>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="barangay">Barangay:</label>
                                    <select name="barangay" class="form-control form-control-md" id="barangay3"></select>
                                    <input type="hidden" id="barangay-text3" class="form-control form-control-md" name="barangay_text" required>
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
                                    <label for="emailadd">Contact Person Name:</label>
                                    <input type="email" id="emailadd" name="ConPerName" placeholder="Enter Your Email" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="connum">Contact Person Position:</label>
                                    <input type="text" id="connum" name="ConPerPos" placeholder="Enter Your Contact Number" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="emailadd">Website Url:</label>
                                    <input type="email" id="web" name="WebUrl" placeholder="(Optional)" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="connum">Contact Registration No:</label>
                                    <input type="text" id="conreg" name="ConRegNo" placeholder="Enter Your Contact Number" required>
                                </div>
                            </div>
                        </div>
                        <hr>                       
                        <b style="font-size: 12px;">Business Details</b>
							<div class="row">
								<div class="col-lg-3">
									<div class="form-group">
										<div class="radio-group">
                                            <div class="row"><div><label>Corporation:</label></div><div><input type="radio" name="billing" value="Yes"></div></div>
										</div>
									</div>
								</div>
								<div class="col-lg-3">
									<div class="form-group">
										<div class="radio-group">
                                            <div class="row"><div><label>Partnership:</label></div><div><input type="radio" name="billing" value="No"></div></div>
										</div>
									</div>
								</div>
								<div class="col-lg-3">
									<div class="form-group">
										<div class="radio-group">
                                            <div class="row"><div><label>Sole Proprietorship:</label></div><div><input type="radio" name="billing" value="Yes"></div></div>
										</div>
									</div>
								</div>
								<div class="col-lg-3">
									<div class="form-group">
										<div class="radio-group">
                                            <div class="row"><div><label>LLC:</label></div><div><input type="radio" name="billing" value="No"></div></div>
										</div>
									</div>
								</div>
							</div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="yearop">Years In Operations:</label>
                                    <input type="email" id="yearop" name="YearOp" placeholder="(Optional)" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="numemp">Number of Employees:</label>
                                    <input type="text" id="numemp" name="NumEmp" placeholder="Enter Your Contact Number" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="yearop">Years In Operations:</label>
                                    <input type="email" id="yearop" name="YearOp" placeholder="(Optional)" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="numemp">Number of Employees:</label>
                                    <input type="text" id="numemp" name="NumEmp" placeholder="Enter Your Contact Number" required>
                                </div>
                            </div>
                        </div>
                        <label for="listofkey">List of Key Officer/Owners:</label>
                
                        <div id="inputContainer6">
                            <div class="col-lg-6">
                                <div class="form-group">                                   
                                    <input type="text" id="listofkey" name="ListKey[]" placeholder="List of Key Officer/Owners">
                                </div>
                            </div>	
                        </div>
           
                        <div class="col-lg-12">
                            <div class="form-group" style="text-align: center;">								
                                <button type="button" class="app_btn" id="addButton6">+</button>					
                            </div>
                        </div>	
                        
                        <label for="dtinum">Business Permits and Licences: (Select One)</label>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="dtinum">DTI #:</label>																
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <div class="radio-group">
                                        <div class="row"><div><input type="radio" id="selectDTI" name="inputType" onclick="toggleInput('dtinum')" required></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="radio-group">																				
                                        <input type="text" id="dtinum" name="dtinum" placeholder="DTI #" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="mayorperm">Mayor's Permit #</label>																
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <div class="radio-group">
                                        <div class="row"><div> <input type="radio" id="selectMayorPerm" name="inputType" onclick="toggleInput('mayorperm')" required></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="radio-group">																				
                                        <input type="text" id="mayorperm" name="MayorPerm" placeholder="Mayor's Permit #" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <label for="Affilitations">Affilitations and Membership:</label>
                        <div id="inputContainer7">
                            <div class="col-lg-6">
                                <div class="form-group">                                   
                                    <input type="text" id="Affilitations" name="AffandMem[]" placeholder="Affilitations and Membership">
                                </div>
                            </div>	
                        </div>
           
                        <div class="col-lg-12">
                            <div class="form-group" style="text-align: center;">								
                                <button type="button" class="app_btn" id="addButton7">+</button>					
                            </div>
                        </div>

                        <label for="Awards">Awards and Recognitions:</label>
                        <div id="inputContainer8">
                            <div class="col-lg-6">
                                <div class="form-group">                                   
                                    <input type="text" id="Awards" name="AwandRecog[]" placeholder="Awards and Recognitions">
                                </div>
                            </div>	
                        </div>
           
                        <div class="col-lg-12">
                            <div class="form-group" style="text-align: center;">								
                                <button type="button" class="app_btn" id="addButton8">+</button>					
                            </div>
                        </div>

                        <label for="serprod">Description of Services/Products:</label>
                        <div id="inputContainer9">
                            <div class="col-lg-6">
                                <div class="form-group">                                   
                                    <input type="text" id="serprod" name="SerProd[]" placeholder="Description of Services/Products">
                                </div>
                            </div>	
                        </div>
           
                        <div class="col-lg-12">
                            <div class="form-group" style="text-align: center;">								
                                <button type="button" class="app_btn" id="addButton9">+</button>					
                            </div>
                        </div>

                        <label for="BusinessDescription">Business Description:</label>
                        <div id="inputContainer10">
                            <div class="col-lg-6">
                                <div class="form-group">                                   
                                    <input type="text" id="BusinessDescription" name="BusiDesc[]" placeholder="Business Description">
                                </div>
                            </div>	
                        </div>
           
                        <div class="col-lg-12">
                            <div class="form-group" style="text-align: center;">								
                                <button type="button" class="app_btn" id="addButton10">+</button>					
                            </div>
                        </div>

                        <label for="ServicesProduct">Services/Product Offered:</label>
                        <div id="inputContainer11">
                            <div class="col-lg-6">
                                <div class="form-group">                                   
                                    <input type="text" id="ServicesProduct" name="SerProdOff[]" placeholder="Services/Product Offered">
                                </div>
                            </div>	
                        </div>
           
                        <div class="col-lg-12">
                            <div class="form-group" style="text-align: center;">								
                                <button type="button" class="app_btn" id="addButton11">+</button>					
                            </div>
                        </div>
                        <hr>
                        <b style="font-size: 12px;">Financial Information</b>
                        <p style="font-size: 12px;">Audited Financial Statement (Last 2-3 years): **Attach A Document For Reference**</p>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="Credit">Credit References:</label>
                                    <input type="text" id="Credit" name="CredRef" placeholder="Credit References" required>
                                </div>
                            </div>
                        </div>
                        <p style="font-size: 12px;">Bank References: (To Deposit Payment)</p>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="bank">Bank:</label>
                                    <input type="text" id="bank" name="BankRef" placeholder="Bank" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="Branch">Branch:</label>
                                    <input type="text" id="Branch" name="BranchRef" placeholder="Branch" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <label for="AccountName">Account Name:</label>
                                    <input type="text" id="AccountName" name="AccName" placeholder="Account Name" required>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="Account">Account No.:</label>
                                    <input type="text" id="Account" name="AccNo" placeholder="Account No." required>
                                </div>
                            </div>
                        </div>
                        
                        <br><br>
							<hr>
							<b class="acc-holder">SERVICE PROVIDER</b><br>  
							<b class="acc-holder">CONTRACTOR WAIVER OF LIABILITY AND HOLD HARMLESS AGREEMENT</b><br><br>
							<p>This Contractor Waiver of Liability and Hold Harmless Agreement is made and entered into by and between the undersigned</p>
							<div class="form-group"><input type="text" id="waiver" name="waiver" placeholder="Enter the name."></div>
							<p>and One Home Solutions (OHS).</p><br>
							<p>1. Acknowledgment of Role</p>
							<p>The Contractor acknowledges that OHS is a platform that connects clients with independent contractors for convenience. OHS
                                does not provide any services directly and is not involved in the actual performance of services rendered by the Contractor.
							</p>
							<p>2. Release and Waiver</p>
							<p>The Contractor hereby fully and forever releases, waives, discharges, and covenants not to sue OHS, its affiliates, employees,
                                agents, officers, and directors from any and all claims, demands, actions, causes of action, liabilities, damages, costs, expenses, or
                                obligations of any kind or nature whatsoever, whether known or unknown, including but not limited to claims arising from the
                                performance or non-performance of services by the Contractor to any client engaged through the OHS platform.
							</p>
							<p>3. Disclaimer of Warranties and Guarantees</p>
							<p>OHS makes no representations or warranties, express or implied, regarding the volume or quality of client referrals, or the
                                suitability of clients referred to the Contractor. The Contractor agrees that any concerns or disputes arising out of services
                                provided to clients must be addressed directly with the client and not with OHS.
							</p>
							<p>4. Indemnification</p>
							<p>The Contractor agrees to indemnify, defend, and hold harmless OHS from and against any and all claims, damages, liabilities,
                                costs, and expenses (including attorneys' fees) arising from or related to (i) the Contractor’s use of the OHS platform, (ii) the
                                performance or non-performance of services by the Contractor to any client, and (iii) any actions, omissions, or conduct of the
                                Contractor.
							</p>
							<p>Limitation of Liability
                                Under no circumstances shall OHS be liable for any direct, indirect, incidental, consequential, special, or punitive damages, or any
                                other damages whatsoever, arising out of or related to the services provided by the Contractor to any client, whether in contract,
                                tort, or otherwise, even if advised of the possibility of such damages.
							</p>
                            <p>6. Compliance with Laws and Regulations</p>
							<p>The Contractor agrees to comply with all applicable laws, regulations, and industry standards in the performance of services to
                                clients. The Contractor acknowledges that OHS has no control or responsibility over the Contractor’s compliance with such laws
                                and regulations.
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
									<div class="row"><div><input id="agreement" type="checkbox" name="agree" value="agree">:</div><div>&nbsp;<label class="acc-holder" for="agreement">If you check this box, you hereby agree to the terms and conditions.:</label></div></div>                                            
								</div>
							</div>
                        <!-- Hidden field for reCAPTCHA token -->
						<input type="hidden" name="recaptcha_response" id="recaptchaResponse3">
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
// JavaScript function to enable the selected input and disable the other
function toggleInput(selected) {
    document.getElementById('dtinum').disabled = (selected !== 'dtinum');
    document.getElementById('mayorperm').disabled = (selected !== 'mayorperm');
}

// Third Modal
var modal3 = document.getElementById("myModal3");
var btn3 = document.getElementById("openModalBtn3"); // Service Provider (Company) button
var span3 = document.getElementsByClassName("close3")[0];

btn3.onclick = function() {
    modal3.style.display = "block";
}

span3.onclick = function() {
    modal3.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal3) {
        modal3.style.display = "none";
    }
}

document.getElementById('addButton6').addEventListener('click', function() {
        var container = document.getElementById('inputContainer6');
        var newInputGroup6 = document.createElement('div');
        
        newInputGroup6.innerHTML = `
             
                <div class="col-lg-6">
                    <div class="form-group">
                        <input type="text" id="affiliate" name="ListKey[]" placeholder="List of Key Officer/Owners">
                    </div>
                </div>
    
        `;
        
        container.appendChild(newInputGroup6);
    });

    document.getElementById('addButton7').addEventListener('click', function() {
        var container = document.getElementById('inputContainer7');
        var newInputGroup7 = document.createElement('div');
        
        newInputGroup7.innerHTML = `
             
                <div class="col-lg-6">
                    <div class="form-group">                                   
                        <input type="text" id="Affilitations" name="AffandMem[]" placeholder="Affilitations and Membership">
                    </div>
                </div>
    
        `;
        
        container.appendChild(newInputGroup7);
    });

    document.getElementById('addButton8').addEventListener('click', function() {
        var container = document.getElementById('inputContainer8');
        var newInputGroup8 = document.createElement('div');
        
        newInputGroup8.innerHTML = `
             
            <div class="col-lg-6">
                <div class="form-group">                                   
                    <input type="text" id="Awards" name="AwandRecog[]" placeholder="Awards and Recognitions">
                </div>
            </div>	
    
        `;
        
        container.appendChild(newInputGroup8);
    });

    document.getElementById('addButton9').addEventListener('click', function() {
        var container = document.getElementById('inputContainer9');
        var newInputGroup9 = document.createElement('div');
        
        newInputGroup9.innerHTML = `
             
            <div class="col-lg-6">
                <div class="form-group">                                   
                    <input type="text" id="serprod" name="SerProd[]" placeholder="Description of Services/Products">
                </div>
            </div>	
    
        `;
        
        container.appendChild(newInputGroup9);
    });

    document.getElementById('addButton10').addEventListener('click', function() {
        var container = document.getElementById('inputContainer10');
        var newInputGroup10 = document.createElement('div');
        
        newInputGroup10.innerHTML = `
             
            <div class="col-lg-6">
                <div class="form-group">                                   
                    <input type="text" id="BusinessDescription" name="BusiDesc[]" placeholder="Business Description">
                </div>
            </div>	
    
        `;
        
        container.appendChild(newInputGroup10);
    });

    document.getElementById('addButton11').addEventListener('click', function() {
        var container = document.getElementById('inputContainer11');
        var newInputGroup11 = document.createElement('div');
        
        newInputGroup11.innerHTML = `
             
            <div class="col-lg-6">
                <div class="form-group">                                   
                    <input type="text" id="ServicesProduct" name="SerProdOff[]" placeholder="Services/Product Offered">
                </div>
            </div>	
    
        `;
        
        container.appendChild(newInputGroup11);
    });
    
</script>

<link rel="stylesheet" href="<?php echo WEB_ROOT;?>libraries/leaflet/leaflet.css" />
<script src="<?php echo WEB_ROOT;?>libraries/leaflet/leaflet.js"></script>
