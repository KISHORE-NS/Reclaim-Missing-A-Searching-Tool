<?php
session_start();

if(!isset($_SESSION['admin_id'])){
    header("Location: admin_login.php");
    exit();
}

include("../database/config.php");

$users = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM users"));
$lost = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM lost_items"));
$found = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM found_items"));
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Dashboard</title>
<link rel="stylesheet" href="../css/admin.css">
</head>

<body>

<!-- NAVBAR -->
<div class="admin-nav">
    <h2>RECLAIM ADMIN</h2>
    <a href="../logout.php">Logout</a>
</div>

<!-- CONTENT -->
<div class="dashboard">

<h1>Dashboard Overview</h1>

<div class="cards">

<div class="card">
<h3>Total Users</h3>
<p><?php echo $users; ?></p>
</div>

<div class="card">
<h3>Lost Items</h3>
<p><?php echo $lost; ?></p>
</div>

<div class="card">
<h3>Found Items</h3>
<p><?php echo $found; ?></p>
</div>

</div>

<!-- ACTIONS -->
<div class="actions">
<a href="view_lost_admin.php">Manage Lost Items</a>
<a href="view_found_admin.php">Manage Found Items</a>
</div>

</div>

</body>
</html>

