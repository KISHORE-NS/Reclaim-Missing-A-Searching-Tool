<!DOCTYPE html>
<html>
<head>
<title>Register</title>

<link rel="stylesheet" href="css/register.css">

</head>

<body>
<a href="index.php" class="back-btn">← Back</a>
<form class="register-box" action="register_process.php" method="POST">

<h2>Register</h2>

<input type="text" name="name" placeholder="Enter Name" required>

<input type="email" name="email" placeholder="Enter Email" required>

<div class="password-box">

<input type="password" id="password" name="password" placeholder="Enter Password" required>

<span onclick="togglePassword()" class="toggle">👁</span>

</div>

<button type="submit">Register</button>

<p>Already have an account? <a href="login.php">Login</a></p>

</form>

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