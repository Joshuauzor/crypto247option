<?php $this->load->view('landing/head'); ?>

<body>
    <!-- [if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif] -->
    
    <!-- header-area start -->
    <header class="header-area header-area3 header-area2">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 col-md-8 col-12">
                        <ul class="contact-info d-flex">
                            <li>
                                <span><i class="fa fa-phone"></i> +02 0120 2651 021</span>
                                <span><i class="fa fa-fax"></i> +00 425 356 4518</span>
                            </li>
                            <li>
                                <span><i class="fa fa-envelope"></i> info@crypto247network.com</span>
                                <span><i class="fa fa-paper-plane-o"></i> www.crypto247network.com</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-7 col-lg-6 col-sm-4 col-12 d-none d-md-block">
                        <ul class="social-icon d-flex justify-content-end">
                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <!-- <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li> -->
                            <!-- <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li> -->
                            <li class="instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-7 col-12">
                        <div class="logo">
                            <a href="<?= base_url() ?>">
                                <img src="<?=base_url('assets/logo/Asset 1.png')?>" alt="">
                            </a>
                        </div>
                        <style>
                            .header-area3 .logo:after{
                                display: none;
                            }
                            .header-area3 .logo:before,
                            .header-area3 .logo:after{
                                display: none;
                            }
                        </style>
                    </div>
                    <div class="col-lg-7 col-sm-9 d-none d-lg-block">
                        <ul class="mainmenu d-flex justify-content-end">
                            <li class="active"><a href="<?= base_url()?>">Home</a>
                            </li>
                            <li><a href="#about">about us</a></li>
                        
                            <li><a href="#footer">contact</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-sm-3 col-8">
                        <div class="geta_quote">
                            <a href="<?= base_url('client/register')?>">Register</a>
                        </div>
                    </div>
                    <div class="d-block d-lg-none col-4 pull-right col-sm-2">
                        <ul class="menu">
                            <li class="first"></li>
                            <li class="second"></li>
                            <li class="third"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- responsive-menu area start -->
            <div class="responsive-menu-area d-block d-sm-none">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <ul class="metismenu">
                                <li class="sidemenu-items"><a  aria-expanded="false" href="<?= base_url('client/login')?>">Login</a>
                                
                                </li>
                                <li><a href="<?= base_url('client/register')?>">Register</a></li>
                            
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- responsive-menu area start -->
        </div>
        
    </header>
    <!-- header-area end -->
 <!-- slider-area start -->
 <div class="slider-area slider-area3">
        <div class="slider-active2 owl-carousel">
            <div class="slider-items">
                <img src="<?=base_url('assets/images/slider/1.jpg')?>" alt="" class="slider">
                <div class="slider-content flex-style" style="padding-bottom: 15%; ">
                    <div class="container">
                        <div class="row">
                            <div class="text-center col-12 col-xl-8 offset-xl-2 col-lg-10 offset-lg-1" style="margin-top: 10%; ">
                                <!-- <h2>  Invest In Bitcoin Trading</h2> -->
                                      <!-- add login -->
                                      <div class="col-md-6">
					<div class="col-md-6" id="babe">
                    <style type="text/css">
                 
                    #babe{
                        padding: 23% 0px 5% 0px;
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
							        
						        
									<input class="_oe_inp_btn _oe_inp _po" type="submit" name="_s_up" value="Sign In" style="background-color: #ff7700;">
                                    <p style="color: red;"><a href="<?= base_url('client/login/recover')?>">Forgot Password?</a></p>

									<p style="font-size: 8pt; color: grey; margin-bottom:10%;" class="_b_sec">By logging in means that you agree with terms and conditions and our privacy policy and agree to receive email notifications about your account which you can un-subscribe from at anytime. We keep your data secured..</p>
                                </form>

					
					</div>
				</div>
							
                            </div>
                        </div>
                    </div>
                </div>
            </div>
   
        </div>
        <div class="slider-thumbni-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="slider-thumbnil-active  owl-carousel">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider-area end -->
<?php $this->load->view('landing/feature'); ?>
 
<?php $this->load->view('landing/about'); ?>

<?php $this->load->view('landing/service'); ?>

<?php $this->load->view('landing/abt'); ?>

<?php $this->load->view('landing/pricing'); ?>

<?php $this->load->view('landing/testimonial'); ?>

<?php $this->load->view('landing/resource'); ?>

<?php $this->load->view('landing/quote'); ?>

<?php $this->load->view('landing/blog'); ?>

<?php $this->load->view('landing/footer'); ?>
