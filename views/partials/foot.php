<footer class="text-center text-lg-start footer">
        <div class="d-flex justify-content-center p-0 m-0">
            <div class="title">
                <div class="img-container">
                    <img class="centered-image" src="style/images/logo_no_bg.png" alt="logo">
                </div>
                <h2 class="footer-title p-0 m-0">ABRAHAMS BOSOM</h2>
                <h5 class="footer-subtitle p-0 m-0">Memorial Garden</h5>
            </div>
        </div>
        <div class="d-flex justify-content-center p-0 m-0">
            <div>
                <h4 class="text-center p-0 m-0">Phone: 0956-850-8440 / 0947-201-3665</h4>
                <h4 class="text-center p-0 m-0">Email: abrahamsbosom@gmail.com</h4>
                <h4 class="text-center p-0 m-0">Address: Km 46 Aguinaldo Hwy, Lauaan St. Lalaan, Silang, Cavite, 4118</h4>
            </div>
        </div>
        <div class="container d-flex justify-content-center p-0">
            <div class="d-flex gap-3">
                <i class="bi bi-telephone icon"></i>
                <i class="bi bi-instagram icon"></i>
            </div>
        </div>
        <hr>
        <div class="text-center p-3">
            <h1>© 2024 Abraham Bosom Cemetery. All Rights Reserved. Website Design By IT Students</h1>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <!-- You can use latest version of jQuery  -->
    <script src="assets/js/jquery-1.9.1.min.js"></script>

    <!-- Include js plugin -->
    <script src="owl-carousel/owl.carousel.js"></script>

    <script>
    $(document).ready(function() {
    
    $("#owl-demo").owlCarousel({
      navigation : true,
      
      items : 3,
      itemsDesktop : [1024, 2], // Change this line
    itemsDesktopSmall : [900, 2],
      itemsTablet: [768,1],
      itemsMobile : false
    });

    });

//    mark as read & delete
    document.querySelectorAll('.drop-bi').forEach(item => {
  item.addEventListener('click', event => {
    event.stopPropagation();
  });
});


    </script>

</body>
</html>