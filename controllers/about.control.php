<?php

function run(){
    $viewData = array(
        "cuenta"=>"0601199803405",
        "nombre"=>"José Roberto Hidalgo",
        "correo"=>"joserh98@hotmail.com"
    );
    $grados = array(
        array("id"=>"1", "year"=>"2005-2010", "grade"=>"Educación Primaria"),
        array("id"=>"2", "year"=>"2011-2013", "grade"=>"Ciclo Común"),
        array("id"=>"3", "year"=>"2014-2015", "grade"=>"Bachillerato en Ciencias y Humanidades"),
        array("id"=>"4", "year"=>"2016-2020", "grade"=>"Pasante de Ing. En Ciencias de la Computación (90%)")
    );
    $viewData["grados"] = $grados;
    renderizar("about", $viewData);
}

run();

?>