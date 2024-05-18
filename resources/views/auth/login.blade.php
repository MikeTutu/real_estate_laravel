<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="login-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-5 mx-auto">
                    <div class="login-wrap">
                        <div class="login-header">
                            <h3>Welcome Back</h3>
                            <p>Please Enter your Details</p>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />

                            <!-- Email Address -->
                            <div class="form-set group-img">
                                <div class="group-img">
                                    <i class="feather-mail"></i>
                                    <input class="form-control" placeholder="Email Address" id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username">
                                </div>
                            </div>

                            <!-- Password -->
                            <div class="form-set">
                                <div class="pass-group group-img">
                                    <i class="feather-lock"></i>
                                    <input type="password" class="form-control pass-input" placeholder="Password" id="password" name="password" required autocomplete="current-password">
                                    <span class="toggle-password feather-eye"></span>
                                </div>
                            </div>

                            <!-- Remember Me -->
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <label class="custom_check">
                                        <input type="checkbox" id="remember_me" name="remember" class="rememberme">
                                        <span class="checkmark"></span>Remember Me
                                    </label>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="text-md-end">
                                        @if (Route::has('password.request'))
                                        <a class="forgot-link" href="{{ route('password.request') }}">Forgot password?</a>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-primary w-100 login-btn" type="submit">Sign in</button>
                            <div class="register-link text-center">
                                <p>No account yet? <a class="forgot-link" href={{route('register')}}>Signup</a></p>
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
    <script src="assets/js/jquery-3.7.1.min.js" type="05731b99b70a554ed5816c78-text/javascript"></script>

    <script src="assets/js/bootstrap.bundle.min.js" type="05731b99b70a554ed5816c78-text/javascript"></script>

    <script src="assets/plugins/aos/aos.js" type="05731b99b70a554ed5816c78-text/javascript"></script>

    <script src="assets/js/backToTop.js" type="05731b99b70a554ed5816c78-text/javascript"></script>

    <script src="assets/js/feather.min.js" type="05731b99b70a554ed5816c78-text/javascript"></script>

    <script src="assets/js/script.js" type="05731b99b70a554ed5816c78-text/javascript"></script>
    <script src="https://listee.dreamstechnologies.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="05731b99b70a554ed5816c78-|49" defer></script>
</x-guest-layout>
