<?php

function insertComment()
{

    $html = "<div class='card text-center hero-header'><div class='card-body'><h2 class='card-title'>Witamy na naszym forum</h2><p class='card-text card-space'>Jeśli chcą Państwo zostawć komentarz na naszej stronie, niezbędne będzie zalogowanie się </p><a href='signIn.php' class='btn btn-primary'>Zaloguj się</a><p class='card-text card-space'>Jeśli natomiast nie posiadają Państwo konta na naszej stronie, to zapraszamy do rejestraji.<p class='card-text'><h4>To nic nie kosztuje!</h4></p><a href='register.php' class='btn btn-primary'>Zarejestruj się</a></div></div>";

    if (isset($_COOKIE['nick']) || isset($_SESSION['nick'])) {
        $html = "<div class='textPostArea'><h1 class='commentLoggedUser'>Wpisz swój komentarz</h1><p class='commentInfo'>Komentarz powinien mieć minimum 20 znaków</p> <form method='POST'><textarea class='form-control forum-text-area' name='commentContent' id='exampleFormControlTextarea1' rows='3'></textarea><p class='textAreaError'></p><input type='submit' class='btn btn-secondary btnComment' value='Wstaw komentarz' disabled='true'></form></div>";
    }

    echo $html;
}
?>