<?php

declare(strict_types=1);

class HomepageController {
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST) {
        //this is just example code, you can remove the line below
        $db = new DataSource();
        $customerLoader = new CustomerLoader($db);
        $productLoader = new ProductLoader($db);

        $customers = $customerLoader->getCustomers();
        $products = $productLoader->getProducts();

        if (isset($POST['submit'])) {
            if (isset($POST['customerName'])) {
                $selectedCustomer = $customers[intval($_POST['customerName']) - 1];
                $customerGroupLoader = new CustomerGroupLoader($db);
                $customerGroups = $customerGroupLoader->getGroupBranch($selectedCustomer->getGroupId());
                $priceCalculator = new PriceCalculator();
                //$result = $priceCalculator->getPrice($selectedCustomer, $product, $customerGroups);
            }
        };


            if (isset($POST['productName'])) {
                $selectedProduct = $products[intval($_POST['productName'])-1];
                $productName = $selectedProduct->getName();
                $productPrice = $selectedProduct->getPrice();
            }
        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.

        //load the view
        require 'View/homepage.php';
    }
}
