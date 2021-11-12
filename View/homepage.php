<?php require 'includes/header.php' ?>
    <!-- this is the view, try to put only simple if's and loops here.
    Anything complex should be calculated in the model -->
    <section class="main">
        <form action="" method="post">
            <label for="customers" hidden></label>
            <select name="customerName" required autofocus>
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

            <label for="products" hidden></label>
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
            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" max="1000" min="1" value="1" required>
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
                    <td>Quantity</td>
                    <td><?php echo $quantity; ?></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Standard price&#47;unit</td>
                    <td><?php echo $productPrice / 100 . " &#128;"; ?></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Price&#47;unit after fixed discount</td>
                    <td><?php echo $priceAfterFixedDiscount . " &#128;"; ?></td>
                    <td><?php echo "- " . array_sum($fixedDiscount) / 100 . " &#128;"; ?></td>
                </tr>
                <tr>
                    <td>Price&#47;unit after variable discount</td>
                    <td><?php echo $priceAfterVarDiscount . " &#128;"; ?></td>
                    <td><?php echo "- " . max($variableDiscount)  . " &#37;"; ?></td>
                </tr>
                <tr class=<?php echo $classHidden ?>>
                    <td>Extra discount applied</td>
                    <td><?php echo $extraDiscount . " &#37;"; ?></td>
                </tr>
                <tr>
                    <td>Total price</td>
                    <td><?php echo $finalPrice . " &#128;"; ?></td>
                </tr>

                </tbody>
            </table>
        <?php } ?>

    </section>
<?php require 'includes/footer.php' ?>