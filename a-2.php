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
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Chango&family=Oswald&display=swap"
        rel="stylesheet">

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

        <h1 class="text-center" style="font-family: 'Anton', sans-serif;
font-family: 'Chango', cursive;
font-family: 'Oswald', sans-serif; color: blue; font-size:300%">
            <u>ELECTRIC CARS</u>
        </h1>

        <div class="row">

            <div class="col-md-8  p-4 mx-auto my-3">
                <img src="articles-img/2.1.jpg" class="img-fluid" alt="...">
            </div>



        </div>

        <strong>
            
            <h3 style="color:green;">ABSTRACT</h3>
        </strong>


        <p>An electric car also called battery electric car is a plug –in electric automobile that is propelled by an
            electric motors, using a rechargeable battery which is recharge by electricity. Charging an electric car can
            be done by a variety of methods in the charging stations, these charging stations are mainly located in
            house and public areas. We have two types of electric vehicle: hybrid and pure electric. Electric car comes
            with different components which help it operation.</p>



        <h3 style="color:orange;">INTRODUCTION TO ELECTRIC CAR</h3>

        <p>An electric car also called battery electric car is a plug –in electric automobile that is propelled by an
            electric motors, using a rechargeable battery which is recharge by electricity. From 2008, manufacturing of
            electric car comes into play due to many issues arising such as; high fuel consumption, emission rate,
            maintenance and so on.</p>

        <p>Charging an electric car can be done by a variety of methods in the charging stations, these charging
            stations are mainly located in house and public areas. The two all-time best selling electric cars, Nissan
            Leaf and the Tesla Model S, have EPA rated ranges reaching up to 151 mi and 335 mi respectively. Electric
            car are a variety of electric vehicle. The term electric vehicle implies any vehicle that uses electric
            motors for propulsion while electric car refers to highway-capable automobiles powered by electricity. An
            electric vehicle may be powered through a collector system by electricity from off-vehicle sources or may be
            by a self-contained with a battery, solar panels or an electric generator to convert fuel to electricity.
        </p>


        <h3 style="color:orange;">HISTORY OF ELECTRIC CARS</h3>

        <p>Electric cars are nothing new, around 1900s interest in motor vehicles increases and around then there were
            about twice as many electric cars on the road than petrol/diesel cars. Only in 1920s that interest in
            electric vehicle dwindled due to reduced speed and low travelling range.</p>


        <p>Henry Ford was the one who put the nail in the electric car coffin when his company began to mass-produce the
            Model T. This slashed the price of petrol cars to about half of that an electric car and so in the early
            1900s almost all electric car manufacturers began to cease making them.</p>

        <p>Interest in electric cars returned following the energy crises of the 1970s and 80s; with the availability
            and price of oil being shown to be increasingly volatile. People could see the benefits of battery-powered
            cars. However electric vehicles were still losing out to the style and lower price of their petrol-fuelled
            cousins. In the 2000s, the development of hybrid vehicles, plus other fuel crises saw the technology adopted
            by larger numbers than before. As of September 2016, there were more than one million pure electric cars and
            vans owned globally.</p>

        <h3 style="color:orange;">How do electric cars work?</h3>

        <p>We have two types of electric vehicle: hybrid and pure electric.</p>

        <h4>Pure Electric car</h4>
        <p>It consists of rechargeable battery, controller and electric motor. The battery is powered. Then the
            controller converts DC to AC so it can be used by the motor. The motor then converts electrical energy to
            mechanical energy for the vehicle movement.</p>

        <h4>Hybrid electric car</h4>
        <p>The same technology exists in hybrid cars, alongside a small gasoline engine running a generator. This power
            the car at cruising speed and batteries provides extra power during acceleration.
        </p>

        <h3 style="color:orange;">Benefits of electric cars</h3>
        <ul>
            <li>No emission is release</li>
            <li>They offer a smooth drive with less effort</li>
            <li>They are cheaper to run</li>
            <li>Solves problem arising from non-renewable energy source</li>
            <li>Does not contribute to green house emission like petrol vehicles</li>
            <li>It is also eco-friendly.</li>
        </ul>

        <h3>Drawbacks of electric vehicles</h3>
        <ul>
            <li>It is affected by weather condition</li>
            <li>They normally take a longer time to charge depending on car and charger</li>
            <li>Charging points are not easily accessible</li>
        </ul>

        <h3 style="color:orange;">Electric vehicle Main Components</h3>

        <h4 style="color:green;">Motor</h4>

        <p>The motor converts electrical energy into kinetic energy that moves the wheel. The advantage of using the motor instead of an engine is numerous. The noise and vibration is minimized. The electric vehicle power train is smaller than the engine, thus providing lots of additional space for efficient vehicle design</p>

        <p>The motor also serves as an electric generator that converts the kinetic energy generated while in neutral gear into electric saved to the battery. Some of the Hyundai Motor Group’s EV’S are equipped with a mechanism that can control the levels of regenerative braking via paddle shifters on the steering wheel.</p>

        <h4 style="color:green;">Reducer</h4>

        <p>The reducer helps to easily convey the motor’s power to the wheel. But it carries the special name-reducer-for a reason. The motor has a far higher RPM than that of an internal combustion engine, so whereas the transmission changes the engine RPM to match the driving circumstances.</p>

        <h4 style="color:green;">Battery</h4>
        <p>The battery stores electrical energy which is equivalent to fuel tank which store fuel in petrol engine. The distance an EV can travel to is usually determine by the battery capacity. The higher the capacity the higher the distance travels and vice versa. Increasingly the capacity of the battery now depends because the increase would cause increase in the time needed to be stopping at each charging stations.</p>
        <p>Thanks to the recent advancement in battery technology, the more recent EV has a higher upgrade over the last models in terms of battery capacity and distance travel. The battery life which is the life span of the battery also increases.</p>

        <h4 style="color:green;">Battery Management System (BMS)</h4>
        <p>The BMS manage the battery cells so they can operate as if they are a single entity. The EV’s battery consists of as little as tens to as many as thousands of mini-cells and each cells needs to be in a nearly same condition to the other s to optimize the battery’s durability.</p>
        <p>Most often the BMS is built into battery’s body, though sometimes it is incorporated into the Electric Power Control Unit. The BMS mainly oversees the cell’s charge/discharge status, but when it sees a malfunctioning cell, it automatically adjusts the power status.</p>

        <h4 style="color:green;">Battery Heating System</h4>
        <p>In lower temperatures, the battery sees a decrease in both charging and speed. The battery heater exists to keep the battery within the normal temperature range and also maintaining the maximum distance to be cover. It also functions while charging to ensure efficiency of the charge.</p>

        <h4 style="color:green;">Electric Power Control Unit (EPCU)</h4>

        <p>The EPCU is an efficient integration of nearly all devices that control the flow of the electric power in the vehicle. It consists of the following;</p>
        <h5 style="color:green;">Inverter</h5>
        <p>The inverter converts the battery’s DC into AC which then is used to control the motor speed. It execute acceleration, deceleration.</p>

        <h5 style="color:green;">Low voltage DC-DC Converter</h5>
        <p>This helps to convert the high voltage electricity from the EV’S into low voltage and supplies it to the vehicle’s various electronic systems.</p>

        <h5 style="color:green;">Vehicle Control Unit</h5>
        <p>As the control tower of all electric power control systems in the vehicle, the VCU is arguably the most important part of EPCU. It oversees nearly all the vehicle’s power control mechanism.</p>

        <h4 style="color:orange;">Charge Port</h4>
        <p>The charge port allows the vehicle to connect to an external power supply which charges the traction battery pack.</p>

        <h3 style="color:orange;">CONCLUSION</h3>
        <p>From various manufacturers now producing electric car various development have evolved over time from the battery down to electric motor for propelling. However, the major challenging factor in it is the battery which is still expensive and easily discharged especially when raining. According to expert prediction some years to come electric car will dominate.</p>

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