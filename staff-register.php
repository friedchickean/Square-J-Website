<html>
<head>
    <title>SquareJ | Customer Register</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<div class="login-page" style="margin-top: 150px;">
    <form action="process_register_staff.php">
        <label for="uname"><b>Username</b></label>
        <input type="text" style="margin-right: 5px" placeholder="Username" name="uname" required>
        <label for="uname"><b>Password</b></label>
        <input type="text" style="margin-right: 5px" placeholder="Password" name="psw" required>
        <label for="uname"><b>Employee ID</b></label>
        <input type="text" style="margin-right: 5px" placeholder="Employee ID" name="employee_id" required>
        <label for="uname"><b>SIN</b></label>
        <input type="text" style="margin-right: 5px" placeholder="SIN" name="sin" required>
        <hr>
        <label for="uname"><b>Name</b></label>
        <input type="text" style="margin-right: 5px" placeholder="Name" name="name">
        <label for="uname"><b>Address</b></label>
        <input type="text" style="margin-right: 5px" placeholder="Address (Optional)" name="address">
        <label for="uname"><b>Email</b></label>
        <input type="text" style="margin-right: 5px" placeholder="Email (Optional)" name="email">
        <label for="uname"><b>Phone</b></label>
        <input type="text" style="margin-right: 5px" placeholder="phone" name="phone" required>

        <button type="submit" style="margin-bottom: 20px">Register</button>
        <!--<button onclick="location.href = 'customer-shop.php';" type="submit">Login</button> -->
    </form>
</div>
<body>
</body>
</html>