$(function () {
    var socket = io.connect("http://localhost:1997/", {
        "forceNew": true
    })

    $(document).ready(function () {
        $('select').material_select();
        cargarCondominio("#rut_c");
        cargarCondominio3("#condominio");
        cargarCondominio2("#rut_c_e");
        cargarEdificio("#edificioresidente");
        cargarEdificioR("#edificiores");
        cargarEdificioV("#edificiovis");
        cargarEdificio3("#edificio_rv");
        cargarDepartamentoR("#departamentores");
        cargarDepartamento2("#departamentovis");
        cargarDepartamento("#departamentoresidente");
        cargarDepartamento3("#departamento_rv");
        $('.datepicker').pickadate({
            labelMonthNext: 'Mes siguiente',
            labelMonthPrev: 'Mes anterior',
            labelMonthSelect: 'Selecciona un mes',
            labelYearSelect: 'Selecciona un año',
            monthsFull: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            monthsShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
            weekdaysFull: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
            weekdaysShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Juv', 'Vie', 'Sáb'],
            weekdaysLetter: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
            today: 'HOY',
            clear: 'LIMPIAR',
            close: 'OK',
            format: 'yyyy-mm-dd',
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 15, // Creates a dropdown of 15 years to control year,

        });


    });

    $(document).ready(function () {

        $('.modal').modal();
        $(".modal-trigger").modal();
        $(".button-collapse").sideNav();
    });

    var base_url = "http://localhost/Sicurezza/";

    $("#bt_log").click(function (e) {
        e.preventDefault();
        var rut = $("#rutlog").val();
        var clave = $("#clavelog").val();
        //enviar datos
        $.ajax({
            url: base_url + 'login',
            type: 'post',
            dataType: 'json',
            data: {rut: rut, clave: clave},
            success: function (o) {
                if (o.msg == "404") {
                    Materialize.toast("Usuario no encontrado", "4000");
                } else {
                    window.location.href = base_url + o.msg;
                }
            },
            error: function () {
                Materialize.toast("Error 500", "4000");
            }
        });

    });

    $("#bt_registrar").click(function (e) {
        e.preventDefault();
        var rut = $("#rutr").val();
        var nombre = $("#nombrer").val();
        var apellido = $("#apellidor").val();
        var direccion = $("#direccionr").val();
        var correo = $("#correor").val();
        var clave = $("#claver").val();
        var clave2 = $("#claver2").val();
        var tipo = $("#tipo").val();

        if (rut === "" || nombre === "" || apellido === "" || direccion === "" || correo === "" || clave === "" || clave2 === "" || tipo === "") {
            Materialize.toast("Error llene todos los campos", "3000");
        } else {
            if (clave2 === clave) {
                $.ajax({
                    url: base_url + 'crearusuario',
                    type: 'POST',
                    dataType: 'json',
                    data: {rut: rut, nombre: nombre, apellido: apellido, direccion: direccion, correo: correo, clave: clave, tipo: tipo},
                    success: function (o) {
                        Materialize.toast(o.msg, "3000");
                        $("#rutr").val("");
                        $("#nombrer").val("");
                        $("#apellidor").val("");
                        $("#direccionr").val("");
                        $("#correor").val("");
                        $("#claver").val("");
                        $("#claver2").val("");
                        $("#tipo").val("");
                    },
                    error: function () {
                        Materialize.toast("error", "3000");

                    }
                });
            } else {
                Materialize.toast("contraseñas diferentes", "3000");
            }
        }
    });


    $("#bt_registrarres").click(function (e) {
        e.preventDefault();
        var rut = $("#rutres").val();
        var nombre = $("#nombreres").val();
        var apellido = $("#apellidores").val();
        var edificio = $("#edificiores").val();
        var departamento = $("#departamentores").val();
        var telefono = $("#telefonores").val();
        if (rut === "" || nombre === "" || apellido === "" || edificio === "" || departamento === "" || telefono === "") {
            Materialize.toast("Error llene todos los campos", "3000");
        } else {
            var result = validarRut(rut);
            if (result) {

                $.ajax({
                    url: base_url + 'crearres',
                    type: 'POST',
                    dataType: 'JSON',
                    data: {rut: rut, nombre: nombre, apellido: apellido, edificio: edificio, departamento: departamento, telefono: telefono},
                    success: function (o) {
                        Materialize.toast(o.msg, "3000");
                        $("#nombreres").val("");
                        $("#apellidores").val("");
                        $("#edificiores").val("");
                        $("#departamentores").val("");
                        $("#telefonores").val("");
                    },
                    error: function () {
                        Materialize.toast("gg", "3000");
                    }
                });
            } else {
                Materialize.toast("Ingrese rut valido", "3000");
            }
        }
    });


    $("#bt_registrarvis").click(function (e) {
        e.preventDefault();
        var rut = $("#rutvis").val();
        var nombre = $("#nombrevis").val();
        var apellido = $("#apellidovis").val();
        var telefono = $("#telefonovis").val();
        var edificio = $("#edificiovis").val();
        var departamento = $("#departamentovis").val();
        var patente = $("#patentev").val();
        var marca = $("#marcavv").val();
        var numero = $("#numeroev").val();
        if (rut === "" || nombre === "" || apellido === "" || telefono === "" || edificio === "" || departamento === "") {
            Materialize.toast("Error llene todos los campos", "3000");
        } else {
            var result = validarRut(rut);
            if (result) {
                var vehiculo = $("#vehiculov").prop("checked");
                if (vehiculo) {
                    $.ajax({
                        url: base_url + 'visitayvehiculo',
                        type: 'POST',
                        dataType: 'json',
                        data: {rut: rut, nombre: nombre, apellido: apellido, edificio: edificio, departamento: departamento, telefono: telefono, patente: patente, marca: marca, numero: numero},
                        success: function (o) {
                            Materialize.toast(o.msg, "3000");
                            document.getElementById("regvis").reset();
                            $("#agregarvehiculov").hide();
                        },
                        error: function () {
                            Materialize.toast("gg", "3000");
                        }
                    });
                } else {
                    $.ajax({
                        url: base_url + 'crearvis',
                        type: 'POST',
                        dataType: 'json',
                        data: {rut: rut, nombre: nombre, apellido: apellido, edificio: edificio, departamento: departamento, telefono: telefono},
                        success: function (o) {
                            Materialize.toast(o.msg, "3000");
                            document.getElementById("regvis").reset();
                        },
                        error: function () {
                            Materialize.toast("gg", "3000");
                        }
                    });
                }
            } else {
                Materialize.toast("Ingrese un rut valido", "3000");
            }
        }

    });

    $("#bt_registrarresidente").click(function (e) {
        e.preventDefault();
        var rut = $("#rutresidente").val();
        var nombre = $("#nombreresidente").val();
        var apellido = $("#apellidoresidente").val();
        var telefono = $("#telefonoresidente").val();
        var edificio = $("#edificioresidente").val();
        var departamento = $("#departamentoresidente").val();

        if (rut === "" || nombre === "" || apellido === "" || telefono === "") {
            Materialize.toast("Error llene todos los campos", "3000");
        } else {
            var result = validarRut(rut);
            if (result) {


                $.ajax({
                    url: base_url + 'crearresidente',
                    type: 'POST',
                    dataType: 'json',
                    data: {rut: rut, nombre: nombre, apellido: apellido, telefono: telefono, edificio: edificio, departamento: departamento},
                    success: function (o) {
                        Materialize.toast(o.msg, "3000");

                        $("#nombreresidente").val("");
                        $("#apellidoresidente").val("");
                        $("#telefonoresidente").val("");
                        $("#edificioresidente").val("");
                        $("#departamentoresidente").val("");
                    },
                    error: function () {
                        Materialize.toast("gg", "3000");

                    }

                });
            } else {
                Materialize.toast("Ingrese un rut valido", "3000");
            }
        }
    });


    function cargarEdificio() {
        var url = base_url + "edificios";
        $.getJSON(url, function (result) {
            $.each(result, function (i, o) {
                $("#edificioresidente").append(new Option(o.nombre, o.codigo));
                $('select').material_select();
            });
        });
    }

    function cargarEdificioR() {
        var url = base_url + "edificios";
        $.getJSON(url, function (result) {
            $.each(result, function (i, o) {
                $("#edificiores").append(new Option(o.nombre, o.codigo));
                $('select').material_select();
            });
        });
    }

    function cargarEdificioV() {
        var url = base_url + "edificios";
        $.getJSON(url, function (result) {
            $.each(result, function (i, o) {
                $("#edificiovis").append(new Option(o.nombre, o.codigo));
                $('select').material_select();
            });
        });
    }

    function cargarEdificio3() {
        var url = base_url + "edificios";
        $.getJSON(url, function (result) {
            $.each(result, function (i, o) {
                $("#edificio_rv").append(new Option(o.nombre, o.codigo));
                $('select').material_select();
            });
        });
    }

    function cargarDepartamento() {
        var url = base_url + "departamentos";
        $.getJSON(url, function (result) {
            $.each(result, function (i, o) {
                $("#departamentoresidente").append(new Option(o.id, o.id));
                $('select').material_select();
            });
        });
    }

    function cargarDepartamentoR() {
        var url = base_url + "departamentos";

        $.getJSON(url, function (result) {
            $.each(result, function (i, o) {
                $("#departamentores").append(new Option(o.id, o.id));
                $('select').material_select();
            });
        });
    }

    function cargarDepartamento2() {
        var url = base_url + "departamentos2";
        $.getJSON(url, function (result) {
            $.each(result, function (i, o) {
                $("#departamentovis").append(new Option(o.id, o.id));
                $('select').material_select();
            });
        });
    }

    function cargarDepartamento3() {
        var url = base_url + "departamentos";
        $.getJSON(url, function (result) {
            $.each(result, function (i, o) {
                $("#departamento_rv").append(new Option(o.id, o.id));
                $('select').material_select();
            });
        });
    }

    function cargarCondominio() {
        var url = base_url + "condominios";
        $.getJSON(url, function (result) {
            $.each(result, function (i, o) {
                $("#rut_c").append(new Option(o.nombre, o.rut));
                $('select').material_select();
            });
        });
    }

    function cargarCondominio2() {
        var url = base_url + "condominios";
        $.getJSON(url, function (result) {
            $.each(result, function (i, o) {
                $("#rut_c_e").append(new Option(o.nombre, o.rut));
                $('select').material_select();
            });
        });
    }

    function cargarCondominio3() {
        var url = base_url + "condominios";
        $.getJSON(url, function (result) {
            $.each(result, function (i, o) {
                $("#condominio").append(new Option(o.nombre, o.rut));
                $('select').material_select();
            });
        });
    }

    $("#edificiores").change(function (e) {
        e.preventDefault();
        var edificio = $("#edificiores").val();
        $.ajax({
            url: base_url + "departamentos",
            type: 'post',
            dataType: 'json',
            data: {
                edificio: edificio
            },
            success: function (o) {
                if ($("#departamentores").empty()) {
                    $.each(o, function (i, o) {
                        $("#departamentores").append(new Option(o.id, o.id));
                        $('select').material_select();
                    });
                }

            },
            error: function () {
                Materialize.toast("500", "3000");
            }
        });
    });


    $("#edificiovis").change(function (e) {
        e.preventDefault();
        var edificio = $("#edificiovis").val();
        $.ajax({
            url: base_url + "departamentos",
            type: 'post',
            dataType: 'json',
            data: {
                edificio: edificio
            },
            success: function (o) {
                if ($("#departamentovis").empty()) {
                    $.each(o, function (i, o) {
                        $("#departamentovis").append(new Option(o.id, o.id));
                        $('select').material_select();
                    });
                }

            },
            error: function () {
                Materialize.toast("500", "3000");
            }
        });
    });

    usuarios();
    visitas();
    estacionamientos();
    residentes();

    function usuarios() {
        $("#bodyusuario").empty();
        var url = base_url + "usuarios";
        $.getJSON(url, function (result) {
            $.each(result, function (i, o) {
                var row = "<tr>";
                row += "<td>" + o.rut + "</td>";
                row += "<td>" + o.nombre + "</td>";
                row += "<td>" + o.apellido + "</td>";
                row += "<td>" + o.direccion + "</td>";
                row += "<td>" + ((o.tipo === "0") ? "Administrador" : "Guardia") + "</td>";
                row += "<td>" + o.correo + "</td>";
                row += "<td><a id='bt_editusuario' class='btn-floating waves-effect' ><i class='material-icons'>edit</i></a></td>";
                row += "</tr>";
                $("#bodyusuario").append(row);
            });
        });
    }

    $("body").on("click", "#bt_editusuario", function (e) {
        e.preventDefault();
        var rut = $(this).parent().parent().children()[0];
        var nombre = $(this).parent().parent().children()[1];
        var apellido = $(this).parent().parent().children()[2];
        var direccion = $(this).parent().parent().children()[3];
        var tipo = $(this).parent().parent().children()[4];
        var correo = $(this).parent().parent().children()[5];

        //cargar los datos de la tabla al modal2
        $("#rut_e").val($(rut).text());
        $("#nombre_e").val($(nombre).text());
        $("#apellido_e").val($(apellido).text());
        $("#direccion_e").val($(direccion).text());
        $("#tipo_e").val($(tipo).text());
        $("#correo_e").val($(correo).text());
        $("#modal2").modal('open');
    });

    $("body").on("click", "#vehiculovisita", function (e) {
        e.preventDefault();
        var rutvis = $("#rutvis").val();

        //cargar los datos de la tabla al modal2
        $("#rutvisita").val(rutvis);

        $("#modalvv").modal('open');
    });

    $("#agregarvv").on("click", function (e) {
        e.preventDefault();
        var visita = $("#rutvisita").val();
        var patente = $("#patentev").val();
        var marca = $("#marcavv").val();
        var numero = $("#numeroev").val();

        $.ajax({
            url: base_url + "vehiculoVisita",
            type: 'post',
            dataType: 'json',
            data: {
                visita: visita, patente: patente, marca: marca, numero: numero
            },
            success: function (o) {
                Materialize.toast(o.msg, "3000");
                $("#rutvisita").val("");
                $("#patentev").val("");
                $("#marcavv").val("");
                $("#numeroev").val("");
                $("#modalvv").modal('close');
                $("#rutvis").val("");
            },
            error: function () {
                Materialize.toast("Error", "3000");
                $("#modalvv").modal('close');
            }
        });
    });

    $("#limpiarrutv").on("click", function (e) {
        e.preventDefault();
        $("#rutvis").val("");
    });


    $("body").on("click", "#vehiculoresidente", function (e) {
        e.preventDefault();
        var rutres = $("#rutres").val();

        //cargar los datos de la tabla al modal2
        $("#rutrev").val(rutres);
        $("#modalvr").modal('open');
    });

    $("#agregarvr").on("click", function (e) {
        e.preventDefault();
        var residente = $("#rutrev").val();
        var patente = $("#patenter").val();
        var marca = $("#marcavr").val();
        var modelo = $("#modelor").val();
        var numero = $("#numeroer").val();

        $.ajax({
            url: base_url + "vehiculoResidente",
            type: 'post',
            dataType: 'json',
            data: {
                residente: residente, patente: patente, marca: marca, modelo: modelo, numero: numero
            },
            success: function (o) {
                Materialize.toast(o.msg, "3000");
                $("#rutrev").val("");
                $("#patenter").val("");
                $("#marcavr").val("");
                $("#modelor").val("");
                $("#numeroer").val("");
                $("#modalvr").modal('close');
                $("#rutrev").val("");
            },
            error: function () {
                Materialize.toast("Error", "3000");
                $("#modalvr").modal('close');
            }
        });
    });

    $("#bt_editu").on("click", function (e) {
        e.preventDefault();
        var rut = $("#rut_e").val();
        var nombre = $("#nombre_e").val();
        var apellido = $("#apellido_e").val();
        var direccion = $("#direccion_e").val();
        var tipo = $("#tipo_e").val();
        var correo = $("#correo_e").val();

        $.ajax({
            url: base_url + "editarUsuario",
            type: 'post',
            dataType: 'json',
            data: {
                rut: rut,
                nombre: nombre,
                apellido: apellido,
                direccion: direccion,
                tipo: tipo,
                correo: correo
            },
            success: function (o) {
                Materialize.toast(o.msg, "3000");
                usuarios();
                $("#modal2").modal('close');

            },
            error: function () {
                Materialize.toast("500", "3000");
            }
        });
    });

    $("#bt_deleteu").on("click", function (e) {
        e.preventDefault();
        var rut = $("#rut_e").val();

        $.ajax({
            url: base_url + "eliminarUsuario",
            type: "post",
            dataType: 'json',
            data: {
                rut: rut
            },
            success: function (o) {
                Materialize.toast(o.msg, 3000);
                $("#modal2").modal('close');
                usuarios();
            },
            error: function () {
                Materialize.toast("500", 2000);
            }
        });
    });

    $("#cargarvisita").on("click", function (e) {
        e.preventDefault();
        var mes = $("#mes").val();

        $.ajax({
            url: base_url + "vm",
            type: "post",
            dataType: 'json',
            data: {
                mes: mes
            },
            success: function (o) {
                var url = base_url + "vm";

                $.getJSON(url, function (result) {
                    $.each(result, function (i, o) {
                        if (o.tipo === "0") {
                            var row = "<tr>";
                            row += "<td>" + o.rut + "</td>";
                            row += "<td>" + o.nombre + "</td>";
                            row += "<td>" + o.apellido + "</td>";
                            row += "<td>" + o.departamento + "</td>";
                            row += "<td>" + o.patente + "</td>";
                            row += "<td>" + ((o.tipo === "0") ? "Visita" : "Residente") + "</td>";
                            row += "<td>" + o.fecha + "</td>";
                            row += "</tr>";
                            $("#bodyvisitas2").append(row);
                        }

                    });
                });
            },
            error: function () {
                Materialize.toast("500", 2000);
            }
        });
    });

    function residentes() {
        $("#bodyrv").empty();
        var url = base_url + "residentes";

        $.getJSON(url, function (result) {
            $.each(result, function (i, o) {
                var row = "<tr>";
                row += "<td>" + o.rut + "</td>";
                row += "<td>" + o.nombre + "</td>";
                row += "<td>" + o.apellido + "</td>";
                row += "<td>" + o.edificio + "</td>";
                row += "<td>" + o.departamento + "</td>";
                row += "<td>" + o.telefono + "</td>";
                row += "<td>" + o.fecha + "</td>";
                row += "<td><a id='bt_editrv' class='btn-floating waves-effect' ><i class='material-icons'>edit</i></a></td>";
                row += "<td><a id='bt_confirmar' class='btn-floating waves-effect' ><i class='material-icons red'>delete</i></a></td>";
                row += "</tr>";
                $("#bodyrv").append(row);
            });
        });
    }

    function visitas() {
        $("#bodyvisitas").empty();
        var url = base_url + "visitas";

        $.getJSON(url, function (result) {
            $("#bodyvisitas").empty();
            $.each(result, function (i, o) {

                var row = "<tr>";
                row += "<td>" + o.rut + "</td>";
                row += "<td>" + o.nombre + "</td>";
                row += "<td>" + o.apellido + "</td>";
                row += "<td>" + o.telefono + "</td>";
                row += "<td>" + o.departamento + "</td>";
                row += "<td>" + o.fecha + "</td>";
                row += "</tr>";
                $("#bodyvisitas").append(row);

            });
        });
    }

    function estacionamientos() {
        $("#bodyestacionamientos").empty();
        var url = base_url + "estacionamientos";

        $.getJSON(url, function (result) {
            $.each(result, function (i, o) {
                var row = "<td>";
                row += "<td>" + "N°" + o.numeroEstacionamiento + ((o.estado === "0") ? "<img id='img" + o.numeroEstacionamiento + "' src='verde v.png' class='responsive-img' width='50' height='50'>" : ((o.estado === "1") ? "<img id='img" + o.numeroEstacionamiento + "' src='rojo v.png' class='responsive-img' width='50' height='50'>" : ((o.estado === "2") ? "<img src='ploma v.png' class='responsive-img' width='50' height='50'>" : ""))) + "</td>";

                row += "</td>";

                $("#bodyestacionamientos").append(row);
            });
        });
    }
    socket.on("datoNuevo", function (data) {
        var img = document.getElementById("img" + data.id);

        if (data.var == 1) {
            img.src = "rojo v.png";
        } else {
            img.src = "verde v.png";
        }
    });


    $("body").on("click", "#bt_editrv", function (e) {
        e.preventDefault();
        var rut = $(this).parent().parent().children()[0];
        var nombre = $(this).parent().parent().children()[1];
        var apellido = $(this).parent().parent().children()[2];
        var edificio = $(this).parent().parent().children()[3];
        var departamento = $(this).parent().parent().children()[4];
        var telefono = $(this).parent().parent().children()[6];

        //cargar los datos de la tabla al modal2
        $("#rut_rv").val($(rut).text());
        $("#nombre_rv").val($(nombre).text());
        $("#apellido_rv").val($(apellido).text());
        $("#edificio_rv").val($(edificio).text());
        $("#departamento_rv").val($(departamento).text());
        $("#telefono_rv").val($(telefono).text());
        $("#modalrv").modal('open');

    });

    $("#bt_erv").on("click", function (e) {
        e.preventDefault();
        var rut = $("#rut_rv").val();
        var nombre = $("#nombre_rv").val();
        var apellido = $("#apellido_rv").val();
        var edificio = $("#edificio_rv").val();
        var departamento = $("#departamento_rv").val();
        var telefono = $("#telefono_rv").val();

        $.ajax({
            url: base_url + "editarRev",
            type: 'post',
            dataType: 'json',
            data: {
                rut: rut,
                nombre: nombre,
                apellido: apellido,
                edificio: edificio,
                departamento: departamento,
                telefono: telefono
            },
            success: function (o) {
                Materialize.toast(o.msg, "3000");
                residentes();
                $("#modalrv").modal('close');
            },
            error: function () {
                Materialize.toast("500", "3000");
            }
        });
    });
    
    $("body").on("click", "#bt_confirmar", function (e) {
        e.preventDefault();
        var rut = $(this).parent().parent().children()[0];
        $("#rut_erv").val($(rut).text());
        $("#modalconfirmar").modal('open');

    });

    $("#bt_drv").on("click", function (e) {
        e.preventDefault();
        var rut = $("#rut_erv").val();

        $.ajax({
            url: base_url + "eliminarRv",
            type: "post",
            dataType: 'json',
            data: {
                rut: rut
            },
            success: function (o) {
                Materialize.toast(o.msg, 3000);
                $("#modalconfirmar").modal('close');
                residentes();
            },
            error: function () {
                Materialize.toast("500", 2000);
            }
        });
    });

    $("#bt_habilitaredificio").on("click", function (e) {
        e.preventDefault();
        var codigo = $("#codigoEdificio").val();
        var nombre = $("#nombreEdificio").val();
        var pass1 = $("#acomprobar").val();
        var pass2 = $("#acomprobar2").val();
        var pass3 = $("#acomprobar3").val();
        var x = $.md5(pass2);

        if (codigo === "" || nombre === "") {
            Materialize.toast("Complete todos los campos", "3000");
        } else {
            if (pass2 === pass3) {
                if (x === pass1) {
                    $.ajax({
                        url: base_url + "habilitare",
                        type: 'post',
                        dataType: 'json',
                        data: {
                            codigo: codigo,
                            nombre: nombre
                        },
                        success: function (o) {
                            Materialize.toast(o.msg, "3000");
                            document.getElementById("formhabilitare").reset();
                        },
                        error: function () {
                            Materialize.toast("500", "3000");
                        }
                    });
                } else {
                    Materialize.toast("La contraseña es incorrecta, intente nuevamente", "3000");
                }
            } else {
                Materialize.toast("Las contraseñas deben coincidir", "3000");
            }
        }
    });

    $("#bt_deshabilitaredificio").on("click", function (e) {
        e.preventDefault();
        var codigo = $("#codigoEdificio2").val();

        if (codigo === "") {
            Materialize.toast("Ingrese codigo", "3000");
        } else {
            $.ajax({
                url: base_url + "deshabilitaredificio",
                type: 'post',
                dataType: 'json',
                data: {
                    codigo: codigo
                },
                success: function (o) {
                    Materialize.toast(o.msg, "3000");
                    $("#codigoEdificio2").val("");
                },
                error: function () {
                    Materialize.toast("500", "3000");
                }
            });
        }
    });

    $("#buscarresidente").on("click", function (e) {
        e.preventDefault();
        var rut = $("#busresed").val();

        if (residente === "") {
            Materialize.toast("Ingrese rut", "3000");
        } else {
            $.ajax({
                url: base_url + "buscarresidente",
                type: 'post',
                dataType: 'json',
                data: {
                    rut: rut
                },
                success: function (o) {

                    $("#resib").val("");
                    if (o.msg === "1") {
                        $("#resi").val(rut);
                    } else {
                        Materialize.toast(o.msg, "3000");
                    }
                },
                error: function () {
                    Materialize.toast("500", "3000");
                }
            });
        }
    });

    $("#bt_estresidente").on("click", function (e) {
        e.preventDefault();
        var numero = $("#nume").val();
        var nombre = $("#nome").val();
        var residente = $("#resi").val();

        if (numero === "" || nombre === "" || residente === "") {
            Materialize.toast("Complete los campos", "3000");
        } else {
            $.ajax({
                url: base_url + "estacioresidente",
                type: 'post',
                dataType: 'json',
                data: {
                    numero: numero,
                    nombre: nombre,
                    residente: residente
                },
                success: function (o) {
                    Materialize.toast(o.msg, "3000");
                    $("#nume").val("");
                    $("#nome").val("");
                    $("#resi").val("");
                },
                error: function () {
                    Materialize.toast("500", "3000");
                }
            });
        }
    });

    $("#buscarreseditar").on("click", function (e) {
        var residente = $("#resib").val();
        $.ajax({
            url: base_url + "buscarresidenteeditar",
            type: 'post',
            dataType: 'json',
            data: {
                residente: residente
            }, success: function (o) {
                if (o.msg === "0") {
                    Materialize.toast("No existen residentes", "4000");
                    $("#bodyrv").empty();
                } else {
                    $("#bodyrv").empty();
                    $.each(o, function (i, o) {
                        var row = "<tr>";
                        row += "<td>" + o.rut + "</td>";
                        row += "<td>" + o.nombre + "</td>";
                        row += "<td>" + o.apellido + "</td>";
                        row += "<td>" + o.edificio + "</td>";
                        row += "<td>" + o.departamento + "</td>";
                        row += "<td>" + o.telefono + "</td>";
                        row += "<td>" + o.fecha + "</td>";
                        row += "<td><a id='bt_editrv' class='btn-floating waves-effect' ><i class='material-icons'>edit</i></a></td>";
                        row += "</tr>";
                        $("#bodyrv").append(row);
                    });
                }
            }, error: function () {
                Materialize.toast("Error","3000");
            }
        });
    });

    $("#fechavisita").on("click", function (e) {
        var fecha = $("#fecha").val();
        //var dateRegExp = /^\d{4}[/-]\d{1,2}[/-]\d{1,2}$/;
        //if (dateRegExp.test(fecha)) {
        $.ajax({
            url: base_url + "buscarvisita2",
            type: 'post',
            dataType: 'json',
            data: {
                fecha: fecha
            },
            success: function (o) {
                if (o.msg === "0") {
                    Materialize.toast("No existen visitas", "4000");
                    $("#bodyvisitas").empty();
                } else {
                    $("#bodyvisitas").empty();

                    $.each(o, function (i, o) {

                        var row = "<tr>";
                        row += "<td>" + o.rut + "</td>";
                        row += "<td>" + o.nombre + "</td>";
                        row += "<td>" + o.apellido + "</td>";
                        row += "<td>" + o.telefono + "</td>";
                        row += "<td>" + o.departamento + "</td>";
                        row += "<td>" + o.fecha + "</td>";
                        row += "</tr>";
                        $("#bodyvisitas").append(row);
                    });
                }
            },
            error: function () {
                Materialize.toast("500", "3000");
            }
        });

        //} else {
        //Materialize.toast("error ingrese fecha valida", "3000");
        //}
    });

    $("#vehiculov").on("change", function () {
        console.log("caac");
        var vehiculo = $("#vehiculov").prop("checked");
        if (vehiculo) {
            $("#agregarvehiculov").show();
        } else {
            $("#agregarvehiculov").hide();
        }
    });

    $("#export").on("click", function (e) {
        var excel_data = $('#ex').html();
        var page = 'reporte.php' + excel_data;
        window.location = page;
    });




});


    