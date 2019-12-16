$.validator.setDefaults({
    submitHandler: function() {
        $("#agregar_estado").submit();
    }
});

$().ready(function() {

    $.validator.addMethod("alfanum", function(value, element) {
        return /^[a-z0-9áéíóúüñ]*$/i.test(value);
    }, "Ingrese sólo letras o números.");

    // validate signup form on keyup and submit
    $("#agregar_estado").validate({
        rules: {
            nombre: {
                alfanum: true,
                required: true,
            },
            estado: {
                required: true,
            },

        },
        messages: {
            nombre: {

                required: "El nombre es obligatorio.",
            },
            estado: "El estado es obligatorio.",

        }
    });

});