<div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title d-flex align-items-start justify-content-between mb-0">
                                        <span>Pending Account</span>
                                        <span class="avatar">
                                            <span class="avatar-title bg-success text-white rounded-circle">
                                                <i class="fa fa-percent"></i>
                                            </span>
                                        </span>
                                    </h6>
                                    <div class="d-flex d-sm-block d-lg-flex align-items-end mb-3">
                                        <h3 class="mb-0 mr-2"><?= count($acct) ?></h3>                                        
                                        <p class="small text-muted mb-0 line-height-20">
                                            <span class="text-success">+ 1.2%</span> than last week
                                        </p>
                                    </div>
                                    <canvas id="widget-chart1"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title d-flex align-items-start justify-content-between mb-0">
                                        <span>Total Admin</span>
                                        <span class="avatar">
                                            <span class="avatar-title bg-warning text-white rounded-circle">
                                                <i class="fa fa-dollar"></i>
                                            </span>
                                        </span>
                                    </h6>
                                    <div class="d-flex d-sm-block d-lg-flex align-items-end mb-3">
                                        <h3 class="mb-0 mr-2"><?= count($admin) ?></h3>
                                        <p class="small text-muted mb-0 line-height-20">
                                            <span class="text-danger">-1.2%</span> than last week
                                        </p>
                                    </div>
                                    <canvas id="widget-chart2"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title d-flex align-items-start justify-content-between mb-0">
                                        <span>Registered Client</span>
                                        <span class="avatar">
                                            <span class="avatar-title bg-danger text-white rounded-circle">
                                                <i class="fa fa-cube"></i>
                                            </span>
                                        </span>
                                    </h6>
                                    <div class="d-flex d-sm-block d-lg-flex align-items-end mb-3">
                                        <h3 class="mb-0 mr-2"><?= count($user_account);  ?></h3>
                                        <p class="small text-muted mb-0 line-height-20">
                                            <span class="text-success">+ 2.1%</span> than last week
                                        </p>
                                    </div>
                                    <canvas id="widget-chart3"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>