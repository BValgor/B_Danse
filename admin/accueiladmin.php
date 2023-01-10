<?php 
session_start();

include "communes/headadmin.php";
include "communes/navbaradmin.php";
include 'config/credential.php';?>

<h4> BVALGOR </h4>
<div class="conteneur">
    <div class="para1">
        <h2>Réserve ta place</h2>
        <hr>
        <p>Rejoint les studios de danse de BValgor et apprend le hip-hop et ses variantes. Que tu sois débutant, danseur régulier ou en maitrise de l'art exercé, trouve le créneau qui te correspond le mieux et élargit tes connaissances en danse.</p>
        <a href="../view/informations.php" class="moreinfo">Plus d'informations</a>
        <hr>
        <img src="../img/battle4.jpg">
        </br>
        </br>
        <button class="videobutton"> Battle des Renc'Art Hip Hop 2019 </button>
    </div>

    <div class="para2">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="../img/battle1.jpg" class="d-block w-100 battle" alt="...">
        </div>
            <div class="carousel-item">
            <img src="../img/battle2.jpg" class="d-block w-100 battle" alt="...">
        </div>
        <div class="carousel-item">
            <img src="../img/battle3.jpg" class="d-block w-100 battle" alt="...">
        </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>

        </br>
        <h3>Hip Hop, un univers riche et varié.</h3>
        <hr>
        <p>Bien écrire est un art. Commencez par utiliser des expressions simples et de tous les jours que les gens peuvent facilement comprendre. Soyez clair et allez à l'essentiel. Faites en sorte que vos arguments s'enchaînent logiquement et soyez concis sauf si vous écrivez un essai.</p>
    </div>

    <div class="para3">
        <h3> BValgor | New Style | Hip Hop </h3>
        <hr>
        <p>Bien écrire est un art. Commencez par utiliser des expressions simples et de tous les jours que les gens peuvent facilement comprendre. Soyez clair et allez à l'essentiel. Faites en sorte que vos arguments s'enchaînent logiquement et soyez concis sauf si vous écrivez un essai. Vos idées doivent avoir un objectif, vous devez donc choisir les mots qui l'expriment le mieux.</p>
    </div>
</div>

<div class="conteneurchoree" id="choree">
    <div class="separateur"></div>
    <iframe width="1120" height="630" src="https://www.youtube.com/embed/UMrWFTV7uWs" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>


<?php

include "communes/footeradmin.php"; ?>
