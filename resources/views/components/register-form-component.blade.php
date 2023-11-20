<div class="col-md-12">
    <!-- Register Content -->
    <div class="account-content">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-12 col-lg-12 login-right">
                <Div class="col-md-12">
                    <div class="row">
                        <div class="login-header">
                            <h3>{{ __('pages.register_to',['attribute' => 'سوناماك ']) }}</h3>
                        </div>
                        <div class="col-md-12">
                            <ul class="nav navbar mb-4">
                                <li class="col-md-6 d-flex bullet_line active">
                                    <span class="bullet mx-1">1</span>
                                    <span class="mt-1">{{ __('pages.Confirm Information') }}</span>
                                </li>
                                <li class="col-md-6 d-flex">
                                    <span class="bullet mx-1 ">2</span>
                                    <span class="mt-1">{{ __('pages.Clinic Information') }} </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Register Form -->
                {{ $slot }}
            </div>
        </div>
    </div>
    <!-- /Register Content -->
</div>