@extends('dashboard.admin.layouts.master')
@section('content')
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
                        <form action="{{ route('admin.users.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card">
                                <div class="card-header">
                                    <h4>{{ $title }}</h4>
                                </div>
                                <div class="card-body">
                                    <!-- Form content goes here -->
                                </div>
                                <div class="card-footer"></div>
                            </div>
                        </form>
                    </div>
                </div>




            </div>
        </section>
    </div>
@endsection
