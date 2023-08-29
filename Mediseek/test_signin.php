<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <title></title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <section class="vh-150 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-5 mt-md-2 pb-5">

                            <?php
                            // session_start();
                            ?>
                                <form action="signin.php" method="post">

                                    <h2 class="fw-bold mb-2 text-uppercase">Mediseek</h2>
                                    <p class="text-white-50 mb-4">Welcome To Mediseek.com, Create Your Account.</p>

                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="userfullname">Name</label>
                                        <input type="text" id="userfullname" name="name" class="form-control form-control-lg" placeholder="Enter Your Name" required/>
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="useremail">Email</label>
                                        <input type="email" id="useremail" name="email" class="form-control form-control-lg" placeholder="Enter Your Email" required/>
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="userid">Username / UserId</label>
                                        <input type="text" id="userid" name="userid" class="form-control form-control-lg" placeholder="Enter Your Username" required/>
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="userpassword">Password</label>
                                        <input type="password" id="userpassword" name="password" class="form-control form-control-lg" placeholder="Enter Your Password" required/>
                                    </div>
                                    <!-- <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p> -->

                                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Create
                                        Account</button>

                                    <!-- <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                        <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                                        <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                        <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                                    </div> -->
                                    <p id="demo"></p>
                                </form>
                                <?php
                                function fileWriteAppend(){
                                    $current_data = file_get_contents('user_data.json');
                                    $array_data = json_decode($current_data, true);
                                    $extra = array(
                                        'name'               =>     $_POST["name"],
                                        'email'          =>     $_POST["email"],
                                        'userid'          =>     $_POST["userid"],
                                        'password'     =>     $_POST["password"]
                                    );
                                    $array_data[] = $extra;
                                    $final_data = json_encode($array_data);
                                    return $final_data;
                            }
                            function fileCreateWrite(){
                                $file=fopen("user_data.json","w");
                                $array_data=array();
                                $extra = array(
                                     'name'               =>     $_POST["name"],
                                     'email'          =>     $_POST["email"],
                                     'userid'          =>     $_POST["userid"],
                                     'password'     =>     $_POST["password"]
                                );
                                $array_data[] = $extra;
                                $final_data = json_encode($array_data);
                                fclose($file);
                                return $final_data;
                            }
                            function checkid(){
                                $email = $_POST['email'];
                                $user = $_POST['userid'];
                                
                            }
                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                if(!empty($_POST)){
                                    // $name = $_POST['name'];
                                    // $email = $_POST['email'];
                                    // $user = $_POST['userid'];
                                    // $pass = $_POST['password'];
                                    if(file_exists('user_data.json')){
                                        $final_data=fileWriteAppend();
                                        if(file_put_contents('user_data.json', $final_data))
                                        {
                                            // 301 Moved Permanently
                                            // $name=false;
                                            // $email=false;
                                            // session_destroy();
                                            header("Location: index.html", true, 301);
                                            // exit();
                                            // die();
                                        }
                                    }
                                    else
                                    {
                                        $final_data=fileCreateWrite();
                                        if(file_put_contents('user_data.json', $final_data))
                                        {
                                            ?>
                                            	<script>document.getElementsByTagName("input").reset();</script>
                                            <?php
                                            // 301 Moved Permanently
                                            header("Location: index.html", true, 301);
                                            // exit();
                                            // die();
                                        }
                                    }
                                }
                            }
                                ?>

                            </div>

                            <div>
                                <p class="mb-0">Already have an account? <a href="login.html" class="text-white-50 fw-bold">Sign
                                        In</a>
                                </p>
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