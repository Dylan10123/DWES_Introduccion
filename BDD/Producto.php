<?php 
    class Producto {
        private int $id;
        private string $nombre;
        private float $precio;

        public function __construct(string $nombre, float $precio) {
            $this->nombre = $nombre;
            $this->precio = $precio;
        }

        public function getPrecio()
        {
                return $this->precio;
        }

        public function setPrecio($precio)
        {
                $this->precio = $precio;

                return $this;
        }

        public function getNombre()
        {
                return $this->nombre;
        }

        public function setNombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }

        public function getId()
        {
                return $this->id;
        }

        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }
    }
?>