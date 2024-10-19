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
              <label class="form-label formlabel">Full Name</label>
              <input type="text" name="full_name" value="<?= $inquiry['full_name']?>" class="form-control inputcontrol" readonly>
            </div>
            <div class="col-md-12">
              <label class="form-label formlabel">Email</label>
              <input type="email" name="email" value="<?= $inquiry['email']?>" class="form-control inputcontrol" readonly>
            </div>
            <div class="col-md-12">
              <label class="form-label formlabel">Contact No</label>
              <input type="text" name="contact_no" value="<?= $inquiry['contact_no']?>" class="form-control inputcontrol" readonly>
            </div>
            <div class="col-md-12">
              <label class="form-label formlabel">Product/Services</label>
              <input type="hidden" name="product_services" value="<?= $inquiry['service_id']?>" class="form-control inputcontrol" readonly>
              <input type="text" name="product_name" value="<?= $inquiry['name']?>" class="form-control inputcontrol" readonly>
            </div>
          </div> 

          <div class="col-md-6">
            <div class="col-md-12">
              <label class="form-label formlabel">Notes</label>
              <textarea name="notes" class="form-control inputcontrol" readonly><?= $inquiry['notes'] ?></textarea>
            </div>
            <div class="col-md-12 mt-2">
              <label class="form-label formlabel">Agreement</label>
              <input type="text" name="is_agree" value="<?= $inquiry['is_agree'] ? 'Agree' : 'Disagree' ?>" class="form-control inputcontrol" readonly>
            </div>
            <div class="col-md-12 mt-2">
              <label for="validationCustom04" class="form-label">Status</label>
              <select name="status" class="form-select" id="validationCustom04" required>
                <option <?= $inquiry['status'] === 'Done' ? 'selected' : '' ?>>Done</option>
                <option <?= $inquiry['status'] === 'Pending' ? 'selected' : '' ?>>Pending</option>
              </select>
            </div>
          </div>
          <div class="col-md-12 mt-3">
              <a href="/admin/inquiries" class="btn btn-secondary">Back</a>
              <button type="submit" class="btn btn-primary">Update Status</button>
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
