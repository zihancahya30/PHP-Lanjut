<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Gallery</title>
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="2333070466">
    <meta name="author" content="Erlina Putri">
    <style>
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            grid-gap: 7px;
        }
        .gallery img {
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <h2>Gallery Saya</h2>
    <div class="gallery">
        <?php
        $fileList = glob('gambar/*');
        foreach ($fileList as $filename){
            if (is_file($filename)){
                echo '<img src="' . $filename . '" alt="Gambar"><br>';
            } 
        }
        ?>
    </div>
</body>
</html>