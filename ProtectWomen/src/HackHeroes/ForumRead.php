<?php

namespace ForumRead;

class ForumRead
{
	public $connect = false;

    /**
     * ForumRead constructor.
     *
     * Sprawdza czy jest połączenie z baza danych
     */
    public function __construct() {
        $db = mysqli_connect("mysql1.ugu.pl", "db696909", "zaq1@WSX");

        if($db == true){
            $this->connect = true;
        }else{
            $this->connect = false;
        }
    }

    public function start(){
        
		if ($this->connect == true){

			$this->read();

        }else {
            echo "Błąd! Nie udało się nawiązać połączenia z bazą danych";
        }
		
    }

    /**
     * Wysyła do DB zapytanie szukajac wszysktich dotychczawoych postow/komentarzy
     * a nastepnie wynik w postaci tablicy wysyla do showResult
     *
     */
    public function read(){
        
		$db = mysqli_connect("mysql1.ugu.pl", "db696909", "zaq1@WSX");
        mysqli_query($db, "SET CHARSET utf8");
        mysqli_query($db, "SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");
        mysqli_select_db($db, 'protectwomen');
		
		$question = "select user.userName, user.gender, post.data, post.content from user INNER JOIN post ON user.id = post.userId ";
        $query = mysqli_query($db, $question);
		
		$result = [];
		$forum = [];
		
		while($row = mysqli_fetch_assoc($query)) {
			$forum['userName'] = $row['userName'];
			$forum['gender'] = $row['gender'];
			$forum['data'] = $row['data'];
			$forum['contents'] = $row['content'];
			
			array_push($result, $forum);
		}
		
		$this->showResult($result);
		
    }

    /**
     * Dostaje tablice z wynikami zapytania funckji read, a nastepnie odczytuje je, wstawia do odpowiedniej
     * oprawy HTML i wysyla gotowy do wyswietlenia kod do pliku forum.php
     *
     * @param $array
     */
	public function showResult($array){
        $result = $array;
		
		foreach($result as $value) {
			
			if($value['gender'] == "kobieta"){
				$gender = "<i class='fa fa-female' aria-hidden='true'></i>";
			}else {
				$gender = "<i class='fa fa-male' aria-hidden='true'></i>";
			}
			
			//otwieram div'a i daje obrazek
			$html = "<div class='media text-muted pt-3'><div class='userAvatar'>" . $gender . "</div>";
			
			//dodaje nazwe usera i wpisuje tresc posta
			$html .= "<p class='media-body pb-3 mb-0 small lh-125 border-bottom border-gray forumConcent'>
			<strong class='d-block text-gray-dark userTop'>". $value['userName'] . " - " . $value['data'] ."</strong>".$value['contents']."</p>";
			
			//zamykam div'a
			$html .= "</div>";
			
			echo $html;
			
		}
		
		
    }


}
