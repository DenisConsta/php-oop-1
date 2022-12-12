<?php

class Movie{

  public $title;
  public $duration;
  public $poster;
  public $genres;

  /**
   * Summary of __construct
   * @param String $_title
   * @param String $_duration
   * @param String $_poster
   * @param Array $_genres
   */
  public function __construct($_title, $_duration, $_poster, $_genres)
  {
    $this->title = $_title;
    $this->duration = $_duration;
    $this->poster = $_poster;
    $this->genres = $_genres;
  }

  public function get_details(){
    return "Film: $this->title, durata: $this->duration";
  }

}

?>