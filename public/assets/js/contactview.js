$(document).ready(function () {
    $('#form-id').on('submit', function (e) {
        e.preventDefault();
        const name = $('#name').val();
        const message = $('#message').val();
        const email = $('#email').val();

        const data = { name, message, email };

        $.ajax({
            url: `http://localhost:8888/api/contacts`,
            type: "POST",
            data: data,
            dataType: "json",
            success: function () {
                $('#form-id').trigger("reset");
                $('#error-container').html('');
                $('#success-message').removeClass('d-none');
            },
            error: function (data) {
                $('#success-message').addClass('d-none');
                $('#error-container').html('');
                for (const property in data.responseJSON) {
                    $('#error-container').append(`<div class='error-text'>${data.responseJSON[property]}</div>`)
                }
            }
        });
    });
});