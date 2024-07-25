<?php

require __DIR__ . "/vendor/autoload.php";

$stripe_secret_key= "sk_test_51PQswdRqb4ZWWMV1KviXHTbI65LLQMngPdhY6alRnuIHlX46OW4pWhN6PYXRWsKa3yIs7xzqqn698Q01ZTFJz0yI00xBZ03VgO";

\Stripe\Stripe::setApiKey($stripe_secret_key);

$checkout_session = \Stripe\Checkout\Session::create([
    "mode" => "payment",
    "success_url" => "http//localhost/success.php",
    "line_items" =>[
        [
            "quantity" => 1,
            "price_data" => [
                "currency" => "usd",
                "unit_amount" => 2000,
                "product_data"=> [
                    "name" => "T-shirt"
                ]
            ]
        ]
    ]

]);

http_response_code(303);
header("Location: " . $checkout_session -> url);
