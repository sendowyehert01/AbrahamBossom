<style>
    .form-title {
        text-align: center;
        font-size: 32px;
        color: #2f5a37;
        font-weight: bold;
        font-family: 'Times New Roman', Times, serif;
    }

    .custom-hr {
        width: 12rem;
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
    input[type="tel"] {
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

<div class="container-fluid" style="background-color: white;">
    <div class="container">
        <h2 class="text-center form-title pt-5">INQUIRE NOW!</h2>
        <hr class="custom-hr">
        <p class="text-center form-subtitle mb-4 mt-5">Send us a message and we will get back to you as soon as
            possible.</p>

        <form id="inquiryForm" class="needs-validation" novalidate>
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="fullName" placeholder="Enter your name"
                            value="<?= htmlspecialchars($user['first_name'] . ' ' . $user['middle'] . ' ' . $user['last_name']) ?>"
                            required>
                        <div class="invalid-feedback">Full Name is required</div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email"
                            value="<?= htmlspecialchars($user['email']) ?>" required>
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
                <div class="col-lg-12">
                    <div class="mb-3">
                        <label for="service" class="form-label">Product/Service <span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="service" placeholder="Enter product/service"
                            required>
                        <div class="invalid-feedback">Product/Service is required</div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="mb-3">
                        <label for="note" class="form-label">Note</label>
                        <textarea class="form-control" id="note" rows="4" placeholder="Leave a message..."></textarea>
                    </div>
                </div>

                <p class="small">Note: For billing inquiries, please indicate your CONTRACT number in your message.</p>

                <div class="mb-3 form-check">
                    <label>
                        ABRAHAM BOSSOM AGREEMENT <span class="text-danger">(Required)</span><br>
                    </label>
                    <input type="checkbox" class="form-check-input ms-1 me-3" id="agreement" required>
                    <label>I consent to receive communications by email. I understand and agree to the privacy policy
                        regarding my personal information.</label>
                    <div class="invalid-feedback">You must agree before submitting.</div>
                </div>
            </div>
            <button type="submit" class="btn btn-success text-white w-100 mb-5">Submit</button>
        </form>
    </div>
</div>

<script>
    (function () {
        'use strict'
        var forms = document.querySelectorAll('.needs-validation')
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
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