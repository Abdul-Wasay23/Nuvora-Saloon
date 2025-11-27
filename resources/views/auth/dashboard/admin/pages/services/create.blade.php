@extends('layouts.app')

@section('title', 'Create Service') 

@section('content')

    <!-- Banner -->
    @include('auth.dashboard.admin.components.banner-dashboard')

    {{-- Alerts container --}}
    <div class="alert-container">

        {{-- Success --}}
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        {{-- Error --}}
        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        {{-- Validation errors --}}
        @if($errors->any())
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Please fix the following:</strong>
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

    </div>

    <!-- section dashboard-main-sec start -->
    <section class="dashboard-main-sec sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="container mt-4">
                        <h2 class="black">Add New Service</h2>

                        <!-- Updated route here -->
                        <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Service Title</label>
                                <input type="text" name="title" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Service Description</label>
                                <textarea name="description" rows="4" class="form-control"></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Service Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>

                            <button type="submit" class="theme-btn">Create Service</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section dashboard-main-sec end  -->

@endsection
