<?php
session_start();

if(!isset($_SESSION['admin_id'])){
    header("Location: ../admin_login.php");
    exit();
}

include "../database/config.php";

$result = mysqli_query($conn,"SELECT * FROM lost_items ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
<title>Manage Lost Items</title>
<link rel="stylesheet" href="../css/admin.css">
</head>

<body>

<h2>Lost Items (Admin)</h2>

<div class="container">

<?php while($row = mysqli_fetch_assoc($result)){ ?>

<div class="card">

<img src="../uploads/<?php echo $row['image']; ?>">

<h3><?php echo $row['item_name']; ?></h3>

<p><?php echo $row['location']; ?></p>

<a href="delete_lost.php?id=<?php echo $row['id']; ?>" class="delete">Delete</a>

</div>

<?php } ?>

</div>

</body>
</html>