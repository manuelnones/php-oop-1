<?php

class Movie
{
    public $name;
    public $originalLanguage;
    public $genre;
    public $time;

    function __construct(string $name, string $originalLanguage, string $genre, int $time)
    {
        $this->name = $name;
        $this->originalLanguage = $originalLanguage;
        $this->genre = $genre;
        $this->time = $time;
    }

    public function getLenghtHours() {
        $hoursLenght = floor($this->time / 60);

        if($hoursLenght > 1) {
            return $hoursLenght . " ore";
        } else {
            return "1 ora";
        }
    }
}

$interstellar = new Movie("Interstellar", "en", "fantascienza", 149);
$theImitationGame = new Movie("The imitation game", "en", "biografico", 92);
$avengers = new Movie("Averngers", "en", "fantasy", 134);
$tiPresentoJoeBlack = new Movie("Meet Joe Black", "en", "drammatico", 186);


echo $interstellar->name;
echo "<br>";
echo $interstellar->originalLanguage;
echo "<br>";
echo $interstellar->genre;
echo "<br>";
echo $interstellar->getLenghtHours();
echo "<br>";
echo "<br>";

echo $theImitationGame->name;
echo "<br>";
echo $theImitationGame->originalLanguage;
echo "<br>";
echo $theImitationGame->genre;
echo "<br>";
echo $theImitationGame->getLenghtHours();
echo "<br>";
echo "<br>";

echo $avengers->name;
echo "<br>";
echo $avengers->originalLanguage;
echo "<br>";
echo $avengers->genre;
echo "<br>";
echo $avengers->getLenghtHours();
echo "<br>";
echo "<br>";

echo $tiPresentoJoeBlack->name;
echo "<br>";
echo $tiPresentoJoeBlack->originalLanguage;
echo "<br>";
echo $tiPresentoJoeBlack->genre;
echo "<br>";
echo $tiPresentoJoeBlack->getLenghtHours();