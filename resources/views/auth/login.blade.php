@include('_partials.header')
<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
<!-- preloader area start -->
<div id="preloader">
    <div class="loader"></div>
</div>
<!-- preloader area end -->
<!-- login area start -->
<div class="login-area login-bg">
    <div class="container">
        <div class="login-box ptb--100">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="login-form-head">
                    <h4>Sign up</h4>
                </div>
                <div class="login-form-body">

                    <div class="form-gp">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name='email' value="{{ old('email') }}" autocomplete="off"
                            id="exampleInputEmail1">
                        <i class="ti-email"></i>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div class="form-gp">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name='password' value="{{ old('password') }}" autocomplete="off"
                            id="exampleInputPassword1">
                        <i class="ti-lock"></i>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="submit-btn-area">
                        <button id="form_submit" type="submit">Submit <i class="ti-arrow-right"></i></button>
                    </div>
                    <div class="mt-5 text-center form-footer">
                        <p class="text-muted">Don't have an account? <a href="/register">Sign Up</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- login area end -->
@include('_partials.footer')
