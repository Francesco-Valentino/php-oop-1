<?php 
class Movie {
    public $title;
    public $genre;
    public $language;
    public $year;
    public $director;

    function __construct($_title, $_genre, $_language, $_year, $_director){
        $this->title = $_title;
        $this->genre = $_genre;
        $this->language = $_language;
        $this->year = $_year;
        $this->director = $_director;
    }

    public function printTitle(){
        echo $this->title;
    }

    public function printGenre(){
        echo $this->genre;
    }

    public function printLanguage(){
        echo $this->language;
    }

    public function printYear(){
        echo $this->year;
    }

    public function printDirector(){
        echo $this->director;
    }
};

$theEmperorsNewGroove = new Movie("The Emperor's New Groove", "Comedy", "English", 2001, "Mark Dindal");
$vForVendetta = new Movie("V for Vendetta", "Action", "English", 2005, "James McTeigue");
$shutterIsland = new Movie("Shutter Island", "Thriller", "English", 2010, "Martin Scorsese");
$prettyWoman= new Movie("Pretty Woman", "Romance", "English", 1990, "Garry Marshall");
$knivesOut = new Movie("Knives Out", "Detective Movie", "English", 2019, "Rian Johnson");

$moviesList = [$theEmperorsNewGroove, $vForVendetta, $shutterIsland, $prettyWoman, $knivesOut];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Object Oriented Programming 1</title>
    </head>

    <body>
        <div>
            <h1>
                <?php 
                    $theEmperorsNewGroove->printTitle();
                ?>
            </h1>

            <h4>
                <?php 
                    $theEmperorsNewGroove->printGenre();
                ?>
            </h4>

            <h3>
                <?php 
                    $theEmperorsNewGroove->printLanguage();
                ?>
            </h3>

            <h3>
                <?php 
                    $theEmperorsNewGroove->printYear();
                ?>
            </h3>

            <h2>
                <?php 
                    $theEmperorsNewGroove->printDirector();
                ?>
            </h2>
        </div>

        <div>
            <h1>
                <?php 
                    $vForVendetta->printTitle();
                ?>
            </h1>

            <h4>
                <?php 
                    $vForVendetta->printGenre();
                ?>
            </h4>

            <h3>
                <?php 
                    $vForVendetta->printLanguage();
                ?>
            </h3>

            <h3>
                <?php 
                    $vForVendetta->printYear();
                ?>
            </h3>

            <h2>
                <?php 
                    $vForVendetta->printDirector();
                ?>
            </h2>
        </div>

        <div>
            <h1>
                <?php 
                    $shutterIsland->printTitle();
                ?>
            </h1>

            <h4>
                <?php 
                    $shutterIsland->printGenre();
                ?>
            </h4>

            <h3>
                <?php 
                    $shutterIsland->printLanguage();
                ?>
            </h3>

            <h3>
                <?php 
                    $shutterIsland->printYear();
                ?>
            </h3>

            <h2>
                <?php 
                    $shutterIsland->printDirector();
                ?>
            </h2>
        </div>

        <div>
            <h1>
                <?php 
                    $prettyWoman->printTitle();
                ?>
            </h1>

            <h4>
                <?php 
                    $prettyWoman->printGenre();
                ?>
            </h4>

            <h3>
                <?php 
                    $prettyWoman->printLanguage();
                ?>
            </h3>

            <h3>
                <?php 
                    $prettyWoman->printYear();
                ?>
            </h3>

            <h2>
                <?php 
                    $prettyWoman->printDirector();
                ?>
            </h2>
        </div>

        <div>
            <h1>
                <?php 
                    $knivesOut->printTitle();
                ?>
            </h1>

            <h4>
                <?php 
                    $knivesOut->printGenre();
                ?>
            </h4>

            <h3>
                <?php 
                    $knivesOut->printLanguage();
                ?>
            </h3>

            <h3>
                <?php 
                    $knivesOut->printYear();
                ?>
            </h3>

            <h2>
                <?php 
                    $knivesOut->printDirector();
                ?>
            </h2>
        </div>
    </body>
</html>