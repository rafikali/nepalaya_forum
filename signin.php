<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="bootstrap/js/bootstrap.bundle.js"></script>
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
                                    <!-- <h4 class="mt-1 mb-5 pb-1">Nepalaya Forum</h4> -->
                                </div>
                                <form action="login.php" method="post">
                                    <p>Please login to your account</p>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form2Example11">Username</label>

                                        <input type="email" id="form2Example11" class="form-control" name="username" placeholder="Phone number or email address" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form2Example22">Password</label>
                                        <input type="password" id="form2Example22" class="form-control" name="password" />
                                    </div>

                                    <div class="text-center pt-1 mb-5 pb-1">
                                        <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3 w-100" type="submit" name="login">Login</button>
                                        <a class="text-muted" href="#!">Forgot password?</a>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-center pb-4">
                                        <p class="mb-0 me-2">Don't have an account?</p>
                                        <button type="button" onclick="window.location.href='signup.php'" href="" class="btn btn-outline-danger">Create new</button>
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


</html>