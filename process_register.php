<?php
    $url = 'http://localhost:8000/api/account';
//
//    $data = array('username' => $_GET['uname'], 'name' => $_GET['name'], 'phone_number' => $_GET['phone'], 'address' => $_GET['address'],
//        'password' => $_GET['psw'], 'acctype' => 'customer', 'email' => $_GET['email']);
//
//    // use key 'http' even if you send the request to https://...
//    $options = array(
//        'http' => array(
//            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
//            'method'  => 'POST',
//            'content' => http_build_query($data)
//        )
//    );
//    $context  = stream_context_create($options);
//    $result = file_get_contents($url, false, $context);
//    if ($result === FALSE) { /* Handle error */ }
//
//    echo $result;


    $fields = [
        'username' => $_GET['uname'],
        'name' => $_GET['name'],
        'phone_number' => $_GET['phone'],
        'address' => $_GET['address'],
        'password' => $_GET['psw'],
        'acctype' => $_GET['type'],
        'email' => $_GET['email']
    ];

    $fields_string = http_build_query($fields);

    $ch = curl_init();

    curl_setopt($ch,CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_POST, true);
    curl_setopt($ch,CURLOPT_POSTFIELDS, $fields);

    curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    echo $result;
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
