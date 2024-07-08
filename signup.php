<?php ob_start(); ?>
<?php session_start(); ?>
<?php include "functions.php" ?>
<?php include "db_config.php"; ?>
<!-- <?php include "favicon.php"; ?> -->

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = trim($_POST['username']);
    $user_firstname = trim($_POST['firstname']);
    $user_lastname = trim($_POST['lastname']);
    $user_email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $error = [
        'username' => '',
        'firstname' => '',
        'lastname' => '',
        'email' => '',
        'password' => ''
    ];

    if (strlen($username) < 4) {
        $error['username'] = 'username cannot be lees than 4 characters <hr color="red">';
    }
    if (username_exists($username)) {
        $error['username'] = 'username already exists, pick another one <hr color="red">';
    }
    if (email_exists($user_email)) {
        $error['email'] = 'Email already exists, pick another one <hr color="red">';
    }

    foreach ($error as $key => $value) {
        if (empty($value)) {
            unset($error[$key]);
        }
    } //foreach
    if (empty($error)) {
        register_user($username, $user_firstname, $user_lastname, $user_email, $password);
        login_user($username, $password);
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <style>
        .gradient-custom-2 {
            /* fallback for old browsers */
            background: #fccb90;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
        }

        @media (min-width: 768px) {
            .gradient-form {
                height: 100vh !important;
            }
        }

        @media (min-width: 769px) {
            .gradient-custom-2 {
                border-top-right-radius: .3rem;
                border-bottom-right-radius: .3rem;
            }
        }
    </style>
</head>

<body>
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <img src="https://nepalaya.edu.np/static/media/NepalayaLogo.c2c198be566715ac834e.png" style="width: 185px;" alt="logo">
                                    </div>
                                    <form action="signup.php" method="post">
                                        <p>Create a new account</p>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="username">Username</label>
                                            <input type="text" id="firstName" class="form-control" name="usernmae" placeholder="Enter your username" required />
                                        </div>

                                        <div class="row">
                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="firstName">First Name</label>
                                                <input type="text" id="firstName" class="form-control" name="firstName" placeholder="Enter your first name" required />
                                            </div>

                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="lastName">Last Name</label>
                                                <input type="text" id="lastName" class="form-control" name="lastName" placeholder="Enter your last name" required />
                                            </div>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="email">Email</label>
                                            <input type="email" id="email" class="form-control" name="email" placeholder="Enter your email address" required />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="password">Password</label>
                                            <input type="password" id="password" class="form-control" name="password" required />
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3 w-100" type="submit" name="register">Register</button>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">Already have an account?</p>
                                            <a class="btn btn-outline-danger " onclick="window.history.back()">Sign In</a>
                                        </div>

                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">Nepalaya Forum</h4>
                                    <p class="small mb-0">Welcome to Nepalaya Forum, your go-to platform for staying updated
                                        on the latest college knowledge and engaging in insightful discussions! Whether
                                        you're a student, educator, or college enthusiast, our forum provides a
                                        user-friendly space to share and discover information about colleges. Explore
                                        diverse topics such as admissions, scholarships, campus life, and academic programs.
                                        Join the community, connect with like-minded individuals, and stay informed with the
                                        latest updates on higher education. Let's build a supportive hub for knowledge
                                        exchange and foster meaningful conversations about the exciting world of colleges!"
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="bootstrap/js/bootstrap.bundle.js"></script>
</body>

</html>