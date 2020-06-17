 <!-- begin::navigation menu -->
 <div class="navigation-menu-body">
        <ul>
            <li class="navigation-divider">Account</li>
            <li class="open">
                <a href="<?= base_url('client/home')?>">
                    <i class="nav-link-icon" data-feather="bar-chart-2"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <?php if($transaction->status == 'Unverified'): ?>
            <li>
                <a href="<?= base_url('client/home/verify') ?>">
                    <i class="nav-link-icon" data-feather="check-circle"></i>
                    <span>Verify account</span>
                    <span class="badge badge-warning">2</span>
                </a>
            </li>
            <?php endif ?>
            <li>
                <a href="<?= base_url('client/home/live_trade') ?>">
                    <i class="nav-link-icon" data-feather="monitor"></i>
                    <span>Live trade</span>
                    <span class="badge badge-success">2</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('client/home/fund_account') ?>">
                    <i class="nav-link-icon" data-feather="send"></i>
                    <span>Fund account</span>
                    <span class="badge badge-success">2</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('client/home/withdraw') ?>">
                    <i class="nav-link-icon" data-feather="mouse-pointer"></i>
                    <span>Withdraw</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('client/home/upgrade') ?>">
                    <i class="nav-link-icon" data-feather="copy"></i>
                    <span>Upgrade account</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('client/home/history') ?>">
                    <i class="nav-link-icon" data-feather="pie-chart"></i>
                    <span>Trade history</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('client/home/support')?>">
                    <i class="nav-link-icon" data-feather="message-circle"></i>
                    <span>Customer Support</span>
                    <span class="badge badge-success">2</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="nav-link-icon" data-feather="mail"></i>
                    <span>Live Chat Support</span>
                    <span class="badge badge-success">2</span>
                </a>
            </li>
           
            <li>
                <a href="<?= base_url('client/home/profile') ?>">
                    <i class="nav-link-icon" data-feather="menu"></i>
                    <span>Account details</span>
                </a>
            </li>
            <!-- <li>
                <a href="file-manager.html">
                    <i class="nav-link-icon" data-feather="file"></i>
                    <span>File Manager</span>
                </a>
            </li>
            <li>
                <a href="calendar.html">
                    <i class="nav-link-icon" data-feather="calendar"></i>
                    <span>Calendar</span>
                </a>
            </li>
            
            
            <li>
                <a href="#">
                    <i class="nav-link-icon" data-feather="globe"></i>
                    <span>Plugins</span>
                </a>
                <ul>
                    <li><a href="sweet-alert.html">Sweet Alert</a></li>
                    <li><a href="lightbox.html">Lightbox</a></li>
                    <li><a href="toast.html">Toast</a></li>
                    <li><a href="tour.html">Tour</a></li>
                    <li><a href="slick-slide.html">Slick Slide</a></li>
                    <li><a href="nestable.html">Nestable</a></li>
                </ul>
            </li>
            
            <li>
                <a href="#">
                    <i class="nav-link-icon" data-feather="grid"></i>
                    <span>Tables</span>
                </a>
                <ul>
                    <li><a href="tables.html">Basic Tables</a></li>
                    <li><a href="data-table.html">Datatable</a></li>
                    <li><a href="responsive-table.html">Responsive Tables</a></li>
                </ul>
            </li>
            
            <li>
                <a href="#">
                    <i class="nav-link-icon" data-feather="map-pin"></i>
                    <span>Maps</span>
                </a>
                <ul>
                    <li><a href="google-map.html">Google</a></li>
                    <li><a href="vector-map.html">Vector</a></li>
                </ul>
            </li> -->
            <li class="navigation-divider">Extras</li>
            <li>
                <a href="#">
                    <i class="nav-link-icon" data-feather="user"></i>
                    <span>Authentication</span>
                </a>
                <ul>
                    <li><a href="<?= base_url('client/home/change_email') ?>">Change Email</a></li>
                    <li><a href="<?= base_url('client/home/phone') ?>">Change Mobile No</a></li>
                    <li><a href="<?= base_url('client/login/change_password') ?>">Change Password</a></li>
                    <li><a href="<?= base_url('client/home/logout') ?>">Log Out</a></li>
                </ul>
            </li>
            
            
            
        </ul>
    </div>
    <!-- end::navigation menu -->

</div>
<!-- end::navigation -->