<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>

    <!--  Favicon  -->
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/img/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="msapplication-config" content="/img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#000000">

    <!--  Styles  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

    <link rel="stylesheet" href="css/style.css">
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
            <a class="nav-item nav-link p-md-0" href="index.html#contact">Contact</a>
        </div>
    </div>
</nav>

<section class="min-vh-100 m-3">
    <div class="container text-center row mx-auto">
        <?php
        $check = $_POST['check'];
        $naam = $_POST['naam'];
        $email = $_POST['email'];
        $onderwerp = $_POST['onderwerp'];
        $bericht = $_POST['bericht'];

        $message = "";

        $message .= "From: " . $naam . "\r\n";
        $message .= "Email: " . $email . "\r\n";
        $message .= "Bericht: " . "\r\n" . $bericht;


        $naar = "kwalliedev@gmail.com";
        if ($_POST) {
            if (empty($check) && !empty($naam) && !empty($email) && !empty($onderwerp) && !empty($bericht)) {
                 mail($naar, $onderwerp, $message);

                echo "<h1 class='text-center text-black mt-3 mb-5 col-12'>Je bericht is verzonden</h1>
                        <div class='m-auto w-75 col-12 row'>
                            <p class='text-black col-12'>
                                We zullen je snel contacteren op volgend email adres: <span class='font-weight-bold text-black'>$email</span>
                            </p>
                            <div class='col-12'>
                                <p class='text-black'>Je bericht was:</p>
                                <p class='font-weight-bold text-black'>$bericht</p>
                            </div>
                            <div class='text-right mb-3 col-12'>
                                <a href='index.html' class='btn btn-outline-dark'>Ga terug</a>                          </div>
                           </div>";
            } else {
                echo "<div class='text-center mt-3 mb-3'>
                        <p class='text-black'>Gelieve het formulier opnieuw in te dienen</p>
                        <a href='index.html#contact' class='btn btn-outline-dark'>Ga terug</a>
                      </div>";
            }
        }
        ?>
    </div>

</section>

<hr class="m-0">

<footer class="footer m-auto text-center bg-dark">
    <div class="m-0 p-2">
        <span>&copy; Kwallie 2021</span>
        <a href="https://twitter.com/KwallieV" class="pl-4 pr-4" target="_blank" data-toggle="tooltip"
           data-placement="bottom" title="Bezoek kwallie's Twitter">
            <i class="text-white fab fa-twitter fa-2x text-white"></i>
        </a>
        <a class="" href="https://github.com/kwalliedev" target="_blank" data-toggle="tooltip"
           data-placement="bottom" title="Bezoek kwallie's GitHub">
            <i class="text-white fab fa-github fa-2x text-white"></i>
        </a>
    </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.min.js"></script>
</body>
</html>