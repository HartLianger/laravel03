<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <title>Daftar Barang</title>
    <link href="/css/my-style.css" rel="stylesheet">
</head>
<body>
    <h1>Daftar Barang</h1>
    <ol>
        <?php
            foreach ($barang as $nama) {
                echo "<li> $nama</li>";
            }
        ?>
    </ol>
    <div>
        <img src="/img/barang1.jpg">
        <img src="/img/barang2.jpg">
    </div>
    <div>
        Copyright  ©  <?php echo date("Y"); ?> Robby
    </div>
    <script src='/js/my-script.js'></script>
</body>
</html>
