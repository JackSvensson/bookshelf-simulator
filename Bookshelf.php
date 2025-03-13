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
            ['name' => 'Ulysses', 'author' => 'James Joyce', 'pages' => 732],
            ['name' => 'Dune', 'author' => 'Frank Herbert', 'pages' => 412],
            ['name' => 'The Road Less Traveled', 'author' => 'M. Scott Peck', 'pages' => 320],
            ['name' => 'The Shining', 'author' => 'Stephen King', 'pages' => 447],
            ['name' => 'The Hunger Games', 'author' => 'Suzanne Collins', 'pages' => 374],
            ['name' => 'The Color Purple', 'author' => 'Alice Walker', 'pages' => 295],
            ['name' => 'The Subtle Art of Not Giving a F*ck', 'author' => 'Mark Manson', 'pages' => 224],
            ['name' => 'The Goldfinch', 'author' => 'Donna Tartt', 'pages' => 771],
            ['name' => 'The Girl with the Dragon Tattoo', 'author' => 'Stieg Larsson', 'pages' => 672],
            ['name' => 'Sapiens: A Brief History of Humankind', 'author' => 'Yuval Noah Harari', 'pages' => 464],
            ['name' => 'The Silent Patient', 'author' => 'Alex Michaelides', 'pages' => 336],
            ['name' => 'The Da Vinci Code', 'author' => 'Dan Brown', 'pages' => 689],
            ['name' => 'The Book Thief', 'author' => 'Markus Zusak', 'pages' => 584],
            ['name' => 'The Fault in Our Stars', 'author' => 'John Green', 'pages' => 313],
            ['name' => 'The Martian', 'author' => 'Andy Weir', 'pages' => 387],
            ['name' => 'The Nightingale', 'author' => 'Kristin Hannah', 'pages' => 440],
            ['name' => 'Norwegian Wood', 'author' => 'Haruki Murakami', 'pages' => 296],
            ['name' => 'The Secret History', 'author' => 'Donna Tartt', 'pages' => 559],
            ['name' => 'Where the Crawdads Sing', 'author' => 'Delia Owens', 'pages' => 379],
            ['name' => 'Educated', 'author' => 'Tara Westover', 'pages' => 352],
            ['name' => 'Little Fires Everywhere', 'author' => 'Celeste Ng', 'pages' => 338],
            ['name' => 'A Man Called Ove', 'author' => 'Fredrik Backman', 'pages' => 337],
            ['name' => 'Americanah', 'author' => 'Chimamanda Ngozi Adichie', 'pages' => 477],
            ['name' => 'The Night Circus', 'author' => 'Erin Morgenstern', 'pages' => 516],
            ['name' => 'Eleanor Oliphant Is Completely Fine', 'author' => 'Gail Honeyman', 'pages' => 336],
            ['name' => 'The Seven Husbands of Evelyn Hugo', 'author' => 'Taylor Jenkins Reid', 'pages' => 389],
            ['name' => 'The Midnight Library', 'author' => 'Matt Haig', 'pages' => 304],
            ['name' => 'Cloud Atlas', 'author' => 'David Mitchell', 'pages' => 509],
            ['name' => 'Circe', 'author' => 'Madeline Miller', 'pages' => 393],
            ['name' => 'All the Light We Cannot See', 'author' => 'Anthony Doerr', 'pages' => 544],
            ['name' => 'Normal People', 'author' => 'Sally Rooney', 'pages' => 266],
            ['name' => 'The Song of Achilles', 'author' => 'Madeline Miller', 'pages' => 378],
            ['name' => 'The Testaments', 'author' => 'Margaret Atwood', 'pages' => 422],
            ['name' => 'Gone Girl', 'author' => 'Gillian Flynn', 'pages' => 432],
            ['name' => 'Ready Player One', 'author' => 'Ernest Cline', 'pages' => 374],
            ['name' => 'A Gentleman in Moscow', 'author' => 'Amor Towles', 'pages' => 462],
            ['name' => 'The Remains of the Day', 'author' => 'Kazuo Ishiguro', 'pages' => 258],
            ['name' => 'Never Let Me Go', 'author' => 'Kazuo Ishiguro', 'pages' => 288],
            ['name' => 'The Overstory', 'author' => 'Richard Powers', 'pages' => 502],
            ['name' => 'Life of Pi', 'author' => 'Yann Martel', 'pages' => 460],
            ['name' => 'The Unbearable Lightness of Being', 'author' => 'Milan Kundera', 'pages' => 314],
            ['name' => 'The Immortal Life of Henrietta Lacks', 'author' => 'Rebecca Skloot', 'pages' => 381],
            ['name' => 'The Three-Body Problem', 'author' => 'Liu Cixin', 'pages' => 416],
            ['name' => 'Lolita', 'author' => 'Vladimir Nabokov', 'pages' => 317],
            ['name' => 'Beloved', 'author' => 'Toni Morrison', 'pages' => 324],
            ['name' => 'Blindness', 'author' => 'José Saramago', 'pages' => 326],
            ['name' => 'The Road', 'author' => 'Cormac McCarthy', 'pages' => 241],
            ['name' => 'Atonement', 'author' => 'Ian McEwan', 'pages' => 371],
            ['name' => 'The Help', 'author' => 'Kathryn Stockett', 'pages' => 524],
            ['name' => 'The Lovely Bones', 'author' => 'Alice Sebold', 'pages' => 328],
            ['name' => 'The House of the Spirits', 'author' => 'Isabel Allende', 'pages' => 433],
            ['name' => 'The Shadow of the Wind', 'author' => 'Carlos Ruiz Zafón', 'pages' => 487],
            ['name' => 'One Flew Over the Cuckoo\'s Nest', 'author' => 'Ken Kesey', 'pages' => 320],
            ['name' => 'The Handmaid\'s Tale', 'author' => 'Margaret Atwood', 'pages' => 311],
            ['name' => 'Catch-22', 'author' => 'Joseph Heller', 'pages' => 453],
            ['name' => 'Flowers for Algernon', 'author' => 'Daniel Keyes', 'pages' => 311],
            ['name' => 'Invisible Man', 'author' => 'Ralph Ellison', 'pages' => 581],
            ['name' => 'The Giver', 'author' => 'Lois Lowry', 'pages' => 208],
            ['name' => 'A Wrinkle in Time', 'author' => 'Madeleine L\'Engle', 'pages' => 256],
            ['name' => 'East of Eden', 'author' => 'John Steinbeck', 'pages' => 601],
            ['name' => 'The Poisonwood Bible', 'author' => 'Barbara Kingsolver', 'pages' => 546],
            ['name' => 'The Corrections', 'author' => 'Jonathan Franzen', 'pages' => 568],
            ['name' => 'The Ministry of Utmost Happiness', 'author' => 'Arundhati Roy', 'pages' => 449],
            ['name' => 'Pachinko', 'author' => 'Min Jin Lee', 'pages' => 490],
            ['name' => 'American Gods', 'author' => 'Neil Gaiman', 'pages' => 635],
            ['name' => 'The Blind Assassin', 'author' => 'Margaret Atwood', 'pages' => 521],
            ['name' => 'The Wind-Up Bird Chronicle', 'author' => 'Haruki Murakami', 'pages' => 607],
            ['name' => 'White Noise', 'author' => 'Don DeLillo', 'pages' => 326],
            ['name' => 'Things Fall Apart', 'author' => 'Chinua Achebe', 'pages' => 209],
            ['name' => 'The Satanic Verses', 'author' => 'Salman Rushdie', 'pages' => 561],
            ['name' => 'The God of Small Things', 'author' => 'Arundhati Roy', 'pages' => 340],
            ['name' => 'Extremely Loud & Incredibly Close', 'author' => 'Jonathan Safran Foer', 'pages' => 326],
            ['name' => 'The Girl on the Train', 'author' => 'Paula Hawkins', 'pages' => 323],
            ['name' => 'The Curious Incident of the Dog in the Night-Time', 'author' => 'Mark Haddon', 'pages' => 226],
            ['name' => 'Room', 'author' => 'Emma Donoghue', 'pages' => 321],
            ['name' => 'Station Eleven', 'author' => 'Emily St. John Mandel', 'pages' => 333],
            ['name' => 'Wolf Hall', 'author' => 'Hilary Mantel', 'pages' => 604],
            ['name' => 'Lincoln in the Bardo', 'author' => 'George Saunders', 'pages' => 343],
            ['name' => 'A Little Life', 'author' => 'Hanya Yanagihara', 'pages' => 720],
            ['name' => 'The Power', 'author' => 'Naomi Alderman', 'pages' => 341],
            ['name' => 'The Fifth Season', 'author' => 'N.K. Jemisin', 'pages' => 468],
            ['name' => 'Homegoing', 'author' => 'Yaa Gyasi', 'pages' => 300],
            ['name' => 'Exit West', 'author' => 'Mohsin Hamid', 'pages' => 231],
            ['name' => 'An American Marriage', 'author' => 'Tayari Jones', 'pages' => 308],
            ['name' => 'On Earth We\'re Briefly Gorgeous', 'author' => 'Ocean Vuong', 'pages' => 246],
            ['name' => 'Kindred', 'author' => 'Octavia E. Butler', 'pages' => 287],
            ['name' => 'The Water Dancer', 'author' => 'Ta-Nehisi Coates', 'pages' => 416],
            ['name' => 'Klara and the Sun', 'author' => 'Kazuo Ishiguro', 'pages' => 303],
            ['name' => 'The Dutch House', 'author' => 'Ann Patchett', 'pages' => 337],
            ['name' => 'The Underground Railroad', 'author' => 'Colson Whitehead', 'pages' => 306],
            ['name' => 'A Visit from the Goon Squad', 'author' => 'Jennifer Egan', 'pages' => 352],
            ['name' => 'The Brief Wondrous Life of Oscar Wao', 'author' => 'Junot Díaz', 'pages' => 339],
            ['name' => 'Hamnet', 'author' => 'Maggie O\'Farrell', 'pages' => 372],
            ['name' => 'Shuggie Bain', 'author' => 'Douglas Stuart', 'pages' => 448],
            ['name' => 'Infinite Jest', 'author' => 'David Foster Wallace', 'pages' => 1079],
            ['name' => 'Half of a Yellow Sun', 'author' => 'Chimamanda Ngozi Adichie', 'pages' => 433],
            ['name' => 'My Brilliant Friend', 'author' => 'Elena Ferrante', 'pages' => 331]
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