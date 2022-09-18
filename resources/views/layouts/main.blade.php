<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="icon" href="../img/ii.png" sizes="32x32">
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/popper.js"></script>
  <script src="assets/js/bootstrap.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <title>KEMENAG | {{$title}}</title>
</head>

<body>
  @include('partials/navbar')
  <!-- container -->
  <br><br>
  <div id="container">
    @yield('container')
  </div>
  <!-- ------->
  <!-- <script src="../js/script.js"></script> -->
</body>

</html>
<style>
  a {
    text-decoration: none;
  }
</style>