<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Productos | Mi tienda Zeus</title>
    <link rel="stylesheet" href="css/estilos.css">
  </head>
  <body>
    <aside class="site-header">
      <div class="sidebar-inner">
        <p class="brand"><a href="index.php">Mi tienda <span>Zeus</span></a></p>
        <nav class="site-nav" aria-label="Navegación principal">
          <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="productos.php" aria-current="page">Productos</a></li>
            <li><a href="contacto.php">Contacto</a></li>
          </ul>
        </nav>
      </div>
    </aside>
    <main class="container">
      <section class="page-heading">
        <p class="eyebrow">Encuentra lo que necesitas</p>
        <h1>Catálogo de productos</h1>
        <p>Explora nuestros periféricos y elige el complemento perfecto para tu setup.</p>
        <a class="button button--primary" href="agregar_producto.php">Agregar producto</a>
      </section>
      <section class="product-grid" aria-label="Productos disponibles">
        <article class="product-card">
          <span class="product-icon" aria-hidden="true">⌖</span>
          <h2>Mouse</h2>
          <p>Mouse gamer · Periférico</p>
          <p class="product-price">$29.99</p>
          <a class="button button--primary" href="detalle_producto.php?id=1">Ver detalles</a>
        </article>
        <article class="product-card">
          <span class="product-icon" aria-hidden="true">⌨</span>
          <h2>Teclado</h2>
          <p>Teclado gamer · Periférico</p>
          <p class="product-price">$19.99</p>
          <a class="button button--primary" href="detalle_producto.php?id=2">Ver detalles</a>
        </article>
        <article class="product-card">
          <span class="product-icon" aria-hidden="true">▣</span>
          <h2>Monitor</h2>
          <p>Monitor gamer · Periférico</p>
          <p class="product-price">$39.99</p>
          <a class="button button--primary" href="detalle_producto.php?id=3">Ver detalles</a>
        </article>
        <article class="product-card">
          <span class="product-icon" aria-hidden="true">♫</span>
          <h2>Bocinas</h2>
          <p>Bocinas gamer · Periférico</p>
          <p class="product-price">$59.99</p>
          <a class="button button--primary" href="detalle_producto.php?id=4">Ver detalles</a>
        </article>
        <article class="product-card">
          <span class="product-icon" aria-hidden="true">♫</span>
          <h2>Audífonos</h2>
          <p>Audífonos gamer · Periférico</p>
          <p class="product-price">$79.99</p>
          <a class="button button--primary" href="detalle_producto.php?id=5">Ver detalles</a>
        </article>
      </section>
    </main>
    <footer class="site-footer">
      <div class="container">
        <p>&copy; 2024 Mi Tienda. Todos los derechos reservados.</p>
      </div>
    </footer>
  </body>
</html>
