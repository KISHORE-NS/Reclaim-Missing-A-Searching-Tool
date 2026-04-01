<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Reclaim Missing</title>

<link rel="stylesheet" href="css/style.css">

</head>

<body>
<?php include "navbar.php"; ?>

<!-- HERO SECTION -->
<div class="hero">

<h1>Find Your Lost Items Easily</h1>

<p>Smart system to connect lost and found items</p>

<input type="text" placeholder="Search items...">

<button>Search</button>

</div>


<!-- FEATURES -->
<div class="features">

<div class="card">
<a href="report_lost.php"><h3>Report Lost Item</h3></a>
<p>Quickly report lost belongings.</p>
</div>

<div class="card">
<a href="report_found.php"><h3>Report Found Item</h3></a>
<p>Upload items you discovered.</p>
</div>

<div class="card">
<a href="match_items.php"><h3>Smart Matching</h3></a>
<p>Find matching lost & found items.</p>
</div>

</div>


<!-- FOOTER -->
<footer style="text-align:center;padding:20px;background:#1a1a2e;color:white;">
<p>© 2026 Reclaim Missing | A Searching Tool</p>
</footer>

</body>
</html>
