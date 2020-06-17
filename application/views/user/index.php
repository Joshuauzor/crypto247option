<?php $this->load->view('user/fragments/header'); ?>

<?php $this->load->view('user/fragments/nav_header'); ?>

<?php $this->load->view('user/fragments/nav_bar'); ?>

   

<!-- begin::main -->
<div id="main">

    <!-- begin::header -->
    <?php $this->load->view('user/fragments/begin_header'); ?>
    <!-- end::header -->

    <!-- begin::main-content -->
    <div class="main-content">

        <!-- begin::container -->
        <div class="container">

            <div class="page-header">
                <h4>Client Dashboard</h4>
                <small class="">Welcome, <span class="text-primary"><?= $this->session->btc_user->firstname.' '.$this->session->btc_user->lastname ?></span></small>
            </div>

            <div class="row">
                <div class="col-md-12">

                <?php if($this->session->flashdata('review')): ?>
                    <div class="alert alert-info"><?= $this->session->flashdata('review') ?></div>
                <?php endif ?>

                <?php if($this->session->flashdata('correct')): ?>
                    <div class="alert alert-success"><?= $this->session->flashdata('correct') ?></div>
                <?php endif ?>

                <?php if($this->session->flashdata('success')): ?>
                    <div class="alert alert-success"><?= $this->session->flashdata('success') ?></div>
                <?php endif ?>

                <?php if($this->session->flashdata('phone')): ?>
                    <div class="alert alert-success"><?= $this->session->flashdata('phone') ?></div>
                <?php endif ?>


                    <!-- loading the info dashboard here -->
                    <?php $this->load->view('user/fragments/info'); ?>

                    <!-- dashboard info -->

                    <!-- <style>
                        #work{
                            display: flex;
                        }
                    </style> -->

                    <div class="row" id="work">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                         <h3>Network Activities</h3>
                                    <h6 class="card-title d-flex justify-content-between">
                                   
                                        <iframe id="tradingview_8c5c7" src="https://s.tradingview.com/widgetembed/?frameElementId=tradingview_8c5c7&amp;symbol=AAPL&amp;interval=D&amp;hidesidetoolbar=0&amp;symboledit=1&amp;saveimage=0&amp;toolbarbg=f1f3f6&amp;studies=ROC%40tv-basicstudies%1FStochasticRSI%40tv-basicstudies%1FMASimple%40tv-basicstudies&amp;theme=Dark&amp;style=1&amp;timezone=exchange&amp;withdateranges=1&amp;showpopupbutton=1&amp;studies_overrides=%7B%7D&amp;overrides=%7B%7D&amp;enabled_features=%5B%5D&amp;disabled_features=%5B%5D&amp;showpopupbutton=1&amp;locale=en&amp;utm_source=www.autofxnetworks.online&amp;utm_medium=widget&amp;utm_campaign=chart&amp;utm_term=AAPL" style="width: 100%; height: 600px; margin: 0 !important; padding: 0 !important;" frameborder="0" allowtransparency="true" scrolling="no" allowfullscreen=""></iframe>
                                        <!-- <span class="dropdown">
                                            <a href="#" data-toggle="dropdown" aria-haspopup="true"
                                               aria-expanded="false">
                                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                            </a>
                                            <span class="dropdown-menu dropdown-menu-right">
                                                <a href="#" class="dropdown-item">Action</a>
                                                <a href="#" class="dropdown-item">Another action</a>
                                                <a href="#" class="dropdown-item">Something else here</a>
                                            </span>
                                        </span> -->
                                    </h6>
                                    <!-- <div id="chart1"></div> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                        <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Flexibility</h6>
                                    <div class="text-center">
                                        <div class="mb-2">
                                            <span class="bar-1">2,5,9,6,5,2,4,3,7,5</span>
                                        </div>
                                        <div class="font-size-30 mb-1 font-weight-bold text-primary">94%</div>
                                        <p class="mb-0 text-muted">
                                            <i class="fa fa-caret-up text-primary m-r-5"></i> 13% increase in Last week
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Total Connections</h6>
                                    <div class="text-center">
                                        <div class="mb-2">
                                            <span class="bar-1">2,5,9,6,5,2,4,3,7,5</span>
                                        </div>
                                        <div class="font-size-30 mb-1 font-weight-bold text-primary">4k</div>
                                        <p class="mb-0 text-muted">
                                            <i class="fa fa-caret-up text-primary m-r-5"></i> 13% increase in Last week
                                        </p>
                                    </div>
                                </div>
                            </div> -->
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Total Connections</h6>
                                    <div class="text-center">
                                        <div class="mb-2">
                                            <span class="bar-3">2,5,9,6,5,2,4,3,7,5</span>
                                        </div>
                                        <div class="font-size-30 mb-1 font-weight-bold text-success">674k</div>
                                        <p class="mb-0 text-muted">
                                            <i class="fa fa-caret-down text-danger m-r-5"></i> 63% increase in Last week
                                            week
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-xl-6 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title d-flex justify-content-between">
                                        <span>Trade Distribution</span>
                                        <span class="dropdown">
                                            <a class="btn btn-outline-light btn-sm dropdown-toggle" href="#"
                                               data-toggle="dropdown">USA</a>
                                            <span class="dropdown-menu dropdown-menu-right">
                                                <a href="#" class="dropdown-item">USA</a>
                                                <a href="#" class="dropdown-item">Germany</a>
                                                <a href="#" class="dropdown-item">France</a>
                                                <a href="#" class="dropdown-item">Italy</a>
                                                <a href="#" class="dropdown-item">England</a>
                                            </span>
                                        </span>
                                    </h6>
                                    <div id="vmap_usa_en" style="height: 300px"></div>
                                    <div class="table-responsive mt-3">
                                        <table class="table table-borderless mb-0">
                                            <thead class="thead-light">
                                            <tr>
                                                <th class="wd-40">States</th>
                                                <th class="wd-25 text-right">BTC</th>
                                                <th class="wd-35 text-right">Earnings</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="tx-medium">California</td>
                                                <td class="text-right">12,201</td>
                                                <td class="text-right text-success">$150,200.80</td>
                                            </tr>
                                            <tr>
                                                <td class="tx-medium">Texas</td>
                                                <td class="text-right">11,950</td>
                                                <td class="text-right text-success">$138,910.20</td>
                                            </tr>
                                            <tr>
                                                <td class="tx-medium">Wyoming</td>
                                                <td class="text-right">11,198</td>
                                                <td class="text-right text-success">$132,050.00</td>
                                            </tr>
                                            <tr>
                                                <td class="tx-medium">Florida</td>
                                                <td class="text-right">9,885</td>
                                                <td class="text-right text-success">$127,762.10</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Users Assigned to Me</h6>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex align-items-center p-l-r-0">
                                            <div>
                                                <figure class="avatar avatar-state-success m-r-15">
                                                    <img src="<?= base_url('assets/assets/media/image/user/man_avatar5.jpg')?>"
                                                         class="rounded-circle" alt="image">
                                                </figure>
                                            </div>
                                            <div>
                                                <h6 class="m-b-0">Valentine Maton</h6>
                                                <small class="text-muted">Engineer</small>
                                            </div>
                                            <div class="ml-auto">
                                                <span class="badge badge-danger mr-2 d-sm-inline d-none">Denied</span>
                                                <div class="dropdown">
                                                    <a href="#" data-toggle="dropdown"
                                                       class="btn btn-outline-light btn-sm"
                                                       aria-haspopup="true" aria-expanded="false">
                                                        <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item">View</a>
                                                        <a href="#" class="dropdown-item">Send Message</a>
                                                        <a href="#" class="dropdown-item">Assign</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center p-l-r-0">
                                            <div>
                                                <figure class="avatar avatar-state-success m-r-15">
                                                    <img src="<?= base_url('assets/assets/media/image/user/women_avatar3.jpg')?>"
                                                         class="rounded-circle" alt="image">
                                                </figure>
                                            </div>
                                            <div>
                                                <h6 class="m-b-0">Holmes Cherryman</h6>
                                                <small class="text-muted">Human resources</small>
                                            </div>
                                            <div class="ml-auto">
                                                <span class="badge badge-success mr-2 d-sm-inline d-none">Completed</span>
                                                <div class="dropdown">
                                                    <a href="#" data-toggle="dropdown"
                                                       class="btn btn-outline-light btn-sm"
                                                       aria-haspopup="true" aria-expanded="false">
                                                        <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item">View</a>
                                                        <a href="#" class="dropdown-item">Send Message</a>
                                                        <a href="#" class="dropdown-item">Assign</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center p-l-r-0">
                                            <div>
                                                <figure class="avatar avatar-state-success m-r-15">
                                                    <span class="avatar-title bg-secondary rounded-circle">MH</span>
                                                </figure>
                                            </div>
                                            <div>
                                                <h6 class="m-b-0">Malanie Hanvey</h6>
                                                <small class="text-muted">Real estate agent</small>
                                            </div>
                                            <div class="ml-auto">
                                                <span class="badge badge-warning mr-2 d-sm-inline d-none">Pending</span>
                                                <div class="dropdown">
                                                    <a href="#" data-toggle="dropdown"
                                                       class="btn btn-outline-light btn-sm"
                                                       aria-haspopup="true" aria-expanded="false">
                                                        <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item">View</a>
                                                        <a href="#" class="dropdown-item">Send Message</a>
                                                        <a href="#" class="dropdown-item">Assign</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center p-l-r-0">
                                            <div>
                                                <figure class="avatar avatar-state-success m-r-15">
                                                    <img src="<?= base_url('assets/assets/media/image/user/women_avatar1.jpg')?>"
                                                         class="rounded-circle" alt="image">
                                                </figure>
                                            </div>
                                            <div>
                                                <h6 class="m-b-0">Kenneth Hune</h6>
                                                <small class="text-muted">Engineer</small>
                                            </div>
                                            <div class="ml-auto">
                                                <span class="badge badge-danger mr-2 d-sm-inline d-none">Denied</span>
                                                <div class="dropdown">
                                                    <a href="#" data-toggle="dropdown"
                                                       class="btn btn-outline-light btn-sm"
                                                       aria-haspopup="true" aria-expanded="false">
                                                        <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item">View</a>
                                                        <a href="#" class="dropdown-item">Send Message</a>
                                                        <a href="#" class="dropdown-item">Assign</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="mt-3 text-center">
                                        <a href="#">
                                            View All
                                        </a>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <div class="col-xl-6 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Bitcoin</h6>
                                    <p class="text-muted">Total Sales</p>
                                    <h2 class="number-font">69,453</h2>
                                    <div class="progress" style="height: 10px">
                                        <div class="progress-bar w-25 bg-primary" role="progressbar"></div>
                                        <div class="progress-bar w-50 bg-info" role="progressbar"></div>
                                        <div class="progress-bar w-25 bg-warning" role="progressbar"></div>
                                    </div>
                                    <div class="row mt-3 pt-3">
                                        <div class="col border-right">
                                            <p class="mb-0">
                                                <span class="fa fa-circle text-primary mr-1"></span>
                                                Sales
                                            </p>
                                            <h5 class="mt-2 mb-0">35%</h5>
                                        </div>
                                        <div class="col border-right">
                                            <p class="mb-0">
                                                <span class="fa fa-circle text-info mr-1"></span>
                                                Invest
                                            </p>
                                            <h5 class="mt-2 mb-0">50%</h5>
                                        </div>
                                        <div class="col">
                                            <p class="mb-0">
                                                <span class="fa fa-circle text-warning mr-1"></span>
                                                Order
                                            </p>
                                            <h5 class="mt-2 mb-0">15%</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Overall Rating</h6>
                                    <p class="text-muted card-subtitle">Measures the quality of our support team
                                        efforts.</p>
                                    <div class="d-flex align-items-end">
                                        <h1 class="m-r-10 m-b-0">402k</h1>
                                        <div class="font-size-18">
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-muted"></i>
                                        </div>
                                    </div>
                                    <hr class="m-b-0">
                                    <div class="list-group list-group-flush">
                                        <div class="list-group-item p-t-b-10 p-l-r-0 d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <strong class="m-r-20">5.0</strong>
                                                <div class="font-size-14">
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="m-r-20">243k</div>
                                                <div>61%</div>
                                            </div>
                                        </div>
                                        <div class="list-group-item p-t-b-10 p-l-r-0 d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <strong class="m-r-20">4.0</strong>
                                                <div class="font-size-14">
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-muted"></i>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="m-r-20">98k</div>
                                                <div>21%</div>
                                            </div>
                                        </div>
                                        <div class="list-group-item p-t-b-10 p-l-r-0 d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <strong class="m-r-20">3.0</strong>
                                                <div class="font-size-14">
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-muted"></i>
                                                    <i class="fa fa-star text-muted"></i>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="m-r-20">50k</div>
                                                <div>10%</div>
                                            </div>
                                        </div>
                                        <div class="list-group-item p-t-b-10 p-l-r-0 d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <strong class="m-r-20">2.0</strong>
                                                <div class="font-size-14">
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-muted"></i>
                                                    <i class="fa fa-star text-muted"></i>
                                                    <i class="fa fa-star text-muted"></i>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="m-r-20">10k</div>
                                                <div>7%</div>
                                            </div>
                                        </div>
                                        <div class="list-group-item p-t-b-10 p-l-r-0 d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <strong class="m-r-20">1k</strong>
                                                <div class="font-size-14">
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-muted"></i>
                                                    <i class="fa fa-star text-muted"></i>
                                                    <i class="fa fa-star text-muted"></i>
                                                    <i class="fa fa-star text-muted"></i>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="m-r-20">7</div>
                                                <div>1%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                </div>
                            </div>
                            <!-- <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Daily Task List</h6>
                                    <div class="custom-control custom-checkbox-success custom-checkbox todo-item">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label d-flex justify-content-between"
                                               for="customCheck1">Talk
                                            to new customers
                                            <small class="text-muted font-size-11">13 May 2019</small>
                                        </label>
                                    </div>
                                    <div class="custom-control custom-checkbox-success custom-checkbox-success custom-checkbox todo-item">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2" checked>
                                        <label class="custom-control-label d-flex justify-content-between"
                                               for="customCheck2">Older
                                            users will be deleted from
                                            the system
                                            <small class="text-muted font-size-11">20 Apr 2019</small>
                                        </label>
                                    </div>
                                    <div class="custom-control custom-checkbox-success custom-checkbox todo-item">
                                        <input type="checkbox" class="custom-control-input" id="customCheck3">
                                        <label class="custom-control-label d-flex justify-content-between"
                                               for="customCheck3">Assignment
                                            will be
                                            completed
                                            <small class="text-muted font-size-11">13 May 2019</small>
                                        </label>
                                    </div>
                                    <div class="custom-control custom-checkbox-success custom-checkbox todo-item">
                                        <input type="checkbox" class="custom-control-input" id="customCheck4" checked>
                                        <label class="custom-control-label d-flex justify-content-between"
                                               for="customCheck4">Customer
                                            notes
                                            <small class="text-muted font-size-11">10 Jan 2018</small>
                                        </label>
                                    </div>
                                    <div class="custom-control custom-checkbox-success custom-checkbox todo-item">
                                        <input type="checkbox" class="custom-control-input" id="customCheck5">
                                        <label class="custom-control-label d-flex justify-content-between"
                                               for="customCheck5">Clear
                                            old log records and backup
                                            will be taken
                                            <small class="text-muted font-size-11">13 May 2019</small>
                                        </label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-checkbox-success todo-item">
                                        <input type="checkbox" class="custom-control-input" id="customCheck6">
                                        <label class="custom-control-label d-flex justify-content-between"
                                               for="customCheck6">Talk
                                            to new customers
                                            <small class="text-muted font-size-11">27 Feb 2019</small>
                                        </label>
                                    </div>
                                    <div class="custom-control custom-checkbox-success custom-checkbox todo-item">
                                        <input type="checkbox" class="custom-control-input" id="customCheck7" checked>
                                        <label class="custom-control-label d-flex justify-content-between"
                                               for="customCheck7">Older
                                            users will be deleted from
                                            the system
                                            <small class="text-muted font-size-11">13 May 2019</small>
                                        </label>
                                    </div>
                                    <form class="mt-4">
                                        <div class="input-group">
                                            <input type="text" class="form-control"
                                                   aria-label="Example text with button addon"
                                                   placeholder="New task" aria-describedby="button-addon1">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button" id="button-addon1">Add
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div> -->
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <!-- end::container -->

    </div>
    <!-- end::main-content -->
<?php $this->load->view('user/fragments/footer'); ?>