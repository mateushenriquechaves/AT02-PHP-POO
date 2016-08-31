<?php
/**
 * Created by PhpStorm.
 * User: mateus
 * Date: 27/08/2016
 * Time: 20:49
 */


    function conectar(){

        $pdo = new PDO("mysql:host=localhost;dbname=biblioteca", "root", "");

            return $pdo;
    }