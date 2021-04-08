<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>

    <link href="https://fonts.googleapis.com/css2?family=Coda+Caption:wght@800&family=Philosopher&family=Rock+Salt&display=swap"
          rel="stylesheet">

    <link rel="stylesheet" href="css/http_cdnjs.cloudflare.com_ajax_libs_twitter-bootstrap_4.5.3_css_bootstrap.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link rel="stylesheet" href="css/form.css">
</head>
<body>
<nav class="navbar navbar-expand-md fixed-top navbar-dark">
    <a class="navbar-brand d-md-none"><img src="img/kwallie1.png" alt="Kwallie" height="40"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
        <div class="navbar-nav text-center">
            <a class="nav-item nav-link p-md-0" href="index.html">Home</a>
            <a class="nav-item nav-link p-md-0 ml-md-4 mr-md-4" href="index.html#who">Wie</a>
            <a class="nav-item nav-link p-md-0 ml-md-4 mr-md-4" href="index.html#contact">Contact</a>
        </div>
    </div>
</nav>

<section class="min-vh-100 m-5 pt-5">
    <div class="container ">
        <?php
        $check = $_POST['check'];
        $naam = $_POST['naam'];
        $email = $_POST['email'];
        $onderwerp = $_POST['onderwerp'];
        $bericht = $_POST['bericht'];

        $message = "";

        $message.= "From: " . $naam . "\r\n";
        $message.= "Email: " . $email . "\r\n";
        $message.= "Bericht: " . "\r\n" . $bericht;


        $naar = "kwalliedev@gmail.com";

        if (empty($check)) {
           // mail($naar, $onderwerp, $message);

            echo "<h1 class='text-center mt-3 mb-5'>Je bericht is verzonden</h1>
                        <div class='mx-auto w-75'>
                            <p>
                                We zullen je snel contacteren op volgend email adres: <span class='font-weight-bold'>$email</span>
                            </p>
                            <div class='text-left'>
                                <p>Je bericht was:</p>
                                <p class='font-weight-bold'>$bericht</p>
                            </div>
                            <div class='text-right mb-3'>
                                <a href='index.html' class='btn btn-outline-dark'>Ga terug</a>                          </div>
                            </div>";
        } else {
            echo "<div class='text-center mt-3 mb-3'>
                        <p>Gelieve het formulier opnieuw in te dienen</p>
                        <a href='index.html' class='btn btn-outline-dark'>Ga terug</a>
                      </div>";
        }

        ?>
    </div>

</section>

<hr class="m-0">

<footer class="footer m-auto text-center bg-dark">
    <p class="m-0 p-2 text-white">&copy; Kwallie 2021</p>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.min.js"></script>
</body>
</html>