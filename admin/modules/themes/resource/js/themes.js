$(document).ready(function() {
    $.ajax({
        url: baseUrlfontend+'api/api/readthemes',
        type: 'POST',
        dataType: 'json',
        data: {
            open: security_api
        },
    })
    .done(function(data) {
        // console.log(data);
        $( "#loadThemes" ).append(data.html);
    });

});
$('body').on('click', '#loadThemes .clickloadtheme', function(event) {
    event.preventDefault();
    var data_path  = $(this).attr('data-path');
    var data_name  = $(this).attr('data-name');
    var data_body  = $(this).attr('data-bodytheme');
    $.ajax({
        url: baseUrl+'themes/themes/update_themes',
        type: 'POST',
        dataType: 'json',
        data: {
            data_path:data_path,
            data_name:data_name,
            data_body:data_body
        },
    })
    .done(function(data) {
        // console.log(data);
        window.location.href = baseUrl+'themes/themes/index';

    });
});