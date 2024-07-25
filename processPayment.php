<?php
session_start();


// PayPal configuration for live environment
$paypal_url = 'https://www.paypal.com/cgi-bin/webscr'; // Live URL
$paypal_id = 'tshegokgomo31@gmail.com'; // Your live PayPal business email

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["payment_method"]) && $_POST["payment_method"] == "paypal") {
    $total = 0;
    $items = '';
    foreach($_SESSION["cart"] as $item) {
        $total += $item["price"] * $item["quantity"];
        $items .= $item["name"] . ', ';
    }
    $items = rtrim($items, ', ');

    $return_url = 'https://lukfancynxtdrinkpliz.000webhostapp.com/success.php'; // Update with your return URL
    $cancel_url = 'https://lukfancynxtdrinkpliz.000webhostapp.com/cancel.php'; // Update with your cancel URL
    $notify_url = 'https://lukfancynxtdrinkpliz.000webhostapp.com/ipn.php'; // Update with your IPN URL

    echo '<form action="'.$paypal_url.'" method="post" id="paypal_form">
        <input type="hidden" name="business" value="'.$paypal_id.'">
        <input type="hidden" name="cmd" value="_xclick">
        <input type="hidden" name="item_name" value="'.$items.'">
        <input type="hidden" name="amount" value="'.$total.'">
        <input type="hidden" name="currency_code" value="USD">
        <input type="hidden" name="return" value="'.$return_url.'">
        <input type="hidden" name="cancel_return" value="'.$cancel_url.'">
        <input type="hidden" name="notify_url" value="'.$notify_url.'">
    </form>
    <script>
        document.getElementById("paypal_form").submit();
    </script>';
}
?>
