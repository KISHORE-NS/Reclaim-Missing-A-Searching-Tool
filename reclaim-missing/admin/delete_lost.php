<?php
session_start();

if(!isset($_SESSION['admin_id'])){
    header("Location: ../admin_login.php");
    exit();
}

include "../database/config.php";

$id = $_GET['id'];

mysqli_query($conn,"DELETE FROM lost_items WHERE id=$id");

header("Location: view_lost_admin.php");
exit();
?>