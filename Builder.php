<?php
    class Builder{

        public function buildHead(){
            session_start();
            echo '
            
                <!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="mdl.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
    <link rel="stylesheet" href="custom.css">

    <script src="custom.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        .center{
            margin-left: auto;
            margin-right:auto;
        }
        body{
            background-image: url("img/bg.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .mdl-card__media {
            margin: 0;
        }

    </style>
</head>
<body>
<div class="mdl-grid">
    <div class="mdl-layout-spacer"></div>
    <div class="mdl-card mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-shadow--2dp">
        <figure class="mdl-card__media">
            <div class="center">
                <img class="center" src="img/card-header.png" alt="" />
            </div>
        </figure>
        <div class="mdl-card__title">
            <h1 class="mdl-card__title-text">Bewerbung für einen Rang auf dem Plexion.de Netzwerk</h1>
        </div>
        <div class="mdl-card__supporting-text">';
        }

        public function buildFoot(){
            echo '</div>
    </div>
    <div class="mdl-layout-spacer"></div>
</div>
</body>
</html>';
        }

        public function firstPage(){
            echo '
             <p>Bitte wähle den Rang aus für den du dich Bewerben möchtest:</p>
            <form action="select.php" method="post">
                <div class="mdl-select mdl-js-select mdl-select--floating-label">
                    <select class="mdl-select__input" name="" id"rang" name="Rang">
                        <option value="var1">Bitte Auswählen</option>
                        <option value="developer">Developer</option>
                        <option value="builder">Builder</option>
                        <option value="supporter">Supporter</option>
                        <option value="designer">Designer</option>
                        <option value="mods">Foren Moderator</option>
                    </select>
                </div>

                <button formaction="select.php" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                    Next
                </button>

            </form>            
            ';
        }

        public function buidlSecond(){
            echo '<p>Bitte Fülle das Formular aus:</p>
            <form action="select.php" method="post">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" name="Vorname" id="Vorname">
                    <label class="mdl-textfield__label" for="Vorname">Vorname</label>
            </div>
                <br>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" name="Nachname" id="Nachname">
                    <label class="mdl-textfield__label" for="Nachname">Nachname</label>
            </div>
                <br>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" name="MinecraftName" id="MinecraftName">
                <label class="mdl-textfield__label" for="MinecraftName">MinecraftName</label>
            </div>
                <br>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" name="Nationalitaet" id="Nationalitaet">
                <label class="mdl-textfield__label" for="Nationalitaet">Nationalität</label>
            </div>
                <br>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="Email" id="Email">
                <label class="mdl-textfield__label" for="Email">Email</label>
                <span class="mdl-textfield__error">Input is not a vaild email!</span>
            </div>
                <br>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="alter" id="alter">
                <label class="mdl-textfield__label" for="alter">Alter</label>
                <span class="mdl-textfield__error">Input is not a vaild age!</span>
            </div>
                <br>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="HandyNummer" id="HandyNummer">
                <label class="mdl-textfield__label" for="HandyNummer">HandyNummer</label>
                <span class="mdl-textfield__error">Input is not vaild mobile number!</span>
            </div>
                <br> <br>

                <button formaction="select.php" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                    Next
                </button>

            </form>';
        }

        public function buildThirdDeveloper(){
            echo '<form action="sel.php" method="get">
            <p>Welche der Folgen Sachen beherscht du?</p>
            <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="java">
                    <input type="checkbox" name="java" id="JAVA" class="mdl-checkbox__input">
                    <span class="mdl-checkbox__label">Java </span>
            </label>
                <br>
            <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="php">
                <input type="checkbox" name="php" id="PHP" class="mdl-checkbox__input">
                <span class="mdl-checkbox__label">PHP</span>
            </label>
                <br>
            <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="C">
                <input type="checkbox" name="C" id="C" class="mdl-checkbox__input">
                <span class="mdl-checkbox__label">C / C# / C++</span>
            </label>
                <br>
            <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="mysql">
                <input type="checkbox" name="mysql" id="MYSQL" class="mdl-checkbox__input">
                <span class="mdl-checkbox__label">MySQL / MongoDB</span>
            </label>
                <br>
            <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="git">
                <input type="checkbox" name="git" id="GIT" class="mdl-checkbox__input">
                <span class="mdl-checkbox__label">Git</span>
            </label>
                <br>
            <div class="style-textfield mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" name="WieLang" id="WieLang">
                    <label class="mdl-textfield__label" for="WieLang">Wie Lange Programmierst du schon</label>
            </div>
                <br>
                <div class="style-textfield mdl-textfield mdl-js-textfield">
                    <textarea class="mdl-textfield__input" type="text" rows= "5" name = "SelbstBeschreibung" id="SelbstBeschreibung" ></textarea>
                    <label class="mdl-textfield__label" for="SelbstBeschreibung">Beschreibe dich</label>
                </div>
                <br>

                <div class="style-textfield mdl-textfield mdl-js-textfield">
                    <textarea class="mdl-textfield__input" type="text" rows= "5" name = "SundS" id="SundS" ></textarea>
                    <label class="mdl-textfield__label" for="SundS">Deine Stärken und Schwächen</label>
                </div>
                <br>

                <div class="style-textfield mdl-textfield mdl-js-textfield">
                    <textarea class="mdl-textfield__input" type="text" rows= "5" name = "ProgrammierFähigkeiten" id="ProgrammierFähigkeiten" ></textarea>
                    <label class="mdl-textfield__label" for="ProgrammierFähigkeiten">Beschreibe deine Programmier Fähigkeiten und zeige deine Grenzen auf.  </label>
                </div>
                <br>

                <div class="style-textfield mdl-textfield mdl-js-textfield">
                    <textarea class="mdl-textfield__input" type="text" rows= "5" name = "Wieso" id="Wieso" ></textarea>
                    <label class="mdl-textfield__label" for="Wieso">Wieso willst du ausgerechnet auf diesem Server eine Stelle bekommen?</label>
                </div>
                <br>

                <div class="style-textfield mdl-textfield mdl-js-textfield">
                    <textarea class="mdl-textfield__input" type="text" rows= "5" name = "WiesoDU" id="WiesoDU" ></textarea>
                    <label class="mdl-textfield__label" for="WiesoDU">Wieso sollten wir und für dich entscheiden</label>
                </div>
               <br>
                <div class="style-textfield mdl-textfield mdl-js-textfield">
                    <textarea class="mdl-textfield__input" type="text" rows= "5" name = "Referenz" id="Referenz" ></textarea>
                    <label class="mdl-textfield__label" for="Referenz">Referenzen</label>
                </div>
                <br>
            <div class="style-textfield mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" name="OnlineTime" id="OnlineTime">
                <label class="mdl-textfield__label" for="OnlineTime">Wie viele Online Stunden hast du in der Woche ?</label>
            </div>
                <br>
                <br> <br>
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
                    Next
                </button>
                </form>';
        }

        public function buildThird(){
            echo '<form action="sel.php" method="get">
                <br>
                <div class="style-textfield mdl-textfield mdl-js-textfield">
                    <textarea class="mdl-textfield__input" type="text" rows= "5" name = "SelbstBeschreibung" id="SelbstBeschreibung" ></textarea>
                    <label class="mdl-textfield__label" for="SelbstBeschreibung">Beschreibe dich</label>
                </div>
                <br>

                <div class="style-textfield mdl-textfield mdl-js-textfield">
                    <textarea class="mdl-textfield__input" type="text" rows= "5" name = "SundS" id="SundS" ></textarea>
                    <label class="mdl-textfield__label" for="SundS">Deine Stärken und Schwächen</label>
                </div>
                <br>

                <div class="style-textfield mdl-textfield mdl-js-textfield">
                    <textarea class="mdl-textfield__input" type="text" rows= "5" name = "Faehigkeiten" id="Faehigkeiten" ></textarea>
                    <label class="mdl-textfield__label" for="Faehigkeiten">Beschreibe deine Fähigkeiten und zeige deine Grenzen auf.  </label>
                </div>
                <br>

                <div class="style-textfield mdl-textfield mdl-js-textfield">
                    <textarea class="mdl-textfield__input" type="text" rows= "5" name = "Wieso" id="Wieso" ></textarea>
                    <label class="mdl-textfield__label" for="Wieso">Wieso willst du ausgerechnet auf diesem Server eine Stelle bekommen?</label>
                </div>
                <br>

                <div class="style-textfield mdl-textfield mdl-js-textfield">
                    <textarea class="mdl-textfield__input" type="text" rows= "5" name = "WiesoDU" id="WiesoDU" ></textarea>
                    <label class="mdl-textfield__label" for="WiesoDU">Wieso sollten wir und für dich entscheiden</label>
                </div>
               <br>
                <div class="style-textfield mdl-textfield mdl-js-textfield">
                    <textarea class="mdl-textfield__input" type="text" rows= "5" name = "Referenz" id="Referenz" ></textarea>
                    <label class="mdl-textfield__label" for="Referenz">Referenzen</label>
                </div>
                <br>
            <div class="style-textfield mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" name="OnlineTime" id="OnlineTime">
                <label class="mdl-textfield__label" for="OnlineTime">Wie viele Online Stunden hast du in der Woche ?</label>
            </div>
                <br>
                <br> <br>
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
                    Next
                </button>
                </form>';
        }



    }
