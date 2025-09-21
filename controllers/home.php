<?php 

$books = [
    ['title' => '1984', 'author' => 'George Orwell'],
    ['title' => 'To Kill a Mockingbird', 'author' => 'Harper Lee'],
    ['title' => 'The Great Gatsby', 'author' => 'F. Scott Fitzgerald'],
    ['title' => 'Pride and Prejudice', 'author' => 'Jane Austen'],
    ['title' => 'The Catcher in the Rye', 'author' => 'J.D. Salinger'],
    ['title' => 'Moby-Dick', 'author' => 'Herman Melville']
];


?>


<?php view('home', ['books' => $books]); ?>
