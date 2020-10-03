<?php

$conn = mysqli_connect('localhost','root','','blog');

if($conn) {
    $sql = "SELECT * FROM student";
    if($result = mysqli_query($conn,$sql)) {
        echo "<h4>Student Infromations!</h4>";

?>


    <table border="1">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>CLASS ID</th>
            <th>AGE</th>
            <th>ROLL</th>
        </tr>


<?php
        while($row=mysqli_fetch_assoc($result)){

?>


        <tr>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['class_id'] ?></td>
        <td><?php echo $row['age'] ?></td>
        <td><?php echo $row['roll'] ?></td>
        </tr>


<?php
    }
}
?>


    </table>


<?php
}else{
    echo "<h3>DB0 not connected </h3>";
}
?>