<?php

echo "File name : ".$_FILES["image"]["name"]."<br>";
echo "Image size : ".$_FILES["image"]["size"]."<br>";
echo "Temporary location : ".$_FILES['image']['tmp_name']."<br>";
echo "Extension : ".$extension = pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);



// if($extension == 'jpg'){
//     $filename = 'upload/'.$_FILES['image']['name'];
//     move_uploaded_file($_FILES['image']['tmp_name'],$filename);
// 
// }else{
//     echo "Invalid file";
// }

$allowed_image_extension = array("jpg", "jpeg");

// if (! file_exists($_FILES['image']['tmp_name'])) {
//     $response = array(
//         "type" => "error",
//         "message" => "Choose image file to upload."
//     );
// } else if (! in_array($extension, $allowed_image_extension)) {
//     $response = array(
//         "type" => "error",
//         "message" => "Upload valiid images. Only PNG and JPEG are allowed."
//     );
// } else {
//     // $target = "image/" . basename($_FILES["file-input"]["name"]);
//     $filename = 'upload/'.$_FILES['image']['name'];
//     if ( move_uploaded_file($_FILES['image']['tmp_name'],$filename)) {
//         $response = array(
//             "type" => "success",
//             "message" => "Image uploaded successfully."
//         );
//     } 
// }

// var_dump($extension);
// exit();

// in_array($extension,$allowed_image_extension);


if (! in_array($extension,$allowed_image_extension)) {
    // echo 0; exit();
    echo "<h3>Invalid file</h3>";
}else{
    // echo 1; exit();
    $filename = 'upload/'.rand(0000,9999999).'.'.$extension;

    if(file_exists($filename)){
        echo "This file name already exists";
    }else{
    move_uploaded_file($_FILES['image']['tmp_name'],$filename);
    }
}


?>

<img src = " <?php echo $filename; ?> ">

