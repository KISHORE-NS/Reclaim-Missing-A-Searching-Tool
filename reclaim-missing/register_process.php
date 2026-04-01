<?php

include "database/config.php";

$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO users (name,email,password)
VALUES ('$name','$email','$password')";

if(mysqli_query($conn,$sql)){
    echo "<script>
            alert('Registration Successful!');
            window.location.href='index.php';
          </script>";
}else{
    echo "<script>
        alert('Something went wrong. Try again!');
        window.history.back();
      </script>";
}

?>