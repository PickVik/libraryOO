<?php
include ('user.php');

$user1 = new Admin('12', 'vik@v.com', 'Vik', 'Mezei', '1234', 4, 3);
echo $user1->get_Type();
echo PHP_EOL;
echo $user1->get_Permissionlevel();
echo PHP_EOL;
echo $user1->get_First_Name();
//echo $user1->get_Book_limit();
echo PHP_EOL;
$user2 = new Member('11', 'joe@v.com', 'Joe', 'Doe', '0000', 3, '05-05-2012');
echo $user2->get_Type();
echo PHP_EOL;
echo $user2->get_First_Name();
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