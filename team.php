<?php include('partials/menu.php'); ?>
    <section>
        <div class="container-fluid px-0 top-banner">
            <div class="container">
                <nav class="nav-bcrumb"
                    style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='10' height='18'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                    aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php" class="text-warning display-6 fw-bold"
                                style="text-decoration: none;">Home</a></li>
                        <li class="breadcrumb-item active fw-bold display-6" aria-current="page"
                            style="color: #fff;">Our Team
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <section class="teamSec">
        <div class="container teamContainer">
            <h1 class="main-heading"><span class="position-relative">Our Team</span></h1>
            <div class="team owl-carousel">
                <div class="team-item item">
                    <img src="assets/images/team/team1.png" alt="" class="img-fluid">
                    <div class="teamText">
                        <h3 class="title text-center">Ganesh Verma</h3>
                        <p>
                            [Designation] <br>
                            [About]
                        </p>
                    </div>
                </div>
                <div class="team-item item">
                    <img src="assets/images/team/team2.png" alt="" class="img-fluid">
                    <div class="teamText">
                        <h3 class="title text-center">Manan Patel</h3>
                        <p>
                            [Designation] <br>
                            [About]
                        </p>
                    </div>
                </div>
                <div class="team-item item">
                    <img src="assets/images/team/team5.png" alt="" class="img-fluid">
                    <div class="teamText">
                        <h3 class="title text-center">Team Memeber 3</h3>
                        <p>
                            [Designation] <br>
                            [About]
                        </p>
                    </div>
                </div>
                <div class="team-item item">
                    <img src="assets/images/team/team4.png" alt="" class="img-fluid">
                    <div class="teamText">
                        <h3 class="title text-center">Team Memeber 4</h3>
                        <p>
                            [Designation] <br>
                            [About]
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include('partials/footer.php'); ?>
<script>
    //Team Slider
    $('.team').owlCarousel({
        autoplay: true,
        loop: true,
        center: true,
        nav: true,
        navText: ["<i class='fas fa-caret-left'></i> ", "<i class='fas fa-caret-right'></i> "],
        autoplayHoverPause: true,
        animated: "fade",
        dots: true,

        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            980: {
                items: 2
            },
            1024: {
                items: 3
            }
        }
    });
</script>