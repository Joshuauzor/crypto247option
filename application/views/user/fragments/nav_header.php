
<!-- begin::navigation -->
<div class="navigation">

    <!-- begin::logo -->
    <div id="logo">
        <a href="#">
        <p id="head">247SMARTOPTIONS</p>
            <style>
                #head{
                    font-size: 20px;
                    font-weight: bold;
                    font-family: 'Roboto', sans-serif;
                    color: #004deb;
                }
            </style>
        </a>
    </div>
    <!-- end::logo -->
    <!-- <img src="assets/media/image/user/man_avatar3.jpg" class="rounded-circle" alt="image"> -->
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