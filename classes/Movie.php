<?php

class Movie
{
    public $title;
    public $release_date;
    public $genre;
    public $description;
    public $poster_path;

    function __construct($_title, $_genre) {
        $this->title = $_title;
        $this->genre = $_genre;
    }

    public function getGenreDate()
    {
        return 'Genere:' . ' ' . $this->genre . '<br>' . 'Data uscita:'. ' ' . $this->release_date;
    }
}
