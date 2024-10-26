<?php require 'partials/head.php'; ?>
<?php require 'partials/nav.php'; ?>
<?php require 'partials/banner.php'; ?>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
<style>
  .choose {
    font-size: 32px;
    color: #2f5a37;
    font-family: 'Times New Roman', Times, serif;
    font-weight: bold;
  }
  
  .li {
    font-weight: bold;
    margin-bottom: 5px;
    color: #333;
  }

  h4 {
    font-size: 20px;
    color: #2f5a37;
    font-weight: bold;
    font-family: 'Times New Roman', Times, serif;
  }

  .sidebar {
    padding: 20px;
  }

  .payment-method-section {
    margin-bottom: 1rem;
  }

  .payment-option {
    border: 1px solid #dee2e6;
    border-radius: 0.25rem;
    padding: 1rem;
    margin-bottom: 1rem;
    cursor: pointer;
    transition: all 0.3s ease;
    height: 6rem;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
  }

  .payment-option:hover,
  .payment-option.selected {
    border-color: #0d6efd;
    box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
  }

  .payment-option img {
    max-height: 60px;
    max-width: 100%;
  }

  .sidebar .payment-option {
    justify-content: flex-start;
  }

  .sidebar .payment-option i {
    margin-right: 10px;
    font-size: 1.5rem;
  }

  .check-icon {
    position: absolute;
    top: 10px;
    right: 10px;
    color: #28a745;
    font-size: 1.5rem;
    display: none;
  }

  #offlinePaymentOptions h2 {
    font-size: 35px;
    color: #2f5a37;
    font-weight: bold;
  }

  #offlinePaymentOptions p,
  .li {
    font-size: 20px;
  }

  .payment-details {
    margin-top: 1rem;
    padding-left: 3rem;
    padding-right: 3rem;
  }
</style>

<div class="container-fluid pb-5" style="background-color: white;">
  <div class="container">
   
    
    <div class="row">
      <!-- Left side - Payment Methods -->
      <div class="col-md-4">
        <div class="sidebar">
        <h4 class="mb-3 mt-5 choose">CHOOSE PAYMENT METHOD</h4>
          <!-- Online Payment Section -->
          <div class="payment-method-section">
            <div class="payment-option" onclick="selectPaymentMethod('online')">
              <i class="fas fa-wallet ms-3" style="color: #4CAF50;"></i>
              <h5>Online Payment</h5>
            </div>
            <!-- Online Payment Options -->
            <div id="onlinePaymentOptions" class="payment-details" style="display: none;">
              <!-- <h4>E-Wallets</h4> -->
              <div class="row">
                <div class="col-md-12">
                  <div class="payment-option" onclick="selectWallet('gcash')">
                    <img src="style/images/payment_logo/gcash.png" alt="GCash" class="img-fluid">
                    <i class="fas fa-check check-icon"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Online Banking Section -->
          <div class="payment-method-section">
            <div class="payment-option" onclick="selectPaymentMethod('banking')">
              <i class="fas fa-university ms-3" style="color: #2196F3;"></i>
              <h5>Online Banking</h5>
            </div>
            <!-- Online Banking Options -->
            <div id="onlineBankingOptions" class="payment-details" style="display: none;">
              <!-- <h4>Online Banking</h4> -->
              <div class="row">
                <div class="col-md-6 mb-3">
                  <div class="payment-option" onclick="selectBank('bdo')">
                    <img src="style/images/payment_logo/bdo.png" alt="BDO" class="img-fluid">
                    <i class="fas fa-check check-icon"></i>
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <div class="payment-option" onclick="selectBank('unionbank')">
                    <img src="style/images/payment_logo/unionbank.png" alt="UnionBank" class="img-fluid">
                    <i class="fas fa-check check-icon"></i>
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <div class="payment-option" onclick="selectBank('bpi')">
                    <img src="style/images/payment_logo/bpi.png" alt="BPI" class="img-fluid">
                    <i class="fas fa-check check-icon"></i>
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <div class="payment-option" onclick="selectBank('chinabank')">
                    <img src="style/images/payment_logo/chinabank.png" alt="ChinaBank" class="img-fluid">
                    <i class="fas fa-check check-icon"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Offline Payment Section -->
          <div class="payment-method-section">
            <div class="payment-option" onclick="selectPaymentMethod('offline')">
              <i class="fas fa-money-bill-wave ms-3" style="color: #FF9800;"></i>
              <h5>Offline Payment</h5>
            </div>
            <!-- Offline Payment Options -->
            <div id="offlinePaymentOptions" class="payment-details" style="display: none;">
              <!-- <h4>Offline Payment</h4> -->
              <h3 class="pt-3 ">ABMG HEAD OFFICE</h3>
              <p class="">You can pay directly in our office address:</p>
              <p class="li ">KM 49 Aguinaldo Highway, Silang, Cavite</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Right side - Payment Form -->
      <div class="col-md-8">
        <?php require 'forms/payment_form.php'; ?>
      </div>
    </div>
  </div>
</div>

<?php require 'partials/foot.php'; ?>

<!-- Modal -->
<div class="modal fade" id="paymentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-4" id="staticBackdropLabel">Payment Instructions</h5>
            </div>
            <div class="modal-body" id="modalContent">
                <!-- Content will be dynamically inserted here -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Okay</button>
            </div>
        </div>
    </div>
</div>

<script>
let paymentModal;

document.addEventListener('DOMContentLoaded', function() {
    paymentModal = new bootstrap.Modal(document.getElementById('paymentModal'));
});

function selectPaymentMethod(method) {
    // Hide all payment option sections first
    document.getElementById('onlinePaymentOptions').style.display = 'none';
    document.getElementById('onlineBankingOptions').style.display = 'none';
    document.getElementById('offlinePaymentOptions').style.display = 'none';

    // Remove selected class from all payment options
    document.querySelectorAll('.sidebar .payment-option').forEach(el => el.classList.remove('selected'));
    event.currentTarget.classList.add('selected');

    // Show the selected payment options section
    if (method === 'online') {
        document.getElementById('onlinePaymentOptions').style.display = 'block';
    } else if (method === 'banking') {
        document.getElementById('onlineBankingOptions').style.display = 'block';
    } else if (method === 'offline') {
        document.getElementById('offlinePaymentOptions').style.display = 'block';
    }

    // Reset all check icons
    document.querySelectorAll('.check-icon').forEach(icon => icon.style.display = 'none');
}

function selectWallet(wallet) {
    selectOption('#onlinePaymentOptions');
    showPaymentInstructions(wallet);
}

function selectBank(bank) {
    selectOption('#onlineBankingOptions');
    showPaymentInstructions(bank);
}

function selectOption(parentSelector) {
    const options = document.querySelectorAll(`${parentSelector} .payment-option`);
    options.forEach(el => {
        el.classList.remove('selected');
        el.querySelector('.check-icon').style.display = 'none';
    });
    event.currentTarget.classList.add('selected');
    event.currentTarget.querySelector('.check-icon').style.display = 'block';
}

function showPaymentInstructions(method) {
    let content = '';
    switch(method) {
        case 'gcash':
            content = `
                <h6 class="fw-bold">GCash Payment Instructions</h6>
                <ol>
                    <li>Open your GCash app</li>
                    <li>Tap "Pay Bills"</li>
                    <li>Search for "Abraham Bosom Memorial"</li>
                    <li>Enter your 8-digit contract number as the reference</li>
                    <li>Enter the payment amount</li>
                    <li>Review and confirm your payment</li>
                </ol>
            `;
            break;
        case 'bdo':
        case 'unionbank':
        case 'bpi':
        case 'chinabank':
            content = `
                <h6 class="fw-bold">Online Banking Procedure for ${method.toUpperCase()}</h6>
                <ol>
                    <li>Log in to your ${method.toUpperCase()} online banking account</li>
                    <li>Go to "Bills Payment" or "Pay Bills"</li>
                    <li>Select "Add a Biller" and choose "Abraham Bosom Memorial"</li>
                    <li>Enter your 8-digit contract number as the reference</li>
                    <li>Enter the payment amount</li>
                    <li>Review and confirm your payment</li>
                </ol>
                <h6 class="fw-bold mt-3">OTC Procedure</h6>
                <ol>
                    <li>Visit any ${method.toUpperCase()} branch</li>
                    <li>Fill out a Bills Payment form with the following details:</li>
                    <ul>
                        <li>Company Name: Abraham Bosom Memorial</li>
                        <li>Subscriber/Card Holder: Your Full Name</li>
                        <li>Subscriber's No./Card No.: Your 8-digit contract number</li>
                    </ul>
                    <li>Present the form to the teller along with your payment</li>
                </ol>
            `;
            break;
        default:
            content = '<p>Payment instructions not available for this method.</p>';
    }
    document.getElementById('modalContent').innerHTML = content;
    paymentModal.show();
}
</script>