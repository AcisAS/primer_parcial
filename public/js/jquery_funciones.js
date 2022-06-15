$(document).ready(function () {
    $(".btn-nuevo-registro").click(function (request) {
        $.ajax({
            url: path,
            type: "POST",
            dataType: "json",
            data: {
                _token: $('input[name="_token"]').val(),
            },
            success: function (data, ui) {
                $("#selecUnidades").empty();
                for (var i = 0; i < data.length; i++) {
                    $("#selecUnidades").append(
                        '<div id="materias">'+"<label>" +data[i]["nombre"] +"</label>"+'<input type="checkbox" name="materia[]" value="' + data[i]["id"] +'">'+" </div>"
                    );
                }
            },
        });
    });
});
