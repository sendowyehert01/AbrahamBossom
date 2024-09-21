<link rel="stylesheet" href="style/multi-step-form.css">

<div class="modal fade" id="register-modal" tabindex="-1" aria-labelledby="register-modal-label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content" style="width:1000px">
    
      <div class="modal-body modBod">

        <div class="container w-100 mx-auto">
          <form class="row g-3 needs-validation" id="regForm" action="/register" method="POST" novalidate>

            <!-- Circles which indicates the steps of the form: (visibility: hidden) -->
            <div class="text-center guide">
              <span class="step"></span>
              <span class="step"></span>
              <span class="step"></span>
            </div>

            <div class="tab row ">
            <div class="botTop-tab">
            <div class="topS-container">
        <h2>SIGN UP</h2>
        <form action="/examples/actions/confirmation.php" method="post" >
                
                   <div class="icons upicon mt-4">
                       <button type="button" class=" phone">
                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="bi bi-telephone-fill" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"></path></svg><span class="visually-hidden"></span></button>
                    
                       <button type="button" class=" phone">
                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"  class="bi bi-instagram" viewBox="0 0 16 16"><path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/></svg></button>
                    
                       <button type="button" class=" phone">
                       <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" class="bi bi-globe" viewBox="0 0 16 16"><path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855A8 8 0 0 0 5.145 4H7.5zM4.09 4a9.3 9.3 0 0 1 .64-1.539 7 7 0 0 1 .597-.933A7.03 7.03 0 0 0 2.255 4zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a7 7 0 0 0-.656 2.5zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5zM8.5 5v2.5h2.99a12.5 12.5 0 0 0-.337-2.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5zM5.145 12q.208.58.468 1.068c.552 1.035 1.218 1.65 1.887 1.855V12zm.182 2.472a7 7 0 0 1-.597-.933A9.3 9.3 0 0 1 4.09 12H2.255a7 7 0 0 0 3.072 2.472M3.82 11a13.7 13.7 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5zm6.853 3.472A7 7 0 0 0 13.745 12H11.91a9.3 9.3 0 0 1-.64 1.539 7 7 0 0 1-.597.933M8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855q.26-.487.468-1.068zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.7 13.7 0 0 1-.312 2.5m2.802-3.5a7 7 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7 7 0 0 0-3.072-2.472c.218.284.418.598.597.933M10.855 4a8 8 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4z"/></svg></button>
                   </div>
               <div class="form-group mails" >
                   <input type="text" class="form-control formCont" placeholder="Enter email.." required="required">
                    <label for="" class="mt-2">EMAIL</label>
                </div>
               <!-- <div class="form-group mt-3">
                   <input type="password" class="form-control formCont" placeholder="Enter password.." required="required">
               </div> -->
               <!-- <div class="clearfix mt-3 ">
                   <a href="#" class="forgot got ">Forgot Password?</a>
               </div>         -->
               <div class="form-group mt-3 d-flex justify-content-center">
                   <button type="submit" class="btn btn-success btn-block sign-btn  ">SIGN UP</button>
               </div>
            </form>
      
      </div>
     <div class="botS-container">
        <h2>WELCOME TO ABMG!</h2>
        <a href="#" class="forgot">Already have an account?</a>
        <button type="submit" class="btn btn-success btn-block sign-btn btn-transfarency mt-5" data-bs-toggle="modal" data-bs-target="#login-modal">SIGN IN</button>
        <a href="#" class="forgot get">For guest only, Click here.</a>

     </div>
     </div>
            </div>

            <div class="tab row">
             
           
            <div class="toP">
                <div class="circle-img">
              <img
                class="envelope-logo"
                src="./style/images/460289194_860496929396108_2971072421449472491_n.png" 
                alt="avatar_img"
              />
            </div>
              <h2 class="name">OTP VERIFICATION CODE</h2>
            </div>
            <div class="bottoM">
              <p class="info">Enter the OTP sent to your email address</p>
              <div id="otp" class="inputs d-flex flex-row justify-content-center "> 
                <input class="m-2 text-center form-control rounded otpbox" type="text" id="first" maxlength="1"> 
                <input class="m-2 text-center form-control rounded otpbox" type="text" id="second" maxlength="1"> 
                <input class="m-2 text-center form-control rounded otpbox" type="text" id="third" maxlength="1"> 
                <input class="m-2 text-center form-control rounded otpbox" type="text" id="fourth" maxlength="1"> 
                <input class="m-2 text-center form-control rounded otpbox" type="text" id="fifth" maxlength="1"> 
                <input class="m-2 text-center form-control rounded otpbox" type="text" id="sixth" maxlength="1"> 
            </div> 
            <!-- <button type="submit" class="btn btn-success btn-block sign-btn mt-4">SUBMIT</button> -->
            </div>
        

            </div>


            <div class="tab row outer">
              
            <div class="toP">
                <div class="circle-img">
              <img
                class="envelope-logo"
                src="./style/images/460289194_860496929396108_2971072421449472491_n.png" 
                alt="avatar_img"
              />
            </div>
              <h2 class="name">PERSONAL INFORMATION </h2>
            </div>

              <div class="row inner">
                <div class="col-md-6">
                  <div class="col-md-12">
                    <label for="validationCustom03" class="form-label formlabel">Last Name</label>
                    <input type="text" name="first_name" class="form-control inputcontrol" placeholder="Last name" id="validationCustom03" required>
                    <?php if (isset($errors['first_name'])) : ?>
                      <div class="text-danger">
                        <p><?= $errors['first_name'] ?></p>
                      </div>
                    <?php endif; ?>
                  </div>
                  <div class="col-md-12">
                    <label for="validationCustom03" class="form-label formlabel">First Name</label>
                    <input type="text" name="last_name" class="form-control inputcontrol" placeholder="First name" id="validationCustom03" required>
                    <?php if (isset($errors['last_name'])) : ?>
                      <div class="text-danger">
                        <p><?= $errors['last_name'] ?></p>
                      </div>
                    <?php endif; ?>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <label for="validationCustom03" class="form-label formlabel">Middle Initial</label>
                      <input type="text" name="middle" class="form-control inputcontrol" id="validationCustom03" required>
                      <?php if (isset($errors['middle'])) : ?>
                        <div class="text-danger">
                          <p><?= $errors['middle'] ?></p>
                        </div>
                      <?php endif; ?>
                    </div>
                    <div class="col-md-6">

                    <label for="validationDefault04" class="form-label formlabel">Gender</label>
                    <select class="form-select inputcontrol" id="validationDefault04">
                      <option selected value="">Choose...</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>

                 

                      <?php if (isset($errors['gender'])) : ?>
                        <div class="text-danger">
                          <p><?= $errors['gender'] ?></p>
                        </div>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-6">
                      <label for="validationCustom03" class="form-label formlabel">Suffix</label>
                      <input type="text" name="suffix" class="form-control inputcontrol" id="validationCustom03">
                      <?php if (isset($errors['suffix'])) : ?>
                        <div class="text-danger">
                          <p><?= $errors['suffix'] ?></p>
                        </div>
                      <?php endif; ?>
                    </div>
                    <div class="col-md-6">
                      <label for="validationCustom03" class="form-label formlabel">Date of Birth</label>
                      <input type="date" name="birth_date" class="form-control inputcontrol" id="validationCustom03" required>
                      <?php if (isset($errors['birth_date'])) : ?>
                        <div class="text-danger">
                          <p><?= $errors['birth_date'] ?></p>
                        </div>
                      <?php endif; ?>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <label for="validationCustom03" class="form-label formlabel">Address</label>
                    <input type="text" name="address" class="form-control inputcontrol" placeholder="Address" id="validationCustom03" required>
                    <?php if (isset($errors['address'])) : ?>
                      <div class="text-danger">
                        <p><?= $errors['address'] ?></p>
                      </div>
                    <?php endif; ?>
                  </div>
                  <div class="col-md-12">
                    <label for="validationCustom03" class="form-label formlabel">Deceased Relative Name</label>
                    <input type="text" name="relative_name" class="form-control inputcontrol" placeholder="Enter Deceased Name..." id="validationCustom03" required>
                    <?php if (isset($errors['relative_name'])) : ?>
                      <div class="text-danger">
                        <p><?= $errors['relative_name'] ?></p>
                      </div>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>

            <div class="tab row">
            <div class="toP">
                <div class="circle-img">
              <img
                class="envelope-logo"
                src="./style/images/460289194_860496929396108_2971072421449472491_n.png" 
                alt="avatar_img"
              />
            </div>
              <h2 class="name">USERNAME AND PASSWORD</h2>
            </div>

              <div class="col-md-12">
                <label for="validationCustom03" class="form-label labeL">Username</label>
                <input type="text" name="email" class="form-control inpuT" id="validationCustom03" required>
                <?php if (isset($errors['email'])) : ?>
                  <div class="text-danger">
                    <p><?= $errors['email'] ?></p>
                  </div>
                <?php endif; ?>
              </div>
              <div class="col-md-12">
                <label for="validationCustom03" class="form-label labeL">Password</label>
                <input type="password" name="password" class="form-control inpuT" id="validationCustom03" required>
                <?php if (isset($errors['password'])) : ?>
                  <div class="text-danger">
                    <p><?= $errors['password'] ?></p>
                  </div>
                <?php endif; ?>
              </div>
              <div class="col-md-12">
                <label for="validationCustom03" class="form-label labeL">Confirm Password</label>
                <input type="password" name="confirm_pass" class="form-control inpuT" id="validationCustom03" required>
                <?php if (isset($errors['confirm_pass'])) : ?>
                  <div class="text-danger">
                    <p><?= $errors['confirm_pass'] ?></p>
                  </div>
                <?php endif; ?>
              </div>
             
            </div>
            
            <div class="modal-footer w-100 d-flex justify-content-center">
              <button type="button" class="btn btn-secondary back" id="prevBtn" onclick="nextPrev(-1)">BACK</button>
              <button type="button" class="btn btn-success enter" id="nextBtn" onclick="nextPrev(1)">ENTER</button>
            </div>


          </form>
        </div>
      </div>

    </div>
  </div>
</div>

<script src="js/script.js"></script>