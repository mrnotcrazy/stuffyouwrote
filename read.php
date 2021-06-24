
<?php

$book_title= $_GET["book"];
echo file_get_contents("books/$book_title.html");


?>






