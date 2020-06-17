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
					<form class="hero-subscribe-from">
						<input type="text" placeholder="Enter your email">
						<button class="site-btn sb-gradients">Get Started</button>
					</form>
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

														
								<form action="<?=base_url('client/login')?>" method="POST" id="form" class="_l_frm _formm__" enctype="multipart/form-data">

									<div class="_oe_frm_hd">Login</div>

                                    <?php if($this->session->flashdata('registered')): ?>
                                    <div class="alert alert-success"><?= $this->session->flashdata('registered') ?></div>
                                         <?php endif ?>
                                         
                                    <?php if($this->session->flashdata('error')): ?>
                                        
                                    <div class="alert alert-danger"><?= $this->session->flashdata('error') ?></div>
                                    <?php endif ?>


                                    <?php if($this->session->flashdata('account')): ?>
                                        <div class="alert alert-danger"><?= $this->session->flashdata('account') ?></div>
                                    <?php endif ?>

                                    <?php if($this->session->flashdata('incorrect')): ?>
                                         <div class="alert alert-danger"><?= $this->session->flashdata('incorrect') ?></div>
                                    <?php endif ?>
		

						        	
						        	<label class="_oe_lab">Email</label>
						        	<input type="email" name="email" value="" placeholder="example@mail.com" class="_oe_inp" required>


						        	<label class="_oe_lab">Password</label>
						        	<input type="password" name="password" placeholder="password" class="_oe_inp" required>
							        
						        
									<input class="_oe_inp_btn _oe_inp _po" type="submit" name="_s_up" value="Sign In">

									<p style="font-size: 8pt; color: grey;" class="_b_sec">By logging in means that you agree with terms and conditions and our privacy policy including our cookie use and agree to re-ceive email notifications about your account which you can un-subscribe from at anytime. We keep your data secured..</p>

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