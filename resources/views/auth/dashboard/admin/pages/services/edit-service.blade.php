@extends('layouts.app')

@section('title', 'Edit Service') 

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

    <div class="dashboard-main-sec sec">
        <div class="container">
            <h2 class="black">Edit Service</h2>

            <form action="{{ route('admin.services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label">Service Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $service->title) }}">
                    @error('title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Service Description</label>
                    <textarea name="description" id="description" class="form-control">{{ old('description', $service->description) }}</textarea>
                    @error('description')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Service Image</label>
                    <input type="file" name="image" id="image" class="form-control">
                    @if($service->image)
                        <div class="mt-2">
                            <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}" width="150" class="edit-service-img">
                        </div>
                    @endif
                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex gap-10">
                    <button type="submit" class="theme-btn sm-btm">Update Service</button>
                    <a href="{{ route('admin.services.index') }}" class="theme-btn sm-btm black-btn">Cancel</a>
                </div>
            </form>
        </div>
    </div>

@endsection
