<?php

class Postagem
{
    public static function selecionatodos()
    {
        $con = new PDO('mysql: host=localhost; dbname=serie-criando-site;', 'root', '');

        var_dump($con);
    }
}