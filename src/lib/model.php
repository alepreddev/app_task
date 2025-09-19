<?php

namespace AppTask\App\Lib;
use AppTask\App\Lib\Database;

class Model extends Database

{
    private Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }
    // Aquí puedes agregar métodos comunes para todos los modelos

    // funciones para ejecutar consultas
    // nota: solo para cosultas simples, es decir, sin ninguna condición o insert de dato, para consultas preparadas usar el metodo prepare()
    public function query($query)
    {
        return $this->db->connect()->query($query);
    }
    // funcion para preparar consultas
    public function prepare($query)
    {
        return $this->db->connect()->prepare($query);
    }

    // funcion para traer todos los datos de una tabla
    public function getAll($tabla)
    {
        $query = "SELECT * FROM :tabla";
        $stmt = $this->prepare($query);
        $stmt->execute([':tabla' => $tabla]);
        return $stmt->fetchAll();
    }

    // funcion para traer los datos de una tabla por id y columna
    // ejemplo: getById('usuarios','id_columna', ) -> SELECT id FROM usuarios WHERE id=1
    public function getById($tabla, $colum, $id)
    {
        $query = "SELECT :colum FROM :tabla WHERE :id";
        $stmt = $this->prepare($query);
        $stmt->execute([':tabla' => $tabla, ':colum' => $colum,':id' => $id]);
        return $stmt->fetch();
    }

}