$(document).ready(function () {
    $("#search").keyup(function() {
        var search = $(this).val();
        if(search !== ''){
            $.ajax({
                url: $('form').attr("data-url-search"),
                method: 'POST',
                data: {
                    search: search
                },
                success: function (data){
                    $('#searchRes').html(data);
                    $('#searchRes').show();
                }
            });
        }else {
            $('#searchRes').hide()
        }
    })
});