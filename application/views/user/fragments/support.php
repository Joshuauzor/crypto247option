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

            <!-- begin::page-header -->
            <div class="page-header">
                <h4>Customer Support</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Client</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Customer</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Support</li>
                    </ol>
                </nav>
            </div>
            <!-- end::page-header -->

            <div class="row">
                <div class="col-md-12">


                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title"> Customer Support</h6>
                            <form>
                                <div class="form-group">
                                   
                                <p>Please contact us immediately when you need an assistance..</p>
                                </div>
                                <div class="row">
                                <div class="col-md-8">
                                    
                                        <fieldset disabled>
                                            <div class="form-group">
                                                <label for="disabledTextInput">Account ID</label>
                                                <input type="text" id="disabledTextInput" class="form-control" placeholder="">
                                            </div>
                                    </fieldset>
                                    <div class="form-group">
                                    <label for="exampleFormControlInput1">Subject</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                           placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Message</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="type your message here" rows="3"></textarea>
                                </div>


                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </form>

                         
                        </div>
                    </div>

            


                </div>
            </div>

        </div>

    </div>
    <!-- end::main-content -->

    <?php $this->load->view('user/fragments/footer'); ?>