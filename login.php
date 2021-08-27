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

    <title>Login</title>
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="icon" href="assets/slidder_images/12b.png" type="image/png" sizes="16x16">
</head>

<body>



    <!-- Header -->
    <header id="header">
        <div class="logo">
            <img src="assets/slidder_images/12b.png"></img>
        </div>
        <a href="#menu">Menu</a>
    </header>




    <nav id="menu">
        <ul class="links">
            <li><a href="index.php">Home</a></li>
            <li><a href="our_team.php">Our Team</a></li>
            <li><a href="article_final.php">Articles</a></li>
            <li><a href="#">Podcasts</a></li>
            <li><a href="videos_page.php">Videos</a></li>
            <li><a href="contactus_form.php">Contact Us</a></li>
            
            <?php
		session_start();
		if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)
		{
		echo' <div class="btn btn-outline-success ml-2 mx-2" ><a href="post_menu.php"> POST SOMETHING </a></div>';
		echo' <div class="btn btn-outline-success ml-2" data-toggle="modal" > '.$_SESSION['username'] .'</div>
		<li><a href="#">Log Out</a></li> ';
		}
		else{
		echo '<li><a href="login.php">Login</a></li>';
		}
	?>
            
            
            
            
            


        </ul>
    </nav>








    <!-- One -->
    <section id="One" class="wrapper style3">
        <div class="inner">
            <header class="align-center">
                <h2>Login Here</h2>

            </header>
        </div>
    </section>


    <div class="container my-5" >



        <form class="row g-3" action="/final/partials/_handle_login.php" method="post">
            <div class="mb-3">
                <label for="validationDefault01" class="form-label">Email Address</label>
                <input type="text" class="form-control" id="validationDefault01" name="loginEmail"  required>
            </div>


            <div class="mb-3">
                <label for="validationDefault02" class="form-label">Password</label>
                <input type="password" class="form-control" id="validationDefault02" name="loginPass"  required>
            </div>



            <button type="submit" class="btn btn-primary">Submit</button>




        </form>











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