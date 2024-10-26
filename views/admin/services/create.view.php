
  <!-- Modal -->
  <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header bg-success text-white">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Create Service</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form class="row needs-validation" method="POST" action="/admin/services/store" novalidate>
          <div class="col-md-12">
            <label class="form-label">Service Name</label>
            <input type="text" name="name" class="form-control" required>
            <?php if (isset($errors['name'])) : ?>
                <span class="text-danger"><?= $errors['name'] ?></span>
            <?php endif; ?>
          </div>
          <div class="col-md-12">
            <label class="form-label">Service Type</label>
            <select class="form-select" name="type" required>
              <option selected value="">Select Service Type</option>
              <option value="Burial Lots">Burial Lots</option>
              <option value="Funeral Services">Funeral Services</option>
            </select>
            <?php if (isset($errors['type'])) : ?>
                <span class="text-danger"><?= $errors['type'] ?></span>
            <?php endif; ?>
          </div>
          <div class="col-md-12">
            <label class="form-label">Description</label>
            <textarea 
                      id="description" 
                      name="description" 
                      rows="3"
                      class="form-control"
                      required
                      ><?= $_POST['description'] ?? null ?></textarea>
            <?php if (isset($errors['description'])) : ?>
                <span class="text-danger"><?= $errors['description'] ?></span>
            <?php endif; ?>
            <p>Write a few sentences about this service.</p>
          </div>
          <div class="modal-footer col-12">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success">Save</button>
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