<?php
$conn = mysqli_connect('localhost','root','','blog');

if($conn){
    $sql="UPDATE student SET name='nafisa' WHERE id=1";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "Updated Successfully!";

    }
}else{
    echo "Error!";
}