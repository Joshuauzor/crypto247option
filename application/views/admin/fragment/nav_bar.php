 <!-- begin::navigation menu -->
 <div class="navigation-menu-body">
        <ul>
            <li class="navigation-divider">Main</li>
            <li class="open">
                <a href="<?= base_url('admin/home') ?>">
                    <i class="nav-link-icon" data-feather="bar-chart-2"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="nav-link-icon" data-feather="message-circle"></i>
                    <span>Live Chat Support</span>
                    <span class="badge badge-success">2</span>
                </a>
            </li>
            <!-- <li>
                <a href="inbox.html">
                    <i class="nav-link-icon" data-feather="mail"></i>
                    <span>Mail</span>
                    <span class="badge badge-success">2</span>
                </a>
            </li> -->
            <li>
                <a href="<?= base_url('admin/home/approve') ?>">
                    <i class="nav-link-icon" data-feather="check-circle"></i>
                    <span>Approved Account</span>
                    <span class="badge badge-success">2</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="nav-link-icon" data-feather="monitor"></i>
                    <span>Declined Account</span>
                    <span class="badge badge-danger">2</span>
                </a>
              </li>
        
              <li>
                <a href="<?= base_url('admin/home/reset_account')?>">
                    <i class="nav-link-icon" data-feather="copy"></i>
                    <span>Delete Client Account </span>
                    <span class="badge badge-danger">2</span>
                </a>
            </li>

            <li class="navigation-divider">Extras</li>
            <li>
                <a href="#">
                    <i class="nav-link-icon" data-feather="user"></i>
                    <span>Authentication</span>
                </a>
                <ul>
                    <li><a href="<?= base_url('admin/register') ?>">Register New Admin</a></li>
                    <li><a href="<?= base_url('admin/home/change_email') ?>">Change Email</a></li>
                    <li><a href="<?= base_url('admin/home/phone') ?>">Change Mobile No</a></li>
                    <li><a href="<?= base_url('admin/login/recover')?>">Change Password</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- end::navigation menu -->