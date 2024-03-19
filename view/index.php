<?php
require_once '../app/model/framework/bootstrap_require.php';
require_once '../app/model/components/client/navbar_client.php';
require_once '../app/model/components/client/footer_client.php';
require_once '../app/model/components/carousel.php';
require_once '../app/model/components/pagination.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retrogamer</title>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/10298/10298212.png" type="image/png">
    <link href="../app/model/style.css" rel="stylesheet">
    <link href="../app/model/icon_social.css" rel="stylesheet">
</head>

<body>

    <?php echo navbar_client ?>
    <?php echo carousel ?>
    <?php echo pagination ?>
    <?php echo $footer_client ?>
</body>

</html>