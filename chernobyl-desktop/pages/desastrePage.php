<?php
require_once 'headerPages.php';
require_once 'autenticationControllerPage.php';
?>

<script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
<link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">
<style>
    
</style>

<link href="cssPages.css" rel="stylesheet" type="text/css"/>

<div class="container-fluid">
    <img align="middle !important" id="fundo" src="../img/w2.png">
    <label id="texto1" style="margin-top: 100px;">#1 no Brasil</label>
    <label id="texto2" style="margin-top: 100px;">O desastre</label>
    <label id="texto3" style="margin-top: 100px; margin-right: 50%;">Em 1986, um trágico acidente nuclear assolou a pequena cidade de Pripyat, na
Ucrânia, transformando-a em um lugar tenebroso e assustador, repleto de relatos
sobre seres mutantes, monstros e mistérios intrigantes.</label>
    <label id="texto4" style="margin-top: 100px;">IMDb 6,6 1h 59min 2023 X-RAY</label>
    <label id="texto5" style="margin-top: 100px;"><u>Drama</u> · <u>Ação</u> · <u>Suspense</u></label>
    <label id="texto6" style="margin-top: 100px;"><img src="../img/selo.png" style="width: 25px; height: 25px;"> Incluído em Chernobyl</label>

    <label id="texto7" style="margin-top: 100px;">   
        <ul class="nav">
            <li class><img id="play" src="../img/play.png" alt=""/></li>
            <li class id="play" style="margin-left: 10px;"><br/>Reproduzir</li>
            <li class="nav-item" id="play" style="margin-left: 30px;"> <img src="../img/1.png"> </li>
            <li class="nav-item" id="play"> <img src="../img/2.png"> </li>
            <li class="nav-item" id="play"> <img src="../img/4.png"> </li>
            <li class="nav-item" id="play"> <img src="../img/5.png"> </li>
        </ul></label>
</div>

<label id="texto8" style=""><b>Relacionados:</b></label>
<br/>

<div class="swiffy-slider">
    <div class="slide">
        <ul class="slider-container container-fluid">
            <li>
                <div class id="topico" style="margin-left: 4%;" >
                    <br/>
                    <a href="introducaoPage.php"><img id="tela1" src="../img/rad2-p.jpg"></a>
                    <a href="desastrePage.php"><img id="tela1" src="../img/ab-p.jpg"></a>
                    <a href="impcurtoPage.php"><img id="tela1" src="../img/ani-p.jpg"></a>
                    <a href="implongoPage.php"><img id="tela1" src="../img/mask-p.png"></a> 
                    <a href="peintPage.php"><img id="tela1" src="../img/pe-p.jpg"></a>
                </div><br/></li>
            <li>
                <div class id="topico" style="margin-left: 4%;" >
                    <br/>
                    <a href="pefeitoPage.php"><img id="tela1" src="../img/1449559.jpg"></a>
                    <a href="legadoPage.php"><img id="tela1" src="../img/park-p.jpg"></a> 
                    <a href="quimicaPage.php"><img id="tela1" src="../img/reat-p.jpg"></a>
                    <a href="biologiaPage.php"><img id="tela1" src="../img/roda-p.jpg"></a>
                    <a href="fisicaPage.php"><img id="tela1" src="../img/out-g.jpg"></a> 
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
</body>

<?php

require_once 'footerPages.php';
?>