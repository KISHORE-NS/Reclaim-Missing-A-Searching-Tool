<?php
include "database/config.php";

if(isset($_GET['search'])){
    
$search = $_GET['search'];

$sql = "SELECT * FROM lost_items 
WHERE item_name LIKE '%$search%' 
OR description LIKE '%$search%' 
ORDER BY id DESC";

}else{

$sql = "SELECT * FROM lost_items ORDER BY id DESC";

}
$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>Lost Items</title>
<link rel="stylesheet" href="css/view_lost.css">
</head>

<body>

<!-- NAVBAR -->
<nav class="nav">
    <div class="logo">RECLAIM MISSING</div>

    <div class="links">
        <a href="index.php">Home</a>
        <a href="view_found_items.php">Found Items</a>
    </div>
</nav>

<!-- SEARCH -->
<div class="search-box">
<form method="GET">
<input type="text" name="search" placeholder="Search lost items...">
<button type="submit">Search</button>
</form>
</div>

<h2 class="title">Lost Items</h2>

<!-- ITEMS -->
<div class="container">

<?php
while($row = mysqli_fetch_assoc($result)){
?>

<div class="card">

<img src="uploads/<?php echo $row['image']; ?>">

<h3><?php echo $row['item_name']; ?></h3>

<p><b>Location:</b> <?php echo $row['location']; ?></p>

<p><b>Date Lost:</b> <?php echo $row['date_lost']; ?></p>

<p><?php echo $row['description']; ?></p>

</div>

<?php
}
?>

</div>

</body>
</html>