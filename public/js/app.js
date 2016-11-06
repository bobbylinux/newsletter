$(document).ready(function () {
    $("#messaggio-input").ckeditor(function () {
        customConfig: '/custom/ckeditor_config.js'
    });

    $(document).on("click", ".btn-contatti-add-field", function () {
        var dataField = $(this).data("field");
        var element = '<div class="form-group form-input"><input type="text" class="form-control" id="input-contatti-' + dataField + '" placeholder="' + titleCase(dataField) + '"></div>';
        $(".form-input:last").after(element);
    });


});
