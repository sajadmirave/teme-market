<div id="main-wrapper" class="oxyy-login-register">
    <div class="hero-wrap min-vh-100">
        <div class="hero-mask opacity-4 bg-secondary"></div>
        <div class="hero-bg hero-bg-scroll" style="background-image:url('{{ asset('assets/home/images/Background.jpg') }}');"></div>
        <div class="hero-content d-flex min-vh-100">
            <div class="container my-auto">
                <div class="row">
                    <div class="col-md-9 col-lg-7 col-xl-5 mx-auto">
                        <div class="hero-wrap rounded shadow-lg p-4 py-sm-5 px-sm-5 my-4">
                            <div class="hero-mask opacity-9 bg-dark"></div>
                            <div class="hero-content">
                                <div class="logo mb-4"> <a class="d-flex justify-content-center" href="{{ route('showSingUp') }}" title="Theme-eMarket"><img style="width: 100px" src="{{ asset('assets/home/images/Logo-Dark.png') }}" alt="Theme-eMarket"></a> </div>
                                @if ($errors->any())
                                <div class="alert alert-danger" style="text-align: right">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                <form id="registerForm" class="form-dark" method="POST" action="{{ route('singup') }}">
                                    @csrf

                                    <div class="form-group icon-group">
                                        <input type="text" class="form-control" name="User_Name" id="User_Name" placeholder="نام کاربری">
                                        <span class="icon-inside"><i class="fas fa-user"></i></span>
                                    </div>

                                    <div class="form-group icon-group">
                                        <input type="email" class="form-control" name="Email" id="Email" placeholder="آدرس ایمیل">
                                        <span class="icon-inside"><i class="fas fa-envelope"></i></span>
                                    </div>

                                    <div class="form-group icon-group">
                                        <input type="password" class="form-control" name="password" id="password" placeholder="رمز عبور">
                                        <span class="icon-inside"><i class="fas fa-lock"></i></span>
                                    </div>

                                    <div class="form-group icon-group">
                                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="تکرار رمز عبور">
                                        <span class="icon-inside"><i class="fas fa-lock"></i></span>
                                    </div>

                                    <button class="btn btn-primary btn-block mt-4 mb-3" type="submit">ثبت نام</button>

                                    <p class="text-center text-muted text-2 mt-2 mb-0">
                                        ثبت نام شما به معنای پذیرش
                                        <a class="btn-link text-light" href="#"><br>شرایط تم مارکت</a> و
                                        <a class="btn-link text-light" href="#">قوانین حریم خصوصی</a> است
                                    </p>
                                </form>
                                <div class="d-flex align-items-center mt-2 mb-3">
                                    <hr class="flex-grow-1 border-dark">
                                    <span class="mx-2 text-muted text-2">ورود با</span>
                                    <hr class="flex-grow-1 border-dark">
                                </div>
                                <div class="d-flex  flex-column align-items-center mb-3">
                                    <ul class="social-icons social-icons-rounded">
                                        <li class="social-icons-discord"><a href="#" data-toggle="tooltip" data-original-title="با دیسکورد وارد شوید"><i class="fab fa-discord"></i></a></li>
                                        <li class="social-icons-github"><a href="#" data-toggle="tooltip" data-original-title="با گیت‌هاب وارد شوید"><i class="fab fa-github"></i></a></li>
                                        <li class="social-icons-google"><a href="#" data-toggle="tooltip" data-original-title="با گوگل وارد شوید"><i class="fab fa-google"></i></a></li>
                                        <li class="social-icons-linkedin"><a href="#" data-toggle="tooltip" data-original-title="با لینکدین وارد شوید"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                                <p class="text-2 text-muted text-center mb-0">حساب کاربری دارید؟ <a class="btn-link text-light text-3" href="{{route('ShowLoginForm')}}">وارد شدن</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>