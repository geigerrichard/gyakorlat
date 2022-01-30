<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Advertisements</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="/gyakorlat/public/css/style.css">
    </head>
    <body>
        <!-- HEADER START -->
        <div class="header">
            <h1>Advertisements</h1>
        </div>
        <!-- HEADER END -->
        <!-- BUTTONS START -->
        <div class="buttons">
            <a href="/gyakorlat/pages/">Back to the Homepage</a>
            <a href="/gyakorlat/pages/users">List of Users</a>
        </div>
        <!-- BUTTONS END -->
        <!-- CONTENT START -->
        <div class="content">
            <ul>
                <?php
                    foreach($data['advertisements'] as $advertisement){
                        echo '<li><span class="bolder">Advertisement title:</span> ' . $advertisement->title . ' - by: <span class="bolder lawngreen">' . $advertisement->name . '</span></li>';
                    }
                ?>
            </ul>
        </div>
        <!-- CONTENT END -->
    </body>
</html>

