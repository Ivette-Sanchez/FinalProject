$(document).ready(function () {
    $.ajax({
        url: `http://localhost:8888/api/gallerys`,
        type: "GET",
        dataType: "json",
        success: function (data) {
            $('#gallerys-container').html('')
            $.each(data, function (key, value) {
                $('#gallerys-container').append(`
                    <div class="polaroid-frame">
                        <img src="${value.image_url}" alt="Artwork Image" class="img-fluid">
                        <div class="art-title">${value.title}</div>
                        <div class="description">${value.description}</div>
                        <div class="date"><em>${value.date}</em></div>
                    </div>
                `);
            });
        }
    });
});