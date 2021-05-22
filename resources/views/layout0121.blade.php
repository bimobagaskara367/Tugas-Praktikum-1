<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('judul')</title>
    <link rel="stylesheet" href="{{url('css/bootstrap.css')}}">
</head>
<body>
<nav class="navbar navbar-expand-lg" style="background-color: #000000;">
  <a class="navbar-brand" href=" ">Praktikum PTW</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{url('/home')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/article')}}">Article</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/contact')}}">Contact</a>
      </li>
    </ul>
  </div>
</nav>
@yield('isi') 
</body>
</html>



