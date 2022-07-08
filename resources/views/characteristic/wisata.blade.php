<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Wisata</title>

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
                    <h1 class="fw-bold">Wisata</h1>
                    <p class="lead text-muted"><b>//wi·sa·ta/</b> n bepergian bersama-sama (untuk memperluas pengetahuan, bersenang-senang, dan sebagainya); bertamasya; piknik;</p>
                </div>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm">
                        <img src="{{ ('img/pulaukomodo.jpg') }}" svg class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <rect width="100%" height="100%" fill="#55595c" />
                            </svg>
                            <div class="card-body">
                                <p class="card-text"><b>Pulau Komodo,</b> Destinasi wisata Indonesia yang tersohor di mata dunia selanjutnya adalah Pulau Komodo. Pulau yang berlokasi di Kepulauan Nusa Tenggara Timur ini merupakan rumah bagi ratusan Komodo, hewan endemik yang hanya ada di Indonesia.</p>
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
                        <img src="{{ ('img/toraja.jpg') }}" svg class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <rect width="100%" height="100%" fill="#55595c" />
                            </svg>
                            <div class="card-body">
                                <p class="card-text"><b>Tana Toraja,</b> selain keindahan arsitektur tradisional rumah tongkonan, wisatawan juga bisa mengamati tradisi unik upacara kematian yang dikenal sebagai Rambu Solo yang biasanya diselenggarakan pada Juli dan Agustus</p>
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
                        <img src="{{ ('img/wakatobi.jpeg') }}" svg class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <rect width="100%" height="100%" fill="#55595c" />
                            </svg>
                            <div class="card-body">
                                <p class="card-text"><b>Wakatobi,</b> Dengan luas mencapai 13.900 km2, tujuan wisata terkenal asal Indonesia ini memiliki tak kurang dari 112 jenis terumbu karang yang bersimbiosis dengan ikan-ikan bawah laut sehingga menciptakan panorama bawah laut yang tiada tanding.</p>
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
                        <img src="{{ ('img/bromo.jpeg') }}" svg class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <rect width="100%" height="100%" fill="#55595c" />
                            </svg>
                            <div class="card-body">
                                <p class="card-text"><b>Gunung Bromo,</b> terkenal sebagai objek wisata utama di Jawa Timur. Sebagai sebuah objek wisata, Bromo menjadi menarik karena statusnya sebagai gunung berapi yang masih aktif. Gunung Bromo termasuk dalam kawasan Taman Nasional Bromo Tengger Semeru.</p>
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
                        <img src="{{ ('img/jayawijaya.jpg') }}" svg class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <rect width="100%" height="100%" fill="#55595c" />
                            </svg>
                            <div class="card-body">
                                <p class="card-text"><b>Puncak Jayawijaya,</b> rangkaian pegunungan yang membujur di Provinsi Papua, Indonesia. Pegunungan Jayawijaya adalah rangkaian pegunungan tertinggi di Indonesia, dengan puncak tertingginya yaitu Puncak Jaya. Di puncak pegunungan Jayawijaya terdapat salju abadi yang jumlahnya semakin menipis.</p>
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
                        <img src="{{ ('img/prambanan.jpg') }}" svg class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <rect width="100%" height="100%" fill="#55595c" />
                            </svg>
                            <div class="card-body">
                                <p class="card-text"><b>Candi Prambanan,</b>adalah kompleks candi Hindu (Syaiwa) terbesar di Indonesia. ini dipersembahkan untuk Trimurti, tiga dewa utama Hindu yaitu dewa Brahma sebagai dewa pencipta, dewa Wisnu sebagai dewa pemelihara, dan dewa Siwa sebagai dewa pemusnah. </p>
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