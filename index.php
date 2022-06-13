<?php
class Movie
{
    public $name;
    public $lenghtMin;
    public $lenghtHM;
    public $userScore = "none";
    public $adult;
    public function __construct($_name, $_lengthM, $_isForAdult)
    {
        $this->name = $_name;
        $this->adult = $_isForAdult;
        $Hours = floor($_lengthM / 60);
        $Min = $_lengthM % 60;
        $this->lenghtHM = $Hours . " hours " . $Min . " minutes";
    }
    public function setScore($score)
    {
        $this->userScore = $score;
    }
}

$movies = [];

$movies[] = new Movie("The Silent Man", 110, false);
$movies[0]->setScore(10);
$movies[] = new Movie("Imitation Game", 140, true);
$movies[] = new Movie("The fifth power", 150, false);
?>


<ul>
    <?php foreach ($movies as $movie) { ?>
        <li>
            <h2><?php echo "title: " . $movie->name; ?></h2>
            <p><?php echo "movie length: " . $movie->lenghtHM ?></p>
            <?php if ($movie->adult) { ?>
                <p>18+</p>
            <?php } ?>
            <p><?php echo "personal score: " . $movie->userScore ?></p>
        </li>
    <?php } ?>
</ul>