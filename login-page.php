<html>
<head>
    <title>Square J - Customer Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
    <img src="images/logo.png" alt="square J" id="login-logo" onclick="location.href = 'index.php';">
    <div class="login-page">
        <form action="customer-shop.php">
            <label for="uname"><b>Username</b></label>
            <input type="text" style="margin-right: 5px" placeholder="Enter Username" name="uname" required>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
            <button type="submit">Login</button>
            <!--<button onclick="location.href = 'customer-shop.php';" type="submit">Login</button> -->
        </form>
        <p>or <a href="customer-register.php">Register</a></p>
    </div>
<body>
</body>
</html>