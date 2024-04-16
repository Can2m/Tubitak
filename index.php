<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tübitak V3</title>
    <link rel="stylesheet" href="partical/style.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <head>
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>

    <nav class="p-2 navbar bg-body-tertiary fixed-top" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php" style="font-size: 30px; font-weight: 600;">Atatürk</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Atatürk</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-current="page" href="ortayas/index.php">Ana Sayfa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="../index.php">Seçim Ekranı</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Yaş Seçimi
                            </a>
                            <ul class="menu">
                                <li><a class="dropdown-item m-1" href="../cocuk/index.php">Çocuk</a></li>
                                <li><a class="dropdown-item m-1" href="../ortayas/index.php">Orta Yaş</a></li>

                                <li><a class="dropdown-item m-1" href="../yasli/index.php">Yaşlı</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="../admin/admin.php">Metin Gir</a>
                        </li>
                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Ara" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Ara</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>



    <div class="head">
        <span>Merhaba,</span>
        <h1>Atatürk ile ilgili soular için, <br> Önce Yaşınızı Belirtmeniz Gerekiyor</h1>
        <p>Biraz aşağı!</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>



    <div class="container">
        <h1 style="color: #212529; margin-bottom: -100px;">Şimdi Yaş Secme Zamanı</h1>
    </div>

    <div class="containers">
        <a class="cards cocuk" href="cocuk/index.php">Çocuk <div class="containersbg"></div></a>
        <a class="cards orta" href="ortayas/index.php">Orta Yaş <div class="containersbg"></div></a>
        <a class="cards yasli" href="yasli/index.php">Yaşlı<div class="containersbg"></div></a>
    </div>




    <?php
    include "partical/footer.php"
        ?>
</body>

</html>