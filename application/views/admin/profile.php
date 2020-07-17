<?php $this->load->view('admin/fragment/header') ?>

<?php $this->load->view('admin/fragment/nav_header') ?>

<?php $this->load->view('admin/fragment/nav_bar') ?>

    

   

</div>
<!-- end::navigation -->

<!-- begin::main -->
<div id="main">

<?php $this->load->view('admin/fragment/begin_header') ?>

    <!-- begin::main-content -->
    <div class="main-content">

        <!-- begin::container -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                
                <div class="container">
                
            <!-- begin::page-header -->
            <div class="page-header">
                <h4>Profile</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Admin</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
                    </ol>
                </nav>
            </div>
            <!-- end::page-header -->

                <div class="row">
                    
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-body">
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
                         
                        </div>
                    </div>

                    <div class="col-md-8">
        </div>


                </div>
                <div class="col-md-8">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel">
                            
                            <div class="card">
                                <div class="card-body">
                                <form action="<?= base_url('admin/home/profile') ?>"  method="POST">
                                    <?php if($this->session->flashdata('email')): ?>
                                                    <div class="alert alert-danger"><?= $this->session->flashdata('email') ?></div>
                                                <?php endif ?>
                                                <?php if($this->session->flashdata('success')): ?>
                                                    <div class="alert alert-success"><?= $this->session->flashdata('success') ?></div>
                                                <?php endif ?>
                                                <?php if($this->session->flashdata('error')): ?>
                                                    <div class="alert alert-danger"><?= $this->session->flashdata('error') ?></div>
                                                <?php endif ?>
                                        <div class="text-right">
                                            <ul class="list-inline">
                                            
                                            <div class="form-group row">
                                                    <label for="inputEmail3" class="col-sm-2 col-form-label">First Name</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="firstname" class="form-control" id="inputEmail3" value="<?= $this->session->btc_user->firstname ?>" required> 
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Last Name</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="lastname" class="form-control" id="inputEmail3" value="<?= $this->session->btc_user->lastname ?>" required> 
                                                    </div>
                                                </div>
                                            
                                                <div class="card">
                                                    <div class="card-body">
                                                    <input class="form-control" type="text" placeholder="Input of wrong password will automatically log you out" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Password</label>
                                                    <div class="col-sm-10">
                                                        <input type="password" name="password" class="form-control" id="inputEmail3" placeholder="Current Password" required> 
                                                    </div>
                                                </div>
                                                <li class="list-inline-item">
                                                    <button class="btn btn-primary">Submit</button>
                                                </li>
                                                <li class="list-inline-item">
                                                    <input type="reset" class="btn btn-secondary">
                                                </li>
                                            </ul>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                      
                    </div>

                </div>
            </div>
                        
                                <!-- -------------------------------------------------------------------------------- -->
                            <!-- bootstrap modal -->

               
                    <!-- modal ends -->

                <!-- -------------------------------------------------------------------------------- -->

            </div>
        </div>
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script>
            //    $document.ready(function(){
                   $("#btn").click(function(){
                    //    $("#myModal").modal("show");
                    alert('hello');
                   })
            //    })
            </script> -->
    </div>
    </div>

    </div>
                      

                </div>
            </div>

        </div>
        <!-- end::container -->

    </div>
    <!-- end::main-content -->

    <!-- begin::footer -->
    <footer>
        <div class="container">
            <div>© <script> document.write( new Date().getFullYear()) </script>  Crypto247network Powered by <a href="https://web.facebook.com/Zealtechnologized/" target="_blank">Zeal Technologies</a></div>
           
        </div>
    </footer>
    <!-- end::footer -->

</div>
<!-- end::main -->

<!-- Plugin scripts -->
<script src="<?=base_url('assets/vendors/bundle.js')?>"></script>

<!-- Chartjs -->
<script src="<?=base_url('assets/vendors/charts/chartjs/chart.min.js')?>"></script>

<!-- Apex chart -->
<script src="<?=base_url('assets/vendors/charts/apex/apexcharts.min.js')?>"></script>

<!-- Circle progress -->
<script src="<?=base_url('assets/vendors/circle-progress/circle-progress.min.js')?>"></script>

<!-- Peity -->
<script src="vendors/charts/peity/jquery.peity.min.js"></script>
<script src="<?=base_url('assets/assets/js/examples/charts/peity.js')?>"></script>

<!-- Datepicker -->
<script src="<?=base_url('assets/vendors/datepicker/daterangepicker.js')?>"></script>

<!-- Slick -->
<script src="<?=base_url('assets/vendors/slick/slick.min.js')?>"></script>

<!-- Vamp -->
<script src="<?=base_url('assets/vendors/vmap/jquery.vmap.min.js')?>"></script>
<script src="<?=base_url('assets/vendors/vmap/maps/jquery.vmap.usa.js')?>"></script>
<script src="<?=base_url('assets/assets/js/examples/vmap.js')?>"></script>

<!-- Dashboard scripts -->
<script src="<?=base_url('assets/assets/js/examples/dashboard.js')?>"></script>
<div class="colors"> <!-- To use theme colors with Javascript -->
    <div class="bg-primary"></div>
    <div class="bg-primary-bright"></div>
    <div class="bg-secondary"></div>
    <div class="bg-secondary-bright"></div>
    <div class="bg-info"></div>
    <div class="bg-info-bright"></div>
    <div class="bg-success"></div>
    <div class="bg-success-bright"></div>
    <div class="bg-danger"></div>
    <div class="bg-danger-bright"></div>
    <div class="bg-warning"></div>
    <div class="bg-warning-bright"></div>
</div>

<!-- App scripts -->
<script src="<?=base_url('assets/assets/js/app.min.js')?>"></script>
</body>

</html>