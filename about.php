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
                            style="color: #fff;">About Us
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <section class="aboutSec">
            <div class="container">
                <div class="about" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
                    <h1 class="main-heading" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500"><span class="position-relative">About Us</span></h1>
                    <div class="row about-row">
                        <div class="col">
                            <div>
                                <p>
                                    We are a young manufacturing company with a zeal to make a difference in society. We are driven by a deep philosophy of Ethics & Trust.Our team is backed by over 10 years of experience in diverse sectors and advised by a committed team of professionals from IIT’s and IIIT’s. We are located 1 km from the Bemetra-Simga 2 lane Concrete Highway. The location enjoys excellent connectivity to Bilaspur (1.5 hrs by 6 lane concrete highway) and Raipur (1 hr by 6 lane concrete highway) thus ensuring seamless deliveries to neighbouring states as well. We are using high quality customized GI mould forming machines, ESSAR/ JK Steel or Equivalent GI sheets for added strength and other imported materials.
                                </p>
                            </div>
                        </div>
                        <div class="col">
                            <iframe src="https://www.youtube.com/embed/zVaMTNZccJs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
<?php include('partials/footer.php'); ?>
<script>
    $(document).ready(function () {
            $('#about').addClass('active');
            $('#index').removeClass('active');
        });
</script>
    