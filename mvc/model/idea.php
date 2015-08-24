<?php

    include_once('language.php');
    include_once('genre.php');

    function idea_get ($id)
    {
        global $dbc;
        

        $q = "SELECT * 
        FROM ideas 
        WHERE id = '$id'";

        $r = mysqli_query($dbc, $q);
        $idea_row = mysqli_fetch_assoc($r);

        if (empty($idea_row)) {

            return FALSE;

        } else {

            $language = language_get($id);
            $genres = genre_get($id);

            $idea = array(
                'id' => $idea_row['id'],
                'user_id' => $idea_row['user_id'],
                'title' => $idea_row['title'],
                'description' => $idea_row['description'],
                'language' => $language,
                'length' => $idea_row['length'],
                'rating' => $idea_row['rating'],
                'genres' => $genres
            );

            return $idea;
        }
        
    }

?>