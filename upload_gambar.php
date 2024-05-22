<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="2333070466">
    <meta name="author" content="Erlina Putri">
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
        <p><label>Pilih gambar yang akan diupload: </label><br>
            <input type="file" name="gambar" value="Pilih Gambar" id="gambar1"></p>
        <input type="submit" value="Upload Image" name="submit">
    </form>

    <?php 
    // cek pakah ada kiriman data dengan metode POST
    if(isset($_POST["submit"])){
        $target_dir = "gambar/";
        $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
        $uploadOk = 1;
        $tipeGambar = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // cek apakah file berupa gambar
        $check = getimagesize($_FILES["gambar"]["tmp_name"]);
        if($check !== false) {
            echo "File berupa citra/gambar - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File bukan gambar.";
            $uploadOk = 0;
        }

        // deteksi apakah ada file dengan nama yang sama
        if(file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }

        // cek file size
        if ($_FILES["gambar"]["size"] > 50000000) {
            echo "Sorry, file anda terlalu besar.";
            $uploadOk = 0;
        }

        // filter format
        if($tipeGambar != "jpg" && $tipeGambar != "png" && $tipeGambar != "jpeg"
            && $tipeGambar != "gif") {
                echo "Sorry, hanya file JPG, JPEG, PNG & GIF.";
                $uploadOk = 0;
        }

        // cek if $uploadOk telah sesuai dengan kriteria
        if($uploadOk == 0) {
            echo "Sorry, File anda gagal upload.";
        } else {
            // proses upload file
            if(move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
                echo "file ". htmlspecialchars(basename($_FILES["gambar"]["name"])). " berhasil diupload.";
            } else {
                echo "Sorry, Ada error saat upload.";
            }
        }
    }
    ?>
</body>
</html>