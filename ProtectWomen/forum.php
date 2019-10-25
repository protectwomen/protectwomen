<?php
session_start();
require_once 'src/HackHeroes/ForumRead.php';
require_once 'src/HackHeroes/InsertComment.php';
require_once 'template/loggedUser.php';
require_once 'template/insertComment.php';

if (isset($_POST['commentContent'])) {
    if(isset($_COOKIE['id'])) {
        $id = $_COOKIE['id'];
    } else {
        $id = $_SESSION['id'];
    }

    $commentContent = $_POST['commentContent'];
    $insertComment = new InsertComment\InsertComment();
    $InsertComment = $insertComment->insertStart($id, $commentContent);

    header("Location: " . $_SERVER['REQUEST_URI']);
    exit();
}

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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark test nav-border">
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
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Forum</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown07">
                            <a class="dropdown-item" href="forum.php">Przejdź do forum</a>
                            <a class="dropdown-item" href="signIn.php">Zaloguj się</a>
                            <a class="dropdown-item" href="register.php">Zarejestruj się</a>
                        </div>
                    </li>
                </ul>
                <?php

        if(isset($_SESSION['id']) || isset($_COOKIE['id'])) {
            loggedUserTemplate();
        }

        ?>
            </div>

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
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                        </p>
                    </div>


                </div>
            </div>
        </div>

        <div class="container">
            <?php

        insertComment();

        ?>
        </div>

        <div class="container">

            <div class="my-3 p-3 bg-white rounded shadow-sm">
                <?php
			$ForumRead = new ForumRead\ForumRead();
			$ForumShow = $ForumRead->start();
			?>
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
    <script src="bin/js/areaCheck.js"></script>
    <!-- KWA -->
</body>

</html>
