<?php header( 'Access-Control-Allow-Origin: *'); ?>
<?php require( 'header.php'); ?>
<link href="assets/vendor.css" rel="stylesheet">
<link href="semantic.css" rel="stylesheet">
<script src="semantic.js"></script>

<style type="text/css">
	body {
		background-color: transparent;
	}
	.jf-form {
		margin-top: 28px;
	}
	.jf-option-box {
		display: none;
		margin-left: 8px;
	}
	.jf-hide {
		display: none;
	}
	.jf-disabled {
		background-color: #eeeeee;
		opacity: 0.6;
		pointer-events: none;
	}
	/* 
overwrite bootstrap default margin-left, because the <label> doesn't contain the <input> element.
*/
	
	.checkbox input[type=checkbox],
	.checkbox-inline input[type=checkbox],
	.radio input[type=radio],
	.radio-inline input[type=radio] {
		position: absolute;
		margin-top: 4px \9;
		margin-left: 0px;
	}
	div.form-group {
		padding: 8px 8px 4px 8px;
	}
	.mainDescription {
		margin-bottom: 10px;
	}
	.responsive img {
		width: 100%;
	}
	p.error,
	p.validation-error {
		padding: 5px;
	}
	p.error {
		margin-top: 10px;
		color: #a94442;
	}
	p.server-error {
		font-weight: bold;
	}
	div.thumbnail {
		position: relative;
		text-align: center;
	}
	div.thumbnail.selected p {
		color: #ffffff;
	}
	div.thumbnail .glyphicon-ok-circle {
		position: absolute;
		top: 16px;
		left: 16px;
		color: #ffffff;
		font-size: 32px;
	}
	.jf-copyright {
		color: #888888;
		display: inline-block;
		margin: 16px;
		display: none;
	}
	.form-group.required .control-label:after {
		color: #dd0000;
		content: "*";
		margin-left: 6px;
	}
	.submit .btn.disabled,
	.submit .btn[disabled] {
		background: transparent;
		opacity: 0.75;
	}
	/* for image option with span text */
	
	.checkbox label > span,
	.radio label > span {
		display: block;
	}
	.form-group.inline .control-label,
	.form-group.col-1 .control-label,
	.form-group.col-2 .control-label,
	.form-group.col-3 .control-label {
		display: block;
	}
	.form-group.inline div.radio,
	.form-group.inline div.checkbox {
		display: inline-block;
	}
	.form-group.col-1 div.radio,
	.form-group.col-1 div.checkbox {
		display: block;
	}
	.form-group.col-2 div.radio,
	.form-group.col-2 div.checkbox {
		display: inline-block;
		width: 48%;
	}
	.form-group.col-3 div.radio,
	.form-group.col-3 div.checkbox {
		display: inline-block;
		width: 30%;
	}
</style>

</head>

<body>    <div class="container jf-form">
		<fieldset>
			<div id="jqueryform-151158" autocomplete="on">
				<div class="form-group  inline">
					<label class="control-label">What best describes you?</label>

					<div class="radio">
						<input id="investor_entityname_angel" checked type="radio" name="investor_type" value="individual">
						<label for="investor_entityname_angel">
							Individual Investor
						</label>
					</div>

					<div class="radio">
						<input id="investor_entityname_vc" type="radio" name="investor_type" value="vcfirm">
						<label for="investor_entityname_vc">
							I invest on behalf of an accredited business / VC firm / Angel Fund / Incubator / Accelerator
						</label>
					</div>                </div>
				<div id="entity" style="display:none">
					<div id="investor_entityname_label" class="form-group required">
						<label class="control-label" for="entityname">Entity Name</label>

						<div class="input-group"><span class="input-group-addon left"><i class="glyphicon glyphicon-font"></i> </span>
							<input type="text" class="form-control" id="investor_entityname" value="" />
						</div>                    </div>                </div>
				<div id="investor_name_label" class="form-group required">
					<label class="control-label" for="investor_name">Name</label>

					<div class="input-group"><span class="input-group-addon left"><i class="glyphicon glyphicon-user"></i> </span>
						<input type="text" class="form-control" id="investor_name" value="" data-rule-required="true" />
					</div>                </div>

				<div id="investor_password_label" class="form-group required">
					<label  class="control-label" for="investor_password">Password</label>

					<div class="input-group"><span class="input-group-addon left"><i class="glyphicon glyphicon-lock"></i> </span>
						<input type="password" class="form-control" id="investor_password" value="" data-rule-required="true" />
					</div>                </div>
				<!--
<div class="form-group c1 required" data-cid="cpassword2">
  <label id="password2_label" class="control-label" for="cpassword2">Confirm Password</label>

<div class="input-group"><span class="input-group-addon left"><i class="glyphicon glyphicon-lock"></i> </span>
<input type="password" class="form-control" id="cpassword2" name="cpassword2" value=""    
	data-rule-required="true"  />
</div>

  
</div>

-->                <div id="investor_email_label" class="form-group required">
					<label class="control-label" for="investor_email">Email</label>

					<div class="input-group"><span class="input-group-addon left"><i class="glyphicon glyphicon-envelope"></i> </span>
						<input type="email" class="form-control" id="investor_email" value="" data-rule-email="true" data-rule-required="true" />
					</div>

				</div>

				<div class="form-group">
					<label class="control-label" for="investor_contact">Contact No.</label>

					<div class="input-group">
					<span class="input-group-addon left"><i class="glyphicon glyphicon-phone"></i> </span>
						<input type="text" class="form-control" id="investor_contact" value="" data-rule-required="true" />
					</div>                
				</div>                <!--
<div class="form-group c33 required" data-cid="c33">
  <label id="headline_label" class="control-label" for="c33">Professional Headline</label>

<div class="input-group"><span class="input-group-addon left"><i class="glyphicon glyphicon-header"></i> </span>
<input type="text" class="form-control" id="c33" name="c33" value=""  aria-describedby="c33-help-block"  
	data-rule-required="true"  />
</div>  <p id="c33-help-block" class="description">This will appear in your profile. For example - Student, Growth Hacker, Entrepreneur, etc.</p>
  
</div>

<div class="form-group c38 required" data-cid="c38">
  <label id="location_label" class="control-label" for="c38">Current Location</label>

<div class="input-group"><span class="input-group-addon left"><i class="fa fa-location-arrow"></i> </span>
<input type="text" class="form-control" id="c38" name="c38" value=""  aria-describedby="c38-help-block"  
	data-rule-required="true"  />
</div>  <p id="c38-help-block" class="description">This will appear in your profile. This information is useful to send personalized deals for you.</p>
  
</div>

<div class="form-group c39" data-cid="c39">
  <label id="currentorganization_label" class="control-label" for="c39">Current Organization</label>

<div class="input-group"><span class="input-group-addon left"><i class="fa fa-university"></i> </span>
<input type="text" class="form-control" id="c39" name="c39" value=""  aria-describedby="c39-help-block"  
	data-rule-required="true"  />
</div>
  
</div>

<div class="form-group c40" data-cid="c40">
  <label id="designation_label" class="control-label" for="c40">Designation</label>

<div class="input-group"><span class="input-group-addon left"><i class="fa fa-diamond"></i> </span>
<input type="text" class="form-control" id="c40" name="c40" value=""  aria-describedby="c40-help-block"  
	data-rule-required="true"  />
</div>  
</div>

-->                <div id="investor_industrypreferences_label" class="form-group required inline">
					<label class="control-label">Industry preferences</label>
					<select name="skills" multiple="" class="ui fluid dropdown" id="industrypreferencesdropdown">
  <option value="Enterprise Security">Enterprise Security</option>
<option value="Enterprise Storage">Enterprise Storage</option>
<option value="Enterprise Networking">Enterprise Networking</option>
<option value="IT Operations">IT Operations</option>
<option value="Data Center Infrastructure">Data Center Infrastructure</option>
<option value="Cloud Infrastructure">Cloud Infrastructure</option>
<option value="Big Data Infrastructure">Big Data Infrastructure</option>
<option value="Virtualization">Virtualization</option>
<option value="Docker Ecosystem">Docker Ecosystem</option>
<option value="API Management">API Management</option>
<option value="Coding Tools">Coding Tools</option>
<option value="Software Testing Tools">Software Testing Tools</option>
<option value="PaaS">PaaS</option>
<option value="DevOps">DevOps</option>
<option value="Open Source">Open Source</option>
<option value="Database Technology">Database Technology</option>
<option value="Enterprise Mobility">Enterprise Mobility</option>
<option value="Mobile DevTools">Mobile DevTools</option>
<option value="Mobile Payments">Mobile Payments</option>
<option value="Mobile Communication">Mobile Communication</option>
<option value="Mobile Advertising">Mobile Advertising</option>
<option value="Mobile-first Enterprise Apps">Mobile-first Enterprise Apps</option>
<option value="Mobile Gaming">Mobile Gaming</option>
<option value="Essential Mobile Apps">Essential Mobile Apps</option>
<option value="Mobile App Studios">Mobile App Studios</option>
<option value="Mobile App Distribution">Mobile App Distribution</option>
<option value="Mobile DevTools">Mobile DevTools</option>
<option value="AdTech">AdTech</option>
<option value="MarketingTech">MarketingTech</option>
<option value="Mobile Advertising">Mobile Advertising</option>
<option value="Tech for Traditional Advertising">Tech for Traditional Advertising</option>
<option value="Marketplaces">Marketplaces</option>
<option value="Online Travel">Online Travel</option>
<option value="Transport Tech">Transport Tech</option>
<option value="RealEstate Tech">RealEstate Tech</option>
<option value="FoodTech">FoodTech</option>
<option value="Online Grocery">Online Grocery</option>
<option value="Auto Tech">Auto Tech</option>
<option value="Online Rental">Online Rental</option>
<option value="Logistics Tech">Logistics Tech</option>
<option value="Mobile Communication">Mobile Communication</option>
<option value="Local Services">Local Services</option>
<option value="Music Tech">Music Tech</option>
<option value="Wedding Tech">Wedding Tech</option>
<option value="Matchmaking">Matchmaking</option>
<option value="Sports Tech">Sports Tech</option>
<option value="Online Gifting">Online Gifting</option>
<option value="Essential Mobile Apps">Essential Mobile Apps</option>
<option value="Mobile App Studios">Mobile App Studios</option>
<option value="Content Platforms">Content Platforms</option>
<option value="Social Platforms">Social Platforms</option>
<option value="Online Photos">Online Photos</option>
<option value="Food & Beverage - India">Food & Beverage - India</option>
<option value="Finance - India">Finance - India</option>
<option value="Healthcare - India">Healthcare - India</option>
<option value="Education - India">Education - India</option>
<option value="Consumer Goods - India">Consumer Goods - India</option>
<option value="Agriculture - India">Agriculture - India</option>
<option value="Media & Entertainment - India">Media & Entertainment - India</option>
<option value="Outsourcing - India">Outsourcing - India</option>
<option value="CleanTech - India">CleanTech - India</option>
<option value="Biotech - India">Biotech - India</option>
<option value="Logistics - India">Logistics - India</option>
<option value="Pharma - India">Pharma - India</option>
<option value="Payments">Payments</option>
<option value="Crowdfunding">Crowdfunding</option>
<option value="Mobile Payments">Mobile Payments</option>
<option value="Remittance">Remittance</option>
<option value="Bitcoin">Bitcoin</option>
<option value="Consumer Finance">Consumer Finance</option>
<option value="Alternative Lending">Alternative Lending</option>
<option value="Robo Advisors">Robo Advisors</option>
<option value="Banking Tech">Banking Tech</option>
<option value="Finance & Accounting">Finance & Accounting</option>
<option value="Investment Tech">Investment Tech</option>
<option value="Insurance Tech">Insurance Tech</option>
<option value="SaaS">SaaS</option>
<option value="Enterprise Collaboration">Enterprise Collaboration</option>
<option value="Sales Force Automation">Sales Force Automation</option>
<option value="MarketingTech">MarketingTech</option>
<option value="HRTech">HRTech</option>
<option value="Finance & Accounting">Finance & Accounting</option>
<option value="Business Intelligence">Business Intelligence</option>
<option value="Big Data Analytics">Big Data Analytics</option>
<option value="ERP">ERP</option>
<option value="Ecommerce Enablers">Ecommerce Enablers</option>
<option value="RetailTech">RetailTech</option>
<option value="Legal Tech">Legal Tech</option>
<option value="Customer Success Management">Customer Success Management</option>
<option value="SCM Software">SCM Software</option>
<option value="PR Tech">PR Tech</option>
<option value="Field Force Automation">Field Force Automation</option>
<option value="Event Management">Event Management</option>
<option value="Data as a Service">Data as a Service</option>
<option value="Customer Service Software">Customer Service Software</option>
<option value="Product Management Tools">Product Management Tools</option>
<option value="Mobile-first Enterprise Apps">Mobile-first Enterprise Apps</option>
<option value="Construction Tech">Construction Tech</option>
<option value="GovTech">GovTech</option>
<option value="GRC Software">GRC Software</option>
<option value="Loyalty Software">Loyalty Software</option>
<option value="Nonprofit Tech">Nonprofit Tech</option>
<option value="Manufacturing Tech">Manufacturing Tech</option>
<option value="Call Center Software">Call Center Software</option>
<option value="Aviation Software">Aviation Software</option>
<option value="Robotic Process Automation">Robotic Process Automation</option>
<option value="Mining Tech">Mining Tech</option>
<option value="Facility Management Tech">Facility Management Tech</option>
<option value="Consumer Digital - SEA">Consumer Digital - SEA</option>
<option value="Enterprise Tech - SEA">Enterprise Tech - SEA</option>
<option value="HealthTech - SEA">HealthTech - SEA</option>
<option value="FinTech - SEA">FinTech - SEA</option>
<option value="AdTech - SEA">AdTech - SEA</option>
<option value="EdTech - SEA">EdTech - SEA</option>
<option value="Technology - SEA">Technology - SEA</option>
<option value="Pre-K">Pre-K</option>
<option value="K-12">K-12</option>
<option value="Test Preparation">Test Preparation</option>
<option value="Higher Education">Higher Education</option>
<option value="Continued Learning">Continued Learning</option>
<option value="Corporate Learning">Corporate Learning</option>
<option value="Language Learning">Language Learning</option>
<option value="Education IT">Education IT</option>
<option value="Consumer HealthTech">Consumer HealthTech</option>
<option value="Fitness & Wellness">Fitness & Wellness</option>
<option value="Healthcare IT">Healthcare IT</option>
<option value="Healthcare Analytics">Healthcare Analytics</option>
<option value="Life Sciences Software">Life Sciences Software</option>
<option value="Telemedicine">Telemedicine</option>
<option value="Solar Energy">Solar Energy</option>
<option value="Wind Energy">Wind Energy</option>
<option value="Bioenergy">Bioenergy</option>
<option value="Hydro Power">Hydro Power</option>
<option value="Geothermal Energy">Geothermal Energy</option>
<option value="Nuclear Energy">Nuclear Energy</option>
<option value="Oil & Gas">Oil & Gas</option>
<option value="Energy Storage">Energy Storage</option>
<option value="Electric Vehicles">Electric Vehicles</option>
<option value="Smart Grid">Smart Grid</option>
<option value="Energy Efficiency">Energy Efficiency</option>
<option value="Waste & Water Management">Waste & Water Management</option>
<option value="Marine Energy">Marine Energy</option>
<option value="Oil & Gas Tech">Oil & Gas Tech</option>
<option value="Internet - India">Internet - India</option>
<option value="FinTech - India">FinTech - India</option>
<option value="HealthTech - India">HealthTech - India</option>
<option value="EdTech - India">EdTech - India</option>
<option value="Technology - India">Technology - India</option>
<option value="AdTech - India">AdTech - India</option>
<option value="Cross Border - India">Cross Border - India</option>
<option value="Global SaaS - India">Global SaaS - India</option>
<option value="Marketplaces - India">Marketplaces - India</option>
<option value="SaaS - India">SaaS - India</option>
<option value="Enterprise Tech - India">Enterprise Tech - India</option>
<option value="AgriTech">AgriTech</option>
<option value="Agriculture">Agriculture</option>
<option value="Field Crops">Field Crops</option>
<option value="Horticulture">Horticulture</option>
<option value="Aquaculture & Fisheries">Aquaculture & Fisheries</option>
<option value="Livestock">Livestock</option>
<option value="Cellular Agriculture">Cellular Agriculture</option>
<option value="Indoor Agriculture">Indoor Agriculture</option>
<option value="Consumer Digital - China">Consumer Digital - China</option>
<option value="Enterprise Tech - China">Enterprise Tech - China</option>
<option value="Technology - China">Technology - China</option>
<option value="FinTech - China">FinTech - China</option>
<option value="HealthTech - China">HealthTech - China</option>
<option value="EdTech - China">EdTech - China</option>
<option value="AdTech - China">AdTech - China</option>
<option value="Biopharma (by Therapy)">Biopharma (by Therapy)</option>
<option value="Biopharma (by Disease)">Biopharma (by Disease)</option>
<option value="Diagnostics (by Disease)">Diagnostics (by Disease)</option>
<option value="Diagnostics (by Technology)">Diagnostics (by Technology)</option>
<option value="Life Sciences Software">Life Sciences Software</option>
<option value="Nutraceuticals">Nutraceuticals</option>
<option value="Biotech R&D">Biotech R&D</option>
<option value="Biopharma Contract Services">Biopharma Contract Services</option>
<option value="Medical Devices (by Specialty)">Medical Devices (by Specialty)</option>
<option value="Diabetes">Diabetes</option>
<option value="Geo - UK & Ireland">Geo - UK & Ireland</option>
<option value="Geo - Nordics">Geo - Nordics</option>
<option value="Geo - DACH">Geo - DACH</option>
<option value="Geo - France & Benelux">Geo - France & Benelux</option>
<option value="Geo - Central & Eastern Europe">Geo - Central & Eastern Europe</option>
<option value="Consumer Digital - Europe">Consumer Digital - Europe</option>
<option value="Enterprise Tech - Europe">Enterprise Tech - Europe</option>
<option value="Technology - Europe">Technology - Europe</option>
<option value="FinTech - Europe">FinTech - Europe</option>
<option value="HealthTech - Europe">HealthTech - Europe</option>
<option value="AdTech - Europe">AdTech - Europe</option>
<option value="EdTech - Europe">EdTech - Europe</option>
<option value="Energy - Europe">Energy - Europe</option>
<option value="Life Sciences - Europe">Life Sciences - Europe</option>
<option value="Geo - Southern Europe">Geo - Southern Europe</option>
<option value="Telecom Infrastructure">Telecom Infrastructure</option>
<option value="Telecom Operation & Maintenance">Telecom Operation & Maintenance</option>
<option value="OSS & BSS">OSS & BSS</option>
<option value="Telecom Operators">Telecom Operators</option>
<option value="5G Enablers">5G Enablers</option>
<option value="FoodTech">FoodTech</option>
<option value="Online Grocery">Online Grocery</option>
<option value="Food Services">Food Services</option>
<option value="Food Products">Food Products</option>
<option value="Food Processing & Packaging">Food Processing & Packaging</option>
<option value="Services for Media & Entertainment">Services for Media & Entertainment</option>
<option value="Content Platforms">Content Platforms</option>
<option value="Internet-first Media">Internet-first Media</option>
<option value="Tech for Media Industry">Tech for Media Industry</option>
<option value="Tech for Entertainment Industry">Tech for Entertainment Industry</option>
<option value="Music Tech">Music Tech</option>
<option value="Media & Entertainment Providers">Media & Entertainment Providers</option>
<option value="Online Video">Online Video</option>
<option value="Auto Tech">Auto Tech</option>
<option value="Smart Cars">Smart Cars</option>
<option value="Transport Tech">Transport Tech</option>
<option value="Electric Vehicles">Electric Vehicles</option>
<option value="Auto Brands">Auto Brands</option>
<option value="Auto Components">Auto Components</option>
<option value="Auto Retail & Aftermarket">Auto Retail & Aftermarket</option>
<option value="VR Gaming">VR Gaming</option>
<option value="Mobile Gaming">Mobile Gaming</option>
<option value="MMORPG">MMORPG</option>
<option value="Gaming Enablers">Gaming Enablers</option>
<option value="PC & Console Gaming">PC & Console Gaming</option>
<option value="Online Retail">Online Retail</option>
<option value="Ecommerce Enablers">Ecommerce Enablers</option>
<option value="RetailTech">RetailTech</option>
<option value="Internet First Brands">Internet First Brands</option>
<option value="Subscription Commerce">Subscription Commerce</option>
<option value="B2B eCommerce">B2B eCommerce</option>
<option value="Second Hand Goods">Second Hand Goods</option>
<option value="Cross Border Commerce">Cross Border Commerce</option>
<option value="Home Improvements">Home Improvements</option>
<option value="Fashion Tech">Fashion Tech</option>
<option value="Mom & Baby Care">Mom & Baby Care</option>
<option value="Product Discovery">Product Discovery</option>
<option value="Coupons and Deals">Coupons and Deals</option>
<option value="Beauty Tech">Beauty Tech</option>
<option value="Israel Tech">Israel Tech</option>
<option value="Life Sciences - Israel">Life Sciences - Israel</option>
<option value="CleanTech - Israel">CleanTech - Israel</option>
<option value="AgriTech - Israel">AgriTech - Israel</option>
<option value="Internet of Things Infrastructure">Internet of Things Infrastructure</option>
<option value="Wearable Technology">Wearable Technology</option>
<option value="Smart Homes">Smart Homes</option>
<option value="Smart Cars">Smart Cars</option>
<option value="Industrial Internet of Things">Industrial Internet of Things</option>
<option value="Smart Cities">Smart Cities</option>
<option value="Semiconductors">Semiconductors</option>
<option value="3D Printing">3D Printing</option>
<option value="Consumer Robotics">Consumer Robotics</option>
<option value="Industrial Robotics">Industrial Robotics</option>
<option value="Drones">Drones</option>
<option value="Virtual Reality">Virtual Reality</option>
<option value="Augmented Reality">Augmented Reality</option>
<option value="NewSpace">NewSpace</option>
<option value="Blockchain">Blockchain</option>
<option value="Artificial Intelligence">Artificial Intelligence</option>
<option value="Natural User Interface">Natural User Interface</option>
<option value="Geographic Information System">Geographic Information System</option>
<option value="Advanced Materials">Advanced Materials</option>
<option value="Chatbots">Chatbots</option>
<option value="Display Technology">Display Technology</option>
<option value="Nanotechnology">Nanotechnology</option>
<option value="Sensors">Sensors</option>
<option value="Security & Surveillance Technology">Security & Surveillance Technology</option>
</select>
              </div>

				<div class="form-group">
					<label id="linkedin_label" class="control-label" for="investor_linkedin">LinkedIn URL</label>

					<div class="input-group"><span class="input-group-addon left"><i class="fa fa-linkedin"></i> </span>
						<input type="text" class="form-control" id="investor_linkedin" value="" />
					</div>                </div>

				
				<div id="postsubmitaction" style="display: none;"></div>
				<div class="form-group submit"style="position: relative;">
					<label class="control-label sr-only" style="display: block;">Submit Button</label>

					<div class="progress" style="display: none; z-index: -1; position: absolute;">
						<div class="progress-bar progress-bar-striped active" role="progressbar" style="width:100%">
						</div>
					</div>

					<center>
						<button class="btn btn-primary btn-lg" style="z-index: 1;" id="submitbuttonid">
							Submit
						</button>
					</center>
					<p class="error bg-warning" style="display:none;">
						Please check the required fields. </p>
					<script>

						$('#industrypreferencesdropdown').dropdown();
						//$('select#semanticdropdown').val()

						function checkmail() {
							var input = document.getElementById("investor_email").value;
							var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

							if (!filter.test(input)) {
								return false;
							}
							return true;
						}                        

						$("#investor_entityname_vc").change(function() {
							if (($("#investor_entityname_vc").is(':checked'))) {
								document.getElementById('entity').style.display = "block";
							}
						});

						$("#investor_entityname_angel").change(function() {
							if (($("#investor_entityname_angel").is(':checked')))
								document.getElementById('entity').style.display = "none";
						});

						$("#submitbuttonid").click(function() {
							var postsubmitactionmessage = '<center>';
							var flag_final = 0;
							
							if (($("#investor_entityname_vc").is(':checked')) && document.getElementById("investor_entityname").value == "") {
								flag_final = 1;
								postsubmitactionmessage = postsubmitactionmessage + "Please enter the name of the entity you represent.<br>";

								document.getElementById("investor_entityname_label").style.backgroundColor = '#FF0044';
							} else if (!(($("#investor_entityname_vc").is(':checked')) && document.getElementById("investor_entityname").value == "")) {

								document.getElementById("investor_entityname_label").style.backgroundColor = '#ffffff';
							}                            
							if (document.getElementById("investor_name").value == "") {
								flag_final = 1;
								postsubmitactionmessage = postsubmitactionmessage + "Please enter your name.<br>";

								document.getElementById("investor_name_label").style.backgroundColor = '#FF0044';
							} else if (document.getElementById("investor_name").value != "") {

								document.getElementById("investor_name_label").style.backgroundColor = '#ffffff';
							}

							if (document.getElementById("investor_password").value == "") {
								flag_final = 1;
								postsubmitactionmessage = postsubmitactionmessage + "Password field left empty.<br>";

								document.getElementById("investor_password_label").style.backgroundColor = '#FF0044';
							} else if (document.getElementById("investor_password").value != "") {

								document.getElementById("investor_password_label").style.backgroundColor = '#ffffff';
							}
							/*
							  if (document.getElementById("cpassword").value!=document.getElementById("cpassword2").value)
								{flag_final=1;
								postsubmitactionmessage=postsubmitactionmessage+"Passwords do not match.<br>";
							 
									document.getElementById("password1_label").style.backgroundColor = '#FF0044';
									document.getElementById("password2_label").style.backgroundColor = '#FF0044';
							  }
							  else if (document.getElementById("cpassword").value==document.getElementById("cpassword2").value)
								{
								  
									document.getElementById("password1_label").style.backgroundColor = '#ffffff';
									document.getElementById("password2_label").style.backgroundColor = '#ffffff';

								}
								*/
							if (!checkmail()) {
								flag_final = 1;
								postsubmitactionmessage = postsubmitactionmessage + "Please enter a valid email address.<br>";

								document.getElementById("investor_email_label").style.backgroundColor = '#FF0044';
							} else if (checkmail()) {
								document.getElementById("investor_email_label").style.backgroundColor = '#ffffff';
							}                            

							
							/*
							if (document.getElementById("investor_contact").value == "") {
								flag_final = 1;
								postsubmitactionmessage = postsubmitactionmessage + "Please enter your phone number.<br>";
								document.getElementById("investor_contact_label").style.backgroundColor = '#FF0044';
							} else if (document.getElementById("investor_contact").value != "") {
								document.getElementById("investor_contact_label").style.backgroundColor = '#ffffff';
							}
							
							  if(document.getElementById("c33").value=="")
								{flag_final=1;
								postsubmitactionmessage=postsubmitactionmessage+"Please enter your professional headline.<br>";
							 
									document.getElementById("headline_label").style.backgroundColor = '#FF0044';
							  }
								else if(document.getElementById("c33").value!=""){
								  document.getElementById("headline_label").style.backgroundColor = '#ffffff';
								}
								
							  if(document.getElementById("c38").value=="")
								{flag_final=1;
								postsubmitactionmessage=postsubmitactionmessage+"Please enter your location.<br>";
							 
									document.getElementById("location_label").style.backgroundColor = '#FF0044';
							  }
								else if(document.getElementById("c38").value!=""){
								  document.getElementById("location_label").style.backgroundColor = '#ffffff';
								}

							 if ( ! ($("#c58_1").is(':checked') || $("#c58_2").is(':checked') || $("#c58_3").is(':checked')))
							 {flag_final=1;
								postsubmitactionmessage=postsubmitactionmessage+"Please indicate your preferences for helping startups you connect with.<br>";
							 
									document.getElementById("advising_label").style.backgroundColor = '#FF0044';
							  }
								else if(($("#c58_1").is(':checked') || $("#c58_2").is(':checked') || $("#c58_3").is(':checked'))){
								  document.getElementById("advising_label").style.backgroundColor = '#ffffff';
								}
							  if ( ! ($("#c70_1").is(':checked') || $("#c70_2").is(':checked') ))
								 {flag_final=1;
								postsubmitactionmessage=postsubmitactionmessage+"Please indicate if you have made angel investments in the past.<br>";
							 
									document.getElementById("pastinvestments_label").style.backgroundColor = '#FF0044';
							  }
								else if( ($("#c70_1").is(':checked') || $("#c70_2").is(':checked') )){
								  document.getElementById("pastinvestments_label").style.backgroundColor = '#ffffff';
								}
							*/
							
							if ($('select#industrypreferencesdropdown').val() == null || $('select#industrypreferencesdropdown').val().length < 3) {
								flag_final = 1;
								postsubmitactionmessage = postsubmitactionmessage + "Please indicate atleast three industry preference.<br>";
								document.getElementById("investor_industrypreferences_label").style.backgroundColor = '#FF0044';
							} else {
								document.getElementById("investor_industrypreferences_label").style.backgroundColor = '#ffffff';
							}


							if (flag_final == 1) {
								postsubmitactionmessage = postsubmitactionmessage + "</center>";
								document.getElementById("postsubmitaction").style.display="block";
								document.getElementById("postsubmitaction").innerHTML = postsubmitactionmessage;
								document.getElementById("postsubmitaction").style.color = 'red';
							} else {
								document.getElementById("postsubmitaction").style.display="none";
									  
								$.post("http://localhost:8080/invstocracy/server/investor_signup.php", {
									name: document.getElementById("investor_name").value,
									password: document.getElementById("investor_password").value,
									entity: document.getElementById("investor_entityname").value,
									email: document.getElementById("investor_email").value,
									phone: document.getElementById("investor_contact").value,
									industrypreferences: JSON.stringify($('select#industrypreferencesdropdown').val()),
									linkedin: document.getElementById("investor_linkedin").value
								})

								.done(function(data) {
									console.log(data)
									console.log(data=="200")
									document.getElementById("postsubmitaction").style.display="block";
									console.log(data);
									if (data == "200") {
										document.getElementById("postsubmitaction").innerHTML = "<center>Signup successful. Please try logging in with the details you provided.</center>";
										document.getElementById("postsubmitaction").style.color = 'green';
									} else if (data == "user already exists") {
										document.getElementById("postsubmitaction").innerHTML = "<center>User already exists with this E-Mail ID. Try logging in to the system.</center>";
										document.getElementById("postsubmitaction").style.color = 'red';
									} else {
										document.getElementById("postsubmitaction").innerHTML = "<center>Bad server request. Please try again. We apologize for the inconvenience.</center>";
										document.getElementById("postsubmitaction").style.color = 'red';
									}
								});
							}
						});
					</script>
				</div>

			</div>
		</fieldset>
	</div>

	<div class="container jf-thankyou" style="display:none;" data-redirect="" data-seconds="10">
		<h3>Your form has been submitted. We will reach out to you to understand your investing preferences further. If you don't hear back from us in the next 48 hours, please feel free to reach us at <a href="mailto:reachout@fundmyventure.co">reachout@fundmyventure.co . Thank You!</h3>
	</div>    
	<script src="assets/vendor.js"></script>    
	<script src="assets/jqueryform.com.min.js?ver=v1.0-rc15&id=jqueryform-151158"></script>    
	<style type="text/css">
		/* overwrite bootstrap styles */
		
		.checkbox input[type=checkbox],
		.checkbox-inline input[type=checkbox],
		.radio input[type=radio],
		.radio-inline input[type=radio] {
			position: relative;
			margin-top: 0px;
			margin-left: 2px;
		}
		.checkbox label,
		.radio label {
			padding-left: 4px;
		}
	</style>

	<style type="text/css">
		.select2-hidden-accessible {
			opacity: 0;
		}
	</style>

	<?php require( 'footer.php'); ?>