<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="<?php echo constant("URL_BASE");?>assets/img/favicon.ico">
    <link  rel="stylesheet" href="<?php echo constant("URL_BASE");?>public/css/normalize.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    
</body>
</html>

<?php 
    require_once 'libs/database.php';
    require_once 'libs/controller.php';
    require_once 'libs/views.php';
    require_once 'libs/model.php';
    require_once 'libs/app.php';

    require_once 'config/config.php';
    $App = new App;
   