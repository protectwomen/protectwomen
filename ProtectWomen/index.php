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
                    <li class="nav-item">
                        <a class="nav-link" href="reactions.php">Jak reagować?</a>
                    </li>
                    <li class="nav-item">
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

        <div class="jumbotron">
            <div class="bg-img">
                <div class="container main-cube">
                    <h1 class="display-4 important-words">Zadbaj o swoje <strong>
                            <p class="important-word">bezpieczeństwo</p>
                        </strong></h1>



                    <div class="main-text">
                        <p>Zostałeś ofiarą przemocy seksualnej i szukasz pomocy? Znasz osobę, która doświadczyła takiej przemocy lub byłeś jej świadkiem i chcesz jej pomóc ale nie wiesz jak? Chcesz zmaksymalizować swoją szansę ucieczki przed gwałcicielem lub chcesz być w stanie rozpoznać potencjalnego gwałciciela? Chcesz podzielić się swoja historią, wyrzucić z siebie negatywne emocje lub poradzić się innych? – odpowiedzi na te i inne pytania można znaleźć na forum/stronie ProtectWomen, przeznaczonej dla osób, które doznały przemocy seksualnej lub traumy związanej z samą napaścią.
                        </p>
                    </div>


                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Jak się obronić?</h2>
                    <p>Wielu błędów i nieprzyjemności można uniknąć zachowując spokój. Tylko jak tu się nie zdenerwować kiedy...</p>
                    <p><a class="btn btn-primary" href="identify.php" role="button">Czytaj dalej &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <h2>Co powinnaś zrobic?</h2>
                    <p>Przemoc seksualna to każdy niechciany kontakt seksualny. Osoba, która padła ofiarą przemocy seksualnej, potrzebuje...</p>
                    <p><a class="btn btn-primary" href="reactions.php" role="button">Czytaj dalej &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <h2>Gdzie szukać pomocy?</h2>
                    <p>Jeśli doznałaś/doznałeś przemocy seksualnej najlepiej jak najszybciej zgłoś się na...</p>
                    <p><a class="btn btn-primary" href="help.php" role="button">Czytaj dalej &raquo;</a></p>
                </div>



            </div>

            <div class="card text-center hero-header">
                <div class="card-body">
                    <h2 class="card-title">Czy chciałbyś/chciałabyś się czymś podzielić?</h2>
                    <p class="card-text">Jeśli tak, to zapraszamy na nasze forum.</p>
                    <p class="card-text">Jeśli chcesz się podzielić z kimś dobrą radą, lub poprostu opisać swoją historie, to naszę forum zostało stworzone w tym właśnie celu.</p>
                    <p class="card-text">
                        <h4>Zapraszamy wszystkich</h4>
                    </p>
                    <a href="forum.php" class="btn btn-primary">Przejdź do forum</a>
                </div>
            </div>

            <hr>

        </div>

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
