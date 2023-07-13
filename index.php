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
};

$theEmperorsNewGroove = new Movie("The Emperor's New Groove", "Comedy", "English", 2001, "Mark Dindal")
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Object Oriented Programming 1</title>
    </head>

    <body>
        <h1>
            <?php 
                var_dump($theEmperorsNewGroove);
            ?>
        </h1>
    </body>
</html>