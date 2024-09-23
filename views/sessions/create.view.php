<link rel="stylesheet" href="style/multi-step-form.css">

<div class="modal fade" id="login-modal" tabindex="-1" aria-labelledby="login-modal-label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content modal-content-login border-0">

    <div class="top-container">
        <h2>SIGN IN</h2>
        <form action="/sessions" method="post">
                   <div class="icons upicon mt-4">
                       <a type="button" class="phone text-dark fs-5 rounded"><i class="bi bi-telephone-fill"></i></a>
                       <a type="button" class="phone text-dark fs-5 rounded"><i class="bi bi-instagram"></i></a>
                       <a type="button" class="phone text-dark fs-5 rounded"><i class="bi bi-globe"></i></a>
                   </div>
               <div class="form-group">
                   <input name="email" type="text" class="form-control formCont" placeholder="Enter email.." required="required">
               </div>
               <?php if (isset($errors['email'])) : ?>
                  <div class="text-danger">
                    <p><?= $errors['email'] ?></p>
                  </div>
                <?php endif; ?>
               <div class="form-group mt-3">
                   <input name="password" type="password" class="form-control formCont" placeholder="Enter password.." required="required">
               </div>
               <?php if (isset($errors['password'])) : ?>
                  <div class="text-danger">
                    <p><?= $errors['password'] ?></p>
                  </div>
                <?php endif; ?>
               <div class="clearfix mt-3 ">
                   <a href="#" class="forgot got ">Forgot Password?</a>
               </div>        
               <div class="form-group mt-3 d-flex justify-content-center">
                   <button type="submit" class="btn btn-success btn-block sign-btn">SIGN IN</button>       
               </div>
        </form>
    </div>
    <div class="bottom-container">
        <h2>WELCOME TO ABMG!</h2>
        <a href="#" class="forgot">Don't have an account?</a>
        <button type="submit" class="btn btn-success btn-block sign-btn btn-transfarency mt-5" data-bs-toggle="modal" data-bs-target="#login-modal">SIGN UP</button>
        <a href="/" class="forgot get">For guest only, Click here.</a>

    </div>
      
   

    </div>
  </div>
</div>