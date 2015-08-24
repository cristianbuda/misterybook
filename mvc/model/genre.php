<?php
    function genre_get ($id)
    {
        global $dbc;

        $genres = array();

        $q = "SELECT genres.id as id, genres.name as name 
        FROM idea_genres
            INNER JOIN ideas
                ON idea_genres.idea_id = ideas.id
            INNER JOIN genres
                ON idea_genres.genre_id = genres.id
        WHERE ideas.id = '$id'";

        $r = mysqli_query($dbc, $q);

        while ($genre = mysqli_fetch_assoc($r)) {
            $genres[] = $genre;
        }

        return $genres;
    }

?>