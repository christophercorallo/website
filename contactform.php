<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "chris@christophercorallo.com";
    $txt = "You have received and email from ".$name."\n\n".$mailFrom."\n\n".$message;

    mail($mailTo, $subject, $txt);
    header("Location: contact.html?mailsend");
}
?>