<div class="container-fluid bg-dark px-5 d-none d-lg-block">
    <div class="row gx-0">
        <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
        </div>
        <div class="col-lg-4 text-center text-lg-end">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""> <i class="fab fa-snapchat fw-normal"></i> </a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid nav-bar bg-transparent">
    <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
        <a href="index.html" class="navbar-brand d-flex align-items-center text-center">
            {{-- <div class=" p-2 me-2 logo_start">
                <img class="" src="{{ asset('assets/img/logo.jpeg')}}" alt="Icon" style="width: 100%; height: 100%;">
            </div> --}}
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
                <a href="{{ route('home') }}" class="nav-item nav-link {{is_active('home')}} ">الرئيسيه </a>
                <a href="{{ route('home') }}" class="nav-item nav-link   {{is_active('home')}} ">خدماتنا  </a>
                <a href="{{ route('contact') }}" class="nav-item nav-link {{is_active('contact')}} "> تواصل معنا </a>
                <a href="{{ route('contact') }}" class="nav-item nav-link {{is_active('contact')}} ">عملائنا الكرام  </a>
         
            </div>

            @guest	
                <ul class="nav header-navbar-rht">
                    <a href="{{ route('login') }}" class="btn btn-primary px-3 d-lg-flex">تسجيل الدخول </a>
                    <a href="{{ route('register') }}" class="btn btn-secon px-3  d-lg-flex {{is_active('register')}}">الإنضمام</a>
                </ul>
            @else
            
                <ul class="nav header-navbar-rht">
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('dashboard') }}">{{ __('pages.dashboard') }}</a>
                                <a class="dropdown-item" href="{{ route('logout') }}">{{ __('pages.my_profile') }}</a>
                                <a class="dropdown-item"  onclick="event.preventDefault();document.getElementById('logout-form').submit();" aria-expanded="false" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    {{ __('pages.Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                            </div>
                        </li>
                </ul>
            @endguest

        </div>
    </nav>
</div>