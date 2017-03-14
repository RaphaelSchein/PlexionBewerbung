<?php
    include 'functions.php';
    session_start();
    $functions = new functions();
    $sel = new select();

    if ($functions->verfiySVariable("step")){
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

    }else{
       if ($functions->verfiyPVariable("rang")){
           $sel->verifyFirstStep();
       }else {
           header("Location: index.php?p=1");
       }
    }
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
                $this->verifyDev();
                break;
        }
        $this->verifyThird();
    }


    private function verifyDev(){
        $funktions = new functions();
        if ($funktions->verfiyPVariable("JAVA")){
            $_SESSION['java'] = true;
        }else{
            $_SESSION['java'] = false;
        }
        if ($funktions->verfiyPVariable("GIT")){
            $_SESSION['git'] = true;
        }else{
            $_SESSION['git'] = false;
        } if ($funktions->verfiyPVariable("PHP")){
            $_SESSION['php'] = true;
        }else{
            $_SESSION['php'] = false;
        } if ($funktions->verfiyPVariable("MYSQL")){
            $_SESSION['myslq'] = true;
        }else{
            $_SESSION['mysql'] = false;
        }
        if ($funktions->verfiyPVariable("C")){
            $_SESSION['c'] = true;
        }else{
            $_SESSION['c'] = false;
        }
        if ($funktions->verfiyPVariable("WieLang")&&$funktions->verfiyPVariable("SelbstBeschreibung") && $funktions->verfiyPVariable("SundS") && $funktions->verfiyPVariable("ProgrammierFähigkeiten") && $funktions->verfiyPVariable("Wieso") && $funktions->verfiyPVariable("WiesoDU") && $funktions->verfiyPVariable("Referenz") && $funktions->verfiyPVariable("OnlineTime")){

            $_SESSION['WieLang'] = $this->getPost("WieLang");
            $_SESSION['SelbstBeschreibung'] = $this->getPost("SelbstBeschreibung");
            $_SESSION['SundS'] = $this->getPost("SundS");
            $_SESSION['ProgrammierFähigkeiten'] = $this->getPost("ProgrammierFähigkeiten");
            $_SESSION['Wieso'] = $this->getPost("Wieso");
            $_SESSION['WiesoDU'] = $this->getPost("WiesoDU");
            $_SESSION['Referenz'] = $this->getPost("Referenz");
            $_SESSION['OnlineTime'] = $this->getPost("OnlineTime");
        }
    }

    private function verifyThird(){
        $funktions = new functions();
        if ($funktions->verfiyPVariable("SelbstBeschreibung") && $funktions->verfiyPVariable("SundS") && $funktions->verfiyPVariable("Faehigkeitens") && $funktions->verfiyPVariable("Wieso") && $funktions->verfiyPVariable("WiesoDU") && $funktions->verfiyPVariable("Referenz") && $funktions->verfiyPVariable("OnlineTime")){

            $_SESSION['SelbstBeschreibung'] = $this->getPost("SelbstBeschreibung");
            $_SESSION['SundS'] = $this->getPost("SundS");
            $_SESSION['Faehigkeiten'] = $this->getPost("Faehigkeiten");
            $_SESSION['Wieso'] = $this->getPost("Wieso");
            $_SESSION['WiesoDU'] = $this->getPost("WiesoDU");
            $_SESSION['Referenz'] = $this->getPost("Referenz");
            $_SESSION['OnlineTime'] = $this->getPost("OnlineTime");
        }
    }

    private function call(){


        echo 'Bewerbung des Users '.$_SESSION['mcname']." für den Rang ".$_SESSION['rang']."<br>";

        echo 'Daten: <br>';
        echo 'Name: '.$_SESSION['vorname']." ".$_SESSION['nachname'];
        $this->e();
        echo 'Username: '.$_SESSION['mcname'];$this->e();
        echo 'Alter: '.$_SESSION['alter'];$this->e();
        echo 'Nationalität: '.$_SESSION['nation'];$this->e();
        echo 'EMail Addresse: '.$_SESSION['email'];$this->e();
        echo 'Handynummer: '.$_SESSION['handy'];$this->e();
        echo '=============================================';
        echo 'Selbstbeschreibung: '.$_SESSION['SelbstBeschreibung'];$this->e();
        echo 'Stärken und Schwächen: '.$_SESSION['SundS'];
        echo 'Wieso will ich mich hier bewerben: '.$_SESSION['Wieso'];
        echo 'Wieso sollten wir uns für dich entscheiden: '.$_SESSION['WiesoDU'];
        echo 'Refernzen: '.$_SESSION['Referenz'];
        echo 'Wochentliche Online Zeit: '.$_SESSION['OnlineTime'];










    }


    private function e(){
        echo '<br>';
    }

}