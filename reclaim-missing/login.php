
<!DOCTYPE html>
<html>
<head>
<title>Login</title>

<link rel="stylesheet" href="css/login.css">

</head>

<body>
<a href="index.php" class="back-btn">← Back </a>

<form class="login-box" action="login_process.php" method="POST">

<h2>Login</h2>

<input type="email" name="email" placeholder="Enter Email" required>

<!-- Password Field with Eye Icon -->
<div class="password-box">

<input type="password" id="password" name="password" placeholder="Enter Password" required>

<span class="toggle" onclick="togglePassword()">👁</span>

</div>

<button type="submit">Login</button>

<p>Don't have an account? <a href="register.php">Register</a></p>

</form>

<!-- JavaScript -->
<script>
function togglePassword(){
    var pass = document.getElementById("password");

    if(pass.type === "password"){
        pass.type = "text";
    } else {
        pass.type = "password";
    }
}
</script>

</body>
</html>