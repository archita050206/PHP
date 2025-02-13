<?php
$email="user@email.com<script>alert('Hacked!');</script>";
$sanitized_mail=filter_var($email, FILTER_SANITIZE_EMAIL);//inactivates the script
echo $sanitized_mail;
?>