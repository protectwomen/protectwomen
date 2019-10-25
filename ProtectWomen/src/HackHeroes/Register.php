<?php

namespace Register;

class Register
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

    public function start($username, $userPassword, $userEmail, $userGender){
        
		if ($this->connect == true){

            $this->register($username, $userPassword, $userEmail, $userGender);

        }else {
            echo "Błąd! Nie udało się nawiązać połączenia z bazą danych";
        }
		
    }

    public function register($name, $password, $email, $gender){
        $userName = $name;
        $userPassword= $password;
        $userEmail = $email;
        $userGender= $gender;
        $modifiedPassword = substr($userPassword, 0, 3) . "012adas89124@S!SDA8123:" . substr($userPassword, 3);
        $userPassword = $pass = sha1($modifiedPassword);

        $db = mysqli_connect("mysql1.ugu.pl", "db696909", "zaq1@WSX");
        mysqli_query($db, "SET CHARSET utf8");
        mysqli_query($db, "SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");
        mysqli_select_db($db, 'protectwomen');

        $question = "SELECT * FROM user WHERE userName = '$userName'";
        $result= mysqli_query($db, $question);

        if(mysqli_num_rows($result) > 0){
            echo "<p class='userRegisterError'>Użytkownik o takiej nazwie już istnieje</p>";
        } else{

            $question = "INSERT INTO user VALUES ('', '$userName', '$userGender', '$userEmail', '$userPassword')";
            mysqli_query($db, $question);

            mysqli_close($db);

            header('Location: signIn.php');

        }



        mysqli_close($db);
    }

}
