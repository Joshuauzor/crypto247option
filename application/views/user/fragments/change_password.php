<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?=base_url('assets/assets/media/image/favicon.png')?>"/>

    <!-- Plugin styles -->
    <link rel="stylesheet" href="<?=base_url('assets/vendors/bundle.css')?>" type="text/css">

    <!-- App styles -->
    <link rel="stylesheet" href="<?=base_url('assets/assets/css/app.min.css')?>" type="text/css">
</head>
<body class="form-membership">

<!-- begin::preloader-->
<!-- <div class="preloader">
    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="50px" height="50px" viewBox="0 0 128 128"
         xml:space="preserve">
        <rect x="0" y="0" width="100%" height="100%" fill="#FFFFFF"/>
        <g>
            <path d="M75.4 126.63a11.43 11.43 0 0 1-2.1-22.65 40.9 40.9 0 0 0 30.5-30.6 11.4 11.4 0 1 1 22.27 4.87h.02a63.77 63.77 0 0 1-47.8 48.05v-.02a11.38 11.38 0 0 1-2.93.37z"
                  fill="#000000" fill-opacity="1"/>
            <animateTransform attributeName="transform" type="rotate" from="0 64 64" to="360 64 64"
                              dur="500ms" repeatCount="indefinite">
            </animateTransform>
        </g>
    </svg>
</div> -->
<!-- end::preloader -->

<div class="form-wrapper">

    <!-- logo -->
    <div id="logo">
   
   <img class="logo" src="<?=base_url('img/artboard.png')?>" alt="image">
   <img class="logo-dark" src="<?=base_url('img/artboard.png')?>" alt="image">
</div>
    <!-- ./ logo -->
    <?php if($this->session->flashdata('error')): ?>
        <div class="alert alert-danger"><?= $this->session->flashdata('error') ?></div>
    <?php endif ?>


    <?php if($this->session->flashdata('account')): ?>
        <div class="alert alert-danger"><?= $this->session->flashdata('account') ?></div>
    <?php endif ?>

    <?php if($this->session->flashdata('incorrect')): ?>
        <div class="alert alert-danger"><?= $this->session->flashdata('incorrect') ?></div>
    <?php endif ?>

    <?php if($this->session->flashdata('false')): ?>
        <div class="alert alert-danger"><?= $this->session->flashdata('false') ?></div>
    <?php endif ?>


    <h5>Change Password</h5>

    <!-- form -->
    <form action="<?= base_url('client/login/change_password') ?>" method="POST">
        <div class="form-group">
            <input type="text" class="form-control" name="email" placeholder="Email Address" required autofocus>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="phone" placeholder="Phone" required autofocus>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="New Password" required>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="confirm_pass" placeholder="Confirm Password" required>
        </div>
        <button class="btn btn-primary btn-block">Change Password</button>
        <!-- <div id="text">
            <p>By logging means that you agree with terms and conditions and our privacy policy including our cookie. We keep your data secured.</p>
        </div> -->
        <hr>
        <p class="text-muted">Follow us on social media</p>
        <ul class="list-inline">
            <li class="list-inline-item">
                <a href="#" class="btn btn-floating btn-facebook">
                    <i class="fa fa-facebook"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="btn btn-floating btn-twitter">
                    <i class="fa fa-twitter"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="btn btn-floating btn-instagram">
                    <i class="fa fa-instagram"></i>
                </a>
            </li>
        </ul>
        <hr>
        <p class="text-muted">Remember password?</p>
        <a href="<?= base_url('#') ?>" class="btn btn-outline-light btn-sm"> Return!</a>
    </form>
    <!-- ./ form -->

</div>

<!-- Plugin scripts -->
<script src="<?=base_url('assets/vendors/bundle.js')?>"></script>

<!-- App scripts -->
<script src="<?=base_url('assets/assets/js/app.min.js')?>"></script>
</body>

</html>