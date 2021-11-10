<?php require 'includes/header.php' ?>
<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->
<section class="main">
    <h1 class="title">Hello from homepage</h1>
    <form action="" method="post">
        <label for="customers">Choose a customer</label>
        <select name="customerName" required>
            <option value="" disabled selected hidden>Select a customer</option>
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
        <select name="productName" required>
            <option value="" disabled selected hidden>Select a product</option>
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

    <?php if (isset($_POST['submit'])) { ?>
        <table>
            <tbody>
                <tr>
                    <td>Customer name</td>
                    <td><?php echo $customerName; ?></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Product</td>
                    <td><?php echo $productName; ?></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Standard price</td>
                    <td><?php echo $productPrice / 100 . " &#128;"; ?></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Price after fixed discount</td>
                    <td><?php echo $productPriceAfterFixedDiscount . " &#128;"; ?></td>
                    <td><?php echo "- " . array_sum($fixedDiscount) / 100 . " &#128;"; ?></td>
                </tr>
                <tr>
                    <td>Final price (after var discount)</td>
                    <td><?php echo $finalPrice . " " . "&#128;"; ?></td>
                    <td><?php echo "- " . max($variableDiscount) . " &#37;"; ?></td>
                </tr>
            </tbody>
        </table>
    <?php } ?>

</section>
<?php require 'includes/footer.php' ?>