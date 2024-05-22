<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Gallery</title>
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307030">
    <meta name="author" content="Zihan Cahya Amelia">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        h2 {
            text-align: center;
            margin: 20px 0;
            color: #333;
        }
        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
            padding: 20px;
        }
        .gallery img {
            max-width: calc(25% - 10px);
            height: auto;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .gallery img:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        @media (max-width: 1200px) {
            .gallery img {
                max-width: calc(33.33% - 10px);
            }
        }
        @media (max-width: 800px) {
            .gallery img {
                max-width: calc(50% - 10px);
            }
        }
        @media (max-width: 500px) {
            .gallery img {
                max-width: 100%;
            }
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
                echo '<img src="' . $filename . '" alt="Gambar">';
            } 
        }
        ?>
    </div>
</body>
</html>
