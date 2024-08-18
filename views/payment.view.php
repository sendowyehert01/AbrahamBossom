<?php require 'partials/head.php'; ?>
<?php require 'partials/nav.php'; ?>
<?php require 'partials/banner.php'; ?>

  <div class="container p-3 card mt-3 mb-3 w-75">
    <div class="products-services text-center text-success">
      <h1>PROOF OF PAYMENT</h1>
    </div>
    <hr class="w-50 mx-auto">
    <div class="text-center">
      <p>Send us your proof of payment and we will get back to you as soon as possible</p>
    </div>
    <div class="container w-100 mx-auto">
      <form class="row g-3 needs-validation m-5" novalidate>
        <div class="col-md-12">
          <label for="validationCustom01" class="form-label">Full Name</label>
          <input type="text" class="form-control" id="validationCustom01" value="" required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-6">
          <label for="validationCustom03" class="form-label">Email</label>
          <input type="text" class="form-control" id="validationCustom03" required>
          <div class="invalid-feedback">
            Please provide a valid email.
          </div>
        </div>
        <div class="col-md-6">
          <label for="validationCustom03" class="form-label">Contact Number</label>
          <input type="text" class="form-control" id="validationCustom03" required>
          <div class="invalid-feedback">
            Please provide a valid contact number.
          </div>
        </div>
        <div class="col-md-12">
          <label for="validationCustom03" class="form-label">Product/Service</label>
          <input type="text" class="form-control" id="validationCustom03" required>
          <div class="invalid-feedback">
            Please provide a valid prodcut/service.
          </div>
        </div>
        <div class="col-md-12">
          <div class="mb-3">
            <label for="validationCustom05" class="form-label">Proof of Payment</label>
            <input class="form-control" type="file" id="validationCustom05" required>
            <div class="invalid-feedback">
              Please provide a valid file.
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">
              Agree to terms and conditions
            </label>
            <div class="invalid-feedback">
              You must agree before submitting.
            </div>
          </div>
        </div>
        <div class="col-12">
          <button class="btn btn-primary" type="submit">Submit</button>
        </div>
      </form>
    </div>
  </div>

<?php require 'partials/foot.php'; ?>