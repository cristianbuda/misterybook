<?php

class Genres {

	public $genre;
	
	public function __construct($genre) {

		$this->genre = $genre;
	}

	public function getGenre ()
	{
		return $this->genre
	}
}

 $Fantasy = new Genres;
 $Horror = new Gengres;
 $Mystery = new Genres;
 $Romance = new Genres;
 $Science_fiction = new Genres;
?>