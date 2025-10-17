<?php
//LOGIN
?>

<html>
    <head>
        <title>login</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="js/jquery-3.5.1.js" type="text/javascript"></script>
        <script src="js/cdn.datatables.net_1.13.4_js_jquery.dataTables.min.js" type="text/javascript"></script>
        <link href="css/cdn.datatables.net_1.13.4_css_jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <style>
            body {
                background-image: url(img/back.png);
            }

            .termo {
                color: white;
                text-align: center;
                margin-top: 25%;
                font-size: 10px;
            }

            .container{

            }
            #form {
                background-color:transparent;
                font-family: verdana;
                text-align: center;
                border-radius: 30px;
                color: white;
            }
            #termos:hover {
                cursor: pointer;
            }
            #esqc:hover {
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <div class="container-md">
<!--            <form method="get" action="controller/loginController.php">-->
            <form method="post" action="controller/usuariosController.php">

                <div class="col-md-12">
                    <img src="img/chernobyl_b.png" style="margin-left: 30%; margin-top: 60px;">
                </div>
                <p style="margin-top: 50px; text-align: center; color: white; "><b>Faça login com a sua conta</b></p>
                <br/>

                <div class="row" style="margin-left: 10%; margin-right: 10%; padding: 20px;">
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label"></label>
                        <input type="text" id="form" class="form-control" style="" id="email" value="<?php echo isset($_COOKIE['rememberMe']) ? $_COOKIE['rememberMe']:'' ?>"
                               placeholder="Email" name="email" required="">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="senha" class="form-label" ></label>
                        <input type="password" id="form" class="form-control" style="" id="senha" 
                               placeholder="Senha" name="senha" required="">
                    </div>
                    <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="rememberMe" <?php echo isset($_COOKIE['rememberMe']) ? 'checked':'' ?>>
                                    <label class="form-check-label" for="rememberMe"> Remember me</label>
                                </div>
                            </div>
                    <br/>
                    <p id="esqc" style="color: white; text-align: center;"><u>Esqueceu sua senha?</u></p>

                    <div class="d-grid">
                        <br/>
                        <input type="submit" value="Continuar"
                               class="btn" style="background-color: #18a484; font: white; font-family: verdana; text-align: center; border-radius: 30px; color: white;">
                        <br>


                    </div>
                    <p class="termo">Fazendo login, você concorda com os <span id="termos" style="color: #c7893e;">Termos de Uso de Chernobyl</span> e o Acordo de Licença que pode ser enocntrado no site de Chernobyl</p>
                    <?php
                    if ($_REQUEST) {
                        if (isset($_REQUEST['cod'])) {
                            $cod = $_REQUEST['cod'];
                            if ($cod == 'error') {
                                echo('<div class="d-grid">');
                                echo('<div class="alert alert-danger">');
                                echo('Usuário ou senha inválidos!');
                                echo('</div>');
                                echo ('</div>');
                            } else if ($cod == '172') {
                                echo('<div class="d-grid">');
                                echo('<div class="alert alert-warning">');
                                echo('Sua sessão expirou!');
                                echo('</div>');
                                echo ('</div>');
                            }
                        }
                    }
                    ?>
                </div>
            </form>
        </div>

        <?php
        require_once 'shared/footer.php';
        ?>
