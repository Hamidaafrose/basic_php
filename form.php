<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<h3>GET/POST method & Filtering-function </h3>
<form action="welcome.php" method="get">

    Name: <input required type="text" name="username"><br><br>
    Email: <input required type="email" name="email"><br><br>
    Gender: 
    <select name="gender" required="required">
     <option value="">select gender</option>
     <option value="male">Male</option>
     <option value="female">Female</option>
    </select>
    <br><br>
    Type:
    <input type="radio" name="type" value="paid">Paid
    <input type="radio" name="type" value="unpaid">Unpaid
    <br><br>
    <input type = "submit" value="submit">

</form>

</body>
</html>
<br><br><br>

<!-- <?php
// we use get method to show or send message through url
if($_SERVER['REQUEST_METHOD']=='POST'){
$name= $_POST['username'];
$email= $_POST['email'];
$gender= $_POST['gender'];
$type= $_POST['type'];
echo "Welcome $name!"."<br>"."Your email Id is $email"."<br>"."Your gender is $gender."."<br>"."And you are currently $type.";
}
?> -->