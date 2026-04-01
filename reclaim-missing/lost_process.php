<?php
session_start();

include "database/config.php";

$item_name = $_POST['item_name'];
$description = $_POST['description'];
$location = $_POST['location'];
$date_lost = $_POST['date_lost'];
$user_id = $_SESSION['user_id'];

/* Image Upload */

$image_name = $_FILES['image']['name'];
$temp_name = $_FILES['image']['tmp_name'];

$upload_folder = "uploads/" . $image_name;

move_uploaded_file($temp_name, $upload_folder);

/* Insert into Database */

$sql = "INSERT INTO lost_items (item_name,description,location,date_lost,image,user_id)
VALUES ('$item_name','$description','$location','$date_lost','$image_name','$user_id')";

if(mysqli_query($conn,$sql)){
    echo "<script>
            alert('LOST ITEM REPORTED SUCCESSFULLY!');
            window.location.href='index.php';
          </script>";
}else{
    echo "<script>
        alert('Something went wrong!');
        window.history.back();
      </script>";
}

?>