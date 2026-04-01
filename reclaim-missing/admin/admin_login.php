<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>

<link rel="stylesheet" href="../css/login.css"> <!-- ✅ FIXED -->

</head>

<body>

<a href="../index.php" class="back-btn">←</a>

<form class="login-box" action="admin_login_process.php" method="POST">

<h2>Admin Login</h2>

<input type="email" name="email" placeholder="Enter Admin Email" required>

<div class="password-box">
<input type="password" id="password" name="password" placeholder="Enter Password" required>
<span class="toggle" onclick="togglePassword()">👁</span>
</div>

<button type="submit">Login</button>

<p>Only authorized admins allowed</p>

</form>

<script>
function togglePassword(){
    var x = document.getElementById("password");
    x.type = (x.type === "password") ? "text" : "password";
}
</script>

</body>
</html>