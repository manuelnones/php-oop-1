<?php

class Movie
{
    public $name;
    public $originalLanguage;
    public $genre;
    public $time;

    function __construct(string $name, string $originalLanguage, string $genre, string $time)
    {
        $this->name = $name;
        $this->originalLanguage = $originalLanguage;
        $this->genre = $genre;
        $this->time = $time;
    }
}


$interstellar = new Movie("Interstellar", "en", "fantascienza", "2h 49m");
$theImitationGame = new Movie("The imitation game", "en", "biografico", "1h 53m");
$avengers = new Movie("Averngers", "en", "fantasy", "2h 23m");


echo $interstellar->name;
echo "<br>";
echo $interstellar->originalLanguage;
echo "<br>";
echo $interstellar->genre;
echo "<br>";
echo $interstellar->time;
echo "<br>";
echo "<br>";

echo $theImitationGame->name;
echo "<br>";
echo $theImitationGame->originalLanguage;
echo "<br>";
echo $theImitationGame->genre;
echo "<br>";
echo $theImitationGame->time;
echo "<br>";
echo "<br>";

echo $avengers->name;
echo "<br>";
echo $avengers->originalLanguage;
echo "<br>";
echo $avengers->genre;
echo "<br>";
echo $avengers->time;