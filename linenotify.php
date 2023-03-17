<?php
    $name = $_POST['name'];
    $message = $_POST['message'];

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://notify-api.line.me/api/notify",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "message=\n\nName: $name\nMessage: $message",
        CURLOPT_HTTPHEADER => array(
            "Authorization: Bearer dnRUFpuEu2FmC2zROQCIp87RA1xRfvILk0WudReciXs",
            "Content-Type: application/x-www-form-urlencoded",
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);
    header("Location: thankyou.html");
?>