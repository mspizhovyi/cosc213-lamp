<?php

class Book {
    public $title;
    public $author;
    private $price;
    const CATEGORY = "Literature";
    public static $count = 0;

    public function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
        self::$count++;
    }

    public static function getCount() {
        return self::$count;
    }

    public function getDetails() {
        return "$this->title by $this->author (" . self::CATEGORY . ")";
    }
}

echo "<h3>Part 4: Constants and Static</h3>";
$ba = new Book("Book A", "Author A");
$bb = new Book("Book B", "Author B");
$bc = new Book("Book C", "Author C");

echo $ba->getDetails() . "<br>";
echo $bb->getDetails() . "<br>";
echo $bc->getDetails() . "<br>";
echo "Books created: " . Book::getCount() . "<br><br>";

?>