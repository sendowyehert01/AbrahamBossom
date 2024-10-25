<?php require 'partials/head.php'; ?>
<?php require 'partials/nav.php'; ?>
<link rel="stylesheet" href="style/buyer.css">

<form id="regForm" action="/buyer" method="POST" class="needs-validation border rounded" novalidate>

  <input type="hidden" name="formType" value="1">

  <!-- One "tab" for each step in the form: -->
  <div class="tab">
    <div class="d-flex mb-5">
      <img width="70px" height="70px" src="style/images/logo_no_bg.png" alt="logo">
      <h3 class="pt-4 fw-bold">LOT DETAILS</h3>
    </div>
    <div class="row mb-3">
      <h3>Select Phase: <span class="text-danger">*</span></h3>
      <div class="col-6">
        <div class="form-check">
          <input class="form-check-input p-0 mx-3 radio" type="radio" name="phase" value="1" id="phase1">
          <label class="form-check-label" for="phase1">
            PHASE 1
          </label>
        </div>
      </div>
      <div class="col-6">
        <div class="form-check d-flex align-content-center">
          <input class="form-check-input p-0 mx-3 radio" type="radio" name="phase" value="2" id="phase2">
          <label class="form-check-label" for="phase2">
            PHASE 2
          </label>
        </div>
      </div>
    </div>
    <div class="row mb-3">
      <h3>Select Services: <span class="text-danger">*</span></h3>
      <div class="col-6">  
        <select class="form-select" id="serviceSelect" name="selectedService" onchange="showServiceDetails()" required>
          <option selected value="">Select Service</option>
          <option value="lawn">Lawn (Size: 2.5 x 1m)</option>
          <option value="garden">Garden of Eden (Size: 2.5 x 3m)</option>
          <option value="family">Family Estate</option>
          <option value="apartment">Apartment Type</option>
          <option value="columbarium">Columbarium</option>
        </select>
        <div class="invalid-feedback">Service is required</div>
      </div>
      <div class="col-6">
        <!-- Lawn Service Details -->
        <div id="lawnOptions" class="service-details">
        </div>

        <!-- Garden of Eden Service Details -->
        <div id="gardenOptions" class="service-details">
        </div>

        <!-- Family Estate (No details needed) -->
        <div id="familyOptions" class="service-details" style="display: none">
          <p>No additional details needed for Family Estate.</p>
        </div>

        <!-- Apartment Service Details -->
        <div id="apartmentOptions" class="service-details">
        </div>

        <!-- Columbarium (No details needed) -->
        <div id="columbariumOptions" class="service-details" style="display: none">
          <p>No additional details needed for Columbarium.</p>
        </div>
      </div>
    </div>
  </div>

  <hr>

  <div class="tab">
    <div class="d-flex mb-5">
      <img width="70px" height="70px" src="style/images/logo_no_bg.png" alt="logo">
      <h3 class="pt-4 fw-bold">PAYMENT DETAILS</h3>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="form-check d-flex align-items-center">
          <input class="form-check-input m-3" type="radio" name="mop" value="atNeed" id="atNeed" onclick="getSelectedValue()">
          <label class="form-check-label m-3" for="atNeed">At - Need</label>
        </div>
      </div>
      <div class="col-12">
        <div class="form-check d-flex align-items-center">
          <input class="form-check-input m-3" type="radio" name="mop" value="cash" id="cash" onclick="getSelectedValue()">
          <label class="form-check-label m-3" for="cash">Cash (Full Payment upon Purchase)</label>
        </div>
      </div>
      <div class="col-12">
        <div class="form-check d-flex align-items-center">
          <input class="form-check-input m-3" type="radio" name="mop" value="noDp" id="noDp" onclick="getSelectedValue()">
          <label class="form-check-label m-3" for="noDp">No Down Payment</label>
        </div>
      </div>
      <div class="col-12">
        <div class="form-check d-flex align-items-center">
          <input class="form-check-input m-3" type="radio" name="mop" value="withDp" id="withDp" onclick="getSelectedValue()">
          <label class="form-check-label m-3" for="withDp">With Down Payment</label>
        </div>
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-6">
        <label class="form-label" for="totalSellingPrice">Total Selling Price</label>
        <input type="text" class="form-control required" name="totalPrice" id="totalSellingPrice" required>
        <div class="invalid-feedback">Total price is required</div>
      </div>

      <div class="col-6" id="amort">
        <!-- <label class="form-label" for="monthlyAmorization" id="monthly">Monthly Amortization</label>
        <input type="text" class="form-control required" name="amortization" id="monthlyAmorization" required> -->
      </div>

      <div class="col-6" id="dp">
        <!-- <label class="form-label" for="downPayment">Down Payment</label>
        <input type="text" class="form-control required" name="downpayment" id="downPayment" required> -->
      </div>

      <div class="col-6" id="term">
        <!-- <label class="form-label" for="termsOfPayment">Terms of Payment</label>
        <input type="text" class="form-control required" name="termsOfPayment" id="termsOfPayment" required> -->
      </div>
    </div>
  </div>

  <hr>

  <div class="tab">
    <div class="d-flex mb-5">
      <img width="70px" height="70px" src="style/images/logo_no_bg.png" alt="logo">
      <h3 class="pt-4 fw-bold">LOT OWNER'S INFORMATION</h3>
    </div>

    <div class="row mt-4">
      <div class="col-md-4">
        <label for="lastName" class="form-label">Last Name</label>
        <input type="text" class="form-control" name="lastName" id="lastName" required>
        <div class="invalid-feedback">Last name is required</div>
      </div>
      <div class="col-md-4">
        <label for="firstName" class="form-label">First Name</label>
        <input type="text" class="form-control" name="firstName" id="firstName" required>
        <div class="invalid-feedback">First name is required</div>
      </div>
      <div class="col-md-2">
        <label for="middleInitial" class="form-label">Middle Initial</label>
        <input type="text" class="form-control" name="middle" id="middleInitial">
      </div>
      <div class="col-md-2">
        <label for="suffix" class="form-label">Suffix</label>
        <input type="text" class="form-control" name="suffix" id="suffix">
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-md-6">
        <label for="address" class="form-label">Address</label>
        <input type="text" class="form-control" name="address" id="address" required>
        <div class="invalid-feedback">Address is required</div>
      </div>
      <div class="col-md-3">
        <label for="dob" class="form-label">Date of Birth</label>
        <input type="date" class="form-control" name="birthDate" id="dob" required>
        <div class="invalid-feedback">Date of birth is required</div>
      </div>
      <div class="col-md-3">
        <label for="gender" class="form-label">Gender</label>
        <select class="form-select" id="gender" name="gender" required>
          <option selected disabled value="">Choose...</option>
          <option>Male</option>
          <option>Female</option>
        </select>
        <div class="invalid-feedback">Gender is required</div>
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-md-3">
        <label for="contactNumber" class="form-label">Contact Number</label>
        <input type="text" class="form-control" name="contactNo" id="contactNumber" required>
        <div class="invalid-feedback">Contact number is required</div>
      </div>
      <div class="col-md-3">
        <label for="email" class="form-label">E-mail Address</label>
        <input type="email" class="form-control" name="email" id="email" required>
        <div class="invalid-feedback">Email is required</div>
      </div>
    </div>
  </div>

  <hr>

  <div class="tab">
    <div class="d-flex mb-5">
      <img width="70px" height="70px" src="style/images/logo_no_bg.png" alt="logo">
      <h3 class="pt-4 fw-bold">BENEFICIARY INFORMATION</h3>
    </div>

    <div class="row mb-3">
      <div class="col-2">
        <label for="number" class="form-label">No.</label>
        <input type="text" class="form-control" id="number" required>
      </div>
      <div class="col-4">
        <label for="fullName" class="form-label">Full Name</label>
        <input type="text" class="form-control" id="fullName" required>
      </div>
      <div class="col-6">
        <label for="relationship" class="form-label">Relationship to Lot Owner</label>
        <div class="d-flex">
          <div class="w-100">
            <input type="text" class="form-control" id="relationship" required>
          </div>
          <div class="mx-2">
            <button class="btn btn-secondary" onclick="addBeneficiaryRow()">Add</button>
          </div>
        </div>
      </div>
    </div>

    <table class="table table-success mt-3 mb-3">
      <thead>
        <tr>
          <th scope="col">No.</th>
          <th scope="col">Full Name</th>
          <th scope="col">Relationship to Lot Owner</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>No data</td>
          <td>No data</td>
          <td>No data</td>
        </tr>
      </tbody>
    </table>

  </div>

  <div style="overflow:auto;" class="mt-3">
    <div style="float:right;">
      <button class="btn btn-success" type="submit">Submit</button>
    </div>
  </div>
</form>

<script>
    (function() {
        'use strict'
        var forms = document.querySelectorAll('.needs-validation')
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    } else {
                      form.submit();
                    }
                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>

<script src="js/buyer.js"></script>

<?php require 'partials/foot.php'; ?>
