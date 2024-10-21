<?php require 'partials/head.php'; ?>
<?php require 'partials/nav.php'; ?>
<?php require 'partials/banner.php'; ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
<style>
    /* _______________________________________________ */

    #main-slider {
        width: 50%;
        height: auto;
        margin: 0 auto;
    }

    #main-slider .splide__track,
    #main-slider .splide__list {
        height: auto;
    }

    #main-slider .splide__slide {
        display: flex;
        justify-content: center;
        align-items: center;
        height: auto;
    }

    #main-slider .splide__slide img {
        width: 100%;
        height: auto;
        object-fit: contain;
    }




    #thumbnail-slider {
        width: 60%;
        margin: 10px auto;
    }

    #thumbnail-slider .splide__track {
        padding: 10px 0;
    }

    #thumbnail-slider .splide__slide {
        opacity: 0.6;
        transition: opacity 0.3s;
    }

    #thumbnail-slider .splide__slide.is-active {
        opacity: 1;
        border: 2px solid #000;
    }

    #thumbnail-slider .splide__slide img {
        width: 100%;
        height: auto;
        object-fit: cover;
    }
</style>




<div class="row d-flex justify-content-center pb-5" style="background-color: #f9faf0;">
    <div class="top">
        <p style="font-family: 'Proxima Nova', sans-serif;"><?= $service_description ?></p>
    </div>

    <!-- __________________________________________________________________________________________________ -->

    <div id="main-slider" class="splide">
        <div class="splide__track">
            <ul class="splide__list">
                <?php foreach ($service_images as $image): ?>
                    <li class="splide__slide">
                        <img src="uploads/<?= $image['image_src'] ?>" alt="<?= $image['image_name'] ?>">
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

    <div id="thumbnail-slider" class="splide">
        <div class="splide__track">
            <ul class="splide__list">
                <?php foreach ($service_images as $image): ?>
                    <li class="splide__slide">
                        <img src="uploads/<?= $image['image_src'] ?>" alt="<?= $image['image_name'] ?>">
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

    <!-- ______________________________________________________________________________________________________ -->

    <!-- Rates Button -->
    <div class="d-flex justify-content-center mt-5">
        <button class="btn btn-success fw-bold" style="width: 10rem" data-bs-toggle="modal"
            data-bs-target="#ratesModal">
            RATES
        </button>
    </div>

</div>

<?php if (!$_SESSION): ?>
    <?php require 'forms/services_form.php'; ?>
<?php endif; ?>


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

                        <tr style="background-color: green;">
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
                <?php if (!$_SESSION): ?>
                    <a href="/payment" class="btn btn-success">Pay Now</a>
                <?php else: ?>
                    <a href="/register" class="btn btn-success">Pay Now</a>
                <?php endif; ?>
            </div>

        </div>
    </div>
</div>

<?php require 'partials/foot.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var main = new Splide('#main-slider', {
            type: 'fade',
            pagination: false,
            arrows: true,
            cover: false,
            heightRatio: 0.6000, // This sets a 16:9 aspect ratio. Adjust as needed.
        });

        var thumbnails = new Splide('#thumbnail-slider', {
            rewind: true,
            arrows: false,
            fixedWidth: 104,
            fixedHeight: 58,
            isNavigation: true,
            gap: 10,
            focus: 'center',
            pagination: false,
            cover: true,
            dragMinThreshold: {
                mouse: 4,
                touch: 10,
            },
            breakpoints: {
                640: {
                    fixedWidth: 66,
                    fixedHeight: 38,
                },
            },
        });

        main.sync(thumbnails);
        main.mount();
        thumbnails.mount();
    });
</script>