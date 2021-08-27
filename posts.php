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

    <title>Post Something</title>
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="icon" href="assets/slidder_images/12b.png" type="image/png" sizes="16x16">
</head>

<body>



    <!-- Header -->
    <header id="header">

        <?php
    
    session_start();
        
    ?>

        <div class="logo">
            <img src="assets/slidder_images/12b.png"></img>
        </div>
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
            <header class="align-center">
                <h2>UPDATE YOUR POSTS AND QUOTES</h2>

            </header>
        </div>
    </section>





    <div class="mx-auto" style="width: 65%" ;>
        <div class="row ">


            <div class="card m-2 my-5 " style="width: 22rem;">
                <img src="menu/5.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <!-- <h5 class="card-title">Card title</h5> -->
                    <!-- <p class="card-text">Some quick example text to build on 
                            the card title and make up the bulk of the -->
                    <!-- card's content.</p> -->
                    <center><a href="article.php" class="btn btn-primary">UPLOAD AN ARTICLE</a></center>
                </div>
            </div>


            <div class="card m-2 my-5" style="width: 22rem;">
                <img src="menu/6.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <!-- <h5 class="card-title">Card title</h5> -->
                    <!-- <p class="card-text">Some quick example text to build on 
                the card title and make up the bulk of the -->
                    <!-- card's content.</p> -->
                    <center><a href="video.php" class="btn btn-primary">UPLOAD A VIDEO</a></center>
                </div>
            </div>

            <div class="card m-2 my-5" style="width: 22rem;">
                <img src="menu/7.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <!-- <h5 class="card-title">Card title</h5> -->
                    <!-- <p class="card-text">Some quick example text to build on 
                             the card title and make up the bulk of the -->
                    <!-- card's content.</p> -->
                    <center><a href="quote.php" class="btn btn-primary">UPDATE THE QUOTE</a></center>
                </div>
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