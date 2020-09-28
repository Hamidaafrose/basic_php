<?php
// we use get method to show or send message through url
// $name= stripslashes(trim( $_GET['username']));

function trimmer($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$name=trimmer($_GET['username']);
$email=trimmer($_GET['email']);
$gender=trimmer($_GET['gender']);
$type=trimmer($_GET['type']);
echo "Welcome $name!"."<br>"."Your email Id is $email"."<br>"."Your gender is $gender."."<br>"."And you are currently $type.<br>";
echo 'Don\'t forget!'
?>
