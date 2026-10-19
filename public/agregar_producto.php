    <HTML></HTML>
      <head>
        <title>Mi tienda - agregar producto</title>
      </head>
      <body>
        <header>
        <h1>Bienvenido a Mi Tienda</h1>
        <nav>
          <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="productos.php">Productos</a></li>
            <li><a href="contacto.php">Contacto</a></li>
          </ul>
        </nav>
        </header>
        <main>
        <section>
            <H2>Agregar Producto</H2>
            <form action="#" method="post">
                <label for="nombre">Nombre del producto:</label>
                <input type="text" id="nombre" name="nombre" required><br><br>
                
                <label for="categoria">Categoría:</label>
                <input type="text" id="categoria" name="categoria" required><br><br>
                
                <label for="precio">Precio:</label>
                <input type="number" id="precio" name="precio" step="0.01" min="0"><br><br>
                
                <label for="stock">stock</label>
                <input type="number" id="stock" name="stock" min="0"><br><br>
                <button type="submit">Agregar Producto</button>
            </form>
        </section>
        </main>
        <footer>
        <p>&copy; 2024 Mi Tienda. Todos los derechos reservados.</p>
        </footer>
      </body>
    </HTML>