<?php require base_path('./views/admin/partials/head.php') ?>

<div class="col-10 mt-3 d-flex justify-content-center align-items-center">
  <div class="w-75 border rounded">
    <div class="w-100 p-3 bg-success text-white border rounded-top">
        <h1 class="fs-5">Update Inquiry</h1>
    </div>
    <form class="row needs-validation p-3" method="POST" action="/admin/inquiries/update" novalidate>
      <input type="hidden" name="_method" value="PATCH" >
      <input type="hidden" name="id" value="<?= $inquiry['id']?>">
        <div class="row">
          <div class="col-md-6">
            <div class="col-md-12">
              <label for="validationCustom03" class="form-label formlabel">Full Name</label>
              <input type="text" name="full_name" value="<?= $inquiry['full_name']?>" class="form-control inputcontrol" placeholder="Full Name" id="validationCustom03" required>
              <?php if (isset($errors['full_name'])) : ?>
                <div class="text-danger">
                  <p><?= $errors['full_name'] ?></p>
                </div>
              <?php endif; ?>
            </div>
            <div class="col-md-12">
              <label for="validationCustom03" class="form-label formlabel">Email</label>
              <input type="email" name="email"  value="<?= $inquiry['email']?>" class="form-control inputcontrol" placeholder="Email" id="validationCustom03" required>
              <?php if (isset($errors['email'])) : ?>
                <div class="text-danger">
                  <p><?= $errors['email'] ?></p>
                </div>
              <?php endif; ?>
            </div>
            <div class="col-md-12">
              <label for="validationCustom03" class="form-label formlabel">Contact No</label>
              <input type="text" name="contact_no"  value="<?= $inquiry['contact_no']?>" class="form-control inputcontrol" placeholder="Contact No" id="validationCustom03" required>
              <?php if (isset($errors['contact_no'])) : ?>
                <div class="text-danger">
                  <p><?= $errors['contact_no'] ?></p>
                </div>
              <?php endif; ?>
            </div>
            <div class="col-md-12">
              <label for="validationCustom03" class="form-label formlabel">Product/Services</label>
              <input type="text" name="product_services"  value="<?= $inquiry['product_services']?>" class="form-control inputcontrol" placeholder="Product/Services" id="validationCustom03" required>
              <?php if (isset($errors['product_services'])) : ?>
                <div class="text-danger">
                  <p><?= $errors['product_services'] ?></p>
                </div>
              <?php endif; ?>
            </div>
          </div>

          <div class="col-md-6">
            <div class="col-md-12">
              <label for="validationCustom03" class="form-label formlabel">Notes</label>
              <textarea name="notes" class="form-control inputcontrol" placeholder="Notes" id="validationCustom03" required><?= $inquiry['notes'] ?></textarea>
              <?php if (isset($errors['notes'])) : ?>
                <div class="text-danger">
                  <p><?= $errors['notes'] ?></p>
                </div>
              <?php endif; ?>
            </div>
            <div class="col-md-12 mt-2">
              <label class="form-label formlabel">Agreement</label>
              <select name="is_agree" class="form-select inputcontrol" id="validationDefault04" required>
                <option value="1" <?php if ($inquiry['is_agree']) echo 'selected' ?>>Agree</option>
                <option value="0" <?php if (!$inquiry['is_agree']) echo 'selected' ?>>Disagree</option>
              </select>
            </div>
          </div>
          <div class="col-md-12 mt-3">
              <a href="/admin/inquiries" class="btn btn-secondary">Back</a>
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
