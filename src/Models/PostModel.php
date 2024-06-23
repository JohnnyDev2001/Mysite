<?php

namespace src\Models;

use src\Core\Conection;

Class PostModel{

    public function search(): array
    {

        $query = "SELECT * FROM posts";
        $sql = Conection::getInstancia()->query($query);
        $res = $sql->fetchAll();

        return $res;
    }

    public function searchBar($dado): array
    {

        $query = "SELECT * FROM posts WHERE title LIKE '%{$dado}%'";
        $sql = Conection::getInstancia()->query($query);
        $res = $sql->fetchAll();

        return $res;
    }


    public function searchId(int $id)
    {

        $query = "SELECT * FROM posts WHERE id = {$id}";
        $sql = Conection::getInstancia()->query($query);

        $res = $sql->fetch();

        return $res;
    }
}