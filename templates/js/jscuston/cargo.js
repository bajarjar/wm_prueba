$.validator.setDefaults({
    submitHandler: function() {
        $("#agregar_cargo").submit();
    }
});

$().ready(function() {

    $.validator.addMethod("alfanum", function(value, element) {
        return /^[a-z0-9áéíóúüñ]*$/i.test(value);
    }, "Ingrese sólo letras o números.");

    // validate signup form on keyup and submit
    $("#agregar_cargo").validate({
        rules: {
            nombre: {
                alfanum: true,
                required: true,
            },
            area: {
                required: true,
            },

        },
        messages: {
            nombre: {

                required: "El nombre es obligatorio.",
            },
            area: "El area es obligatorio.",

        }
    });

});