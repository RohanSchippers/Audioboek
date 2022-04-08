<?php

/** @var array $hoofdstuk */

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="view/css/style.css">
</head>
<body>
<img class="uitlegPageMainImg" src="<?= $hoofdstuk["hoofdstukAfbeelding"] ?>" alt="Afbeelding ter illustratie">
<!-- @TODO vervangen met php var hoofdstuk afbeelding -->
<div class="uitlegPageText">
    <h1 class="voorlezer">Ik ben <br> <?= $hoofdstuk["lezer"] ?></h1>
    <!-- TODO vervangen met php var voor naam voorlezer -->
    <h2 class="hetHoofdstuk">En lees het hoofdstuk</h2>
    <img class="blackArrow" src="view/img/zwartePijl.png" alt="Een verwijzende pijl">
    <h3 class="hoofdstukTitle"><?= $hoofdstuk["hoofdstukTitel"] ?></h3> <!-- TODO vervangen met php var naam hoofdstuk -->
</div>
<div class="pictureFrame">
    <img class="fotoLijst" src="view/img/pictureFrame.png" alt="Fotolijst">
    <img class="fotoStudent" src="<?= $hoofdstuk["studentAfbeelding"] ?>" alt="Foto van voorlezer">
    <!-- TODO vervangen met php var voor foto voorlezer -->
</div>
<div id="navText" class="invisible">
    <h2 class="navContent1"><a href="html/index.html">Home</a></h2>
    <!--  @TODO aanpassen URL -->
    <h2 class="navContent2"><a href="#">Hoofdstukken</a></h2>
    <h2 class="navContent3"><a href="html/uitleg.html">Informatie</a></h2>
    <!--  @TODO aanpassen URL -->
</div>
<div class="mediaPlayer">
    <audio controls>
        <source src="<?= $hoofdstuk["audio"] ?>" type="audio/mpeg">
        <!-- @TODO vervangen met php var voor audiobestand -->
    </audio>
</div>
<div id="nav-icon" onclick="hamburger()">
    <span></span>
    <span></span>
    <span></span>
</div>
<div class="arrowNext">
    <?php
    $volgende = $hoofdstuk['index'] +1;
    if ($volgende > 23){
        // Geen pijl
    } else {
        echo "<a href='?id=$volgende'> <img class='nextArrow arrow' src='view/img/rozePijl.png' alt='Volgend hoofdstuk'> </a> ";
    }
    ?>
</div>
<div class="arrowPrevious">
    <?php
    $vorige = $hoofdstuk['index'] - 1;
    if ($vorige < 0){
        // Geen pijl
    } else {
        echo "<a href='?id=$vorige'> <img class='prevArrow arrow' src='view/img/rozePijl.png' alt='Vorige hoofdstuk'></a> ";
    }
    ?>
<!--    <a href="./html/index.html"></a>-->
</div>
<!-- @todo aanpassen URL's-->
<img src="view/img/blackBg.jpg" class="overlay invisible" id="overlay">


<script src="view/javascript/hamburger.js"></script>
</body>
</html>