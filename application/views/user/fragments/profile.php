<?php $this->load->view('user/fragments/header'); ?>

<?php $this->load->view('user/fragments/nav_header'); ?>


<?php $this->load->view('user/fragments/nav_bar'); ?>

<!-- end::navigation -->

<!-- begin::main -->
<div id="main">

    <!-- begin::header -->
    
<?php $this->load->view('user/fragments/begin_header'); ?>
    <!-- end::header -->

    <!-- begin::main-content -->
    <div class="main-content">

        <div class="container">
        <?php $this->load->view('user/fragments/info'); ?>

            <!-- begin::page-header -->
            <div class="page-header">
                <h4>Account Profile</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Client</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Account</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Profile</li>

                    </ol>
                </nav>

            </div>
            <!-- end::page-header -->

            <div class="row">
                <div class="col-md-12">



                    <!-- front end logic here -->

                    <div class="row">
                <div class="col-md-4">

                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title d-flex justify-content-between align-items-center">
                                Account Information
                                <a href="#" class="btn btn-outline-light btn-sm">
                                    <i data-feather="edit-2" class="mr-2"></i> Edit
                                </a>
                            </h6>
                            <div class="row mb-2">
                                <div class="col-6 text-muted">First Name:</div>
                                <div class="col-6"><?= $this->session->btc_user->firstname ?></div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-6 text-muted">Last Name:</div>
                                <div class="col-6"><?= $this->session->btc_user->lastname ?></div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-6 text-muted">Email:</div>
                                <div class="col-6"><?= $this->session->btc_user->email ?></div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-6 text-muted">Country:</div>
                                <div class="col-6"><?= $this->session->btc_user->country ?></div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-6 text-muted">Phone:</div>
                                <div class="col-6"><?= $this->session->btc_user->phone ?></div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-6 text-muted">Trade Currency</div>
                                <div class="col-6">$</div>
                            </div>
                        </div>
                    </div>

                   


                </div>
                <div class="col-md-8">



                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel">
                            
                            <div class="card">
                                <div class="card-body">
                                   
                                    
                                    
                                    <!-- People who wrote, liked, or shared a comment -->
                                    <div class="mt-4">
                                    <h6 class="card-title d-flex justify-content-between align-items-center">
                                        Genres of Trading Option Explained Take time to know about binary trade
                                    </h6>

                                        <div class="card card-body border p-3">
                                        
                                            <p>
                                            <h6 class="card-title d-flex justify-content-between align-items-center">
                                            High/Low Call Put
                                            </h6>
                                                This is probably the easiest and the simplest option for trading. The investor only needs to predict whether the price of the asset is going to rise or fall within a given time.
                                                The investor then selects Call if the prediction is a rise in price and Put if it is a fall.
                                            </p>
                                            
                                        </div>
                                        
                                    </div>

                                    <div class="mt-4">
                                        
                                        <div class="card card-body border p-3">
                                        
                                            <p>
                                            <h6 class="card-title d-flex justify-content-between align-items-center">
                                                No Touch
                                            </h6>
                                                It works the same way as the CALL/PUT option only that in this case, you select the price at which the asset must not reach before the selected period. Example: Google’s share price is $540 and the trading platform is on the No Touch price of $570 with percentage returns of 77 %. 
                                                If the price does not reach 570 dollars after the given time, then you have a gain.</p>
                                            
                                        </div>
                                        
                                    </div>
                                    <!-- ./ People who wrote, liked, or shared a comment -->
                                </div>
                            </div>
                            
                        </div>
                      
                    </div>

                </div>
            </div>
                    <!-- ------------------------------------------------------ -->


            


                </div>
            </div>

        </div>

    </div>
    <!-- end::main-content -->

    <?php $this->load->view('user/fragments/footer'); ?>              