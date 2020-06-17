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
        <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title d-flex align-items-start justify-content-between mb-0">
                                        <span>Account Status</span>
                                        <span class="avatar">
                                            <span class="avatar-title bg-success text-white rounded-circle">
                                                <i class="fa fa-percent"></i>
                                            </span>
                                        </span>
                                    </h6>
                                    <div class="d-flex d-sm-block d-lg-flex align-items-end mb-3">
                                        <div></div>
                                        <h3 class="mb-0 mr-2"><?= $transaction->status; ?></h3>
                                        <p class="small text-muted mb-0 line-height-20">
                                            <span class="text-success">active</span>
                                        </p>
                                    </div>
                                    <canvas id="widget-chart1"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title d-flex align-items-start justify-content-between mb-0">
                                        <span>Invested</span>
                                        <span class="avatar">
                                            <span class="avatar-title bg-warning text-white rounded-circle">
                                                <i class="fa fa-dollar"></i>
                                            </span>
                                        </span>
                                    </h6>
                                    <div class="d-flex d-sm-block d-lg-flex align-items-end mb-3">
                                        <h3 class="mb-0 mr-2">$<?= $transaction->invested; ?></h3>
                                        <p class="small text-muted mb-0 line-height-20">
                                            <span class="text-success"></span>recent
                                        </p>
                                    </div>
                                    <canvas id="widget-chart2"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title d-flex align-items-start justify-content-between mb-0">
                                        <span>Account Type</span>
                                        <span class="avatar">
                                            <span class="avatar-title bg-danger text-white rounded-circle">
                                                <i class="fa fa-cube"></i>
                                            </span>
                                        </span>
                                    </h6>
                                    <div class="d-flex d-sm-block d-lg-flex align-items-end mb-3">
                                        <h3 class="mb-0 mr-2"><?= $transaction->account_type; ?></h3>
                                        <p class="small text-muted mb-0 line-height-20">
                                            <span class="text-success">active</span>
                                        </p>
                                    </div>
                                    <canvas id="widget-chart3"></canvas>
                                </div>
                            </div>
                        </div>
                      
                       
                       
                        
                    </div>
            <!-- begin::page-header -->
            <div class="page-header">
                <h4>Live Trade</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">247smartoptions</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">live</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">trade</li>
                    </ol>
                </nav>

            </div>
            <!-- end::page-header -->

            <div class="row">
                <div class="col-md-12">



                    <!-- front end logic here -->


                    <!-- ------------------------------------------------------ -->


                <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Live Trade</h6>
                            <div class="table-responsive">
                            <script type="text/javascript" async="" src="https://widgets.cryptocompare.com/serve/v3/coin/chart?fsym=BTC&amp;tsyms=USD,EUR,CNY,GBP&amp;app=localhost"></script>

                            </div>
                        </div>
                    </div>

            


                </div>
            </div>

        </div>

    </div>
    <!-- end::main-content -->

    <?php $this->load->view('user/fragments/footer'); ?>              