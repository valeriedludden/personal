<?php

include "header.php";

$cart = [];
$item1 = array("id" => "item1", "name" => "dog1", "price" => 35, "quantity" => 0, "pic" => "dog.jpg", "description" => "This is 1 really cool");
$item2 = array("id" => "item2", "name" => "dog2", "price" => 40, "quantity" => 0, "pic" => "dog.jpg", "description" => "This is 2 really cool");
$item3 = array("id" => "item3", "name" => "dog3", "price" => 45, "quantity" => 0, "pic" => "dog.jpg", "description" => "This is 3 really cool");
$item4 = array("id" => "item4", "name" => "dog4", "price" => 50, "quantity" => 0, "pic" => "dog.jpg", "description" => "This is 4 really cool");
$item5 = array("id" => "item5", "name" => "dog5", "price" => 55, "quantity" => 0, "pic" => "dog.jpg", "description" => "This is 5 really cool");

$all_items = array($item1, $item2, $item3, $item4, $item5);
if(!isset ($_SESSION["cart_items"])){
    $_SESSION["cart_items"] = [];
}

?>

<body>
<div class="itemContainer">

    <div></div>
    <?php
    foreach ($all_items as $item) {
        ?>
        <form method="POST" action="browse.php">
                   <div class="card" id="<?php echo $item["id"]; ?>" style="width: 18rem;">
                    <img src="<?php echo $item["pic"]; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $item["name"]; ?></h5>
                        <p class="card-text desc"><?php echo $item["description"]; ?></p>
                        <p class="card-text price"> $<?php echo $item["price"]; ?></p>
<!--                        <button type="submit" name="--><?php //$item["id"]; ?><!--" class="btnAddAction" />Add to Cart </button>-->
                        <button type="submit" name="<?php echo $item["id"];?>" class="btnAddAction" value="<?php echo $item;?>"/>Add to Cart </button>
                    </div>
                </div>
           </form>

   <?php }
    if (isset($_POST["destroy"])) {
        $_SESSION["destroy"] = $_POST["destroy"];
        session_unset();
        session_destroy();
        session_start();
    } 
    ?>
    <?php
    if(isset ($_POST["item1"])){
        echo "item 1";
        $_SESSION["cart_items"]['item1'] = $item1;
    }
    if($_POST["item2"]){
        $_SESSION["cart_items"]['item2'] = $item2;
    }
    if($_POST["item3"]){
        $_SESSION["cart_items"]['item3'] = $item3;
    }
    if($_POST["item4"]){
        $_SESSION["cart_items"]['item4'] = $item4;
    }
    if($_POST["item5"]){
        $_SESSION["cart_items"]['item5'] = $item5;
    }
    ?>
</div>
<form method="POST" action="">
    <button type="submit" name="destroy"  class="btnAddAction">Empty Cart</button>
</form>

</body>
</html>
