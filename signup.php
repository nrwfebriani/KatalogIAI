<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<!-- bootstrap 5 CDN-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- bootstrap 5 Js bundle CDN-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
     <div class="d-flex justify-content-center align-items-center"
          style="min-height: 100vh;">
          <form class="p-5 rounded shadow blue"
               style="max-width: 30rem; width: 100%"
               method="POST"
               action="signup-check.php">
               <h1 class="text-center display-4 pb-5">SIGN UP</h1>
               <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
               <?php } ?>

               <?php if (isset($_GET['success'])) { ?>
                    <p class="success"><?php echo $_GET['success']; ?></p>
               <?php } ?>

               <div class="mb-3">
                    <!-- <label for="exampleInputEmail1"
                         class="form-label">Email address</label> -->
                    <?php if (isset($_GET['email'])) { ?>
                    <input type="email"
                              class="form-control"
                              name="email" 
                              id="exampleInputEmail1" 
                              aria-describedby="emailHelp"
                              value="<?php echo $_GET['email']; ?>"><br>
               <?php }else{ ?>
                    <input type="email" 
                              class="form-control"
                              name="email" 
                              id="exampleInputEmail1" 
                              aria-describedby="emailHelp"
                         placeholder="Email"><br>
               <?php }?>
               <!-- </div>

               <div class="mb-3"> -->
                    <!-- <label for="exampleInputName1"
                         class="form-label">Full Name</label> -->
                    <?php if (isset($_GET['full_name'])) { ?>
                         <input type="text" 
                              name="full_name"
                              class="form-control"
                              id="exampleInputName1" 
                              <!-- placeholder="Name" -->
                              value="<?php echo $_GET['full_name']; ?>"><br>
                    <?php }else{ ?>
                         <input type="text" 
                              name="full_name" 
                              placeholder="Name"
                              class="form-control"
                              id="exampleInputName1"><br>
                    <?php }?>
               <!-- </div>

               <div class="mb-3"> -->
                    <!-- <label for="exampleInputPassword1" 
                              class="form-label">Create password</label> -->
                    <input type="password" 
                              class="form-control" 
                              name="password" 
                              id="exampleInputPassword1" 
                              placeholder="Create password"><br>
               <!-- </div>
               <div class="mb-3"> -->
                    <!-- <label for="exampleInputPassword2" 
                         class="form-label">Confirm password</label> -->
                    <input type="password" 
                         class="form-control" 
                         name="re_password" 
                         placeholder="Confirm password"
                         id="exampleInputPassword2"><br>
               </div>

               <button type="submit"
                         class="btn btn-primary">Sign Up</button>
               <a href="login.php" class="ca">Already have an account?</a>
          </div>
</body>
</html>