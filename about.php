<?php

session_start();

if(!isset($_SESSION['userid'])){
    header("Location: Home.php");
    die();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--important tags : these are important settings for your machine to know more about your code and how to display it-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--title-->
    <title>ABOUT US</title>
    
    <!--google fonts(the fonts that we are going to use in this tutorial: raleways and  open sans)-->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700&display=swap" rel="stylesheet">
     <!--Link for open sans font type and its values-->  
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
     
    <!--Linking fontawesome file with html-->
    <script src="https://kit.fontawesome.com/03a7f19bd7.js" crossorigin="anonymous"></script>

    <!--Linking bootstrap file to html-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="shortcut icon" type="image/x-icon" href="logo.png" />

    <!--Linking the css file to html-->
    <link rel="stylesheet" href="head.css">
    <link rel="stylesheet" href="foot.css">
    <link rel="stylesheet" href="styleA.css">

</head>
<body>

    <header style="margin-bottom: 2%;">
        <?php
            require "head.php";
        ?>
    </header>

    <section id="ABOUT">
     <div class="about-1">
         <h1> ABOUT US </h1>
         <p>
         We offer a full range of garage services to vehicle owners located in Tucson area. All mechanic services are performed by highly qualified mechanics. We can handle any car problem.
     </p>
        </div>
     <div id="about-2">
     <div class="border-box-lg">
         <div class="container">
             <div class="row">
                 <div class="col-md-4">
                    <div class="about-item text-center" style="color:darkgreen">
                     <i class="fa fa-book"></i>
                     <h3>MISSION</h3>
                     <hr>
                     <p> We make auto repair and maintenance more convenient for you
                        We are a friendly, helpful and professional group of people
                        Our professionals know how to handle a wide range of car services
                        We get the job done right — the first time
                        Same day service for most repairs and maintenance</p>
                     </div>
                 </div>
                 <div class="col-md-4">
                    <div class="about-item text-center" style="color:crimson">
                     <i class="fa fa-globe"></i>
                     <h3>VISION</h3>
                     <hr>
                     <p> We offer full range of garage services to vehicle owners in Tucson. Our professionals know how to handle a wide range of car services. Whether you drive a passenger car or medium sized truck or SUV, our mechanics strive to ensure that your vehicle will be performing at its best before leaving our car.

                     </p>
                     </div>
                 </div>
                 <div class="col-md-4">
                    <div class="about-item text-center" style="color: blue;">
                     <i class="fa fa-pencil"></i>
                     <h3>ACHIEVEMENTS</h3>
                     <hr>
                     <p> 1
                        0
                        0
                        %
                        CUSTOMER
                        SATISFACTION
                        <br>
                        1
                        5
                        CARS REPAIRED
                        PER DAY
                        <br>
                        7
                        0
                        2
                        TIRES REPAIRED
                        A YEAR
                        <br>
                        5
                        1
                        2
                        5
                        TIGHTENED
                        BOLTS
                    
                    <br>
                    24/7 customer service
                    <br>
                    We are a friendly, helpful and professional group of people
Our professionals
                    
                </p>
                     </div>
                  </div>
              </div>
            </div>
         </div>
      </div>   
 </section>
    
<!--our footer -->
<footer style="margin-top: 10%;">
<?php
                include "foot.html";
            ?>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
		integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
	</script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
		integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
	</script>
</body>
</html>

