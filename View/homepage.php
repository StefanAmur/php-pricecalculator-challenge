<?php require 'includes/header.php' ?>
<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->
<section class="main">
    <h1 class="title">Hello from homepage</h1>

    <p>Put your content here.</p>

    <form action="" method="post">
        <label for="customers">Choose a customer</label>
        <select name="customerName">

            <?php
            foreach ($customers as $key => $v) {
                echo "<option value='{$v->getId()}'> {$v->getFirstName()}  {$v->getLastName()} </option>";
            }
            ?>
        </select>
        <br><br>

        <input type="submit" value="Submit" name="submit">


    </form>

    <?php if (isset($_POST['submit'])) {
        if (isset($_POST['customerName'])) {
            var_dump($_POST['customerName']);
        }
    }; ?>




</section>
<?php require 'includes/footer.php' ?>