<?php
    include_once 'Builder.php';
    $builder = new Builder();
    $builder->buildHead();
    if (!isset($_SESSION['step'])){
        $_SESSION["step"] = 1;
        $builder->firstPage();
        return;
    }
    switch ($_SESSION['step']){



        case "1":
            $builder->firstPage();
            $builder->buildFoot();
            break;

        case "2":

            break;

        case "3":

            break;
    }





