# proyecto-tiendatec

## Cambios de heurística

Al revisar la tienda encontré algunos problemas que podían confundir al usuario.
Hice estos cambios para mejorar la navegación y evitar errores al agregar
productos:

- Enlacé la misma hoja `public/css/estilos.css` en todas las páginas para que
  tengan un diseño consistente.
- Marqué la página actual en el menú con `aria-current="page"` y un subrayado,
  así es más fácil saber dónde estoy.
- Hice obligatorio el precio y el stock, agregué límites y un texto de ayuda
  debajo de cada campo para reducir errores al llenar el formulario.
- Organicé los estilos para que las tarjetas y el formulario se adapten a
  pantallas pequeñas.

Todavía falta que el servidor guarde el producto y muestre una confirmación
después de enviar el formulario. Por ahora, el formulario solo valida los datos
en el navegador.