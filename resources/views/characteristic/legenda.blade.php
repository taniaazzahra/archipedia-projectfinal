<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Legenda</title>

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
                    <h1 class="fw-bold">Legenda</h1>
                    <p class="lead text-muted"><b>/le·gen·da/ /legénda/</b> n cerita rakyat pada zaman dahulu yang ada hubungannya dengan peristiwa sejarah;
-- hidup tokoh cerita yang masih hidup;</p>
                </div>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm">
                        <img src="{{ ('img/malinkundang.jpg') }}" svg class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <rect width="100%" height="100%" fill="#55595c" />
                            </svg>
                            <div class="card-body">
                                <p class="card-text"><b>Malin Kundang,</b> cerita Malin Kundang berasal dari Provinsi Sumatera Barat, yang mengisahkan tentang seorang anak durhaka yang dikutuk menjadi batu oleh ibunya.</p>
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
                        <img src="{{ ('img/timunmas.jpg') }}" svg class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <rect width="100%" height="100%" fill="#55595c" />
                            </svg>
                            <div class="card-body">
                                <p class="card-text"><b>Timun Mas,</b> legenda Timun Mas berasal dari Jawa Tengah. Legenda ini bercerita tentang Mbok Sirni yang mendapatkan biji timun ajaib dari Buto Ijo.</p>
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
                        <img src="{{ ('img/tangkuban.jpg') }}" svg class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <rect width="100%" height="100%" fill="#55595c" />
                            </svg>
                            <div class="card-body">
                                <p class="card-text"><b>Tangkuban Perahu,</b> adalah legenda yang sangat populer dan berasal dari Jawa Barat. Legenda ini mengisahkan awal mula terciptanya Gunung Tangkuban Perahu.</p>
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
                        <img src="{{ ('img/jakatarub.jpg') }}" svg class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <rect width="100%" height="100%" fill="#55595c" />
                            </svg>
                            <div class="card-body">
                                <p class="card-text"><b>Jaka Tarub,</b> legenda ini berasal dari Provinsi Jawa Tengah. Cerita ini mengisahkan tentang pemuda yang mendapatkan istri bidadari.</p>
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
                        <img src="{{ ('img/keongmas.jpg') }}" svg class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <rect width="100%" height="100%" fill="#55595c" />
                            </svg>
                            <div class="card-body">
                                <p class="card-text"><b>Keong Mas,</b> cerita rakyat Keong Mas berasal dari Jawa Timur yang mengisahkan dua saudara perempuan berbeda nasib.</p>
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
                        <img src="{{ ('img/purbasari.png') }}" svg class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <rect width="100%" height="100%" fill="#55595c" />
                            </svg>
                            <div class="card-body">
                                <p class="card-text"><b>Purbasari,</b> Di Pasundan Jawa Barat, Sang raja mempunyai 2 putri bernama Purbararang dan adiknya, Purbasari.</p>
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