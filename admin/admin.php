

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tübitak - Admin</title>
    <link rel="stylesheet" href="../partical/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

<?php
    include "../partical/navbar.php";
    ?>
    <div class="container p-5">
        <div class="card p-5 text-start" style="width: 100%;">

            <h1 class="text-center mb-5 fw-bold" style="color: #000;">İçerik Giriş</h1>

            <form method="post" action="adminback.php">
                <select name="secim" class="form-select mb-3" aria-label="Default select example">
                    <option value="cocuk">çocuk</option>
                    <option value="ortayaş">orta yaş</option>
                    <option value="yaşlı">yaşlı</option>
                </select>
       

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Başlık</label>
                    <input type="text" name="baslik" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">İçerik</label>
                    <textarea style="height: 250px;" name="icerik" type="email" class="form-control"></textarea>
                </div>

                <input type="submit" value="Gönder" class="btn btn-outline-primary">
            </form>
        </div>
    </div>

    <?php include "../partical/footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>