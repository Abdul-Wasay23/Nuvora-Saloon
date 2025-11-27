@extends('layouts.app')

@section('title', 'Home - Nuvora Saloon')

@section('content')

  <!-- banner start -->
    <x-section-banner />
  <!-- banner end -->

  <!-- section services-sec start -->
    <x-section-services />
  <!-- section services-sec end -->

  <!-- about_sec start -->
  <x-section-about />
  <!-- about_sec end -->

  <!-- section hour-sec start -->
  <x-section-hours />
  <!-- section hour-sec end  -->

  <!-- section barber-sec start -->
  <x-section-barber :limit="3" />
  <!-- section barber-sec end  -->

  <!-- section gallery-sec start -->
  <x-section-gallery />
  <!-- section gallery-sec end  -->

  <!-- section price-sec start -->
  <x-section-price />
  <!-- section price-sec end  -->

  <!-- Testimonial Section Start -->
  <x-section-testimonial />
  <!-- Testimonial Section End -->

@endsection