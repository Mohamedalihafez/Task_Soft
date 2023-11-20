
@extends('layouts.master.master')

@section('content')

<div class="container-fluid header bg-white p-0">
    <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
        <div class="col-md-6 p-5 mt-lg-5 text-center">
            <a href="" class="btn btn-primary py-3 px-5 me-3 animated fadeIn">الإنضمام  لدينا</a>
        </div>
        <div class="col-md-6 animated fadeIn">
            <div class="owl-carousel header-carousel">
                <div class="owl-carousel-item">
                    <img class="img-fluid" src="{{ asset('assets/img/slide3.jpeg')}}" alt="">
                </div>
                <div class="owl-carousel-item">
                    <img class="img-fluid" src="{{ asset('assets/img/banner_1.png')}}" alt="">
                </div>

                <div class="owl-carousel-item">
                    <img class="img-fluid" src="{{ asset('assets/img/carousel-2.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="about-img position-relative overflow-hidden p-5 pe-0">
                    <img class="img-fluid w-100" src="{{ asset('assets/img/about.jpg')}}">
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <a class="btn btn-primary py-3 px-5 mt-3" href="{{ route('contact') }}">تواصل معنا </a>
            </div>
        </div>
    </div>
</div>

<div class="container-xxl py-5">
    <div class="container">
        <div class="bg-light rounded p-3">
            <div class="bg-white rounded p-4" style="border: 1px dashed rgba(0, 185, 142, .3)">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <img class="img-fluid rounded w-100" src="{{ asset('assets/img/contact_us_2.jpg')}}" alt="">
                    </div>
                    <div class="col-lg-6 wow fadeIn text-center" data-wow-delay="0.5s">
                        <div class="mb-4">
                            <h3 class="mb-3">إذا كان لديك أي استفسار، فلا تتردد في الاتصال بنا                                    </h1>
                        </div>
                        <a href="https://api.whatsapp.com/send?phone=+966505360123&amp;text=البوابه للتسويق الإلكتروني" class="btn  btn-primary py-3 px-4 me-2"><i class="fa fa-phone me-2"></i>تواصل معنا</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
@section('js')

<script>
    const select1 = document.getElementById("real_state");
    const select2 = document.getElementById("vip");
    const select3 = document.getElementById("commercial");

    function disableOtherSelects(excludedSelect) {
    const selects = [select1, select2, select3];

    for (const select of selects) {
        if (select !== excludedSelect) {
        select.disabled = true;
        }
    }
    }

    function enableAllSelects() {
    const selects = [select1, select2, select3];
        for (const select of selects) {
            select.disabled = false;
        }
    }

    select1.addEventListener("click", () => {
        disableOtherSelects(select1);
        $('#vip').removeAttr('name');
        $('#commercial').removeAttr('name');
        $('#real_state').attr('name','building_id');
    });

    select2.addEventListener("click", () => {
        disableOtherSelects(select2);
        $('#real_state').removeAttr('name');
        $('#commercial').removeAttr('name');
        $('#vip').attr('name','building_id');
    });

    select3.addEventListener("click", () => {
        disableOtherSelects(select3);
        $('#vip').removeAttr('name');
        $('#real_state').removeAttr('name');
        $('#commercial').attr( 'name','building_id');
    });

    // Enable all selects when the mouse leaves the container (e.g., a form or div)
    const container = document.getElementById("container"); // Replace with your container element
    container.addEventListener("mouseout", () => {
        enableAllSelects();
    });

    $('.client-logo').owlCarousel({
        loop: true,
        margin: 0,
        dots: false,
        nav: false,
        autoplay: true,
        navText: ["<i class='icofont icofont-thin-left'></i>", "<i class='icofont icofont-thin-right'></i>"],
        responsive: {
            0: {
                items: 3
            },
            300: {
                items: 3
            },
            600: {
                items: 4
            },
            1000: {
                items: 6
            }
        }
    })
    $(document).ready(function () {
        $('#categories').on('change', function () {
            var category_id = this.value;
            $("#buildings").html('');
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': '{{csrf_token()}}'
                },
                url: '{{ route("building.fetch") }}',
                method: 'post',
                data: {category_id: category_id},
                success: function (results) {
                    $('#buildings').html('');
                    results.forEach((result, index) => {
                        $("#buildings").append('<option value="' + result['id'] + '">' + result['name'] + '</option>');
                    });
                },
            });
        });
    });


 
</script>
@endsection