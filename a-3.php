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
               font-family: 'Oswald', sans-serif; font-size:300%; color:blue;">
            <u>BLOCKCHAIN</u>
        </h1>



        <div class="col-md-8  p-4 mx-auto my-3">
            <img src="articles-img/3.3.jpg" class="img-fluid" alt="...">
        </div>


        <p style="font-family: 'Oswald', sans-serif; font-size:120%;">
            Blockchain, a potential bedrock of the worldwide record-keeping systems, can be a revolutionary breakthrough
            in this world full of mastermind hackers and cyber threats. Blockchain technology is poised to change IT in
            much the same way open-source software did a quarter century ago. Based on a peer-to-peer topology, it is a
            distributed ledger technology (DLT) that helps data to be stored globally under thousand of servers- while
            letting anyone on the network see everyone else’s entry in near real time.</p>

        <p><b style="color:orange;">HISTORY</b>- The idea behind blockchain technology was described as early as 1991 when research scientists
            Stuart Haber and W. Scott Stornetta introduced a computationally practical solution for time stamping
            digital documents for betterment of non-tampering. They used a cryptographically secured chain of blocks to
            store the time stamped docs. However this technology went unused and the patenet lapsed in 2004. Then in
            2004 a system was introduced called RPoW, reusable proof of work. The system worked by receiving a
            non-exchangeable or a non-fungible Hashcash based proof of work token and in return created an RSA signed
            token that could then be transferred from person to person. RPoW can be considered as an early prototype in
            the history of cryptocurrencies. In late 2008 a white paper introduced a decentralized peer-to-peer
            electronic cash system called bitcoin, was posted to a cryptography mailing list by any group or person
            using the pseudonym Satoshi Nakamoto. In 2014 Blockchain technology is separated from the currency and its
            potential for other financial, inter-organisational transactions is explored. Blockchain 2.0 is born,
            referring to applications beyond currency.The Ethereum blockchain system introduces computer programs into
            the blocks, representing financial instruments such as bonds. These become known as smart contracts.</p>


        <div class="col-md-8  p-4 mx-auto my-3">
            <img src="articles-img/3.2.png" class="img-fluid" alt="...">
        </div>

        <p><b style="color:orange;">Bitcoin’s role</b> - Posting their seminal whitepaper in 2008 and launching the initial code in 2009,
            Nakamoto created bitcoin to be a form of cash that could be sent peer-to-peer without the need for a central
            bank or other authority to operate and maintain the ledger, much as how physical cash can be. While it
            wasn’t the first online currency to be proposed, the bitcoin proposal solved several problems in the field
            and has been by far the most successful version. The engine that runs the bitcoin ledger that Nakamoto
            designed is called the blockchain; the original and largest blockchain is the one that still orchestrates
            bitcoin transactions today.
        </p>

        <p>The second generation - Other blockchains include those that run the several hundred “altcoins” – other
            similar currency projects with different rules – as well as truly different applications, such as:</p>

        <p><b style="color:orange;">Ethereum:</b> the second largest blockchain implementation after bitcoin. Ethereum distributes a currency called
            ether, but also allows for the storage and operation of computer code, allowing for smart contracts.</p>
        <p><b style="color:orange;">Ripple:</b> a real-time gross settlement system, currency exchange and remittance network, based on a public ledger.</p>



        <p>Blockchain was early like internet in 1990.It is very much new to us and people were not much familiar with it. It was as fundamental and parallel to internet which can potentially change our perspective of safety of record keeping systems. Imagine Blockchain as a ledger keeping entries. Let’s say we have one universal ledger and all nodes participate in some way to that ledger. Nodes mean to different mediocre like banks, government, insurance companies etc all that are responsible for a successful transaction. Blockchain is protected by best cryptography algorithms available, which makes it very difficult to hack. Every block added is immutably linked to the last block and that block is linked to last block of itself. If anyone has to change one transaction or a block he has to change all the blocks that is the entire chain, which creates fiction, therefore super security driven by consensus, driven by immutability. There is no central core to maintain Blockchain, it is maintained by entire bunch of people. It changes the concept of trust from centralized trust to distributed trust among people. For example Agriculture is 16% of GDP of India and if we want to transform our country we have to look into agriculture. India has the highest number in agricultural land in the world. But in all these numbers there is this number, 23 number of farmers that kill themselves daily in India because of many reasons like loans, small lands, less resources for scientific agriculture etc. Blockchain can be the ideal technology to create fractional ownership among farmers helping them financially and can take care of the data entries like land owners, how much money spent etc very well. It largely reduces the chances of frauding the farmers’ important data and keep them safe easily. Another example of Energy distribution in rural areas, some areas are producing excessive power while some are producing less. Blockchain helps to maintain power distribution even, throughout the areas. The houses can be linked through solar panels and it will automatically distribute the energy in the needy areas. Much like these Blockchain helps in consolidation of small plots into a much larger plot. These examples are just a few from a wide range of profits from Blockchain.</p>



        <p>Blockchain adoption in India is reaching immense growth and it has a very bright future. Many Indian state governments like Telangana, Kerala, Karnataka, Andhra Pradesh and Maharashtra are vigorously supporting blockchain startups and projects and also organizing conferences on the same. There has been a considerable shift from transacting physical payments to digital currency through platforms like Paytm, Googlepay etc. Indians are gradually understanding the importance of digital currency and leveraging the seamless transactions and a cashless approach that digital currency offers. Blockchsin has paved its way into various big economical sectors like Banking and Finance sectors, healthcare, retail and logistics and is making its presence quite evident and profound</p>

        <p><b style="color:orange;">Possible challenges </b>– Although the blockchain technology is extremely promising it still faces a few challenges in India. The regulations and compliance on the blockchain are still vague. The Indian government is yet to implement defined regulations on blockchain technology. The RBI and tax authorities are not in favour of cryptocurrencies and ICOs because of the issues related to the tax evasion and also lack of control of the regulators over the digital currencies. Currently testing or adoption of blockchain applications is still limited to cryptocurrencies. A successful large scale adoption of POC(proof of concept) requires the banks to hire blockchain experts or data scientists which is slightly costly as compared to hiring software developers, making its adoption difficult.</p>


        <center><b style="color:green;">BLOCKCHAIN IS THE SOLUTION, WHAT IS THE PROBLEM?</b></center>









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