<?php

class Categoria
{
    private $id;
    private $nombre;
    private $descripcion;
    private $activa;
    private $cantidadProductos;

    public function __construct($id, $nombre, $descripcion, $activa = true, $cantidadProductos = 0)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->activa = $activa;
        $this->cantidadProductos = $cantidadProductos;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function getActiva()
    {
        return $this->activa;
    }

    public function getCantidadProductos()
    {
        return $this->cantidadProductos;
    }

    public function activar()
    {
        $this->activa = true;
    }

    public function desactivar()
    {
        $this->activa = false;
    }

    public static function desdeArreglo($datos)
    {
        return new self(
            $datos['id'],
            $datos['nombre'],
            $datos['descripcion'],
            isset($datos['activa']) ? $datos['activa'] : true,
            isset($datos['cantidadProductos']) ? $datos['cantidadProductos'] : 0
        );
    }
}
