<?php

class HomeController
{
    public function index()
    {
        //echo 'teste';
        Postagem::selecionatodos();
    }
}