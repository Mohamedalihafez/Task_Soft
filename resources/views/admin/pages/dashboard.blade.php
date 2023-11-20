
@extends('admin.layout.master')
@section('content')
    <div class="main-wrapper">
        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="page-header">
                    <div class="row">
                        @foreach($tenants as $tenant)
                            <div class="col-md-4 col-12">
                                <div class="container-tenant">
                                    <div class="wrapper-tenant">
                                        <!-- <div class="banner-image"> </div> -->
                                        <h1>{{ $tenant->apartment->name }}</h1>
                                        <p>{{ $tenant->price . ' د.ك' }}</p>
                                        <div class="button-wrapper"> 
                                            <button class="btn-tenant outline-tenant ms-4 mb-3">{{ __('pages.details') }}</button>
                                            <button class="btn-tenant @if($tenant->paid)fill-tenant @endif" @if(!$tenant->paid)disabled @endif>{{ __('pages.pay_now') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
    </script>
@endsection