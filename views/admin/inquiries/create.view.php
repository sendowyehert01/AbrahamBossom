<!-- Modal -->
<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-success text-white">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Create Inquiry</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="row needs-validation" method="POST" action="/admin/inquiries/store" novalidate>
          <div class="col-md-12">
            <label class="form-label">Full Name</label>
            <input type="text" name="full_name" class="form-control" required>
            <?php if (isset($errors['full_name'])) : ?>
                <span class="text-danger"><?= $errors['full_name'] ?></span>
            <?php endif; ?>
          </div>
          <div class="col-md-12">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" required>
            <?php if (isset($errors['email'])) : ?>
                <span class="text-danger"><?= $errors['email'] ?></span>
            <?php endif; ?>
          </div>
          <div class="col-md-12">
            <label class="form-label">Contact No</label>
            <input type="text" name="contact_no" class="form-control" required>
            <?php if (isset($errors['contact_no'])) : ?>
                <span class="text-danger"><?= $errors['contact_no'] ?></span>
            <?php endif; ?>
          </div>
          <div class="col-md-12">
            <label class="form-label">Product/Services</label>
            <input type="text" name="product_services" class="form-control" required>
            <?php if (isset($errors['product_services'])) : ?>
                <span class="text-danger"><?= $errors['product_services'] ?></span>
            <?php endif; ?>
          </div>
          <div class="col-md-12">
            <label class="form-label">Notes</label>
            <textarea 
                      id="description" 
                      name="notes" 
                      rows="3"
                      class="form-control"
                      required
                      ><?= $_POST['notes'] ?? null ?></textarea>
            <?php if (isset($errors['notes'])) : ?>
                <span class="text-danger"><?= $errors['notes'] ?></span>
            <?php endif; ?>
            <p>Write any additional notes about this inquiry.</p>
          </div>
          <div class="col-md-12 mt-2">
            <label class="form-label">Agreement</label>
            <select name="is_agree" class="form-select" required>
              <option value="1">Agree</option>
              <option value="0">Disagree</option>
            </select>
            <?php if (isset($errors['is_agree'])) : ?>
                <span class="text-danger"><?= $errors['is_agree'] ?></span>
            <?php endif; ?>
          </div>
          <div class="modal-footer col-12">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </form>
      </div>
    </div>
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
