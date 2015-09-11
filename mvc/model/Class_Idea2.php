<?php
    
    class Idea {
        {
        private $id;
        private $user_id;
        private $title;
        private $description;
        private $language_id;
        private $length;
        private $rating;
        


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

        public function setLanguageID($language_id) {
            $this->language_id = $language_id;
        }

        public function setLength($length) {
            $this->length = $length;
        }

        public function setRating($rating) {
            $this->rating = $rating;
        }

        //getters

        public function getIdea() {
            return $idea = array(
                'id' => $this->getID(),
                'user_id' => $this->getUserId(),
                'title' => $this->getTitle(),
                'description' => $this->getDescription(),
                'language_id' => $this->getLanguageID(),
                'length' => $this->getLength(),
                'rating' => $this->getRating(),
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

        public function getLanguageID() {
            return $this->language_id;
        }

        public function getLength() {
            return $this->length;
        }

        public function getRating() {
            return $this->rating;
        }

        function updateIdea () {
            $query = "UPDATE ideas 
            SET user_id = $this->user_id, title = '$this->title', 
            description = '$this->description', language_id = $this->language_id, 
            length = $this->length, rating = $this->rating WHERE id = $this->id" ;
            $result = $this->_dbh->query($query);
            if ($result) {
                return TRUE;
            } else {
                return FALSE;
            }
        }

        function addIdea () {
            $query = "INSERT INTO ideas (user_id, title, description, language_id, length, rating) 
            VALUES ($this->user_id, '$this->title', '$this->description', $this->language_id, $this->length, $this->rating)";
            $result = $this->_dbh->query($query);
            if ($result) {
                return $this->id = $_dbh->lastInsertId();
            } else {
                return FALSE;
            }

        }

        function deleteIdea () {
            $query = "DELETE FROM ideas WHERE id = $this->id";
            $result = $this->_dbh->query($query);
            if ($result) {
                $this = null;
                return TRUE;
            } else {
                return FALSE;
            }
        }

    }
?>