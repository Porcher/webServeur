<?php

class Movie
{
    public $name = null;
    public $description = 'une description';
    public $duration = 120;
    
    
    public function getName()
    {
        return $this->name;
    }
    
    public function setName($name = "")
    {
        $this->name = $name;
    }
    
    public function getDesc()
    {
        return $this->description;
    }
    
    public function setDesc($description = "")
    {
        $this->description = $description;
    }
}

$movie = new Movie("Mon film");

echo $movie->getName();
$movie->setname("Taxi 3 ");
echo $movie->getName();

echo $movie->getDesc();
$movie->setDesc("Film de marseillais à l'humour très éxagéré");
echo $movie->getDesc();
