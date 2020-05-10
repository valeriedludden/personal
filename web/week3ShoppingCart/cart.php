<?php

include "header.php";

if (count($_SESSION["cart_items"]) > 0) {
    $_SESSION["total"] = 0;
    foreach ($_SESSION["cart_items"] as $i) {
        $_SESSION["total"] += $i["price"];
    }
    ?>
    <body>
    <div class="cartInfo">
        <div class="tableContainer">
            <table style="width:100%">
                <tr>
                    <th>Number of Items</th>
                    <th>Total</th>
                </tr>
                <tr>
                    <td><?php echo count($_SESSION["cart_items"]) ?></td>
                    <td>$<?php echo($_SESSION["total"]) ?>.00</td>
                </tr>
            </table>
        </div>
        <div><a href="checkout.php">
                <button class="tt">Continue to Checkout</button>
            </a></div>

    </div>
    <?php

    foreach ($_SESSION["cart_items"] as $c) {
        ?>

        <div class="card" id="<?php echo $c["id"]; ?>" style="width: 18rem;">
            <img src="<?php echo $c["pic"]; ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $c["name"]; ?></h5>
                <p class="card-text desc"><?php echo $c["description"]; ?></p>
                <p class="card-text price"> $<?php echo $c["price"]; ?></p>
                <form method="POST" action="cart.php">
                <button type="submit" name="<?php echo $c["name"];?>" class="btnAddAction"/>Remove Item</button>
                </form>
            </div>
        </div>

    <?php }
} else {
    ?>

    <div>
        <h2>Ooopps! You have nothing in your cart</h2>
        <a href="browse.php">
            <button>Return to Shopping</button>
        </a>
    </div>
    <?php
}
    if(isset ($_POST["dog1"])){
                unset($_SESSION["cart_items"]["item1"]);
    }
    if(isset ($_POST["dog2"])){
        unset($_SESSION["cart_items"]["item2"]);
    }
    if(isset ($_POST["dog3"])){
        unset($_SESSION["cart_items"]["item3"]);
    }
    if(isset ($_POST["dog4"])){
        unset($_SESSION["cart_items"]["item4"]);
    }
    if(isset ($_POST["dog5"])){
        unset($_SESSION["cart_items"]["item5"]);
    }
    ?>
</body>
</html>
