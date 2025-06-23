<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planet PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <script>
        function showPicture(picLocation) {
            var pictureWindow = window.open("","","");
            imgTag = '<img width="100%" src="' + picLocation + '">';
            pictureWindow.document.write(imgTag);
        }
    </script>

</head>
<body>
    <h1>Gallery</h1>
    <div class="container" style="margin-left: 0px">
        <div class="row" style="margin-left: -20px">
            <?php
            $dir = "uploads/";

            // Sort in ascending order - this is default
            $pictures = scandir($dir);
            for ($i=2; $i<count($pictures); $i++)
            {

                echo '<div class = "col-sm-4">';
                $file_path = "uploads/" . $pictures[$i];
                echo '<img class="thumb gallerypic" src="' . $file_path . '" onclick=showPicture("' . $file_path . '")>' ;
                echo '</div>';
                
            }
            ?>
        </div>
    </div>
</body>
</html>