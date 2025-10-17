<?php

//INICIO
require_once 'shared/header.php';
require_once 'controller/autenticationController.php';
?>

<script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
<link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">

<style>
    #telao {
        margin-left: 1% !important;
        margin-right: 1% !important;
        height: 500px;
        width: 1900px;
        cursor: pointer;
        transition:all .3s;
        text-align: center;
    }
    #cont {
        color: white;
        margin-left: 4%;
        margin-top: 1%;
        font-size: 20px;
    }
    #tela {
        height: 480px;
        width: 320px;
        border-radius: 10px;
        transition: all .2s ease-in-out;
        margin-left: 20px;
    }
    #tela:hover {
        transform: scale(1.1);
        background-position: -60px;
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
        cursor: pointer;
    }
    #topico {
        margin-left: 2em;
    }
    .slide {
        text-align: center;
    }

</style>

<nav style="color: white;">
            <?php
            @session_start();
            require_once './controller/autenticationController.php';
            echo 'Olá ' . $_SESSION['login'];
            ?>
</nav>

<div class="swiffy-slider">
    <div class="slide">
        <ul class="slider-container container-fluid">
            <li><img src="img/c1.png" id="telao"></li>
            <li><img src="img/c2.png" id="telao"></li>
            <li><img src="img/c3.png" id="telao"></li>
            <li><img src="img/c5.png" id="telao"></li>
            <li><img src="img/c6.png" id="telao"></li>
            <li><img src="img/c7.png" id="telao"></li>
            <li><img src="img/c9.png" id="telao"></li>
            <li><img src="img/c10.png" id="telao"></li>
            <li><img src="img/c11.png" id="telao"></li>
        </ul>
    </div>

    <button type="button" class="slider-nav"></button>
    <button type="button" class="slider-nav slider-nav-next"></button>

    <div class="slider-indicators">
        <button class="active"></button>
        <!-- numero de slides -->
        <button></button>
        <button></button>
        <button></button>
        <button></button>
        <button></button>
        <button></button>
        <button></button>
        <button></button>
        <button></button>
    </div>
</div>

<p id="cont" > <img src="img/chernobyl_b.png" style="height: 8%; width: 8%;"> <b>Chernobyl Originais e exclusivos</b></p>

<!-- 9 topicos -->

<div class="swiffy-slider">
    <div class="slide">
        <ul class="slider-container container-fluid">
            <li>
                <div class id="topico" style="margin-left: 4%;" >
                    <br/>
                    <a href="pages/introducaoPage.php"><img id="tela" src="img/rad2-g.jpg"></a>
                    <a href="pages/desastrePage.php"><img id="tela" src="img/ab-g.jpg"></a>
                    <a href="pages/impcurtoPage.php"><img id="tela" src="img/ani-g.jpg"></a>
                    <a href="pages/implongoPage.php"><img id="tela" src="img/mask-g.jpg"></a>
                    <a href="pages/peintPage.php"><img id="tela" src="img/pe-g.png"></a>
                </div><br/></li>
            <li>
                <div class id="topico" style="margin-left: 4%;" >
                    <br/>
                    <a href="pages/pefeitoPage.php"><img id="tela" src="img/pe2.jpg"></a> 
                    <a href="pages/legadoPage.php"><img id="tela" src="img/park-g.jpg"></a>
                    <a href="pages/quimicaPage.php"><img id="tela" src="img/reat-g.jpg"></a>
                    <a href="pages/biologiaPage.php"><img id="tela" src="img/roda-g.jpg"></a>
                    <a href="pages/fisicaPage.php"><img id="tela" src="img/out-g.jpg"></a>
                </div><br/></li>
        </ul>
    </div>

    <button type="button" class="slider-nav"></button>
    <button type="button" class="slider-nav slider-nav-next"></button>

    <div class="slider-indicators">
        <button class="active"></button>
        <!-- numero de slides -->
        <button></button>
    </div>
</div>

<br/>
<br/>
<br/>
<?php

require_once 'shared/footer.php';
?>

