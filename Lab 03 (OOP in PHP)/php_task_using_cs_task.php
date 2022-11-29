<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Task From C# Task</title>
</head>
<body>
    <?php
    class Author
    {
        private $name;
        private $email;
        private $gender;
        public function __construct($name, $email, $gender)
        {
            $this->name=$name;
            $this->email=$email;
            $this->gender=$gender;
        }
        public function ShowInfo()
        {
            echo "Author Info <br>";
            echo "\tName: " . $this->name . "<br>";
            echo "\tEmail: " . $this->email . "<br>";
            echo "\tGender: " . $this->gender . "<br>";
        }
        public function setName($name)
        {
            $this->name=$name;
        }
        public function getName()
        {
            return $this->name;
        }
        public function setEmail($email)
        {
            $this->email=$email;
        }
        public function getEmail()
        {
            return $this->email;
        }
        public function setGender($gender)
        {
            $this->gender=$gender;
        }
        public function getGender()
        {
            return $this->gender;
        }
    }
    class Book
    {
        private $BookTitle;
        private $author;
        private $price;
        private $quantity;
        public function __construct($BookTitle, $auhtor, $price, $quantity)
        {
            $this->BookTitle=$BookTitle;
            $this->author=$auhtor;
            $this->price=$price;
            $this->quantity=$quantity;
        }
        public function setAuthorName($authorName)
        {
            $this->auhor->setName($authorName);
        }
        public function getAuthorName()
        {
            return $this->author->getName();
        }
        public function setBookTitle($BookTitle)
        {
            $this->BookTitle=$BookTitle;
        }
        public function getBookTitle()
        {
            return $this->BookTitle;
        }
        public function setBookPrice($price)
        {
            $this->price=$price;
        }
        public function getBookPrice()
        {
            return $this->price;
        }
        public function setBookQuantity($quantity)
        {
            $this->quantity=$quantity;
        }
        public function getBookQuantity()
        {
            return $this->quantity;
        }
        public function ShowDetails()
        {
            echo "Book Details: <br>";
            echo "\tBook title: ". $this->BookTitle . "<br>";
            echo "\tAuthor Name: ". $this->getAuthorName() . "<br>";
            echo "\tPrice: ". $this->price . "<br>";
            echo "\tQuantity: ". $this->quantity . "<br>";
        }
    }
    $auhtor1=new Author("Monkir", "monkir@gmail.com", 'M');
    $auhtor1->ShowInfo();
    echo "<br> <br>";
    $book1=new Book("Chemistry", $auhtor1, 100, 50);
    $book1->ShowDetails();
    ?>
</body>
</html>