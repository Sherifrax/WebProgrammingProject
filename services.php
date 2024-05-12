<?php
    require "config.php";
    require "databasefunctions.php";
    session_start();

    if(!isset($_SESSION['userid'])){
        header("Location: Home.php");
        die();
    }
?>

<!doctype html>
<html lang="en">

<head>
    <title>Services</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/03a7f19bd7.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="shortcut icon" type="image/x-icon" href="logo.png" />
    
    <link rel="stylesheet" href="foot.css">
    <link rel="stylesheet" href="services.css">
    <link rel="stylesheet" href="head.css">

</head>

<body id="back">
    <div>

        <header>
            <?php
                require "head.php";
            ?>
        </header>
        <main style="margin-top: 3%; margin-bottom:3%;">
            
            <h2 class=" text-center">Fix & Wash Services</h2>
    
            <?php
                $services = getServices();
                foreach($services as $service) {
            ?>
            <div class="servicecontent">
    
                <div class="row">
                    <h4 class="col-sm-3 text-center">
                        <i>
                            <?php echo $service["S_Name"]; ?>
                        </i>
                    </h4>
                    <h4 class="col-sm-6 text-center">Details</h4>
                    <h4 class="col-sm-3 text-center">Price</h4>
                </div>
                <hr>
                <div class="row" style="margin-bottom: 1%;">
                    <div class="col-sm-3 text-center align-self-center" style="padding-bottom: 15px;"><img src=" <?php echo $service["S_Link"]; ?> " alt="" width="100" height="100"></div>
                    <div class="col-sm-6"> <?php echo $service["S_Desc"]; ?></div>
                    <div class="col-sm-3  text-center"><p> <?php echo $service["S_Price"]." L.E"; ?> </p> <a href="buyservice.php" class="btn btn-primary" type="button">Buy a service</a> </div>
                </div>
                    
                    
            </div>
                    <?php
                    }
                    ?>
            
        </main>
        <footer>
            <?php
                include "foot.html";
            ?>
        </footer>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>