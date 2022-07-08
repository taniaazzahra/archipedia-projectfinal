<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Makanan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

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


</head>

<body>
@include('template.navbar')
    <main>

        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-bold">Makanan</h1>
                    <p class="lead text-muted"><b>[ma·kan·an]</b> n segala sesuatu yang dapat dimakan (seperti penganan, lauk-pauk, kue);</p>
                </div>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm">
                        <img src="{{ ('img/rendang.jpg') }}" svg class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <rect width="100%" height="100%" fill="#55595c" />
                            </svg>
                            <div class="card-body">
                                <p class="card-text"><b>Rendang,</b> merupakan masakan yang berasal dari Minangkabau, terbuat dari olahan daging yang dimasak dengan bumbu rempah. Kuliner yang satu ini begitu digemari karena punya cita rasa yang lezat. Bahkan, tahun 2017 lalu, rendang dinobatkan sebagai makanan terenak nomor 1 versi CNN Travel, lho!.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                        <img src="{{ ('img/pempek.jpg') }}" svg class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <rect width="100%" height="100%" fill="#55595c" />
                            </svg>
                            <div class="card-body">
                                <p class="card-text"><b>Pempek,</b> menjadi kuliner favorit masyarakat, karena punya rasa yang komplit. Ada rasa asam, manis, pedas, dan gurih. Pempek juga hadir dalam beberapa jenis, antara lain pempek lenjer, bulat, kulit ikan, dan yang paling terkenal adalah pempek kapal selam, yang berisi telur ayam.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                        <img src="{{ ('img/rawon.jpg') }}" svg class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <rect width="100%" height="100%" fill="#55595c" />
                            </svg>
                            <div class="card-body">
                                <p class="card-text"><b>Rawon,</b> ini merupakan makanan khas Jawa Timur. Warna hitam gelap pada rawon dihasilkan oleh kluwek dicampur dengan potongan daging sapi yang lembut. Rawon biasanya disajikan dengan nasi, tauge, daun bawang, telur asin, dan daun kerupuk udang sebagai pelengkap.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm">
                        <img src="{{ ('img/gadogado.jpg') }}" svg class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <rect width="100%" height="100%" fill="#55595c" />
                            </svg>
                            <div class="card-body">
                                <p class="card-text"><b>Gado-gado,</b> adalah makanan khas dari Jakarta yang menyehatkan karena terdiri dari rebusan sayuran seperti kangkung, wortel, labu siam, selada, timun dan irisan tempe yang disiram dengan saus kacang yang gurih. Gado-gado dapat disantap dengan lontong atau nasi putih.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                        <img src="{{ ('img/gudeg.jpg') }}" svg class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <rect width="100%" height="100%" fill="#55595c" />
                            </svg>
                            <div class="card-body">
                                <p class="card-text"><b>Gudeg,</b> adalah kuliner yang tak boleh untuk dilewatkan jika berkunjung ke kota pelajar yang satu ini. Gudeng merupakan makanan khas Yogyakarta yang terbuat dari nangka muda yang dimasak dengan santan dan daun jati selama berjam-jam hingga lembut dan bumbu meresap sempurna.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                        <img src="{{ ('img/betutu.jpg') }}" svg class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <rect width="100%" height="100%" fill="#55595c" />
                            </svg>
                            <div class="card-body">
                                <p class="card-text"><b>Bebek Betutu,</b> cara masak Bebek Betutu ini menggunakan bebek utuh yang dibungkus daun pisang, lalu dibungkus lagi dengan pelepah pinang hingga rapat. Yang uniknya lagi adalah bebek tersebut ditanam dalam lubang di tanah dan ditutup dengan bara api selama 6 – 7 jam.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="text-muted py-5">
        <div class="container">
            <p class="float-end mb-1">
                <a href="#">Back to top</a>
            </p>
        </div>
    </footer>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>