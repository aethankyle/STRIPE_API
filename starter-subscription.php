<?php

require "vendor/autoload.php";

$stripe = new \Stripe\StripeClient(
    "sk_test_51LgIP5B8Y2zPAcSHKW43kvl7U8wJvugOsPUc04AX2tKXK9xxph3kowwA1rFsJRJGhbMay73wiZy6wKc515dw4m7u00dbMsdcOg"
);
$product = $stripe->products->create([
    'name' => 'Starter Subscription',
    'description' => '$12/Month subscription',
  ]);
  echo "Success! Here is your starter subscription product id: " . $product->id . "\n";
  
  $price = $stripe->prices->create([
    'unit_amount' => 1200,
    'currency' => 'usd',
    'recurring' => ['interval' => 'month'],
    'product' => $product['id'],
  ]);
  echo "Success! Here is your premium subscription price id: " . $price->id . "\n";
  
  ?>