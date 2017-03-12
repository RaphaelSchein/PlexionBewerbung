<?php
    include_once 'Builder.php';
    $builder = new Builder();
    $builder->buildHead();
    if (!isset($_SESSION['step'])){
        $_SESSION["step"] = "0";
        $builder->firstPage();
        return;
    }
    switch ($_SESSION['step']){
        case "0":
            $builder->firstPage();
            break;

        case "1":

            break;

        case "2":

            break;

        case "3":

            break;
    }





