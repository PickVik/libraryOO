<?php

include ('user.php');




$user1 = new Admin('Vik', 'vik@v.com', 3);

echo $user1->get_Type();

echo PHP_EOL;

$user2 = new Member('Joe', 'joe@v.com', '05-05-2010');

echo $user2->get_Type();

echo PHP_EOL;

echo $user1->get_Name();

echo PHP_EOL;

echo $user2->get_Name();

/*
 * practise with user class
 
$vik = new User(27);
$vik->getAge;

//echo $vik->age;



//set up password and hint for it
echo $vik->getPassword('getit');
//not correct because hint is not correct
//echo $vik->getPassword('getit');


*/