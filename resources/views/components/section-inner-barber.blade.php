@php
// Innerpage ke liye sab barbers fetch kar rahe hain
$barbers = \App\Models\Barber::orderBy('id', 'desc')->get();
@endphp

<!-- section barber-sec start -->
<section class="barber-sec sec" id="barber-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="grid-heading barber-heading text-center">
          <h2 data-aos="fade-up" data-aos-offset="200" data-aos-duration="1000">
            OUR BARBER
          </h2>
          <h6 data-aos="fade-up" data-aos-offset="200" data-aos-duration="1000">
            Get Your BEARD
          </h6>
          <div class="scissor-design" data-aos="fade-up" data-aos-offset="200" data-aos-duration="1000">
            <img src="{{ asset('images/scissor.png') }}" alt="scissor" class="scissor-img" />
          </div>
        </div>
      </div>
    </div>

    <div class="row justify-content-center">
      @foreach($barbers as $barber)
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-10 col-12">
        <div class="barber-card" data-aos="zoom-in" data-aos-offset="200" data-aos-duration="1000">
          <div class="barber-card-image img-hover">
            <a href="#">
              @if($barber->image)
                <img src="{{ asset('storage/'.$barber->image) }}" alt="{{ $barber->name }}" class="barber-img" />
              @else
                <img src="{{ asset('images/default-barber.png') }}" alt="{{ $barber->name }}" class="barber-img" />
              @endif
            </a>
          </div>
          <div class="barber-card-text">
            <h5>{{ $barber->name }}</h5>
            <p>{{ $barber->designation }}</p>
            <ul class="barber-list">
              @if($barber->facebook)<li><a href="{{ $barber->facebook }}"><i class="fa-brands fa-facebook-f"></i></a></li>@endif
              @if($barber->twitter)<li><a href="{{ $barber->twitter }}"><i class="fa-brands fa-x-twitter"></i></a></li>@endif
              @if($barber->instagram)<li><a href="{{ $barber->instagram }}"><i class="fa-brands fa-instagram"></i></a></li>@endif
            </ul>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
<!-- section barber-sec end -->
