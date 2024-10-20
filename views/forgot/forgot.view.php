<link rel="stylesheet" href="style/multi-step-form.css">

<?php require base_path('views/partials/head.php') ?>

<link rel="stylesheet" href="style/signup.css">

    <div class="signup-container">
        <div class="top-signup">
           <form action="/forgot" method="post" >
               <h2 class="text-center">PASSWORD RECOVERY</h2>   
                  <div class="icons upicon mt-4">
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
               <div class="form-group mt-3 d-flex justify-content-center">
                   <button type="submit" class="btn btn-success btn-block sign-btn">FORGOT PASSWORD</button>
               </div>
            </form>
        </div> 
   
       <div class="top-container">
           <div class="bottom">
                  <h2 class="text-center welcome">WELCOME TO <br>ABMG!</h2>      
           </div>
        </div>
    </div>
  
</body>
</html>
