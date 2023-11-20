@extends('layouts.master.master')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
 
@section('content')
<div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="container  mt-4">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header text-black h3 text-center"> الإنضمام</div>
            
                            <div class="card-body">
                                <form id="register_form" method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <input type="hidden" name="role_id" type="text"  value="2" required autocomplete="name" autofocus>
 
                                    <div class="row mb-3">      
                                        <div class="col-md-12">
                                            <label class="mb-2" for="exampleInputEmail1">الإسم </label>
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>       
                                        <div class=" mt-3">
                                            <label class="mb-2" for="exampleInputEmail1">البريد الإلكتروني </label>
                
                                            <div class="col-md-12">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>   
                                        <div class="col-md-12 mt-3">
                                            <label class="mb-2 " for="exampleInputEmail1">رقم الجوال </label>
                                            <input id="phone" type="tel"  class="form-control w-100   @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required  autofocus pattern="\d*">
                                        </div>
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
            
                                    <div class="row mb-3">                
                                        <div class="col-md-12">
                                            <label class="mb-2" for="exampleInputEmail1">كلمه السر</label>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="mb-2" for="exampleInputEmail1"> تأكيد كلمه السر </label>
            
                                        <div class="col-md-12">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>
            
                                    <div class="row mb-0">
                                        <div class="col-md-12 ">
                                            <button type="submit" class="btn btn-primary w-100 btn-bawaba">
                                             الإنضمام
                                            </button>
                                            
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
        $('#register_form').append(`<input class="d-none" name="country_code" value="966" />`);
        $('.iti__country-list li').click(function(){
            var dataVal = $(this).attr('data-dial-code');
            $('#register_form').append(`<input class="d-none" name="country_code" value="${dataVal}" />`);
        });
    });
</script>
@endsection