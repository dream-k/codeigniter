

<body class="account-body accountbg">

        <!-- Log In page -->
	<div class="row vh-100 mt-5">
		<div class="col-12 align-self-center">
			<div class="auth-page">
				<div class="card auth-card shadow-lg">
					<div class="card-body">
						<div class="px-3">
							<form class="form-horizontal auth-form my-4" id="regForm"  action="index.php">
								
								<div class="tab" id="tab1" style="display:block;">
									<div class="auth-logo-box">
										<a href="<?php echo base_url()?>" class="logo logo-admin"><img src="<?php echo base_url('images/registration_images/reg_image_one.png')?>" height="70" alt="logo" class="auth-logo"></a>
									</div><!--end auth-logo-box-->
									<div class="text-center auth-logo-text mb-5">
										<h4 class="mt-0 mb-3 mt-5">Tell Us About Your Organization</h4>
									</div> <!--end auth-logo-text-->   
									<div class="form-group">
										<label for="org_name">Organization Name</label>
										<div class="input-group mb-3">
											<span class="auth-form-icon">
												<i class="dripicons-suitcase"></i> 
											</span>   
											<input type="text" class="form-control required" name="org_name" id="org_name" >
										</div>                                    
									</div><!--end form-group--> 
									<div class="form-group">
										<label for="org_add">Address</label>
										<div class="input-group mb-3">
											<span class="auth-form-icon">
												<i class="dripicons-home"></i> 
											</span>    
											<input type="text" class="form-control required" name="org_add" id="org_add" >
										</div>                                    
									</div><!--end form-group-->
									<div class="form-group">
										<div class="row">
											<div class="col-md-4">
												<label for="org_unit">Unit No</label>
												<div class="input-group mb-3">    
													<span class="auth-form-icon">
														<i class="dripicons-tag"></i> 
													</span>   

													<input type="text" pattern="[0-9]*" inputmode="numeric" class="form-control" id="org_unit">
												</div>    
											</div>  
											<div class="col-md-8"> 
												<label for="org_city">City</label>
												<div class="input-group mb-3">    
													<span class="auth-form-icon">
														<i class="dripicons-location"></i> 
													</span>   

													<input type="text" class="form-control required" id="org_city" >
												</div>  
											</div>       
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-4">
												<label for="org_state">State</label>
												<div class="input-group mb-3">    
													<span class="auth-form-icon">
														<i class="dripicons-map"></i> 
													</span> 
													<select class="select2 form-control mb-3 custom-select required" style="width: 100%; height:36px;" id="org_state" >
														<option value=" ">Select</option>
														<option value="AL">Alabama</option>
														<option value="AK">Alaska</option>
														<option value="AZ">Arizona</option>
														<option value="AR">Arkansas</option>
														<option value="CA">California</option>
														<option value="CO">Colorado</option>
														<option value="CT">Connecticut</option>
														<option value="DE">Delaware</option>
														<option value="DC">District of Columbia</option>
														<option value="FL">Florida</option>
														<option value="GA">Georgia</option>
														<option value="HI">Hawaii</option>
														<option value="ID">Idaho</option>
														<option value="IL">Illinois</option>
														<option value="IN">Indiana</option>
														<option value="IA">Iowa</option>
														<option value="KS">Kansas</option>
														<option value="KY">Kentucky</option>
														<option value="LA">Louisiana</option>
														<option value="ME">Maine</option>
														<option value="MD">Maryland</option>
														<option value="MA">Massachusetts</option>
														<option value="MI">Michigan</option>
														<option value="MN">Minnesota</option>
														<option value="MS">Mississippi</option>
														<option value="MO">Missouri</option>
														<option value="MT">Montana</option>
														<option value="NE">Nebraska</option>
														<option value="NV">Nevada</option>
														<option value="NH">New Hampshire</option>
														<option value="NJ">New Jersey</option>
														<option value="NM">New Mexico</option>
														<option value="NY">New York</option>
														<option value="NC">North Carolina</option>
														<option value="ND">North Dakota</option>
														<option value="OH">Ohio</option>
														<option value="OK">Oklahoma</option>
														<option value="OR">Oregon</option>
														<option value="PA">Pennsylvania</option>
														<option value="RI">Rhode Island</option>
														<option value="SC">South Carolina</option>
														<option value="SD">South Dakota</option>
														<option value="TN">Tennessee</option>
														<option value="TX">Texas</option>
														<option value="UT">Utah</option>
														<option value="VT">Vermont</option>
														<option value="VA">Virginia</option>
														<option value="WA">Washington</option>
														<option value="WV">West Virginia</option>
														<option value="WI">Wisconsin</option>
														<option value="WY">Wyoming</option>
													</select>
												</div>                                                       
											</div>  

											<div class="col-md-8"> 
												<label for="org_country">Country</label>
												<div class="input-group mb-3">    
													<span class="auth-form-icon">
														<i class="dripicons-web"></i> 
													</span>  
													<select id="org_country" class="select2 form-control mb-3 custom-select required" style="width: 100%; height:36px;">
													</select>

												</div>  
											</div>       
										</div>

									</div>
									<div class="form-group row mt-4">
										<div class="col-sm-12">                     
											<div class="custom-control custom-switch switch-primary">
												<input type="checkbox" class="custom-control-input required" id="customSwitchPrimary">
												<label class="custom-control-label" for="customSwitchPrimary">Terms of Agreement</label>
											</div>
										</div><!--end col-->                                             
									</div><!--end form-group--> 		        
									<div class="form-group mb-0 row">
										<div class="col-12 mt-2" id="selector">
											<div class="row">
												<div class="col-12 next">
													<button type="button" class="btn btn-primary btn-block enw" id="nextBtn1" onclick="nextPrev(1)"  disabled>Next</button>
												</div>
											</div>
										</div>
									</div> 
                        		</div><!--end tab --> 
								<div class="tab" id="tab2">
									<div class="auth-logo-box">
										<a href="<?php echo base_url()?>" class="logo logo-admin"><img src="<?php echo base_url('images/registration_images/reg_image_two.png')?>" height="70" alt="logo" class="auth-logo"></a>
									</div><!--end auth-logo-box-->
									<div class="text-center auth-logo-text mb-5">
										<h4 class="mt-0 mb-3 mt-5">Who will be managing this Account?</h4>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-12">
												<label for="full_name">Full Name of the Individual</label>
												<div class="input-group">    
													<span class="auth-form-icon">
														<i class="dripicons-user"></i> 
													</span>   
													<input type="text" name="full_name" class="form-control required" id="full_name">
												</div>    
											</div>      
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-8">
												<label for="email">Email<span id="emailRegistered" style="color:red;float:right;display:none;">&nbsp;&nbsp;&nbsp;email already registered...</span></label>
												<div class="input-group mb-3">
													<span class="auth-form-icon">
														<i class="dripicons-mail"></i> 
													</span>      
												<input type="email" name="email" class="form-control required" id="email" >
												</div>
											</div>    
											<div class="col-md-4">
												<label for="title">Title/Role</label>
												<div class="input-group mb-3">
													<span class="auth-form-icon">
														<i class="dripicons-user"></i> 
													</span>                
													<input type="text"  name="title" class="form-control" id="title" >
												</div>
											</div>
										</div>                                    
									</div><!--end form-group--> 
									<div class="form-group">
										<div class="row">
											<div class="col-md-4">
												<label for="ccode1">Country Code</label>
												<div class="input-group mb-3">    
													<span class="auth-form-icon">
														<i class="dripicons-tag"></i> 
													</span>
													<select id="ccode1" name="ccode1" class="select2 form-control mb-3 custom-select required" style="width: 100%; height:36px;">   
														<option value=" ">Select Code</option>
													</select>
												</div>    
											</div>  
											<div class="col-md-8"> 
												<label for="cell1">Cell(Mobile) Number<span id="numberRegistered" style="color:red;float:right;display:none;">&nbsp;&nbsp;&nbsp;number already registered...</span></label>                                            
												<div class="input-group mb-3"> 
													<span class="auth-form-icon">
														<i class="dripicons-phone"></i> 
													</span>                                                       
													<input type="text" inputmode="numeric" name="cell1" class="form-control required" id="cell1" placeholder="(555) 555-5555">
												</div>  
											</div>                             
										</div>
									</div><!--end form-group-->
									<div class="form-group">
										<div class="row">
											<div class="col-md-6">
												<label for="password">Password</label>
												<div class="input-group mb-3">
													<span class="auth-form-icon">
														<!-- <i class="dripicons-mail"></i>  -->
													</span>                                                                                                              
													<input type="password" class="form-control required" id="password" placeholder="">
												</div>           
											</div>
											<div class="col-md-6">
												<label for="passwordConfirm">Re-enter Password</label>
												<div class="input-group mb-3">
													<span class="auth-form-icon">
														<!-- <i class="dripicons-mail"></i>  -->
													</span>                                                                                                              
													<input type="password" id="passwordConfirm" class="form-control  required" placeholder="">
												</div>               
											</div>
										</div>
									</div>
									<div class="form-group" id="wrongPassError" style="display:none;">
										<div class="row">
											<div class="col-md-12">
												<p style="color:red;text-align:center;">*Password must be at least 8 characters and include a mumber</p>
											</div>
										</div>
									</div>
									<div class="form-group" id="passMatchError" style="display:none;">
										<div class="row">
											<div class="col-md-12">
												<p style="color:red; text-align:center;">*Passwords Do Not Match</p>
											</div>
										</div>
									</div>
									<div class="form-group mb-0 row">
										<div class="col-12 mt-2" id="selector">
											<div class="row">
												<div class="col-4">
													<button type="button" class="btn-block btn btn-outline-light waves-effect waves-light" id="prevBtn2" onclick="nextPrev(-1)">Go Back</button>
												</div>
												<div class="col-8 next">
													<button type="button" class="btn btn-primary btn-block enw" id="nextBtn2" onclick="nextPrev(1)">Next</button>
												</div>
											</div>
										</div>
									</div>
								</div><!--end tab --> 
								<div class="tab" id="important">
									<div class="auth-logo-box">
										<a href="<?php echo base_url()?>" class="logo logo-admin"><img src="<?php echo base_url('images/registration_images/reg_image_three.png')?>" height="70" alt="logo" class="auth-logo"></a>
									</div><!--end auth-logo-box-->
									<div class="form-group">
										<div class="text-center auth-logo-text">
											<h4 class="mt-0 mb-5 mt-5" style="color:red;">IMPORTANT</h4>
											<p class="text-muted mb-3">The login process will require that you enter your
												Email.Password every time you try to use the application.In addition, we will send 
												you a SMS with 8-digits code to verify that it is you.
											</p>  
											<p class="text-muted mb-5">Please provide the mobile(cell) number that you
												would like to associate with your account. This number must be able to receive
												text messages(SMS).
											</p>
										</div> <!--end auth-logo-text-->
										<div class="row">
											<div class="col-md-4">
												<label for="ccode2">Country Code</label>
												<div class="input-group mb-3">    
													<span class="auth-form-icon">
														<i class="dripicons-tag"></i> 
													</span>   
													<select id="ccode2" name="ccode2" class="select2 form-control mb-3 custom-select required" style="width: 100%; height:36px;">   
														<option value=" ">Select Code</option>
													</select>
												</div>    
											</div>  
											<div class="col-md-8">
												<label for="cell2">Cell(Mobile) Number<span id="numberRegistered2" style="color:red;float:right;display:none;">&nbsp;&nbsp;&nbsp;number already registered...</span></label>                                            
												<div class="input-group mb-3"> 
													<span class="auth-form-icon">
														<i class="dripicons-phone"></i> 
													</span>                                                       
													<input type="text" inputmode="numeric" name="cell2" class="form-control required" id="cell2" placeholder="(555) 555-5555" >
												</div>   
											</div>       
										</div>
									</div>
									<div class="form-group mb-0 row">
										<div class="col-12 mt-2" id="selector">
											<div class="col-8 next" style="margin:auto;margin-bottom:20px;">
												<button type="button" class="btn btn-primary btn-block enw" id="sendSMSBtn" onclick="nextPrev(1)">Send SMS</button>
											</div>
											<div class="col-4" style="margin:auto;">
												<button type="button" class="btn-block btn btn-outline-light waves-effect waves-light" id="prevBtn3" onclick="nextPrev(-1)">Go Back</button>
											</div>
										</div>
									</div> 
								</div>
								<div class="tab" id="matchcode">
									<div class="auth-logo-box">
										<a href="<?php echo base_url()?>" class="logo logo-admin"><img src="<?php echo base_url('images/registration_images/reg_image_four.png')?>" height="70" alt="logo" class="auth-logo"></a>
									</div><!--end auth-logo-box-->
									<div class="text-center auth-logo-text mb-3">
										<h4 class="mt-0 mb-5 mt-5">Enter Code</h4>
										<p class="text-muted mb-3">You should receive a text messages(SMS)
											shortly. Enter the code received below to verify
											this cell phone number provided.
										</p>
										<p style="color:red;display:none;" id="verifyExpired">
											You ran out of time.Click 'Resend' to receive a new code.
										</p>  
									</div> <!--end auth-logo-text-->
									<div class="form-group">
										<div class="input-group mb-3 inline-r-45 centering">
											<input type="text" class="form-control verifyCode required" id="verifyCode" placeholder="00000000">
										</div>                                    
									</div><!--end form-group-->
									<div class="form-group">
										<p class="inline-r-30 verifyTimer">
											<span id="timer" style="font-size:26px;"></span><br>
										</p>                            
									</div><!--end form-group-->
									<div class="form-group mb-0 row">
										<div class="col-12 mt-2" id="selector">
											<div class="col-8 next" style="margin:auto;margin-bottom:20px;">
												<button type="button" class="btn btn-primary btn-block enw" id="verifyCodeBtn" onclick="nextPrev(1)">Complete!</button>
											</div>
											<div class="col-8" style="margin:auto;">
												<div class="row">
													<div class="col-6">
														<button type="button" class="btn-block btn btn-outline-light waves-effect waves-light" id="prevBtn4" onclick="nextPrev(-1)">Go Back</button>
													</div>
													<div class="col-6">
														<button type="button" class="btn-block btn btn-outline-light waves-effect waves-light" id="resendSMSBtn">Resend</button>
													</div>
												</div>
											</div>
										</div>
									</div> 
								</div>
								<div class="tab" id="congratulation">
									<div class="auth-logo-box">
										<a href="<?php echo base_url()?>" class="logo logo-admin"><img src="<?php echo base_url('images/registration_images/reg_image_five.png')?>" height="70" alt="logo" class="auth-logo"></a>
									</div><!--end auth-logo-box-->
									<div class="text-center auth-logo-text">
										<h4 class="mt-0 mb-5 mt-5" style="color:green">Congratulations!</h4>
										<p class="text-muted mb-0" style="width:80%;margin:auto;">You have successfully registered and 
											are now ready to get started.
										</p>  
									</div> <!--end auth-logo-text-->  
									<div class="form-group mb-0 row goodJob">
										<div class="col-12 mt-2">
											<a href="<?php echo base_url('admin/signin')?>">
											<button type="button" class="btn btn-primary btn-round btn-block waves-effect waves-light" style="height:80px;padding:20px;border-radius:40px;">Go To Admin Page</button></a>
										</div><!--end col--> 
									</div> <!--end form-group-->
									<div class="form-group mb-0 row goodJob">
										<div class="col-12 mt-2">
											<a href="<?php echo base_url('app/signin')?>">
											<button type="button" class="btn btn-primary btn-round btn-block waves-effect waves-light" style="height:80px;padding:20px;border-radius:40px;">Launch Web Application</button></a>
										</div><!--end col--> 
									</div> <!--end form-group-->
									<div class="text-center">
										<a style="color:green;" href="">See our Free Webinar</a>
									</div>                             		
								</div>
								<!-- Circles which indicates the steps of the form: -->
								<div style="text-align:center;margin-top:40px;">
									<span class="step"></span>
									<span class="step"></span>
									<span class="step"></span>
									<span class="step"></span>
									<span class="step"></span>
								</div>
							</form><!--end form-->
							<input type="hidden" value="0" id="matchCodeConfirm" />
						</div><!--end /div-->
					</div><!--end card-body-->
				</div><!--end card-->
			</div><!--end auth-card-->
		</div><!--end col-->           
	</div><!--end row-->
	<!-- End Log In page -->
	<!-- jQuery  -->
	<!-- <script src="./assets/js/jquery.min.js"></script>
	<script src="./assets/js/bootstrap.bundle.min.js"></script>
	<script src="./assets/js/metisMenu.min.js"></script>
	<script src="./assets/js/waves.min.js"></script>
	<script src="./assets/js/jquery.slimscroll.min.js"></script>
	<script src="../assets/js/jquery.min.js"></script>
	<!-- Plugins js -->
	<!-- <script src="./assets/plugins/moment/moment.js"></script>
	<script src="./assets/plugins/daterangepicker/daterangepicker.js"></script>
	<script src="./assets/plugins/select2/select2.min.js"></script>
	<script src="./assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
	<script src="./assets/plugins/timepicker/bootstrap-material-datetimepicker.js"></script>
	<script src="./assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
	<script src="./assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>
	<script src="./assets/pages/jquery.forms-advanced.js"></script>
	<script src="./assets/js/app.js"></script>
	<script src="./assets/js/intlTelInput.js"></script> --> -->
	<script>
		var currentTab = 0; // Current tab is set to be the first tab (0)
		var countryNames={ "US": "United States", "BD": "Bangladesh", "BE": "Belgium", "BF": "Burkina Faso", "BG": "Bulgaria", "BA": "Bosnia and Herzegovina", "BB": "Barbados", "WF": "Wallis and Futuna", "BL": "Saint Barthelemy", "BM": "Bermuda", "BN": "Brunei", "BO": "Bolivia", "BH": "Bahrain", "BI": "Burundi", "BJ": "Benin", "BT": "Bhutan", "JM": "Jamaica", "BV": "Bouvet Island", "BW": "Botswana", "WS": "Samoa", "BQ": "Bonaire, Saint Eustatius and Saba ", "BR": "Brazil", "BS": "Bahamas", "JE": "Jersey", "BY": "Belarus", "BZ": "Belize", "RU": "Russia", "RW": "Rwanda", "RS": "Serbia", "TL": "East Timor", "RE": "Reunion", "TM": "Turkmenistan", "TJ": "Tajikistan", "RO": "Romania", "TK": "Tokelau", "GW": "Guinea-Bissau", "GU": "Guam", "GT": "Guatemala", "GS": "South Georgia and the South Sandwich Islands", "GR": "Greece", "GQ": "Equatorial Guinea", "GP": "Guadeloupe", "JP": "Japan", "GY": "Guyana", "GG": "Guernsey", "GF": "French Guiana", "GE": "Georgia", "GD": "Grenada", "GB": "United Kingdom", "GA": "Gabon", "SV": "El Salvador", "GN": "Guinea", "GM": "Gambia", "GL": "Greenland", "GI": "Gibraltar", "GH": "Ghana", "OM": "Oman", "TN": "Tunisia", "JO": "Jordan", "HR": "Croatia", "HT": "Haiti", "HU": "Hungary", "HK": "Hong Kong", "HN": "Honduras", "HM": "Heard Island and McDonald Islands", "VE": "Venezuela", "PR": "Puerto Rico", "PS": "Palestinian Territory", "PW": "Palau", "PT": "Portugal", "SJ": "Svalbard and Jan Mayen", "PY": "Paraguay", "IQ": "Iraq", "PA": "Panama", "PF": "French Polynesia", "PG": "Papua New Guinea", "PE": "Peru", "PK": "Pakistan", "PH": "Philippines", "PN": "Pitcairn", "PL": "Poland", "PM": "Saint Pierre and Miquelon", "ZM": "Zambia", "EH": "Western Sahara", "EE": "Estonia", "EG": "Egypt", "ZA": "South Africa", "EC": "Ecuador", "IT": "Italy", "VN": "Vietnam", "SB": "Solomon Islands", "ET": "Ethiopia", "SO": "Somalia", "ZW": "Zimbabwe", "SA": "Saudi Arabia", "ES": "Spain", "ER": "Eritrea", "ME": "Montenegro", "MD": "Moldova", "MG": "Madagascar", "MF": "Saint Martin", "MA": "Morocco", "MC": "Monaco", "UZ": "Uzbekistan", "MM": "Myanmar", "ML": "Mali", "MO": "Macao", "MN": "Mongolia", "MH": "Marshall Islands", "MK": "Macedonia", "MU": "Mauritius", "MT": "Malta", "MW": "Malawi", "MV": "Maldives", "MQ": "Martinique", "MP": "Northern Mariana Islands", "MS": "Montserrat", "MR": "Mauritania", "IM": "Isle of Man", "UG": "Uganda", "TZ": "Tanzania", "MY": "Malaysia", "MX": "Mexico", "IL": "Israel", "FR": "France", "IO": "British Indian Ocean Territory", "SH": "Saint Helena", "FI": "Finland", "FJ": "Fiji", "FK": "Falkland Islands", "FM": "Micronesia", "FO": "Faroe Islands", "NI": "Nicaragua", "NL": "Netherlands", "NO": "Norway", "NA": "Namibia", "VU": "Vanuatu", "NC": "New Caledonia", "NE": "Niger", "NF": "Norfolk Island", "NG": "Nigeria", "NZ": "New Zealand", "NP": "Nepal", "NR": "Nauru", "NU": "Niue", "CK": "Cook Islands", "XK": "Kosovo", "CI": "Ivory Coast", "CH": "Switzerland", "CO": "Colombia", "CN": "China", "CM": "Cameroon", "CL": "Chile", "CC": "Cocos Islands", "CA": "Canada", "CG": "Republic of the Congo", "CF": "Central African Republic", "CD": "Democratic Republic of the Congo", "CZ": "Czech Republic", "CY": "Cyprus", "CX": "Christmas Island", "CR": "Costa Rica", "CW": "Curacao", "CV": "Cape Verde", "CU": "Cuba", "SZ": "Swaziland", "SY": "Syria", "SX": "Sint Maarten", "KG": "Kyrgyzstan", "KE": "Kenya", "SS": "South Sudan", "SR": "Suriname", "KI": "Kiribati", "KH": "Cambodia", "KN": "Saint Kitts and Nevis", "KM": "Comoros", "ST": "Sao Tome and Principe", "SK": "Slovakia", "KR": "South Korea", "SI": "Slovenia", "KP": "North Korea", "KW": "Kuwait", "SN": "Senegal", "SM": "San Marino", "SL": "Sierra Leone", "SC": "Seychelles", "KZ": "Kazakhstan", "KY": "Cayman Islands", "SG": "Singapore", "SE": "Sweden", "SD": "Sudan", "DO": "Dominican Republic", "DM": "Dominica", "DJ": "Djibouti", "DK": "Denmark", "VG": "British Virgin Islands", "DE": "Germany", "YE": "Yemen", "DZ": "Algeria","UY": "Uruguay", "YT": "Mayotte", "UM": "United States Minor Outlying Islands", "LB": "Lebanon", "LC": "Saint Lucia", "LA": "Laos", "TV": "Tuvalu", "TW": "Taiwan", "TT": "Trinidad and Tobago", "TR": "Turkey", "LK": "Sri Lanka", "LI": "Liechtenstein", "LV": "Latvia", "TO": "Tonga", "LT": "Lithuania", "LU": "Luxembourg", "LR": "Liberia", "LS": "Lesotho", "TH": "Thailand", "TF": "French Southern Territories", "TG": "Togo", "TD": "Chad", "TC": "Turks and Caicos Islands", "LY": "Libya", "VA": "Vatican", "VC": "Saint Vincent and the Grenadines", "AE": "United Arab Emirates", "AD": "Andorra", "AG": "Antigua and Barbuda", "AF": "Afghanistan", "AI": "Anguilla", "VI": "U.S. Virgin Islands", "IS": "Iceland", "IR": "Iran", "AM": "Armenia", "AL": "Albania", "AO": "Angola", "AQ": "Antarctica", "AS": "American Samoa", "AR": "Argentina", "AU": "Australia", "AT": "Austria", "AW": "Aruba", "IN": "India", "AX": "Aland Islands", "AZ": "Azerbaijan", "IE": "Ireland", "ID": "Indonesia", "UA": "Ukraine", "QA": "Qatar", "MZ": "Mozambique"};
		var countryPhoneCodes={ "US": "1", "BD": "880", "BE": "32", "BF": "226", "BG": "359", "BA": "387", "BB": "1246", "WF": "681", "BL": "590", "BM": "1441", "BN": "673", "BO": "591", "BH": "973", "BI": "257", "BJ": "229", "BT": "975", "JM": "1876", "BV": "", "BW": "267", "WS": "685", "BQ": "599", "BR": "55", "BS": "1242", "JE": "441534", "BY": "375", "BZ": "501", "RU": "7", "RW": "250", "RS": "381", "TL": "670", "RE": "262", "TM": "993", "TJ": "992", "RO": "40", "TK": "690", "GW": "245", "GU": "1671", "GT": "502", "GS": "", "GR": "30", "GQ": "240", "GP": "590", "JP": "81", "GY": "592", "GG": "441481", "GF": "594", "GE": "995", "GD": "1473", "GB": "44", "GA": "241", "SV": "503", "GN": "224", "GM": "220", "GL": "299", "GI": "350", "GH": "233", "OM": "968", "TN": "216", "JO": "962", "HR": "385", "HT": "509", "HU": "36", "HK": "852", "HN": "504", "HM": " ", "VE": "58", "PR": "1787 and 1939", "PS": "970", "PW": "680", "PT": "351", "SJ": "47", "PY": "595", "IQ": "964", "PA": "507", "PF": "689", "PG": "675", "PE": "51", "PK": "92", "PH": "63", "PN": "870", "PL": "48", "PM": "508", "ZM": "260", "EH": "212", "EE": "372", "EG": "20", "ZA": "27", "EC": "593", "IT": "39", "VN": "84", "SB": "677", "ET": "251", "SO": "252", "ZW": "263", "SA": "966", "ES": "34", "ER": "291", "ME": "382", "MD": "373", "MG": "261", "MF": "590", "MA": "212", "MC": "377", "UZ": "998", "MM": "95", "ML": "223", "MO": "853", "MN": "976", "MH": "692", "MK": "389", "MU": "230", "MT": "356", "MW": "265", "MV": "960", "MQ": "596", "MP": "1670", "MS": "1664", "MR": "222", "IM": "441624", "UG": "256", "TZ": "255", "MY": "60", "MX": "52", "IL": "972", "FR": "33", "IO": "246", "SH": "290", "FI": "358", "FJ": "679", "FK": "500", "FM": "691", "FO": "298", "NI": "505", "NL": "31", "NO": "47", "NA": "264", "VU": "678", "NC": "687", "NE": "227", "NF": "672", "NG": "234", "NZ": "64", "NP": "977", "NR": "674", "NU": "683", "CK": "682", "XK": "", "CI": "225", "CH": "41", "CO": "57", "CN": "86", "CM": "237", "CL": "56", "CC": "61", "CA": "1", "CG": "242", "CF": "236", "CD": "243", "CZ": "420", "CY": "357", "CX": "61", "CR": "506", "CW": "599", "CV": "238", "CU": "53", "SZ": "268", "SY": "963", "SX": "599", "KG": "996", "KE": "254", "SS": "211", "SR": "597", "KI": "686", "KH": "855", "KN": "1869", "KM": "269", "ST": "239", "SK": "421", "KR": "82", "SI": "386", "KP": "850", "KW": "965", "SN": "221", "SM": "378", "SL": "232", "SC": "248", "KZ": "7", "KY": "1345", "SG": "65", "SE": "46", "SD": "249", "DO": "1809 and 1829", "DM": "1767", "DJ": "253", "DK": "45", "VG": "1284", "DE": "49", "YE": "967", "DZ": "213","UY": "598", "YT": "262", "UM": "1", "LB": "961", "LC": "1758", "LA": "856", "TV": "688", "TW": "886", "TT": "1868", "TR": "90", "LK": "94", "LI": "423", "LV": "371", "TO": "676", "LT": "370", "LU": "352", "LR": "231", "LS": "266", "TH": "66", "TF": "", "TG": "228", "TD": "235", "TC": "1649", "LY": "218", "VA": "379", "VC": "1784", "AE": "971", "AD": "376", "AG": "1268", "AF": "93", "AI": "1264", "VI": "1340", "IS": "354", "IR": "98", "AM": "374", "AL": "355", "AO": "244", "AQ": "", "AS": "1684", "AR": "54", "AU": "61", "AT": "43", "AW": "297", "IN": "91", "AX": "35818", "AZ": "994", "IE": "353", "ID": "62", "UA": "380", "QA": "974", "MZ": "258"};
		var inverseCountryNames = {};
		var inverseCountryNamesLower={};
		var flagName = {};
		var verifyCode='';
		var matchcode=0;//check if ajax call for verify code is succeed.
		var emailRegistered=false,cell1Registered=false, cell2Registered=false;
		for(i in countryNames) {
			inverseCountryNames[countryNames[i]] = i;
			inverseCountryNamesLower[countryNames[i]]=i.toLowerCase();

		}
		function showTab(n) {
			// This function will display the specified tab of the form...
			var x = document.getElementsByClassName("tab");
			x[n].style.display = "block";
			fixStepIndicator(n);
		}
        function nextPrev(n) {
			$(".required").removeClass("invalid");
			$(".required").removeClass("validable");
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
			// get the current tab id:
            var id = x[currentTab].id;
			//when inputed verify code doesn't match, make it red;
			// if(matchcode == 0){
				// if(id=='tab2' && emaiRegistered) return false;
				// Exit the function if any field in the current tab is invalid:
				if (n == 1 && !validateForm()) {
					// if($('#verifyCode').val()!='' && id=='matchcode') {
					// 	$('#verifyCode').removeClass('validable');
					// 	$('#verifyCode').addClass('invalid');
					// }
					return false;
				}
				
				//post data to controller
				if (id == 'important' && n==1) {
					var cell1=$("#cell1").val().replace(/[^0-9]/g,"");
					var cell2=$("#cell2").val().replace(/[^0-9]/g,"");
					$.ajax({
					type: "POST",
					url: "<?php echo base_url();?>users/register", 
					data: {org_name: $("#org_name").val(),
							org_add: $("#org_add").val(),
							org_unit: $("#org_unit").val(),
							org_city: $("#org_city").val(),
							org_state: $("#org_state").val(),
							org_country: $("#org_country").val(),
							emp_name: $("#full_name").val(),
							emp_title: $("#title").val(),
							emp_email: $("#email").val(),
							emp_cell1: cell1,
							emp_cell2: cell2,
							emp_ccode1: $("#ccode1").val(),
							emp_ccode2: $("#ccode2").val(),
							emp_password:$("#password").val()
						},
						dataType: "json",  
						cache:false,
						success: function(data){
							// console.log(data);
							verifyCode=data;
							startTimer();//start Timer to calculate how long it will take to enter phone verify code 
						},
						error:function(data){
							//action when verifycode is not sent to phone
						}
					});
				}
				
			// }

			//hide current display
			x[currentTab].style.display = "none";
			// Increase or decrease the current tab by 1:
			currentTab = currentTab + n;
			// if you have reached the end of the form...
			if (currentTab >= x.length) {
				// ... the form gets submitted:
				document.getElementById("regForm").submit();
				return false;
			}
			//Otherwise, display the next or prev tab:
			showTab(currentTab);
		}
		//check if the form is valid
        function validateForm() {
          // This function deals with validation of the form fields
			var x, y, i, valid = true;
			x = document.getElementsByClassName("tab");
			y = x[currentTab].getElementsByClassName("required");
			// A loop that checks every input field in the current tab:
			// here check common validay for all tabs
			for (i = 0; i < y.length; i++) {
			// If a field is empty...
				if (y[i].value == "") {
					// add an "invalid" class to the field:
					y[i].className += " invalid";
					// and set the current valid status to false
					valid = false;  
				}
				else{
					y[i].className += " validable";
				}
			}
			var id = x[currentTab].id;
			// If the valid status is true, mark the step as finished and valid:
			//check validay for step1
			if (id == 'tab1') {
				var country = $('#org_country').val();
				var state = $('#org_state').val();
				$('#select2-org_country-container').parent().addClass('validable');
				if(country == 'United States'){                
					if (state != ' ') {
						// valid = true;
						$('#select2-org_state-container').parent().addClass('validable');
						$('#select2-org_state-container').parent().removeClass('invalid');
					}
					else{
						$('#select2-org_state-container').parent().addClass('invalid');
						$('#select2-org_state-container').parent().removeClass('validable');
						valid=false;
					}                  
				}
				if($('#customSwitchPrimary').is(":checked")){                
					//   valid = true;
				}
				else{
					valid = false;                
				}
			}
			//check validaty for step2
			if (id == 'tab2') {
				var ccode1 = $('#ccode1').val();
				if (ccode1 != ' ') {
					// valid = true;
					$('#select2-ccode1-container').parent().addClass('validable');
					$('#select2-ccode1-container').parent().removeClass('invalid');
				}
				else{
					$('#select2-ccode1-container').parent().addClass('invalid');
					$('#select2-ccode1-container').parent().removeClass('validable');
					valid=false;
				} 
				//check email is avaiable                 
				function validateEmail2($email) {
					if($email=="" || emailRegistered) return false;
						var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
						return emailReg.test( $email );
				}
				var emailaddress = $('#email').val();
				if( !validateEmail2(emailaddress)) { $('#email').addClass('invalid');$('#email').removeClass('validable');valid=false;}
				else{  $('#email').removeClass('invalid');$('#email').addClass('validable');}
				//check cel11 is avaiable
				
				if(cell1Registered){
					$('#cell1').addClass('invalid');$('#cell1').removeClass('validable');
					valid=false;
				}
				else{
					if($('#ccode1').val()=='1'){
						if($('#cell1').val().length!=14){
							$('#cell1').addClass('invalid');$('#cell1').removeClass('validable');
							valid=false;
						}
						else{
							$('#cell1').addClass('validable');$('#cell1').removeClass('invalid');
						}
					}
					else{
						if($('#cell1').val().length!=7){
							$('#cell1').addClass('invalid');$('#cell1').removeClass('validable');
							valid=false;
						}
						else{
							$('#cell1').addClass('validable');$('#cell1').removeClass('invalid');
						}
					}
				}
				// else{
				// 	$('#cell1').addClass('validable');$('#cell1').removeClass('invalid');
				// }
				//check password is valid
				function validatePassword($password){
					var paswd=  /^(?=.*[0-9])[a-zA-Z0-9!@#$%^&*]{8,100}$/;
					return paswd.test($password);
				}
				var password=$('#password').val();
				var passwordConfirm=$('#passwordConfirm').val();
				//in case of password and confirm do not match
				if(password!=passwordConfirm){
					$('#passwordConfirm').addClass('invalid');
					$('#passwordConfirm').removeClass('validable');
					$('#passMatchError').css('display','block');
					$('#wrongPassError').css('display','none');
					valid=false;
				}
				//in case of password rule is correct
				else if(!validatePassword(password)){
					$('#password').addClass('invalid');
					$('#passwordConfirm').addClass('invalid');
					$('#password').removeClass('validable');
					$('#passwordConfirm').removeClass('validable');
					$('#passMatchError').css('display','none');
					$('#wrongPassError').css('display','block');
					valid=false;
				}
				//in case of password is valid
				else{
					$('#passwordConfirm').removeClass('invalid');
					$('#password').removeClass('invalid');
					$('#password').addClass('validable');
					$('#passwordConfirm').addClass('validable');
					$('#wrongPassError').css('display','none');
					$('#passMatchError').css('display','none');
				}
			}
			//check validaty for step3
			if(id=='important'){
				var ccode2 = $('#ccode2').val();
				if (ccode2 != ' ') {
					// valid = true;
					$('#select2-ccode2-container').parent().removeClass('invalid');
					$('#select2-ccode2-container').parent().addClass('validable');
				}else{
					$('#select2-ccode2-container').parent().addClass('invalid');
					$('#select2-ccode2-container').parent().removeClass('validable');
				//   return false;
					valid=false;
				} 
				if(cell2Registered){
					$('#cell2').addClass('invalid');$('#cell2').removeClass('validable');
					valid=false;
				}
				else{
					if($('#ccode2').val()=='1'){
						if($('#cell2').val().length!=14){
							$('#cell2').addClass('invalid');$('#cell2').removeClass('validable');
							valid=false;
						}
						else{
							$('#cell2').addClass('validable');$('#cell2').removeClass('invalid');
						}
					}
					else{
						if($('#cell2').val().length!=7){
							$('#cell2').addClass('invalid');$('#cell2').removeClass('validable');
							valid=false;
						}
						else{
							$('#cell2').addClass('validable');$('#cell2').removeClass('invalid');
						}
					}
				}
			}
			//check validity for step4
			if(id=='matchcode'){
				$verifyCode=$('#verifyCode').val();
				var cell2=$("#cell2").val().replace(/[^0-9]/g,"");
				if(verifyCode==$verifyCode && verifyCode!=''){
					$('#verifyCode').removeClass('invalid');
					$('#verifyCode').addClass('validable');
					$.ajax({
					type: "POST",
					url: "<?php echo base_url();?>users/update_cell_verified", 
					data: {
						emp_cell2: cell2,
						emp_ccode2: $("#ccode2").val()
						},
						dataType: "json",  
						cache:false,
						success: function(data){
							// console.log(data);
							
						}
					});
				}
				else{
					$('#verifyCode').removeClass('validable');
					$('#verifyCode').addClass('invalid');
					valid=false;	

				}
			}
			return valid;
        }
		//check if terms of agreement is checked;
		$('#customSwitchPrimary').on("change",function(){
			// if($(this.val())) $("#nextBtn").disabled=false;
			var isChecked = $('#customSwitchPrimary:checked').val()?true:false;
			if(isChecked){
				$("#nextBtn1").attr("disabled",false);
			}
			else{
				$("#nextBtn1").attr("disabled",true);
			} 
		});
		//fucntion for managing step indicator
		function fixStepIndicator(n) {
		  	// This function removes the "active" class of all steps...
			var i, x = document.getElementsByClassName("step");
			for (i = 0; i < x.length; i++) {
				x[i].className = x[i].className.replace(" active", "");
			}
			//... and adds the "active" class on the current step:
			x[n].className += " active";
		}
		var myTimer;
		var countDownDate;
		//function for counting 5 minutes of time to verify code
		function startTimer(){
			// document.getElementById('timer').innerHTML = 05 + ":" + 00;
			$('#verifyExpired').css('display','none');
			$('#verifyCodeBtn').attr('disabled',false);
			$('#resendSMSBtn').removeClass(' resend-active');
			var st=new Date().getTime();
			countDownDate=st+300000;
			myTimer = setInterval("showTime()", 1000);
		}
		//display remaing time for verify code
		function showTime() {
			var now = new Date().getTime();
			// Find the distance between now and the count down date
			var distance = countDownDate - now;
			// Time calculations for minutes and seconds
			var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
			var seconds = Math.floor((distance % (1000 * 60)) / 1000);
			// Output the result in an element with id="timer"
			//document.getElementById("timer").innerHTML ="0"+ minutes + "m " + seconds + "s ";
			$("#timer").html("0"+minutes+"<small>&nbsp;m&nbsp;</small>"+ seconds+"<small>&nbsp;s<small>");
			// If the count down is over, write EXPIRED
			if (distance < 0) {
				clearInterval(myTimer);
				$('#verifyExpired').css('display','block');
				$('#verifyCodeBtn').attr('disabled',true);
				$('#resendSMSBtn').addClass(' resend-active');
				document.getElementById("timer").innerHTML = "EXPIRED";
			}
		}
		//resend code function
		$("#resendSMSBtn").on("click",function(){
			var cell1=$("#cell1").val().replace(/[^0-9]/g,"");
			var cell2=$("#cell2").val().replace(/[^0-9]/g,"");
			$.ajax({
                  type: "POST",
                  url: "<?php echo base_url();?>users/register", 
                  data: {org_name: $("#org_name").val(),
				  		org_add: $("#org_add").val(),
						org_unit: $("#org_unit").val(),
						org_city: $("#org_city").val(),
						org_state: $("#org_state").val(),
						org_country: $("#org_country").val(),
						emp_name: $("#full_name").val(),
						emp_title: $("#title").val(),
						emp_email: $("#email").val(),
						emp_cell1: cell1,
						emp_cell2: cell2,
						emp_ccode1: $("#ccode1").val(),
						emp_ccode2: $("#ccode2").val(),
						emp_password:$("#password").val()
					},
					dataType: "json",  
					cache:false,
					success: function(data){
						verifyCode=data;
						startTimer();//start Timer to calculate how long it will take to enter phone verify code 
					},
					error: function(data){

					}
	        });
			// startTimer();
		})
		//check email and cell number registered already
		$('#email').keyup(function(){
			var email=$('#email').val();
			if(validateEmail(email)){
				$.ajax({
						type: "POST",
						url: "<?php echo base_url();?>users/get_email", 
						data: {
							emp_email: $("#email").val()
						},
						dataType: "json",  
						cache:false,
						success: function(data){
							emailRegistered=true;
							$('#emailRegistered').css('display','block');
							$('#email').addClass('invalid');
							$('#email').removeClass('validable');
						},
						error: function(data){
							emailRegistered=false;
							$('#emailRegistered').css('display','none');
							$('#email').addClass('validable');
							$('#email').removeClass('invalid');
						}
				});
			}
			else{
				emailRegistered=false;
				$('#emailRegistered').css('display','none');
				$('#email').removeClass('validable');
				$('#email').addClass('invalid');
				
			}
		});
		function validateEmail($email) {
			if($email=="") return false;
			var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
			return emailReg.test($email);
		}
		// $('#cell1').keyup(function(){
		// 	if($('#cell1').val()=='') return;
		// 	var cell1=$("#cell1").val().replace(/[^0-9]/g,"");
		// 	$.ajax({
        //           type: "POST",
        //           url: "<?php echo base_url();?>users/get_cell1", 
        //           data: {
		// 				emp_ccode1: $("#ccode1").val(),
		// 				emp_cell1: cell1
		// 			},
		// 			dataType: "json",  
		// 			cache:false,
		// 			success: function(data){
		// 				cell1Registered=true;
		// 				$('#numberRegistered').css('display','block');
		// 				$('#cell1').addClass('invalid');
		// 				$('#cell1').removeClass('validable');

		// 			},
		// 			error: function(data){
		// 				cell1Registered=false;
		// 				$('#numberRegistered').css('display','none');
		// 				$('#cell1').addClass('validable');
		// 				$('#cell1').removeClass('invalid');
		// 			}
	    //     });
		// });
		// $('#cell2').focusout(function(){
		// 	if($('#cell2').val()=='') return;
		// 	var cell2=$("#cell2").val().replace(/[^0-9]/g,"");
		// 	$.ajax({
        //           type: "POST",
        //           url: "<?php echo base_url();?>users/get_cell2", 
        //           data: {
		// 				emp_ccode2: $("#ccode2").val(),
		// 				emp_cell2: cell2
		// 			},
		// 			dataType: "json",  
		// 			cache:false,
		// 			success: function(data){
		// 				cell2Registered=true;
		// 				$('#numberRegistered2').css('display','block');
		// 				$('#cell2').addClass('invalid');
		// 				$('#cell2').removeClass('validable');

		// 			},
		// 			error: function(data){
		// 				cell2Registered=false;
		// 				$('#numberRegistered2').css('display','none');
		// 				$('#cell2').addClass('validable');
		// 				$('#cell2').removeClass('invalid');
		// 			}
	    //     });
		// });
		//check optional validaty
		$('#org_state').on("change", function(){
			if ($(this).val() != ' ') {$('#select2-org_state-container').parent().removeClass("invalid");$('#select2-org_state-container').parent().addClass("validable");}
			else{
				$('#select2-org_state-container').parent().removeClass("validable");$('#select2-org_state-container').parent().addClass("invalid");
			}
		});
		$('#ccode1').on("change", function(){
			$('#cell1').val('');
			if ($(this).val() != ' ') {$('#select2-ccode1-container').parent().removeClass("invalid");$('#select2-ccode1-container').parent().addClass("validable");}
			else{
				$('#select2-ccode1-container').parent().addClass("invalid");$('#select2-ccode1-container').parent().removeClass("validable");
			}
			if($(this).val()=='1'){$('#cell1').attr('placeholder','(555)-555-5555');}
			if($(this).val()!='1'){$('#cell1').attr('placeholder','5555555');}
		});
		$('#ccode2').on("change", function(){
			$('#cell2').val('');
			if ($(this).val() != ' ') {$('#select2-ccode2-container').parent().removeClass("invalid");$('#select2-ccode2-container').parent().addClass("validable");}
			else{
				$('#select2-ccode2-container').parent().addClass("invalid");$('#select2-ccode2-container').parent().removeClass("validable");
			}
			if($(this).val()=='1'){$('#cell2').attr('placeholder','(555)-555-5555');}
			if($(this).val()!='1'){$('#cell2').attr('placeholder','5555555');}
		});

		$('#org_country').on("change",function(){
			if($(this).val()!='United States'){
				$('#org_state').val(" ");
				$('#org_state').select2().trigger('change');
				$('#org_state').prop("disabled",true);
				$('#select2-org_state-container').parent().removeClass("invalid");
			}
			else{
				
				$('#org_state').prop("disabled",false);
			}
		});
		//make element valid wheh it has value
		$(".required").on("blur", function(){
			if($(this).val()==''){$(this).removeClass("invalid");$(this).removeClass("validable");}
			if($(this).attr('id')=='email') return false;
			if($(this).attr('id')=='cell1') return false;
			if($(this).attr('id')=='cell2') return false;

			if ($(this).val() != '') {$(this).removeClass("invalid");$(this).addClass("validable");}
			
        });
		//check cell validaty and cell style
		$("#cell1").on("keyup paste", function() {
			// Remove invalid chars from the input
			var validCell=false;
			if($('#ccode1').val()!="1"){
				var input = this.value.replace(/[^0-9]/g, "");
				$(this).val(input.substring(0,7));
				if($(this).val().length==7) validCell=true;
				// return;
			}
			else{
				var input = this.value.replace(/[^0-9\(\)\s\-]/g, "");
				var inputlen = input.length;
				// Get just the numbers in the input
				var numbers = this.value.replace(/\D/g,'');
				var numberslen = numbers.length;
				// Value to store the masked input
				var newval = "";

				// Loop through the existing numbers and apply the mask
				for(var i=0;i<numberslen;i++){
					if(i==0) newval="("+numbers[i];
					else if(i==3) newval+=") "+numbers[i];
					else if(i==6) newval+="-"+numbers[i];
					else newval+=numbers[i];
				}

				// Re-add the non-digit characters to the end of the input that the user entered and that match the mask.
				if(inputlen>=1&&numberslen==0&&input[0]=="(") newval="(";
				else if(inputlen>=6&&numberslen==3&&input[4]==")"&&input[5]==" ") newval+=") ";
				else if(inputlen>=5&&numberslen==3&&input[4]==")") newval+=")";
				else if(inputlen>=6&&numberslen==3&&input[5]==" ") newval+=" ";
				else if(inputlen>=10&&numberslen==6&&input[9]=="-") newval+="-";

				$(this).val(newval.substring(0,14));
				if($(this).val().length==14) validCell=true;
			}
			if(validCell){
				var cell1=$("#cell1").val().replace(/[^0-9]/g,"");
				$.ajax({
					type: "POST",
					url: "<?php echo base_url();?>users/get_cell1", 
					data: {
							emp_ccode1: $("#ccode1").val(),
							emp_cell1: cell1
						},
						dataType: "json",  
						cache:false,
						success: function(data){
							cell1Registered=true;
							$('#numberRegistered').css('display','block');
							$('#cell1').addClass('invalid');
							$('#cell1').removeClass('validable');

						},
						error: function(data){
							cell1Registered=false;
							$('#numberRegistered').css('display','none');
							$('#cell1').addClass('validable');
							$('#cell1').removeClass('invalid');
						}
				});
			}
			else{
				cell1Registered=false;
				$('#numberRegistered').css('display','none');
				$('#cell1').addClass('invalid');
				$('#cell1').removeClass('validable');
			}
			
        });
		$("#cell2").on("keyup paste", function() {
			var validCell=false;
			// Remove invalid chars from the input
			if($('#ccode2').val()!="1"){
				var input = this.value.replace(/[^0-9]/g, "");
				$(this).val(input.substring(0,7));
				if($(this).val().length==7) validCell=true;
				return;
			}
			else{
			// Remove invalid chars from the input
				var input = this.value.replace(/[^0-9\(\)\s\-]/g, "");
				var inputlen = input.length;
				// Get just the numbers in the input
				var numbers = this.value.replace(/\D/g,'');
				var numberslen = numbers.length;
				// Value to store the masked input
				var newval = "";

				// Loop through the existing numbers and apply the mask
				for(var i=0;i<numberslen;i++){
					if(i==0) newval="("+numbers[i];
					else if(i==3) newval+=") "+numbers[i];
					else if(i==6) newval+="-"+numbers[i];
					else newval+=numbers[i];
				}

				// Re-add the non-digit characters to the end of the input that the user entered and that match the mask.
				if(inputlen>=1&&numberslen==0&&input[0]=="(") newval="(";
				else if(inputlen>=6&&numberslen==3&&input[4]==")"&&input[5]==" ") newval+=") ";
				else if(inputlen>=5&&numberslen==3&&input[4]==")") newval+=")";
				else if(inputlen>=6&&numberslen==3&&input[5]==" ") newval+=" ";
				else if(inputlen>=10&&numberslen==6&&input[9]=="-") newval+="-";

				$(this).val(newval.substring(0,14));
				if($(this).val().length==14) validCell=true;
			}
			if(validCell){
				var cell2=$("#cell2").val().replace(/[^0-9]/g,"");
				$.ajax({
					type: "POST",
					url: "<?php echo base_url();?>users/get_cell2", 
					data: {
							emp_ccode2: $("#ccode2").val(),
							emp_cell2: cell2
						},
						dataType: "json",  
						cache:false,
						success: function(data){
							cell2Registered=true;
							$('#numberRegistered2').css('display','block');
							$('#cell2').addClass('invalid');
							$('#cell2').removeClass('validable');

						},
						error: function(data){
							cell2Registered=false;
							$('#numberRegistered2').css('display','none');
							$('#cell2').addClass('validable');
							$('#cell2').removeClass('invalid');
						}
				});
			}
			else{
				cell2Registered=false;
				$('#numberRegistered2').css('display','none');
				$('#cell2').addClass('invalid');
				$('#cell2').removeClass('validable');
			}
		});                
  	</script>
    <script>
        $(document).ready(function(){
			//show first step when initial
			showTab(0);
			//here add options to select option
			$("#ccode1").select2({
				tags: true
			});
			$("#ccode2").select2({
				tags:true
			});
			$("#org_country").select2({
				tags: true
			});
			//country options add
			for(i in countryNames) {
				var country=i;
				if ($("#org_country").find("option[value='" + country + "']").length) {
					$("#org_country").val("United States").trigger("change");
				} 
				else {
					var countryNameOption = new Option(countryNames[i],countryNames[i], true, true);
					// Append it to the select
					$("#org_country").append(countryNameOption).trigger('change');
				} 
			}
			//set the intial state of country to united states
			$("#org_country").val("United States").trigger("change");
			//country phone codes option add
			for(i in countryPhoneCodes) {
				var country=i;
				if ($("#ccode1").find("option[value='" + country + "']").length) {
					$("#ccode1").val("1").trigger("change");
				} 
				else {
					var value=countryPhoneCodes[i];
					var text=countryNames[i]+'   +'+value;
					var countryCodeOption = new Option(text,value, true, true);
					// Append it to the select
					$("#ccode1").append(countryCodeOption).trigger('change');
				} 
			}
			//initial phone code to united states code
			$("#ccode1").val("1").trigger("change");
			//second conuntry phone codes for verify-step3
			for(i in countryPhoneCodes) {
				var country=i;
				if ($("#ccode2").find("option[value='" + country + "']").length) {
					$("#ccode2").val(" ").trigger("change");
				} 
				else {
					var value=countryPhoneCodes[i];
					var text=countryNames[i]+'   +'+value;
					var countryCodeOption = new Option(text,value, true, true);
					// Append it to the select
					$("#ccode2").append(countryCodeOption).trigger('change');
				} 
			}
			//set initial state
			$("#ccode2").val("1").trigger("change");
			//add flag image to country options		
			$("#org_country").select2({
				templateResult: formatCountry
			});
			function formatCountry(country){
				if (!country.id) { return country.text; }
				var $country = $(
				'<span > ' + country.text + '<img sytle="display: inline-block;" height="25" class="ml-2 float-right" src="https://www.countryflags.io/' +inverseCountryNamesLower[country.element.value]+ '/flat/64.png" /></span>'
				);
				return $country;
			}
		});  	
    </script>
  <!--   end code  vaib   -->
