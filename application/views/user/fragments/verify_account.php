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
    <?php if($this->session->flashdata('error')): ?>
        <div class="alert alert-danger"><?= $this->session->flashdata('error') ?></div>
    <?php endif ?>


    <?php if($this->session->flashdata('success')): ?>
        <div class="alert alert-success"><?= $this->session->flashdata('success') ?></div>
    <?php endif ?>

    <?php if($this->session->flashdata('failed')): ?>
        <div class="alert alert-danger"><?= $this->session->flashdata('failed') ?></div>
    <?php endif ?>

        <div class="container">

            <!-- begin::page-header -->
            <div class="page-header">
                <h4>Verify Account</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Client</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Account</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Verify</li>
                    </ol>
                </nav>
            </div>
            <!-- end::page-header -->

            <div class="row">
                <div class="col-md-12">


                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Verify Account</h6>
                           <!-- <?php 
                            echo form_open_multipart('')
                           ?>
                        <input type="file" name="file_name">
                        <input type="file" name="file_reg">
                        <input type="submit" name="upload" value="Upload">
                        <?php echo form_close(); ?>
                            </form>
 tets -->
                            <?php 
                            echo form_open_multipart('')
                           ?> 
                        <div class="form-group">
                                   
                                   <p>Verify Your account by providing us with a vaild document (ID card). Drivers Licence, Valid Work ID Card, Passport, etc are accepted. Please do not try to upload a fake document as our support teams reviews every document uploaded. Detected fake documents will lead to immediate suspension of account! Once Uploaded, Our support team reviews your document and gets back to you within 3 working days. The uploaded documents are for verification purposes only and are deleted once confirmed. You will be notified via email once your document has been verified.
                                       Choose your document and click on the verify button.</p>
                                   </div>
                                   <div class="row">
                                   <div class="col-md-8">
                                       
                                       <fieldset disabled>
                                               <div class="form-group">
                                                   <label for="disabledTextInput">Account ID</label>
                                                   <input type="text" name="account_id" id="disabledTextInput" class="form-control" placeholder="">
                                               </div>
                                       </fieldset>
                                       <div class="form-group">
                                       <label for="exampleFormControlInput1">Document Name</label>
                                       <input type="text" name="document_name" class="form-control" id="exampleFormControlInput1"
                                              placeholder="Enter the document name e.g Driver's license" required>
                                   </div>
   
                                   <?php if (isset($error)){
                                   echo $error;
                                   }
                                   ?>
                                   <div class="form-group">
                                       <label for="exampleFormControlFile1">Front Page</label>
                                       <input type="file" name="file_name" class="form-control-file" id="exampleFormControlFile1"required>
                                   </div>
                                   <!-- <div class="form-group">
                                       <label for="exampleFormControlFile1">Back Page</label>
                                       <input type="file" name="back_page" class="form-control-file" id="exampleFormControlFile1"required>
                                   </div> -->
   
                                   <button type="submit" name="upload" value="Upload" class="btn btn-primary">Verify</button>
                        <?php echo form_close(); ?>
                            </form>


                                <?php if (isset($error)){
                                echo $error;
                                }
                                ?>
                               

                                <!-- <button type="submit" name="upload" value="Upload" class="btn btn-primary">Verify</button> -->
                            </form> 

                         
                        </div>
                    </div>

            


                </div>
            </div>

        </div>

    </div>
    <!-- end::main-content -->

    <?php $this->load->view('user/fragments/footer'); ?>