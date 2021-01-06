@extends('layouts.dashboard')

@section('title')
    ArtSneakers.id - Stay Hype
@endsection

@section('content')
<div
        class="section-content section-dashboard-home"
        data-aos="fade-up"
        >
        <div class="container-fluid">
            <div class="dashboard-heading">
            <h2 class="dashboard-title">Dashboard</h2>
            <p class="dashboard-subtitle">Look what you have made today!</p>
            </div>

            <div class="dashboard-content">
            <div class="row">
                <div class="col-md-4">
                <div class="card mb-2">
                    <div class="card-body">
                    <div class="dashboard-card-title">Customer</div>
                    <div class="dashboard-card-subtitle">12,421</div>
                    </div>
                </div>
                </div>

                <div class="col-md-4">
                <div class="card mb-2">
                    <div class="card-body">
                    <div class="dashboard-card-title">Revenue</div>
                    <div class="dashboard-card-subtitle">Rp201,450,000</div>
                    </div>
                </div>
                </div>

                <div class="col-md-4">
                <div class="card mb-2">
                    <div class="card-body">
                    <div class="dashboard-card-title">Transaction</div>
                    <div class="dashboard-card-subtitle">40,012</div>
                    </div>
                </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-12 mt-2">
                <h5 class="mb-3">Recent Transactions</h5>
                <a
                    class="card card-list d-block"
                    href="/dashboard-transactions-details.html"
                >
                    <div class="card-body">
                    <div class="row">
                        <div class="col-md-1">
                        <img
                            src="/images/dashboard/dashboard_product1.png"
                            alt=""
                            width="80px"
                        />
                        </div>
                        <div class="col-md-4">NIKE KYRIE KYBRID S2 EP</div>
                        <div class="col-md-3">ArtSneakers</div>
                        <div class="col-md-3">12 Desember, 2020</div>
                        <div class="col-md-1 d-none d-md-block">
                        <img
                            src="/images/dashboard-arrow-right.svg"
                            alt=""
                            width="10px"
                        />
                        </div>
                    </div>
                    </div>
                </a>

                <a
                    class="card card-list d-block"
                    href="/dashboard-transactions-details.html"
                >
                    <div class="card-body">
                    <div class="row">
                        <div class="col-md-1">
                        <img
                            src="/images/dashboard/dashboard_product2.png"
                            alt=""
                            width="80px"
                        />
                        </div>
                        <div class="col-md-4">NMD_R1 Shoes</div>
                        <div class="col-md-3">Hoops Point</div>
                        <div class="col-md-3">2 September, 2020</div>
                        <div class="col-md-1 d-none d-md-block">
                        <img
                            src="/images/dashboard-arrow-right.svg"
                            alt=""
                            width="10px"
                        />
                        </div>
                    </div>
                    </div>
                </a>

                <a
                    class="card card-list d-block"
                    href="/dashboard-transactions-details.html"
                >
                    <div class="card-body">
                    <div class="row">
                        <div class="col-md-1">
                        <img
                            src="/images/dashboard/dashboard_product3.png"
                            alt=""
                            width="80px"
                        />
                        </div>
                        <div class="col-md-4">NIKE KYRIE 6 TB EP</div>
                        <div class="col-md-3">SneakersCop.id</div>
                        <div class="col-md-3">30 Juli, 2020</div>
                        <div class="col-md-1 d-none d-md-block">
                        <img
                            src="/images/dashboard-arrow-right.svg"
                            alt=""
                            width="10px"
                        />
                        </div>
                    </div>
                    </div>
                </a>
                </div>
            </div>
            </div>
        </div>
        </div>
@endsection