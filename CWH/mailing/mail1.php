<?php 

$to = "darchita0205@gmail.com";
$subject = "Test mail";
$message = "This is a test mail";
$headers = "From: darchita06@gmail.com";
if(mail($to,$subject,$message,$headers)){
    echo "<h1>Mail sent successfully</h1>";
} else{
    echo "<h1>Mail was not sent</h1>";
}

// if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['sent_email'])){
//     $to = sanitize($_POST['reciever']);
//     $subject = sanitize($_POST['subject']);
//     $message = sanitize($_POST['message']);
//     $headers = "From: ".sanitize($_POST['sender']);
//     if(mail($to,$subject,$message,$headers)){
//         echo "<h1> Mail sent successfully</h1>";
//     } else{
//         echo "<h1>Mail was not sent </h1>";
//     }
// }


// function sanitize($data){
//     return htmlspecialchars($data);
// }
// ?>

<!-- // <form method="post">
//     Reciever: <input type="email" name="reciever"><br><br>
//     Subject: <input type="text" name="subject"><br><br>
//     Message: <input type="text" name="message"><br><br>
//     Sender: <input type="email" name="sender"><br><br>
//     <button type="submit" name="sent_email">Send Email</button>
// </form> -->