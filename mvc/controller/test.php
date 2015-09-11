<?php
$book_id = 1;
$book = book_get_details($book_id);
print_r($book);
$row = book_get_paragraph($book_id);
print_r($row);
?>