<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle?></title>
    <style>
        body{
            font-family:Verdana, Geneva, sans-serif;
        }
    </style>
</head>
<body>
    <h1><?php echo $pageTitle;?></h1>
    <h3><a href="<?php echo base_url()?>craw/get_content"></a> | <a href="<?php echo base_url()?>craw/display">VIEW RESULT</a></h3>
</body>
</html>