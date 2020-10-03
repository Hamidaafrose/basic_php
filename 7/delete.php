<?php
$conn = mysqli_connect('localhost','root','','blog');

if($conn){
    $sql="DELETE FROM student WHERE name ='fatash' ";
    $result=mysqli_query($conn,$sql);
        if($result){
    
            echo "Deleted Successfully!";
        }
}else{
    echo "Error!";
}