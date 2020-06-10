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
                <h4>Fund Account</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Client</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Fund</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Account</li>
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
                            <h6 class="card-title">Fund Account</h6>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <!-- <th scope="col">Withdraw Funds</th> -->
                                        
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">Kindly contact the live chat support to be properly guided
                                        </th>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

            


                </div>
            </div>

        </div>

    </div>
    <!-- end::main-content -->

    <?php $this->load->view('user/fragments/footer'); ?>              