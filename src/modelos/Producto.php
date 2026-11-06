<?php

class Producto
{
    private $id;
    private $nombre;
    private $categoria;
    private $precio;
    private $descripcion;
    private $stock;

    public function __construct($id, $nombre, $categoria, $precio, $descripcion, $stock)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->categoria = $categoria;
        $this->precio = $precio;
        $this->descripcion = $descripcion;
        $this->stock = $stock;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function getStock()
    {
        return $this->stock;
    }

    public function actualizarPrecio($precio)
    {
        $this->precio = $precio;
    }

    public function reducirStock($cantidad)
    {
        if ($cantidad < 0 || $cantidad > $this->stock) {
            return false;
        }

        $this->stock -= $cantidad;
        return true;
    }

    public static function desdeArreglo($datos)
    {
        $campos = array('id', 'nombre', 'categoria', 'precio', 'descripcion', 'stock');

        foreach ($campos as $campo) {
            if (!array_key_exists($campo, $datos)) {
                throw new InvalidArgumentException('El producto no tiene el campo ' . $campo);
            }
        }

        return new self(
            $datos['id'],
            $datos['nombre'],
            $datos['categoria'],
            $datos['precio'],
            $datos['descripcion'],
            $datos['stock']
        );
    }
}
