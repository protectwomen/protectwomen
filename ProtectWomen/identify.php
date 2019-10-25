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
                    <li class="nav-item active ">
                        <a class="nav-link" href="identify.php">Jak się obronić? <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
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
                    <h1 class="display-3 text-sm-left py-2 important-words2">Jak się obronić przed<span class="important-word2">
                            <p><strong>napastnikiem?</strong></p>
                        </span></h1>
                    <div class="main-text2 p-4">
                        <p class="text-left text-md-justify">Jak obronić się przed gwałtem? Przede wszystkim należy pamiętać, że gwałt nigdy nie jest winą jego ofiary. Zawsze winna jest tylko ta osoba, która postanowiła go dokonać i kogoś skrzywdzić. Niestety, większość gwałtów dokonywana jest przez osoby, które dobrze znają ofiary. Niemniej jednak część tych przestępstw jest popełniana przez osoby zupełnie obce ofierze, która najczęściej została wybrana przez gwałciciela przypadkowo. Mimo wszystko, by zwiększyć swoje bezpieczeństwo, warto wiedzieć, co można zrobić, by obronić się przed gwałtem. Chodzi zarówno o prewencję, jak i o zachowanie, kiedy znajdziemy się już w sytuacji niebezpiecznej.
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
                            <h1 class="font-weight-bold ml-0 mb-4 text-center text-md-left">Jak się obronić przed napastnikiem?</h1>
                            <h5 class="text-left text-md-left lead"> 22.10.2019 | 11:54:21 | Aleksandra Kowalska</h5>
                            <img src="img/33.jpg" class="img-fluid mt-3 mb-3">
                        </header>
                        <div class="separate"></div>


                        <p>Wielu błędów i nieprzyjemności można uniknąć zachowując spokój. Tylko... jak tu się nie zdenerwować, kiedy zwyrodnialec z nożem w ręku próbuje zgwałcić młodą dziewczynę grożąc, że ją potnie na kawałki!? Faktycznie, w takim przypadku radę, żeby zachować spokój, można sobie wsadzić... między bajki. Rady typu „nie wychodź po zmierzchu sam na dyskoteki” są tak samo bezsensowne bo nie możemy się bać żyć. Więc jak się bronić kiedy już dojdzie do takiej sytuacji? Niestety, w tym przypadku nie ma rad niezawodnych. Wiadomo, że z reguły ofiara jest dużo słabsza od napastnika. Dlatego, jeśli zostanie zaatakowana musi bronić się sposobem, a nie pięściami.</p>
                        <img src="img/29.jpg" class="float-left img-fluid mr-3 poster" width=40%>

                        <p>Jednym z psychologicznych chwytów jest krzyczenie np.: „Pożar!” „Pali się!” Dlaczego? Bo ludzie często boją się pomagać ofiarom napaści i gdy słyszą rozpaczliwy krzyk, zamykają się w domach albo udają, że nic nie słyszeli. Liczą, że pomoże ktoś inny. Z pożarem jest inaczej. Tu nikt nie boi się, że zostanie pobity, a wielu pobiegnie zobaczyć, co się pali. Krzyczeć warto wtedy, gdy atak ma miejsce blisko zabudowań lub ruchliwych miejsc. Również możesz krzyczeć, że masz AIDS, lub że jesteś nosicielką wirusa HIV, że go zarazisz, jeśli cię dotknie. To może wystraszyć gwałciciela.</p>

                        <p>Inny sposób, dość trudny do wyobrażenia, ale podobno bardzo skuteczny to... zmuszenie się do wymiotów przez włożenie palców do gardła. Na siebie lub na gwałciciela. Taka sytuacja całkowicie zaskakuje napastnika. Wymioty są obrzydliwe i budzą odrazę.</p>

                        <p>Najbardziej czułym miejscem na ciele człowieka są oczy. Dlatego lepszy do obrony wydaje się gaz łzawiący lub pieprzowy (dostępny bez pozwolenia), który można rozpylić z odległości metra-półtora metra (nie pod wiatr). Nie należy ostrzegać napastnika przed atakiem. To da mu szansę na przygotowanie się. Nabierze powietrza w płuca. Zasłoni oczy. Atak musi być niespodziewany. Jeśli nie ma się pod ręką gazu, można wykorzystać garść piachu i cisnąć ją w oczy gwałciciela i uciekać.</p>

                        <p>Kolejnym sposobem jest „sposób na telefon”. Jeśli ma się czas na przygotowanie się na atak - np. widzi, że ktoś cię śledzi, można wyjąć telefon i zadzwonić do znajomych. Powiedzieć im gdzie się jest i że jest się niebezpieczeństwie. Nie powinno się rozłączać. Jeśli zwyrodnialec zaatakuje, znajomi będą mogli powiadomić policję i wysłać w miejsce gwałtu.</p>
                        <img src="img/14.jpg" class="float-right img-fluid ml-3" width="40%">

                        <p> Podejmując walkę trzeba jednak pamiętać, że może to być walka Dawida z Goliatem. Szansę na wygranie z silniejszym przeciwnikiem są małe, jeśli nie znikome. Jeżeli gwałciciel ma nóż, pokonanie go jest praktycznie niemożliwe, chyba że się zapiszemy na coraz popularniejsze ostatnio kursy samoobrony, lecz nadal decydując się na walkę, musimy się liczyć z tym, że w takiej sytuacji możemy zostać zranieni, dlatego lepszym rozwiązaniem jest podejście napastnika sposobem.</p>
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
