<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apprendre Laravel</title>
    <!-- Favicon -->
    <link href="/resources/img/laravel8530.jpg" rel="icon">
   
     <!-- Boostrap -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="{{url('/about')}}">About</a>
        <a class="nav-link" href="{{url('/apropos')}}">Apropos</a>
        <a class="nav-link" href="{{url('/service')}}">Service</a>
        
      </div>
    </div>
  </div>
</nav>

<div   class="navbar container" style="background-color: #e3f2fd; " >
   <h1>Bienvenue a la page about</h1>
</div>
    
</body>
</html>