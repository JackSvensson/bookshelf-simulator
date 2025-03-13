<?php
class Bookshelf {
    private array $books;
    
    function __construct()
    {
        $this->books = [
            ['name' => 'The Hitchhiker\'s Guide to the Galaxy', 'author' => 'Douglas Adams', 'pages' => 224],
            ['name' => 'To Kill a Mockingbird', 'author' => 'Harper Lee', 'pages' => 336],
            ['name' => '1984', 'author' => 'George Orwell', 'pages' => 328],
            ['name' => 'Pride and Prejudice', 'author' => 'Jane Austen', 'pages' => 432],
            ['name' => 'The Great Gatsby', 'author' => 'F. Scott Fitzgerald', 'pages' => 180],
            ['name' => 'One Hundred Years of Solitude', 'author' => 'Gabriel García Márquez', 'pages' => 417],
            ['name' => 'Brave New World', 'author' => 'Aldous Huxley', 'pages' => 288],
            ['name' => 'The Catcher in the Rye', 'author' => 'J.D. Salinger', 'pages' => 234],
            ['name' => 'The Lord of the Rings', 'author' => 'J.R.R. Tolkien', 'pages' => 1178],
            ['name' => 'Crime and Punishment', 'author' => 'Fyodor Dostoevsky', 'pages' => 671],
            ['name' => 'The Alchemist', 'author' => 'Paulo Coelho', 'pages' => 197],
            ['name' => 'The Hobbit', 'author' => 'J.R.R. Tolkien', 'pages' => 310],
            ['name' => 'Harry Potter and the Philosopher\'s Stone', 'author' => 'J.K. Rowling', 'pages' => 332],
            ['name' => 'The Little Prince', 'author' => 'Antoine de Saint-Exupéry', 'pages' => 96],
            ['name' => 'Don Quixote', 'author' => 'Miguel de Cervantes', 'pages' => 863],
            ['name' => 'The Odyssey', 'author' => 'Homer', 'pages' => 416],
            ['name' => 'The Chronicles of Narnia', 'author' => 'C.S. Lewis', 'pages' => 767],
            ['name' => 'War and Peace', 'author' => 'Leo Tolstoy', 'pages' => 1225],
            ['name' => 'The Divine Comedy', 'author' => 'Dante Alighieri', 'pages' => 798],
            ['name' => 'The Brothers Karamazov', 'author' => 'Fyodor Dostoevsky', 'pages' => 824],
            ['name' => 'Wuthering Heights', 'author' => 'Emily Brontë', 'pages' => 342],
            ['name' => 'The Picture of Dorian Gray', 'author' => 'Oscar Wilde', 'pages' => 254],
            ['name' => 'The Grapes of Wrath', 'author' => 'John Steinbeck', 'pages' => 464],
            ['name' => 'Moby Dick', 'author' => 'Herman Melville', 'pages' => 635],
            ['name' => 'Frankenstein', 'author' => 'Mary Shelley', 'pages' => 280],
            ['name' => 'The Count of Monte Cristo', 'author' => 'Alexandre Dumas', 'pages' => 1276],
            ['name' => 'Jane Eyre', 'author' => 'Charlotte Brontë', 'pages' => 532],
            ['name' => 'Anna Karenina', 'author' => 'Leo Tolstoy', 'pages' => 864],
            ['name' => 'Les Misérables', 'author' => 'Victor Hugo', 'pages' => 1232],
            ['name' => 'The Old Man and the Sea', 'author' => 'Ernest Hemingway', 'pages' => 127],
            ['name' => 'The Road', 'author' => 'Cormac McCarthy', 'pages' => 287],
            ['name' => 'The Handmaid\'s Tale', 'author' => 'Margaret Atwood', 'pages' => 311],
            ['name' => 'The Bell Jar', 'author' => 'Sylvia Plath', 'pages' => 244],
            ['name' => 'Slaughterhouse-Five', 'author' => 'Kurt Vonnegut', 'pages' => 275],
            ['name' => 'A Tale of Two Cities', 'author' => 'Charles Dickens', 'pages' => 448],
            ['name' => 'Great Expectations', 'author' => 'Charles Dickens', 'pages' => 544],
            ['name' => 'The Kite Runner', 'author' => 'Khaled Hosseini', 'pages' => 371],
            ['name' => 'The Stranger', 'author' => 'Albert Camus', 'pages' => 123],
            ['name' => 'Catch-22', 'author' => 'Joseph Heller', 'pages' => 453],
            ['name' => 'The Sun Also Rises', 'author' => 'Ernest Hemingway', 'pages' => 251],
            ['name' => 'Lord of the Flies', 'author' => 'William Golding', 'pages' => 224],
            ['name' => 'The Metamorphosis', 'author' => 'Franz Kafka', 'pages' => 201],
            ['name' => 'The Wind in the Willows', 'author' => 'Kenneth Grahame', 'pages' => 256],
            ['name' => 'Alice\'s Adventures in Wonderland', 'author' => 'Lewis Carroll', 'pages' => 200],
            ['name' => 'The Name of the Rose', 'author' => 'Umberto Eco', 'pages' => 536],
            ['name' => 'The Master and Margarita', 'author' => 'Mikhail Bulgakov', 'pages' => 384],
            ['name' => 'Fahrenheit 451', 'author' => 'Ray Bradbury', 'pages' => 249],
            ['name' => 'A Clockwork Orange', 'author' => 'Anthony Burgess', 'pages' => 213],
            ['name' => 'The Sound and the Fury', 'author' => 'William Faulkner', 'pages' => 326],
            ['name' => 'Ulysses', 'author' => 'James Joyce', 'pages' => 732]
        ];
    }
    
    /**
     * Get all books from the bookshelf
     * 
     * @return array The complete list of books
     */
    public function getAllBooks(): array
    {
        return $this->books;
    }
    
    /**
     * Get a specific book by index
     * 
     * @param int $index The index of the book to retrieve (0-based)
     * @return array|null The book if found, null otherwise
     */
    public function getBook(int $index): ?array
    {
        if ($index >= 0 && $index < count($this->books)) {
            return $this->books[$index];
        }
        return null;
    }
    
    /**
     * Search for books by author
     * 
     * @param string $author Author name to search for
     * @return array List of books by the specified author
     */
    public function getBooksByAuthor(string $author): array
    {
        return array_filter($this->books, function($book) use ($author) {
            return stripos($book['author'], $author) !== false;
        });
    }
    
    /**
     * Search for books by title
     * 
     * @param string $title Title to search for
     * @return array List of books matching the title search
     */
    public function searchBooksByTitle(string $title): array
    {
        return array_filter($this->books, function($book) use ($title) {
            return stripos($book['name'], $title) !== false;
        });
    }
    
    /**
     * Filter books by page count range
     * 
     * @param int $minPages Minimum number of pages
     * @param int $maxPages Maximum number of pages
     * @return array List of books within the page range
     */
    public function getBooksByPageRange(int $minPages, int $maxPages): array
    {
        return array_filter($this->books, function($book) use ($minPages, $maxPages) {
            return $book['pages'] >= $minPages && $book['pages'] <= $maxPages;
        });
    }
}