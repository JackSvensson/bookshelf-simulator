<!DOCTYPE html>
<html lang="en">
<?php 
require 'Bookshelf.php';

$bookshelf = new Bookshelf();
$allBooks = $bookshelf->getAllBooks();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookshelf with Forty Books</title>
    <link rel="stylesheet" href="styles.css">
</head>
    <!-- <div class="bookshelf-container">
        <div class="bookshelf">
            <div class="book"></div> -->
<body>
    <div class="bookshelf-container">
        <div class="bookshelf">

            <?php
            foreach ($allBooks as $book): 
                ?><div class="book" style="height:<?= $book['pages'] ?>px; width:<?= $book['pages'] * 0.3 ?>px; min-width:50px; max-height:90vh;">
                    <p><?= $book['name'] ?></p>
                    <p><?= $book['author'] ?></p>
                </div>
            <?php
            endforeach;
            ?>
        </div>
    </div>
</body>

</html>