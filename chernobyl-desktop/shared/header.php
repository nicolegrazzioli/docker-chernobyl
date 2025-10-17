<!DOCTYPE html>
<!-- MENU - PARTE DE CIMA DO SITE -->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="js/jquery-3.5.1.js" type="text/javascript"></script>
        <script src="js/cdn.datatables.net_1.13.4_js_jquery.dataTables.min.js" type="text/javascript"></script>
        <link href="css/cdn.datatables.net_1.13.4_css_jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <style>
            .container{
                text-align: center;
                color: white;
                border: solid thick black;
                border-radius: 1em;
            }            
        </style>
        
    </head>
    <body style="background-color: black;"> 
        <div class="container" style="padding-top: 20px !important; text-align: center !important; background-color: black !important;">
            <div class="row nav-pills">
                <br/>
                <div class="col-md-2">
                    <a href="inicio.php"><img src="img/chernobyl_b.png" style="text-align: center !important; height: 100% !important; width: 100%; !important"></a>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-1">
                    <a href="inicio.php" class="nav-link"><b><br/>Home</b></a>
                </div>
                <div class="col-md-2">
                    <a href="arrayAssociativo.php" class="nav-link"><b><br/>Array table</b></a>
                </div>
                <div class="col-md-2">
                    <a href="./listarPerfisPage.php" class="nav-link"><b><br/>Perfis</b></a>
                </div>
                <?php
                            @session_start();
                            if($_SESSION) {
                                echo('
                                    <div class="col-md-2">
                                <a class="nav-link link-danger"
                                   style="text-decoration: none;"
                                   href="controller/logoutController.php?cod=logout"><br/><b>Logout</b></a>
                            </div>');
                            }
                            ?>
            </div>
            <br/>

            <div class="col-md-4"></div>
        </div>
        
