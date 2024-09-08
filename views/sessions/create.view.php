<div class="modal fade" id="login-modal" tabindex="-1" aria-labelledby="login-modal-label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">

      <div class="modal-header">
        <h1 class="modal-title fs-5" id="login-modal-label">SIGN IN</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
      <div class="container w-100 mx-auto"> 
        <form class="row g-3 needs-validation m-5" action="/sessions" method="POST" novalidate>
              <div class="col-md-12">
                <label for="validationCustom03" class="form-label">Email</label>
                <input type="text" value="<?= old('email') ?>" name="email" class="form-control" id="validationCustom03" required>
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
              <div class="modal-footer">
                <div class="col-12">
                  <button type="submit" class="btn btn-primary" type="submit">Submit</button>
                </div>
              </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>