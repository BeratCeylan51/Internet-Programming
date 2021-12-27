<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anasayfa</title>

    <link rel="stylesheet" href="libs/css/bootstrap.min.css" />

</head>
<body>
    
    <main>
        <div class="container mt-2">
            <div class="row">
                <div class="col-lg-8">
                    <div id="resimler" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#resimler" data-slide-to="0" class="active"></li>
                            <li data-target="#resimler" data-slide-to="1"></li>
                            <li data-target="#resimler" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/programlama1.jpg" alt="photo" class="w-100" />
                            </div>

                            <div class="carousel-item">
                                <img src="img/programlama2.jpg" alt="photo" class="w-100" />
                            </div>

                            <div class="carousel-item">
                                <img src="img/programlama3.jpg" alt="photo" class="w-100" />
                            </div>
                        </div>

                        <a href="#resimler" class="carousel-control-prev" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>

                        <a href="#resimler" class="carousel-control-next" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                    <div class="card-group mt-3">
                        <div class="card border-dark">
                            <img src="img/bootstrap.png" alt="Bootstrap" />
                            <div class="card-body">
                                <h5 class="card-title">Bootstrap</h5>
                                <p class="card-text">
                                    Quickly design and customize responsive mobile-first sites
                                    with Bootstrap, the world’s most popular front-end open
                                    source toolkit, featuring Sass variables and mixins,
                                    responsive grid system, extensive prebuilt components, and
                                    powerful JavaScript plugins.
                                </p>
                            </div>
                            <div class="card-footer">
                                <a class="btn btn-success btn-block" href="https://getbootstrap.com" target="_blank"
                                    style="color: white">Bootstrap</a>
                            </div>
                        </div>

                        <div class="card border-dark">
                            <img src="img/jQurery.png" alt="JQuery" />
                            <div class="card-body">
                                <h5 class="card-title">JQuery</h5>
                                <p class="card-text">
                                    jQuery is a fast, small, and feature-rich JavaScript
                                    library. It makes things like HTML document traversal and
                                    manipulation, event handling, animation, and Ajax much
                                    simpler with an easy-to-use API that works across a
                                    multitude of browsers. With a combination of versatility and
                                    extensibility, jQuery has changed the way that millions of
                                    people write JavaScript.
                                </p>
                            </div>
                            <div class="card-footer">
                                <a class="btn btn-success btn-block" href="https://jquery.com" target="_blank"
                                    style="color: white">JQuery</a>
                            </div>
                        </div>

                        <div class="card border-dark">
                            <img src="img/php-development-course-2-1.jpg" alt="PHP" />
                            <div class="card-body">
                                <h5 class="card-title">PHP</h5>
                                <p class="card-text">
                                    Hypertext Preprocessor, internet için üretilmiş, sunucu
                                    taraflı, çok geniş kullanımlı, genel amaçlı, içerisine HTML
                                    gömülebilen betik ve programlama dilidir. İlk kez 1995
                                    yılında Rasmus Lerdorf tarafından yaratılan PHP'nin
                                    geliştirilmesi bugün PHP topluluğu tarafından
                                    sürdürülmektedir.
                                </p>
                            </div>
                            <div class="card-footer">
                                <a class="btn btn-success btn-block" href="https://www.php.net" target="_blank"
                                    style="color: white">PHP</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">

                    <div class="card mt-3">
                        <h5 class="card-header d-flex">
                            <span class="mr-auto">Menü</span>
                            <i class="bi bi-three-dots"></i>
                        </h5>

                        <ul class="list-group">

                            <li class="list-group-item">
                                <strong>
                                    <a href="#" class="nav-link" style="color: black;">
                                        <i class="bi bi-file-person-fill mr-2" style="color: black"></i>
                                        Hakkında
                                    </a>
                                </strong>
                                
                            </li>

                            <li class="list-group-item">
                                <strong>
                                    <a href="#" class="nav-link" style="color: black;">
                                        <i class="bi bi-file-code-fill mr-2"></i>
                                        Algoritma
                                    </a>
                                </strong>
                                
                            </li>

                            <li class="list-group-item">
                                <strong>
                                    <a href="#" class="nav-link" style="color: black;">
                                        <i class="bi bi-file-earmark-bar-graph-fill mr-2" style="color: black;"></i>
                                        Veri Yapıları
                                    </a>
                                </strong>
                                
                            </li>

                            <li class="list-group-item">
                                <strong>
                                    <a href="#" class="nav-link" style="color: black;">
                                        <i class="bi bi-terminal-fill mr-2" style="color: black;"></i>
                                        Programlama
                                    </a>
                                </strong>
                                
                            </li>

                            <li class="list-group-item">
                                <strong>
                                    <a href="#" class="nav-link" style="color: black;">
                                        <i class="bi bi-file-earmark-code-fill mr-2" style="color: black;"></i>
                                        Web Tasarım
                                    </a>
                                </strong>
                            </li>
                        </ul> 
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="libs/js/jquery-3.6.0.min.js"></script>
    <script src="libs/js/bootstrap.bundle.min.js"></script>

</body>
</html>