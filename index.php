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
                        if(file_exists('catalog.xml')){
                            $tracks = simplexml_load_file('catalog.xml');
                            // var_dump($tracks);
                        }
                        else{
                            exit('Failed to open test.xml');
                        }

                        foreach($tracks->children() as $track){
                            $att = $track->attributes();
                            echo "<input class = 'track' type='submit' name='title' value='".$att['title']."'></input>\n";
                        }
                    ?>
                </div>
            
                <select class ="sort" name="sort" id="sort">
                    <option value="1">Default</option>
                    <option value="2">Alphabetical</option>
                </select>
            </form>
        </div>



    </body>
</html>