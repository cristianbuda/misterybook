<?php

    function idea_get_language ($idea_id)
    {
        global $dbc;
        
        $query = "SELECT languages.id, languages.name 
        FROM languages 
            LEFT JOIN ideas 
                ON languages.id = ideas.language_id 
        WHERE ideas.id = '$idea_id'";
        
        $result = mysqli_query($dbc, $query);

        $language = mysqli_fetch_assoc($result);

        return $language;
    }


    function idea_get_genres ($idea_id)
    {
        global $dbc;

        $genres = array();

        $query = "SELECT genres.id as id, genres.name as name 
        FROM idea_genres
            LEFT JOIN genres
                ON idea_genres.genre_id = genres.id
        WHERE idea_genres.idea_id = '$idea_id'";

        $result = mysqli_query($dbc, $query);

        while ($genre = mysqli_fetch_assoc($result)) {
            $genres[] = $genre;
        }

        return $genres;
    }

    function idea_get ($idea_id)
    {
        global $dbc;
        

        $query = "SELECT * 
        FROM ideas 
        WHERE id = '$idea_id'";

        $result = mysqli_query($dbc, $query);
        $idea_row = mysqli_fetch_assoc($result);

        if (empty($idea_row)) {

            return FALSE;

        } else {

            $language = idea_get_language($idea_id);
            $genres = idea_get_genres($idea_id);

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