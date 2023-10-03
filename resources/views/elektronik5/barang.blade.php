<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <title>Data Harga</title>
</head>
<body>
  <div class="container text-center mt-3 pt-3 bg-white">
    <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{$nama}}</h1>
    <br>
    @forelse ($harga as $val)
      @if (($val >= 0) and ($val < 2001))
        <div class="alert alert-danger d-inline-block">
          {{$val}}
        </div>
      @elseif (($val >= 2001) and ($val <= 5001))
        <div class="alert alert-success d-inline-block">
          {{$val}}
        </div>
      @endif
    @empty
      <div class="alert alert-dark d-inline-block">Tidak ada data...</div>
    @endforelse
  </div>
</body>
</html>
