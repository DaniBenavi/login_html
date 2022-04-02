<?php

require_once '../config.php';

class Usuarios
{
    public function MostrarUsuarios()
    {
        $result = $this->mysqli->query("select * from usuarios");
        while ($fila = $result->fetch_assoc()) {
            $data[] = $fila;
        }
        if (isset($data)) {
            return $data;
        }
    }
}
