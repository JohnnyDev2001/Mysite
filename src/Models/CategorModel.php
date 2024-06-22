<?php

namespace src\Models;

use src\Core\Conection;

Class CategorModel{

    public function search(): array
    {

        $query = "SELECT * FROM categories";
        $sql = Conection::getInstancia()->query($query);
        $res = $sql->fetchAll();

        return $res;
    }

    public function searchId(int $id)
    {

        $query = "SELECT * FROM categories WHERE id = {$id}";
        $sql = Conection::getInstancia()->query($query);

        $res = $sql->fetch();

        return $res;
    }
}