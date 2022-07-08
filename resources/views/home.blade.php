<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Beranda</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
  </head>
  <body>
  @include('template.navbar')
    <main>
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
      <img src="{{ ('img/borobudur.jpg') }}" width="100%" height="200%">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Spiritual Place</h1>
            <p>Borobudur Temple is one of the places of worship in Indonesia.</p>
            <p><a class="btn btn-lg btn-primary" href="/wisata">Browse Galery</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img src="{{ ('img/harimau.jpg') }}" width="100%" height="150%">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption">
            <h1>Knowing the native fauna of Indonesia</h1>
            <p>The Sumatra's tiger is one of the Indonesian fauna that has a rare population.</p>
            <p><a class="btn btn-lg btn-primary" href="/fauna">Browse Galery</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img src="{{ ('img/makanan.jpg') }}" width="100%" height="150%">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Delicious regional food</h1>
            <p>Mie Aceh is one of the typical foods of the Aceh region.</p>
            <p><a class="btn btn-lg btn-primary" href="/makanan">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="container marketing">

    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Raja Ampat. <span class="text-muted">Surga Petualangan Dunia di Ujung Papua.</span></h2>
        <p class="lead">Kepulauan Raja Ampat di abad ke-15 merupakan bagian dari kekuasaan Kesultanan Tidore, sebuah kerajaan besar yang berpusat di Kepulauan Maluku. Untuk menjalankan pemerintahannya, Kesultanan Tidore menunjuk 4 orang Raja lokal untuk berkuasa di pulau Waigeo, Batanta, Salawati dan Misool</p>
      </div>
      <div class="col-md-5">
      <img src="{{ ('img/raja.jpg') }}" width="450px" height="450px">
        

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">Pulau Kelor. <span class="text-muted">Pulau Sepi yang Mempesona.</span></h2>
        <p class="lead">Jaraknya ke Pantai Ancol sekitar 1,8 kilometer atau satu jam pelayaran dengan kapal motor. Di pulau ini terdapat peninggalan Belanda berupa galangan kapal dan benteng martello yang dibangun VOC untuk menghadapi serangan Portugis di abad ke 17. Di sini juga terdapat kuburan Kapal Tujuh atau Sevent Provincien serta awak kapal berbangsa Indonesia yang memberontak dan akhirnya gugur di tangan Belanda.</p>
      </div>
      <div class="col-md-5 order-md-1">
      <img src="{{ ('img/kelor.jpg') }}" width="450px" height="450px">

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Danau Toba. <span class="text-muted">Indahnya Pesona Kaldera Raksasa.</span></h2>
        <p class="lead">Menurut cerita masyarakat sekitar, dahulu kala ada sepasang suami istri yang memiliki anak bernama Samosir. Pada suatu hari, sang bapak yang bernama Toba sedang marah ke Samosir dan tidak sengaja memberi tahu bahwa Samosir sebenarnya adalah anak dari seekor ikan. Samosir terkejut dan mengadu ke ibunya. Hal ini membuat sang ibu sangat sedih karena suaminya melanggar janji untuk tidak memberi tahu asal usul sang anak yang ternyata berasal dari seekor ikan. Sambil berpegangan tangan, Samosir dan ibunya menghilang dalam sekejap.</p>
      </div>
      <div class="col-md-5">
      <img src="{{ ('img/toba.jpg') }}" width="450px" height="450px">

      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->

  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
  </footer>
</main>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
