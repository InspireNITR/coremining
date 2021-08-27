<?php

include('partials/connection.php');

?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


    <!-- // Google fonts -->

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Chango&family=Oswald&display=swap" rel="stylesheet">

    <title>Articles</title>
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="icon" href="assets/slidder_images/12b.png" type="image/png" sizes="16x16">

    <style>
    @media screen and (max-width: 480px) .row>* {
        padding: 0;
    }

    @media screen and (max-width: 736px) .row>* {
        padding: 0;
    }

    @media screen and (max-width: 980px) .row>* {
        padding: 0;
    }

    @media screen and (max-width: 1280px) .row>* {
        padding: 0;
    }

    @media screen and (max-width: 1680px) .row>* {
        padding: 0;
    }

    .row>* {
        padding: 0;
    }
    </style>
</head>

<body style="background-color:#cefbbe;">



    <!-- Header -->
    <header id="header">

        <?php
    
            session_start();
    
        ?>
        <div class="logo"><img src="assets/slidder_images/12b.png"></img></div>
        <a href="#menu">Menu</a>
    </header>




    <nav id="menu">


        <?php
            include('partials/navbar_menu.php') ;
        ?>

    </nav>








    <!-- One -->
    <section id="One" class="wrapper style3">
        <div class="inner">
            <header class="align-center display-6">
                <h1>ARTICLES</h1>

            </header>
        </div>
    </section>











    <div class="row my-5 mx-auto">


        <div class="card mx-2 mx-auto my-1" style="width: 20rem;">
            <img src="articles-img/1.1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center"><b>ALGAE FOR CO2 ABSORPTION</b></h5>
                <center><a href="a-1.php" class="btn btn-primary">Read</a></center>
            </div>
        </div>


        <div class="card mx-2 mx-auto my-1" style="width: 20rem;">
            <img src="articles-img/2.2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center"> <b>ELECTRIC CARS</b></h5>
                <center><a href="a-2.php" class="btn btn-primary">Read</a></center>
            </div>
        </div>


        <div class="card mx-2 mx-auto my-1" style="width: 20rem;">
            <img src="articles-img/3.1.jpg" class="card-img-top mx-auto" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center"><b>BLOCKCHAIN</b></h5>
                <center><a href="a-3.php" class="btn btn-primary ">Read </a></center>
            </div>
        </div>

        <div class="card mx-2 mx-auto my-1" style="width: 20rem;">
            <img src="articles-img/4.6.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center"><b>AGRICULTURE AND RURAL DEVELOPMENT TO REDUCE HUNGER AND POVERTY</b>
                </h5>
                <center><a href="a-1.php" class="btn btn-primary mx-auto">Read </a></center>
            </div>
        </div>

    </div>



    <div class="row my-1 mx-auto">



        <div class="card mx-2 mx-auto my-1" style="width: 20rem;">
            <img src="articles-img/5.2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center"><b>INVISIBLE WATER</b></h5>
                <center><a href="a-5.php" class="btn btn-primary">Read</a></center>
            </div>
        </div>


        <div class="card mx-2 mx-auto my-1" style="width: 20rem;">
            <img src="articles-img/6.2.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center"> <b>COVID – 19 & MENTAL STATE</b></h5>
                <center><a href="a-6.php" class="btn btn-primary">Read</a></center>
            </div>
        </div>

        <div class="card mx-2 mx-auto my-1" style="width: 20rem;">
            <img src="articles-img/7.8.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center"><b>CAUSES OF OZONE LAYER DEPLETION AND ITS EFFECTS</b></h5>
                <center><a href="a-7.php" class="btn btn-primary">Read</a></center>
            </div>
        </div>


        <div class="card mx-2 mx-auto my-1" style="width: 20rem;">
            <img src="articles-img/8.3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center"><b>NANOTECHNOLOGY: FUTURE OF MEDICAL SCIENCE</b></h5>
                <center><a href="a-8.php" class="btn btn-primary">Read</a></center>
            </div>
        </div>




    </div>



    <div class="row my-1 mx-auto">



        <div class="card mx-2 mx-auto my-1" style="width: 20rem;">
            <img src="articles-img/9.3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center"><b>PREPARATIVE MAIN GROUP AND TRANSITION METAL CHEMISTRY</b></h5>
                <center><a href="a-9.php" class="btn btn-primary">Read</a></center>
            </div>
        </div>


        <div class="card mx-2 mx-auto my-1" style="width: 20rem;">
            <img src="articles-img/10.4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center"><b>SAPLING PLANT WITH
                        COIR BASED PACKET</b></h5>
                <center><a href="a-10.php" class="btn btn-primary">Read</a></center>
            </div>
        </div>

        <div class="card mx-2 mx-auto my-1" style="width: 20rem;">
            <img src="articles-img/12.14.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center"><b>DARK ENERGY</b></h5>
                <center><a href="a-11.php" class="btn btn-primary">Read</a></center>
            </div>
        </div>



        

    </div>





























    <?php

      include('partials/footer.php');

     ?>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>