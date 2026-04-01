<?php
if(session_status() == PHP_SESSION_NONE){
    session_start();
}
?>

<nav>

<h2>RECLAIM MISSING</h2>

<ul>


<?php if(isset($_SESSION['user_id'])) { ?>

<li><a href="view_lost_items.php">Lost Items</a></li>

<li><a href="view_found_items.php">Found Items</a></li>

<li><a href="logout.php" class="logout-btn">Logout</a></li>

<?php } else { ?>

<li><a href="login.php" class="login-btn">Login</a></li>

<li><a href="register.php" class="register-btn">Register</a></li>

<?php } ?>

</ul>

</nav>