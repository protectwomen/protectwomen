<?php

function loggedUserTemplate(){

    $gender = "fa-male";

    if(isset($_SESSION['nick'])){
        $userName = $_SESSION['nick'];
        if($_SESSION['gender'] == "kobieta"){
            $gender = "fa-female";
        }
    }

    if(isset($_COOKIE['nick'])){
        $userName = $_COOKIE['nick'];
        if($_COOKIE['gender'] == "kobieta"){
            $gender = "fa-female";
        }
    }

    $html = '';

    $html .="<form class='form-inline my-2 my-lg-0 loggedUser'><i class='fa " . $gender . " loggedIcon' aria-hidden='true'></i><li class='nav-item dropdown loggedUser'><a class='nav-link dropdown-toggle loggedHref' href='#' id='dropdown07' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Witaj ". $userName ."</a>";

    $html.="<div class='dropdown-menu' aria-labelledby='dropdown07'><a class='dropdown-item' href='logOut.php'>Wyloguj się</a></div></li></form>";
    echo $html;
}

?>