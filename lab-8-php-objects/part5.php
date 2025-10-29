<?php

class Textbook extends Book4 {
    public $subject;

    public function __construct($title, $author, $subject) {
        parent::__construct($title, $author); 
        $this->subject = $subject;
    }

    public function getDetails() {
        return "$this->title by $this->author - $this->subject (" . self::CATEGORY . ")";
    }
}

echo "<h3>Part 5: Inheritance</h3>";
$textbook = new Textbook("Physics 101", "Dr. Brown", "Science");
echo $textbook->getDetails() . "<br>";
echo "Total books (including textbooks): " . Book4::getCount() . "<br>";
?>