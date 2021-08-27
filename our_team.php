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

    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <title>Our Team</title>
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
                <h2>Our Amazing Team</h2>

            </header>
        </div>
    </section>


    <div class="our_team2" style="background-color: #fdda94;">
        <div class="our_team">
            <section class="text-gray-700 body-font">
                <div class="container px-5 py-20 mx-auto">
                    <div class="flex flex-col text-center w-full mb-4">
                        <h1 class="sm:text-4xl text-4xl font-large title-font mb-4 text-yellow-900">POST HOLDERS</h1>
                        <!-- <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn -->
                        <!-- asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them. -->
                        <!-- </p> -->
                    </div>


                    <div class="row">
                        <div class="card mb-3 mx-2" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="1/1.jpg" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>NAME :</strong> Vijay Chawan </h5>
                                        <h5 class="card-text my-0"><strong>DEPARTMENT AND YEAR :</strong> PHYSICS AND
                                            ASTRONOMY/M.Sc 2nd Year
                                        </h5>
                                        <h5 class="card-text my-0"><strong>POST :</strong> PRESIDENT</h5>
                                        <h5 class="card-text my-0"><strong>SCIENCE RELATED SKILL :</strong>
                                            Writing and Critical Thinking</h5>
                                        <h5 class="card-text my-0"><strong>Three words to describe science
                                                :</strong>Observations, Experiments, Accuracy </h5>
                                        <h5 class="card-text my-0"><strong>Email : </strong>vijaysingh7197@gmail.com
                                        </h5>



                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-3 mx-2" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="1/2.jpg" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>NAME :</strong> Prayoush Kumar Nath</h5>
                                        <h5 class="card-text my-0"><strong>DEPARTMENT AND YEAR :</strong> Integrated
                                            M.Sc
                                            Chemistry/ 3rd Year</h5>
                                        <h5 class="card-text my-0"><strong>POST :</strong> Vice-President</h5>
                                        <h5 class="card-text my-0"><strong>SCIENCE RELATED SKILL
                                                :</strong>Programming,Cotent writing,Obesrving and analysing complex
                                            datas
                                        </h5>
                                        <h5 class="card-text my-0"><strong>Three words to describe science
                                                :</strong>Discuss,Observe and Analyze</h5>
                                        <h5 class="card-text my-0"><strong>Email : </strong>pradyoshnath2345@gmail.com
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-3 mx-2" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="1/3.jpeg" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>NAME :</strong>Nikhil Sahoo</h5>
                                        <h5 class="card-text my-0"><strong>DEPARTMENT AND YEAR :</strong> Food process
                                            Engineering / 3rd year</h5>
                                        <h5 class="card-text my-0"><strong>POST :</strong> Secretary</h5>
                                        <h5 class="card-text my-0"><strong>SCIENCE RELATED SKILL :</strong> Design,
                                            content
                                            writing and critical thinking</h5>
                                        <h5 class="card-text my-0"><strong>Three words to describe science
                                                :</strong>Intellectual, Practical, Fact</h5>
                                        <h5 class="card-text my-0"><strong>Email : </strong>nikbittu88@gmail.com</h5>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="card mb-3 mx-2" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="1/4.jpg" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>NAME :</strong>P.R Pravasi</h5>
                                        <h5 class="card-text my-0"><strong>DEPARTMENT AND YEAR :</strong>Food processing
                                            Engineering/3rd year</h5>
                                        <h5 class="card-text my-0"><strong>POST :</strong> Treasurer</h5>
                                        <h5 class="card-text my-0"><strong>SCIENCE RELATED SKILL :</strong> Critical
                                            thinking, Curosity,and questioning about science related topics</h5>
                                        <h5 class="card-text my-0"><strong>Three words to describe science
                                                :</strong>Observing,thinking and analysing</h5>
                                        <h5 class="card-text my-0"><strong>Email : </strong>pravasiprpravasi123@gmail.com</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-3 mx-2" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="1/5.jpg" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>NAME :</strong> Ankit Dey</h5>
                                        <h5 class="card-text my-0"><strong>DEPARTMENT AND YEAR :</strong> Food Process
                                            Engineering/3rd Year</h5>
                                        <h5 class="card-text my-0"><strong>POST :</strong> HR Manager</h5>
                                        <h5 class="card-text my-0"><strong>SCIENCE RELATED SKILL :</strong>
                                            Perseverance,Communicating,Observing</h5>
                                        <h5 class="card-text my-0"><strong>Three words to describe science
                                                :</strong>Profound, Statistical, Textual</h5>
                                        <h5 class="card-text my-0"><strong>Email : </strong>deyankit13@gmail.com</h5>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="card mb-3 mx-2" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="1/8.jpg" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>NAME :</strong> Spandita Bhoi</h5>
                                        <h5 class="card-text my-0"><strong>DEPARTMENT AND YEAR :</strong> Chemistry /
                                            3rd
                                            Year</h5>
                                        <h5 class="card-text my-0"><strong>POST :</strong> Internal Activities Team Head
                                        </h5>
                                        <h5 class="card-text my-0"><strong>SCIENCE RELATED SKILL :</strong>
                                            Observations,
                                            keen to do experiment and reading more science article</h5>
                                        <h5 class="card-text my-0"><strong>Three words to describe science
                                                :</strong>Imagination, experimentation and acknowledging</h5>
                                        <h5 class="card-text my-0"><strong>Email : </strong>bhoispandita222@gmail.com
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="card mb-3 mx-2" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="1/9.jpg" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>NAME :</strong> Atul Patel</h5>
                                        <h5 class="card-text my-0"><strong>DEPARTMENT AND YEAR :</strong>Chemical (dual
                                            degree)/2nd Year</h5>
                                        <h5 class="card-text my-0"><strong>POST :</strong> Pubilcity Team Head</h5>
                                        <h5 class="card-text my-0"><strong>SCIENCE RELATED SKILL :</strong> Good
                                            observation, measuring, predicting</h5>
                                        <h5 class="card-text my-0"><strong>Three words to describe science
                                                :</strong>Observation, Practical and Calculation
                                        </h5>
                                        <h5 class="card-text my-0"><strong>Email : </strong>atulpatel543214@gmail.com
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="card mb-3 mx-2" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="1/10.jpg" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>NAME :</strong> Soumyasree Sahoo</h5>
                                        <h5 class="card-text my-0"><strong>DEPARTMENT AND YEAR :</strong>Food processing
                                            Engineering/3rd year</h5>
                                        <h5 class="card-text my-0"><strong>POST :</strong> Content Team Head</h5>
                                        <h5 class="card-text my-0"><strong>SCIENCE RELATED SKILL :</strong> Good
                                            observation, measuring, predicting</h5>
                                        <h5 class="card-text my-0"><strong>Three words to describe science
                                                :</strong>Observation, Practical and Calculation
                                        </h5>
                                        <h5 class="card-text my-0"><strong>Email : </strong>sahoosoumyasree07@gmail.com
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="card mb-3 mx-2" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="1/12.jpg" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>NAME :</strong> Shuvam Mohapatra</h5>
                                        <h5 class="card-text my-0"><strong>DEPARTMENT AND YEAR :</strong>Food Process
                                            Engineering / 3rd Year</h5>
                                        <h5 class="card-text my-0"><strong>POST :</strong> Design Team Head</h5>
                                        <h5 class="card-text my-0"><strong>SCIENCE RELATED SKILL :</strong> Observing,
                                            Inferring, Predicting
                                        </h5>
                                        <h5 class="card-text my-0"><strong>Three words to describe science
                                                :</strong>Observation, Practical and Calculation
                                        </h5>
                                        <h5 class="card-text my-0"><strong>Email : </strong>shuvam752@gmail.com</h5>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="card mb-3 mx-2" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="1/11.jpg" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>NAME :</strong> Jagannath Behera </h5>
                                        <h5 class="card-text my-0"><strong>DEPARTMENT AND YEAR :</strong> B.Tech CSE /
                                            2nd
                                            Year
                                        </h5>
                                        <h5 class="card-text my-0"><strong>POST :</strong> Technical Team Head</h5>
                                        <h5 class="card-text my-0"><strong>SCIENCE RELATED SKILL :</strong>
                                            Coding, Designing, Observing</h5>
                                        <h5 class="card-text my-0"><strong>Three words to describe science
                                                :</strong>Facts, Interesting ,Knowledge
                                        </h5>
                                        <h5 class="card-text my-0"><strong>Email : </strong>jagannathbehera312@gmail.com
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>








                </div>
            </section>

        </div>








        <div class="our_team">
            <section class="text-gray-700 body-font">
                <div class="container px-5 py-20 mx-auto">
                    <div class="flex flex-col text-center w-full mb-4">
                        <h1 class="sm:text-4xl text-4xl font-large title-font mb-4 text-yellow-900">CONTENT TEAM</h1>
                        <!-- <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn -->
                        <!-- asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them. -->
                        <!-- </p> -->
                    </div>
                    <div class="row">





                        <div class="card mb-3 mx-2" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="1/10.jpg" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>NAME :</strong> Soumyasree Sahoo</h5>
                                        <h5 class="card-text my-0"><strong>DEPARTMENT AND YEAR :</strong>Food processing
                                            Engineering/3rd year</h5>
                                        <h5 class="card-text my-0"><strong>SCIENCE RELATED SKILL :</strong> Good
                                            observation, measuring, predicting</h5>
                                        <h5 class="card-text my-0"><strong>Three words to describe science
                                                :</strong>Observation, Practical and Calculation
                                        </h5>
                                        <h5 class="card-text my-0"><strong>Email : </strong>sahoosoumyasree07@gmail.com
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>








                        <div class="card mb-3 mx-2" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="1/2.jpg" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>NAME :</strong> Mrutyunjaya Panda</h5>
                                        <h5 class="card-text my-0"><strong>DEPARTMENT AND YEAR :</strong> Integrated
                                            M.Sc
                                            Chemistry/ 3rd Year</h5>
                                        <h5 class="card-text my-0"><strong>SCIENCE RELATED SKILL
                                                :</strong>Programming,Cotent writing,Obesrving and analysing complex
                                            datas
                                        </h5>
                                        <h5 class="card-text my-0"><strong>Three words to describe science
                                                :</strong>Discuss,Observe and Analyze</h5>
                                        <h5 class="card-text my-0"><strong>Email : </strong>mpanda.nitrkl@gmail.com</h5>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="card mb-3 mx-2" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="images/our_team/Aditya Sekhar.jpg" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>NAME :</strong>Aditya Sekhar Samal</h5>
                                        <h5 class="card-text my-0"><strong>DEPARTMENT AND YEAR :</strong> Physics and
                                            Astronomy / 1st Year</h5>
                                        <h5 class="card-text my-0"><strong>SCIENCE RELATED SKILL :</strong> Observing ,
                                            Classifying ,Predicting</h5>
                                        <h5 class="card-text my-0"><strong>Three words to describe science
                                                :</strong> Observation, Theological and Natural, Theory and Experiment
                                        </h5>
                                        <h5 class="card-text my-0"><strong>Email : </strong>adityasekhar8910@gmail.com
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3 mx-2" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="images/our_team/Deepti mayee Samal.jpg" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>NAME :</strong>Deepti Mayee Samal</h5>
                                        <h5 class="card-text my-0"><strong>DEPARTMENT AND YEAR :</strong>Biomedical /
                                            2nd
                                            Year </h5>
                                        <h5 class="card-text my-0"><strong>SCIENCE RELATED SKILL :</strong> Observation,
                                            Experiment ,Invention </h5>
                                        <h5 class="card-text my-0"><strong>Three words to describe science
                                                :</strong>Fack flask fossil</h5>
                                        <h5 class="card-text my-0"><strong>Email :
                                            </strong>deeptimayeesamal445@gmail.com
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3 mx-2" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="images/our_team/DARAPU PREETHI.jpeg" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>NAME :</strong> Darapu Preethi</h5>
                                        <h5 class="card-text my-0"><strong>DEPARTMENT AND YEAR :</strong> Computer
                                            Science
                                            Engineering / 2nd Year</h5>
                                        <h5 class="card-text my-0"><strong>SCIENCE RELATED SKILL :</strong>
                                            Communication, Observation, Measurement</h5>
                                        <h5 class="card-text my-0"><strong>Three words to describe science
                                                :</strong>Knowledge, Nature, Discovery, Research</h5>
                                        <h5 class="card-text my-0"><strong>Email : </strong>darapupreethi@gmail.com</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3 mx-2" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="images/our_team/Jyotiraditya Samantaray.jpg" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>NAME :</strong> Jyotiraditya Samantaray</h5>
                                        <h5 class="card-text my-0"><strong>DEPARTMENT AND YEAR :</strong>Department of
                                            Chemistry /1st Year</h5>
                                        <h5 class="card-text my-0"><strong>SCIENCE RELATED SKILL :</strong>
                                            Observation,Analysis,Representation for easy understanding</h5>
                                        <h5 class="card-text my-0"><strong>Three words to describe science
                                                :</strong> Patterns, Observations, Applications</h5>
                                        <h5 class="card-text my-0"><strong>Email : </strong>jyotisamantaray001@gmail.com
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3 mx-2" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="images/our_team/Rashi Singh.jpg" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>NAME :</strong> Rashi Singh</h5>
                                        <h5 class="card-text my-0"><strong>DEPARTMENT AND YEAR :</strong>Department of
                                            Biotechnology and Medical Engineering / 3rd year </h5>
                                        <h5 class="card-text my-0"><strong>SCIENCE RELATED SKILL :</strong>Communication
                                            ,
                                            Observation , Prediction </h5>
                                        <h5 class="card-text my-0"><strong>Three words to describe science
                                                :</strong>Universal , Boundless , Incessant
                                        </h5>
                                        <h5 class="card-text my-0"><strong>Email : </strong>rashisingh25091999@gmail.com
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="card mb-3 mx-2" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="images/our_team/Rojalini Swain.jpg" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>NAME :</strong> Rojalini Swain</h5>
                                        <h5 class="card-text my-0"><strong>DEPARTMENT AND YEAR :</strong> Biomedical /
                                            B.Tech 2nd Year

                                            Engineering/3rd year</h5>
                                        <h5 class="card-text my-0"><strong>SCIENCE RELATED SKILL :</strong>
                                            Communication,
                                            observation and analysis
                                        </h5>
                                        <h5 class="card-text my-0"><strong>Three words to describe science
                                                :</strong>Science is the intellectual and practical activity
                                            encompassing
                                            the systematic study of the structure and behavior of the physical and
                                            natural
                                            world through observation and experiment.
                                        </h5>
                                        <h5 class="card-text my-0"><strong>Email : </strong>rojaliniswain22@gmail.com
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="card mb-3 mx-2" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="images/our_team/sarthak das.jpg" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>NAME :</strong> Sarthak Das</h5>
                                        <h5 class="card-text my-0"><strong>DEPARTMENT AND YEAR :</strong> Electrical
                                            Engineering / 2nd year</h5>
                                        <h5 class="card-text my-0"><strong>SCIENCE RELATED SKILL :</strong> NI Multisim,
                                            Arduino, Node MCU </h5>
                                        <h5 class="card-text my-0"><strong>Three words to describe science
                                                :</strong>Magical , Factual, Interesting
                                        </h5>
                                        <h5 class="card-text my-0"><strong>Email : </strong>sarthakdasrkl@gmail.com</h5>
                                    </div>
                                </div>
                            </div>
                        </div>






                    </div>
            </section>
        </div>






        <div class="our_team">
            <section class="text-gray-700 body-font">
                <div class="container px-5 py-20 mx-auto">
                    <div class="flex flex-col text-center w-full mb-4">
                        <h1 class="sm:text-4xl text-4xl font-large title-font mb-4 text-yellow-900">DESIGN TEAM</h1>
                        <!-- <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn -->
                        <!-- asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them. -->
                        <!-- </p> -->
                    </div>
                    <div class="row">



                        <div class="card mb-3 mx-2" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="1/12.jpg" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>NAME :</strong> Shuvam Mohapatra</h5>
                                        <h5 class="card-text my-0"><strong>DEPARTMENT AND YEAR :</strong>Food Process
                                            Engineering / 3rd Year</h5>
                                        <h5 class="card-text my-0"><strong>SCIENCE RELATED SKILL :</strong> Observing,
                                            Inferring, Predicting
                                        </h5>
                                        <h5 class="card-text my-0"><strong>Three words to describe science
                                                :</strong>Observation, Practical and Calculation
                                        </h5>
                                        <h5 class="card-text my-0"><strong>Email : </strong>shuvam752@gmail.com</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3 mx-2" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="1/11.jpg" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>NAME :</strong> Jagannath Behera </h5>
                                        <h5 class="card-text my-0"><strong>DEPARTMENT AND YEAR :</strong> B.Tech CSE /
                                            2nd
                                            Year
                                        </h5>
                                        <h5 class="card-text my-0"><strong>SCIENCE RELATED SKILL :</strong>
                                            Coding, Designing, Observing</h5>
                                        <h5 class="card-text my-0"><strong>Three words to describe science
                                                :</strong>Facts, Interesting ,Knowledge
                                        </h5>
                                        <h5 class="card-text my-0"><strong>Email : </strong>jagannathbehera312@gmail.com
                                        </h5>

                                    </div>
                                </div>
                            </div>
                        </div>





                        <div class="card mb-3 mx-2" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="images/our_team/Santanu_Mahakhud.jpg" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>NAME :</strong> Santanu Mahakhud</h5>
                                        <h5 class="card-text my-0"><strong>DEPARTMENT AND YEAR :</strong> Electronics
                                            and
                                            Communications/2nd Year</h5>
                                        <h5 class="card-text my-0"><strong>SCIENCE RELATED SKILL
                                                :</strong>Designing, Coding</h5>
                                        <h5 class="card-text my-0"><strong>Three words to describe science
                                                :</strong>Imagination, Experiment, True</h5>
                                        <h5 class="card-text my-0"><strong>Email : </strong>santanumahakhud1999@gmail.com
                                        </h5>
                                    </div>

                                </div>
                            </div>
                        </div>





                        <div class="card mb-3 mx-2" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="images/our_team/Debprasad Sethy.jpg" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>NAME :</strong> DEB PRASAD SETHY</h5>
                                        <h5 class="card-text my-0"><strong>DEPARTMENT AND YEAR :</strong>Metallurgical
                                            and
                                            Material Engineering / 1st Year</h5>
                                        <h5 class="card-text my-0"><strong>SCIENCE RELATED SKILL
                                                :</strong>"Experimenting,
                                            Observing, Predicting
                                        </h5>
                                        <h5 class="card-text my-0"><strong>Three words to describe science
                                                :</strong>Observations, Experiments, Accuracy </h5>
                                        <h5 class="card-text my-0"><strong>Email : </strong>debprasadsethy2002@gmail.com
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3 mx-2" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="images/our_team/Suwesh Sah.jpg" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>NAME :</strong> Suwesh Prasad Sah</h5>
                                        <h5 class="card-text my-0"><strong>DEPARTMENT AND YEAR :</strong> Computer
                                            Science
                                            and Engineering / B-tech 1st year</h5>
                                        <h5 class="card-text my-0"><strong>SCIENCE RELATED SKILL :</strong>
                                            Experimenting, Observing, Communicating</h5>
                                        <h5 class="card-text my-0"><strong>Three words to describe science
                                                :</strong>Knowledge, Understandings and Experimentations </h5>
                                        <h5 class="card-text my-0"><strong>Email : </strong>suwesh081@gmail.com</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3 mx-2" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="images/our_team/Sugyan Bentakar.jpg" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>NAME :</strong>Sugyan Bentakar</h5>
                                        <h5 class="card-text my-0"><strong>DEPARTMENT AND YEAR :</strong> Mechanical
                                            engineering / 1st Year</h5>
                                        <h5 class="card-text my-0"><strong>SCIENCE RELATED SKILL :</strong> Reusing
                                            waste
                                            things, designing
                                        </h5>
                                        <h5 class="card-text my-0"><strong>Three words to describe science
                                                :</strong>Improvement, Discovery, Durability</h5>
                                        <h5 class="card-text my-0"><strong>Email : </strong>18sugyan.munu@gmail.com</h5>
                                    </div>
                                </div>
                            </div>
                        </div>







                    </div>
            </section>
        </div>







        <div class="our_team">
            <section class="text-gray-700 body-font">
                <div class="container px-5 py-20 mx-auto">
                    <div class="flex flex-col text-center w-full mb-4">
                        <h1 class="sm:text-4xl text-4xl font-large title-font mb-4 text-yellow-900">MANAGEMENT/PUBLICITY
                            TEAM</h1>
                        <!-- <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brook
                 <!-- asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them. --
                 <!-- </p> -->
                    </div>
                    <div class="row">


                        <div class="card mb-3 mx-2" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="1/5.jpg" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>NAME :</strong> Ankit Dey</h5>
                                        <h5 class="card-text my-0"><strong>DEPARTMENT AND YEAR :</strong> Food Process
                                            Engineering/3rd Year</h5>
                                        <h5 class="card-text my-0"><strong>SCIENCE RELATED SKILL :</strong>
                                            Perseverance,Communicating,Observing</h5>
                                        <h5 class="card-text my-0"><strong>Three words to describe science
                                                :</strong>Profound, Statistical, Textual</h5>
                                        <h5 class="card-text my-0"><strong>Email : </strong>deyankit13@gmail.com</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3 mx-2" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="1/8.jpg" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>NAME :</strong> Spandita Bhoi</h5>
                                        <h5 class="card-text my-0"><strong>DEPARTMENT AND YEAR :</strong> Chemistry /
                                            3rd
                                            Year</h5>
                                        <h5 class="card-text my-0"><strong>SCIENCE RELATED SKILL :</strong>
                                            Observations,
                                            keen to do experiment and reading more science article</h5>
                                        <h5 class="card-text my-0"><strong>Three words to describe science
                                                :</strong>Imagination, experimentation and acknowledging</h5>
                                        <h5 class="card-text my-0"><strong>Email : </strong>bhoispandita222@gmail.com
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3 mx-2" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="1/9.jpg" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>NAME :</strong> Atul Patel</h5>
                                        <h5 class="card-text my-0"><strong>DEPARTMENT AND YEAR :</strong>Chemical (dual
                                            degree)/2nd Year</h5>
                                        <h5 class="card-text my-0"><strong>SCIENCE RELATED SKILL :</strong> Good
                                            observation, measuring, predicting</h5>
                                        <h5 class="card-text my-0"><strong>Three words to describe science
                                                :</strong>Observation, Practical and Calculation
                                        </h5>
                                        <h5 class="card-text my-0"><strong>Email : </strong>atulpatel543214@gmail.com
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>








                    </div>
            </section>
        </div>










        <div class="our_team">
            <section class="text-gray-700 body-font">
                <div class="container px-5 py-20 mx-auto">
                    <div class="flex flex-col text-center w-full mb-4">
                        <h1 class="sm:text-4xl text-4xl font-large title-font mb-4 text-yellow-900">TECHNICAL
                            TEAM</h1>
                        <!-- <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brook
              <!-- asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them. --
              <!-- </p> -->
                    </div>
                    <div class="row">

                        <div class="card mb-3 mx-2" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="1/11.jpg" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>NAME :</strong> Jagannath Behera </h5>
                                        <h5 class="card-text my-0"><strong>DEPARTMENT AND YEAR :</strong> B.Tech CSE /
                                            2nd
                                            Year
                                        </h5>
                                        <h5 class="card-text my-0"><strong>SCIENCE RELATED SKILL :</strong>
                                            Coding, Designing, Observing</h5>
                                        <h5 class="card-text my-0"><strong>Three words to describe science
                                                :</strong>Facts, Interesting ,Knowledge
                                        </h5>
                                        <h5 class="card-text my-0"><strong>Email : </strong>jagannathbehera312@gmail.com
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="card mb-3 mx-2" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="images/our_team/Aditya Sinha.jpg" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>NAME :</strong> Aditya Sinha</h5>
                                        <h5 class="card-text my-0"><strong>DEPARTMENT AND YEAR :</strong>Ceramic
                                            Engineering
                                            / 1st year</h5>
                                        <h5 class="card-text my-0"><strong>SCIENCE RELATED SKILL :</strong>Theoretical,
                                            knowlege sharing, speaking
                                        </h5>
                                        <h5 class="card-text my-0"><strong>Three words to describe science
                                                :</strong>Experiments, awareness, independence
                                        </h5>
                                        <h5 class="card-text my-0"><strong>Email : </strong>sinhadityaforever@gmail.com
                                        </h5>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="card mb-3 mx-2" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="images/our_team/ansuman nayak.jpg" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>NAME :</strong> Ansuman Nayak </h5>
                                        <h5 class="card-text my-0"><strong>DEPARTMENT AND YEAR :</strong> B.Tech CSE /
                                            2nd
                                            Year
                                        </h5>
                                        <h5 class="card-text my-0"><strong>SCIENCE RELATED SKILL :</strong>
                                            Web developers, Designers, Creator</h5>
                                        <h5 class="card-text my-0"><strong>Three words to describe science
                                                :</strong>Observations theories humans
                                        </h5>
                                        <h5 class="card-text my-0"><strong>Email : </strong>ansumannayak528@gmail.com
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>











                    </div>
            </section>
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