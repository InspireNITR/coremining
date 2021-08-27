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





    <div class="container mx-auto my-4" style="width:80%; background-color:white;">

        <h1 class="text-center" style="font-family: 'Chango', cursive;
               font-family: 'Oswald', sans-serif; font-size:250%; color:blue;">
               ALGAE FOR CO2 ABSORPTION</h1>

        <div class="row">

            <div class="col-md-4  p-4 mx-auto my-3">
                <img src="articles-img/1.1.jpg" class="img-fluid" alt="...">
            </div>

            <div class="col-md-4  p-4 mx-auto my-3">
                <img src="articles-img/1.2.jpg" class="img-fluid" alt="...">
            </div>



        </div>

        <ul>
            <li>From 1850 to 2018, 440 ± 20 gigaton were emitted as CO₂ from fossil fuel burning.</li>
            <li>Global growth rate of atmospheric carbon dioxide was roughly 0.6 ± 0.1 ppm per year.</li>
            <li>Land-based plants contribute 52% of the total carbon-dioxide absorbed by the earth’s biosphere,
                while
                ocean-based algae contributed 45% to 50% of that.</li>
            <li>At moderate pHs (≥ pH 7) and temperatures (below 30 degrees Celsius), the dominant form of CO2 in
                water
                is bicarbonate. As previously discussed, algae have active bicarbonate pumps and can concentrate
                bicarbonate in the cell</li>
            <li>The bicarbo-nate is dehydrated, either spontaneously or by carbonic anhydrase, and the resulting CO2
                is
                captured through Calvin-cycle activity, ultimately in the form of algal biomass</li>
            <li>Between 1.6 and 2 grams of CO2 is captured for every gram of algal biomass produced.</li>
            <li>The injection of power plant flue gases into algal ponds has been shown to elevate algal biomass
                yields
                by as much as threefold, but at a high energy cost.</li>
        </ul>


        <div class="row">
            <div class="col-md-4  p-4 mx-auto my-1">
                <img src="articles-img/1.3.jpg" class="img-fluid" alt="...">
            </div>
            <div class="col-md-4  p-4 mx-auto my-1">
                <img src="articles-img/1.4.jpg" class="img-fluid" alt="...">
            </div>
            <!-- <div class="col-md-4  p-4 mx-auto my-3"> -->
            <!-- <img src="articles-img/1.4.jpg" alt="..."> -->
            <!-- </div> -->
        </div>

        <p style=" font-size:120%;">
            <strong style="color:orange;">PHYCO2’s</strong> patented photobioreactor installed at Michigan State University’s (MSU’s) T.B.
            Simon Power Plant
            captures carbon dioxide for high-density algae cultivation.<br>
            The first two-month period of testing showed an algae density of 1.7 g/L, a CO2 absorption rate of 52%, and
            a productivity rate of 0.34 g/l solution/day—“higher than the algae and production rates found at recently
            reported studies,” it explained.
        </p>

        <div class="col-md-8  p-4 mx-auto my-3">
            <img src="articles-img/1.5.jpg" class="img-fluid" alt="...">
        </div>

        <ul style="font-size:120%;">
            <li>The Eos Bioreactor uses AI to optimize algae growth, which, according to Hypergiant, creates a product
                that is more sustainable, efficient, manageable, and physically smaller than other bioreactor
                prototypes.</li>
            <li>According to Hypergiant, the Eos Bioreactor captures more CO2 than 400 trees.</li>
            <li>The Eos Bioreactor, a kitchen-fridge-sized device from Texas-based AI firm Hypergiant that uses algae to
                ‘sequester’ CO2 from the atmosphere, will be on display at the Fort Worth Museum of Science and History
            </li>
            <li>The reactor uses a specific strain of algae called chlorella vulgaris, which is claimed to soak up much
                more CO2 than any other plant.</li>
        </ul>

        <h2 style="font-family: 'Oswald', sans-serif; font-size:120%; color:orange;">Algae in Biofuel making:</h2>
        <p style="font-size:120%;">
            The natural oil made by microalgae is in the form of tricylglycerol, which is the right kind of oil for
            producing biodiesel.</p>


        <div class="col-md-4  p-4 mx-auto my-3">
            <img src="articles-img/1.6.jpg" class="img-fluid" alt="...">
        </div>


        <div class="row">
            <div class="col-md-4  p-4 mx-auto my-1">
                <img src="articles-img/1.8.jpg" class="img-fluid" alt="...">
            </div>
            <div class="col-md-4  p-4 mx-auto my-1">
                <img src="articles-img/1.9.jpg" class="img-fluid" alt="...">
            </div>
            <!-- <div class="col-md-4  p-4 mx-auto my-3"> -->
            <!-- <img src="articles-img/1.4.jpg" alt="..."> -->
            <!-- </div> -->
        </div>
        <h3><strong style="color:orange;">Elon Musk’s donating $100 Million Prize Is for Removing Carbon Dioxide from air.</strong></h3>

        <p style="font-size:120%;">
            Intergovernmental Panel on Climate Change now estimates that we will need to be pulling somewhere in the
            range of three to seven gigatons of CO2 out of the atmosphere every year by 2050, and up to 15 gigatons by
            the end of the century if we want to meet the goal of limiting warming to 1.5° C.</p>

        <br>
        <strong>
            <p>Written By : <br>
            Posted On : 21/03/2021 </p>
        </strong>

        <br>

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