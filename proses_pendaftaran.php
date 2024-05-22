<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Form Pendaftaran</title>
        <style>
            .label {
                display: inline-block;
                width: 150px;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <p>
            <span class="label"><h1>Selamat Datang</h1></span><?php echo $_POST["nama"]; ?>!
        </p>
        <p>
            <span class="label">Nim</span>: <?php echo $_POST["nim"]; ?>
        </p>
        <p>
            <span class="label">Email</span>: <?php echo $_POST["email"]; ?>
        </p>
        <p>
            <span class="label">Tempat, tanggal lahir</span>: <?php echo $_POST["tempat_lahir"]; ?>, <?php echo $_POST["tanggal"]; ?>
        </p>
        <p>
            <span class="label">Alamat</span>: <?php echo $_POST["alamatrumah"]; ?>
        </p>
        <p>
            <span class="label">Jenis Kelamin</span>: <?php echo $_POST["jenis_kelamin"]; ?>
        </p>
    </body>
</html>
