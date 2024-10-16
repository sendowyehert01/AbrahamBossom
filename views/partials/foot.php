<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

<style>

@media (max-width: 768px) {
   .center {
    display: flex;
    justify-content: center;
   }
}



</style>

<footer class="text-center text-lg-start footer p-5" style="background-color: #f9f9f9; padding: 20px; border-top: 1px solid #e6e6e6;">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Column: Logo and Title -->
            <div class="col-md-5 text-md-start mb-3 mb-md-0">
                <div class="d-flex justify-content-center">
                    <img src="style/images/logo_no_bg.png" alt="Abrahams Bosom logo" class="me-3" style="width: 10rem">
                </div>
                <div>
                    <h2 class="m-0 text-center" style="font-family: 'Times New Roman', serif; color: #2b4620;">ABRAHAMS BOSOM</h4>
                    <h4 class="m-0 text-center" style="color: #a05d36; font-family: 'Times New Roman', serif;">Memorial Garden</h6>
                </div>
            </div>

            <!-- Vertical HR between logo and icons -->
            <div class="col-md-1 text-center d-none d-md-block">
                <hr style="border-left: 2px solid #2b4620; height: 150px; width: 0; margin: 0 auto;">
            </div>

            <!-- Right Column: Contact Information with Aligned Icons -->
            <div class="col-md-6 text-md-end text-sm-center">
                <div class="center">
                    <p class="d-flex align-items-center mb-2">
                        <i class="bi bi-geo-alt-fill me-2" style="color: #1a8754;"></i>
                        <span>Km 49, Aguinaldo Highway, Lalaan 1st, Silang Cavite</span>
                    </p>
                </div>
                <div class="center">
                    <p class="d-flex align-items-center mb-2">
                        <i class="bi bi-telephone-fill me-2" style="color: #1a8754;"></i>
                        <span>0947-201-3665 / 0956-850-8949 / 0946-414-0210</span>
                    </p>
                </div>
                <div class="center">
                    <p class="d-flex align-items-center mb-2">
                        <i class="bi bi-envelope-fill me-2" style="color: #1a8754;"></i>
                        <span>Abmgoffcpct@gmail.com</span>
                    </p>
                </div>
                <div class="center">
                    <p class="d-flex align-items-center mb-2">
                        <i class="bi bi-facebook me-2" style="color: #1a8754;"></i>
                        <span>ABMemorialGarden</span>
                    </p>
                </div>
            </div>
        </div>

        <!-- Horizontal HR below icons -->
        <hr style="border-color: #2b4620; margin: 20px 0;">
    </div>

    <!-- Footer Bottom Text -->
    <div class="text-center p-3">
        <small style="color: #2b4620;">© 2024 Abraham Bosom Cemetery. All Rights Reserved. Website Design By IT Students</small>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script src="assets/js/jquery-1.9.1.min.js"></script>
<script src="owl-carousel/owl.carousel.js"></script>

<script>
    $(document).ready(function() {
        $("#owl-demo").owlCarousel({
            navigation: true,
            items: 3,
            itemsDesktop: [1024, 2],
            itemsDesktopSmall: [900, 2],
            itemsTablet: [768, 1],
            itemsMobile: false
        });
    });

    // Mark as read & delete
    document.querySelectorAll('.drop-bi').forEach(item => {
        item.addEventListener('click', event => {
            event.stopPropagation();
        });
    });
</script>