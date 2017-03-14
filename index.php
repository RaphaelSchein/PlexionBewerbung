<?php
    include_once 'Builder.php';
    $builder = new Builder();
    $builder->buildHead();
if (isset($_GET["r"])&&$_GET['r'] == "1"){
    $builder->buildReadyPage();
    $builder->buildFoot();
    return;
    //session_destroy();
}
    if (!isset($_SESSION['step'])){
        $_SESSION["step"] = 1;
        $builder->firstPage();
        $builder->buildFoot();
        return;
    }
    if (isset($_GET['logout'])){
        //session_destroy();
    }

    
    if (isset($_SESSION['step'])){


    switch ($_SESSION['step']){
        case "1":
            $builder->firstPage();
            $builder->buildFoot();
            break;
        case "2":
            $builder->buidlSecond();
            $builder->buildFoot();
            break;
        case "3":
            if (strtolower($_SESSION['rang'] == "developer")){
                $builder->buildThirdDeveloper();
                $builder->buildFoot();
            }else{
                $builder->buildThird();
                $builder->buildFoot();
            }
            break;
    }
    }





