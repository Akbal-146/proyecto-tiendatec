<?php

require_once __DIR__ . '/../src/modelos/Categoria.php';
require_once __DIR__ . '/../src/modelos/Producto.php';

$rutaDatos = __DIR__ . '/../datos/datos.json';
$contenido = file_get_contents($rutaDatos);
if ($contenido === false) {
    throw new RuntimeException('No se pudo leer el archivo de productos.');
}

$datos = json_decode($contenido, true);
if (!is_array($datos)) {
    throw new RuntimeException('El archivo de productos no contiene JSON válido.');
}

$productos = array();
$categorias = array();

foreach ($datos as $registro) {
    $producto = Producto::desdeArreglo($registro);
    $productos[] = $producto;

    $nombreCategoria = $producto->getCategoria();
    if (!isset($categorias[$nombreCategoria])) {
        $nombreVisible = $nombreCategoria === 'periferico'
            ? 'Periféricos'
            : ucfirst($nombreCategoria);
        $categorias[$nombreCategoria] = Categoria::desdeArreglo(array(
            'id' => count($categorias) + 1,
            'nombre' => $nombreVisible,
            'descripcion' => 'Productos de la categoría ' . $nombreVisible,
            'cantidadProductos' => 0
        ));
    }
}

foreach ($productos as $producto) {
    $nombreCategoria = $producto->getCategoria();
    $categoria = $categorias[$nombreCategoria];
    $categorias[$nombreCategoria] = Categoria::desdeArreglo(array(
        'id' => $categoria->getId(),
        'nombre' => $categoria->getNombre(),
        'descripcion' => $categoria->getDescripcion(),
        'activa' => $categoria->getActiva(),
        'cantidadProductos' => $categoria->getCantidadProductos() + 1
    ));
}

foreach ($categorias as $categoria) {
    $categoria->desactivar();
    if ($categoria->getActiva() !== false) {
        throw new RuntimeException('Falló la prueba de desactivar categoría.');
    }

    $categoria->activar();
    if ($categoria->getActiva() !== true) {
        throw new RuntimeException('Falló la prueba de activar categoría.');
    }
}

$primerProducto = $productos[0];
$pruebaProducto = Producto::desdeArreglo(array(
    'id' => $primerProducto->getId(),
    'nombre' => $primerProducto->getNombre(),
    'categoria' => $primerProducto->getCategoria(),
    'precio' => $primerProducto->getPrecio(),
    'descripcion' => $primerProducto->getDescripcion(),
    'stock' => $primerProducto->getStock()
));
$pruebaProducto->actualizarPrecio($pruebaProducto->getPrecio() + 1);
if (!$pruebaProducto->reducirStock(1)) {
    throw new RuntimeException('Falló la prueba de stock del producto.');
}

function escapar($texto)
{
    return htmlspecialchars((string) $texto, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prueba de modelos</title>
    <link rel="stylesheet" href="css/estilos.css?v=6">
  </head>
  <body>
    <aside class="site-header">
      <div class="sidebar-inner">
        <p class="brand"><a href="index.php">Mi tienda <span>Zeus</span></a></p>
        <nav class="site-nav" aria-label="Navegación principal">
          <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="productos.php">Productos</a></li>
          </ul>
        </nav>
      </div>
    </aside>
    <main class="container">
      <section class="page-heading">
        <h1>Prueba de modelos</h1>
        <p>La información se carga desde el archivo de productos de la tienda.</p>
      </section>
      <section class="content-card">
        <h2>Categorías</h2>
        <ul>
          <?php foreach ($categorias as $categoria): ?>
            <li><?php echo escapar($categoria->getNombre()); ?>:
              <?php echo escapar($categoria->getCantidadProductos()); ?> productos</li>
          <?php endforeach; ?>
        </ul>
      </section>
      <section class="product-grid">
        <?php foreach ($productos as $producto): ?>
          <article class="product-card">
            <h2><?php echo escapar($producto->getNombre()); ?></h2>
            <p><?php echo escapar($producto->getDescripcion()); ?></p>
            <p>Categoría: <?php echo escapar($producto->getCategoria()); ?></p>
            <p class="product-price">$<?php echo escapar(number_format($producto->getPrecio(), 2)); ?></p>
            <p>Existencias: <?php echo escapar($producto->getStock()); ?></p>
          </article>
        <?php endforeach; ?>
      </section>
      <p class="form-help">Pruebas de Categoria y Producto completadas correctamente.</p>
    </main>
  </body>
</html>
