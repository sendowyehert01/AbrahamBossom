<style>
    .form-title {
        text-align: center;
        font-size: 32px;
        color: #2f5a37;
        font-weight: bold;
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

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    input[type="file"] {
        width: 100%;
        padding: 12px;
        border-radius: 8px;
        border: 1px solid #ccc;
        background-color: #f2eded;
        box-sizing: border-box;
    }

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
</style>

<div class="container-fluid" style="background-color: #f3f7f0;">
    <div class="container">
        <h2 class="text-center form-title pt-5">PROOF OF PAYMENT</h2>
        <hr class="custom-hr">
        <p class="text-center form-subtitle mb-4 mt-5">Send us your proof of payment and we will get back to you as soon as possible.</p>

        <form id="paymentForm" class="needs-validation" novalidate>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="fullName" placeholder="Enter your name" required>
                        <div class="invalid-feedback">Full Name is required</div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                        <div class="invalid-feedback">Please enter a valid email</div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="mb-3">
                        <label for="contact" class="form-label">Contact Number</label>
                        <input type="tel" class="form-control" id="contact" placeholder="+639" required>
                        <div class="invalid-feedback">Please enter a valid contact number</div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="mb-3">
                        <label for="modeOfPayment" class="form-label">Mode of Payment</label>
                        <input type="text" class="form-control" id="modeOfPayment" placeholder="Enter mode of payment" required>
                        <div class="invalid-feedback">Mode of Payment is required</div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="mb-3">
                        <label for="productService" class="form-label">Product/Service <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="productService" placeholder="Enter product/service" required>
                        <div class="invalid-feedback">Product/Service is required</div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="mb-3">
                        <label for="referenceNo" class="form-label">Reference No.</label>
                        <input type="text" class="form-control" id="referenceNo" placeholder="Enter reference number" required>
                        <div class="invalid-feedback">Reference No. is required</div>
                    </div>
                </div>
                <div class="col-lg-12">
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
