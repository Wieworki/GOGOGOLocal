# Gogogolocal

## Descripcion del proyecto

Gogogolocal es un negocio de ventas de mangas, comics, y otros productos relacionados. El sistema web desarrollado en este proyecto, tiene como fin permitir no solo todas las funcionalidades de un e-commerce, sino también brindar otras funcionalidades a los dueños de la página, como puede ser el manejo del stock de los productos.

## Usuarios del sistema

El sistema contará con dos tipos de usuarios:

- Invitado
- Administrador

**Diagrama de casos de uso**

![imagen](https://user-images.githubusercontent.com/45775681/201704882-96255958-cab3-4c50-b47f-1d8854a93fe9.png)

### Invitado

El usuario invitado es el rol por defecto que se le asigna a la persona no autenticada que ingresa a la página. Deberá poder ver el catálogo de productos, y gestionar un pedido al negocio.

### Administrador

Rol asignado a los dueños de la página. Deberán poder gestionar el stock actual, pudiendo actualizar de esta manera los precios de cada uno de los productos de la página

## Entidades

### Producto
Entidad central del proyecto. Representará los productos vendidos por el negocio.
Cuenta con las siguientes propiedades:

- ID
- ID_tipo
- ID_editorial
- Nombre

### Tipo producto
En principio, habrá dos tipos de productos: mangas y comics
La entidad cuenta con:

- ID
- Nombre

### Volumen
Entidad débil, cuyo fin es representar los distintos volumenes o ediciones que puede tener un producto. Además almacenará el stock disponible de cada uno.
Cuenta con las siguientes propiedades:

- ID
- Id_producto
- Nombre (o número de volumen)
- Cantidad (cantidad en stock)

### Editorial
Representa las distintas editoriales asociadas a los productos.
Esta entidad cuenta con:

- ID
- Nombre

### Genero
Representa los distintos géneros de los mangas y cómics. El fin de realizar esta asociación es permitir distintas búsquedas desde la página web, usando como filtro los géneros de los productos.

Esta entidad cuenta con:

- ID
- Nombre

### Genero producto
Entidad débil, vincula los productos con un género
La entidad cuenta con:

- ID
- ID_producto
- ID_genero

### Usuario
Entidad que almacena los datos de sesión de los administradores.
Cuenta con:

- ID
- username
- password
- email
