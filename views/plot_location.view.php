<?php require 'partials/head.php'; ?>
<?php require 'partials/nav.php'; ?>
<?php require 'partials/banner.php'; ?>

  <div class="container p-3 card mt-3 mb-3 w-75">
    <div class="row">
      <div class="col-md-6 pb-5">
          <iframe style="width: 100%; height: 100%;"
              src="https://www.google.com/maps/d/embed?mid=1mI3qTFNpPCNz5L1i4Vrr1KrcarE&hl=en_US&ehbc=2E312F"
              frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
      <div class="col-md-6 pb-5">
          <div class="contact-form">
              <div id="success"></div>
              <form name="sentMessage" id="contactForm" novalidate="novalidate">
                  <div class="control-group">
                      <input type="text" class="form-control bg-transparent p-4" id="name" placeholder="Your Name"
                          required="required" data-validation-required-message="Please enter your name" />
                      <p class="help-block text-danger"></p>
                  </div>
                  <div class="control-group">
                      <input type="email" class="form-control bg-transparent p-4" id="email" placeholder="Your Email"
                          required="required" data-validation-required-message="Please enter your email" />
                      <p class="help-block text-danger"></p>
                  </div>
                  <div class="control-group">
                      <input type="text" class="form-control bg-transparent p-4" id="subject" placeholder="Subject"
                          required="required" data-validation-required-message="Please enter a subject" />
                      <p class="help-block text-danger"></p>
                  </div>
                  <div class="control-group">
                      <textarea class="form-control bg-transparent py-3 px-4" rows="5" id="message" placeholder="Message"
                          required="required"
                          data-validation-required-message="Please enter your message"></textarea>
                      <p class="help-block text-danger"></p>
                  </div>
                  <div>
                      <button class="btn btn-success font-weight-bold py-3 px-5 w-100" type="submit" id="sendMessageButton">Send
                          Message</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
  </div>

<?php require 'partials/foot.php'; ?>