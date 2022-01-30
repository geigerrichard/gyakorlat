<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Users</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="/gyakorlat/public/css/style.css">
    </head>
    <body>
        <!-- HEADER START -->
        <div class="header">
            <h1>Users</h1>
        </div>
        <!-- HEADER END -->
        <!-- BUTTONS START -->
        <div class="buttons">
            <a href="/gyakorlat/pages/">Back to the Homepage</a>
            <a href="/gyakorlat/pages/advertisements">List of Advertisements</a>
        </div>
        <!-- BUTTONS END -->
        <!-- CONTENT START -->
        <div class="content">
            <ul>
                <?php
                    foreach($data['users'] as $user){
                        echo '<li><span class="bolder">Name: </span><span class="bolder lawngreen">' . $user->name . '</span></li>';
                    }
                ?>
            </ul>
        </div>
        <!-- CONTENT END -->
    </body>
</html>
