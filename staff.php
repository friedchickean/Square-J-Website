<html>
<head>
    <title>Square J - Staff</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<?php
?>

<div class="header">
    <nav>
        <img src="images/logo.png" alt="square J">
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
    <h1><b>Hello Alex!</b></h1>
    <p class="pos">Position: Manager</p>
    <hr>

    <h2>Assigned Orders</h2>
    <ul>
        <li>
            <h3>Order #4532</h3>
            <p>Customer Name: John Smith | Phone Number: (123)-456-7890 | Email: jsmith@email.com | Type: In-store pickup | Date: 11/07/2021 12:05:01</p>
            <button type="button" class="customer-order-button" style="background-color: gray">View Items</button>
            <button type="button" class="customer-order-button" style="background-color: green">Complete Order</button>
            <button type="button" class="customer-order-button" style="background-color: brown">Cancel Order</button>
            <hr width="55%">
        </li>
        <li>
            <h3>Order #8743</h3>
            <p>Customer Name: Sarah Doe | Phone Number: (123)-456-7890 | Email: sdoe@email.com | Type: Delivery | Date: 11/07/2021 12:00:03</p>
            <button type="button" style="background-color: gray">View Items</button>
            <button type="button" style="background-color: green">Complete Order</button>
            <button type="button" style="background-color: brown">Cancel Order</button>
            <hr width="55%">
        </li>
    </ul>
    <hr>

    <h2>Stock Orders</h2>
    <ul>
        <li>
            <h3>Item #12345678</h3>
            <p>Name: Red bull (12 pack) | Quantity: 50</p>
            <button type="button" class="customer-order-button" style="background-color: gray">View Details</button>
            <button type="button" class="customer-order-button" style="background-color: brown">Cancel Order</button>
            <hr width="55%">
        </li>
        <li>
            <button type="button" style="background-color: green; float: right; margin: 2% 50%">+ New Order Request</button>
        </li>
    </ul>
    <hr>

</div>

</body>
</html>