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


    <h5>Change Email</h5>

    <!-- form -->
    <form action="<?=base_url('client/home/change_email')?>" method="POST">
        <div class="form-group">
            <input type="text" class="form-control" name="phone" placeholder="Phone" required autofocus>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="email" placeholder="New Email Address" required autofocus>
        </div>
        <button class="btn btn-primary btn-block">Change Email</button>
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
        <!-- <hr>
        <p class="text-muted">Don't have an account?</p>
        <a href="<?= base_url('client/register') ?>" class="btn btn-outline-light btn-sm">Register now!</a> -->
    </form>
    <!-- ./ form -->

</div>

<!-- Plugin scripts -->
<script src="<?=base_url('assets/vendors/bundle.js')?>"></script>

<!-- App scripts -->
<script src="<?=base_url('assets/assets/js/app.min.js')?>"></script>
</body>

</html>