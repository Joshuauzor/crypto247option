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

            <div class="page-header">
                <h4>Admin Dashboard</h4>
                <small class="">Active, <span class="text-primary"><?= $this->session->btc_admin->firstname.' '.$this->session->btc_admin->lastname ?></span></small>
            </div>

            <div class="row">
                <div class="col-md-12">

                <?php $this->load->view('admin/fragment/info') ?>

                
                <div class="container">
                <!-- <button type="button" id="btn" data-toggle="modal" data-target="#myModal" class="btn btn-danger btn-rounded">Account</button> -->
                <button type="button" id="btn" data-toggle="modal" data-target="#myModal" class="btn btn-outline-secondary btn-uppercase">
                    <i class="ti-plus mr-2"></i> Fund Account
                </button>
                <style>
                    #btn{
                        margin-bottom: 2%;
                    }
                </style>
<!-- begin::page-header -->
<div class="page-header">
    <h4>Approved Account</h4>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="#">Approved</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Account</li>
        </ol>
    </nav>
</div>
<!-- end::page-header -->

    <div class="row">
        
    <div class="col-md-12">

        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Approved account</h6>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                        <tr>
                        <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Country</th>
                            <th>Account type</th>
                            <th>Invested</th>
                            <th>Balance</th>
                            <th>Withdrawal</th>
                            <th>Account</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i= 0;
                        foreach($user_account as $acct):
                        ?>
                        <?php if($acct->status == 'Verified'): $i++; ?>
                        <tr>
                            <td><?=$i?></td>
                            <td><?=$acct->firstname.' '.$acct->lastname?></td>
                            <td><?= $acct->email ?></td>
                            <td><?= $acct->phone ?></td>
                            <td><?= $acct->country ?></td>
                            <td><?= $acct->account_type ?></td>
                            <td><?= $acct->invested ?></td>
                            <td><?= $acct->balance ?></td>
                            <td><?= $acct->withdrawal ?></td>
                            <td><button type="button" id="btn" data-toggle="modal" data-target="#myModal" class="btn btn-danger btn-rounded">Delete</button>
                            </td>
                        </tr>
                        <!-- <button type="button" id="btn" data-toggle="modal" data-target="#myModal" class="btn btn-danger btn-rounded">Account</button> -->

                        <?php endif ?>
                        <?php endforeach ?>
                        </tbody>
                        <tfoot>
                        <tr>
                        <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Country</th>
                            <th>Account type</th>
                            <th>Invested</th>
                            <th>Balance</th>
                            <th>Withdrawal</th>
                            <th>Account</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                    <!-- -------------------------------------------------------------------------------- -->
                <!-- bootstrap modal -->

                <div class="modal" id="myModal" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Client Account</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                </div>
                            <div class="modal-body">
                                <!-- <p>Modal body text goes here.</p> -->
                                <form method="POST" action="<?= base_url('admin/home/edit_details') ?>">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Enter email" required>
                                                    <small id="emailHelp" class="form-text text-muted">Remember to use client email to get the exact client
                                                    </small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Action</label>
                                        <select class="form-control form-control-sm" name="account_type" required>
                                            <option selected disabled>Select Action</option>
                                            <option value="Mini">Mini</option>
                                            <option value="Medi">Medi</option>
                                            <option value="Max">Max</option>
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

                 
            </div>
        </div>
      
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
            <div>© <script> document.write( new Date().getFullYear()) </script>  247smartoptions Powered by <a href="https://web.facebook.com/Zealtechnologized/" target="_blank">Zeal Technologies</a></div>
           
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