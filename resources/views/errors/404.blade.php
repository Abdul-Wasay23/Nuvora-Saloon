
@extends('layout.app')

@section('title', 'Page Not Found - Nuvora Saloon')

@section('content')

    <!-- Inner Banner -->
    <x-section-inner-banner title="404 Error" />

    <!-- Error Section Start -->
    <section class="error-page-sec sec">
        <div class="container text-center">
            <div class="error-content">
                <h1 class="error-title">Oops! Page Not Found</h1>
                <p class="error-text">
                    The page you’re looking for doesn’t exist or has been moved.  
                    Please check the URL or go back to the homepage.
                </p>
                <div class="mt-4">
                    <a href="{{ url('/') }}" class="theme-btn style1">Back to Home</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Error Section End -->

@endsection
