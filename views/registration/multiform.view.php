<?php require base_path('views/partials/head.php') ?>

<link rel="stylesheet" href="style/multi-step-form.css">


<!-- Consent Modal -->
<div class="modal fade" id="consentModal" tabindex="-1" aria-labelledby="consentModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title mt-3" id="consentModalLabel">USER SIGN UP DATA CONSENT</h5>
      </div>
      <div class="modal-body">
        <p>
          I hereby authorize Abraham's Bosom Memorial Garden to collect and process the personal information indicated in this form for the purpose of registration. All data collected and recorded will only be accessed by ABMG Admin Office and shared with ABMG Secretary. I understand that the personal information collected and processed is confidential and protected by RA 10173 or Data Privacy Act of 2012. All information will only be kept in Abraham's Bosom Memorial Garden.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="disagreeBtn">Disagree</button>
        <button type="button" class="btn btn-success" id="agreeBtn">Agree</button>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid vh-100 d-flex justify-content-center align-items-center ">
  <form class="row g-3 needs-validation d-flex justify-content-center align-items-center rounded border shadow mb-5 bg-white rounded" id="regForm" action="/multiform" method="POST">
    <div class="tab row p-0">
        <div class="bg-dark modal-head d-flex rounded-top d-flex justify-content-center align-items-center p-3 mb-3">
          <div class="rounded-circle text-white border p-3">
            <span><i class="bi bi-envelope"></i></span>
          </div>
          <h2 class="text-white m-3">PERSONAL INFORMATION </h2>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="col-md-12">
              <label for="validationCustom03" class="form-label formlabel">Last Name</label>
              <input type="text" name="last_name" class="form-control inputcontrol" placeholder="Last name" id="validationCustom03" required>
              <?php if (isset($errors['last_name'])) : ?>
                <div class="text-danger">
                  <p><?= $errors['last_name'] ?></p>
                </div>
            <?php endif; ?>
            </div>
            <div class="col-md-12">
              <label for="validationCustom03" class="form-label formlabel">First Name</label>
              <input type="text" name="first_name" class="form-control inputcontrol" placeholder="First name" id="validationCustom03" required>
              <?php if (isset($errors['first_name'])) : ?>
                <div class="text-danger">
                  <p><?= $errors['first_name'] ?></p>
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

    <div class="tab row p-0">
        <div class="bg-dark modal-head d-flex rounded-top d-flex justify-content-center align-items-center p-3 mb-3">
          <div class="rounded-circle text-white border p-3">
            <span><i class="bi bi-envelope"></i></span>
          </div>
          <h2 class="text-white m-3">PERSONAL INFORMATION </h2>
        </div>
        <div class="col-md-11 mt-4 ">
          <label for="validationCustom03" class="form-label labeL">Email</label>
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

    <div class="w-100 d-flex justify-content-center">
      <button type="button" class="btn btn-secondary back" id="prevBtn" onclick="nextPrev(-1)">BACK</button>
      <button type="button" class="btn btn-success enter" id="nextBtn" onclick="nextPrev(1)">ENTER</button>
    </div>

    <!-- Circles which indicates the steps of the form: -->
    <div class="guide text-center">
      <span class="step"></span>
      <span class="step"></span>
    </div>

  </form>
</div>

<script src="js/script.js"></script>

<!-- Bootstrap 5 JS and Dependencies -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>
  // Show modal when the page loads
  var consentModal = new bootstrap.Modal(document.getElementById('consentModal'));
  consentModal.show();

  // If "Agree" is clicked, close the modal
  document.getElementById('agreeBtn').addEventListener('click', function () {
    consentModal.hide();
  });

  // If "Disagree" is clicked, redirect to the homepage
  document.getElementById('disagreeBtn').addEventListener('click', function () {
    window.location.href = '/';
  });
</script>

</body>
</html>
