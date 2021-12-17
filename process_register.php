<?php
    $url = 'http://localhost:8000/api/account';

    $fields = [
        'username' => $_GET['uname'],
        'name' => $_GET['name'],
        'phone_number' => $_GET['phone'],
        'address' => $_GET['address'],
        'password' => $_GET['psw'],
        'acctype' => 'customer',
        'email' => $_GET['email']
    ];

    $fields_string = http_build_query($fields);

    $ch = curl_init();

    curl_setopt($ch,CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_POST, true);
    curl_setopt($ch,CURLOPT_POSTFIELDS, $fields);

    curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    if ($result === FALSE) {
        $result = 'Register failed';
    } else {
        $result = 'Register successful';
    }
    header('refresh:3;url=login-page.php');


//    {
//        "username":"Jsmith",
//        "name":"James Smith",
//        "phone_number":"(123)456-7890",
//        "address":"123 Magical Road SE Calgary AB",
//        "password":"coolpassword",
//        "acctype":"customer",
//        "email":"bademail@email.com"
//    }
?>

<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<img src="images/logo.png" alt="square J" id="login-logo" onclick="location.href = 'index.php';">
<div class="login-page">
    <h2 style="margin-left: 15%; font-family: Dubai;"><?php echo $result?>'. Redirecting back to login</h2>
</div>
<body>
</body>
</html>
