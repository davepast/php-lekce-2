<?php
$a = 3;
$b = 4;
$strana = 6;
$uhel = 60;

$obdelnikObsah = $a * $b;
$vyska = $strana * sin(deg2rad($uhel)); //v= a * sin uhlu (prevedeni deg -> rad, pak fce)
$trojuhelnikObsah = round($vyska * $strana / 2); // round() podle pravidel
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
    <title>Výpočty v obdelníku, trojúhelníku</title>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Navigace</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>



    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Obdelník a trojúhelník <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Lichoběžník</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Čtverec</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">3D objekty</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="#">Kužel</a>
                    <a class="dropdown-item" href="#">Jehlan</a>
                    <a class="dropdown-item" href="#">Krychle</a>
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Vyhledávání" aria-label="Vyhledat">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Najít</button>
        </form>
    </div>
</nav>


<!-- /.container -->
<main role="main" class="container-fluid">
<div class="starter-template">

<div class="container-fluid">
<!-- Columns are always 50% wide, on mobile and desktop -->
<div class="row">
    <div class="col-6">
        <h1 class="text-center">Obdelník</h1>
        <table class="table">
            <tr>
                <th>strana a</th>
                <td><?php echo "$a cm"; ?></td>
            </tr>

            <tr>
                <th>strana b</th>
                <td><?php echo "$b cm"; ?></td>
            </tr>

            <tr>
                <th>obvod obdelníku</th>
                <td><?php echo "<b>o = 2(a+b)</b> = 2($a+$b) = <b>" . 2 * ($a + $b) . " cm</b>" ?></td>
            </tr>

            <tr>
                <th>obsah obdelníku</th>
                <td><?php echo "<b>S = a*b </b>= $a*$b = <b>$obdelnikObsah cm^2</b>" ?></td>
            </tr>
    </table>

        <img src="http://web.quick.cz/haramule/obdelnik.gif" class="img-fluid" alt="Obdelník">
    </div>

    <div class="col-6">
        <h1 class="text-center">Rovnostranný trojúhelník</h1>
        <table class="table">
            <tr>
                <th>strana a</th>
                <td><?php echo "$strana cm"; ?></td>
            </tr>

            <tr>
                <th>úhel &alpha;</th>
                <td><?php echo "$uhel" . '°'; ?></td>
            </tr>

            <tr>
                <th>obvod trojúhelníku</th>
                <td><?php echo "<b>o = 3a</b> = 3*$strana = <b>" . 3*$strana . " cm</b>" ?></td>
            </tr>

            <tr>
                <th>výška na stranu a</th>
                <td><?php echo "<b>v = a*sin &alpha;</b> = $strana* sin $uhel" . "° = <b>$vyska cm</b>" ?></td>
            </tr>

            <tr>
                <th>obsah trojúhelníku</th>
                <td><?php echo "<b>S = (a*v)/2</b> = ($strana*$vyska)/2 &#x2250; <b>$trojuhelnikObsah cm^2</b>" ?></td>
            </tr>


        </table>
        <img src="http://www.diktatyapriklady.cz/wp-content/uploads/2013/10/rovnostranny.png" class="img-fluid" alt="Trojúhelník">


    </div>
</div>






</div>
</div>
</main>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>






