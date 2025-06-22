<?php
    $products = array("1234"=>"Digestive Biscuits", "2345"=>"Tea Bags", "3456"=>"1L Milk");
    if (isset($_POST['prodCode'])) {
        $prodCode = $_POST['prodCode'];
        if (array_key_exists($prodCode, $products) ) {
            $productDescription = $products[$prodCode];
            echo $productDescription;
        }
        else{
            echo "No product with this code";
        }
    }
    else {
        echo "No code number received.";
    }
?>