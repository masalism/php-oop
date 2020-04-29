<?php
class User
{
    public $name;
    public $age;

    // Runs when an object is created
    public function __construct($name, $age)
    {
        echo  'Class ' . __CLASS__ . ' instantiated ';
        $this->name = $name;
        $this->age = $age;
    }

    public function sayHello()
    {
        return $this->name . ' Says Hello';
    }

    // Called when no other references to a certain object
    // Used for cleanup, closing connections
    public function __destruct()
    {
        echo 'Destructor ran...';
    }
}

$user1 = new User('Mantas', 30);

echo $user1->name . ' is ' . $user1->age . ' old';
echo '<br>';
echo $user1->sayHello() . '<br>';

$user2 = new User('Darius', 23);

echo $user2->name . ' is ' . $user2->age . ' old';
echo '<br>';
echo $user2->sayHello() . '<br>';
