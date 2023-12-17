# TiendaVirtualPracticaDSW

Proyecto: Tienda Virtual con Registro y Autenticación

Crea un sistema de tienda virtual en PHP que cumpla con los siguientes requisitos:
1. Registro de Usuario:
○ Crear una página llamada register.php con un formulario que solicite al
usuario su nombre, correo electrónico y contraseña.
○ Almacenar la información del usuario en una base de datos MySQL llamada
usuarios que tenga las siguientes columnas: id (autoincremento), nombre,
correo y contraseña.

2. Envío de Correo de Confirmación:
○ Después de registrar al usuario, envía un correo de confirmación que incluya
un enlace único con el token generado.
○ El enlace debe dirigir al usuario a una página de confirmación
(confirmar.php) donde se valide el token y se actualice el estado de
confirmación del usuario en la base de datos.

3. Página de Confirmación (confirmar.php):
○ Crea una página llamada confirmar.php que valide el token recibido por el
enlace y actualice el estado de confirmación del usuario en la base de datos.
○ Muestra un mensaje indicando si la confirmación fue exitosa o no.

4. Inicio de Sesión:
○ Crear una página llamada login.php con un formulario que solicite al
usuario su correo electrónico y contraseña.
○ Verificar la autenticidad de las credenciales con la información almacenada
en la base de datos.

5. Cookies y Sesiones:
○ Al iniciar sesión con éxito, establecer una cookie llamada user_email que
almacene el correo electrónico del usuario.
○ Utilizar sesiones para mantener la información de la sesión activa.

6. Catálogo de Productos:
○ Crear una página llamada catalogo.php que muestre una lista de
productos disponibles para la venta. Cada producto debe incluir al menos un
nombre, una descripción y un precio.

8. Carrito de Compras:
○ Implementar un carrito de compras que permita a los usuarios agregar
productos y ajustar las cantidades.
○ Utilizar sesiones para almacenar la información del carrito.

9. Proceso de Compra:
○ Crear una página llamada checkout.php que muestre un resumen de la
compra, incluyendo los productos seleccionados, sus cantidades y el total a
pagar.

10. Área Administrativa:
○ Crear una página llamada admin.php que sea accesible solo para usuarios
autenticados como administradores.
○ En esta página, mostrar información relevante para la administración de la
tienda, como estadísticas de ventas o la capacidad de agregar nuevos
productos al catálogo.

11. Cerrar Sesión:
○ Incluir un botón o enlace en todas las páginas para cerrar sesión que elimine
la cookie y cierre la sesión.

Evaluación:
● Implementación exitosa de las funciones de registro y autenticación.
● Uso adecuado de cookies y sesiones.
● Manejo correcto de la base de datos para almacenar usuarios y productos.
● Catálogo de productos funcional y atractivo.
● Carrito de compras interactivo y persistente a través de sesiones.
● Proceso de compra que refleje de manera precisa los productos seleccionados y el
total a pagar.
● Página administrativa que sea accesible solo para administradores y que ofrezca
funciones relevantes.
● Cierre de sesión efectivo.
