<?php 

class Idea
	{
		private $id;
		private $user_id;
		private $title;
		private $description;
		private $language_id;
		private $length;
		private $rating;
		private $genre_ids;


		public function __construct () {
			$db = DB::getInstance();
			$this->_dbh = $db->getConnection();
		}


		// setters

		public function setUserId() {
			$this->user_id = $_SESSION['user_id'];
		}

		public function setTitle($title) {
			$this->title = $title;
		}

		public function setDescription($description) {
			$this->description = $description;
		}

		public function setLanguageID($language) {
			$query = "SELECT id FROM languages WHERE name = '$language'";
			$this->language_id = $this->_dbh->query($query);
		}

		public function setLength($length) {
			$this->length = $length;
		}

		public function setRating() {
			$query = "SELECT AVG(rating) FROM idea_ratings WHERE idea_id = $this->id";
			$this->rating = $this->_dbh->query($query);
		}

		public function setGenreIds($genre_ids) {
			$genres = new Genres();
			$this->genre_ids = $genres->getIds($genre_ids);//clasa Genres ar trebui sa aiba o metoda prin care sa returneze id-urile in forma de array pentru un array de valori
			for ($i = 0; $i < count($this->genre_ids); $i ++) {
				$query = "INSERT INTO idea_genres (idea_id, genre_id) VALUES ($this->id, $this->genre_ids[$i])";
				$this->_dbh->query($query);
			}

		}

		//getters

		public function getIdea() {
			return $idea = array(
                'id' => $this->getID(),
                'user_id' => $this->getUserId(),
                'title' => $this->getTitle(),
                'description' => $this->getDescription(),
                'language' => $this->getLanguageID(),
                'length' => $this->getLength(),
                'rating' => $this->getLength(),
                'genres' => $this->getGenres()
            );
		}

		public function getId() {
			return $this->id;
		}

		public function getUserId() {
			return $this->user_id;
		}

		public function getTitle() {
			return $this->title;
		}

		public function getDescription() {
			return $this->description;
		}

		public function getLanguage() {
			$query = "SELECT * FROM languages WHERE id = $this->language_id";
			return $language = $this->_dbh->query($query);
		}

		public function getLength() {
			return $this->length;
		}

		public function getRating() {
			return $this->rating;
		}

		public function getGenres() {
			$genres = array();

	        $query = "SELECT genres.*
	        FROM genres
	            INNER JOIN idea_genres
	                ON genres.id = idea_genres.genre_id
	        WHERE idea_genres.idea_id = $this->id";

	        foreach ($this->_dbh->query($query) as $genre) {
	        	$genres[] = $genre;
	        }

			return $genres;
		}
	}
?>