$(document).ready(function () {
    $('.data-bio').on('input', function () {
        $(this).val($(this).val().replace(/[^0-9,-]/g, ''));
    });

    $('.numeric-input').on('input', function () {
        $(this).val($(this).val().replace(/\D/g, ''));
    });
});