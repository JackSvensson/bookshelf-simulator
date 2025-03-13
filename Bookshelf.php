<?php
class Bookshelf {
    private array $books;
    
    function __construct()
    {
        $this->books = [
            ['name' => 'The Hitchhiker\'s Guide to the Galaxy', 'author' => 'Douglas Adams'],
            ['name' => 'To Kill a Mockingbird', 'author' => 'Harper Lee'],
            ['name' => '1984', 'author' => 'George Orwell'],
            ['name' => 'Pride and Prejudice', 'author' => 'Jane Austen'],
            ['name' => 'The Great Gatsby', 'author' => 'F. Scott Fitzgerald'],
            ['name' => 'One Hundred Years of Solitude', 'author' => 'Gabriel García Márquez'],
            ['name' => 'Brave New World', 'author' => 'Aldous Huxley'],
            ['name' => 'The Catcher in the Rye', 'author' => 'J.D. Salinger'],
            ['name' => 'The Lord of the Rings', 'author' => 'J.R.R. Tolkien'],
            ['name' => 'Crime and Punishment', 'author' => 'Fyodor Dostoevsky'],
            ['name' => 'The Alchemist', 'author' => 'Paulo Coelho'],
            ['name' => 'The Hobbit', 'author' => 'J.R.R. Tolkien'],
            ['name' => 'Harry Potter and the Philosopher\'s Stone', 'author' => 'J.K. Rowling'],
            ['name' => 'The Little Prince', 'author' => 'Antoine de Saint-Exupéry'],
            ['name' => 'Don Quixote', 'author' => 'Miguel de Cervantes'],
            ['name' => 'The Odyssey', 'author' => 'Homer'],
            ['name' => 'The Chronicles of Narnia', 'author' => 'C.S. Lewis'],
            ['name' => 'War and Peace', 'author' => 'Leo Tolstoy'],
            ['name' => 'The Divine Comedy', 'author' => 'Dante Alighieri'],
            ['name' => 'The Brothers Karamazov', 'author' => 'Fyodor Dostoevsky'],
            ['name' => 'Wuthering Heights', 'author' => 'Emily Brontë'],
            ['name' => 'The Picture of Dorian Gray', 'author' => 'Oscar Wilde'],
            ['name' => 'The Grapes of Wrath', 'author' => 'John Steinbeck'],
            ['name' => 'Moby Dick', 'author' => 'Herman Melville'],
            ['name' => 'Frankenstein', 'author' => 'Mary Shelley'],
            ['name' => 'The Count of Monte Cristo', 'author' => 'Alexandre Dumas'],
            ['name' => 'Jane Eyre', 'author' => 'Charlotte Brontë'],
            ['name' => 'Anna Karenina', 'author' => 'Leo Tolstoy'],
            ['name' => 'Les Misérables', 'author' => 'Victor Hugo'],
            ['name' => 'The Old Man and the Sea', 'author' => 'Ernest Hemingway'],
            ['name' => 'The Road', 'author' => 'Cormac McCarthy'],
            ['name' => 'The Handmaid\'s Tale', 'author' => 'Margaret Atwood'],
            ['name' => 'The Bell Jar', 'author' => 'Sylvia Plath'],
            ['name' => 'Slaughterhouse-Five', 'author' => 'Kurt Vonnegut'],
            ['name' => 'A Tale of Two Cities', 'author' => 'Charles Dickens'],
            ['name' => 'Great Expectations', 'author' => 'Charles Dickens'],
            ['name' => 'The Kite Runner', 'author' => 'Khaled Hosseini'],
            ['name' => 'The Stranger', 'author' => 'Albert Camus'],
            ['name' => 'Catch-22', 'author' => 'Joseph Heller'],
            ['name' => 'The Sun Also Rises', 'author' => 'Ernest Hemingway'],
            ['name' => 'Lord of the Flies', 'author' => 'William Golding'],
            ['name' => 'The Metamorphosis', 'author' => 'Franz Kafka'],
            ['name' => 'The Wind in the Willows', 'author' => 'Kenneth Grahame'],
            ['name' => 'Alice\'s Adventures in Wonderland', 'author' => 'Lewis Carroll'],
            ['name' => 'The Name of the Rose', 'author' => 'Umberto Eco'],
            ['name' => 'The Master and Margarita', 'author' => 'Mikhail Bulgakov'],
            ['name' => 'Fahrenheit 451', 'author' => 'Ray Bradbury'],
            ['name' => 'A Clockwork Orange', 'author' => 'Anthony Burgess'],
            ['name' => 'The Sound and the Fury', 'author' => 'William Faulkner'],
            ['name' => 'Ulysses', 'author' => 'James Joyce']
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
}