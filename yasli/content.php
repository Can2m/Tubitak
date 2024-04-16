


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include "../partical/navbar.php"; ?>


<div class="container text-start">

    <?php


   

    session_start();

    $veri = $_SESSION['veri'];

    print "<h1 style='color: #2b2b2b; text-transform: lowercase;'>" . $veri . "<p>";

    $veri = $_SESSION['veri1'];

    print "<p style='color: #2b2b2b; text-transform: lowercase;'>" . $veri . "<p>";

   

    ?>
</div>


<?php  include "../partical/footer.php";?>
</body>
</html>