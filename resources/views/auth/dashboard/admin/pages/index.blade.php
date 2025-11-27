@extends('layouts.app')

@section('title', 'Admin Dashboard') 

@section('content')

    <!-- Banner -->
    @include('auth.dashboard.admin.components.banner-dashboard')

    <!-- section dashboard-main-sec start -->
    <section class="dashboard-main-sec sec">
        <div class="container">
            <div class="row">

                <!-- Sidebar -->
                <div class="col-lg-3">
                    @include('auth.dashboard.admin.components.sidebar')
                </div>

                <!-- Main Content -->
                <div class="col-lg-9">
                    <!-- Header (optional, can be inside content) -->
                    @include('auth.dashboard.admin.components.header')

                    <!-- Tab content area -->
                    <div class="admin-dashboard tab-content p-3 border rounded">
                        @include('auth.dashboard.admin.components.manage-sections')
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- section dashboard-main-sec end  -->

@endsection
