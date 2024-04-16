<head>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<nav class="p-2 navbar bg-body-tertiary fixed-top" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php" style="font-size: 30px; font-weight: 600;">Atatürk</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Atatürk</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">Ana Sayfa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../index.php">Seçim Ekranı</a>
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
            <a class="nav-link" href="../admin/admin.php">Metin Gir</a>
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
    <h1>Şimdi İse Bilgilenmek İçin,</h1>
    <p>İlerleme Zamanı</p>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

