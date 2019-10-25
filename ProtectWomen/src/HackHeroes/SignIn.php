<?php

namespace SignIn;

class SignIn
{
    public $connect = false;

    /**
     * ForumRead constructor.
     *
     * Sprawdza czy jest połączenie z baza danych
     */
    public function __construct() {
        session_start();
        $db = mysqli_connect("mysql1.ugu.pl", "db696909", "zaq1@WSX");

        if($db == true){
            $this->connect = true;
        }else{
            $this->connect = false;
        }
    }

    public function start($username, $userPassword, $remember){
        
		if ($this->connect == true){

			$this->signIn($username, $userPassword, $remember);

        }else {
            echo "Błąd! Nie udało się nawiązać połączenia z bazą danych";
        }
		
    }

    public function signIn($name, $pass, $remember){
        $rememberMe = $remember;
        $userName= addslashes($name);
        $userPassword = $pass;
        $modifiedPassword = substr($userPassword, 0, 3) . "012adas89124@S!SDA8123:" . substr($userPassword, 3);
        $userPassword = $pass = sha1($modifiedPassword);

        $db = mysqli_connect("mysql1.ugu.pl", "db696909", "zaq1@WSX");
        mysqli_query($db, "SET CHARSET utf8");
        mysqli_query($db, "SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");
        mysqli_select_db($db, 'protectwomen');

        $question = "SELECT * FROM user WHERE userName = '$userName' AND password = '$userPassword'";
        $query = mysqli_query($db, $question);

        if(mysqli_num_rows($query) == 1){
            $row = mysqli_fetch_assoc($query);

            if($rememberMe == 1){
                setcookie("id", $row['id'], time()+3600*24);
                setcookie("nick", $row['userName'], time()+3600*24);
                setcookie("gender", $row['gender'], time()+3600*24);
            } else {
                setcookie ("id", "", time() - 3600);
                setcookie ("nick", "", time() - 3600);
                setcookie ("gender", "", time() - 3600);
            }

            $_SESSION['id'] = $row['id'];
            $_SESSION['nick'] = $row['userName'];
            $_SESSION['gender'] = $row['gender'];

            mysqli_close($db);
            header('Location: forum.php');

        } else{
            echo "<p class='userNotFound formError'>Użytkownik o takiej nazwie lub haśle nie istnieje</p>";
            mysqli_close($db);

        }
    }

}
