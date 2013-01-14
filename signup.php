<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IEEP | Signup</title>
<link rel="stylesheet" href="css/style.css" />

    
</head>

<body class="preview" data-spy="scroll" data-target=".subnav" data-offset="80">


 <div class="navbar navbar-fixed-top">
   <div class="navbar-inner">
     <div class="container">
       
       <a class="brand" href="index.html">IEEP</a>
       <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </a><div class="nav-collapse" id="main-menu">
        <ul class="nav pull-right" id="main-menu-right">
          <li><a onclick="window.open ('login.php','_self',false)">Login</a></li>
          <li><a onclick="window.open ('signup.php','_self',false)">Signup</a></li>
          </ul>
        
       </div>
     </div>
   </div>
 </div>

    <div class="container">    


<section id="typography">
  <div class="page-header">
<br /><br /><br />   
 <h3>Interactive Environmental Education Portal</h3>
  </div>
<?php
    if(isset($_REQUEST['success']))
    {
        echo "<div class='alert alert-success'>You Have successfully register your school! Please check your
        mail for the acccount details. Go back to <a href='index.html'>Home</a></div>";
    }
    elseif(isset($_REQUEST['err']))
    {
        echo "<div class='alert alert-error'>Email ID Entered is Inavlid, please Sign Up again</div>";
    }
    elseif(isset($_REQUEST['error']))
    {
        echo "<div class='alert alert-error'>You have already been registered in The Green Playground</div>";
    }

?>
<h3>Signup</h3>
<div class="tabbable"> <!-- Only required for left/right tabs -->
  <ul class="nav nav-tabs">
    <li class="active"><a href="#tab1" data-toggle="tab">School</a></li>
    <li><a href="#tab2" data-toggle="tab">Student</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane active" id="tab1">
     <div class="row">
    <div class="span8">

        <form class="form-horizontal well" name="register" method="post" id="school" action="signup_controller.php">
        <fieldset>
          <legend>Signup for Schools</legend>
	  <input type="hidden" name='id' value='school'>
          <div class="control-group">
            <label class="control-label" for="input01">School Name*</label>
            <div class="controls">
              <input data-validation-required-message="Please enter School Name" type="text" name = 'name' class="input-xlarge" id="input01">
              <p class="help-block"></p>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="input01">Principal's Name*</label>
            <div class="controls">
              <input type="text" data-validation-required-message="Please enter the Principal's name" name = 'pr_name' class="input-xlarge" id="input01">
              <p class="help-block"></p>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="input01">Principal Email-ID*</label>
            <div class="controls">
              <input type="email" data-validation-required-message="Please enter the Principal's Email-ID" name = 'pr_email' class="input-xlarge" id="input01">
              <p class="help-block"></p>
            </div>
          </div>
	  <div class="control-group">
            <label class="control-label" for="input01">Teacher's Name*</label>
            <div class="controls">
              <input type="text" data-validation-required-message="Please enter the Teacher's name" name = 'tr_name' class="input-xlarge" id="input01">
              <p class="help-block"></p>
            </div>
          </div>
	  <div class="control-group">
            <label class="control-label" for="input01">Teacher's Email-ID*</label>
            <div class="controls">
              <input type="email" data-validation-required-message="Please enter the Teacher's Email-ID" name = 'tr_email' class="input-xlarge" id="input01">
              <p class="help-block"></p>
            </div>
          </div>
	  <div class="control-group">
            <label class="control-label" for="input01">Address*</label>
            <div class="controls">
              <textarea data-validation-required-message="Please enter the Address" name = 'address' class="input-xlarge" id="input01" rows=5 cols=100></textarea>
              <p class="help-block"></p>
            </div>
          </div>
	  <div class="control-group">
            <label class="control-label" for="input01">City*</label>
            <div class="controls">
              <input type="text" data-validation-required-message="Please enter the City" name = 'city' class="input-xlarge" id="input01">
              <p class="help-block"></p>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="select01">Country*</label>
            <div class="controls">
              <select id="select01" name="country">
                <option value="AFG">Afghanistan</option>
	<option value="ALA">Åland Islands</option>
	<option value="ALB">Albania</option>
	<option value="DZA">Algeria</option>
	<option value="ASM">American Samoa</option>
	<option value="AND">Andorra</option>
	<option value="AGO">Angola</option>
	<option value="AIA">Anguilla</option>
	<option value="ATA">Antarctica</option>
	<option value="ATG">Antigua and Barbuda</option>
	<option value="ARG">Argentina</option>
	<option value="ARM">Armenia</option>
	<option value="ABW">Aruba</option>
	<option value="AUS">Australia</option>
	<option value="AUT">Austria</option>
	<option value="AZE">Azerbaijan</option>
	<option value="BHS">Bahamas</option>
	<option value="BHR">Bahrain</option>
	<option value="BGD">Bangladesh</option>
	<option value="BRB">Barbados</option>
	<option value="BLR">Belarus</option>
	<option value="BEL">Belgium</option>
	<option value="BLZ">Belize</option>
	<option value="BEN">Benin</option>
	<option value="BMU">Bermuda</option>
	<option value="BTN">Bhutan</option>
	<option value="BOL">Bolivia, Plurinational State of</option>
	<option value="BES">Bonaire, Sint Eustatius and Saba</option>
	<option value="BIH">Bosnia and Herzegovina</option>
	<option value="BWA">Botswana</option>
	<option value="BVT">Bouvet Island</option>
	<option value="BRA">Brazil</option>
	<option value="IOT">British Indian Ocean Territory</option>
	<option value="BRN">Brunei Darussalam</option>
	<option value="BGR">Bulgaria</option>
	<option value="BFA">Burkina Faso</option>
	<option value="BDI">Burundi</option>
	<option value="KHM">Cambodia</option>
	<option value="CMR">Cameroon</option>
	<option value="CAN">Canada</option>
	<option value="CPV">Cape Verde</option>
	<option value="CYM">Cayman Islands</option>
	<option value="CAF">Central African Republic</option>
	<option value="TCD">Chad</option>
	<option value="CHL">Chile</option>
	<option value="CHN">China</option>
	<option value="CXR">Christmas Island</option>
	<option value="CCK">Cocos (Keeling) Islands</option>
	<option value="COL">Colombia</option>
	<option value="COM">Comoros</option>
	<option value="COG">Congo</option>
	<option value="COD">Congo, the Democratic Republic of the</option>
	<option value="COK">Cook Islands</option>
	<option value="CRI">Costa Rica</option>
	<option value="CIV">Côte d'Ivoire</option>
	<option value="HRV">Croatia</option>
	<option value="CUB">Cuba</option>
	<option value="CUW">Curaçao</option>
	<option value="CYP">Cyprus</option>
	<option value="CZE">Czech Republic</option>
	<option value="DNK">Denmark</option>
	<option value="DJI">Djibouti</option>
	<option value="DMA">Dominica</option>
	<option value="DOM">Dominican Republic</option>
	<option value="ECU">Ecuador</option>
	<option value="EGY">Egypt</option>
	<option value="SLV">El Salvador</option>
	<option value="GNQ">Equatorial Guinea</option>
	<option value="ERI">Eritrea</option>
	<option value="EST">Estonia</option>
	<option value="ETH">Ethiopia</option>
	<option value="FLK">Falkland Islands (Malvinas)</option>
	<option value="FRO">Faroe Islands</option>
	<option value="FJI">Fiji</option>
	<option value="FIN">Finland</option>
	<option value="FRA">France</option>
	<option value="GUF">French Guiana</option>
	<option value="PYF">French Polynesia</option>
	<option value="ATF">French Southern Territories</option>
	<option value="GAB">Gabon</option>
	<option value="GMB">Gambia</option>
	<option value="GEO">Georgia</option>
	<option value="DEU">Germany</option>
	<option value="GHA">Ghana</option>
	<option value="GIB">Gibraltar</option>
	<option value="GRC">Greece</option>
	<option value="GRL">Greenland</option>
	<option value="GRD">Grenada</option>
	<option value="GLP">Guadeloupe</option>
	<option value="GUM">Guam</option>
	<option value="GTM">Guatemala</option>
	<option value="GGY">Guernsey</option>
	<option value="GIN">Guinea</option>
	<option value="GNB">Guinea-Bissau</option>
	<option value="GUY">Guyana</option>
	<option value="HTI">Haiti</option>
	<option value="HMD">Heard Island and McDonald Islands</option>
	<option value="VAT">Holy See (Vatican City State)</option>
	<option value="HND">Honduras</option>
	<option value="HKG">Hong Kong</option>
	<option value="HUN">Hungary</option>
	<option value="ISL">Iceland</option>
	<option value="IND">India</option>
	<option value="IDN">Indonesia</option>
	<option value="IRN">Iran, Islamic Republic of</option>
	<option value="IRQ">Iraq</option>
	<option value="IRL">Ireland</option>
	<option value="IMN">Isle of Man</option>
	<option value="ISR">Israel</option>
	<option value="ITA">Italy</option>
	<option value="JAM">Jamaica</option>
	<option value="JPN">Japan</option>
	<option value="JEY">Jersey</option>
	<option value="JOR">Jordan</option>
	<option value="KAZ">Kazakhstan</option>
	<option value="KEN">Kenya</option>
	<option value="KIR">Kiribati</option>
	<option value="PRK">Korea, Democratic People's Republic of</option>
	<option value="KOR">Korea, Republic of</option>
	<option value="KWT">Kuwait</option>
	<option value="KGZ">Kyrgyzstan</option>
	<option value="LAO">Lao People's Democratic Republic</option>
	<option value="LVA">Latvia</option>
	<option value="LBN">Lebanon</option>
	<option value="LSO">Lesotho</option>
	<option value="LBR">Liberia</option>
	<option value="LBY">Libya</option>
	<option value="LIE">Liechtenstein</option>
	<option value="LTU">Lithuania</option>
	<option value="LUX">Luxembourg</option>
	<option value="MAC">Macao</option>
	<option value="MKD">Macedonia, the former Yugoslav Republic of</option>
	<option value="MDG">Madagascar</option>
	<option value="MWI">Malawi</option>
	<option value="MYS">Malaysia</option>
	<option value="MDV">Maldives</option>
	<option value="MLI">Mali</option>
	<option value="MLT">Malta</option>
	<option value="MHL">Marshall Islands</option>
	<option value="MTQ">Martinique</option>
	<option value="MRT">Mauritania</option>
	<option value="MUS">Mauritius</option>
	<option value="MYT">Mayotte</option>
	<option value="MEX">Mexico</option>
	<option value="FSM">Micronesia, Federated States of</option>
	<option value="MDA">Moldova, Republic of</option>
	<option value="MCO">Monaco</option>
	<option value="MNG">Mongolia</option>
	<option value="MNE">Montenegro</option>
	<option value="MSR">Montserrat</option>
	<option value="MAR">Morocco</option>
	<option value="MOZ">Mozambique</option>
	<option value="MMR">Myanmar</option>
	<option value="NAM">Namibia</option>
	<option value="NRU">Nauru</option>
	<option value="NPL">Nepal</option>
	<option value="NLD">Netherlands</option>
	<option value="NCL">New Caledonia</option>
	<option value="NZL">New Zealand</option>
	<option value="NIC">Nicaragua</option>
	<option value="NER">Niger</option>
	<option value="NGA">Nigeria</option>
	<option value="NIU">Niue</option>
	<option value="NFK">Norfolk Island</option>
	<option value="MNP">Northern Mariana Islands</option>
	<option value="NOR">Norway</option>
	<option value="OMN">Oman</option>
	<option value="PAK">Pakistan</option>
	<option value="PLW">Palau</option>
	<option value="PSE">Palestinian Territory, Occupied</option>
	<option value="PAN">Panama</option>
	<option value="PNG">Papua New Guinea</option>
	<option value="PRY">Paraguay</option>
	<option value="PER">Peru</option>
	<option value="PHL">Philippines</option>
	<option value="PCN">Pitcairn</option>
	<option value="POL">Poland</option>
	<option value="PRT">Portugal</option>
	<option value="PRI">Puerto Rico</option>
	<option value="QAT">Qatar</option>
	<option value="REU">Réunion</option>
	<option value="ROU">Romania</option>
	<option value="RUS">Russian Federation</option>
	<option value="RWA">Rwanda</option>
	<option value="BLM">Saint Barthélemy</option>
	<option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
	<option value="KNA">Saint Kitts and Nevis</option>
	<option value="LCA">Saint Lucia</option>
	<option value="MAF">Saint Martin (French part)</option>
	<option value="SPM">Saint Pierre and Miquelon</option>
	<option value="VCT">Saint Vincent and the Grenadines</option>
	<option value="WSM">Samoa</option>
	<option value="SMR">San Marino</option>
	<option value="STP">Sao Tome and Principe</option>
	<option value="SAU">Saudi Arabia</option>
	<option value="SEN">Senegal</option>
	<option value="SRB">Serbia</option>
	<option value="SYC">Seychelles</option>
	<option value="SLE">Sierra Leone</option>
	<option value="SGP">Singapore</option>
	<option value="SXM">Sint Maarten (Dutch part)</option>
	<option value="SVK">Slovakia</option>
	<option value="SVN">Slovenia</option>
	<option value="SLB">Solomon Islands</option>
	<option value="SOM">Somalia</option>
	<option value="ZAF">South Africa</option>
	<option value="SGS">South Georgia and the South Sandwich Islands</option>
	<option value="SSD">South Sudan</option>
	<option value="ESP">Spain</option>
	<option value="LKA">Sri Lanka</option>
	<option value="SDN">Sudan</option>
	<option value="SUR">Suriname</option>
	<option value="SJM">Svalbard and Jan Mayen</option>
	<option value="SWZ">Swaziland</option>
	<option value="SWE">Sweden</option>
	<option value="CHE">Switzerland</option>
	<option value="SYR">Syrian Arab Republic</option>
	<option value="TWN">Taiwan, Province of China</option>
	<option value="TJK">Tajikistan</option>
	<option value="TZA">Tanzania, United Republic of</option>
	<option value="THA">Thailand</option>
	<option value="TLS">Timor-Leste</option>
	<option value="TGO">Togo</option>
	<option value="TKL">Tokelau</option>
	<option value="TON">Tonga</option>
	<option value="TTO">Trinidad and Tobago</option>
	<option value="TUN">Tunisia</option>
	<option value="TUR">Turkey</option>
	<option value="TKM">Turkmenistan</option>
	<option value="TCA">Turks and Caicos Islands</option>
	<option value="TUV">Tuvalu</option>
	<option value="UGA">Uganda</option>
	<option value="UKR">Ukraine</option>
	<option value="ARE">United Arab Emirates</option>
	<option value="GBR">United Kingdom</option>
	<option value="USA">United States</option>
	<option value="UMI">United States Minor Outlying Islands</option>
	<option value="URY">Uruguay</option>
	<option value="UZB">Uzbekistan</option>
	<option value="VUT">Vanuatu</option>
	<option value="VEN">Venezuela, Bolivarian Republic of</option>
	<option value="VNM">Viet Nam</option>
	<option value="VGB">Virgin Islands, British</option>
	<option value="VIR">Virgin Islands, U.S.</option>
	<option value="WLF">Wallis and Futuna</option>
	<option value="ESH">Western Sahara</option>
	<option value="YEM">Yemen</option>
	<option value="ZMB">Zambia</option>
	<option value="ZWE">Zimbabwe</option>


              </select>
            </div>
          </div>
          
          <div class="form-actions">
            <button type="submit" class="btn btn-primary">Save</button>
            <button type="reset" class="btn">Cancel</button>
          </div>
          <input type="hidden" name="type" value="1"/>
        </fieldset>
      </form>


  
    </div>

    

  </div>
  
    </div>
    <div class="tab-pane" id="tab2">
      <div class="row">
    <div class="span8">

        <form class="form-horizontal well" name="register" method="post" id="student" action="signup_controller.php">
        <fieldset>
          <legend>Signup for Students</legend>
	  <input type="hidden" name='id' value='student'>
          <div class="control-group">
            <label class="control-label" for="input01">Full Name*</label>
            <div class="controls">
              <input type="text" data-validation-required-message="Please enter your name" class="input-xlarge" name = 'name' id="input01">
              <p class="help-block"></p>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="input01">Email ID(Optional)</label>
            <div class="controls">
              <input type="email" class="input-xlarge" name = 'email' id="input01">
              <p class="help-block"></p>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="select01">School*</label>
            <div class="controls">
              <select id="select01" name = 'school'>
                <?php
                    include("class.login.php");
                    $log=new logmein();
                    $result=$log->qry("SELECT * FROM school");
                    while($row=mysql_fetch_assoc($result))
                    {
                        echo "<option value='".$row['name']."'>".$row['name']."</option>";
                    }
                ?>
              </select>
            </div>
          </div>
	  <div class="control-group">
            <label class="control-label" for="input01">User Name*</label>
            <div class="controls">
              <input type="text" data-validation-required-message="Please enter your User name" class="input-xlarge" name = 'username' id="input01">
              <p class="help-block"></p>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="input01">Password*</label>
            <div class="controls">
              <input data-validation-required-message="Please enter password" type="password" class="input-xlarge" name = 'password' id="input01">
              <p class="help-block"></p>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="input01">Confirm Password*</label>
            <div class="controls">
              <input type="password" data-validation-matches-match="password" data-validation-matches-message="Passwords do not match" class="input-xlarge" name="c_password" id="input01">
              <p class="help-block"></p>
            </div>
          </div>
	  <div class="control-group">
            <label class="control-label" for="select01">Security Question 1*</label>
            <div class="controls">
              <select id="select01" name = 'q1'>
                <option value="What is your Mother's middle name?">What is your Mother's middle name?</option>
                <option value="What is your Father's middle name?">What is your Father's middle name?</option>
		<option value="What is your Nickname?">What is your Nickname?</option>
		<option value="What is your Pet's name?">What is your Pet's name?</option>
		<option value="Where were you born?">Where were you born?</option>
	        
	      </select>
            </div>
          </div>
	  <div class="control-group">
            <label class="control-label" for="input01">Security Answer 1*</label>
            <div class="controls">
              <input type="text" data-validation-required-message="Please enter the Answer" class="input-xlarge" name ='a1' id="input01">
              <p class="help-block"></p>
            </div>
          </div>
	  <div class="control-group">
            <label class="control-label" for="select01">Security Question 2*</label>
            <div class="controls">
              <select id="select01" name = 'q2'>
                <option value="What is your favourite team?">What is your favourite team?</option>
                <option value="Which is your favourite city?">Which is your favourite city?</option>
		<option value="What is your favourite food?">What is your favourite food?</option>
	      </select>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="input01">Security Answer 2*</label>
            <div class="controls">
              <input type="text" data-validation-required-message="Please enter the Answer" class="input-xlarge" name ='a2' id="input01">
              <p class="help-block"></p>
            </div>
          </div>
	  <div class="form-actions">
            <button type="submit" class="btn btn-primary">Save</button>
            <button type="reset" class="btn">Cancel</button>
          </div>
          <input type="hidden" name="type" value="0"/>
        </fieldset>
      </form>


  
    </div>

    

  </div>

    </div>
    

    

  
  


  
  
  
</section>



<div class="navbar navbar-fixed-bottom">
   <div class="navbar-inner" style="text-align:center">
     <div class="container">
     <div class="nav-collapse" id="main-menu">
        <div class="btn-group">
  <button class="btn" onclick="window.open ('about.html','_self',false)">About</button>
  <button class="btn" onclick="window.open ('approach.html','_self',false)">Approach</button>
  <button class="btn" onclick="window.open ('research.html','_self',false)">Research</button>
  <button class="btn" onclick="window.open ('team.html','_self',false)">Team</button>
  <button class="btn" onclick="window.open ('contact.html','_self',false)">Contact Us</button>
  <button class="btn" onclick="window.open ('faq.html','_self',false)">FAQs</button>


</div>
        
       </div>
     
     </div></div></div>

  
       
   
<br><br><br><br>


    </div><!-- /container -->



    <!-- Le javascript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jQuery-1.js"></script>
	<script src="js/jqBootstrapValidation.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/prettify.js"></script>
    
    <script>
            $(function() {

                prettyPrint();

                $("input,textarea,select").jqBootstrapValidation(
                    {
                        preventSubmit: true,
                        submitError: function($form, event, errors) {
                            // Here I do nothing, but you could do something like display 
                            // the error messages to the user, log, etc.
                        },
                        submitSuccess: function($form, event) {
                           
                        },
                        filter: function() {
                            return $(this).is(":visible");
                        }
                    }
                );

                $("a[data-toggle=\"tab\"]").click(function(e) {
                    e.preventDefault();
                    $(this).tab("show");
                });

            });
        </script>


  

</body>
</html>
