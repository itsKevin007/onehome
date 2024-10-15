<div id="myModal" class="modal">
        <div class="modal-content" >
        <span class="close">&times;</span>
            <div class="borders">
                
                <div class="modal-header">
                    <div class="row">
                        
                            <img src="images/icons/bluelogoh.png" alt="One Home Solutions">
                    
                            <h2>Client Information</h2>
                        
                    </div>
                </div>

                <div class="modal-body" >

                        <form>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="fname">First Name:</label>
                                        <input type="text" id="fname" name="fname" placeholder="Enter Your First Name">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="mname">Middle Name:</label>
                                        <input type="text" id="mname" name="mname" placeholder="Enter Your Last Name">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="lname">Last Name:</label>
                                        <input type="text" id="lname" name="lname" placeholder="Enter Your Last Name">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="contact">Suffix:</label>
                                        <input type="text" id="contact" name="contact" placeholder="Ex: Sr./ Jr.">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="national">Nationality:</label>
                                        <input type="text" id="national" name="national" placeholder="Enter Your Nationality">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="age">Age:</label>
                                        <input type="number" id="age" name="age" placeholder="Enter Your Age">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="birth">Date of Birth:</label>
                                        <input type="date" id="birth" name="birth" >
                                    </div>
                                </div>

                            </div>
                            <div class="row">
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
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="gender">Gender:</label>
                                        <div class="radio-group">
                                            <div class="row"><div> <label>Male:</label></div><div><input type="radio" name="gender" value="0"></div></div>
                                            <div class="row"><div> <label>Female:</label></div><div><input type="radio" name="gender" value="1"></div></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="form-group">
                                    <label for="gender">Civil Status:</label>
                                        <div class="radio-group">
                                            <div class="row"><div> <label for="single">Single:</label></div><div><input id="single" type="radio" name="civil" value="0"></div></div>
                                            <div class="row"><div> <label for="married">Married:</label></div><div><input id="married" type="radio" name="civil" value="1"></div></div>
                                            <div class="row"><div> <label for="parent">Single Parent:</label></div><div><input id="parent" type="radio" name="civil" value="2"></div></div>
                                            <div class="row"><div> <label for="divorced">Seperated/Divorced:</label></div><div><input id="divorced" type="radio" name="civil" value="3"></div></div>
                                            <div class="row"><div> <label for="widowed">Widowed:</label></div><div><input id="widowed" type="radio" name="civil" value="5"></div></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="govid">Email Address:</label>
                                        <input type="email" id="govid" name="govid" placeholder="Enter Your Email">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="connum">Contact Number:</label>
                                        <input type="text" id="connum" name="connum" placeholder="Enter Your Contact Number">
                                    </div>
                                </div>
                            </div>
							<label for="bankdetails">Complete Address:</label>                           
                            <div class="row">
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
                                        <label for="contact">Zip Code:</label>
                                        <input type="text" id="contact" name="contact" placeholder="Enter Your Zip Code.">
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
                                        <label for="bandl">Block and Lot:</label>
                                        <input type="text" id="bandl" name="bandl" placeholder="Enter Your Block and Lot.">
                                    </div>
                                </div>
                            </div>
                            <br><hr>
                            <b class="acc-holder">To be filled out by Account Holder</b><br>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="gender">Type of Membership:</label>
                                        <div class="radio-group">
                                            <div class="row"><div><label>Platinum:</label></div><div><input type="radio" name="type" value="0"></div></div>
                                            <div class="row"><div><label>Basic:</label></div><div><input type="radio" name="type" value="1"></div></div>
                                            <div class="row"><div><label>Platinum Commercial:</label></div><div><input type="radio" name="type" value="2"></div></div>
                                            <div class="row"><div><label>Basic Commercial:</label></div><div><input type="radio" name="type" value="3"></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="gender">Form of Payment:</label>
                                        <div class="radio-group">
                                            <div class="row"><div><label>Cash:</label></div><div><input type="radio" name="payment" value="0"></div></div>
                                            <div class="row"><div><label>Check:</label></div><div><input type="radio" name="payment" value="1"></div></div>
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
                            <label for="bankdetails">Bank Details (if paid through check):</label>
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
                                        <label for="check">Check No.:</label>
                                        <input type="text" id="check" name="check" placeholder="Enter the Check No.">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="branch">Account No.:</label>
                                        <input type="text" id="acc" name="branch" placeholder="Enter the Account No.">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="gender">With Proof of Billing:</label>
                                        <div class="radio-group">
                                            <div class="row"><div><label>Yes:</label></div><div><input type="radio" name="payment" value="1"></div></div>
                                            <div class="row"><div><label>No:</label></div><div><input type="radio" name="payment" value="0"></div></div>
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
												<div class="row"><div><label>Yes:</label></div><div><input type="radio" name="payment" value="0"></div></div>                                            
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<div class="form-group">
											<div class="radio-group">
												<div class="row"><div><label>No:</label></div><div><input type="radio" name="payment" value="1"></div></div>
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
							<div class="form-group"><input type="text" id="check" name="check" placeholder="Enter the name."></div>
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
									<div class="row"><div><input type="checkbox" name="payment" value="0">:</div><div>&nbsp;<b class="acc-holder">If you check this box, you hereby agree to the terms and conditions.:</b></div></div>                                            
								</div>
							</div>

							<hr>
							<div class="col-lg-12"><br><br>
								<b style="float: right; font-size: 12px"> Property Location Sketch</b>
							</div>
                        </form>
                </div>
            </div>
        </div>
    </div>