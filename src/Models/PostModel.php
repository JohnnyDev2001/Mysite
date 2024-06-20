<?php

namespace src\Models;

use src\Core\Conection;

Class PostModel{
    public function read(): array
    {
        $query = "SELECT * FROM posts";
        $sql = Conection::getInstancia()->query($query);

        $res = $sql->fetchAll();

        return $res;
    }
}