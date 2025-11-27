@extends('layouts.app')

@section('title', 'User Dashboard') 

@section('content')

    @include('auth.dashboard.user.components.banner-dashboard')


    <!-- section dashboard-main-sec start -->
    <section class="dashboard-main-sec sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="dashboard-left-box">
                        <div class="dashboard-left-detail">
                            <div class="dashboard-left-detail-image">
                            <img src="{{ asset('images/pattern.jpg') }}" alt="pattern-img" class="pattern-img">
                            </div>
                            <div class="dashboard-left-detail-text">
                                <h3>User Dashboard</h3>
                               <a href="mailto:{{ Auth::user()->email }}">{{ Auth::user()->email }}</a>                          
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="theme-btn">Sign Out</button>
                                </form>
                            </div>
                        </div>                    
                    </div>
                </div>
                <div class="col-lg-9">
                    
                </div>
            </div>
        </div>
    </section>
    <!-- section dashboard-main-sec end  -->
@endsection
