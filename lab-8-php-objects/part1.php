<?php 

class Book {
    public $title;
    public $author;

    public function getDetails() {
        return "$this->title by $this->author";
    }
}


$b1 = new Book();
$b1->title = "1984";
$b1->author = "George Orwell";

$b2 = new Book();
$b2->title = "Dune";
$b2->author = "Frank Herbert";

?>