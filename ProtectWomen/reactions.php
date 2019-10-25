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
                    <li class="nav-item active">
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

        <div class="jumbotron-identify">
            <div class="bg-img">
                <div class="container main-cube">
                    <h1 class="display-3 text-sm-left py-2 important-words2">Jak reagować na <span class="important-word2">
                            <p><strong>przemoc?</strong></p>
                        </span></h1>
                    <div class="main-text2 p-4">
                        <p class="text-left text-md-justify">Jeśli jesteś świadkiem przemocy seksualnej, nie bądź obojętny — zareaguj. Powiadom służby, które przeciwdziałają przemocy lub porozmawiaj z osobą dotkniętą przemocą i przekonaj ją, żeby szukała pomocy.
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
                            <h1 class="font-weight-bold ml-0 mb-4 text-center text-md-left">Jak reagować na przemoc?</h1>
                            <h5 class="text-left text-md-left lead"> 23.10.2019 | 19:24:39 | Katarzyna Nowak</h5>
                            <img src="img/17.jpg" class="img-fluid mt-3 mb-3">
                        </header>
                        <div class="separate"></div>


                        <p> Przemoc seksualna to każdy niechciany kontakt seksualny. Osoba, która padła ofiarą przemocy seksualnej, potrzebuje współczucia, zrozumienia, troski i wsparcia, jednakże nie wszystkie ofiary reagują i czują się tak samo. Jeśli znasz osobę, która doświadczyła takiej przemocy lub byłeś jej świadkiem, pamiętaj o tym, jak ważna jest Twoja reakcja.</p>

                        <p>Pamiętaj o tym, aby nigdy nie oceniać sytuacji i nie interpretować w jaki sposób dana osoba się zachowywała. Nie wypytuj się o szczegóły zdarzenia (np. o to jak była ubrana lub w jakim miejscu przebywała) – osoba, która doznała przemocy seksualnej może nie chcieć o tym mówić a takie pytania mogą powodować większy stres.


                            <p>Nigdy nie obwiniaj pokrzywdzonej/ego! To napastnik jest winny czynu którego dokonał! Pamiętaj, że nikt nie zasługuje na przemoc seksualną ani nie prosi o bycie zgwałconym!</p>
                            <img src="img/31.jpg" class="float-right img-fluid ml-3 poster" width=40%>
                            <p>Zadbaj o komfort, poczucie bezpieczeństwa i atmosferę akceptacji. Zamiast sugerować gotowe rozwiązania, zapytaj, co możesz dla niej/niego zrobić, co byłoby pomocne.</p>
                            <h2>Pomoc i wsparcie możesz okazać:</h2>

                            <p>

                                <ul type="disc">
                                    <li>Zachowując spokój. Twoje mocne emocje i gniew, mogą przyprawić ofiarę o jeszcze większą traumę.</li>
                                    <li>Zachęcając osobę, która doznała przemocy seksualnej do udania się do lekarza i przeprowadzenia badań.</li>
                                    <li>Zachowując dyskrecję i poufność. To osoba, która doznała przemocy powinna sama zdecydować kto się dowie o tym, co ją spotkało.</li>
                                    <li>Pozwalając jej wyrażać swoje uczucia. Słuchaj jej, nie oceniaj i nie zmuszaj do zwierzeń, na które nie jest gotowa. Zachęć do konsultacji z psychologiem.</li>
                                    <li>Wierząc jej słowom i dając do zrozumienia, że przemoc seksualna i gwałt to wina sprawcy, a nie ofiary.</li>
                                    <li>Nie oceniając jej reakcji. Każda reakcja jest „normalna”.</li>
                                </ul>
                            </p>
                            <img src="img/8.jpg" class="float-left img-fluid mr-3 poster" width=40%>

                            <p>Przemoc seksualna jest wydarzeniem traumatycznym i silnie obciążającym psychicznie. Każdy na takie wydarzenie może reagować inaczej, a uczucia i stan psychiczny mogą się ciągle zmieniać. Osoba, która doznała przemocy seksualnej, może i ma prawo odczuwać wiele różnych, silnych emocji.</p>


                            <p> U osób, które doznały przemocy seksualnej, często pojawiają się natrętnie powracające myśli o wydarzeniu, stany lękowe, poczucie winy oraz różnego rodzaju somatyzacje (objawy fizyczne na tle psychicznym). Badania wskazują, że u 80% ofiar gwałtu rozwija się zespół stresu pourazowego (PTSD), charakteryzującego się m.in. poprzez:
                                <ul type="disc">
                                    <li>powtórne przeżywanie stresującego wydarzenia (w myślach lub snach), czemu towarzyszy silne napięcie i negatywne emocje;</li>
                                    <li>uporczywe unikanie bodźców związanych z wydarzeniem lub ogólna utrata wrażliwości na bodźce;</li>
                                    <li> utrzymujące się objawy zwiększonego pobudzenia psychicznego (lękliwość, problemy z zasypianiem i koncentracją, nadmierna czujność).</li>
                                </ul>
                            </p>
                            <p>Przemoc seksualna jest użyciem seksu jako narzędzia dla wyrażenia przemocy, siły i agresji napastnika, dlatego nie obawiajmy się skorzystać ze specjalistycznej pomocy.</p>
                            <img src="img/22.jpeg" class="float-right img-fluid ml-3 poster" width=40%>
                            <p>Przemoc seksualna jest nie tylko traumatycznym przeżyciem, ale też przestępstwem, za które sprawca powinien ponieść karę. Obowiązkiem państwa jest ochrona swoich obywateli, zapewnienie im bezpieczeństwa oraz ściganie sprawców przestępstw. Zgwałcenie i inne formy przemocy seksualnej są przestępstwami ściganymi z oskarżenia publicznego. Oznacza to, że osoba pokrzywdzona takim przestępstwem nie musi składać specjalnego wniosku o ściganie sprawcy.</p>
                            <h2 class=" h2 lead">źródło:
                                <p><a href="https://przemoc.gov.pl/dozanales-as-przemocy-seksualnej/informacje" target="_blank">https://przemoc.gov.pl/dozanales-as-przemocy-seksualnej/informacje</a></p>
                            </h2>
                            <h2 class="lead">zdjęcia:
                                <p class="my-1"><a href="https://www.facebook.com/projectunbreakable/" target="_blank">Project Unbreakable</a></p>
                                <p><a href="https://www.shutterstock.com/pl/search/gwalt?fbclid=IwAR28J64fOHcZtuocXa8oA1vUCAfDWKgK92KPOiPv8pLBmIqdxJlm_AEcYRU&page=2" target="_blank">shutterstock.com</a></p>
                        </p>
                        </h2>
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
