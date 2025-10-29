<?php

class Book {
    public $title;
    public $author;

    public function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
        echo "Book created: $this->title by $this->author<br>";
    }

    public function __destruct() {
        echo "Book object destroyed<br>";
    }

    public function getDetails() {
        return "$this->title by $this->author";
    }
}

echo "<h3>Part 2: Constructors and Destructors</h3>";
$tempB = new Book("Brave New World", "Aldous Huxley");
echo $tempB->getDetails() . "<br><br>";
unset($tempB); 



?>