<?php
session_start();

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Report Found Item</title>
<link rel="stylesheet" href="css/found.css">
</head>

<body class="hi">

<!-- NAVBAR -->
<nav class="found_nav">
    <a href="index.php">Home</a> 
    <a href="view_lost_items.php">Lost Items</a> 
    <a href="view_found_items.php">Found Items</a>
</nav>  

<!-- FORM SECTION -->
<div class="container">

<h2>Report Found Item</h2>

<form class="form-box" action="found_process.php" method="POST" enctype="multipart/form-data">

    <div class="form-group">
        <label>Item Name</label>
        <input type="text" name="item_name" required>
    </div>

    <div class="form-group">
        <label>Description</label>
        <textarea name="description"></textarea>
    </div>

    <div class="form-group">
        <label>Location Found</label>
        <input type="text" name="location">
    </div>

    <div class="form-group">
        <label>Date Found</label>
        <input type="date" name="date_found">
    </div>

    <div class="form-group">
        <label>Upload Image</label>
        <input type="file" name="image">
    </div>

    <button class="sbm" type="submit">Submit</button>

</form>

</div>

</body>
</html>