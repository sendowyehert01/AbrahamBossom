<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>

  <div class="container p-3 card mt-5 mb-5 w-50">
    <div class="products-services text-center text-success">
      <h1>SIGN UP</h1>
    </div>
    <div class="container w-100 mx-auto">
      <form class="row g-3 needs-validation m-5" action="/register" method="POST" novalidate>
        <div class="col-md-12">
          <label for="validationCustom03" class="form-label">Email</label>
          <input type="text" name="email" class="form-control" id="validationCustom03" required>
          <?php if (isset($errors['email'])) : ?>
            <div class="text-danger">
              <p><?= $errors['email'] ?></p>
            </div>
          <?php endif; ?>
        </div>
        <div class="col-md-12">
          <label for="validationCustom03" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="validationCustom03" required>
          <?php if (isset($errors['password'])) : ?>
            <div class="text-danger">
              <p><?= $errors['password'] ?></p>
            </div>
          <?php endif; ?>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary" type="submit">Submit</button>
        </div>
      </form>
    </div>
  </div>
  
<?php require base_path('views/partials/foot.php') ?>