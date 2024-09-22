<link rel="stylesheet" href="style/multi-step-form.css">

<div class="modal fade" id="register-modal" tabindex="-1" aria-labelledby="register-modal-label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content modCon" style="width:1000px">
    
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
                              <a type="button" class="phone text-dark fs-5 rounded"><i class="bi bi-telephone-fill"></i></a>
                              <a type="button" class="phone text-dark fs-5 rounded"><i class="bi bi-instagram"></i></a>
                              <a type="button" class="phone text-dark fs-5 rounded"><i class="bi bi-globe"></i></a>
                            </div>
                            <div class="form-group mails" >
                              <input type="text" class="form-control formCont" placeholder="Enter email.." required="required">
                              <label for="" class="mt-2">EMAIL</label>
                            </div>
                            <div class="form-group mt-3 d-flex justify-content-center">
                              <button type="submit" class="btn btn-success btn-block sign-btn  ">SIGN UP</button>
                            </div>
                          </form>
                        </div>
                        <div class="botS-container">
                            <h2>WELCOME TO ABMG!</h2>
                            <a href="#" class="forgot" data-bs-toggle="modal" data-bs-target="#forgot-modal"  >Already have an account?</a>
                            <button type="submit" class="btn btn-success btn-block sign-btn btn-transfarency mt-5" data-bs-toggle="modal" data-bs-target="#login-modal">SIGN IN</button>
                            <a href="#" class="forgot get">For guest only, Click here.</a>
                        </div>
                      </div>
                   
                      <div class="tab row">
                          <div class="toP">
                            <div class="circle-img">
                              <img class="envelope-logo"
                              src="./style/images/460289194_860496929396108_2971072421449472491_n.png" alt="avatar_img"/>
                            </div>
                            <h2 class="name">OTP VERIFICATION CODE</h2>
                          </div>
                          <div class="bottoM" >
                            <p class="info">Enter the OTP sent to your email address</p>
                            <div id="otp" class="inputs d-flex flex-row justify-content-center ms-4 me-4 "> 
                              <input class="m-2 text-center form-control rounded otpbox" type="text" id="first" maxlength="1"> 
                              <input class="m-2 text-center form-control rounded otpbox" type="text" id="second" maxlength="1"> 
                              <input class="m-2 text-center form-control rounded otpbox" type="text" id="third" maxlength="1"> 
                              <input class="m-2 text-center form-control rounded otpbox" type="text" id="fourth" maxlength="1"> 
                              <input class="m-2 text-center form-control rounded otpbox" type="text" id="fifth" maxlength="1"> 
                              <input class="m-2 text-center form-control rounded otpbox" type="text" id="sixth" maxlength="1"> 
                            </div> 
                              <button type="submit" class="btn btn-success btn-block sign-btn mt-4">ENTER</button>
                          </div>
                      </div>
        
                      <div class="tab row outer">
                        <div class="otpDiv">
                          <div class="toP">
                            <div class="circle-img">
                              <img class="envelope-logo"
                              src="./style/images/460289194_860496929396108_2971072421449472491_n.png" alt="avatar_img"/>
                            </div>
                            <h2 class="name">PERSONAL INFORMATION </h2>
                          </div>
                          <div class="row inner ms-2 me-2 mt-4">
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
  
                                <div class="form-group mt-5 d-flex justify-content-center">
                                  <button type="submit" class="btn btn-success btn-block sign-btn  ">ENTER</button>
                                </div>
                         </div>
                    </div>

                    <div class="tab row">
                      <div class="otpDiv">
                        <div class="toP">
                          <div class="circle-img">
                            <img class="envelope-logo"src="./style/images/460289194_860496929396108_2971072421449472491_n.png" alt="avatar_img"/>
                          </div>
                          <h2 class="name">USERNAME AND PASSWORD</h2>
                        </div>
                        <div class="col-md-11 mt-4 ">
                          <label for="validationCustom03" class="form-label labeL">Username</label>
                          <input type="text" name="email" class="form-control inpuT" id="validationCustom03" required>
                          <?php if (isset($errors['email'])) : ?>
                            <div class="text-danger">
                              <p><?= $errors['email'] ?></p>
                            </div>
                          <?php endif; ?>
                        </div>
                        <div class="col-md-11 ">
                          <label for="validationCustom03" class="form-label labeL">Password</label>
                          <input type="password" name="password" class="form-control inpuT" id="validationCustom03" required>
                          <?php if (isset($errors['password'])) : ?>
                            <div class="text-danger">
                              <p><?= $errors['password'] ?></p>
                            </div>
                          <?php endif; ?>
                        </div>
                       <div class="col-md-11">
                          <label for="validationCustom03" class="form-label labeL">Confirm Password</label>
                          <input type="password" name="confirm_pass" class="form-control inpuT" id="validationCustom03" required>
                          <?php if (isset($errors['confirm_pass'])) : ?>
                            <div class="text-danger">
                              <p><?= $errors['confirm_pass'] ?></p>
                            </div>
                          <?php endif; ?>
                        </div>
                        <div class="form-group mt-5 d-flex justify-content-center">
                          <button type="submit" class="btn btn-success btn-block sign-btn  ">SUBMIT</button>
                        </div>
                     </div>
                    </div>

                    <div class="tab row">
                      <div class="otpDiv">
                        <div class="toP">
                          <div class="circle-img">
                            <img class="envelope-logo" src="./style/images/460289194_860496929396108_2971072421449472491_n.png" alt="avatar_img"/>
                          </div>
                          <h2 class="name">ABMG</h2>
                        </div>
                        <div class="bottoM mt-5" >
                          <p class="info infO">ACCOUNT SUCCESFULLY CREATED</p>
                          <button type="submit" class="btn btn-success btn-block sign-btn mt-3 mb-4">PROCEED</button>
                        </div>
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