



            <div class="tab row">

              <div class="otpDiv">
                <div class="toP">
                  <div class="circle-img">
                    <img class="envelope-logo" src="./style/images/460289194_860496929396108_2971072421449472491_n.png"
                      alt="avatar_img" />
                  </div>
                  <h2 class="name">CREATE NEW PASSWORD</h2>
                </div>

                <div class="col-md-11 mt-4">
                  <label for="validationCustom03" class="form-label labeL">Password</label>
                  <input type="password" name="password" class="form-control inpuT" id="validationCustom03" required>
                  <?php if (isset($errors['password'])): ?>
                    <div class="text-danger">
                      <p><?= $errors['password'] ?></p>
                    </div>
                  <?php endif; ?>
                </div>
                <div class="col-md-11 mt-2 ">
                  <label for="validationCustom03" class="form-label labeL">Confirm Password</label>
                  <input type="password" name="confirm_pass" class="form-control inpuT" id="validationCustom03"
                    required>
                  <?php if (isset($errors['confirm_pass'])): ?>
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
