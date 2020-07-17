<div class="header">

        <!-- begin::header left -->
        <ul class="navbar-nav">

            <!-- begin::navigation-toggler -->
            <li class="nav-item navigation-toggler">
                <a href="#" class="nav-link">
                    <i data-feather="menu"></i>
                </a>
            </li>
            <!-- end::navigation-toggler -->

            <!-- begin::header-logo -->
            <li class="nav-item" id="header-logo">
                    <a href="<?= base_url('client/home')?>">
                        <img class="logo" src="<?=base_url('assets/logo/Asset1.png')?>" alt="logo">
                        <img class="logo-sm" src="<?=base_url('assets/logo/Asset1.png')?>" alt="small logo">
                        <img class="logo-dark" src="<?=base_url('assets/logo/Asset1.png')?>" alt="dark logo">
                    </a>
                </li>
            <!-- end::header-logo -->
        </ul>
        <!-- end::header left -->

        <!-- begin::header-right -->
        <div class="header-right">
            <ul class="navbar-nav">

                <!-- begin::search-form -->
                <li class="nav-item search-form">
                    <div class="row">
                        <div class="col-md-6">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <div class="input-group-append">
                                        <button class="btn btn-default" type="button">
                                            <i data-feather="search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </li>
              
            </ul>

          
        </div>
        <!-- end::header-right -->
    </div>