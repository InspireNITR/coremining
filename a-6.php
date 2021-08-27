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
            <u>COVID – 19 & MENTAL STATE</u>
        </h1>



        <div class="col-md-8  p-4 mx-auto my-3">
            <img src="articles-img/6.1.png" class="img-fluid" alt="...">
        </div>







        <p>As the COVID-19 pandemic rampages on through much of the civilized world, it’s not an overstatement to
            mention that our lives have turned the wrong way up within the past few months. The COVID-19 pandemic has
            already gained its place on the dark side of the planet history for a spread of reasons: sudden onset, speed
            of worldwide transmission, mistakes in recognition and management, politically inspired neglect or
            minimizations. As a species, we've been collectively forced to get back the hills – to abandon all illusions
            of control as we are reminded almost daily of the fragility of our existence. A timely reminder, that.
            We are now handling two different contagions – the virus and negative emotions that follow.
            <br><br>COVID -19 affects psychological state on an unprecedented scale. People all over the planet are
            grappling
            with fear, anxiety and insecurity over their survival. The CORONA Virus is often transferred from one person
            to a different person in a very rapid way. So imagine, people are being fearful, distrustful, suspicious and
            even in some cases hostile towards their fellow citizenry. It’s not about the much-needed social distancing
            measures. It is pertaining to the extremities - racism and xenophobia.
        </p>
        <p>A survey by Indian Psychiatric Society stated that there has been a rise in psychological state related cases
            by 20% post lockdown in India. The Lancet recently performed a study on this and located that being in
            quarantine can have an enormous psychological impact leading to a variety of psychological state concerns
            starting from anxiety and anger to sleep disturbances, depression and Post Traumatic Stress Disorder (PTSD).
        </p>


        <p>It is consistent with a psychotherapist, who has clients all over the world, as he has told “I am seeing an
            outsized increase in new clients coming to me for depression, anxiety and panic related issues thanks to the
            pandemic”</p>

        <p><b>Macro-levels of humanity apart, people’s psychological state are getting affected on the individual level in
            India in the following ways:</b></p>

        <ul>
            <li>Anxiety over the closure of companies , loss of jobs, worsening financial conditions</li>
            <li>Panic over possibly running out of food and essential supplies</li>
            <li>Obsessive worry and negative thoughts about their loved ones potentially contracting the virus</li>
            <li>Obsession for checking the news for updates in every five minutes, feeling anxious once they aren't
                ready to check the news</li>
            <li>Confusion over when the lockdown in India will end and once they can revisit to their normal routines.
            </li>
            <li>Adjustment disorders with reference to staying reception and doing all the household chores by
                themselves (referring to people who were hiring maids and cooks earlier)</li>
            <li>Relationship problems as a results of being stuck reception with relations or spouse in the least times;
                resulting in greater fights, conflicts and stress (this is particularly applicable to people who didn't
                have good relationships with one another from the first place)</li>
            <li>Sense of despair, doom and gloom about the longer term of humanity</li>
            <li>Over - indulgence in conspiracy theories and fantasies about the pandemic</li>
            <li>The stock exchange crash and therefore the collapse of world’s financial system </li>
            <li>Those families who have lost their loved ones during this pandemic, their financial and mental support.
            </li>
        </ul>


        <p>To counter helplessness, we find ourselves overworking, making poor rash decisions and resulting in
            disheartening outcomes. We fall under vicious cycles of exhausting ourselves, further weakening our mental
            well-being. For the healthcare workers (doctors, nurses etc.) who are working long hours under tremendous
            stress handling the crisis, it'll take a terrible toll on their physical, mental and emotional health, and
            well being.</p>

        <p>Sadly, most folks don’t concentrate to any of it and check out to figure through it. If we would like to urge
            through this we'd like to start out practicing self-care. Protecting yourself from a psychological state
            illness is simply as important as protecting yourself from the virus and analyzing things. As said, mental
            toughness is way superior to physical power</p>



        <br>
        <strong>
            <p>Written By : Anshuman Moharana <br>
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