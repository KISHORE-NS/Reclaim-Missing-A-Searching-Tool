<?php
session_start();

include "database/config.php";

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) == 1){

    $user = mysqli_fetch_assoc($result);

    if(password_verify($password,$user['password'])){

        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['name'];

        header("Location: index.php");
        exit();

    }else{
        echo "<script>
        alert('Incorrect Password. Try again!');
        window.history.back();
      </script>";
    }

}else{
    echo "<script>
        alert('User Not Found !');
        window.history.back();
      </script>";
}
?>