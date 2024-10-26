

<style>
    .form-title {
        text-align: center;
        font-size: 32px;
        color: #2f5a37;
        font-weight: bold;
        font-family: 'Times New Roman', Times, serif;
    }

    .custom-hr {
        width: 14rem;
        margin: 10px auto;
        border: 3px solid #2f5a37;
    }

    .form-subtitle {
        color: #808080;
        font-style: italic;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
        color: #333;
    }

    .required {
        color: red;
    }

    /* input[type="text"],
    input[type="email"],
    input[type="tel"],
    input[type="file"] {
        width: 100%;
        padding: 12px;
        border-radius: 8px;
        border: 1px solid #ccc;
        background-color: #f2eded;
        box-sizing: border-box;
    } */

    input:focus {
        border-color: #2f5a37;
        outline: none;
    }

    #note {
        background-color: #f2eded;
    }

    #note:focus {
        border-color: #2f5a37;
        outline: none;
    }

    .error {
        color: red;
        font-size: 12px;
        margin-top: 5px;
    }

    .btn-success:hover {
        background-color: #3c7b47;
        border-color: #3c7b47;
    }


    .notification-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background-color: red;
            color: white;
            border-radius: 50%;
            padding: 2px 6px;
            font-size: 12px;
        }
</style>

<div class="container-fluid">
    <div class="container">
        <h2 class="text-center form-title mt-5">PROOF OF PAYMENT</h2>
        <hr class="custom-hr">
        <p class="text-center form-subtitle mb-4 mt-5">Send us your proof of payment and we will get back to you as soon as possible.</p>

        <form id="paymentForm" class="needs-validation" action="/payment" method="POST" novalidate>
            <?php if (isset($transaction)) : ?>
              <input type="hidden" name="formType" value="1">
              <input type="hidden" name="phase" value="<?= $transaction['phase'] ?? null ?>">
              <input type="hidden" name="selectedService" value="<?= $transaction['selectedService'] ?? null ?>">
              <?php if ($transaction['type']) : ?>
                <input type="hidden" name="type" value="<?= $transaction['type'] ?? null ?>">
              <?php endif; ?>
              <?php if ($transaction['block']) : ?>
                <input type="hidden" name="block" value="<?= $transaction['block'] ?? null ?>">
                <input type="hidden" name="lot" value="<?= $transaction['lot'] ?? null ?>">
              <?php endif; ?>
              <input type="hidden" name="mop" value="<?= $transaction['mop'] ?? null ?>">
              <input type="hidden" name="totalPrice" value="<?= $transaction['totalPrice'] ?? null ?>">
              <?php if (! $transaction['mop'] === "noDp") : ?>
                <input type="hidden" name="amortization" value="<?= $transaction['amortization'] ?? null ?>">
                <input type="hidden" name="termsOfPayment" value="<?= $transaction['termsOfPayment'] ?? null ?>">
              <?php endif; ?>
              <?php if ($transaction['mop'] === "withDp") : ?>
                <input type="hidden" name="amortization" value="<?= $transaction['amortization'] ?? null ?>">
                <input type="hidden" name="downpayment" value="<?= $transaction['downpayment'] ?? null ?>">
                <input type="hidden" name="termsOfPayment" value="<?= $transaction['termsOfPayment'] ?? null ?>">
              <?php endif; ?>
              <input type="hidden" name="lastName" value="<?= $transaction['lastName'] ?? null ?>">
              <input type="hidden" name="firstName" value="<?= $transaction['firstName'] ?? null ?>">
              <input type="hidden" name="middle" value="<?= $transaction['middle'] ?? null ?>">
              <input type="hidden" name="suffix" value="<?= $transaction['suffix'] ?? null ?>">
              <input type="hidden" name="address" value="<?= $transaction['address'] ?? null ?>">
              <input type="hidden" name="birthDate" value="<?= $transaction['birthDate'] ?? null ?>">
              <input type="hidden" name="gender" value="<?= $transaction['gender'] ?? null ?>">
              <input type="hidden" name="contactNo" value="<?= $transaction['contactNo'] ?? null ?>">
              <input type="hidden" name="email" value="<?= $transaction['email'] ?? null ?>">
            <?php endif; ?>

            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Full Name</label>
                        <?php if (isset($transaction['firstName']) && isset($transaction['lastName'])) : ?>
                          <input type="text" class="form-control" id="fullName" placeholder="Enter your name" name="fullName" value="<?= ($transaction['firstName'] . ' ' . $transaction['middle'] . ' ' . $transaction['lastName']) ?? null ?>" required>
                        <?php else : ?>
                          <input type="text" class="form-control" id="fullName" placeholder="Enter your name" name="fullName" required>
                        <?php endif; ?>
                        <div class="invalid-feedback">Full Name is required</div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <?php if (isset($transaction['email'])) : ?>
                          <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email" value="<?= $transaction['email'] ?? null ?>" required>
                        <?php else : ?>
                          <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email" required>
                        <?php endif; ?>
                        <div class="invalid-feedback">Please enter a valid email</div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="mb-3">
                        <label for="contact" class="form-label">Contact Number</label>
                        <?php if (isset($transaction['contactNo'])) : ?>
                          <input type="tel" class="form-control" id="contact" placeholder="+639" name="contactNo" value="<?= $transaction['contactNo'] ?? null ?>" required>
                        <?php else : ?>
                          <input type="tel" class="form-control" id="contact" placeholder="+639" name="contactNo" required>
                        <?php endif; ?>
                        <div class="invalid-feedback">Please enter a valid contact number</div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="mb-3">
                        <label for="modeOfPayment" class="form-label">Mode of Payment</label>
                        <input type="text" class="form-control" id="modeOfPayment" name="mop" placeholder="Enter mode of payment" required>
                        <div class="invalid-feedback">Mode of Payment is required</div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="mb-3">
                        <label for="productService" class="form-label">Product/Service <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="productService" name="selectedService" placeholder="Enter product/service" required>
                        <div class="invalid-feedback">Product/Service is required</div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="mb-3">
                        <label for="referenceNo" class="form-label">Reference No.</label>
                        <?php if (isset($transaction['refId'])) : ?>
                          <input type="text" class="form-control" id="referenceNo" placeholder="Enter reference number" name="refId" value="<?= $transaction['refId'] ?? null ?>" required>
                        <?php else : ?>
                          <input type="text" class="form-control" id="referenceNo" placeholder="Enter reference number" name="refId" required>
                        <?php endif; ?>
                        <?php if (isset($errors['refId'])) : ?>
                            <div>
                                <p class="text-danger"><?= $errors['refId'] ?></p>
                            </div>
                        <?php endif; ?>
                        <div class="invalid-feedback">Reference No. is required</div>
                    </div>
                </div>
                <?php if (isset($transaction['downpayment'])) : ?>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="amount" class="form-label">Amount</label>
                        <input type="text" class="form-control" id="amount" name="amount" required>
                        <div class="invalid-feedback">Amount of Payment is required</div>
                    </div>
                </div>
                <?php endif;?>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="proofOfPayment" class="form-label">Proof of Payment</label>
                        <input type="file" class="form-control" id="proofOfPayment" required>
                        <div class="invalid-feedback">Proof of Payment is required</div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success text-white w-100 mb-5">Submit</button>
        </form>
    </div>
</div>
<!-- Add Pusher JavaScript CDN -->
<script src="https://js.pusher.com/7.2/pusher.min.js"></script>
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
                        event.preventDefault()
                        alert('Form submitted successfully')
                    }
                    form.classList.add('was-validated')
                }, false)
            })
    })()

</script>
