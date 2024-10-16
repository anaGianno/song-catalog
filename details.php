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
        <div class = "header">
            <p class = "header-text">Song Catalog</p>
        </div>
        <div class = "content">
            <?php
                $title = $_POST["title"];

                $tracks = simplexml_load_file("catalog.xml");
                $selectedTrack = $tracks->xpath("//track[@title='".$title."']");
                foreach($selectedTrack as $track){
                    $att = $track->attributes();
                    echo "<div>".$att['title']."</div><br>";
                    echo "<div>".$track->from . "</div><br>";
                    echo "<div>".$track->by. "</div><br>";
                    echo "<div>".$track->release_date. "</div><br>";
                    echo "<div>".$track->length. "</div><br>";
                    echo "<div>".$track->genre. "</div><br>";
                }

            ?>
        </div>


    </body>
</html>