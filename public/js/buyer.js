function showServiceDetails() {
  // Get the selected service
  const selectedService = document.getElementById("serviceSelect").value;

  // Hide all service details by default
  document.querySelectorAll('.service-details').forEach(function(element) {
    element.style.display = 'none';
  });

  // Show the appropriate service details based on selection
  if (selectedService === 'lawn') 
  {
    document.getElementById('lawnOptions').style.display = 'block';
    document.getElementById('gardenOptions').innerHTML = ``;
    document.getElementById('apartmentOptions').innerHTML = ``;
    document.getElementById('lawnOptions').innerHTML = 
             `<h5>Select Lawn Type:</h5>
              <div class="form-check d-flex align-items-center">
                <input class="form-check-input p-3 required" type="radio" name="type" id="lawnRegular" value="regular">
                <label class="form-check-label p-3" for="lawnRegular">Regular</label>
              </div>
              <div class="form-check d-flex align-items-center">
                <input class="form-check-input p-3 required" type="radio" name="type" id="lawnPremium" value="premium">
                <label class="form-check-label p-3" for="lawnPremium">Premium</label>
              </div>
              <div class="form-check d-flex align-items-center">
                <input class="form-check-input p-3 required" type="radio" name="type" id="lawnPrime" value="prime">
                <label class="form-check-label p-3" for="lawnPrime">Prime</label>
              </div>`;
  } else if (selectedService === 'garden') {
        document.getElementById('gardenOptions').style.display = 'block';
        document.getElementById('lawnOptions').innerHTML = ``;
        document.getElementById('apartmentOptions').innerHTML = ``;
        document.getElementById('gardenOptions').innerHTML = 
              `<div class="mb-3">
                <label for="blockNumber" class="form-label">Block Number</label>
                <input type="text" id="blockNumber" name="block" class="form-control">
              </div>
              <div class="mb-3">
                <label for="lotNumber" class="form-label">Lot Number</label>
                <input type="text" id="lotNumber" name="lot" class="form-control">
              </div>`
  } else if (selectedService === 'family') {
        document.getElementById('familyOptions').style.display = 'block';
        document.getElementById('lawnOptions').innerHTML = ``;
        document.getElementById('gardenOptions').innerHTML = ``;
        document.getElementById('apartmentOptions').innerHTML = ``;
  } else if (selectedService === 'apartment') {
        document.getElementById('apartmentOptions').style.display = 'block';
        document.getElementById('lawnOptions').innerHTML = ``;
        document.getElementById('gardenOptions').innerHTML = ``;
        document.getElementById('apartmentOptions').innerHTML = 
              `<div class="mb-3">
                <label for="blockNumberApartment" class="form-label">Block Number</label>
                <input type="text" id="blockNumberApartment" name="block" class="form-control">
              </div>
              <div class="mb-3">
                <label for="unitNumber" class="form-label">Unit Number</label>
                <input type="text" id="unitNumber" name="lot" class="form-control">
              </div>`
  } else if (selectedService === 'columbarium') {
        document.getElementById('columbariumOptions').style.display = 'block';
        document.getElementById('gardenOptions').innerHTML = ``;
        document.getElementById('apartmentOptions').innerHTML = ``;
  }
}

function addBeneficiaryRow() {
  var table = document.getElementById('beneficiaryTableBody');
  var row = document.createElement('tr');

  row.innerHTML = 
  `
    <td><input type="text" class="form-control" name="beneficiaryNo[]" required></td>
    <td><input type="text" class="form-control" name="beneficiaryFullName[]" required></td>
    <td><input type="text" class="form-control" name="beneficiaryRelationship[]" required></td>
  `;

  table.appendChild(row);
}

function getSelectedValue() {
  const radios = document.getElementsByName('mop');
  let selectedValue;

  for (const radio of radios) {
      if (radio.checked) {
          selectedValue = radio.value;
          break;
      }
  }

  if (selectedValue === "cash" || selectedValue === "atNeed")
  {
    document.getElementById('amort').innerHTML = ``;
    document.getElementById('dp').innerHTML = ``;
    document.getElementById('term').innerHTML = ``;
  }
  if (selectedValue === "noDp")
  {
    document.getElementById('amort').innerHTML = 
    `
    <label class="form-label" for="monthlyAmorization" id="monthly">Monthly Amortization</label>
    <input type="text" class="form-control required" name="amortization" id="monthlyAmorization" required>
    `;
    document.getElementById('dp').innerHTML = ``;
    document.getElementById('term').innerHTML = 
    `
    <label class="form-label" for="termsOfPayment">Terms of Payment</label>
    <input type="text" class="form-control required" name="termsOfPayment" id="termsOfPayment" required>
    `;
  }
  if (selectedValue === "withDp")
  {
    document.getElementById('amort').innerHTML = 
    `
    <label class="form-label" for="monthlyAmorization" id="monthly">Monthly Amortization</label>
    <input type="text" class="form-control required" name="amortization" id="monthlyAmorization" required>
    `;
    document.getElementById('dp').innerHTML = 
    `
    <label class="form-label" for="downPayment">Down Payment</label>
    <input type="text" class="form-control required" name="downpayment" id="downPayment" required>
    `;
    document.getElementById('term').innerHTML = 
    `
    <label class="form-label" for="termsOfPayment">Terms of Payment</label>
    <input type="text" class="form-control required" name="termsOfPayment" id="termsOfPayment" required>
    `;
  }
}