<?php
require 'vendor/autoload.php';
// This is your test secret API key.
\Stripe\Stripe::setApiKey('sk_test_51LgIP5B8Y2zPAcSHKW43kvl7U8wJvugOsPUc04AX2tKXK9xxph3kowwA1rFsJRJGhbMay73wiZy6wKc515dw4m7u00dbMsdcOg');

header('Content-Type: application/json');

$YOUR_DOMAIN = 'http://localhost';

$checkout_session = \Stripe\Checkout\Session::create([
    'line_items' => [[
      # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
      'price' => 'price_1LgJ4WB8Y2zPAcSHB41ImdXP',
      'quantity' => 1,
    ]],
    'mode' => 'payment',
    'success_url' => $YOUR_DOMAIN . '/success.html',
    'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
  ]);


  header("HTTP/1.1 303 see other");
  header("Location: " . $checkout_session->url);