<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="<?= base_url('assets/images/blog/favicon.png')?>">

    <!-- Plugin styles -->
    <link rel="stylesheet" href="<?= base_url('assets/vendors/bundle.css')?>" type="text/css">

    <!-- DataTable -->
    <link rel="stylesheet" href="<?= base_url('assets/vendors/dataTable/dataTables.min.css')?>" type="text/css">

    <!-- Prism -->
    <link rel="stylesheet" href="<?= base_url('assets/vendors/prism/prism.css')?>" type="text/css">

    <!-- App styles -->
    <link rel="stylesheet" href="<?= base_url('assets/assets/css/app.min.css')?>" type="text/css">
</head>
<body>
<!-- begin::navigation -->
<div class="navigation">

    <!-- begin::logo -->
    <div id="logo">
        <a href="#">
        
            <img class="logo" src="<?=base_url('assets/logo/Asset2.png')?>" alt="logo" style="margin-top: 7%;">
            <img class="logo-sm" src="<?=base_url('assets/logo/Asset2.png')?>" alt="small logo"  style="margin-top: 7%;">
            <img class="logo-dark" src="<?=base_url('assets/logo/Asset2.png')?>" alt="dark logo"  style="margin-top: 7%;">
        </a>
    </div>
    <!-- end::logo -->

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
            <?php if($this->session->flashdata('success')): ?>
                <div class="alert alert-success"> <?= $this->session->flashdata('success') ?> </div>
            <?php endif ?>
            <div class="page-header">
                <h4>Admin Dashboard</h4>
                <small class="">Welcome, <span class="text-primary"><?= $this->session->btc_admin->firstname.' '.$this->session->btc_admin->lastname ?></span></small>
            </div>

            <div class="row">
                <div class="col-md-12">

                <?php $this->load->view('admin/fragment/info') ?>
                <div class="container">

                <?php if($this->session->flashdata('email')): ?>
                    <div class="alert alert-danger"><?= $this->session->flashdata('email') ?></div>
                <?php endif ?>

                <button type="button" id="btn" data-toggle="modal" data-target="#myModal" class="btn btn-outline-secondary btn-uppercase">
                    <i class="ti-plus mr-2"></i> Verify Account
                </button>
                <p>Please endeavor to use correct email at all time</p>
                <style>
                    #btn{
                        margin-bottom: 2%;
                    }
                </style>

<!-- begin::page-header -->
<div class="page-header">
    <h4>Pending Account</h4>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="#">Pending</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Account</li>
        </ol>
    </nav>
</div>
<!-- end::page-header -->

 
<div class="row">
                <div class="col-md-12">

                 <?php $i=0;
                 foreach($acct as $pending): $i++;?>
                    <div class="card">
                        <div class="card-body">
                            <table id="example1" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Country</th>
                                    <th>Document Type</th>
                                    <th>Document</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <!-- body section -->
                           
                                <tr>
                                    <!-- <td><?= $i ?></td> -->
                                    <td><?= $pending->firstname.' '.$pending->lastname ?></td>
                                    <td><?= $pending->email ?></td>
                                    <td><?= $pending->phone ?></td>
                                    <td><?= $pending->country ?></td>
                                    <td><?= $pending->document_name ?></td>
                                    <td><img id ="imga" src="<?= base_url("assets/document/" . $pending->front_page )  ?>" ></td>
                                </tr>
                               
                            <!-- foot section -->
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>S/N</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Country</th>
                                    <th>Document</th>
                                </tr>
                                </tfoot>
                            </table>
                          
                        </div>
                    </div>

                    <div class="card">
                        <!--  -->
                    </div>
                <?php endforeach ?>
                </div>
            </div>
 <!-- bootstrap modal -->

 <div class="modal" id="myModal" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Verify Account</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                </div>
                            <div class="modal-body">
                                <!-- <p>Modal body text goes here.</p> -->
                                <form method="POST" action="<?= base_url('admin/home/verify_account') ?>">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Enter verification email" required>
                                                    <small id="emailHelp" class="form-text text-muted">Remember to use client email to get the exact client
                                                    </small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Account Status</label>
                                        <select class="form-control form-control-sm" name="status" required>
                                            <option selected disabled>Select Status</option>
                                            <option value="Verified">Verified</option>
                                            <option value="Unverified">Unverified</option>
                                        </select>
                                    </div>
                                    
                                
                                     <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        </div>
                    </div>

                    <!-- modal ends -->

                <!-- -------------------------------------------------------------------------------- -->
    </div>
                  
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $('#approve').on('click', function(){
            $.ajax({
                url:"<?= base_url() ?> admin/home/pending_approve",
                type: "POST",
                data: {'id' : id},
                dataType: 'json',
                success: function(data){
                    alert('success');
                },
                error: function(){
                    alert('Was not sent');
                }
            });
        });
    </script>
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
<script src="<?= base_url('assets/vendors/bundle.js')?>"></script>

<!-- DataTable -->
<script src="<?= base_url('assets/vendors/dataTable/jquery.dataTables.min.js')?>"></script>
<script src="<?= base_url('assets/vendors/dataTable/dataTables.bootstrap4.min.js')?>"></script>
<script src="<?= base_url('assets/vendors/dataTable/dataTables.responsive.min.js')?>"></script>
<script src="<?= base_url('assets/assets/js/examples/datatable.js')?>"></script>

<!-- Prism -->
<script src="<?= base_url('assets/vendors/prism/prism.js')?>"></script>

<!-- test -->
<script src="<?=base_url('assets/vendors/charts/chartjs/chart.min.js')?>"></script>

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
<!-- test -->
<!-- App scripts -->
<script src="<?= base_url('assets/assets/js/app.min.js')?>"></script>
</body>

</html>

