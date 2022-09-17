<?php
require "vendor/autoload.php";
$stripe = new \Stripe\StripeClient(
    'sk_test_51LgIP5B8Y2zPAcSHKW43kvl7U8wJvugOsPUc04AX2tKXK9xxph3kowwA1rFsJRJGhbMay73wiZy6wKc515dw4m7u00dbMsdcOg'
  );
  $result = $stripe->products->delete(
    'prod_MP8eJD8G1nvToq',
    []
  );
  var_dump($result);