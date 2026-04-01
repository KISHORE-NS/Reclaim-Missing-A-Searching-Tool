<center>
<h2>Sample Page</h2>
<p>This is a simple sample page.</p>
</center>

/*<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Reclaim Missing</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
.hero{
background:#2c3e50;
color:white;
padding:100px 0;
text-align:center;
}
.feature-card{
padding:30px;
border-radius:10px;
box-shadow:0 4px 10px rgba(0,0,0,0.1);
background:white;
}
</style>

</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">

<a class="navbar-brand" href="index.php">RECLAIM MISSING</a>

<button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="menu">

<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link" href="index.php">Home</a>
</li>

<li class="nav-item">
<a class="nav-link" href="view_lost_items.php">Lost Items</a>
</li>

<li class="nav-item">
<a class="nav-link" href="view_found_items.php">Found Items</a>
</li>

<li class="nav-item">
<a class="btn btn-warning ms-2" href="login.php">Login</a>
</li>

</ul>

</div>
</div>
</nav>

<!-- Hero Section -->
<div class="hero">

<h1>RECLAIM MISSING</h1>

<p>A Smart Searching Tool to Recover Lost Items</p>

<a href="login.php" class="btn btn-primary">Login</a>

<a href="register.php" class="btn btn-success">Register</a>

</div>


<!-- Features -->
<div class="container mt-5">

<div class="row text-center">

<div class="col-md-4">
<div class="feature-card">

<a href="report_lost.php"><h4>Report Lost Item</h4></a>

<p>Users can quickly report their lost belongings.</p>

</div>
</div>


<div class="col-md-4">
<div class="feature-card">

<a href ="report_found.php"><h4>Report Found Item</h4></a>

<p>People can upload items they discovered.</p>

</div>
</div>


<div class="col-md-4">
<div class="feature-card">

<a  href="match_items.php"><h4>Smart Matching</h4></a>

<p>The system suggests matches between lost and found items.</p>

</div>
</div>

</div>

</div>


<!-- Footer -->
<footer class="bg-dark text-white text-center p-3 mt-5">

<p>© 2026 Reclaim Missing | A Searching Tool</p>

</footer>

</body>
</html>


<?php
session_start();
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">

<a class="navbar-brand" href="index.php">RECLAIM MISSING</a>

<button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="menu">

<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link" href="index.php">Home</a>
</li>

<?php if(isset($_SESSION['user_id'])) { ?>

<li class="nav-item">
<a class="nav-link" href="view_lost_items.php">Lost Items</a>
</li>

<li class="nav-item">
<a class="nav-link" href="view_found_items.php">Found Items</a>
</li>

<li class="nav-item">
<a class="nav-link" href="report_lost.php">Report Lost</a>
</li>

<li class="nav-item">
<a class="nav-link" href="report_found.php">Report Found</a>
</li>

<li class="nav-item">
<a class="nav-link" href="match_items.php">Match Items</a>
</li>

<li class="nav-item">
<a class="btn btn-danger ms-2" href="logout.php">Logout</a>
</li>

<?php } else { ?>

<li class="nav-item">
<a class="btn btn-warning ms-2" href="login.php">Login</a>
</li>

<li class="nav-item">
<a class="btn btn-success ms-2" href="register.php">Register</a>
</li>

<?php } ?>

</ul>

</div>
</div>
</nav>*/
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
</head>

<body>

<h2>User Login</h2>

<form action="login_process.php" method="POST">

Email:<br>
<input type="email" name="email" required><br><br>

Password:<br>
<input type="password" name="password" required><br><br>

<button type="submit">Login</button>

</form>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
<title>Register</title>
</head>

<body>

<h2>User Registration</h2>

<form action="register_process.php" method="POST">

Name:<br>
<input type="text" name="name" required><br><br>

Email:<br>
<input type="email" name="email" required><br><br>

Password:<br>
<input type="password" name="password" required><br><br>

<button type="submit">Register</button>

</form>

</body>
</html>
<style>
container{
display:flex;
flex-wrap:wrap;
gap:20px;
padding:20px;
}

.ard{
width:250px;
border:1px solid #ccc;
padding:15px;
border-radius:10px;
box-shadow:0 0 10px rgba(0,0,0,0.1);
}

.ard img{
width:100%;
height:200px;
object-fit:cover;
border-radius:5px;
}
</style>:#f4f6f9