<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Fauna</title>

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
                    <h1 class="fw-bold">Fauna</h1>
                    <p class="lead text-muted"><b>/fau·na/</b> n keseluruhan kehidupan hewan suatu habitat, daerah, atau strata geologi tertentu; dunia hewan;</p>
                </div>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm">
                        <img src="{{ ('img/harimausum.jpg') }}" svg class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <rect width="100%" height="100%" fill="#55595c" />
                            </svg>
                            <div class="card-body">
                                <p class="card-text"><b>Harimau Sumatera,</b> untuk mencegah kepunahan, Taman Nasional Kerinci Seblat, Kawasan Ekosistem Ulu Masen dan Leuser di Aceh dan Sumatra Utara menjadi pusat konservasi harimau Sumatra.</p>
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
                        <img src="{{ ('img/orangutan.jpg') }}" svg class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <rect width="100%" height="100%" fill="#55595c" />
                            </svg>
                            <div class="card-body">
                                <p class="card-text"><b>Orangutan,</b> untuk orangutan tapanuli yang digolongkan sebagai “spesies baru” dan ditemukan di Ekosistem Batang Toru ini kondisinya paling memprihatinkan, karena menempati posisi sangat terancam punah.</p>
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
                        <img src="{{ ('img/jalakbali.jpg') }}" svg class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <rect width="100%" height="100%" fill="#55595c" />
                            </svg>
                            <div class="card-body">
                                <p class="card-text"><b>Jalak Bali,</b> berasal dari bali, burung ini yang pernah menjadi gambar pada keping uang logam 200 rupiah terbitan 2008 itu, bisa Sobat Pesona temukan di kawasan Taman Nasional Bali Barat (TNBB). </p>
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
                        <img src="{{ ('img/komodo.jpg') }}" svg class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <rect width="100%" height="100%" fill="#55595c" />
                            </svg>
                            <div class="card-body">
                                <p class="card-text"><b>Komodo,</b>  Komodo merupakan salah satu hewan purba yang sudah hidup sejak 4 juta tahun yang lalu, lho! Namun fauna asli Indonesia ini termasuk hewan buas yang berbisa dan cukup berbahaya</p>
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
                        <img src="{{ ('img/cendrawasih.jpg') }}" svg class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <rect width="100%" height="100%" fill="#55595c" />
                            </svg>
                            <div class="card-body">
                                <p class="card-text"><b>Cendrawasih,</b> dianggap burung ini adalah reinkarnasi peri yang terbang di sekitar hutan Papua. beberapa di antaranya cenderawasih kuning kecil, cenderawasih botak, cenderawasih raja, dan cenderawasih merah.</p>
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
                        <img src="{{ ('img/gajah.jpg') }}" svg class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <rect width="100%" height="100%" fill="#55595c" />
                            </svg>
                            <div class="card-body">
                                <p class="card-text"><b>Gajah Kalimantan,</b> bentuk gading gajah ini pun relatif lebih pendek dan lurus.  Umumnya hewan endemik asli Indonesia ini dapat ditemukan di dataran rendah di Kalimantan Timur.</p>
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