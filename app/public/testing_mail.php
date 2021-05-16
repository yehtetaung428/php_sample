<?php
$to = "yehtetaungjkr428@gmial.com";
$subject = "会いさす";
$message = "こんばんは";
$from = "yehtetaung0515@gmail.com";

// Sending email
if(mail($to, $subject, $message)){
    echo 'your mail has been sent successfully.';
}else{
    echo 'Unable to send email. Please try againg';
}
?>