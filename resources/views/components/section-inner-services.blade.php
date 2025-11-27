@php
$services = \App\Models\Service::all();
@endphp

<section class="categ-sec sec">
  <div class="container">
    <div class="row justify-content-center">
        @foreach($services as $service)
        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-10 col-12">
            <div class="categ-card">
                <div class="categ-card-image">
                    <a href="#">
                        <img src="{{ asset('storage/'.$service->image) }}" alt="{{ $service->title }}">
                    </a>
                </div>
                <div class="categ-card-text">
                    <h4>{{ $service->title }}</h4>
                    <p>{{ $service->description }}</p>
                    <a href="{{ url('/service-detail') }}" class="theme-btn">View Detail</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="service-book-btn mt-4">
        <a href="{{ url('/appointment') }}" class="theme-btn">Book Any Service Now</a>
    </div>
</section>
