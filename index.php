<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        Niğde Ömer Halisdemir Üniversitesi İnternet Programcılığı 1. Dönem Ödevi
    </title>

    <link rel="shortcut icon" href="https://static.ohu.edu.tr/uniweb/img/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="libs/css/bootstrap.min.css" />
    <link rel="stylesheet" href="stil.css" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
</head>

<body>
    <header>
        <div class="container-fluid" style="background-color: #343a40;">
            <a class="logo" href="https://www.ohu.edu.tr" target="_blank">
                <img src="https://static.ohu.edu.tr/uniweb/web/img/logoyeni2.png"
                    alt="Niğde Ömer Halisdemir Üniversitesi Logo" />
            </a>
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <a class="navbar-brand" href="https://www.ohu.edu.tr" target="_blank">
                        <img src="https://static.ohu.edu.tr/uniweb/web/img/logoyeni2.png"
                            alt="Niğde Ömer Halisdemir Üniversitesi Logo" style="width: 70px" />
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarIcerik">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarIcerik">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="index.php?git=anasayfa" class="nav-link active">
                                    <i class="bi bi-house-door-fill" style="color: white"></i>
                                    Anasayfa
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="index.php?git=hakkinda" class="nav-link">
                                    <i class="bi bi-file-earmark-person-fill" style="color: white"></i>
                                    Hakkında
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="index.php?git=iletisim" class="nav-link">
                                    <i class="bi bi-envelope-fill" style="color: white"></i>
                                    İletişim
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="index.php?git=algoritma" class="nav-link">
                                    <i class="bi bi-file-earmark-code-fill" style="color: white"></i>
                                    Algoritma
                                </a>
                            </li>
                        </ul>

                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="index.php?git=kayitol" class="nav-link">
                                    <i class="bi bi-person-plus-fill" style="color: white"></i>
                                    Kayıt Ol
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="bi bi-door-open-fill" style="color: white"></i>
                                    Giriş
                                </a>
                            </li>
                        </ul>

                        <form action="#" method="post" class="form_inline">
                            <div class="input-group">
                                <input type="search" class="form-control ml-0 ml-lg-2" placeholder="Ara.." />
                                <div class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="bi bi-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <?php
            @$git = $_GET['git'];

            switch ($git)
            {
                case 'hakkinda':
                    include ("sayfalar/hakkinda.html");
                    break;
                case 'kayitol':
                    include ('sayfalar/kayitol.html');
                    break;
                default:
                    include('sayfalar/anasayfa.html');
                    break;
            }
        ?>
    </main>

    <footer>
        <div class="container mt-lg-5" id="altKisim">
            <div class="text-center py-3">
                <span>
                    Her Hakkı Saklıdır
                    <i class="bi bi-badge-cc-fill"></i>
                    2021. <strong>Berat Ceylan</strong>
                </span>
            </div>
        </div>
    </footer>

    <script src="libs/js/jquery-3.6.0.min.js"></script>
    <script src="libs/js/bootstrap.bundle.min.js"></script>
</body>

</html>