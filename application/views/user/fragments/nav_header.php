
<!-- begin::navigation -->
<div class="navigation">

    <!-- begin::logo -->
    <div id="logo">
        <a href="#">
        
            <img class="logo" src="<?=base_url('img/artboard.png')?>" alt="logo">
            <img class="logo-sm" src="<?=base_url('img/artboard.png')?>" alt="small logo">
            <img class="logo-dark" src="<?=base_url('img/artboard.png')?>" alt="dark logo">
        </a>
    </div>
    <!-- end::logo -->
    <!-- begin::navigation header -->
    <header class="navigation-header">
        <figure class="avatar avatar-state-success">
            <img src="<?= base_url('assets/assets/media/image/icon-avatar.png')?>" class="rounded-circle" alt="image">
        </figure>
        <div>
            <h5><?= $this->session->btc_user->firstname.' '.$this->session->btc_user->lastname ?></h5>
            <p class="text-muted">Client</p>
            <ul class="nav">
                <li class="nav-item">
                    <a href="<?= base_url('client/home/profile') ?>" class="btn nav-link bg-info-bright" title="Profile" data-toggle="tooltip">
                        <i data-feather="user"></i>
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a href="#" class="btn nav-link bg-success-bright" title="Settings" data-toggle="tooltip">
                        <i data-feather="settings"></i>
                    </a>
                </li> -->
                <li class="nav-item">
                    <a href="<?= base_url('client/home/logout') ?>" class="btn nav-link bg-danger-bright" title="Logout" data-toggle="tooltip">
                        <i data-feather="log-out"></i>
                    </a>
                </li>
            </ul>
        </div>
    </header>
    <!-- end::navigation header -->