<?php
$conn = mysqli_connect('localhost','root','','blog');

if($conn){
    $sql="INSERT INTO class VALUES(null,'eight')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "Inserted Successfully";

    }
}else{
    echo "DB isn't connected";
}