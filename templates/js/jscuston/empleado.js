$.validator.setDefaults({
    submitHandler: function() {
        $("#agregar_empleado").submit();
    }
});

$().ready(function() {

    $.validator.addMethod("alfanum", function(value, element) {
        return /^[-.,a-záéíóúüñ]*$/i.test(value);
    }, "Ingrese sólo letras y signos de puntuación (, . - ).");

    $.validator.addMethod("onlynum", function(value, element) {
        return /^[0-9]*$/i.test(value);
    }, "Ingrese sólo numeros.");

    $.validator.addMethod(
        "notEqualTo",
        function(elementValue, element, param) {
            return elementValue != param;
        },
        // "El campo no puede ser {0}"
        "Debe seleccionar una opción"
    );

    // validate signup form on keyup and submit
    $("#agregar_empleado").validate({
        lang: 'es',
        rules: {
            codigo: {
                required: true,
                range: [0, 9999]
            },
            lugar_nacimiento: {
                required: true,
                alfanum: true,
                maxlength: 49,
                minlength: 3,
            },
            telefono: {
                required: true,
                onlynum: true,
                maxlength: 14,
                minlength: 6,
            },
            id_cargo: {
                'notEqualTo': "0",
            },

            id_estado: {
                'notEqualTo': "0",
            },




        },

    });

    $.datepicker.regional['es'] = {
        closeText: 'Cerrar',
        prevText: '< Ant',
        nextText: 'Sig >',
        currentText: 'Hoy',
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Juv', 'Vie', 'Sáb'],
        dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
        weekHeader: 'Sm',
        dateFormat: 'dd/mm/yy',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''
    };
    $.datepicker.setDefaults($.datepicker.regional['es']);

    $("#fecha_nacimiento").datepicker({ dateFormat: 'yy-mm-dd' });

});