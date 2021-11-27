        <footer class="footer">
            <div class="container text-center">
                <div class="footer-block">
                    <div class="copyright">
                        <p class="text-center">Copyright © 2021 <a href="" style="text-decoration: none;">
                                <strong class="">
                                    Bhavya Srishti Udyog.Pvt.Ltd
                                </strong></a>
                        </p>
                    </div>
                    <div class="social-links">
                        <ul>
                            <li><a href="https://www.facebook.com/Bhavya-Srishti-Udyog-Pvt-Ltd-107496568101060" target="_blank"><i
                                        class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UCvJ5Jf_HDswoi204FvpXmaw" target="_blank"><i
                                        class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!--Bootstrap  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <!-- swiper -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <!-- AOS Scroll -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <!-- ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- Owl Carosoul -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- Slick -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- popup js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js" integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Custom Js -->
    <script src="assets/js/script.js"></script>
    <script>
        $(document).ready(function() {
            

             window.onload = function () {
                document.getElementById("loader").style.display = "none";
                document.getElementById("maincontent").style.display = "block";
                console.log('load completed');
                // alert('loaded')
            };
            
            $(window).scroll(function () {
                if ($(window).scrollTop() > 200) {
                    $('.navigation-wrap').addClass('sticky')
                } else {
                    $('.navigation-wrap').removeClass('sticky')
                }
                if ($(window).scrollTop() > 250) {
                    $('#btnScrollToTop').css("display", "block");
                }
                else {
                    $('#btnScrollToTop').css("display", "none");
                }
            });
            

            const btnScrollToTop = document.querySelector("#btnScrollToTop");
            btnScrollToTop.addEventListener("click", function () {
                $("html , body").animate({ scrollTop: 0 }, "slow");
            });

            //header Slider
            var swiper = new Swiper(".mySwiper", {
                grabCursor: true,
               effect: "creative",
                creativeEffect: {
                     prev: {
                        shadow: true,
                        translate: ["-20%", 0, -1],
                    },
                    next: {
                        translate: ["100%", 0, 0],
                    },
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                pagination: {
                    el: ".swiper-pagination",
                    dynamicBullets: true,
                },
                loop: true,
                autoplay: {
                    delay: 2000,
                    disableOnInteraction: false
                }
            });

            //Images popup View
            $('.product').magnificPopup({
                type: 'image',
                delegate: 'a',
                gallery: {
                    enabled :true
                },
                easing: 'ease-in-out',
            });
        });

        //gallery Filter
        let list = document.querySelectorAll('.list');
        let itembox = document.querySelectorAll('.itembox');

        for(let i=0; i<list.length; i++)
        {
            list[i].addEventListener('click', function() {
                for(let j= 0; j<list.length; j++)
                {
                    list[j].classList.remove('active')
                }
                this.classList.add('active');

                let dataFilter = this.getAttribute('data-filter');

                for(let k= 0; k<itembox.length; k++)
                {
                    itembox[k].classList.remove('active');
                    itembox[k].classList.add('hide');

                    if (itembox[k].getAttribute('data-item') == dataFilter || dataFilter == 'all') {
                        itembox[k].classList.add('active');
                        itembox[k].classList.remove('hide');
                    }
                }
            });
        }

    </script>
</body>
</html>