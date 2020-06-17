<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>

    <!-- Favicon -->
    <link href="img/bit.png" rel="shortcut icon"/>
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

    <?php if($this->session->flashdata('email')): ?>
        <div class="alert alert-danger"><?= $this->session->flashdata('email') ?></div>
    <?php endif ?>

    <h5>Create account</h5>

    <!-- form -->
    <form method="POST" action="<?= base_url('admin/register') ?>">
        <div class="form-group">
            <input type="text" class="form-control" name="firstname" placeholder="First Name" required autofocus>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="lastname" placeholder="Last Name" required>
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" required>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="phone" placeholder="Mobile no" required>
        </div>
      
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
        <div class="form-group">
            <input type="password" name="confirm_pass" class="form-control" placeholder="Confirm Password" required>
        </div>
        <button class="btn btn-primary btn-block">Register</button>
        <hr>
        <p class="text-muted">Already have an account?</p>
        <a href="<?= base_url('admin/login') ?>" class="btn btn-outline-light btn-sm">Sign in!</a>
    </form>
    <!-- ./ form -->

</div>

<!-- Plugin scripts -->
<script src="<?=base_url('assets/vendors/bundle.js')?>"></script>

<!-- App scripts -->
<script src="<?=base_url('assets/assets/js/app.min.js')?>"></script>
</body>

</html>