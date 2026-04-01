<?php
session_start();

if(!isset($_SESSION['user_id'])){
header("Location: login.php");
exit();
}

include "database/config.php";

/* Match lost and found items */

$sql = "
SELECT 
lost_items.item_name AS lost_name,
lost_items.image AS lost_image,
lost_items.location AS lost_location,
found_items.item_name AS found_name,
found_items.image AS found_image,
found_items.location AS found_location

FROM lost_items

JOIN found_items 
ON lost_items.item_name LIKE CONCAT('%',found_items.item_name,'%')
OR found_items.item_name LIKE CONCAT('%',lost_items.item_name,'%')
";

$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>Possible Matches</title>
<link rel="stylesheet" href="css/match.css">
</head>

<body>

<!-- NAVBAR -->
<nav class="nav">
    <div class="logo">RECLAIM MISSING</div>

    <div class="links">
        <a href="index.php">Home</a>
        <a href="view_lost_items.php">Lost</a>
        <a href="view_found_items.php">Found</a>
    </div>
</nav>

<h2 class="title">Possible Lost & Found Matches</h2>

<div class="container">

<?php while($row = mysqli_fetch_assoc($result)){ ?>

<div class="card">

<div class="item lost">
    <h3>Lost Item</h3>
    <img src="uploads/<?php echo $row['lost_image']; ?>">
    <p><b>Name:</b> <?php echo $row['lost_name']; ?></p>
    <p><b>Location:</b> <?php echo $row['lost_location']; ?></p>
</div>

<div class="item found">
    <h3>Found Item</h3>
    <img src="uploads/<?php echo $row['found_image']; ?>">
    <p><b>Name:</b> <?php echo $row['found_name']; ?></p>
    <p><b>Location:</b> <?php echo $row['found_location']; ?></p>
</div>

<div class="match">⚠ Possible Match Found</div>

</div>

<?php } ?>

</div>

</body>
</html>