<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <!-- Bootstrap CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- style1 -->
    <link href="assets/css/style1.css" rel="stylesheet" type="text/css">
    <!-- style2 -->
    <link href="assets/css/style2.css" rel="stylesheet" type="text/css">
</head>

<body>

    <!-- Modal Section -->

    <?php include 'inc/modal.php'; ?>

    <!-- Modal Section End -->

    <div style="margin-top:40px;">
        <!-- header -->
        <?php include 'inc/header.php'; ?>
        <!-- header -->
    </div>

    <!--  main banner section -->

    <div class="main-banner-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-12 d-flex flex-column justify-content-center">
                    <div class="text-reveal-div">
                        <p class="main-head reveal-text">Our Works</p>
                        <div class="">
                            <!-- <p class="bg-lite-pg-head reveal-text"></p> -->
                            <h3 class="sub-head head-color reveal-text">Our Latest Projects</h3>
                            <p class="pg-para reveal-text">Mentegoz technologies A well-established website development and digital
                                marketing-based IT company providing best-in-class technology solutions worldwide.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-12 d-flex align-items-end justify-content-center">
                    <div>
                        <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_mnek7m6l.json" background="transparent" speed="1" loop autoplay></lottie-player>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio  Items-->

    <div class="portfolio-section">
        <div class="portfolio-nav-tab">
            <ul class="portfolio-nav-tab-ul">
                <li>
                    <a data-filter="all" class="active portfolio-btn">All</a>
                </li>
                <li class="innner-tab">
                    <a data-filter="port-web" class="portfolio-btn">Web</a>
                    <div id="portfolio-innner-tab">
                        <ul>
                            <li>
                                <a data-filter="web-cms" class="inner_btn">CMS Websites</a>
                            </li>
                            <li>
                                <a data-filter="web-wp" class="inner_btn">Wordpress</a>
                            </li>
                            <li>
                                <a data-filter="web-ecommerce" class="inner_btn">E Commerce</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a data-filter="port-branding" class="portfolio-btn">Branding</a>
                </li>
                <li>
                    <a data-filter="port-ui-ux" class="portfolio-btn">UI/UX</a>
                </li>
            </ul>
        </div>

        <div class="portfolio-boxes">
            <div class="portfolo-box port-web web-cms">
                <a href="portfolio-details.php">
                    <img class="img-fluid portfolo-img" src="assets/img/portfolio/abs.jpg" alt="">
                    <div class="portfolio-desc">
                        <div class="portfolio-name">
                            <p class="portfolio-project-name cont-details">Arabian Business Solution</p>
                            <p class="portfolio-project-category cont-details">Web Design</p>
                        </div>
                        <div class="client  ">
                            <img src="assets/img/Clients/arif.jpg" alt="">
                        </div>
                    </div>
                </a>
            </div>
            <div class="portfolo-box port-web web-wp">
                <img class="img-fluid portfolo-img" src="assets/img/portfolio/ecoking3.jpg" alt="">
                <a href="portfolio-details.php">
                    <div class="portfolio-desc">
                        <div class="portfolio-name">
                            <p class="portfolio-project-name cont-details">Eco King</p>
                            <p class="portfolio-project-category cont-details">Web Design</p>
                        </div>
                        <div class="client">
                            <img src="assets/img/Clients/artic.jpg" alt="">
                        </div>
                    </div>
                </a>
            </div>
            <div class="portfolo-box port-ui-ux">
                <img class="img-fluid portfolo-img" src="assets/img/portfolio/brainzone.jpg" alt="">
                <a href="portfolio-details.php">
                    <div class="portfolio-desc">
                        <div class="portfolio-name">
                            <p class="portfolio-project-name cont-details">Brainzone Academy</p>
                            <p class="portfolio-project-category cont-details">Web Design</p>
                        </div>
                        <div class="client">
                            <img src="assets/img/Clients/baba.jpg" alt="">
                        </div>
                    </div>
                </a>
            </div>
            <div class="portfolo-box port-web web-cms">
                <img class="img-fluid portfolo-img" src="assets/img/portfolio/nazia/nazia.jpg" alt="">
                <a href="branding-inner.php">
                    <div class="portfolio-desc">
                        <div class="portfolio-name">
                            <p class="portfolio-project-name cont-details">Nazia Hospital</p>
                            <p class="portfolio-project-category cont-details">Re Branding</p>
                        </div>
                        <div class="client">
                            <img src="assets/img/Clients/bosq.jpg" alt="">
                        </div>
                    </div>
                </a>
            </div>
            <div class="portfolo-box port-branding">
                <img class="img-fluid portfolo-img" src="assets/img/portfolio/nazia/nazia6.jpg" alt="">
                <a href="portfolio-details.php">
                    <div class="portfolio-desc">
                        <div class="portfolio-name">
                            <p class="portfolio-project-name cont-details">Azzona Developers</p>
                            <p class="portfolio-project-category cont-details">Web Design</p>
                        </div>
                        <div class="client">
                            <img src="assets/img/Clients/baking300.png" alt="">
                        </div>
                    </div>
                </a>
            </div>
            <div class="portfolo-box port-web web-ecommerce">
                <img class="img-fluid portfolo-img" src="assets/img/portfolio/abs1.jpg" alt="">
                <a href="portfolio-details.php">
                    <div class="portfolio-desc">
                        <div class="portfolio-name">
                            <p class="portfolio-project-name cont-details">Azzona Developers</p>
                            <p class="portfolio-project-category cont-details">Web Design</p>
                        </div>
                        <div class="client">
                            <img src="assets/img/Clients/skill-hat.jpg" alt="">
                        </div>
                    </div>
                </a>
            </div>
            <div class="portfolo-box port-web web-ecommerce">
                <img class="img-fluid portfolo-img" src="assets/img/portfolio/ecoking2.jpg" alt="">
                <a href="portfolio-details.php">
                    <div class="portfolio-desc">
                        <div class="portfolio-name">
                            <p class="portfolio-project-name cont-details">Azzona Developers</p>
                            <p class="portfolio-project-category cont-details">Web Design</p>
                        </div>
                        <div class="client">
                            <img src="assets/img/Clients/we-corp.jpg" alt="">
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- Portfolio Items End -->

    <!-- scnd cta -->

    <?php include 'inc/scnd-cta.php' ?>

    <!-- scnd cta -->

    <!-- Footer Section -->

    <?php include 'inc/footer.php' ?>

    <!-- End Footer Section -->










    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.2.js"></script>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Lottie Files -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <!-- scroll smooth -->
    <script src="assets/js/SmoothScrollMouseWheel.js"></script>

    <!-- filter -->
    <script src="assets/js/filter.js"></script>

    <!-- main js 1 -->
    <script src="assets/js/main1.js"></script>

    <!-- main js 2 -->
    <script src="assets/js/main2.js"></script>

    <!-- Darkmode Script -->
    <script src="assets/js/darkmode.js"></script>

    <!-- Offcanvas Script -->
    <script src="assets/js/offcanvas.js"></script>

    <!-- Modal -->
    <script src="assets/js/modal.js"></script>

</body>

</html>