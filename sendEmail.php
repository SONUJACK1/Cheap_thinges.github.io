<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $address = $_POST["address"];
    $pincode = $_POST["Pincode"];

    $to = "neha6n@gmail.com";
    $subject = "New Address Entry";
    $message = "Name: $name\nAddress: $address\nPincode: $pincode";

    mail($to, $subject, $message);
}
?>