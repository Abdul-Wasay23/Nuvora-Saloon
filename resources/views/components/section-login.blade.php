{{-- Success message --}}
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<!-- login start -->
<section class="login">
    <div class="container">
        <div class="row">
            <!-- Login Column -->
            <div class="col-lg-6">
                <div class="login-txt">
                    <h3>Login Your Account</h3>

                    <form method="POST" id="login-form" action="{{ route('login') }}">
                        @csrf

                        <!-- Email -->
                        <input type="email" name="email" placeholder="Email Address" value="{{ old('email') }}" required autofocus>
                        @error('email') 
                            <span class="text-danger">{{ $message }}</span> 
                        @enderror

                        <!-- Password -->
                        <div class="password-box">
                            <div class="password-box-input">
                                <input id="password1" type="password" class="form-control" name="password" placeholder="Password" required>
                            </div>
                            <div class="password-icon">
                                <span class="toggle-password fa fa-eye" toggle="#password1"></span>
                            </div>
                        </div>
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <button type="submit">Log In</button>
                        <a href="{{ url('/temp-admin') }}" class="btn btn-danger">Go to Admin Dashboard (TEMP)</a>
                        <!-- Remember & Forgot -->
                        <ul>
                            <li>
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="remember">Remember me</label>
                            </li>
                            <li class="head">
                            <a href="{{ route('password.request') }}">Forgot Password?</a>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>

            <!-- Register Column -->
            <div class="col-lg-6">
                <div class="login-txt">
                    <h3>Register Your Account</h3>

                    <form method="POST" id="register-form" action="{{ route('register') }}">
                        @csrf

                        <div class="row">
                            <!-- Full Name -->
                            <div class="col-lg-12">
                                <input type="text" name="name" placeholder="Full Name" value="{{ old('name') }}" required>
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Email -->
                        <input type="email" name="email" placeholder="Email Address" value="{{ old('email') }}" required>
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <!-- Password -->
                        <div class="password-box">
                            <div class="password-box-input">
                                <input id="password2" type="password" class="form-control" name="password" placeholder="Password" required>
                            </div>
                            <div class="password-icon">
                                <span class="toggle-password fa fa-eye" toggle="#password2"></span>
                            </div>
                        </div>
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <!-- Confirm Password -->
                        <div class="password-box">
                            <div class="password-box-input">
                                <input id="password3" type="password" class="form-control" name="password_confirmation" placeholder="Retype Password" required>
                            </div>
                            <div class="password-icon">
                                <span class="toggle-password fa fa-eye" toggle="#password3"></span>
                            </div>
                        </div>

                        <ul class="justify-content-start">
                            <li>By creating an account, You agree to our</li>
                            <li class="head head-ex">Terms & Condition</li>
                        </ul>

                        <button type="submit">Create Account</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- login end -->



<script>
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#login-form').on('submit', function(e) {
        e.preventDefault(); // prevent reload
        var form = $(this);

        // Clear previous errors
        $('#login-email-error').text('');
        $('#login-password-error').text('');

        $.ajax({
            type: form.attr('method'),
            url: form.attr('action'),
            data: form.serialize(),
            success: function(response) {
                // Redirect based on response
                if(response.redirect) {
                    window.location.href = response.redirect;
                } else {
                    alert('Logged in successfully!');
                    form[0].reset();
                }
            },
            error: function(xhr) {
                if(xhr.status === 422) {
                    // Validation errors
                    let errors = xhr.responseJSON.errors;
                    if(errors.email) $('#login-email-error').text(errors.email[0]);
                    if(errors.password) $('#login-password-error').text(errors.password[0]);
                } else {
                    alert('Invalid credentials or something went wrong.');
                }
            }
        });
    });
});
</script>

<!-- Register AJAX -->
<script>
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#register-form').on('submit', function(e) {
        e.preventDefault(); // prevent reload
        var form = $(this);
        $.ajax({
            type: form.attr('method'),
            url: form.attr('action'),
            data: form.serialize(),
            success: function(response) {
                alert('Account created successfully!');
                form[0].reset();
            },
            error: function(xhr) {
                if (xhr.responseJSON && xhr.responseJSON.errors) {
                    var errors = xhr.responseJSON.errors;
                    var messages = [];
                    for (var field in errors) {
                        messages.push(errors[field].join(', '));
                    }
                    alert('Error: ' + messages.join(' | '));
                } else {
                    alert('Something went wrong.');
                }
            }
        });
    });
});
</script>
