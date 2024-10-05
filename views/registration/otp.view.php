<?php require base_path('views/partials/head.php') ?>

<link rel="stylesheet" href="style/signup.css">

<style>
    .input-field input::-webkit-inner-spin-button,
    .input-field input::-webkit-outer-spin-button {
      display: none;
    }
</style>

    <div class="position-relative"> 
        <div class="card  text-center"> 
            <div class="modal-head d-flex ">
                <div class="envelope">
                <img src="./style/images/460289194_860496929396108_2971072421449472491_n.png" class="env-img" alt="..." style="height: 40px;width: 43px;" >                                   
                </div>
                <div class="modal-title">
                    <h1>OTP VERIFICATION CODE</h1>
                </div>
            </div>
            <form action="/otp" method="POST">
              <h6 >Enter the OTP sent to your email address</h6> 
                <!-- <div> <span>A code has been sent to</span> <small>*******9897</small> </div>  -->
                <?php if (isset($errors['pin'])) : ?>
                  <div class="text-danger">
                    <p><?= $errors['pin'] ?></p>
                  </div>
                <?php endif; ?>
                <div id="otp" class="input-field inputs d-flex flex-row justify-content-center mt-2"> 
                    <input name="pin[]" class="m-2 text-center form-control rounded" required type="number" id="first" maxlength="1"> 
                    <input name="pin[]" class="m-2 text-center form-control rounded" required type="number" disabled id="second" maxlength="1"> 
                    <input name="pin[]" class="m-2 text-center form-control rounded" required type="number" disabled id="third" maxlength="1"> 
                    <input name="pin[]" class="m-2 text-center form-control rounded" required type="number" disabled id="fourth" maxlength="1"> 
                    <input name="pin[]" class="m-2 text-center form-control rounded" required type="number" disabled id="fifth" maxlength="1"> 
                    <input name="pin[]" class="m-2 text-center form-control rounded" required type="number" disabled id="sixth" maxlength="1"> 
                </div> 
              <div class="mt-4 d-flex justify-content-center"> 
                  <button class="btn btn-success validate"><p>SUBMIT</p></button> 
              </div> 
            </form>
        </div> 

    </div>
    
</body>

<script>
    const inputs = document.querySelectorAll("input"),
      button = document.querySelector("button");

    // iterate over all inputs
    inputs.forEach((input, index1) => {
      input.addEventListener("keyup", (e) => {
        // This code gets the current input element and stores it in the currentInput variable
        // This code gets the next sibling element of the current input element and stores it in the nextInput variable
        // This code gets the previous sibling element of the current input element and stores it in the prevInput variable
        const currentInput = input,
          nextInput = input.nextElementSibling,
          prevInput = input.previousElementSibling;

        // if the value has more than one character then clear it
        if (currentInput.value.length > 1) {
          currentInput.value = "";
          return;
        }
        // if the next input is disabled and the current value is not empty
        //  enable the next input and focus on it
        if (nextInput && nextInput.hasAttribute("disabled") && currentInput.value !== "") {
          nextInput.removeAttribute("disabled");
          nextInput.focus();
        }

        // if the backspace key is pressed
        if (e.key === "Backspace") {
          // iterate over all inputs again
          inputs.forEach((input, index2) => {
            // if the index1 of the current input is less than or equal to the index2 of the input in the outer loop
            // and the previous element exists, set the disabled attribute on the input and focus on the previous element
            if (index1 <= index2 && prevInput) {
              input.setAttribute("disabled", true);
              input.value = "";
              prevInput.focus();
            }
          });
        }
        //if the fourth input( which index number is 3) is not empty and has not disable attribute then
        //add active class if not then remove the active class.
        if (!inputs[3].disabled && inputs[3].value !== "") {
          button.classList.add("active");
          return;
        }
        button.classList.remove("active");
      });
    });

    //focus the first input which index is 0 on window load
    window.addEventListener("load", () => inputs[0].focus());

  </script>

</html>