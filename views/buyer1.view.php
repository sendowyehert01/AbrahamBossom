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
    <div class="d-flex">
      <img style="width: 6rem;" src="style/images/logo_no_bg.png" alt="logo">
      <h3 class="pt-4 fw-bolder">INTERMENT AUTHORIZATION</h3>
    </div>

    <div class="tab col-12">
      <div class="d-flex">
        <h5 class="pt-4 fw-bold">A. INTERMENT TYPE</h5>
      </div>

      <div class="row mt-2">
        <div class="col-6">
          <input type="checkbox" class="me-3" name="atNeed" id="atNeed"><label class="me-5" for="atNeed">Full Interment (Fresh Body)</label>
        </div>
        <div class="col-6">
          <input type="checkbox" class="me-3" name="cashPayment" id="cashPayment"><label for="cashPayment">Bone Transfer</label>
        </div>
        <div class="col-6">
          <input type="checkbox" class="me-3" name="noDownPayment" id="noDownPayment"><label class="me-5" for="noDownPayment">Body Crypts</label>
        </div>
        <div class="col-6">
          <input type="checkbox" class="me-3" name="withDownPayment" id="withDownPayment"><label for="withDownPayment">Ash / Um</label>
        </div>
      </div>

      <div class="d-flex">
        <h5 class="pt-4 fw-bold">B. LOT OWNERSHIP & AUTHORIZED REPRESENTATIVE INFORMATION</h5>
      </div>

      <div class="row mt-4">
        <div class="col-md-4">
          <label for="lotOwnerName" class="form-label">Full Name of Lot Owner</label>
          <input type="text" class="form-control" id="lotOwnerName" name="lotOwnerName" required>
        </div>
        <div class="col-md-4">
          <label for="address" class="form-label">Address</label>
          <input type="text" class="form-control" id="address" name="address" required>
        </div>
        <div class="col-md-4">
          <label for="contactNumber" class="form-label">Contact Number</label>
          <input type="text" class="form-control" id="contactNumber" name="contactNumber" required>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-md-3">
          <label for="lotType" class="form-label">Lot Type</label>
          <input type="text" class="form-control" id="lotType" name="lotType" required>
        </div>
        <div class="col-md-3">
          <label for="blockNumber" class="form-label">Block Number</label>
          <input type="text" class="form-control" id="blockNumber" name="blockNumber" required>
        </div>
        <div class="col-md-3">
          <label for="lotNumber" class="form-label">Lot Number</label>
          <input type="text" class="form-control" id="lotNumber" name="lotNumber" required>
        </div>
        <div class="col-md-3">
          <label for="email" class="form-label">E-mail Address</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-md-6">
          <label for="relationship" class="form-label">Relationship with the Deceased</label>
          <input type="text" class="form-control" id="relationship" name="relationship" required>
        </div>
        <div class="col-md-6">
          <label for="authorizationDoc" class="form-label">Authorization Document Issued by Lot Owner</label>
          <input type="text" class="form-control" id="authorizationDoc" name="authorizationDoc" required>
        </div>
      </div>

    </div>

    <div class="tab col-12">
      <div class="d-flex">
        <h5 class="pt-4 fw-bold">C. DECEASED DATA</h5>
      </div>

      <div class="row mt-4">
        <div class="col-md-4">
          <label for="lastName" class="form-label">Last Name</label>
          <input type="text" class="form-control" id="lastName" name="lastName" required>
        </div>
        <div class="col-md-4">
          <label for="firstName" class="form-label">First Name</label>
          <input type="text" class="form-control" id="firstName" name="firstName" required>
        </div>
        <div class="col-md-4">
          <label for="middleInitial" class="form-label">Middle Initial</label>
          <input type="text" class="form-control" id="middleInitial" name="middleInitial" required>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-md-3">
          <label for="dob" class="form-label">Date of Birth</label>
          <input type="date" class="form-control" id="dob" name="dob" required>
        </div>
        <div class="col-md-3">
          <label for="dateDied" class="form-label">Date Died</label>
          <input type="date" class="form-control" id="dateDied" name="dateDied" required>
        </div>
        <div class="col-md-2">
          <label for="gender" class="form-label">Gender</label>
          <select class="form-control" id="gender" name="gender" required>
            <option value="">Select</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
          </select>
        </div>
        <div class="col-md-2">
          <label for="age" class="form-label">Age</label>
          <input type="number" class="form-control" id="age" name="age" required>
        </div>
        <div class="col-md-2">
          <label for="religion" class="form-label">Religion</label>
          <input type="text" class="form-control" id="religion" name="religion" required>
        </div>
      </div>

      <div class="d-flex">
        <h5 class="pt-4 fw-bold">D. INTERMENT SCHEDULE</h5>
      </div>
      <div class="row mt-4">
        <div class="col-md-4">
          <label for="dateOfInterment" class="form-label">Date of Interment</label>
          <input type="date" class="form-control" id="dateOfInterment" name="dateOfInterment" required>
        </div>
        <div class="col-md-4">
          <label for="time" class="form-label">Time</label>
          <input type="time" class="form-control" id="time" name="time" required>
        </div>
        <div class="col-md-4">
          <label for="note" class="form-label">Note (if any)</label>
          <input type="text" class="form-control" id="note" name="note" required>
        </div>
      </div>

    </div>

    <!-- Second Tab: Lot Owner's Information -->
    <div class="tab col-12">
      <div class="d-flex">
        <h5 class="pt-4 fw-bold">E. REQUIRED DOCUMENTS</h5>
      </div>
      <div class="mb-2 ms-3">
        <label for="certificateOfOwnership" class="form-label">Certificate of Ownership</label>
        <input class="form-control form-control-sm" id="certificateOfOwnership" name="certificateOfOwnership" type="file" required>
      </div>
      <div class="mb-2 ms-3">
        <label for="deathCertificate" class="form-label">Death Certificate</label>
        <input class="form-control form-control-sm" id="deathCertificate" name="deathCertificate" type="file" required>
      </div>
      <div class="mb-2 ms-3">
        <label for="burialPermit" class="form-label">Burial Permit</label>
        <input class="form-control form-control-sm" id="burialPermit" name="burialPermit" type="file" required>
      </div>
      <div class="mb-2 ms-3">
        <label for="transferPermit" class="form-label">Transfer Permit</label>
        <input class="form-control form-control-sm" id="transferPermit" name="transferPermit" type="file" required>
      </div>
      <div class="mb-2 ms-3">
        <label for="authorizationDocFile" class="form-label">Authorization Document Issued by Lot Owner</label>
        <input class="form-control form-control-sm" id="authorizationDocFile" name="authorizationDocFile" type="file" required>
      </div>
      <div class="mb-2 ms-3">
        <label for="fullPayment" class="form-label">Full Payment of Internment Fee</label>
        <input class="form-control form-control-sm" id="fullPayment" name="fullPayment" type="file" required>
      </div>
      <div class="mb-2 ms-3">
        <label for="seniorCitizenPWD" class="form-label">Senior Citizen / PWD ID.</label>
        <input class="form-control form-control-sm" id="seniorCitizenPWD" name="seniorCitizenPWD" type="file" required>
      </div>
    </div>

    <!-- Third Tab: Beneficiary Information -->
    <div class="tab col-12">
      <div class="d-flex">
        <h5 class="pt-4 fw-bold">F. TERMS AND CONDITIONS / ACKNOWLEDGEMENTS</h5>
      </div>

      <p class="ms-3">
        I am the lot owner/authorized representative of the lot indicated above and give permission to use the lot for the interment with the details in this form.
      </p>
      <p class="ms-3">
        The terms & conditions of the internment were explained to me clearly by the representative of Abraham's Bosom Memorial Garden and are fully understood and agreed upon.
      </p>

      <div class="col-6 mt-5 ms-5">
        <input type="checkbox" class="me-3" name="authorized" id="authorized"><label class="me-5" for="authorized">I Authorized</label>
      </div>
      <div class="col-6 mt-3 ms-5">
        <label for="dateOfAuthorization" class="form-label">Date of Authorization</label>
        <input type="date" class="form-control" id="dateOfAuthorization" name="dateOfAuthorization" required>
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
</script>

<?php require 'partials/foot.php'; ?>
