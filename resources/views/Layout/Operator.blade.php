<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  

    <title>@yield('title')</title>

  </head>
  <body>

    <nav class="navbar navbar-light bg-light my-2 my-lg-0">
    <div class="container">
     <a class="navbar-brand">
    <img src="image/logo.JPG" width="30" height="30" class="d-inline-block align-top" alt="">
    <h7>E-Visit </h7>
    </a>
  
  <form class="form-inline-right ">
    <a class="nav-item btn btn-outline-success" type="button" href="/Operator">Home</a>
    <a class="nav-item btn btn-outline-success" type="button" href="/Operator/Daftarrequest">Daftar Request</a>
    <a class="nav-item btn btn-outline-success" type="button" href="/Operator/Daftarriwayat">Riwayat Kunjungan</a>
    <a class="nav-item btn btn-outline-success" type="button" href="/Operator/Profil">Profil</a>
    <a class="nav-item btn btn-outline-success" type="button" href="/Keluar">Keluar</a>
  </form>
  </div>
  </div>
  </div>
</nav>
    
    @yield('container')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>