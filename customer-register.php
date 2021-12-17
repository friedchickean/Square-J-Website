<html>
<head>
    <title>SquareJ | Customer Register</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<div class="login-page">
    <form action="process_register.php">
        <label for="uname"><b>Username</b></label>
            <input type="text" style="margin-right: 5px" placeholder="Username" name="uname" required>
            <label for="uname"><b>Password</b></label>
            <input type="text" style="margin-right: 5px" placeholder="Password" name="psw" required>
            <label for="uname"><b>Phone</b></label>
            <input type="text" style="margin-right: 5px" placeholder="Phone Number" name="phone" required>
            <hr>
            <label for="uname"><b>Name</b></label>
            <input type="text" style="margin-right: 5px" placeholder="Name" name="name">
            <label for="uname"><b>Address</b></label>
            <input type="text" style="margin-right: 5px" placeholder="Address (Optional)" name="address">
            <label for="uname"><b>Email</b></label>
            <input type="text" style="margin-right: 5px" placeholder="Email (Optional)" name="email">

        <button type="submit" style="margin-bottom: 20px">Register</button>
        <!--<button onclick="location.href = 'customer-shop.php';" type="submit">Login</button> -->
    </form>
</div>
<body>
</body>
</html>