<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/css/app.js'])
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav>

<h3>Compila il form per contattarci</h3>

@if(session()->has('error'))
<h6>{{session('error')}}</h6>
@endif

<form method="POST" action="{{route('contatti.salva')}}" >
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1" class="form-label">Nome e cognome</label>
    <input type="text" class="form-control" name="name">
  </div>

  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1"></label>
  </div>

  <button type="submit" class="btn btn-primary">Invia</button>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Messaggio</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
  </div>

</form>
</body>
</html>

