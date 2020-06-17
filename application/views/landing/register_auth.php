<?php $this->load->view('landing/head') ?>

<?php $this->load->view('landing/header_auth') ?>

<!-- Hero section -->
<section class="hero-section" id="hero">
		<div class="container">
			<div class="row">
				<div class="col-md-6 hero-text" id="first-sec">
					<h2>Invest <span>Today In</span> <br>Bitcoin Trading</h2>
					<h4>INVEST WITH 247smartoptions EARN UP TO 350% OF YOUR FIRST INVESTMENT 100% GUARANTEED

                            Get 100% Of Your First Deposit On Your Welcome Bonus When You Invest With Bitcoin Crypto. We Offer Trade On Forex, Stocks, Commodities, Crypto.</h4>
					<!-- <form class="hero-subscribe-from">
						<input type="text" placeholder="Enter your email">
						<button class="site-btn sb-gradients">Get Started</button>
					</form> -->
				</div>
				<div class="col-md-6">
					<!-- <img src="<?= base_url('img/laptop.png')?>" class="laptop-image" alt=""> -->
					<div class="col-md-6" id="babe">
                    <style type="text/css">
                    .hero-section{
                        overflow: hidden;
                    }
                    
                   @media only screen and (min-width: 700px){
                       .hero-section{
                                    height: auto;
                            }
                            .col-md-6{
                                max-width: 100%;
                            }
                
                   }
                        .row{
                            overflow:hidden ;
                        }
						._formm__{
							width: 100%;
							display: block;
							overflow: hidden;
							background-color: #FFF;
							border-radius: 5px;
							padding: 50px;
							box-shadow: 0px 0px 3px rgba(0,0,0,0.1);
                            
						}
						._oe_lab{
							width: 100%;
							margin-bottom: 5px;
							display: block;
							overflow: hidden;
						}
						._oe_inp{
							width: 100%;
							overflow: hidden;
							padding: 10px;
							margin-bottom: 10px;
							border: 1px solid #1cb;
							background-color: #FFF;
						}
						._oe_inp_btn{
							font-weight: 600;
							color: #FFF;
							background-color: #2aa76d;
							padding: 15px;
							border-radius: 5px;
						}
						._oe_frm_hd{
							font-size: 27pt;
							font-weight: 500;
							margin-bottom: 20px;
						}
                        #first-sec{
                            margin-bottom: 5%;
                        }
						</style>

														
								<form action="<?= base_url('client/register') ?>" method="POST" id="form" class="_l_frm _formm__" enctype="multipart/form-data">

									<div class="_oe_frm_hd">OPEN ACCOUNT</div>

                                    <?php if($this->session->flashdata('error')): ?>
                                            <div class="alert alert-danger"><?= $this->session->flashdata('error') ?></div>
                                    <?php endif ?>

                                    <?php if($this->session->flashdata('email')): ?>
                                        <div class="alert alert-danger"><?= $this->session->flashdata('email') ?></div>
                                    <?php endif ?>		

						        	<label class="_oe_lab">First Name</label>
                                    <input type="text" name="firstname" value="" placeholder="e.g. John" class="_oe_inp" required>
                                    
                                    <label class="_oe_lab">Last Name</label>
						        	<input type="text" name="lastname" value="" placeholder="e.g. Smith" class="_oe_inp" required>
							        
						        	<label class="_oe_lab">Email</label>
						        	<input type="email" name="email" value="" placeholder="example@mail.com" class="_oe_inp" required>

						        	<label class="_oe_lab">Sex</label>
						        	<select class="_oe_inp" name="r_sex" required>
						        		<option selected disabled>--- Select Sex ---</option>
						        		 <option value="Male">Male</option>  <option value="Female">Female</option> 						        	</select>

						        	<label class="_oe_lab">Trading Currency</label>
						        	<select class="_oe_inp" name="r_currency" required>
						        		<option selected disabled>--- Select Currency ---</option>
						        		 <option value="USD">USD</option>  <option value="EUR">EUR</option>  <option value="GBP">GBP</option> 						        	</select>

						        	<label class="_oe_lab">Password</label>
						        	<input type="password" name="password" placeholder="password" class="_oe_inp" required>
							        
						        	<label class="_oe_lab">Confirm Password</label>
						        	<input type="password" name="confirm_pass" placeholder="Re-type password" class="_oe_inp" required>
							        
						        	<label class="_oe_lab">Phone Number</label>
						        	<input type="text" name="phone" value="" placeholder="+1XXX XXXX XXXX" class="_oe_inp" required>
							        
						        	<label class="_oe_lab">Country</label>
						        	<select class="_oe_inp" name="country" required>
						        		<option selected disabled>--- Select Coutry ---</option>
						        		 <option value="Afghanistan">Afghanistan</option>  <option value="Albania">Albania</option>  <option value="Algeria">Algeria</option>  <option value="American Samoa">American Samoa</option>  <option value="Andorra">Andorra</option>  <option value="Angola">Angola</option>  <option value="Anguilla">Anguilla</option>  <option value="Antigua Barbuda">Antigua Barbuda</option>  <option value="Argentina">Argentina</option>  <option value="Armenia">Armenia</option>  <option value="Aruba">Aruba</option>  <option value="Australia">Australia</option>  <option value="Austria">Austria</option>  <option value="Azerbaijan">Azerbaijan</option>  <option value="Bahamas">Bahamas</option>  <option value="Bahrain">Bahrain</option>  <option value="Bangladesh">Bangladesh</option>  <option value="Barbados">Barbados</option>  <option value="Belarus">Belarus</option>  <option value="Belgium">Belgium</option>  <option value="Belize">Belize</option>  <option value="Benin">Benin</option>  <option value="Bermuda">Bermuda</option>  <option value="Bhutan">Bhutan</option>  <option value="Bolivia">Bolivia</option>  <option value="Bonaire">Bonaire</option>  <option value="Bosnia Herzegovina">Bosnia Herzegovina</option>  <option value="Botswana">Botswana</option>  <option value="Brazil">Brazil</option>  <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>  <option value="Brunei">Brunei</option>  <option value="Bulgaria">Bulgaria</option>  <option value="Burkina Faso">Burkina Faso</option>  <option value="Burundi">Burundi</option>  <option value="Cambodia">Cambodia</option>  <option value="Cameroon">Cameroon</option>  <option value="Canada">Canada</option>  <option value="Canary Islands">Canary Islands</option>  <option value="Cape Verde">Cape Verde</option>  <option value="Cayman Islands">Cayman Islands</option>  <option value="Central African Republic">Central African Republic</option>  <option value="Chad">Chad</option>  <option value="Channel Islands">Channel Islands</option>  <option value="Chile">Chile</option>  <option value="China">China</option>  <option value="Christmas Island">Christmas Island</option>  <option value="Cocos Island">Cocos Island</option>  <option value="Colombia">Colombia</option>  <option value="Comoros">Comoros</option>  <option value="Congo">Congo</option>  <option value="Cook Islands">Cook Islands</option>  <option value="Costa Rica">Costa Rica</option>  <option value="Cote D'Ivoire">Cote D'Ivoire</option>  <option value="Croatia">Croatia</option>  <option value="Cuba">Cuba</option>  <option value="Curacao">Curacao</option>  <option value="Cyprus">Cyprus</option>  <option value="Czech Republic">Czech Republic</option>  <option value="Denmark">Denmark</option>  <option value="Djibouti">Djibouti</option>  <option value="Dominica">Dominica</option>  <option value="Dominican Republic">Dominican Republic</option>  <option value="East Timor">East Timor</option>  <option value="Ecuador">Ecuador</option>  <option value="Egypt">Egypt</option>  <option value="El Salvador">El Salvador</option>  <option value="Equatorial Guinea">Equatorial Guinea</option>  <option value="Eritrea">Eritrea</option>  <option value="Estonia">Estonia</option>  <option value="Ethiopia">Ethiopia</option>  <option value="Falkland Islands">Falkland Islands</option>  <option value="Faroe Islands">Faroe Islands</option>  <option value="Fiji">Fiji</option>  <option value="Finland">Finland</option>  <option value="France">France</option>  <option value="French Guiana">French Guiana</option>  <option value="French Polynesia">French Polynesia</option>  <option value="French Southern Ter">French Southern Ter</option>  <option value="Gabon">Gabon</option>  <option value="Gambia">Gambia</option>  <option value="Georgia">Georgia</option>  <option value="Germany">Germany</option>  <option value="Ghana">Ghana</option>  <option value="Gibraltar">Gibraltar</option>  <option value="Great Britain">Great Britain</option>  <option value="Greece">Greece</option>  <option value="Greenland">Greenland</option>  <option value="Grenada">Grenada</option>  <option value="Guadeloupe">Guadeloupe</option>  <option value="Guam">Guam</option>  <option value="Guatemala">Guatemala</option>  <option value="Guinea">Guinea</option>  <option value="Guyana">Guyana</option>  <option value="Haiti">Haiti</option>  <option value="Hawaii">Hawaii</option>  <option value="Honduras">Honduras</option>  <option value="Hong Kong">Hong Kong</option>  <option value="Hungary">Hungary</option>  <option value="Iceland">Iceland</option>  <option value="India">India</option>  <option value="Indonesia">Indonesia</option>  <option value="Iran">Iran</option>  <option value="Iraq">Iraq</option>  <option value="Ireland">Ireland</option>  <option value="Isle of Man">Isle of Man</option>  <option value="Israel">Israel</option>  <option value="Italy">Italy</option>  <option value="Jamaica">Jamaica</option>  <option value="Japan">Japan</option>  <option value="Jordan">Jordan</option>  <option value="Kazakhstan">Kazakhstan</option>  <option value="Kenya">Kenya</option>  <option value="Kiribati">Kiribati</option>  <option value="Korea North">Korea North</option>  <option value="Korea South">Korea South</option>  <option value="Kuwait">Kuwait</option>  <option value="Kyrgyzstan">Kyrgyzstan</option>  <option value="Laos">Laos</option>  <option value="Latvia">Latvia</option>  <option value="Lebanon">Lebanon</option>  <option value="Lesotho">Lesotho</option>  <option value="Liberia">Liberia</option>  <option value="Libya">Libya</option>  <option value="Liechtenstein">Liechtenstein</option>  <option value="Lithuania">Lithuania</option>  <option value="Luxembourg">Luxembourg</option>  <option value="Macau">Macau</option>  <option value="Macedonia">Macedonia</option>  <option value="Madagascar">Madagascar</option>  <option value="Malaysia">Malaysia</option>  <option value="Malawi">Malawi</option>  <option value="Maldives">Maldives</option>  <option value="Mali">Mali</option>  <option value="Malta">Malta</option>  <option value="Marshall Islands">Marshall Islands</option>  <option value="Martinique">Martinique</option>  <option value="Mauritania">Mauritania</option>  <option value="Mauritius">Mauritius</option>  <option value="Mayotte">Mayotte</option>  <option value="Mexico">Mexico</option>  <option value="Midway Islands">Midway Islands</option>  <option value="Moldova">Moldova</option>  <option value="Monaco">Monaco</option>  <option value="Mongolia">Mongolia</option>  <option value="Montserrat">Montserrat</option>  <option value="Morocco">Morocco</option>  <option value="Mozambique">Mozambique</option>  <option value="Myanmar">Myanmar</option>  <option value="Nambia">Nambia</option>  <option value="Nauru">Nauru</option>  <option value="Nepal">Nepal</option>  <option value="Netherland Antilles">Netherland Antilles</option>  <option value="Netherlands">Netherlands</option>  <option value="Nevis">Nevis</option>  <option value="New Caledonia">New Caledonia</option>  <option value="New Zealand">New Zealand</option>  <option value="Nicaragua">Nicaragua</option>  <option value="Niger">Niger</option>  <option value="Nigeria">Nigeria</option>  <option value="Niue">Niue</option>  <option value="Norfolk Island">Norfolk Island</option>  <option value="Norway">Norway</option>  <option value="Oman">Oman</option>  <option value="Pakistan">Pakistan</option>  <option value="Palau Island">Palau Island</option>  <option value="Palestine">Palestine</option>  <option value="Panama">Panama</option>  <option value="Papua New Guinea">Papua New Guinea</option>  <option value="Paraguay">Paraguay</option>  <option value="Peru">Peru</option>  <option value="Philippines">Philippines</option>  <option value="Pitcairn Island">Pitcairn Island</option>  <option value="Poland">Poland</option>  <option value="Portugal">Portugal</option>  <option value="Puerto Rico">Puerto Rico</option>  <option value="Qatar">Qatar</option>  <option value="Republic of Montenegro">Republic of Montenegro</option>  <option value="Republic of Serbia">Republic of Serbia</option>  <option value="Reunion">Reunion</option>  <option value="Romania">Romania</option>  <option value="Russia">Russia</option>  <option value="Rwanda">Rwanda</option>  <option value="St Barthelemy">St Barthelemy</option>  <option value="St Eustatius">St Eustatius</option>  <option value="St Helena">St Helena</option>  <option value="St Kitts-Nevis">St Kitts-Nevis</option>  <option value="St Lucia">St Lucia</option>  <option value="St Maarten">St Maarten</option>  <option value="St Pierre Miquelon">St Pierre Miquelon</option>  <option value="St Vincent Grenadines">St Vincent Grenadines</option>  <option value="Saipan">Saipan</option>  <option value="Samoa">Samoa</option>  <option value="Samoa American">Samoa American</option>  <option value="San Marino">San Marino</option>  <option value="Sao Tome Principe">Sao Tome Principe</option>  <option value="Saudi Arabia">Saudi Arabia</option>  <option value="Senegal">Senegal</option>  <option value="Serbia">Serbia</option>  <option value="Seychelles">Seychelles</option>  <option value="Sierra Leone">Sierra Leone</option>  <option value="Singapore">Singapore</option>  <option value="Slovakia">Slovakia</option>  <option value="Slovenia">Slovenia</option>  <option value="Solomon Islands">Solomon Islands</option>  <option value="Somalia">Somalia</option>  <option value="South Africa">South Africa</option>  <option value="Spain">Spain</option>  <option value="Sri Lanka">Sri Lanka</option>  <option value="Sudan">Sudan</option>  <option value="Suriname">Suriname</option>  <option value="Swaziland">Swaziland</option>  <option value="Sweden">Sweden</option>  <option value="Switzerland">Switzerland</option>  <option value="Syria">Syria</option>  <option value="Tahiti">Tahiti</option>  <option value="Taiwan">Taiwan</option>  <option value="Tajikistan">Tajikistan</option>  <option value="Tanzania">Tanzania</option>  <option value="Thailand">Thailand</option>  <option value="Togo">Togo</option>  <option value="Tokelau">Tokelau</option>  <option value="Tonga">Tonga</option>  <option value="Trinidad Tobago">Trinidad Tobago</option>  <option value="Tunisia">Tunisia</option>  <option value="Turkey">Turkey</option>  <option value="Turkmenistan">Turkmenistan</option>  <option value="Turks Caicos Is">Turks Caicos Is</option>  <option value="Tuvalu">Tuvalu</option>  <option value="Uganda">Uganda</option>  <option value="Ukraine">Ukraine</option>  <option value="United Arab Emirates">United Arab Emirates</option>  <option value="United Kingdom">United Kingdom</option>  <option value="United States of America">United States of America</option>  <option value="Uruguay">Uruguay</option>  <option value="Uzbekistan">Uzbekistan</option>  <option value="Vanuatu">Vanuatu</option>  <option value="Vatican City State">Vatican City State</option>  <option value="Venezuela">Venezuela</option>  <option value="Vietnam">Vietnam</option>  <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>  <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>  <option value="Wake Island">Wake Island</option>  <option value="Wallis Futana Is">Wallis Futana Is</option>  <option value="Yemen">Yemen</option>  <option value="Zaire">Zaire</option>  <option value="Zambia">Zambia</option>  <option value="Zimbabwe">Zimbabwe</option> 						        	</select>
											
											<input class="_oe_inp_btn _oe_inp _po" type="submit" name="_s_up" value="Sign Up">

											<p style="font-size: 8pt; color: grey;" class="_b_sec">By signing up means that you agree with terms and conditions and our privacy policy including our cookie use and agree to re-ceive email notifications about your account which you can un-subscribe from at anytime. We keep your data secured.</p>

								</form>

							
					
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->

<?php $this->load->view('landing/about') ?>


<?php $this->load->view('landing/feature') ?>

<?php $this->load->view('landing/process') ?>

<?php $this->load->view('landing/fact') ?>
	


	<!-- Team section -->
	<!-- Team section -->


	<?php $this->load->view('landing/review') ?>

	<?php $this->load->view('landing/newsletter') ?>

	<?php $this->load->view('landing/blog') ?>

	<?php $this->load->view('landing/footer') ?>