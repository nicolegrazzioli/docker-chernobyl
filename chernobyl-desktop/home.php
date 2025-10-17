<?php
//PERFIS
require_once 'controller/autenticationController.php';
//require_once 'shared/header.php';
?>

<html>
    <head>
        <title>quem</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="js/jquery-3.5.1.js" type="text/javascript"></script>
        <script src="js/cdn.datatables.net_1.13.4_js_jquery.dataTables.min.js" type="text/javascript"></script>
        <link href="css/cdn.datatables.net_1.13.4_css_jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <style>
            body {
                background-image: url(img/bghome.png);
                text-decoration: none !important;
                text-align: center;
            }
            h1 {
                margin-top: 9%;
                color: white;
            }
            .perfil {
                text-align: center;
                margin-top: 5%;
                color: #c7c7c7 !important;
                font-size: 20px;
            }
            .perfil p:hover {
                color: white;
            }

            #foto {
                transition: all .2s ease-in-out;
            }
            #foto:hover {
                padding:2px;
                background-color:white;
            }
            .botao {
                margin-top: 15%;
                background: rgba(121, 138, 148, 0.5);
                border-radius: 5%;
                color: white;
                width: 150px;
                height: 50px;
                font-family: Sans-serif;
            }
        </style>
    </head>
    <body>
        <h1><b>Quem está assistindo?</b></h1>

        <div class="container-md">
            <div class="perfil">
                <div class="row justify-content-around" style="">
                    <div class="col col-lg-2">
                        <a href="inicio.php"><img src="img/mexico.jpg" id="foto" style="height: 180px; width: 180px; border-radius: 50%;"> </a> <br/>
                        <br/> <a href="inicio.php" style="color: #c7c7c7; text-decoration: none !important;"> <p><b>Nicole</b></p> </a>
                    </div>
                    <div class="col col-lg-2">
                        <a href="inicio.php"><img src="img/mexico.jpg" id="foto" style="height: 180px; width: 180px; border-radius: 50%;"> </a> <br/>
                        <br/> <a href="inicio.php" style="color: #c7c7c7; text-decoration: none !important;"> <p><b>1</b></p> </a>
                    </div>
                    <div class="col col-lg-2">
                        <a href="inicio.php"><img src="img/mexico.jpg" id="foto" style="height: 180px; width: 180px; border-radius: 50%;"> </a> <br/>
                        <br/> <a href="inicio.php" style="color: #c7c7c7; text-decoration: none !important;"> <p><b>2</b></p> </a>
                    </div>
                    <div class="col col-lg-2">
                        <a href="inicio.php"><img src="img/mexico.jpg" id="foto" style="height: 180px; width: 180px; border-radius: 50%;"> </a> <br/>
                        <br/> <a href="inicio.php" style="color: #c7c7c7; text-decoration: none !important;"> <p><b>3</b></p> </a>
                    </div>
                    <div class="col col-lg-2">
                        <a href="inicio.php"><img src="img/add.png" id="foto" style="height: 180px; width: 180px; border-radius: 50%;"> </a> <br/>
                        <br/> <a href="inicio.php" style="color: #c7c7c7; text-decoration: none !important;"> <p><b>Adicionar novo perfil</b></p> </a>
                    </div>
                </div>
            </div>
            
            <button class="botao">
                <a><b>Editar perfil</b></a> 
            </button>

        </div>

<?php
require_once 'shared/footer.php';
?>