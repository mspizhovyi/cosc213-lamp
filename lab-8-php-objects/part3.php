<?php

class Book {
    public $title;
    public $author;
    private $price; 

    public function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
    }

    public function setPrice($p) {
        $this->price = $p;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getDetails() {
        return "$this->title by $this->author (Price: $" . $this->price . ")";
    }
}

echo "<h3>Part 3: Methods and Properties</h3>";
$b = new Book3("The Hobbit", "J.R.R. Tolkien");
$b->setPrice(19.99);
echo $b->getDetails() . "<br>";
echo "Price: $" . $b->getPrice() . "<br><br>";

?>