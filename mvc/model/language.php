<?php
    
    function language_get ($id)
    {
        global $dbc;
        
        $q = "SELECT languages.id, languages.name 
        FROM languages 
            LEFT JOIN ideas 
                ON languages.id = ideas.language_id 
        WHERE ideas.id = '$id'";
        
        $r = mysqli_query($dbc, $q);

        $language = mysqli_fetch_assoc($r);

        return $language;
    }

?>

