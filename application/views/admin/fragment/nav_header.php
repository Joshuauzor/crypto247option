<!-- begin::navigation header -->
<header class="navigation-header">
        <figure class="avatar avatar-state-success">
            <img src="<?= base_url('assets/assets/media/image/icon-avatar.png')?>" class="rounded-circle" alt="image">
        </figure>
        <div>
            <h5><?= $this->session->btc_admin->firstname.' '.$this->session->btc_admin->lastname ?></h5>
            <p class="text-muted">Administrator</p>
            <ul class="nav">
                <li class="nav-item">
                    <a href="<?= base_url('admin/home/profile')?>" class="btn nav-link bg-info-bright" title="Profile" data-toggle="tooltip">
                        <i data-feather="user"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('admin/home/logout') ?>" class="btn nav-link bg-danger-bright" title="Logout" data-toggle="tooltip">
                        <i data-feather="log-out"></i>
                    </a>
                </li>
            </ul>
        </div>
    </header>
    <!-- end::navigation header -->