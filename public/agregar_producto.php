<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar producto | Mi tienda Zeus</title>
    <link rel="stylesheet" href="css/estilos.css?v=2">
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
        <p class="eyebrow">Catálogo</p>
        <h1>Agregar producto</h1>
        <p>Completa los datos del producto que quieres agregar.</p>
      </section>
      <section class="content-card">
        <form action="#" method="post">
          <div class="form-grid">
            <div class="form-field form-field--full">
              <label for="nombre">Nombre del producto</label>
              <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="form-field">
              <label for="categoria">Categoría</label>
              <input type="text" id="categoria" name="categoria" required>
            </div>
            <div class="form-field">
              <label for="precio">Precio</label>
              <input type="number" id="precio" name="precio" step="0.01" min="0">
            </div>
            <div class="form-field">
              <label for="stock">Stock</label>
              <input type="number" id="stock" name="stock" min="0">
            </div>
            <div class="form-actions">
              <button class="button button--primary" type="submit">Agregar producto</button>
              <a class="button button--outline" href="productos.php">Cancelar</a>
            </div>
          </div>
        </form>
      </section>
    </main>
    <footer class="site-footer">
      <div class="container">
        <p>&copy; 2024 Mi Tienda. Todos los derechos reservados.</p>
      </div>
    </footer>
  </body>
</html>
