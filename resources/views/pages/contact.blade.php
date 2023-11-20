@extends('layouts.master.master')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>

@endsection
@section('content')

<div class="container-fluid py-5 bg-header"  >
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">تواصل معنا</h1>
        </div>
    </div>
</div>

    <div class="container-fluid  wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">اتصل بنا </h5>
                <h2 class="mb-0">إذا كان لديك أي استفسار، فلا تتردد في الاتصال بنا</h2>
            </div>

            <div class="row g-5">
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                    <form id="contact-form" method="post" enctype="multipart/form-data" action="{{ route('contact.modify') }}" class="ajax-form" resetAfterSend  swalOnSuccess="{{ __('pages.sucessdata') }}" title="{{ __('pages.opps') }}" swalOnFail="{{ __('pages.wrongdata') }}">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control border-0 bg-light px-4" placeholder="الإسم" style="height: 55px;">
                                <p class="error error_name"></p>
                            </div>
                            <div class="col-md-6">
                                <input type="email"  name="email"  class="form-control border-0 bg-light px-4" placeholder="بريدك الالكتروني" style="height: 55px;">
                                <p class="error error_email"></p>
                            </div>
                            <div class="col-12">
                                <input id="phone" type="number" name="phone"  class="form-control border-0 bg-light px-4" placeholder="رقم الجوال" style="height: 55px;">
                                <p class="error error_phone"></p>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control border-0 bg-light px-4 py-3" name="comments"  rows="4" placeholder="محتوي الرساله"></textarea>
                                <p class="error error_comments"></p>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">ارسل لنا </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow slideInUp " data-wow-delay="0.6s">
                    <iframe class="position-relative rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3508.6167822510356!2d36.529002774387294!3d28.430817993214188!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15a9ad46d59b9f7b%3A0xeafb09e70f11614b!2z2YXYpNiz2LPYqSDYqNmI2KfYqNipINiq2KjZiNmDINmE2YTYrtiv2YXYp9iqINin2YTYudmC2KfYsdmK2Kkg2YjYp9mE2KrYs9mI2YrZgg!5e0!3m2!1sen!2ssa!4v1696345634517!5m2!1sen!2ssa" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>



@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

<script>
const phoneInputField = document.querySelector("#phone");
const phoneInput = window.intlTelInput(phoneInputField, {
initialCountry: "SA",
utilsScript:
    "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
});

$(document).ready(function(){
    $('#contact-form').append(`<input class="d-none" name="country_code" value="966" />`);
    $('.iti__country-list li').click(function(){
        var dataVal = $(this).attr('data-dial-code');
        $('#contact-form').append(`<input class="d-none" name="country_code" value="${dataVal}" />`);
    });
});
</script>
@endsection