@isset($model->id)
    @if($model->gallaries->count())
        <label>{{ __('pages.attached_uploads') }}</label>
        <div class="light_gallary my-2">
            <div class="row">
                @foreach($model->gallaries as $gallary)
                        <div class="col-md-3 image_container position-relative my-2">
                            <img src="{{ asset('uploads/models/'.$gallary->name) }}" onclick="openModal();currentSlide(1)" class="hover-shadow">
                            <div class="delete_overlay position-absolute top-0 w-100 h-100 d-flex justify-content-center align-items-center">
                                <div class="btn btn-primary btn-delete-attachment" index="{{ $gallary->id }}">
                                    <i class="fas fa-trash-alt"></i>
                                    <span> {{ __('pages.delete') }}</span>
                                </div>
                            </div>
                        </div>
                    <!-- The Modal/Lightbox -->
                @endforeach
            </div>
        </div>
    @endif
@endisset

<div class="upload_images">
    <label for="patient_image">{{ __('pages.upload_attachment') }}</label>
    <input type="file" id="drug_images" class="mt-2">
</div>

<div class="deleted_images">

</div>

<input type="hidden" value="" name="identifer" class="identifer">
