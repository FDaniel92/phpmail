<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Köszönjük a válaszát!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        h1 {
            color: #021849;
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            font-size: 60px;
        }
        img {
            text-align: center;
            margin: 0 auto;
            position: relative;
            left: 50%;
            transform: translateX(-50%);
        }
    </style>
</head>
<body>

    <h1>Köszönjük a válaszát!</h1>
    <img src="abbvie.jpg" alt="abbvie logo" />

    <?php
        $actual_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $to = 'fonyo.daniel@jacsomedia.hu';
        $headers = 'Content-Type: text/plain; charset=utf-8' . "\r\n";
        $subject =  'Validációs email';
        $validation_message = $_GET['email'] . "\r\n" . 'jóváhagyta';
        $unvalid_message = $_GET['email'] . "\r\n" . 'nem hagyta jóvá';
        
        if (strpos($actual_url,'approve=1') !== false) {
            mail($to,$subject,$validation_message,$headers);
        } else {
            mail($to,$subject,$unvalid_message,$headers);
        }
    ?>

</body>
</html>