<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <title>Data Barang</title>
</head>
<body>
  {{-- <div class="container text-center mt-3 pt-3 bg-white">
    <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
      <?php echo $nama ?>
    </h1>
    <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
      <?php echo $harga ?>
    </h1>
  </div> --}}

  <div class="container text-center mt-3 pt-3 bg-white">
    <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{ $nama }}</h1>
    <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{ $harga }}</h1>
    <br>
    <div class="alert alert-secondary d-inline-block">
      <?php
      if (($harga >= 0) and ($harga <= 2000000))
      {
        echo "Murah";
      }
      else if (($harga > 2000000) and ($harga <= 3000000))
      {
        echo "Mahal";
      }
      ?>
    </div>
  </div>
</body>
</html>
