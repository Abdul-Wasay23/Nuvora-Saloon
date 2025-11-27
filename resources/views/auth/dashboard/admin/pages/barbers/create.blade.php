@extends('layouts.app')

@section('title', 'Add Barber')

@section('content')
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

<section class="dashboard-main-sec sec">
    <div class="container">
        <h3>Add New Barber</h3>

        <form action="{{ route('admin.barbers.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="mb-3">
                <label>Designation</label>
                <input type="text" name="designation" class="form-control">
            </div>

            <div class="mb-3">
                <label>Facebook URL</label>
                <input type="text" name="facebook" class="form-control">
            </div>

            <div class="mb-3">
                <label>Twitter URL</label>
                <input type="text" name="twitter" class="form-control">
            </div>

            <div class="mb-3">
                <label>Instagram URL</label>
                <input type="text" name="instagram" class="form-control">
            </div>

            <div class="mb-3">
                <label>Barber Image</label>
                <input type="file" name="image" class="form-control">
            </div>

            <button class="theme-btn">Create Barber</button>
        </form>
    </div>
</section>
@endsection
