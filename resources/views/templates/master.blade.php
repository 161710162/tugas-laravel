<!DOCTYPE html>
<html>
<head>
	<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TaufikWeb.kers</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">WebTaufik38</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="tabel">Data Siswa <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="gambar">Gambar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="paragraf">Paragraf</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="gamepc">Game's PC</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="hargahp">HP</a>
      </li>
    </ul>
  </div>
</nav>

  
  </body>
</html>
	
</head>
<body>
		<!--menambahkan header-->
		@include('templates.header')
		<!--tempat kosong yang bisa di isi-->
		@yield('konten')
		<!--menambahkan footer-->
		@include('templates.footer')
</body>
</html>