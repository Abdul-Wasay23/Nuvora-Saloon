@extends('layouts.app')

@section('title', 'Edit Barber')

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
        <h3>Edit Barber</h3>

        <form action="{{ route('admin.barbers.update', $barber->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="{{ $barber->name }}">
            </div>

            <div class="mb-3">
                <label>Designation</label>
                <input type="text" name="designation" class="form-control" value="{{ $barber->designation }}">
            </div>

            <div class="mb-3">
                <label>Facebook URL</label>
                <input type="text" name="facebook" class="form-control" value="{{ $barber->facebook }}">
            </div>

            <div class="mb-3">
                <label>Twitter URL</label>
                <input type="text" name="twitter" class="form-control" value="{{ $barber->twitter }}">
            </div>

            <div class="mb-3">
                <label>Instagram URL</label>
                <input type="text" name="instagram" class="form-control" value="{{ $barber->instagram }}">
            </div>

            <div class="mb-3">
                <label>Barber Image</label>
                <input type="file" name="image" class="form-control">
                @if($barber->image)
                <img src="{{ asset('storage/'.$barber->image) }}" width="50" class="mt-2 update-baber-img">
                @endif
            </div>

            <button class="theme-btn">Update Barber</button>
        </form>
    </div>
</section>
@endsection
