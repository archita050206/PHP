<?php
$email="user@email.com<script>alert('Hacked!');</script>";
$number="100abc<script>alert('Hacked!');</script>";
$sanitized_email=filter_var($email, FILTER_SANITIZE_EMAIL);//inactivates the script
$sanitized_number=filter_var($number, FILTER_SANITIZE_NUMBER_INT);
echo $sanitized_email."\n";
echo $sanitized_number."\n";
?>