$('.btn-delete-attachment').on('click',function(){
    $('.deleted_images').append(`<input type="hidden" value="${$(this).attr('index')}" name="delete_image[${$(this).attr('index')}]">`);
    $(this).closest('.image_container').remove();
})