<?php
    session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/03a7f19bd7.js" crossorigin="anonymous"></script>
    
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="shortcut icon" type="image/x-icon" href="logo.png" />

    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="foot.css">
    <link rel="stylesheet" href="head.css">
</head>

<body id="back">
    <div>
        <header>
            <?php
                require "head.php";
            ?>
        </header>
        <main>
            <h2 id="welcome" class="text-center">
                Welcome to our Services
            </h2>

            <div id="homecarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#homecarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
                    <li data-bs-target="#homecarousel" data-bs-slide-to="1" aria-label="Second slide"></li>
                    <li data-bs-target="#homecarousel" data-bs-slide-to="2" aria-label="Third slide"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="Car1.jpg" class="w-100 d-block" alt="First slide" style="border-radius: 15px; filter: brightness(40%);">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Title</h3>
                            <p>Description</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="Car2.jpg" class="w-100 d-block" alt="Second slide" style="border-radius: 15px; filter: brightness(40%);">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Title</h3>
                            <p>Description</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="Car3.jpg" class="w-100 d-block" alt="Third slide" style="border-radius: 15px; filter: brightness(40%);">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Title</h3>
                            <p>Description</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#homecarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#homecarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div class="homecontent">
                <div class="row align-items-center p-2">
                    <div class="col-sm-6">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas delectus fuga quia sequi, id iste accusamus! Quaerat aut, sapiente dolorum laudantium, officiis labore, possimus itaque provident voluptas consectetur perspiciatis aliquam!
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat aspernatur iusto magnam a maiores ex quas enim sunt sapiente accusamus, distinctio, similique delectus debitis ad repellendus nostrum nam quaerat omnis.
                    </div>
                    <div class="col-sm-6">
                        <video class="w-100 brr" loop autoplay muted>
                            <source src="car_wash_video.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
            <div class="homecontent">
                <div class="row align-items-center p-2">
                    <div class="col-sm-6">
                    <video class="w-100 brr" loop autoplay muted>
                            <source src="fixingcars.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="col-sm-6">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas delectus fuga quia 
                    sequi, id iste accusamus! Quaerat au
                    t, sapiente dolorum laudantium, officiis labore, possimus it
                    aque provident voluptas consectetur perspiciatis aliquam! Lorem ipsum dol
                    or sit amet, consectetur adipisicing elit. Fugiat aspernatur iusto magnam a maiores ex quas 
                    enim sunt sapiente accusamus, distinctio, similique delectus debitis ad repellend
                    us nostrum nam quaerat omnis.
                    </div>
                </div>
            </div>

            <div class="w-100 text-center" id="homebook">
                <a href="services.php" class="btn btn-primary">View Services</a>
            </div>

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