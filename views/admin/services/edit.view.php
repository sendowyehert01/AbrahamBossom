<?php require base_path('./views/admin/partials/head.php') ?>

<div class="col-10 mt-3 d-flex justify-content-center align-items-center">
  <div class="w-50 border rounded">
    <div class="w-100 p-3 bg-success text-white border rounded-top">
        <h1 class="fs-5">Update Service</h1>
    </div>
    <form class="row needs-validation p-3" method="POST" action="/admin/services/update" novalidate>
      <input type="hidden" name="_method" value="PATCH" >
      <input type="hidden" name="id" value="<?= $service['id']?>">
      <div class="col-md-12">
        <label class="form-label">Service Name</label>
        <input type="text" name="name" class="form-control" value="<?= $service['name']?>" required>
        <?php if (isset($errors['name'])) : ?>
            <span class="text-danger"><?= $errors['name'] ?></span>
        <?php endif; ?>
      </div>
      <div class="col-md-12">
        <label class="form-label">Price</label>
        <input type="number" name="price" class="form-control" value="<?= $service['price']?>" required>
        <?php if (isset($errors['price'])) : ?>
            <span class="text-danger"><?= $errors['price'] ?></span>
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
                  ><?= $service['description'] ?? null ?></textarea>
        <?php if (isset($errors['description'])) : ?>
            <span class="text-danger"><?= $errors['description'] ?></span>
        <?php endif; ?>
        <p>Write a few sentences about this service.</p>
      </div>
      <div class="col-12">
        <a href="/admin/services" class="btn btn-secondary">Back</a>
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