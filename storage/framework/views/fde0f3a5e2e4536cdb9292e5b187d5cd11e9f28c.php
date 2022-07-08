<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        body {
            background-color: #CCD9A0;
        }
    </style>
  </head>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-light"  >
    <div class="container-fluid">
      <a class="navbar-brand" href="#" style="color:black;"><b>Archipedia</b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home" style="color:black;">Home</a>
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" style="color:black;" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Characteristic
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/legenda">Legenda</a></li>
            <li><a class="dropdown-item" href="/wisata">Wisata</a></li>
            <li><a class="dropdown-item" href="/fauna">Fauna</a></li>
            <li><a class="dropdown-item" href="/makanan">Makanan</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        </ul>

          <div style="margin-right: 65px;" class="dropdown">
      <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="img/tania.jpg" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong><?php echo e(auth()->user()->name); ?></strong>
      </a>
      <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
        <li><a class="dropdown-item" href="#">New project...</a></li>
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="<?php echo e(route('logout')); ?>">Sign out</a></li>
      </ul>
    </div>

        </form>
      </div>
    </div>
  </nav>
  <div class="container">
  <?php echo $__env->yieldContent('container'); ?>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html><?php /**PATH C:\laragon\www\project-tania\resources\views/template/navbar.blade.php ENDPATH**/ ?>