<?php 

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];

    $mailTo = "mail.example.com";
    $headers = "From: ".$email;
    $txt = "You have received an e-mail from ".$name.".\n\n";

    mail($mailTo, $txt, $headers );
    header("Location: index.html?mailsend");
}
