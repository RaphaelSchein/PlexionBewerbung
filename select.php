<?php
    //include 'functions.php';
    session_start();
    //$functions = new functions();
    //$sel = new select();

    print_r($_GET);
    print_r($_POST);
    echo "===============================================";
    print_r($_SESSION);
   // if ($functions->verfiySVariable($_SESSION['step'])){

   /* if (false){
        switch ($_SESSION['step']){
            case 1:
                $sel->verifyFirstStep();
                break;
            case 2:
                $sel->verifySecondStep();
                break;
            case 3:
                $sel->verifyThirdStep();
        }
        header("Location: index.php?p=1");

    }if (false){
       if ($functions->verfiyPVariable("rang")){
           $sel->verifyFirstStep();
       }else {
           header("Location: index.php?p=1");
       }
    }*/
class select{
    public function verifyFirstStep(){
        $functions = new functions();
        if ($functions->verfiyPVariable("rang")){
            $_SESSION['rang'] = $_POST['rang'];
            $_SESSION['step'] = 2;
            header("Location: index.php?p=2");
        }
        header("Location: index.php?p=1&e=".urlencode("Du hast keinen Rang ausgewählt"));
    }

    public function verifySecondStep(){
        $functions = new functions();
        if ($functions->verfiyPVariable("Vorname") && $functions->verfiyPVariable("Nachname") && $functions->verfiyPVariable("MinecraftName") && $functions->verfiyPVariable("Nationalitaet") && $functions->verfiyPVariable("Email")  && $functions->verfiyPVariable("alter") && $functions->verfiyPVariable("HandyNummer")){
            $_SESSION['vorname'] = $this->getPost("Vorname");
            $_SESSION['nachname'] = $this->getPost("Nachname");
            $_SESSION['mcname'] = $this->getPost("MinecraftName");
            $_SESSION['nation'] = $this->getPost("Nationalitaet");
            $_SESSION['email'] = $this->getPost("Email");
            $_SESSION['alter'] = $this->getPost("alter");
            $_SESSION['handy'] = $this->getPost("HandyNummer");
            $_SESSION['step'] = 3;
        }else{
            header("Location index.php?p=2&e=".urlencode("Es sind nicht alle Angaben vollständig oder korrekt"));
        }

    }

    /**
     * @param $val string
     * @return string
     */

    private function getPost($val){
        return $_POST[$val];
    }

    public function verifyThirdStep(){
        switch (strtolower($_SESSION['rang'])){
            case "developer":

        }
    }

}