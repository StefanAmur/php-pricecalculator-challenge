<?php require 'includes/header.php' ?>
<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->
<section class="main">
    <h1 class="title">Hello from homepage</h1>



    <form action="" method="post">
        <label for="customers">Choose a customer</label>
        <select name="customerName">
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
    <p>You have chosen:</p>
    <br><br>
    <span class="customerName"></span>
    <br><br>
    <span class="productName"><?php if(isset($_POST['submit'])) {echo $productName;}?></span>
    <br>
    <span class="productPrice"><?php if(isset($_POST['submit'])) {echo $productPrice;}?></span>

    <?php
    if (isset($_POST['submit'])) {
<<<<<<< Updated upstream
//        var_dump($selectedCustomer);
//        var_dump($customerGroups);
//          var_dump($productName);
=======
        var_dump($selectedCustomer);
        var_dump($fixedDiscount);
        var_dump(array_sum($fixedDiscount));
        var_dump($variableDiscount);
        var_dump(max($variableDiscount));
        var_dump($customerGroups);

        // get private value for fixed discount on first element of array
        var_dump($customerGroups['0']->getFixedDiscount());
>>>>>>> Stashed changes
    }

    ?>
</section>
<?php require 'includes/footer.php' ?>