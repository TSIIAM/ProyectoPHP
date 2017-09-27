Proyecto PHP

## WebMarketCam

Es una empresa  que importa y distribuye articulos para fotografos, camaras, tripodes, flashes, filtros y todo tipo de accesorios.




Detalles:
Tabla Productos(identificador,marca,descripcion,origen,precio y categoria)
origen[USA, Alemania y China]

Campos obligatorios, id autonumerado
categoria es un foreign key de 

Tabla Categoria ( identificador, nombre)
Campos obligatorios id autonumerado




Requisitos:

Pagina de Inicio:

Texto inicial, titulo/logo.Finalidad es brindar vinculos al resto de las secciones de la aplicacion como Menú de Acceso.

Pagina Productos:
Realizar alta,bajas y modificaciones de productos,  categoria es una lista desplegable(combo box), se obtiene de la tabla de categoria.
El origen es una lista desplegable, fija [USA, Alemania y China].
Verificacion del lado de cliente.


Pagina Categorias:
Alta y modificacion, no baja.
Se modfica nombre, para corregir errores de tipeo.

Pagina de Consultas:
Listado de todas las categorias existentes ordenadas alfabeticamente
Listado de todos los productos, con su correspondiente categoria.
Listado de todos los productos de un origen en particular.
Listado de todos los productos de un origen y categoria en particular.

