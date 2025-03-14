<!DOCTYPE html>
<html lang="en">
<?php
require 'Bookshelf.php';

$bookshelf = new Bookshelf();
$allBooks = $bookshelf->getAllBooks();

$searchQuery = isset($_GET['search_query']) ? $_GET['search_query'] : '';
$searchResults = [];

if (!empty($searchQuery)) {
    $searchResults = $bookshelf->searchBooksByTitle($searchQuery);
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookshelf with Forty Books</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h1>Book Search</h1>

    <div class="search-form">
        <form action="index.php" method="GET">
            <input
                type="text"
                name="search_query"
                class="search-input"
                placeholder="Search for books..."
                value="<?php echo htmlspecialchars($searchQuery); ?>">
            <button type="submit" class="search-button">Search</button>
        </form>
    </div>

    <?php if (!empty($searchQuery)): ?>
        <div class="results">
            <h2>Search Results for: "<?php echo htmlspecialchars($searchQuery); ?>"</h2>

            <?php if (empty($searchResults)): ?>
                <p class="no-results">No books found matching your search criteria.</p>
            <?php else: ?>
                <?php foreach ($searchResults as $book): ?>
                    <div class="book-item">
                        <div class="book-title"><?php echo htmlspecialchars($book['name']); ?></div>
                        <?php if (isset($book['author'])): ?>
                            <div class="book-author">by <?php echo htmlspecialchars($book['author']); ?></div>
                        <?php endif; ?>
                        <?php if (isset($book['description'])): ?>
                            <div class="book-description"><?php echo htmlspecialchars($book['description']); ?></div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <div class="bookshelf-container">
        <div class="bookshelf">
            <?php
            if ($searchResults){
                foreach ($searchResults as $book): 
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
        } else {
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
        }
        ?>
        </div>
    </div>
</body>

</html>