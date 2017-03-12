<?php
    class Builder{

        public function buildHead(){
            session_start();
            echo '
            
                <head>
                    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
                    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
                    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
                </head>
                <body>
            ';
        }

        public function buildFoot(){
            echo '</body>';
        }

        public function firstPage(){
            echo '
             <div class="row">
                <div class="col s12 m6">
                    <div class="card-large">
                        <div class="card-content">
                            <p><br><br><br></p>
                        </div>
                    </div>
                </div>
            </div>            
            ';
        }

    }
