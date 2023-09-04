<?php

require_once __DIR__.'/classes/User.php';
require_once __DIR__.'/classes/Student.php';

$user = new User('Bon', 'bon@bon.bon');
echo $user->toString();
echo '<br><br>';
echo get_class($user);
echo '<br><br>';
var_dump($user);

$student = new Student('Pietro', 'pie@tro.pie', '123456');
echo $student->toString();
echo '<br><br>';
echo $student->getEmail();
echo '<br><br>';
echo get_class($student);
echo '<br><br>';
var_dump($student);
