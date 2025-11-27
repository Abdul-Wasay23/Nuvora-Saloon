@extends('layout.app')

@section('title', 'Service Detail - Nuvora Saloon')

@section('content')

    <!-- Inner Banner -->
    <x-section-inner-banner title="Service Detail" />

    <!-- Inner Services Detail Start -->
    <section class="inner-services-sec sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-12 md-order-2">
                    <div class="inner-services-left-side">
                        <div class="inner-services-img">
                            <img src="{{ asset('images/inner-ser-detail-1.jpg') }}" alt="Service Image">
                        </div>

                        <h2>Exceptional Haircut</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur.
                        </p>

                        <h3>How We Provide Service</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                            aliquip ex ea commodo consequat.
                        </p>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12 padding-right">
                                <div class="inner-services-box-img">
                                    <img src="{{ asset('images/inner-ser-detail-box-img-1.jpg') }}" alt="Detail Image 1">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 padding-left">
                                <div class="inner-services-box-img">
                                    <img src="{{ asset('images/inner-ser-detail-2.jpg') }}" alt="Detail Image 2">
                                </div>
                            </div>
                        </div>

                        <h2>Lorem Ipsum Dolor</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                            aliquip ex ea commodo consequat.
                        </p>

                        <ul>
                            <li><a href="javascript:void(0)">Lorem ipsum dolor sit amet consectetur.</a></li>
                            <li><a href="javascript:void(0)">Lorem ipsum dolor sit amet consectetur.</a></li>
                            <li><a href="javascript:void(0)">Lorem ipsum dolor sit amet consectetur.</a></li>
                            <li><a href="javascript:void(0)">Lorem ipsum dolor sit amet consectetur.</a></li>
                            <li><a href="javascript:void(0)">Lorem ipsum dolor sit amet consectetur.</a></li>
                            <li><a href="javascript:void(0)">Lorem ipsum dolor sit amet consectetur.</a></li>
                            <li><a href="javascript:void(0)">Lorem ipsum dolor sit amet consectetur.</a></li>
                            <li><a href="javascript:void(0)">Lorem ipsum dolor sit amet consectetur.</a></li>
                        </ul>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur.
                        </p>
                        <a href="{{ url('/appointment') }}" class="theme-btn">Book Now</a>

                    </div>
                </div>

                <div class="col-lg-3 col-md-12 col-12 md-order-1">
                    <div class="service-category-box">
                        <h2>Service Category</h2>
                        <h3>Hair Color</h3>
                        <ul>
                            <li>
                                <a href="#">
                                    <span class="ser-btn">Hair Extensions</span>
                                    <span><i class="fas fa-angle-right"></i></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="ser-btn">Hair Treatments</span>
                                    <span><i class="fas fa-angle-right"></i></span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="how-can-we-help-box">
                        <div class="how-can-we-help-box-img">
                            <img src="{{ asset('images/how-can-we-help-box-img.jpg') }}" alt="Help Image">
                        </div>
                        <div class="how-can-we-help-box-icon">
                            <img src="{{ asset('images/how-can-we-help-box-icon.png') }}" alt="Help Icon">
                        </div>
                        <h2>How Can We Help</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
                        <a href="{{ url('/contactus') }}" class="theme-btn">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Inner Services Detail End -->

@endsection
