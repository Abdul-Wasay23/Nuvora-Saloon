@php
$totalServices = \App\Models\Service::count();
@endphp
<div class="alert-container">
   @if(session('success'))
   <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success!</strong> {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>
   @endif
   @if(session('error'))
   <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Error!</strong> {{ session('error') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>
   @endif
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
<div class="dashboard-content">
   <div class="tab-pane fade show active" id="HomePage">
      <h3>Home Page</h3>
      <p>Content for Home Page tab.</p>
   </div>
   <div class="tab-pane fade" id="ManageHeader">
      <h3>Manage Header</h3>
      <p>Content for Manage Header tab.</p>
   </div>
   <div class="tab-pane fade" id="ManageBanner">
      <h3>Manage Banner</h3>
      <p>Content for Manage Banner tab.</p>
   </div>
   <div class="tab-pane fade" id="ManageServices">
      <h3>Manage Services</h3>
      <div class="d-flex gap-10 mb-5">

         <a href="{{ route('admin.services.create') }}" class="theme-btn ">Add New Service</a>

         <a href="{{ $totalServices > 4 ? route('services') : route('index') }}" class="black-btn theme-btn ">
            View Services
         </a>
      </div>
      <table class="table table-bordered">
         <thead>
            <tr>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Image</th>
                  <th>Actions</th>
            </tr>
         </thead>
         <tbody>
            @foreach($services as $service)
            <tr>
                  <td>{{ $service->title }}</td>
                  <td>{{ $service->description }}</td>
                  <td>
                     @if($service->image)
                        <img src="{{ asset('storage/'.$service->image) }}" width="40" class="service-table-image" alt="">
                     @endif
                  </td>
                  <td>
                     <div class="service-manage">
                        <!-- Updated route names for edit & destroy -->
                        <a href="{{ route('admin.services.edit', $service->id) }}" class="theme-btn sm-btn">Edit</a>
                        <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST" class="d-inline">
                              @csrf
                              @method('DELETE')
                              <button class="theme-btn sm-btn black-btn">Delete</button>
                        </form>
                     </div>
                  </td>
            </tr>
            @endforeach
         </tbody>
      </table>
   </div>

   <div class="tab-pane fade" id="ManageAboutUs">
      <h3>Manage About Us</h3>
      <p>Content for Manage About Us tab.</p>
   </div>
   <div class="tab-pane fade" id="ManageHours">
      <h3>Manage Hours</h3>
      <p>Content for Manage Hours tab.</p>
   </div>
   <div class="tab-pane fade" id="ManageBarber">
   <h3>Manage Barber</h3>

   <div class="d-flex gap-10 mb-5">
      <a href="{{ route('admin.barbers.create') }}" class="theme-btn">Add New Barber</a>
      <a href="{{ route('index') }}#barber-section" class="black-btn theme-btn">View Barber Section</a>
   </div>

   <table class="table table-bordered">
      <thead>
         <tr>
            <th>Name</th>
            <th>Designation</th>
            <th>Image</th>
            <th>Actions</th>
         </tr>
      </thead>

      <tbody>
         @foreach($barbers as $barber)
         <tr>
            <td>{{ $barber->name }}</td>
            <td>{{ $barber->designation }}</td>
            <td>
               @if($barber->image)
               <img src="{{ asset('storage/'.$barber->image) }}" width="20" class="barber-admin-img" alt="">
               @endif
            </td>
            <td>
               <div class="service-manage">

                  <a href="{{ route('admin.barbers.edit', $barber->id) }}" class="theme-btn sm-btn">Edit</a>
                  <form action="{{ route('admin.barbers.destroy', $barber->id) }}" method="POST" class="d-inline">
                     @csrf
                     @method('DELETE')
                     <button class="theme-btn sm-btn black-btn">Delete</button>
                  </form>
               </div>
            </td>
         </tr>
         @endforeach
      </tbody>
   </table>
   </div>

   <div class="tab-pane fade" id="ManageGallery">
      <h3>Manage Gallery</h3>
      <p>Content for Manage Gallery tab.</p>
   </div>
   <div class="tab-pane fade" id="ManagePrice">
      <h3>Manage Price</h3>
      <p>Content for Manage Price tab.</p>
   </div>
   <div class="tab-pane fade" id="ManageTestimonial">
      <h3>Manage Testimonial</h3>
      <p>Content for Manage Testimonial tab.</p>
   </div>
   <div class="tab-pane fade" id="ManageFooter">
      <h3>Manage Footer</h3>
      <p>Content for Manage Footer tab.</p>
   </div>
   <!-- Other main pages -->
   <div class="tab-pane fade" id="AboutPage">
      <h3>About Page</h3>
      <p>Content for About Page tab.</p>
   </div>
   <div class="tab-pane fade" id="ServicesPage">
      <h3>Services Page</h3>
      <p>Content for Services Page tab.</p>
   </div>
   <div class="tab-pane fade" id="PricingPage">
      <h3>Pricing Page</h3>
      <p>Content for Pricing Page tab.</p>
   </div>
   <div class="tab-pane fade" id="GalleryPage">
      <h3>Gallery Page</h3>
      <p>Content for Gallery Page tab.</p>
   </div>
   <div class="tab-pane fade" id="OurTeamPage">
      <h3>Our Team Page</h3>
      <p>Content for Our Team Page tab.</p>
   </div>
   <div class="tab-pane fade" id="ContactUsPage">
      <h3>Contact Us Page</h3>
      <p>Content for Contact Us Page tab.</p>
   </div>
</div>