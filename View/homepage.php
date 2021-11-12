<?php require 'includes/header.php' ?>
<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->
<section class="main">
    <h1 class="title">Price calculator</h1>
    <form action="" method="post">
        <label for="customers">Choose a customer</label>
        <select name="customerName">
        <option value="Select">Select</option>
            <?php
            if (isset($customers)) {
                foreach ($customers as $key => $v) {
                    echo "<option value='{$v->getId()}'> {$v->getFirstName()}  {$v->getLastName()} </option>";
                }
            }
            ?>
        </select>
        <br><br>

        <label for="products">Choose a product</label>

        <select name="productName">
            <option value="Select">Select</option>}
            <?php
            if (isset($products)) {
                foreach ($products as $key => $z) {
                    echo "<option value='{$z->getId()}'> {$z->getName()} </option>";
                }
            }
            ?>
        </select>
        <br><br>
        <input type="submit" value="Submit" name="submit">
    </form>
    <container>
        <p>You have chosen:</p>
        <?php if (isset($_POST['submit'])) { ?>
        <div>
            <span class="customerName"><?php echo $customerName;?></span>
            <br>
            <span class="productName"><?php echo $productName; ?></span>
            <br>
            <span class="productPrice"><?php echo $productPrice/100 . "€"; ?></span>
            <br>
        </div>
    </container>
        <p>Price after discount:</p>
        <span><?php echo round($priceCalculator/100, 2) . "€";?></span>

<?php }?>
<br>
    <?php
    if (isset($_POST['submit'])) {
        // var_dump($selectedCustomer);
        // var_dump($customerGroups);
        // var_dump($productName);
//        var_dump($fixedDiscount);
//        var_dump($variableDiscount);
        var_dump($_SESSION);
    }

    ?>
</section>
<?php require 'includes/footer.php' ?>
