<?php include('partials/menu.php'); ?>
    <section>
        <div class="container-fluid px-0 top-banner">
            <div class="container">
                <nav class="nav-bcrumb"
                    style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='10' height='18'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                    aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html" class="text-warning display-6 fw-bold"
                                style="text-decoration: none;">Home</a></li>
                        <li class="breadcrumb-item active fw-bold display-6" aria-current="page" style="color: #fff;">
                            Our  Products
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <section class="service-panel">
        <div class="container">
            <h1 class="main-heading"><span class="position-relative">our products</span></h1>
            <div class="row service-panel-row">
                <div class="col-md-4 col-sm-6j col-xs-12">
                    <div class="service-content">
                        <a href="productDetail.php" class="view-btn" data-id="1">
                        <div class="image-box">
                            <img src="assets/images/products/eacho-steel-rudder/esr4.jpg" alt="">
                        </div>
                        <div class="lower-content">
                            <div class="text">
                                <h5>Fencing Pole Eaco Steel Rudder Octagonal</h5>
                                
                            <a href="productDetail.php">View Details</a>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6j col-xs-12">
                    <div class="service-content">
                        <div class="image-box">
                            <img src="assets/images/products/bahu-balli-anchor/bbAnchor3.jpg" alt="">
                        </div>
                        <div class="lower-content">
                            <div class="text">
                                <h5>Eaco Steel Rudder Squre</h5>
                            </div>
                            <a href="productDetail.php" class="view-btn" data-id="2">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6j col-xs-12">
                    <div class="service-content">
                        <div class="image-box">
                            <img src="assets/images/products/imgs/37.jpg" alt="">
                        </div>
                        <div class="lower-content">
                            <div class="text">
                                <h5>Bahu-Bali Trellis</h5>
                            </div>
                            <a href="productDetail.php" class="view-btn" data-id="3">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6j col-xs-12">
                    <div class="service-content">
                        <div class="image-box">
                            <img src="assets/images/products/bahu-balli-anchor/bbAnchor5.jpg" alt="">
                        </div>
                        <div class="lower-content">
                            <div class="text">
                                <h5>Solar Current Fencing Pole With Ground Anchor</h5>
                            </div>
                            <a href="productDetail.php" class="view-btn" data-id="4">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6j col-xs-12">
                    <div class="service-content">
                        <div class="image-box">
                            <img src="assets/images/products/imgs/11.jpg" alt="">
                        </div>
                        <div class="lower-content">
                            <div class="text">
                                <h5>Pre Prefabricated Boundry Wall</h5>
                            </div>
                            <a href="productDetail.php" class="view-btn" data-id="5">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include('partials/footer.php'); ?>
<script>
    $(document).ready(function () {
            $('#products').addClass('active');
            $('#index').removeClass('active');

            let view_btn = document.querySelectorAll('.view-btn');
            for (var i = 0; i < view_btn.length; i++) {
                view_btn[i].addEventListener('click', function () {
                    let id = this.getAttribute('data-id');                  
                    let products = {id: parseInt(id) };
                    set_product(products);
                });
            }

            function set_product(product) {
                let set_product = localStorage.setItem('set_product', JSON.stringify(product));
            }
        });
</script>