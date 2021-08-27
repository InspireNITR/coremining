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
               font-family: 'Oswald', sans-serif; font-size:200%; color:blue;">
            <u>INVISIBLE WATER</u>
        </h1>



        <div class="col-md-8  p-4 mx-auto my-3">
            <img src="articles-img/5.1.jpg" class="img-fluid" alt="...">
        </div>





        <p><b style="color:orange;">INVISIBLE WATER</b> is a fun Science experiment with Water this is a scientific trick to make water
            disappear
            from a cup using a polymer with a very particular property. By the specific property of polymer we are able
            perform this activity which will leads to let students know more about the polymers.</p>

        <h3 style="color:green;"><b> Materials In the box</b></h3>

        <ul>
            <li>Paper cups </li>
            <li>Transparent bowls</li>
            <li>Mixing spoons</li>
            <li>Food colors</li>
            <li>Gel polymer powder</li>
            <li>Weighing Scale</li>
            <li>Water</li>
            <li>10 ml measuring Cylinder</li>
        </ul>

        <p>These are the materials we will be needing during the time of experiment.</p>



        <p>So lets have a look on the procedure of the experiment and the precautions we should take to do the
            experiment.</p>


        <p>First we have to mix few drop of food color in the water so as to distinguish the difference.
            Hence we will be filling 5 bowls with different water color respectively. After that some paper cups were
            taken and the water color was poured into that cup. Now, 8 grams of gel polymer powder was weigh in the
            paper cup.<br>
            Fill the paper cup filled with the gel polymer powder. And 10ml of colored water was poured uniformly in the
            paper cup.<br>
            Now the paper was invert and it was tapped. In this experiment, we add a gel polymer to the color water. The
            gel polymer used is Sodium Polyacrylate. It is also known as water lock. It can absorb water as much as 200
            to 300 times of its actual mass. When we add the gel polymer to the solution, it absorbs all the moisture in
            the solution converting it into a gel like form.<br>
            If you keep on adding water, you’ll notice that the gel polymer will grow rather than become a gel. A gel
            polymer can grow up to 100 times it original size.<br>
            It is also used as thickening agents, laundry detergents, coatings, artificial snow and more. When salt is
            added to the blob, the salt makes the gel release water. The gel collapses and returns back to the liquid
            form.<br>

            Now a days the problem of water scarcity is known to every one. So its time to conserve water unless the day
            is not so far when we will be facing problems like not having a drop of water even for drinking. It’s the
            high time to move our attention to such problem. So this experiment can be done in large scale like in acres
            of area. It can be designed into to a most efficient project for conserving water.<br>
        </p>
        <h4>Source—
            Zlife education
            Wikipedia
            </h4>

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