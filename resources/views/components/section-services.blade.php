@php
$services = \App\Models\Service::orderBy('id', 'desc')->take(4)->get();
@endphp

<section class="categ-sec sec">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="grid-heading barber-heading text-center">
          <h2 data-aos="fade-up" data-aos-offset="200" data-aos-duration="1000" class="aos-init aos-animate">
            OUR Services
          </h2>
          <h6 data-aos="fade-up" data-aos-offset="200" data-aos-duration="1000" class="aos-init aos-animate">
            Get Your BEARD
          </h6>          
        </div>
      </div>
    </div>
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
  </div>
</section>
