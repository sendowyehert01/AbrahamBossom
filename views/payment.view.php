<?php require 'partials/head.php'; ?>
<?php require 'partials/nav.php'; ?>
<?php require 'partials/banner.php'; ?>

<!-- <div class="container p-3 card mt-3 mb-3 w-75">
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
  </div> -->

<style>
  div h2 {
    font-size: 32px;
    color: #2f5a37;
    font-weight: bold;
  }

  p,
  .li {
    font-weight: bold;
    margin-bottom: 5px;
    color: #333;
  }

  .image-box {
   
    display: flex;
    justify-content: center;
    padding: 1rem;
  }

  .image-box img {
    width: 60%;
    height: 60%;
    background: tranparent;
  }
</style>

<div class="container mt-5">
  <div class="row">
    <div class="col-lg-4 col-md-6 col-12">
      <div class="image-box">
        <img src="style/images/payment_logo/bdo.png" alt="" srcset="">
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-12">
      <div class="image-box">
        <img style="width: 90%;" src="style/images/payment_logo/gcash.png" alt="" srcset="">
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-12">
      <div class="image-box">
        <img src="style/images/payment_logo/bpi.png" alt="" srcset="">
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-12">
      <div class="image-box">
        <img src="style/images/payment_logo/maya.png" alt="" srcset="">
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-12">
      <div class="image-box">
        <img src="style/images/payment_logo/metrobank.png" alt="" srcset="">
      </div>
    </div>
  </div>
</div>

<div class="container mt-5">
  <h3 class="text-center text-dark">Online Banking | Mobile Banking | Over the Counter</h3>
</div>

<div class="container-fluid mt-5 pb-5" style="background-color: white;">
  <div class="container">
    <h2 class="pt-5">ABMG HEAD OFFICE</h2>
    <p class="ms-3">You can pay directly in our office address:</p>
    <li class="ms-5 li">KM 49 Aguinaldo Highway, Silang, Cavite</li>
  </div>
</div>


<?php require 'forms/payment_form.php'; ?>

<?php require 'partials/foot.php'; ?>

<!-- Modal -->
<div class="modal fade" id="paymentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-heade d-flex justify-content-center p-3">
        <div class="modal-title fs-5" id="staticBackdropLabel">Payment Instruction</div>
      </div>
      <div class="modal-body">
                <h6 class="fw-bold">Online Banking Procedure</h6>
                <ol>
                    <li>Open the app</li>
                    <li>Select “Bills Payment”</li>
                    <li>Click “Pay Bill”</li>
                    <li>Click “Select Biller”</li>
                    <li>Select Abraham Bosom</li>
                    <li>Fill in the Reference Number with your 8-digit contract number</li>
                </ol>

                <h6 class="fw-bold">OTC Procedure</h6>
                <ol>
                    <li>Get Bills Payment Slip</li>
                    <li>Fill in the required information:</li>
                    <ul>
                        <li>Company Name: Abraham Bosom Memorial</li>
                        <li>Subscriber/Card Holder: Account Holder’s Name</li>
                        <li>Subscriber’s No./Card No.: 8-digit contract number</li>
                    </ul>
                </ol>

                <h6>More Information:</h6>
                <p>URL: <a class="text-success" href="https://www.bdo.com.ph/personal/digital/bdo-online" target="_blank">https://www.bdo.com.ph/personal/digital/bdo-online</a></p>
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success" data-bs-dismiss="modal">Understood</button>
          </div>
    </div>
  </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var paymentModal = new bootstrap.Modal(document.getElementById('paymentModal'));
        paymentModal.show();
    });
</script>