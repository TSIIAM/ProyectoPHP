$("document").ready(main);


function main() {

    verify();
}


//funcion para realizar verificacion de los formularios
function verify() {
    //verifica en que pagina se encuentra, dependiendo de la pagina, su respectiva verificacion
    alert("test");


    $("#altaProductoBoton").on("click", verificarAltaProducto);
    $("#altaCategoriaBoton").on("click", verificarAltaCategoria);
    $("#bajaProductoBoton").on("click", verificarBajaProducto);

}
//funcion para verificar que los campos no esten vacios
function validarVacio() {
    //los argumentos serian inputs que se colocan cuando se llama a la funcion;
    var resultado = false;
    for (var i = 0; i < arguments.length; i++) {

        console.log(arguments[i]);
        if (typeof arguments[i] == "string" && arguments[i].replace(/\s+/g, '').length != 0 ||
            typeof arguments[i] === "number" && !isNaN(arguments[i]) && arguments[i] > 0) {
            resultado = true;

        } else {
            resultado = false;
            break;
        }
    }
    return resultado;
}

//verificacion del alta de producto.
function verificarAltaProducto() {
    console.log("alta producto");
    //inputs de los campos del formulario
    var marcaProducto = $("#altaProductoInputMarca").val();
    var descripcionProducto = $("#altaProductoInputDescripcion").val();
    var origenProducto = $("#altaProductoInputOrigen").val();
    var precioProducto = Number($("#altaProductoInputPrecio").val());
    var categoriaProducto = $("#altaProductoInputCategoria").val();


    //resultados del formulario
    var altaProductoError = $("#altaProductoError");
    var altaProductoResultado = $("#altaProductoResultado");
    //verificar si los campos estan vacios
    if (origenProducto && categoriaProducto != "empty") {

        if (validarVacio(marcaProducto, descripcionProducto, origenProducto, precioProducto, categoriaProducto)) {
            altaProductoError.hide();
            altaProductoResultado.show().html(`Marca: ${marcaProducto} Descripción: ${descripcionProducto} Origen: ${origenProducto} Precio: \$${precioProducto}  Categoria: ${categoriaProducto} `);

        } else {
            altaProductoResultado.hide()
            altaProductoError.show().html("Error por favor llene los campos.");
            return false;
        }
    } else {
        altaProductoResultado.hide()
        altaProductoError.show().html("Error por favor seleccione una opcion.");
        return false;
    }

}

//verificacion del alta de categoria
function verificarAltaCategoria() {
    console.log("alta categoria");
    var nombreCategoria = $("#altaCategoriaInputNombre");
    var altaCategoriaError = $("#altaCategoriaError");
    var altaCategoriaResultado = $("#altaCategoriaResultado");
    if (typeof nombreCategoria != "number" && validarVacio(nombreCategoria.val())) {
        altaCategoriaError.hide()
        altaCategoriaResultado.show().html("Categoria " + nombreCategoria.val());


    } else {
        altaCategoriaResultado.hide()
        altaCategoriaError.show().html("Error por favor llene los campos.");
        return false;
    }
}

function verificarBajaProducto() {
    alert("baja producto");
    var idProducto = Number($("#bajaProductoID").var());
    var bajaProductoError = $("#bajaProductoError");
    var bajaProductoResultado = $("#bajaProductoResultado");
    if (validarVacio(idProducto)) {
        bajaProductoError.hide()
        bajaProductoResultado.show().html("ID " + idProducto);
    } else {
        bajaProductoResultado.hide()
        bajaProductoError.show().html("Error por favor llene el campo.");
        return false;
    }

}