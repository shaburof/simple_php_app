<?php
    $bgColor = "navy";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP App</title>
</head>
<style>
    body {
        background-color: <?php echo $bgColor; ?>;
        color: white;
        padding: 25px 25px;
    }

    h1{
        text-align: center;
    }

    img {
        width: 500px;
    }
</style>
<body>
    <h1>Simple PHP Application v10.0</h1>
    <p style="text-align: center;">Jenkins pipeline to AWS Beanstalk</p>
<?php
    $remoteIpAddress = $_SERVER["REMOTE_ADDR"];
    echo "<p>".date('l jS \of F Y h:i:s A')."</p>";
    echo "<p>Remote ip address is: ".$remoteIpAddress."</p>";
?>
<img src="/images/poni.jpg" alt="">
<pre>
    <?php
        var_dump($_SERVER);
    ?>
</pre>
</body>
</html>
