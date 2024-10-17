<?php require base_path('views/partials/head.php') ?>

<link rel="stylesheet" href="style/signup.css">

    <div class="signup-container">
        <div class="top-signup">
           <form action="/register" method="post" >
               <h2 class="text-center">SIGN UP</h2>   
                  <div class="icons upicon mt-4">
                    <a type="button" class="phone text-dark fs-5 rounded"><i class="bi bi-telephone-fill"></i></a>
                    <a type="button" class="phone text-dark fs-5 rounded"><i class="bi bi-instagram"></i></a>
                    <a type="button" class="phone text-dark fs-5 rounded"><i class="bi bi-globe"></i></a>
                  </div>
                <?php if (isset($errors['email'])) : ?>
                  <div class="text-danger">
                    <p><?= $errors['email'] ?></p>
                  </div>
                <?php endif; ?>
               <div class="form-group mt-5">
                   <input type="email" name="email" class="form-control" placeholder="Enter email.." required>
               </div>
               <div class="form-group mt-2 d-flex justify-content-center">
                   <label for="">EMAIL</label>
               </div>
               <!-- <div class="clearfix mt-3">
                   <a href="#" class="forgot">Forgot Password?</a>
               </div>         -->
               <div class="form-group mt-3 d-flex justify-content-center">
                   <button type="submit" class="btn btn-success btn-block sign-btn">SIGN UP</button>
               </div>
            </form>
        </div> 
   
       <div class="top-container">
           <div class="bottom">
                  <h2 class="text-center welcome">WELCOME TO <br>ABMG!</h2>   
                <div class="clearfix mt-3 ">
                  <a href="/login" class="forgot text-white">Already have an account?</a>
                </div>        
                <div class="form-group mt-5 d-flex justify-content-center">
                   <a href="/login" class="btn btn-success btn-block sign-btn mt-4"> SIGN IN </a>
                </div>
                <div class="clearfix guest">
                   <a href="/" class="forgot text-white">For guest only, <strong>Click here</strong>.</a>
                </div>        
           </div>
        </div>
    </div>
  
</body>
</html>