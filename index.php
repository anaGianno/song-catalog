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
            <form method='POST' name='form1'  action='details.php' autocomplete='off'>
                <div class = "grid-input">
                    <?php
                        // get catalog.xml file
                        if(file_exists('catalog.xml')){
                            $tracks = simplexml_load_file('catalog.xml');
                        }
                        else{
                            exit('Failed to open test.xml');
                        }
                        $i = 0;
                        // display all tracks
                        foreach($tracks->children() as $track){
                            $att = $track->attributes();
                            
                            echo "<input class = 'track' type='submit' id= '".$i."' name='title' value='".$att['title']."'></input>\n";
                            $i++;
                        }
                    ?>
                </div>
            </form>
        </div>
        <!-- Sorting buttons -->
        <button class = 'custom-button main' onclick = "sortAlphabetical()">Sort by Alphabetical</button> 
        <button class = 'custom-button main' onclick = "sortDefault()">Sort by Artist (default)</button> 
        <script src = "script.js"></script>
    </body>
</html>