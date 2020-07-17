
            <div class="row">
                <div class="col-md-12" >
                    <div class="row" >
                        <div class="col-md-4 col-6">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title d-flex align-items-start justify-content-between mb-0">
                                        <span> Balance</span>
                                        <span class="avatar">
                                            <span class="avatar-title bg-success text-white rounded-circle">
                                                <i class="fa fa-percent"></i>
                                            </span>
                                        </span>
                                    </h6>
                                    <div class="d-flex d-sm-block d-lg-flex align-items-end mb-3">
                                        <div></div>
                                        <h3 class="mb-0 mr-2">$<?= $transaction->balance; ?></h3>
                                        <p class="small text-muted mb-0 line-height-20">
                                        </p>
                                    </div>
                                    <span class="text-success">active</span>

                                    <canvas id="widget-chart1"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title d-flex align-items-start justify-content-between mb-0">
                                        <span>Invested</span>
                                        <span class="avatar">
                                            <span class="avatar-title bg-warning text-white rounded-circle">
                                                <i class="fa fa-dollar"></i>
                                            </span>
                                        </span>
                                    </h6>
                                    <div class="d-flex d-sm-block d-lg-flex align-items-end mb-3">
                                        <h3 class="mb-0 mr-2">$<?= $transaction->invested; ?></h3>
                                        <p class="small text-muted mb-0 line-height-20">
                                        </p>
                                    </div>
                                    <span class="text-success"></span>recent

                                    <canvas id="widget-chart2"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title d-flex align-items-start justify-content-between mb-0">
                                        <span>Account Status</span>
                                        <span class="avatar">
                                            <span class="avatar-title bg-danger text-white rounded-circle">
                                                <i class="fa fa-cube"></i>
                                            </span>
                                        </span>
                                    </h6>
                                    <div class="d-flex d-sm-block d-lg-flex align-items-end mb-3">
                                        <h3 class="mb-0 mr-2"><?= $transaction->status; ?></h3>
                                        <p class="small text-muted mb-0 line-height-20">
                                        </p>
                                    </div>
                                    <span class="text-success">active</span>

                                    <canvas id="widget-chart3"></canvas>
                                </div>
                            </div>
                        </div>

                        
                        <div class="col-md-4 col-6">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Account Type</h6>
                                    <div class="text-center">
                                        <div class="font-size-30 mb-1 font-weight-bold text-primary"><?= $transaction->account_type; ?></div>
                                        <p class="mb-0 text-muted">
                                            <i class="fa fa-caret-up text-success m-r-5"></i>active
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Total Withdrawal</h6>
                                    <div class="text-center">
                                        <div class="font-size-30 mb-1 font-weight-bold text-primary">$<?= $transaction->withdrawal; ?></div>
                                        <p class="mb-0 text-muted">
                                            <i class="fa fa-caret-down text-primary m-r-5"></i> Withdrawals
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Total Connection</h6>
                                    <div class="text-center">
                                        <div class="font-size-30 mb-1 font-weight-bold text-primary">468k</div>
                                        <p class="mb-0 text-muted">
                                            <i class="fa fa-caret-up text-primary m-r-5"></i> 53% increase
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>