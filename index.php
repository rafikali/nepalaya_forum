 <!DOCTYPE html>
 <html lang="en">

 <head>
     <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <script src="bootstrap/js/bootstrap.bundle.js"></script>
     <style>
         body {
             height: 100vh;
             display: flex;
             align-items: center;
             justify-content: center;
         }
     </style>
 </head>


 <body class="bg-light">
     <div class="container-fluid">
         <div class=" row justify-content-center ">
             <div class=" col-md-8 col-lg-6 w-75 h-150 ">
                 <div class="card mt-5">
                     <div class="row">
                         <!-- Left part with image -->
                         <div class=" col-md-6">
                             <img src="https://img.freepik.com/free-photo/painting-mountain-lake-with-mountain-background_188544-9126.jpg" class="w-100 h-100" alt="Your Image">
                         </div>
                         <!-- Right part with sign-in form -->
                         <div class="col-md-6">
                             <div class="card-body mb-4">
                                 <h5 class="card-title">Sign In</h5>
                                 <!-- Your sign-in form goes here -->
                                 <form method="post" action="action.php">
                                     <!-- Form fields go here -->
                                     <div class="form-group mb-3">
                                         <label for="username">Username</label>
                                         <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username">
                                     </div>
                                     <div class="form-group mb-3">
                                         <label for="password">Password</label>
                                         <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                                     </div>
                                     <button type="submit" class="btn btn-primary">Sign In</button>
                                 </form>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

 </body>

 </html>