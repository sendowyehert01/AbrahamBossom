<?php require base_path('views/partials/head.php') ?>

<!-- <link rel="stylesheet" href="style/signup.css"> -->
<link rel="stylesheet" href="style/multi-step-form.css">

<div class="container w-75 mx-auto">
  <form class="row g-3 needs-validation" id="regForm" action="/multiform" method="POST">

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
                <select name="gender" class="form-select inputcontrol" id="validationDefault04">
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
      </div>
    </div>
  </div>

  <div class="w-100 d-flex justify-content-center">
    <button type="button" class="btn btn-secondary back" id="prevBtn" onclick="nextPrev(-1)">BACK</button>
    <button type="button" class="btn btn-success enter" id="nextBtn" onclick="nextPrev(1)">ENTER</button>
  </div>

  <!-- Circles which indicates the steps of the form: -->
  <div class="guide text-center">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>

  </form>
</div>

<script src="js/script.js"></script>