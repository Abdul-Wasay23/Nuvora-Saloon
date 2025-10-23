<!-- login start -->
<section  class="login">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="login-txt">
                    <h3>Login Your Account</h3>
                    <form>
                        <input type="text" name="username" placeholder="User Name">
                        <div class="password-box">
                            <div class="password-box-input">
                                <input id="password1" type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <div class="password-icon">
                                <span class="toggle-password fa fa-eye" toggle="#password1"></span>
                            </div>
                        </div>
                        <button type="submit">Log In</button>
                    </form>
                    <ul>
                        <li><input type="checkbox" name="remember">Remember me</li>
                        <li class="head">
                            <a href="#">Forgot Password? </a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="login-txt">
                    <h3>Register Your Account</h3>
                    <form>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" name="first_name" placeholder="First Name">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="last_name" placeholder="Last Name">
                            </div>
                        </div>
                        <input type="email" name="email" placeholder="Email Address">

                        <div class="password-box">
                            <div class="password-box-input">
                                <input id="password2" type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <div class="password-icon">
                                <span class="toggle-password fa fa-eye" toggle="#password2"></span>
                            </div>
                        </div>

                        <div class="password-box">
                            <div class="password-box-input">
                                <input id="password3" type="password" class="form-control" name="password_confirmation" placeholder="Retype Password">
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
