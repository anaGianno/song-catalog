<!DOCTYPE html>
<html>
    <head>
        <title>song-catalog</title>

        <!-- import font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href = "style.css">
    </head>
    <body>
        <div class = "header"></div>
        <div class = "content">
            <?php
                $title = $_POST["title"];
                
                echo "<p>".$title."</p>";
                echo "<p>test</p>";
            ?>
        </div>


    </body>
</html>