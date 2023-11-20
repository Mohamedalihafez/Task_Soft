@extends('layouts.master.master')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
 
@section('content')
<div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active login" >
            <div class="container mt-4">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header text-black h3 text-center"> تسجيل الدخول</div>
            
                            <div class="card-body">
            
                                <form id="login_form" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    
                                    <div class="row mb-3">                
                                        <div class="col-md-12">
                                            <label class="mb-2" for="exampleInputEmail1">رقم الجوال </label>
                                            <input id="phone" type="tel"  placeholder="رقم الجوال"  class="form-control w-100   @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required  autofocus pattern="\d*">
                                            @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="row mb-3">                
                                        <div class="col-md-12">
                                            <label class="mb-2" for="exampleInputEmail1">كلمه السر</label>
                                            <input id="password"  placeholder="كلمه السر" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="row mb-3">
                                        <div class="col-md-12  text-start">
                                            @if (Route::has('password.request'))
                                                <a class=" text-black    forget-password" href="{{ route('password.request') }}">
                                                    هل نسيت كلمه السر ؟
                                                </a>
                                            @endif
                                        </div>
                                    </div>
            
                                    <div class="row mb-0">
                                        <div class="col-md-12 ">
                                            <button type="submit" class="btn btn-primary w-100 btn-bawaba">
                                              تسجيل الدخول
                                            </button>
                                            
                                        </div>
                                        <div class="col-md-12 mt-3 text-center  text-black">
                                            <a class="btn btn-link text-black register_add p-0 " >
                                            ليس لديك حساب  ؟ 
                                            </a>
                                            <span>
                                                <a class=" forget-password" href="{{ route('register') }}">
                                                انشأ حساب 
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

</div>

  
@endsection
@section('js')
  
    <script>

        const phoneInputField = document.querySelector("#phone");
        const phoneInput = window.intlTelInput(phoneInputField, {
        initialCountry: "SA",
        utilsScript:
            "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        });

        $(document).ready(function(){
            $('#login_form').append(`<input class="d-none" name="country_code" value="966" />`);
            $('.iti__country-list li').click(function(){
                var dataVal = $(this).attr('data-dial-code');
                $('#login_form').append(`<input class="d-none" name="country_code" value="${dataVal}" />`);
            });
        });
    

    </script>
@endsection