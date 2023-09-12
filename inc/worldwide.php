<section id="worldwidesection">
    <div class="container">
        <div class="main-head head-color">world Wide</div>
        <h1 class="sub-head head-color">Connections Across<br>The World</h1>
        <p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum cupiditate architecto eos hic
            sapiente quas amet quod alias cumque quaerat! Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat,
            dolorum.</p>
        <div class="worldmap">
            <img src="assets/img/world-map2.png" class="img-fluid" alt="">
            <img src="assets/img/location.png" class="location-icon india" alt="">
            <img src="assets/img/location.png" class="location-icon arab" alt="">
            <img src="assets/img/location.png" class="location-icon europe" alt="">
            <img src="assets/img/location.png" class="location-icon south-america" alt="">
            <img src="assets/img/location.png" class="location-icon america" alt="">
            <img src="assets/img/location.png" class="location-icon canada" alt="">
            <img src="assets/img/location.png" class="location-icon kuwait" alt="">
            <img src="assets/img/location.png" class="location-icon singapore" alt="">
            <img src="assets/img/location.png" class="location-icon newzealand" alt="">
        </div>
    </div>
    <div class="mentlogo">
        <img class="ment-logo" src="assets/img/mentegoz-eye_blue.png" alt="">
        <img class="ment-logo-dark d-none" src="assets/img/mentegoz-eye.png" alt="">
    </div>
    <div class="textmove">
        <h1 class="conn-head">OUR CONNECTIONS</h1>
        <div class="countries conn-logo-slide">
            <div class="india">
                <img src="assets/img/icons/country/india.png" alt="">
                <p>India</p>
            </div>
            <div class="uae">
                <img src="assets/img/icons/country/united-arab-emirates.png" alt="">
                <p>UAE</p>
            </div>
            <div class="oman">
                <img src="assets/img/icons/country/oman.png" alt="">
                <p>Oman</p>
            </div>
            <div class="saudi">
                <img src="assets/img/icons/country/saudi-arabia.png" alt="">
                <p>Saudi</p>
            </div>
            <div class="qatar">
                <img src="assets/img/icons/country/qatar.png" alt="">
                <p>Qatar</p>
            </div>
            <div class="kuwait">
                <img src="assets/img/icons/country/kuwait.png" alt="">
                <p>Kuwait</p>
            </div>
            <div class="america">
                <img src="assets/img/icons/country/united-states.png" alt="">
                <p>USA</p>
            </div>
            <div class="canada">
                <img src="assets/img/icons/country/canada.png" alt="">
                <p>Canada</p>
            </div>
            <div class="bahrain">
                <img src="assets/img/icons/country/bahrain.png" alt="">
                <p>Bahrain</p>
            </div>
            <div class="singapore">
                <img src="assets/img/icons/country/singapore.png" alt="">
                <p>Singapore</p>
            </div>
            <div class="newzealand">
                <img src="assets/img/icons/country/new-zealand.png" alt="">
                <p>New zealand</p>
            </div>
            <div class="india">
                <img src="assets/img/icons/country/india.png" alt="">
                <p>India</p>
            </div>
            <div class="uae">
                <img src="assets/img/icons/country/united-arab-emirates.png" alt="">
                <p>UAE</p>
            </div>
            <div class="oman">
                <img src="assets/img/icons/country/oman.png" alt="">
                <p>Oman</p>
            </div>
            <div class="saudi">
                <img src="assets/img/icons/country/saudi-arabia.png" alt="">
                <p>Saudi</p>
            </div>
            <div class="qatar">
                <img src="assets/img/icons/country/qatar.png" alt="">
                <p>Qatar</p>
            </div>
            <div class="kuwait">
                <img src="assets/img/icons/country/kuwait.png" alt="">
                <p>Kuwait</p>
            </div>
            <div class="america">
                <img src="assets/img/icons/country/united-states.png" alt="">
                <p>USA</p>
            </div>
            <div class="canada">
                <img src="assets/img/icons/country/canada.png" alt="">
                <p>Canada</p>
            </div>
            <div class="bahrain">
                <img src="assets/img/icons/country/bahrain.png" alt="">
                <p>Bahrain</p>
            </div>
            <div class="singapore">
                <img src="assets/img/icons/country/singapore.png" alt="">
                <p>Singapore</p>
            </div>
            <div class="newzealand">
                <img src="assets/img/icons/country/new-zealand.png" alt="">
                <p>New Zealand</p>
            </div>
        </div>
    </div>
</section>




<script>
    // World Wide Countries Slick Slider

    if (document.querySelector('.conn-logo-slide') !== null) {
        $('.conn-logo-slide').slick({
            // dots: true,
            infinite: true,
            loop: true,
            autoplay: true,
            autoplaySpeed: 0,
            speed: 4000,
            cssEase: 'linear',
            slidesToShow: 6,
            slidesToScroll: 1,
            pauseOnHover: false,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 900,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        speed: 2000
                    }
                }
            ]
        })
    }
</script>