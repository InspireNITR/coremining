<?php

include('partials/connection.php');



if(isset($_POST['update']))
{


    $f_name=$_POST["fname"];
    $email_id= $_POST["emailid"];
    $ideas= $_POST["ideas"];
    $any_queries= $_POST["queries"];
    

    $sql = "INSERT INTO contactus_form ( `fname`,`email_id`, `ideas`,`queries`) VALUES ( '$f_name', '$email_id',
'$ideas','$any_queries')";
    $result= mysqli_query($conn,$sql);

    if($result)
        {
        
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
             <strong>Success!</strong> Your data has been successfully inserted
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>';
        }

    else{
             echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> We are facing some technical issue. Try again later
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }

  
  
  
  

}


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

    <title>Contact Us</title>
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
                <h2>CONTACT US</h2>

            </header>
        </div>
    </section>










   


    <div class=" container mx-auto my-5">







        <form action="contactus_form.php" method="post">



            <div class="mb-3">
                <label for="validationDefault01" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="validationDefault01" name="fname"
                    placeholder="Enter Your Full Name" required>
            </div>

            <div class="mb-3">
                <label for="validationDefault01" class="form-label">Email Address</label>
                <input type="text" class="form-control" id="validationDefault01" name="emailid"
                    placeholder="Enter Your Email Address" required>
            </div>

            <div class="mb-3">
                <label for="validationDefault01" class="form-label">Share your ideas with us</label>
                <textarea class="form-control" id="validationDefault01" name="ideas" rows="8" required></textarea>
            </div>


            <div class="mb-3">
                <label for="validationDefault01" class="form-label">Any Queries</label>
                <textarea class="form-control" id="validationDefault01" name="queries" rows="3" required></textarea>
            </div>






            <button type="submit" name="update" class="btn btn-primary">Submit</button>
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