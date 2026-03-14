@extends('dashboard.admin.layouts.master')
@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card card-statistic-2">
                        <div class="card-icon shadow-primary bg-primary">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Users</h4>
                            </div>
                            <div class="card-body">
                                {{ $countUsers }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card card-statistic-2">
                        <div class="card-icon shadow-primary bg-primary">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Transactions</h4>
                            </div>
                            <div class="card-body">
                                {{ $countTransactions }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card card-statistic-2">
                        <div class="card-icon shadow-primary bg-primary">
                            <i class="fas fa-shopping-bag"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Sales</h4>
                            </div>
                            <div class="card-body">
                                4,732
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section>
            <div class="col-12">
                <div class="card card-statistic-2">
                    <div class="card-icon shadow-primary bg-primary">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Transaction Generator</h4>
                        </div>
                        <div class="card-body">
                            Generate synthetic transaction for testing
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
