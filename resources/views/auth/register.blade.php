<x-guest-layout>
    <div class="login-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-5 mx-auto">
                        <div class="login-wrap register-form">
                            <div class="login-header">
                                <h3>Create an Account</h3>
                                <p>Lets start with <span>???</span></p>
                            </div>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <!-- Name -->
                                <div class="form-set group-img">
                                    <div class="group-img">
                                        <i class="feather-user"></i>
                                        <input type="text" id="name" class="form-control" placeholder="Full Name" name="name" :value="old('name')" required autofocus autocomplete="name">
                                    </div>
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>

                                <!-- Email Address -->
                                <div class="form-set group-img">
                                    <div class="group-img">
                                        <i class="feather-mail"></i>
                                        <input id="email" type="email" class="form-control" placeholder="Email Address" name="email" :value="old('email')" required autocomplete="username">
                                    </div>
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <!-- Password -->
                                <div class="form-set">
                                    <div class="pass-group group-img">
                                        <i class="feather-lock"></i>
                                        <input id="password" type="password" name="password" required autocomplete="new-password" class="form-control pass-input" placeholder="Password">
                                        <span class="toggle-password feather-eye"></span>
                                    </div>
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <!-- Confirm Password -->
                                <div class="form-set">
                                    <div class="pass-group group-img">
                                        <i class="feather-lock"></i>
                                        <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" class="form-control pass-input" placeholder="Confirm Password">
                                        <span class="toggle-password feather-eye"></span>
                                    </div>
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>
                                <button class="btn btn-primary w-100 login-btn" type="submit">Create Account</button>
                                <div class="register-link text-center">
                                    <p>Already have an account? <a class="forgot-link" href="{{ route('login') }}">Sign In</a></p>
                                </div>
                                <div class="login-or">
                                    <span class="or-line"></span>
                                    <span class="span-or">Sign in with Social Media Accounts</span>
                                </div>
                                <div class="social-login">
                                    <a href="#" class="btn btn-apple w-100"><img src="assets/img/apple.svg" class="me-1"
                                            alt="img">Sign in with Apple</a>
                                </div>
                                <div class="social-login">
                                    <a href="#" class="btn btn-google w-100"><img src="assets/img/google.svg"
                                            class="me-1" alt="img">Sign in with Google</a>
                                </div>
                                <div class="social-login">
                                    <a href="#" class="btn btn-facebook w-100 mb-0"><img src="assets/img/facebook.svg"
                                            class="me-2" alt="img">Continue with Facebook</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <script data-cfasync="false"
        src="https://listee.dreamstechnologies.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.7.1.min.js" type="d8ba678fb7cc9e6a29dfbee4-text/javascript"></script>

    <script src="assets/js/bootstrap.bundle.min.js" type="d8ba678fb7cc9e6a29dfbee4-text/javascript"></script>

    <script src="assets/plugins/aos/aos.js" type="d8ba678fb7cc9e6a29dfbee4-text/javascript"></script>

    <script src="assets/js/feather.min.js" type="d8ba678fb7cc9e6a29dfbee4-text/javascript"></script>

    <script src="assets/js/backToTop.js" type="d8ba678fb7cc9e6a29dfbee4-text/javascript"></script>

    <script src="assets/js/script.js" type="d8ba678fb7cc9e6a29dfbee4-text/javascript"></script>
    <script src="https://listee.dreamstechnologies.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="d8ba678fb7cc9e6a29dfbee4-|49" defer></script>
</x-guest-layout>
