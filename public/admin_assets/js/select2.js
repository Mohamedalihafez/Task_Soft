$(document).ready(function() {
    $('.js-example-basic-single').select2({
        ajax: {
            url: "http://example.org/api/test",
            cache: false
        }
    });
});
$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});