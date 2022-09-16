<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KEMENAG | {{$title}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../img/ii.png" sizes="32x32">
    <script src="assets/js/jquery.js"></script> 
    <script src="assets/js/popper.js"></script> 
    <script src="assets/js/bootstrap.js"></script>
  </head>
  <body>

<!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container">
   <img src="img/ii.png" class="navbar-brand " alt="" style="width:5%;">
    <a class="navbar-brand" href="/">KEMENAG</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{($title === 'Home') ? 'active' : ''}}"  href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{($title === 'About') ? 'active' : ''}}" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{($title === 'List Data Category') ? 'active' : ''}}{{($title === 'rian') ? 'active' : ''}}" href="/categories">Category</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{($title === 'Blog') ? 'active' : ''}}{{($title === 'Single Blog') ? 'active' : ''}} {{($title === 'Short By Username') ? 'active' : ''}}" href="/blog">Blog</a>
        </li>
        
        <!-- <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li> -->
      </ul>
    </div>
    
  </div>
</nav>
<!-- ---- -->

<!-- container -->
<br><br>
<div id="container">
    @yield('container')
</div>
<!-- ------->
    <script src="../js/script.js"></script>
  </body>
</html>
<style>
  a{
    text-decoration:none;
  }
</style>