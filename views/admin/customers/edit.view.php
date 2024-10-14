<?php require base_path('./views/admin/partials/head.php') ?>

<div class="col-10 mt-3 d-flex justify-content-center align-items-center">
  <div class="w-75 border rounded">
    <div class="w-100 p-3 bg-success text-white border rounded-top">
        <h1 class="fs-5">Update Customer</h1>
    </div>
    <form class="row needs-validation p-3" method="POST" action="/admin/customers/update" novalidate>
      <input type="hidden" name="_method" value="PATCH" >
      <input type="hidden" name="id" value="<?= $customer['id']?>">
        <div class="row">
          <div class="col-md-6">
            <div class="col-md-12">
              <label for="validationCustom03" class="form-label formlabel">Position</label>
              <input type="text" name="position" value="<?= $customer['position']?>" class="form-control inputcontrol" placeholder="Last name" id="validationCustom03" required>
              <?php if (isset($errors['position'])) : ?>
                <div class="text-danger">
                  <p><?= $errors['position'] ?></p>
                </div>
              <?php endif; ?>
            </div>
            <div class="col-md-12">
              <label for="validationCustom03" class="form-label formlabel">Last Name</label>
              <input type="text" name="last_name"  value="<?= $customer['last_name']?>" class="form-control inputcontrol" placeholder="Last name" id="validationCustom03" required>
              <?php if (isset($errors['last_name'])) : ?>
                <div class="text-danger">
                  <p><?= $errors['last_name'] ?></p>
                </div>
              <?php endif; ?>
            </div>
            <div class="col-md-12">
              <label for="validationCustom03" class="form-label formlabel">First Name</label>
              <input type="text" name="first_name"  value="<?= $customer['first_name']?>" class="form-control inputcontrol" placeholder="First name" id="validationCustom03" required>
              <?php if (isset($errors['first_name'])) : ?>
                <div class="text-danger">
                  <p><?= $errors['first_name'] ?></p>
                </div>
              <?php endif; ?>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label for="validationCustom03" class="form-label formlabel">Middle Initial</label>
                  <input type="text" name="middle" value="<?= $customer['middle']?>" class="form-control inputcontrol" id="validationCustom03" required>
                  <?php if (isset($errors['middle'])) : ?>
                    <div class="text-danger">
                      <p><?= $errors['middle'] ?></p>
                    </div>
                  <?php endif; ?>
              </div>
              <div class="col-md-6">
                <label for="validationDefault04" class="form-label formlabel">Gender</label>
                  <select name="gender" class="form-select inputcontrol" id="validationDefault04">
                    <option value="" <?php if (! $customer['gender']) echo 'selected' ?>>Choose...</option>
                    <option value="Male" <?php if ($customer['gender'] === 'Male') echo 'selected' ?> >Male</option>
                    <option value="Female" <?php if ($customer['gender'] === 'Female') echo 'selected' ?>>Female</option>
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
                <input type="text" name="suffix" value="<?= $customer['suffix']?>" class="form-control inputcontrol" id="validationCustom03">
                <?php if (isset($errors['suffix'])) : ?>
                  <div class="text-danger">
                    <p><?= $errors['suffix'] ?></p>
                  </div>
                <?php endif; ?>
              </div>
              <div class="col-md-6">
                <label for="validationCustom03" class="form-label formlabel">Date of Birth</label>
                <input type="date" name="birth_date" value="<?= $customer['birth_date']?>" class="form-control inputcontrol" id="validationCustom03" required>
                <?php if (isset($errors['birth_date'])) : ?>
                  <div class="text-danger">
                    <p><?= $errors['birth_date'] ?></p>
                  </div>
                <?php endif; ?>
              </div>
            </div>
            <div class="col-md-12">
              <label for="validationCustom03" class="form-label formlabel">Address</label>
              <input type="text" name="address"  value="<?= $customer['address']?>" class="form-control inputcontrol" placeholder="Address" id="validationCustom03" required>
              <?php if (isset($errors['address'])) : ?>
                <div class="text-danger">
                  <p><?= $errors['address'] ?></p>
                </div>
              <?php endif; ?>
            </div>
          </div>
          <div class="col-md-12 mt-3">
              <a href="/admin/customers" class="btn btn-secondary">Back</a>
              <button type="submit" class="btn btn-primary">Update</button>
          </div>
    </form>
  </div>
</div>

<script>
(() => {
  'use strict'

  const forms = document.querySelectorAll('.needs-validation')

  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
</script>

<?php require base_path('./views/admin/partials/foot.php') ?>