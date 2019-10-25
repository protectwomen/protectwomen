<?php

session_start();
require_once 'template/loggedUser.php';

?>
<!doctype html>
<html lang="pl">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Protect Women</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/jumbotron/">
    <link href="jumbotron.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark nav-border">
        <div class="container">
            <a class="navbar-brand" href="index.php"><i class="fa fa-shield logo-shield" aria-hidden="true"></i>ProtectWomen</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample07">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="identify.php">Jak się obronić? <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="reactions.php">Jak reagować?</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="help.php">Gdzie szukać pomocy?</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Forum</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown07">
                            <a class="dropdown-item" href="forum.php">Przejdź do forum</a>
                            <a class="dropdown-item" href="signIn.php">Zaloguj się</a>
                            <a class="dropdown-item" href="register.php">Zarejestruj się</a>
                        </div>
                    </li>
                </ul>
            </div>
            <?php

      if(isset($_SESSION['id']) || isset($_COOKIE['id'])) {
          loggedUserTemplate();
      }

      ?>
        </div>
    </nav>

    <main role="main">

        <div class="jumbotron-identify">
            <div class="bg-img">
                <div class="container main-cube">
                    <h1 class="display-3 text-sm-left py-2 important-words2">Gdzie szukać<span class="important-word2">
                            <p><strong>pomocy?</strong></p>
                        </span></h1>
                    <div class="main-text2 p-4">
                        <p class="text-left text-md-justify">Przede wszystkim gwałt sam w sobie, bez względu na to kto jest jego sprawcą i gdzie się dzieje, jest okrutnym działaniem. Nie boli tylko fizycznie, ale zostawia też ogromne piętno psychiczne. Poza tym, inaczej niż w czystej przemocy fizycznej, gwałt pozostawia też poczucie wstydu i “brudu”.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <article>
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 article">
                        <header>
                            <h1 class="font-weight-bold ml-0 mb-4 text-center text-md-left">Gdzie szukać pomocy?</h1>
                        </header>
                        <div class="separate"></div>

                        <p>Jeśli doznałaś/doznałeś przemocy seksualnej najlepiej jak najszybciej zgłoś się na Policję lub do prokuratury.
                            Niezbitymi dowodami w sprawie mogą być zarówno ślady na ciele czy ubraniach (np. włosy, ślina czy nasienie sprawcy) jak i te, które pozostały na miejscu zdarzenia. Poinformowanie policji umożliwi jej jak najszybsze zabezpieczenie wszelkich dowodów i może pomóc w szybszym wykryciu lub zatrzymaniu sprawcy.
                        </p>
                        <p>Przemoc seksualną najlepiej zgłosić bezpośrednio po zdarzeniu !</p>
                        <p>Ofiara przemocy seksualnej może zwrócić się do wielu instytucji publicznych w celu uzyskania pomocy jak np.:
                            <ul type="disc">
                                <li><a href="http://www.policja.pl">Komisariat Policji</a></li>
                                <li><a href="http://www.interwencjakryzysowa.pl/osrodki-interwencji-kryzysowej">Ośrodek Interwencji Kryzysowej</a></li>
                                <li><a href="https://116111.pl/polecamy/telefony-zaufania-,aid,8">Telefon zaufania</a></li>
                                <li><a href="https://ops.pl">Ośrodek pomocy społecznej</a></li>

                            </ul>
                        </p>

                        <p>Ofiara może się udać do organizacji pozarządowych. Każda z tych instytucji ma obowiązek udzielić pomocy oraz poinformować ofiarę o przysługującej jej prawach.</p>
                    </div>
                    <hr>
                </div>
            </div>
        </article>
    </main>

    <footer class="container">
        <p>&copy; Projekt szkolny stworzony przez uczniów ZSTiO 2019-2020</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- KWA -->
</body>

</html>
