<?php
    include 'functions.php';
    session_start();
    $functions = new functions();
    $sel = new select();

    if ($functions->verfiySVariable("step")){
        switch ($_SESSION['step']){
            case "1":
                $sel->verifyFirstStep();
                break;
            case "2":
                $sel->verifySecondStep();
                break;
            case "3":
                echo '24';
                $sel->verifyThirdStep();
                break;
            case 3:
                $sel->verifyThirdStep();
                break;

        }
        echo $_SESSION['step'];
        header("Location: index.php?p=13");

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
        echo $_SESSION['step'];
        $funktions = new functions();
        if ($funktions->verfiyPVariable("JAVA")){
            $_SESSION['java'] = "true";
        }else{
            $_SESSION['java'] = "false";
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
            header("Location: index.php?r=1");
            $this->call(true);
        }
        header("Location: https://google.com");
    }

    private function verifyThird(){
        $funktions = new functions();
        if ($funktions->verfiyPVariable("SelbstBeschreibung") && $funktions->verfiyPVariable("SundS") && $funktions->verfiyPVariable("Faehigkeiten") && $funktions->verfiyPVariable("Wieso") && $funktions->verfiyPVariable("WiesoDU") && $funktions->verfiyPVariable("Referenz") && $funktions->verfiyPVariable("OnlineTime")){

            $_SESSION['SelbstBeschreibung'] = $this->getPost("SelbstBeschreibung");
            $_SESSION['SundS'] = $this->getPost("SundS");
            $_SESSION['Faehigkeiten'] = $this->getPost("Faehigkeiten");
            $_SESSION['Wieso'] = $this->getPost("Wieso");
            $_SESSION['WiesoDU'] = $this->getPost("WiesoDU");
            $_SESSION['Referenz'] = $this->getPost("Referenz");
            $_SESSION['OnlineTime'] = $this->getPost("OnlineTime");
            $this->call(false);
            header("Location: index.php?r=1");
        }else{
            header("Location: index.php");
        }

    }

    /**
     * @param $dev boolean;
     */
    private function call($dev){

        $msg = "
[B]Daten:
[LIST]
[*]Vorname: VNA
[*]Nachname: NNA
[*]Username: UNA
[*]Nationalität: NAT
[*]Email: EMA
[*]Handynummer: HANN
[/LIST]
Details:

[SPOILER=\"Selbstbeschreibung\"]SBT[/SPOILER]


[SPOILER=\"Fähigkeiten\"]FÄH[/SPOILER]


[SPOILER=\"Stärken und Schwächen\"]SundS[/SPOILER]


[SPOILER=\"Wieso will ich mich hier bewerben\"]WIH[/SPOILER]


[SPOILER=\"Wieso sollten wir uns für dich entscheiden\"]WID[/SPOILER]


[SPOILER=\"Referenzen\"]RFZ[/SPOILER]


[SPOILER=\"Wie Lang Programmierst du schon ?\"]WILA[/SPOILER]


[SPOILER=\"Programmier Sprachen\"]PRS[/SPOILER][/B]


";
        $f = new functions();
        if ($dev) {
            $prs = "[LIST]";

            if ($f->verfiySVariable("java")&&$_SESSION['java'] == "true"){
                $prs = $prs."[*] Java";
            }
            if ($f->verfiySVariable("php")&&$_SESSION['php'] == "true"){
                $prs = $prs."[*] PHP";
            }
            if ($f->verfiySVariable("c")&&$_SESSION['c'] == "true"){
                $prs = $prs."[*] C / C++ / C#";
            }
            if ($f->verfiySVariable("myslq")&&$_SESSION['myslq'] == "true"){
                $prs = $prs."[*] MySQL";
            }
            if ($f->verfiySVariable("git")&&$_SESSION['git'] == "true"){
                $prs = $prs."[*] GIT";
            }
            $prs = $prs." [/LIST]";
            $search = array("VNA", "NNA", "UNA", "NAT", "EMA", "HANN", "SBT", "FÄH", "SundS", "WIH", "WID", "RFZ", "WILA", "PRS");
            $replace = array($_SESSION['vorname'], $_SESSION['nachname'], $_SESSION['mcname'], $_SESSION['nation'], $_SESSION['email'], $_SESSION['handy'], $_SESSION['SelbstBeschreibung'], $_SESSION['ProgrammierFähigkeiten'], $_SESSION['SundS'], $_SESSION['Wieso'], $_SESSION['WiesoDU'],$_SESSION['Referenz'], $_SESSION['WieLang'], $prs);
        }else{
            $search = array("VNA", "NNA", "UNA", "NAT", "EMA", "HANN", "SBT", "FÄH", "SundS", "WIH", "WID", "RFZ", "[SPOILER=\"Wie Lang Programmierst du schon ?\"]WILA[/SPOILER]", "[SPOILER=\"Programmier Sprachen\"]PRS[/SPOILER][/B]");
            $replace = array($_SESSION['vorname'], $_SESSION['nachname'], $_SESSION['mcname'], $_SESSION['nation'], $_SESSION['email'], $_SESSION['handy'], $_SESSION['SelbstBeschreibung'], $_SESSION['Faehigkeiten'], $_SESSION['SundS'], $_SESSION['Wieso'], $_SESSION['WiesoDU'],$_SESSION['Referenz'], "","");
        }
        $msg = str_replace($search,$replace,$msg);

        $title = urlencode("Bewerbung des Users ".$_SESSION['mcname']." für den Rang ".$_SESSION['rang']);
        $url = "https://forum.plexion.de/api.php?";
        $url = $url."hash=Plexion.de:JDJhJDEwJHRqLjlEMlQyVVZMU0h3MlVvSWdrbk9USWp5d0g5Y1U4RC5HejduOXpGUzRDZ0c5VWxpdXBp&";
        $url = $url."action=createThread&";
        $url = $url."node_id=18&";
        $url = $url."message=".urlencode($msg)."&";
        $url = $url."title=".$title."";

        echo $url."<br><br><br>";

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $url
        ));
        $resp = curl_exec($curl);
        curl_close($curl);








    }


    private function e(){
        echo '<br>';
    }

}