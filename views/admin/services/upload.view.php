<?php require base_path('./views/admin/partials/head.php') ?>

<div class="col-10 mt-3 d-flex justify-content-center align-items-center">
  <div class="w-50 border rounded">
    <div class="w-100 p-3 bg-success text-white border rounded-top">
        <h1 class="fs-5">Upload Images</h1>
    </div>
    <form class="row needs-validation p-3" method="POST" action="/admin/services/upload" enctype="multipart/form-data" novalidate>
      <div class="row">
        <div class="col-12 mb-3">
          <input type="hidden" name="id" value="<?= $service['id']?>">
          <input type="file" class="form-control" name="images[]" id="images" aria-label="file example" multiple required>
          <div class="invalid-feedback">Invalid file feedback</div>
          <?php if (isset($errors['images'])) : ?>
              <span class="text-danger"><?= $errors['images'] ?></span>
          <?php endif; ?>
        </div>
        <div class="col-12">
          <a href="/admin/services" class="btn btn-secondary">Back</a>
          <button type="submit" class="btn btn-primary">Upload</button>
        </div>
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