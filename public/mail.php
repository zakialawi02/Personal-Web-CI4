<?php

if (!empty($_POST["sendMail"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $judul = $_POST["judul"];
    $message = $_POST["message"];
    $toEmail =  "hallo@zakialawi.my.id";

    $mailHeaders = "Name: " . $name .
        "\r\n Email: " . $email .
        "\r\n Subject: " . $judul .
        "\r\n Message: " . $message . "\r\n";

    if (mail($toEmail, $name, $mailHeaders)) {
        $terkirim = "Your Message Has Been Send";
    } else {
        $terkirim = "failed";
    }
}
