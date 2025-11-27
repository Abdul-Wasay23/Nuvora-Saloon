<div class="dashboard-left-box">
  <div class="dashboard-left-detail">
    <div class="dashboard-left-detail-image">
        <img src="{{ asset('images/pattern.jpg') }}" alt="pattern-img" class="pattern-img">
    </div>
    <div class="dashboard-left-detail-text">
        <h4>Admin Dashboard</h4>
       <a href="mailto:{{ auth()->user()->email }}">{{ auth()->user()->email }}</a>
        {{-- Sign Out Form --}}
        <form method="POST" action="{{ route('logout') }}" style="display:inline;">
            @csrf
            <button type="submit" class="theme-btn">Sign Out</button>
        </form>
    </div>
</div>

    <div class="dashboard-left-nav">
        <ul class="dashboard-left-nav-list nav flex-column active collapse show" role="tablist">

            <!-- HOME PAGE -->
            <li class="nav-item nav-inner">
                <a class="nav-link dropdown-btn active" data-bs-toggle="collapse"
                    href="#homeDropdown">
                    Home Page <i class="fa-solid fa-caret-down float-end"></i>
                </a>

                <ul id="homeDropdown" class="collapse nav flex-column" role="tablist">

                    <li class="nav-item">
                        <a href="#ManageHeader" class="nav-link" data-bs-toggle="tab" role="tab">
                            Manage Header
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#ManageBanner" class="nav-link" data-bs-toggle="tab" role="tab">
                            Manage Banner
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#ManageServices" class="nav-link" data-bs-toggle="tab" role="tab">
                            Manage Services
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#ManageAboutUs" class="nav-link" data-bs-toggle="tab" role="tab">
                            Manage About Us
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#ManageHours" class="nav-link" data-bs-toggle="tab" role="tab">
                            Manage Hours
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#ManageBarber" class="nav-link" data-bs-toggle="tab" role="tab">
                            Manage Barber
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#ManageGallery" class="nav-link" data-bs-toggle="tab" role="tab">
                            Manage Gallery
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#ManagePrice" class="nav-link" data-bs-toggle="tab" role="tab">
                            Manage Price
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#ManageTestimonial" class="nav-link" data-bs-toggle="tab"
                            role="tab">
                            Manage Testimonial
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#ManageFooter" class="nav-link" data-bs-toggle="tab" role="tab">
                            Manage Footer
                        </a>
                    </li>

                </ul>

            </li>

            <!-- Other Pages -->
            <!-- <li class="nav-item">
                <a href="#AboutPage" class="nav-link" data-bs-toggle="tab">About Page</a>
            </li>
            <li class="nav-item">
                <a href="#ServicesPage" class="nav-link" data-bs-toggle="tab">Services Page</a>
            </li>
            <li class="nav-item">
                <a href="#PricingPage" class="nav-link" data-bs-toggle="tab">Pricing Page</a>
            </li>
            <li class="nav-item">
                <a href="#GalleryPage" class="nav-link" data-bs-toggle="tab">Gallery Page</a>
            </li>
            <li class="nav-item">
                <a href="#OurTeamPage" class="nav-link" data-bs-toggle="tab">Our Team Page</a>
            </li>
            <li class="nav-item">
                <a href="#ContactUsPage" class="nav-link" data-bs-toggle="tab">Contact Us Page</a>
            </li> -->

        </ul>
    </div>

</div>
