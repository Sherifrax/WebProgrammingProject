<nav class="navbar navbar-expand-lg ">
    <div class="container-fluid">
        <a class="navbar-brand">
        
            <script src="https://cdn.lordicon.com/fudrjiwc.js"></script>
            <lord-icon
                src="https://cdn.lordicon.com/tsnvgrkp.json"
                trigger="hover"
                colors="primary:#4be1ec,secondary:#cb5eee"
                stroke="60"
                style="width:80px;height:80px">
            </lord-icon>
            <img id="footlogo" src="logo model 1.png" alt="" width="150">
        </a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto ml-md-4 headul">
                <li class="nav-item pe-3">
                    <a  href="Home.php">Home</a>
                </li>
                <li class="nav-item pe-3">
                    <a href="services.php">Services</a>
                </li>
                <li class="nav-item pe-3">
                    <a href="about.php">About Us</a>
                </li>
                <li class="nav-item pe-3">
                    <a href="feedback.php">Community</a>
                </li>
            </ul>

            <?php
                if(isset($_SESSION['userid'])) {
            ?>
            
            <h3 class="wady"> welcome &nbsp;</h3>
            <div class="dropdown">
                <h3 class="wady dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"> <?php echo $_SESSION['username']; ?> <i class="fa-solid fa-user"></i> </h3>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="user_profile.php">My Account</a></li>
                    <li><a class="dropdown-item" href="cars.php">My Cars</a></li>
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
            </div>

            <?php } else { ?>
                <h3 class="wady">
                    <a href="logsign.php" class="btn btn-outline-primary" style="color:white;">
                        Signup | Login
                    </a>
                </h3>
            <?php } ?>


        </div>
    </div>
</nav>