@extends('dashboard.admin.layouts.master')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f6f8fb;
        }

        .title {
            font-weight: 700;
            margin-bottom: 20px;
        }

        .switch-container {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }

        .switch-btn {
            flex: 1;
            border: 1px solid #e2e6ea;
            background: #eef1f5;
            padding: 10px;
            border-radius: 8px;
            font-weight: 500;
            cursor: pointer;
        }

        .switch-btn.active {
            background: #e6eaef;
        }

        .card {
            border-radius: 10px;
            border: 1px solid #e6e9ef;
        }

        .card-body {
            padding: 28px;
        }

        .section-title {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .btn-main {
            background: #7da2c4;
            border: none;
            padding: 12px;
            width: 100%;
            color: white;
            border-radius: 6px;
        }

        .info-box {
            background: #eef2f7;
            padding: 12px;
            border-radius: 8px;
            font-size: 14px;
            color: #64748b;
        }

        .hidden {
            display: none;
        }
    </style>



    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>{{ $title }}</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Forms</a></div>
                    <div class="breadcrumb-item">{{ $title }}</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">{{ $title }}</h2>
                <p class="section-lead"></p>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header"></div>
                            <div class="card-body">

                                <div class="container py-4">

                                    <h3 class="title">Transaction Management</h3>

                                    <div class="switch-container">

                                        <button id="createBtn" class="switch-btn active">
                                            + Create Transaction
                                        </button>

                                        <button id="autoBtn" class="switch-btn">
                                            ⚡ Auto Generate
                                        </button>

                                    </div>


                                    <!-- CREATE TRANSACTION PANEL -->

                                    <div id="createPanel">

                                        <div class="card">
                                            <div class="card-body">

                                                <div class="section-title">
                                                    + Create Single Transaction
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Select User</label>
                                                    <select class="form-select">
                                                        <option>Choose a user</option>
                                                    </select>
                                                </div>


                                                <div class="row">

                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Transaction Type *</label>
                                                        <select class="form-select">
                                                            <option>Debit (Outgoing)</option>
                                                            <option>Credit (Incoming)</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Amount *</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text">$</span>
                                                            <input type="number" class="form-control" placeholder="0.00">
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="mb-3">
                                                    <label class="form-label">Description *</label>
                                                    <input class="form-control"
                                                        placeholder="e.g., Direct Deposit - Payroll">
                                                </div>


                                                <div class="row">

                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Merchant/Source</label>
                                                        <input class="form-control" placeholder="e.g., Amazon, Chase">
                                                    </div>

                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Date (optional)</label>
                                                        <input type="datetime-local" class="form-control">
                                                    </div>

                                                </div>

                                                <button class="btn-main">
                                                    Create Transaction
                                                </button>

                                            </div>
                                        </div>

                                    </div>



                                    <!-- AUTO GENERATE PANEL -->

                                    <div id="autoPanel" class="hidden">

                                        <div class="card">
                                            <div class="card-body">

                                                <div class="section-title">
                                                    ⚡ Generate Random Transactions
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Select User</label>
                                                    <select class="form-select">
                                                        <option>Choose a user</option>
                                                    </select>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Number of Transactions (per
                                                        account)</label>
                                                    <input type="number" class="form-control" value="10">
                                                </div>


                                                <div class="row">

                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Start Date</label>
                                                        <input type="date" class="form-control">
                                                        <div class="form-text">Default: 30 days ago</div>
                                                    </div>

                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">End Date</label>
                                                        <input type="date" class="form-control">
                                                        <div class="form-text">Default: Today</div>
                                                    </div>

                                                </div>

                                                <div class="info-box mb-3">
                                                    ✔ Transactions are zero-sum balanced and spread across the date
                                                    range.
                                                </div>

                                                <button class="btn-main">
                                                    Generate Transactions
                                                </button>

                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>
                            <div class="card-footer"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
        const createBtn = document.getElementById("createBtn");
        const autoBtn = document.getElementById("autoBtn");

        const createPanel = document.getElementById("createPanel");
        const autoPanel = document.getElementById("autoPanel");


        createBtn.onclick = () => {

            createBtn.classList.add("active");
            autoBtn.classList.remove("active");

            createPanel.classList.remove("hidden");
            autoPanel.classList.add("hidden");

        };


        autoBtn.onclick = () => {

            autoBtn.classList.add("active");
            createBtn.classList.remove("active");

            autoPanel.classList.remove("hidden");
            createPanel.classList.add("hidden");

        };
    </script>
@endsection
