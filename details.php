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
        <div class = "content detail">
            <?php
                $title = $_POST["title"];

                $tracks = simplexml_load_file("catalog.xml");
                $selectedTrack = $tracks->xpath("//track[@title='".$title."']");
                foreach($selectedTrack as $track){
                    $att = $track->attributes();
                    echo "<div class = 'grid-track'>
                            <div class = 'image-container'>
                               <img src = ".$track->image." class = 'image-track'>
                            </div>
                            <div class = 'details-container'>
                                <div class = 'grid-details'>
                                    <div class ='detail-container'>
                                        <label class = 'label-track'>Title</label>
                                        <div class = 'track-field'>".$att['title']."</div><br>
                                    </div>
                                    <div class ='detail-container'>
                                        <label class = 'label-track'>From</label>
                                        <div class = 'track-field'>".$track->from . "</div><br>
                                    </div>
                                    <div class ='detail-container'>
                                        <label class = 'label-track'>By</label>
                                        <div class = 'track-field'>".$track->by. "</div><br>
                                    </div>
                                    <div class ='detail-container'>
                                        <label class = 'label-track'>Release Date</label>
                                        <div class = 'track-field'>".$track->release_date. "</div><br>
                                    </div>
                                    <div class ='detail-container'>
                                        <label class = 'label-track'>Length</label>
                                        <div class = 'track-field'>".$track->length. "</div><br>
                                    </div>
                                    <div class ='detail-container'>
                                        <label class = 'label-track'>Genre</label>
                                        <div class = 'track-field'>".$track->genre. "</div><br>
                                    </div>
                                </div>
                            </div>
                          </div>";
                }

            ?>
        </div>
        <form action='index.php'>
            <input class ='custom-button back' type='submit' value='Back'></input>
        </form>


    </body>
</html>