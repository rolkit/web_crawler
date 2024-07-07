<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle;?></title>
    <style>
        body{
            font-family:Verdana, Geneva, sans-serif;
        }
    </style>
</head>
<body>
    <h1><?php echo $pageTitle;?></h1>
    <table cellpadding="1" cellspacing="1" bgcolor="#999999">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Date</th>
            <th>Url</th>
            <th>Image</th>
        </tr>
        <?php
            $i=1;
            foreach($record as $r){
        ?>
        <tr bgcolor="#FFFFFF">
            <td><?php echo $i++;?></td>
            <td><?php echo $r->title;?></td>
            <td><?php echo $r->date;?></td>
            <td><?php echo $r->url;?></td>
            <td><?php echo $r->image;?></td>
        </tr>
        <?php
            }
        ?>
    </table><br />
    <a href="<?php echo base_url()?>craw">"main menu"</a>
</body>
</html>