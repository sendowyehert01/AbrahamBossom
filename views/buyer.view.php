<?php require 'partials/head.php'; ?>
<?php require 'partials/nav.php'; ?>

<style>
  /* Style the form */
  #regForm {
    background-color: #ffffff;
    margin: 100px auto;
    padding: 40px;
    width: 70%;
    min-width: 300px;
  }

  /* Mark input boxes that get an error on validation: */
  /* input.invalid {
    background-color: #ffdddd;
  } */

  /* Mark labels that get an error on validation: */
  label.invalid {
    color: red;
  }

  /* Hide all steps by default: */
  .tab {
    display: none;
  }

  /* Style for the step indicators (circles): */
  .step {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbbbbb;
    border: none;
    border-radius: 50%;
    display: inline-block;
    opacity: 0.5;
  }

  /* Mark the active step: */
  .step.active {
    opacity: 1;
  }

  /* Mark the steps that are finished and valid: */
  .step.finish {
    background-color: #04AA6D;
  }

  /* Style for Beneficiary table */
  table {
    width: 100%;
    margin-top: 20px;
    border-collapse: collapse;
  }

  table,
  th,
  td {
    border: 1px solid black;
    padding: 10px;
    text-align: left;
  }

  th {
    /* background-color: #1a8754; */
  }
</style>

<div class="container w-100 mx-auto">
  <form id="regForm" action="" class="row g-3 needs-validation" novalidate>
    <!-- First Tab: Lot Details -->
    <div class="tab col-12">
      <div class="d-flex">
        <img style="width: 6rem;" src="style/images/logo_no_bg.png" alt="logo">
        <h3 class="pt-4 fw-bold">LOT DETAILS</h3>
      </div>

      <div class="row mt-4">
        <!-- Phase 1 -->
        <div class="col-6">
          <div class="form-group mb-4">
            <div class="d-flex align-items-center gap-2 mb-3">
              <label for="phase1">Phase 1:</label>
              <input type="checkbox" id="phase1">
            </div>

            <div class="input mb-3">
              <select class="form-select" id="serviceSelect" onchange="showServiceDetails()">
                <option selected value="">Select Service</option>
                <option value="lawn">Lawn (Size: 2.5 x 1m)</option>
                <option value="garden">Garden of Eden (Size: 2.5 x 3m)</option>
                <option value="family">Family Estate</option>
                <option value="apartment">Apartment Type</option>
                <option value="columbarium">Columbarium</option>
              </select>
            </div>
          </div>
        </div>

        <!-- Phase 2 -->
        <div class="col-6">
          <div class="d-flex align-items-center gap-2 mb-3">
            <label for="phase2">Phase 2:</label>
            <input type="checkbox" id="phase2">
          </div>

          <!-- Lawn Service Details -->
          <div id="lawnOptions" class="service-details" style="display: none;">
            <h5>Select Lawn Type:</h5>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="lawnType" id="lawnRegular" value="regular">
              <label class="form-check-label" for="lawnRegular">Regular</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="lawnType" id="lawnPremium" value="premium">
              <label class="form-check-label" for="lawnPremium">Premium</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="lawnType" id="lawnPrime" value="prime">
              <label class="form-check-label" for="lawnPrime">Prime</label>
            </div>
          </div>

          <!-- Garden of Eden Service Details -->
          <div id="gardenOptions" class="service-details" style="display: none;">
            <div class="mb-3">
              <label for="blockNumber" class="form-label">Block Number</label>
              <input type="text" id="blockNumber" class="form-control">
            </div>
            <div class="mb-3">
              <label for="lotNumber" class="form-label">Lot Number</label>
              <input type="text" id="lotNumber" class="form-control">
            </div>
          </div>

          <!-- Family Estate (No details needed) -->
          <div id="familyOptions" class="service-details" style="display: none;">
            <p>No additional details needed for Family Estate.</p>
          </div>

          <!-- Apartment Service Details -->
          <div id="apartmentOptions" class="service-details" style="display: none;">
            <div class="mb-3">
              <label for="blockNumberApartment" class="form-label">Block Number</label>
              <input type="text" id="blockNumberApartment" class="form-control">
            </div>
            <div class="mb-3">
              <label for="unitNumber" class="form-label">Unit Number</label>
              <input type="text" id="unitNumber" class="form-control">
            </div>
          </div>

          <!-- Columbarium (No details needed) -->
          <div id="columbariumOptions" class="service-details" style="display: none;">
            <p>No additional details needed for Columbarium.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="tab col-12">
      <div class="d-flex">
        <img style="width: 6rem;" src="style/images/logo_no_bg.png" alt="logo">
        <h3 class="pt-4 fw-bold">PAYMENT DETAILS</h3>
      </div>
      <div class="row mt-4">
        <div class="col-6">
          <input type="checkbox" class="me-3" name="atNeed" id="atNeed"><label class="me-5" for="atNeed">At - Need</label>
        </div>
        <div class="col-6">
          <input type="checkbox" class="me-3" name="cashPayment" id="cashPayment"><label for="cashPayment">Cash (Full Payment upon Purchase)</label>
        </div>
        <div class="col-6">
          <input type="checkbox" class="me-3" name="noDownPayment" id="noDownPayment"><label class="me-5" for="noDownPayment">No Down Payment</label>
        </div>
        <div class="col-6">
          <input type="checkbox" class="me-3" name="withDownPayment" id="withDownPayment"><label for="withDownPayment">With Down Payment</label>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-6">
          <label class="form-label" for="totalSellingPrice">Total Selling Price</label>
          <input type="text" class="form-control" id="totalSellingPrice" required>
        </div>
        <div class="col-6">
          <label class="form-label" for="monthlyAmorization">Monthly Amortization</label>
          <input type="text" class="form-control" id="monthlyAmorization" required>
        </div>
        <div class="col-6">
          <label class="form-label" for="downPayment">Down Payment</label>
          <input type="text" class="form-control" id="downPayment" required>
        </div>
        <div class="col-6">
          <label class="form-label" for="termsOfPayment">Terms of Payment</label>
          <input type="text" class="form-control" id="termsOfPayment" required>
        </div>
      </div>
    </div>

    <!-- Second Tab: Lot Owner's Information -->
    <div class="tab col-12">
      <div class="d-flex">
        <img style="width: 6rem;" src="style/images/logo_no_bg.png" alt="logo">
        <h3 class="pt-4 fw-bold">LOT OWNER'S INFORMATION</h3>
      </div>

      <div class="row mt-4">
        <div class="col-md-4">
          <label for="lastName" class="form-label">Last Name</label>
          <input type="text" class="form-control" id="lastName" required>
        </div>
        <div class="col-md-4">
          <label for="firstName" class="form-label">First Name</label>
          <input type="text" class="form-control" id="firstName" required>
        </div>
        <div class="col-md-2">
          <label for="middleInitial" class="form-label">Middle Initial</label>
          <input type="text" class="form-control" id="middleInitial" required>
        </div>
        <div class="col-md-2">
          <label for="suffix" class="form-label">Suffix</label>
          <input type="text" class="form-control" id="suffix" required>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-md-6">
          <label for="address" class="form-label">Address</label>
          <input type="text" class="form-control" id="address" required>
        </div>
        <div class="col-md-3">
          <label for="dob" class="form-label">Date of Birth</label>
          <input type="date" class="form-control" id="dob" required>
        </div>
        <div class="col-md-3">
          <label for="gender" class="form-label">Gender</label>
          <select class="form-select" id="gender" required>
            <option selected disabled value="">Choose...</option>
            <option>Male</option>
            <option>Female</option>
          </select>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-md-3">
          <label for="contactNumber" class="form-label">Contact Number</label>
          <input type="text" class="form-control" id="contactNumber" required>
        </div>
        <div class="col-md-3">
          <label for="email" class="form-label">E-mail Address</label>
          <input type="email" class="form-control" id="email" required>
        </div>
      </div>
    </div>

    <!-- Third Tab: Beneficiary Information -->
    <div class="tab col-12">
      <div class="d-flex">
        <img style="width: 6rem;" src="style/images/logo_no_bg.png" alt="logo">
        <h3 class="pt-4 fw-bold">BENEFICIARY INFORMATION</h3>
      </div>

      <table>
        <thead class="bg-success">
          <tr class="text-white">
            <th>No.</th>
            <th>Full Name</th>
            <th>Relationship to Lot Owner</th>
          </tr>
        </thead>
        <tbody id="beneficiaryTableBody">
          <tr>
            <td><input type="text" class="form-control" name="beneficiaryNo[]" required></td>
            <td><input type="text" class="form-control" name="beneficiaryFullName[]" required></td>
            <td><input type="text" class="form-control" name="beneficiaryRelationship[]" required></td>
          </tr>
        </tbody>
      </table>

      <div class="mt-3">
        <button type="button" class="btn btn-success" onclick="addBeneficiaryRow()">Add Beneficiary</button>
      </div>
    </div>

    <!-- Navigation Buttons -->
    <div class="mt-5" style="overflow:auto;">
      <div style="float:right;">
        <button type="button" class="btn btn-success" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
        <button type="button" class="btn btn-success" id="nextBtn" onclick="nextPrev(1)">Next</button>
      </div>
    </div>

    <!-- Step Indicators -->
    <div style="text-align:center;margin-top:40px;">
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
    </div>
  </form>
</div>

<script>
  var currentTab = 0; // Current tab is set to be the first tab (0)
  showTab(currentTab); // Display the current tab

  function showTab(n) {
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    if (n == 0) {
      document.getElementById("prevBtn").style.display = "none";
    } else {
      document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
      document.getElementById("nextBtn").innerHTML = "Submit";
    } else {
      document.getElementById("nextBtn").innerHTML = "Next";
    }
    fixStepIndicator(n);
  }

  function nextPrev(n) {
    var x = document.getElementsByClassName("tab");
    if (n == 1 && !validateForm()) return false;
    x[currentTab].style.display = "none";
    currentTab = currentTab + n;
    if (currentTab >= x.length) {
      // Instead of submitting the form, perform the redirection
      window.location.href = "/payment";
      return false;
    }
    showTab(currentTab);
  }

  function validateForm() {
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");

    for (i = 0; i < y.length; i++) {
      if (y[i].value == "") {
        y[i].className += " invalid";
        var label = document.querySelector(`label[for="${y[i].id}"]`);
        if (label) {
          label.className += " invalid";
        }
        valid = false;
      } else {
        y[i].className = y[i].className.replace(" invalid", "");
        var label = document.querySelector(`label[for="${y[i].id}"]`);
        if (label) {
          label.className = label.className.replace(" invalid", "");
        }
      }
    }

    // Check if currentTab is within bounds
    if (valid && currentTab < document.getElementsByClassName("step").length) {
      document.getElementsByClassName("step")[currentTab].className += " finish";
    }
    return valid;
  }

  function fixStepIndicator(n) {
    var i, x = document.getElementsByClassName("step");

    // Only proceed if n is in bounds
    if (n < x.length) {
      for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
      }
      x[n].className += " active";
    }
  }

  function addBeneficiaryRow() {
    var table = document.getElementById('beneficiaryTableBody');
    var row = document.createElement('tr');

    row.innerHTML = `
      <td><input type="text" class="form-control" name="beneficiaryNo[]" required></td>
      <td><input type="text" class="form-control" name="beneficiaryFullName[]" required></td>
      <td><input type="text" class="form-control" name="beneficiaryRelationship[]" required></td>
    `;

    table.appendChild(row);
  }

  function showServiceDetails() {
    // Get the selected service
    const selectedService = document.getElementById("serviceSelect").value;

    // Hide all service details by default
    document.querySelectorAll('.service-details').forEach(function(element) {
      element.style.display = 'none';
    });

    // Show the appropriate service details based on selection
    if (selectedService === 'lawn') {
      document.getElementById('lawnOptions').style.display = 'block';
    } else if (selectedService === 'garden') {
      document.getElementById('gardenOptions').style.display = 'block';
    } else if (selectedService === 'family') {
      document.getElementById('familyOptions').style.display = 'block';
    } else if (selectedService === 'apartment') {
      document.getElementById('apartmentOptions').style.display = 'block';
    } else if (selectedService === 'columbarium') {
      document.getElementById('columbariumOptions').style.display = 'block';
    }
  }
</script>

<?php require 'partials/foot.php'; ?>
