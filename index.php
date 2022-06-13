<?php
class Movie
{
    public $name;
    public $lenghtMin;
    public $lenghtHM;
    public function __construct($_name, $_lengthM)
    {
        $this->name = $_name;
        $Hours = floor($_lengthM / 60);
        $Min = $_lengthM % 60;
        $this->lenghtHM = $Hours . " hours " . $Min . " minutes";
    }
}

$movies = [];

$movies[] = new Movie("The Silent Man", 110);
$movies[] = new Movie("Imitation Game", 140);
$movies[] = new Movie("The fifth power", 150);
?>


<ul>
    <?php foreach ($movies as $movie) { ?>
        <li>
            <h2><?php echo $movie->name; ?></h2>
            <p><?php echo $movie->lenghtHM ?></p>
        </li>
    <?php } ?>
</ul>