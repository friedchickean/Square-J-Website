<html>
<head>
    <title>Square J - Customer Shop</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<?php
?>

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
            <li><a href="#">Orders</a></li>
        </ul>
        <input type="image" src="images/cart.png" />
    </nav>
</div>

<div id="shop-container">
    <h1>Items</h1>
    <div class="item-grid">
        <div class="item1">
            <input type=image src="images/item.png">
            <p>Item 1       $4.99</p>
        </div>
        <div class="item2">
            <input type=image src="images/item.png">
            <p>Item 2       $6.99</p>
        </div>
        <div class="item3">
            <input type=image src="images/item.png">
            <p>Item 3       $14.99</p>
        </div>
        <div class="item4">
            <input type=image src="images/item.png">
            <p>Item 4       $1.99</p>
        </div>
        <div class="item5">
            <input type=image src="images/item.png">
            <p>Item 5       $24.99</p>
        </div>
        <div class="item6">
            <input type=image src="images/item.png">
            <p>Item 5       $17.99</p>
        </div>
    </div>

    <button type="button">Proceed to checkout</button>
    <p id="total">Total:    $39.64</p>
</div>

</body>
</html>