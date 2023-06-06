<?php

$con = mysqli_connect("localhost", "root", "", "contact_form") or die(mysqli_error());

if(isset($_POST['submit'])) {
    $name = $con->real_escape_string($_POST['name']);
    $email = $con->real_escape_string($_POST['email']);
    $phone = $con->real_escape_string($_POST['phone']);
    $comment = $con->real_escape_string($_POST['comment']);

    $sql = "INSERT INTO contact_us (name, email, phone, comment) VALUES ('" . $name . "','" . $email . "','" . $phone . "','" . $comment . "')";

    if (!$result = $con->query($sql)) {
        die('Error occured [' . $con->error . ']');
    } else {
        echo "Thank you! We will get in touch with you soon.";
    }
}
