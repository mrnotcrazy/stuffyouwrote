
<?php echo file_get_contents("html/header.html"); ?>


<?php 


    
    $files = glob("books/*.png");

echo "<div class=\"grid-container\">";

foreach($files as $png){
    $book_title= pathinfo($png, PATHINFO_FILENAME);
   echo "<div class=\"grid-item\"><a 
  class=\"book-container\"
  ref=\"https://stuffiwrote.net/read.php?book=$book_title\"
  target=\"_blank\"
  rel=\"noreferrer noopener\"
>
  <div class=\"book\">
    <img
      alt=\"\"
      src=\"$png\"
      />
  </div>
</a>";
    echo "<a href=\"https://stuffiwrote.net/read.php?book=$book_title\">Read Online</a>
\n";       
   echo "<a href=\"https://stuffiwrote.net/books/$book_title.pdf\">Download PDF</a>\n";
   echo "<a href=\"https://stuffiwrote.net/books/$book_title.epub\">Download Epub</a></div>";
    
}







echo "</div>";

 ?>
<?php echo file_get_contents("html/footer.html"); ?>
