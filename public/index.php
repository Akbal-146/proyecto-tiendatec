<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mi tienda | Tecnología para ti</title>
    <link rel="stylesheet" href="css/estilos.css?v=2">
  </head>
  <body>
    <aside class="site-header">
      <div class="sidebar-inner">
        <p class="brand"><a href="index.php">Mi tienda <span>Zeus</span></a></p>
        <nav class="site-nav" aria-label="Navegación principal">
          <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="productos.php">Productos</a></li>
            <li><a href="contacto.php">Contacto</a></li>
          </ul>
        </nav>
      </div>
    </aside>
    <main class="container">
      <section class="hero">
        <p class="eyebrow">Tecnología para tu espacio</p>
        <h1>Mejora tu setup con Mi tienda Zeus</h1>
        <p>Encuentra periféricos y accesorios para trabajar, jugar y disfrutar cada día.</p>
        <a class="button button--primary" href="productos.php">Explorar productos</a>
      </section>
      <section aria-labelledby="destacados-titulo">
        <div class="section-heading">
          <h2 id="destacados-titulo">Productos destacados</h2>
          <a class="button button--outline" href="productos.php">Ver catálogo completo</a>
        </div>
        <div class="product-grid">
          <article class="product-card">
            <span class="product-icon" aria-hidden="true">⌖</span>
            <h3>Mouse</h3>
            <p>Mouse gamer · Periférico</p>
            <p class="product-price">$29.99</p>
            <a class="button button--primary" href="detalle_producto.php?id=1">Ver detalles</a>
          </article>
          <article class="product-card">
            <span class="product-icon" aria-hidden="true">⌨</span>
            <h3>Teclado</h3>
            <p>Teclado gamer · Periférico</p>
            <p class="product-price">$19.99</p>
            <a class="button button--primary" href="detalle_producto.php?id=2">Ver detalles</a>
          </article>
          <article class="product-card">
            <span class="product-icon" aria-hidden="true">▣</span>
            <h3>Monitor</h3>
            <p>Monitor gamer · Periférico</p>
            <p class="product-price">$39.99</p>
            <a class="button button--primary" href="detalle_producto.php?id=3">Ver detalles</a>
          </article>
        </div>
      </section>
    </main>
    <footer class="site-footer">
      <div class="container">
        <p>&copy; 2024 Mi Tienda. Todos los derechos reservados.</p>
      </div>
    </footer>
  </body>
</html>
