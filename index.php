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
                ?><div class="book" style="height:<?= $book['pages'] ?>px; width:<?= $book['pages'] * 0.3 ?>px;">
                    <div>
                        <p style="font-size:
                            <?php 
                            $calculatedSize = $book['pages']*0.05;
                            if ($calculatedSize < 12) {
                                echo 12;
                            } else if ($calculatedSize > 50) {
                                echo 50;
                            } else {
                                echo $calculatedSize;
                            }
                            ?>px;"><?= $book['name'] ?>
                        </p>

                        <p style="font-size:
                            <?php 
                            $calculatedSize = $book['pages']*0.03;
                            if ($calculatedSize < 10) {
                                echo 10;
                            } else if ($calculatedSize > 40) {
                                echo 40;
                            } else {
                                echo $calculatedSize;
                            }
                            ?>px;"><?= $book['author'] ?>
                        </p>
                    </div>
                </div>
            <?php
            endforeach;
            ?>
        </div>
    </div>
</body>

</html>