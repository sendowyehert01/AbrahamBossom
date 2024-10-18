<?php require 'partials/head.php'; ?>
<?php require 'partials/nav.php'; ?>
<?php require 'partials/banner.php'; ?>

<style>
    /* The Modal (background) */
    .modal-head {
        display: none;
        position: fixed;
        /* z-index: 1; */
        padding-top: 100px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.9);
    }

    /* Modal Content (image) */
    .modal-image {
        margin: auto;
        display: block;
        width: 40%;
        max-width: 700px;
        animation: zoom 0.6s;
    }

    /* Zoom Animation */
    @keyframes zoom {
        from {
            transform: scale(0);
        }

        to {
            transform: scale(1);
        }
    }

    /* Close Button */
    .close-image {
        position: absolute;
        top: 15px;
        right: 35px;
        color: white;
        font-size: 40px;
        font-weight: bold;
        cursor: pointer;
    }

    /* Navigation buttons */
    .prev,
    .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        padding: 16px;
        margin-top: -22px;
        color: white;
        font-weight: bold;
        font-size: 30px;
        border-radius: 0 3px 3px 0;
        user-select: none;
    }

    .prev {
        left: 0;
    }

    .next {
        right: 0;
    }

    /* Caption text */
    #caption {
        margin: auto;
        text-align: center;
        color: white;
        padding: 10px 20px;
    }
</style>




<div class="row d-flex justify-content-center pb-5" style="background-color: #f9faf0;">
    <div class="top">
        <p style="font-family: 'Proxima Nova', sans-serif;"><?= $service['description'] ?></p>
    </div>
    <div class="image-grid container">
        <img class="first picsoflawn" src="style/images/IMG_1403.PNG" alt="Lawn Lot 1">
        <img class="second lawnpic picsoflawn" src="style/images/lawn1.png" alt="Lawn Lot 2">
        <img class="last lawnpic picsoflawn" src="style/images/lawn2.png" alt="Lawn Lot 3">
    </div>

    <!-- Rates Button -->
    <div class="d-flex justify-content-center">
        <button class="btn btn-success fw-bold" style="width: 10rem" data-bs-toggle="modal"
            data-bs-target="#ratesModal">
            RATES
        </button>
    </div>

   


</div>




<?php if ($_SESSION['user'] ?? false): ?>
    <?php require 'forms/services_form.php'; ?>
<?php endif; ?>


</div>



<!-- Modal Images -->
<div id="imageModal" class="modal modal-head">
    <span class="close close-image">&times;</span>
    <img class="modal-content modal-image" id="zoomedImage">
    <div id="caption">Lawn Lots</div>
    <button class="btn btn-success prev" onclick="changeImage(-1)">&#10094;</button>
    <button class="btn btn-success next" onclick="changeImage(1)">&#10095;</button>
</div>

<!-- Modal for displaying filtered services -->
<div class="modal fade" id="ratesModal" tabindex="-1" aria-labelledby="ratesModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ratesModalLabel">Rates</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Table for Rates -->
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Service</th>
                            <th scope="col">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><?= $service['name'] ?></td>
                        <td><?= $service['description'] ?></td>
                      </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <a href="/payment" class="btn btn-success">Pay Now</a>
            </div>
        </div>
    </div>
</div>

<?php require 'partials/foot.php'; ?>

<script>

    var modal = document.getElementById("imageModal");
    var modalImg = document.getElementById("zoomedImage");
    // var captionText = document.getElementById("caption");
    var images = document.querySelectorAll(".picsoflawn");
    var currentImageIndex = 0;

    images.forEach((img, index) => {
        img.onclick = function () {
            modal.style.display = "block";
            modalImg.src = this.src;
            // captionText.innerHTML = this.alt;
            currentImageIndex = index;
        }
    });

    var span = document.getElementsByClassName("close")[0];
    span.onclick = function () {
        modal.style.display = "none";
    }

    function changeImage(direction) {
        currentImageIndex += direction;
        if (currentImageIndex >= images.length) {
            currentImageIndex = 0;
        }
        if (currentImageIndex < 0) {
            currentImageIndex = images.length - 1;
        }
        modalImg.src = images[currentImageIndex].src;
        //   captionText.innerHTML = images[currentImageIndex].alt;
    }


</script>