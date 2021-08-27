<?php

include('partials/connection.php');
$showError= "false";

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/main.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">


    <title>Inspire-The Science Club of NITR</title>
    <link rel="icon" href="assets/slidder_images/12b.png" type="image/png" sizes="16x16">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=RocknRoll+One&display=swap" rel="stylesheet">
</head>

<body>




    <?php
   
         include('partials/header.php');
   
    ?>


    <!-- Nav -->
    <nav id="menu">

        <?php

        include('partials/navbar_menu.php') ;

    ?>

    </nav>












    <!-- Banner -->
    <section class="banner full">
        <article>
            <img src="assets/slidder/inspire1.jpg" alt="" />



            <!-- <div class="inner"> -->
            <!-- <header> -->
            <!-- <p>A free responsive web site template by <a href="https://templated.co">TEMPLATED</a></p> -->
            <!--                      -->
            <!-- </header> -->
            <!-- </div> -->
        </article>
        <article>
            <img src="assets/slidder/nit.jpg" alt="" />
            <!-- <div class="inner"> -->
            <!-- <header> -->
            <!-- <p>Lorem ipsum dolor sit amet nullam feugiat</p> -->
            <!-- <h2>Magna etiam</h2> -->
            <!-- </header> -->
            <!-- </div> -->
        </article>
        <article>
            <img src="assets/slidder/block.jpg" alt="" />
            <!-- <div class="inner"> -->
            <!-- <header> -->
            <!-- <p>Sed cursus aliuam veroeros lorem ipsum nullam</p> -->

            <!-- </header> -->
            <!-- </div> -->
        </article>
        <article>
            <img src="assets/slidder/nit2.jpg" alt="" />
            <!-- <div class="inner"> -->
            <!-- <header> -->
            <!-- <p>Adipiscing lorem ipsum feugiat sed phasellus consequat</p> -->
            <!-- <h2>Etiam feugiat</h2> -->
            <!-- </header> -->
            <!-- </div> -->
        </article>

        <article>
            <img src="assets/slidder/sac.jpg" alt="" />
            <!-- <div class="inner"> -->
            <!-- <header> -->
            <!-- <p>Adipiscing lorem ipsum feugiat sed phasellus consequat</p> -->
            <!-- <h2>Etiam feugiat</h2> -->
            <!-- </header> -->
            <!-- </div> -->
        </article>
    </section>








    <div class="page-header " style="background-color:#8ef3b4">
        <div class="row">
            <div class="col-md-7 pd-4">
                <div class="container m-4" style="font-family: 'RocknRoll One', sans-serif; font-size:170%; ">
                    <center>
                        <h1>ABOUT US<h1>
                    </center>
                </div>
                <div class="container my-5 pd-4"
                    style="font-family: 'RocknRoll One', sans-serif; font-size:101%; color:orange;">
                    <h2>"Science is simply the word we use to describe a method of organising our curiosity".
                        <strong>INSPIRE</strong> which stands for <strong>INNOVATION FOR SCIENTIFIC PROSPERITY IN
                            INTELLECTUALITY,
                            RESEARCH AND
                            EDUCATION</strong>
                        ,aims at promoting inquisitiveness among the students and inculcate science temper among them as
                        well as
                        gives a platform to students who want to pursue scientific career in future.
                        Being the only science club of NITR we always target to get one million original
                        ideas/innovations rotted in
                        science and societal applications to faster in culture of creativity and innovative thoughts
                        among the
                        school students and students of NITR.
                        We always do out best to put latest scientific research into teaching and inspire students
                        invention and
                        creativity with realistic results of scientific research in order to promote better teaching
                        quality and add
                        great vitality in teaching.
                    </h2>
                </div>
            </div>
            <div class="col-md-5">
                <div class="noti-back" style="box-shadow: 5px  white;">
                    <div class="card m-4 ">
                        <div class="card-header text-center bg-dark text-danger display-6">Notifications</div>
                        <div class="card-body py-3 noti--part">
                            <ul>
                                <li><a href="1/CALENDAR 2021.pdf">
                                        <div class="badge bg-warning text-dark">New</div>
                                        <div class="text-success">Click Here to view the Inspire Official Calendar</div>
                                        <a></li>
                                <br>
                                <li><a
                                        href="https://www.facebook.com/pages/category/Science-Website/Inspirenitr-109972063893357/">
                                        <div class="badge bg-warning text-dark">New</div>
                                        <div class="text-danger">Click Here to visit our official Facebook page</div>
                                    </a></li><br>
                                <li><a href="https://instagram.com/inspire.nitr?igshid=4qx8r5w3xiyw">
                                        <div class="badge bg-warning text-dark">New</div>
                                        <div class="text-warning">Click Here to visit our official Instagram page </div>
                                    </a></li><br>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <?php
            $sql=  "SELECT * FROM quotes";
            $result = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_assoc($result))
            {
                    $nameee=$row['namee'];
                    $quotee=$row['quote'];
                    

                    echo ' <section id="two" class="wrapper style3">
                        <div class="inner">
                            <header class="align-center">
                                <p><h1>'.$quotee  .'</h1></p>
                                <h2>'. $nameee .'</h2>
                            </header>
                        </div>  
                    </section>';

            }
    ?>








    <div class="page-header " style="background-color:#f3bd4f">
        <div class="row">
            <div class="col-md-5">
                <div class="container my-5 pd-2">
                    <br><br>
                    <video width="500" height="250" src="assets/v3.mp4" controls></video>
                </div>
            </div>
            <div class="col-md-7 pd-4">
                <div class="container m-4" style="font-family: 'RocknRoll One', sans-serif; font-size:170%; ">
                    <center>
                        <h1>OBJECTIVES OF OUR CLUB<h1>
                    </center>
                </div>
                <div class="container my-5 pd-4" style="font-family: 'RocknRoll One', sans-serif; font-size:101%; ">

                    <div>
                        <ul>
                            <li>To promote inquisitiveness among the students and inculcate science temper among them.
                            </li>
                            <li>It will give a platform to students who want to pursue scientific career in future.</li>
                            <li>To encourage, motivate and enquire the students in applications of science and its
                                influence
                                on the society.</li>
                            <li>To encourage students to participate in activities organized in the club such as group
                                discussions, seminar, lectures etc. The lectures will be given by our club members.</li>
                            <li>To target one million original ideas/innovations rotted in science and societal
                                applications
                                to faster in culture of creativity and innovative thoughts among the school students and
                                students of NITR.</li>
                            <li>To put latest scientific research into teaching and inspire students invention and
                                creativity with realistic results of scientific research in order to promote better
                                teaching quality
                                and add great vitality in teaching.</li>
                            <li>We prepare for special and fascinating topics in basic science and conduct workshops,
                                discuss explicitly with all which will provoke new scientific thought.</li>
                            <li>To discuss the latest scientific processes like Rocket science, Missile technology,
                                launching of Chandrayaan-2 etc.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>







    <div class="container-fluid py-5 " style="background-color:#a7f567">

        <h2 class="text-center p-4 " style="font-family: 'RocknRoll One', sans-serif; font-size:200%; color:blue">
            OUR FOUNDERS</h2>

        <center>
            <div class="row mx-auto">

                <div class="card mx-3 my-3 mx-auto" style="width: 15rem; border-radius:10px;">
                    <img class="card-img-top" src="images/founder/1.jpg" alt="Card image cap">
                    <div class="card-body">
                        <div class="card-text">
                            <h3 style="font-family: 'RocknRoll One', sans-serif; font-size:110%;"> Pulak Chandra Patra
                            </h3>
                            <p>Integrated MSc,Physics</p>
                            <p>(2017-2022)</p>
                            <p>Ex- President, Inspire Club</p>



                        </div>
                    </div>
                </div>




                <div class="card mx-3 my-3 mx-auto" style="width: 15rem; border-radius:10px;">
                    <img class="card-img-top" src="images/founder/2.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">
                        <h3 style="font-family: 'RocknRoll One', sans-serif; font-size:110%;"> Kuldeep Bhanja
                        </h3>
                        <p>Integrated MSc, Physics</p>
                        <p>(2017-2022)</p>
                        <p>Ex- Treasurer, Inspire Club</p>

                    </div>
                </div>



                <div class="card mx-3 my-3 mx-auto" style="width: 15rem; border-radius:10px;">
                    <img class="card-img-top" src="images/founder/3.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">
                        <h3 style="font-family: 'RocknRoll One', sans-serif; font-size:100%;"> Shubhranshu Sekhar Sethi
                        </h3>
                        <p>B.Tech Chemical Engineering (2017-21)</p>
                        <p>Ex- Secretary, Inspire Club</p>

                        </p>
                    </div>
                </div>


                <div class="card mx-3 my-3 mx-auto" style="width: 15rem; border-radius:10px;">
                    <img class="card-img-top" src="images/founder/4.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">
                        <h3 style="font-family: 'RocknRoll One', sans-serif; font-size:110%;"> Dinesh Behera
                        </h3>
                        <p>Integrated MSc, Physics</p>
                        <p>(2017-2022)</p>
                        <p>Ex- Advisor, Inspire Club</p>


                        </p>
                    </div>
                </div>


                <div class="card mx-3 my-3 mx-auto" style="width: 15rem; border-radius:10px;">
                    <img class="card-img-top pd-0" src="images/founder/5.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">

                        <h3 style="font-family: 'RocknRoll One', sans-serif; font-size:110%;"> Bhavesh Gupta
                        </h3>
                        <p>Integrated MSc, Physics</p>
                        <p>(2017-2022)</p>
                        <p>Ex- Vice-President, Inspire Club</p>



                        </p>
                    </div>
                </div>

                <div class="card mx-3 my-3 mx-auto" style="width: 15rem; border-radius:10px;">
                    <img class="card-img-top pd-0" src="images/founder/6.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">
                        <h3 style="font-family: 'RocknRoll One', sans-serif; font-size:110%;"> Sambeet Kar
                        </h3>
                        <p>Integrated MSc, Physics</p>
                        <p>(2017-2022)</p>
                        <p>Ex- Advisor,Inspire Club</p>
                        </p>
                    </div>
                </div>


            </div>


        </center>












    </div>















    <div id="our_team">
        <section class="text-gray-700 body-font">
            <div class="container px-5 py-20 mx-auto">
                <div class="flex flex-col text-center w-full mb-4">
                    <h1 class="sm:text-4xl text-4xl font-large title-font mb-4 text-yellow-900">Our Team</h1>
                    <!-- <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn -->
                    <!-- asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them. -->
                    <!-- </p> -->
                </div>
                <div class="flex flex-wrap -m-2">
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                        <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                            <a href="1/1.jpg"><img alt="team"
                                    class="w-20 h-20 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                                    src="1/1.jpg"></a>
                            <div class="flex-grow">
                                <h2 class="text-gray-900 title-font font-medium">Vijay</h2>
                                <p class="text-red-800 title-font font-medium">President</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                        <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                            <a href="1/2.jpg"><img alt="team"
                                    class="w-20 h-20 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                                    src="1/2.jpg"></a>
                            <div class="flex-grow">
                                <h2 class="text-gray-900 title-font font-medium">Prayoush</h2>
                                <p class="text-red-800 title-font font-medium">Vice-President</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                        <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                            <a href="1/3.jpeg"><img alt="team"
                                    class="w-20 h-20 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                                    src="1/3.jpeg"></a>
                            <div class="flex-grow">
                                <h2 class="text-gray-900 title-font font-medium">Nikhil</h2>
                                <p class="text-red-800 title-font font-medium">Secretary</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                        <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                            <a href="1/4.jpg"><img alt="team"
                                    class="w-20 h-20 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                                    src="1/4.jpg"></a>
                            <div class="flex-grow">
                                <h2 class="text-gray-900 title-font font-medium">Pravasi</h2>
                                <p class="text-red-800 title-font font-medium">Treasurer</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                        <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                            <a href="1/5.jpg"><img alt="team"
                                    class="w-20 h-20 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                                    src="1/5.jpg"></a>
                            <div class="flex-grow">
                                <h2 class="text-gray-900 title-font font-medium">Ankit</h2>
                                <p class="text-red-800 title-font font-medium">HR Manager</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                        <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                            <a href="1/8.jpg"><img alt="team"
                                    class="w-20 h-20 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                                    src="1/8.jpg"></a>
                            <div class="flex-grow">
                                <h2 class="text-gray-900 title-font font-medium">Spandita</h2>
                                <p class="text-red-800 title-font font-medium">Internal Activities Manager</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                        <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                            <a href="1/9.jpg"><img alt="team"
                                    class="w-20 h-20 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                                    src="1/9.jpg"></a>
                            <div class="flex-grow">
                                <h2 class="text-gray-900 title-font font-medium">Atul</h2>
                                <p class="text-red-800 title-font font-medium">Pubilcity Team Head</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                        <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                            <a href="1/10.jpg"><img alt="team"
                                    class="w-20 h-20 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                                    src="1/10.jpg"></a>
                            <div class="flex-grow">
                                <h2 class="text-gray-900 title-font font-medium">Soumyashree</h2>
                                <p class="text-red-800 title-font font-medium">Content Team Head</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                        <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                            <a href="1/12.jpg"><img alt="team"
                                    class="w-20 h-20 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                                    src="1/12.jpg"></a>
                            <div class="flex-grow">
                                <h2 class="text-gray-900 title-font font-medium">Shuvam</h2>
                                <p class="text-red-800 title-font font-medium">Design Team Head</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                        <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                            <a href="1/11.jpg"><img alt="team"
                                    class="w-20 h-20 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                                    src="1/11.jpg"></a>
                            <div class="flex-grow">
                                <h2 class="text-gray-900 title-font font-medium">Jagannath</h2>
                                <p class="text-red-800 title-font font-medium">Technical Team Head</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>





    <?php
            include('partials/contact_us.php');
        ?>





    <?php

     include('partials/footer.php');

    ?>











    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"
        integrity="sha512-ZKNVEa7gi0Dz4Rq9jXcySgcPiK+5f01CqW+ZoKLLKr9VMXuCsw3RjWiv8ZpIOa0hxO79np7Ec8DDWALM0bDOaQ=="
        crossorigin="anonymous"></script>


    <script>
    var myCarousel = document.querySelector('#myCarousel')
    var carousel = new bootstrap.Carousel(myCarousel, {
        interval: 2000,
        wrap: false
    })
    </script>

    <!-- < !--Optional JavaScript; choose one of the two!-->

    <!-- < !--Option 1: Bootstrap Bundle with Popper-->
    <!-- < script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" -->
    <!-- integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" -->
    <!-- crossorigin="anonymous"> -->
    <!-- </script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>