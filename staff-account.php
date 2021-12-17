<?php
    $uname = $_GET["uname"];

    $acc_url = 'http://localhost:8000/api/account/' . $uname;
    $acc_json = file_get_contents($acc_url);
    $acc_list = json_decode($acc_json, true);

    $empl_id = $acc_list['employee_id'];

    $empl_url = 'http://localhost:8000/api/employee/' . $empl_id;
    $empl_json = file_get_contents($empl_url);
    $empl_list = json_decode($empl_json, true);

?>

<html>
<head>
    <title>Square J - Staff</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>


<div class="header">
    <nav>
        <img src="images/logo.png" alt="square J" onclick="location.href = 'index.php';">
        <ul>
            <li><a href="#">Account</a>
                <ul>
                    <li><a href="#">Settings</a></li>
                    <li><a href="#">Logout</a></li>
                </ul>
            </li>
            <li><a href="#">Assigned Orders</a></li>
            <li><a href="#">Inventory</a></li>
        </ul>
    </nav>
</div>

<div id="staff-container">
    <h1><b>Account Information</b></h1>
    <hr>
    <h2>Personal Information</h2>
    <ul>
        <li>
            <h3>Name</h3>
            <p style="font-size: 16px"><?php echo $empl_list['name']?></p>
        </li>
        <li>
            <h3>SIN</h3>
            <p style="font-size: 16px"><?php echo $empl_list['sin']?></p>
        </li>
        <li>
            <h3>Address</h3>
            <p style="font-size: 16px"><?php echo $empl_list['address']?></p>
        </li>
    </ul>
    <hr>

    <h2>Account Details</h2>
    <ul>
        <li>
            <h3>Username</h3>
            <p style="font-size: 16px"><?php echo $uname?></p>
        </li>
        <li>
            <h3>Email</h3>
            <p style="font-size: 16px"><?php echo $acc_list['email']?></p>
        </li>
        <li>
            <h3>Password</h3>
            <p style="font-size: 16px"><?php echo $acc_list['password']?></p>
        </li>
    </ul>

</div>

</body>
</html>