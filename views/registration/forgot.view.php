<link rel="stylesheet" href="style/multi-step-form.css">

<div class="modal fade" id="forgot-modal" tabindex="-1" aria-labelledby="forgot-modal-label" aria-hidden="true">
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
            <div class="otpDiv">
            <div class="toP">
                <div class="circle-img">
              <img
                class="envelope-logo"
                src="./style/images/460289194_860496929396108_2971072421449472491_n.png" 
                alt="avatar_img"
              />
            </div>
              <h2 class="name">PASSWORD RECOVERY</h2>
            </div>

              <div class=" ms-4 mt-5 " style="width:70%">
              <h6 class="text-center mb-4">We will send a One Time Password on this Email Address</h6> 
                <input type="text" name="email" class="form-control inpuT text-center" id="validationCustom03" placeholder="ENTER EMAIL" required>
                <?php if (isset($errors['email'])) : ?>
                  <div class="text-danger">
                    <p><?= $errors['email'] ?></p>
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
              <img
                class="envelope-logo"
                src="./style/images/460289194_860496929396108_2971072421449472491_n.png" 
                alt="avatar_img"
              />
            </div>
              <h2 class="name">OTP VERIFICATION CODE</h2>
            </div>
            <div class="bottoM" >
              <p class="info text-center">Enter the OTP sent to your email address</p>
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

            </div>



            <div class="tab row">
              
            <div class="otpDiv">
            <div class="toP">
                <div class="circle-img">
              <img
                class="envelope-logo"
                src="./style/images/460289194_860496929396108_2971072421449472491_n.png" 
                alt="avatar_img"
              />
            </div>
              <h2 class="name">CREATE NEW PASSWORD</h2>
            </div>

              <div class="col-md-11 mt-4">
                <label for="validationCustom03" class="form-label labeL">Password</label>
                <input type="password" name="password" class="form-control inpuT" id="validationCustom03" required>
                <?php if (isset($errors['password'])) : ?>
                  <div class="text-danger">
                    <p><?= $errors['password'] ?></p>
                  </div>
                <?php endif; ?>
              </div>
              <div class="col-md-11 mt-2 ">
                <label for="validationCustom03" class="form-label labeL">Confirm Password</label>
                <input type="password" name="confirm_pass" class="form-control inpuT" id="validationCustom03" required>
                <?php if (isset($errors['confirm_pass'])) : ?>
                  <div class="text-danger">
                    <p><?= $errors['confirm_pass'] ?></p>
                  </div>
                <?php endif; ?>
              </div>

              <div class="form-group mt-4 d-flex justify-content-center">
                   <button type="submit" class="btn btn-success btn-block sign-btn  ">SUBMIT</button>
               </div>
              </div>
            </div>

            <div class="tab row">
            <div class="otpDiv">
            <div class="toP">
                <div class="circle-img">
              <img
                class="envelope-logo"
                src="./style/images/460289194_860496929396108_2971072421449472491_n.png" 
                alt="avatar_img"
              />
            </div>
              <h2 class="name">ABMG</h2>
            </div>
            <div class="bottoM mt-5" >
              <p class="info infO">PASSWORD SUCCESFULLY CHANGED</p>
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