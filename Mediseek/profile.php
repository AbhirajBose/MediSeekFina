<?php
session_start();
if(!isset($_SESSION['name'])){
    header("Location: login.php", true, 301);
    exit();
}
else {
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="css/tiny-slider.css" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
    <link href="css/style.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <title>Mediseek</title>
</head>

<body>

    <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark fixed-top" id="navbar"
        arial-label="Furni navigation bar">

        <div class="container">
            <a class="navbar-brand" href="index.html">Mediseek<span></span></a>

            <div class="collapse navbar-collapse" id="navbarsFurni">
                <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                </ul>
                <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                    <li><a class="nav-link" href="#"><img src="images/user.svg">
                            <span id="profile" style="color: #fff;">Hello, <?php echo $_SESSION["name"]; ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php" class="btn btn-secondary me-2">Home</a>
                    </li>
                    <li>
                        <a href="editprofile.php" class="btn btn-secondary me-2">Edit Profile</a>
                    </li>
                    <li>
                        <a href="logout.php" class="btn btn-secondary me-2">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="vh-150 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <div class="mb-md-5 mt-md-4 pb-5">
                                <h2 class="fw-bold mb-2 text-uppercase">Mediseek</h2>
                                <p class="text-white-50 mb-5">Hello <?php echo $_SESSION["name"]; ?>, welcome to Mediseek.com</p>
                                <img src="images/profile.png"
                                    alt="avatar" class="rounded-circle img-fluid mb-4" style="width: 150px;">
                                <h3 class="fw-bold mb-4 text-uppercase "><?php echo $_SESSION["name"]; ?></h3>
                                <!-- <h3 class="fw-bold mb-4 text-uppercase">UserId : <span style="opacity: .7;">uyfvwuvouvb</span></h3> -->
                                <h3 class="fw-bold mb-4 text-uppercase">User-Id : <span style="opacity: .7; text-transform: none;"><?php echo $_SESSION["userid"]; ?></span></h3>
                                <?php
                                $name_json = file_get_contents("database/Protected/name.json", 'r');
                                $email_json = file_get_contents("database/Protected/email.json", 'r');

                                $name_array = json_decode($name_json, TRUE);
                                $email_array = json_decode($email_json, TRUE);

                                $index = array_search($_SESSION["name"], $name_array);

                                $email = $email_array[$index];
                                ?>
                                <h3 class="fw-bold mb-4 text-uppercase">Email : <span style="opacity: .7; text-transform: lowercase;"><?php echo $email; ?></span></h3>
                                <h3 class="fw-bold mb-4 text-uppercase">Phone : <span style="opacity: .7;"><?php
                                if (file_exists("database/Protected/phone.json")) {
                                }
                                else{
                                    echo "Not given";
                                }
                                ?></span></h3>
                                <h3 class="fw-bold mb-4 text-uppercase">Address : <span style="opacity: .7;"><?php
                                if (file_exists("database/Protected/phone.json")) {
                                }
                                else{
                                    echo "Not given";
                                }
                                ?>
                            </span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer-section">
        <div class="container relative">
            <div class=" copyright">
                <div class="row pt-4">
                    <div class="col-lg-6">
                        <p class="mb-2 text-center text-lg-start">Copyright &copy;
                            <script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash;
                            <a href="#">Mediseek.com</a>
                        </p>
                    </div>

                    <div class="col-lg-6 text-center text-lg-end">
                        <ul class="list-unstyled d-inline-flex ms-auto">
                            <li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </footer>
</body>

</html>

<?php
}
?>