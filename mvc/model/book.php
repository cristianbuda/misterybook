<?php

function book_get_details($book_id) 
{
  global $dbc;

  $sql = '
    SELECT id, user_id, title, description, language_id, length 
    FROM books 
    WHERE id = ' . $book_id . '
  ';

  $book_rows = mysqli_query($dbc, $sql);

  if ($book_rows) {
    $book_row = mysqli_fetch_assoc($book_rows);
  }

  return $book_row;
}

function book_get_paragraph($book_id)
{
  global $dbc;
	$sql = '
    SELECT id, book_id, user_id, paragraph_no, content
	FROM book_paragraphs
    WHERE book_id = ' . $book_id . '
  ';

   $rows = mysqli_query($dbc, $sql);

   $paragraphs = array();
while ($row = mysql_fetch_assoc($rows)) {
   $paragraphs[] = $row;
}
return $paragraphs;
}
?>
