
<footer>
    <div class="container">
        <div class="row">
            <!-- About Us -->
            <div class="col-lg-3 col-md-4 col-12">
                <div class="heading-footer wow fadeInUp" data-wow-duration="2s">
                    <span class="f22">About Us</span>
                </div>
                <div class="text-ft-about wow fadeInUp" data-wow-duration="2s">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry.
                    </p>
                </div>
                <div class="freeshiping-text wow fadeInUp" data-wow-duration="2s">
                    <div class="heading-footer">
                        <span class="f22">Info</span>
                    </div>
                    <div class="text-ft-about wow fadeInUp" data-wow-duration="2s">
                        <ul>
                            <li><a href="mailto:info@gmail.com"><span>E:</span> info@gmail.com</a></li>
                            <li><a href="tel:123-456-7890"><span>T:</span> 123-456-7890</a></li>
                            <li><a href="#"><span>Y:</span> yourwebsite.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-3 col-md-4 col-12">
                <div class="heading-footer pg-ft-links-main wow fadeInUp" data-wow-duration="2s">
                    <span class="f22">Quick Links</span>
                </div>
                <div class="quicklinks-ft">
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/aboutus') }}">About Us</a></li>
                        <li><a href="{{ url('/services') }}">Services</a></li>
                        <li><a href="{{ url('/pricing') }}">Pricing / Packages</a></li>
                        <li><a href="{{ url('/gallery') }}">Gallery</a></li>
                        <li><a href="{{ url('/team') }}">Our Team</a></li>
                        <li><a href="{{ url('/contactus') }}">Contact Us</a></li>
                    </ul>
                </div>
            </div>

            <!-- Services -->
            <div class="col-lg-3 col-md-4 col-12">
                <div class="heading-footer pg-ft-links-main wow fadeInUp" data-wow-duration="2s">
                    <span class="f22">Services</span>
                </div>
                <div class="quicklinks-ft">
                    <ul>
                        <li><a href="{{ url('/service-detail') }}">Hair Color</a></li>
                        <li><a href="{{ url('/service-detail') }}">Hair Extensions</a></li>
                        <li><a href="{{ url('/service-detail') }}">Hair Cut</a></li>
                    </ul>
                </div>
                <div class="freeshiping-text pg-ft-links-main wow fadeInUp" data-wow-duration="2s">
                    <div class="heading-footer">
                        <span class="f22">Call Us Today</span>
                    </div>
                    <a href="tel:+1234567890">+123-456-7890</a>
                </div>
            </div>

            <!-- Newsletter -->
            <div class="col-md-6 col-lg-3">
                <div class="footer_col wow fadeInUp" data-wow-duration="2s">
                    <div class="heading-footer">
                        <span class="f22">Newsletters</span>
                    </div>
                    <div class="text-ft-about">
                        <p>Sign Up For Our Newsletter To Get Up to Date From Us</p>
                    </div>
                    <div class="footer_form">
                        <form method="POST" action="#">
                            @csrf
                            <input type="email" name="email" placeholder="Enter Your Email" required>
                            <button type="submit">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ft-bottom-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright © {{ date('Y') }} Nuvora Salon. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>