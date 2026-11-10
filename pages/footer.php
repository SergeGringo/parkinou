<footer>
    <div class="content_footer">
        <div class="margeur">
            <div class="row col-lg-12 col-md-12">
                <div class="col-lg-5 col-md-5">
                    <div class="first_content">
                        <div class="logo">
                            <img src="../images/Logo.png" alt="">
                        </div>
                        <p>Simplifiez votre quotidien : payez, prolongez et stoppez votre stationnement à distance avec
                            l'appli Parkinou
                        </p>
                        <div class="two_stores">
                            <a href="#" class="store1">
                                <img src="../images/Playstore.png" alt="">
                            </a>
                            <a href="#" class="store1">
                                <img src="../images/Appstore.png" alt="">
                            </a>
                            <a href="#" class="store1" >
                                <img src="../images/Huawei.png" alt= "">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2">
                    <div class="services">
                        <h5>Nos services</h5>
                        <ul>
                            <li><a href="#">Pour les automobilistes</a></li>
                            <li><a href="#">Pour les entreprises</a></li>
                            <li><a href="#">Pour les villes</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2">
                    <div class="services">
                        <h5>Nos services</h5>
                        <ul>
                            <li><a href="#">Qui sommes-nous ?</a></li>
                            <li><a href="#">Presse</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Nous réjoindre</a></li>
                            <li><a href="#">Notre équipe</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="services">
                        <ul>
                            <li><a href="#"><i class="fa-solid fa-location-dot"></i> FR </a></li>
                            <li><a href="#"><i class="fa-solid fa-circle-question"></i> Aide</a></li>
                            <li><a href="#"><i class="fa-solid fa-phone"></i> Contactez-nous</a></li>
                            <li><a href="#">Votre avis nous intéresse</a></li>
                            <li><a href="#">Contact Presse</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="conditions">
            <div class="utilisations">
                <a href="#">Conditions d'utilisation</a>
                <a href="#">Politique de confidentialité</a>
                <a href="#">Politique Cookies</a>
                <a href="#">Mentions légales</a>
            </div>
            <div class="reseaux">
                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i> </a>
                <a href="#"><i class="fa-brands fa-youtube"></i> </a>
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
            </div>
        </div>
    </div>
</footer>




<script src="../js/jquery.js"></script>
<script src="../js/header.js"></script>
<script src="../js/slick.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../js/main.js"></script>

<script>

    $(document).ready(function () {
        $('.content_slide').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows: true,
            prevArrow: $('.slick-prev'),
            nextArrow: $('.slick-next'),
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        autoplay: true,
                    }
                },
                {
                    breakpoint: 912,
                    settings: {
                        slidesToShow: 2,
                        autoplay: true,
                    }
                },
                {
                    breakpoint: 650 + 650,
                    settings: {
                        slidesToShow: 3,
                        autoplay: true,
                    }
                }
            ]
        });


        // Gérer la visibilité des boutons
        $('.content_slide').on('afterChange', function (event, slick, currentSlide) {
            if (currentSlide === 0) {
                $('.slick-prev').hide();
            } else {
                $('.slick-prev').show();
            }

            if (currentSlide === slick.slideCount - 1) {
                $('.slick-next').hide();
            } else {
                $('.slick-next').show();
            }
        });

        // Initialiser la visibilité des boutons au chargement
        $('.content_slide').on('init', function (event, slick) {
            if (slick.currentSlide === 0) {
                $('.slick-prev').hide();
            }
            if (slick.currentSlide === slick.slideCount - 1) {
                $('.slick-next').hide();
            }
        });
    });
</script>


</body>

</html>