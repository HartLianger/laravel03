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
  <div class="container text-center mt-3 pt-3 bg-white">
    <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{ $nama }}</h1>
    <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{ $harga }}</h1>
    <br>
    @switch($harga)
      @case(0)
        <div class="alert alert-danger d-inline-block">Kosong</div>
      @break
      @case(1000000)
        <div class="alert alert-success d-inline-block">Lumayan</div>
      @break
      @case(2000000)
        <div class="alert alert-success d-inline-block">Mahal</div>
      @break
      @default
        <div class="alert alert-dark d-inline-block">harga tidak valid</div>
    @endswitch
  </div>
</body>
</html>
