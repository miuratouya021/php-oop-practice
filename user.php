<?php

class User {
    public $name = 0;
    public $age = 0;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function introduce()
    {
        return "こんにちは、私は" . $this->name . "です。" . $this->age . "歳です。" . "<br>";
    }

    public function isAdult()
    {
        if ($this->age >= 18){
            return true;
        } else {
            return false;
    }
    }
}

$user1 = new User("田中太郎", 25);
$user2 = new User("佐藤花子", 17);
$user3 = new User("鈴木一郎", 30);

echo $user1->introduce();
echo $user2->introduce();
echo $user3->introduce();

$users = [$user1, $user2, $user3];

foreach($users as $user){
    if($user->isAdult()){
    echo $user->name . "さんは成人です。" . "<br>";
} else{
    echo $user->name . "さんは未成年です。" . "<br>";
}
}

?>