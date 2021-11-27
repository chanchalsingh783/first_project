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
                            Contact Us
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <section class="contactSec" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
            <h1 class="main-heading"><span class="position-relative">get in touch</span></h1>
            <div class="contactUsSection" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                <div class="container">
                    <div class="contactus">
                        <div class="contactBox">
                            <div class="contact form">
                                <h3>Send a Message</h3>
                                <form id="myForm">
                                    <div class="formBox">
                                        <div class="row100">
                                            <div class="inputBox">
                                                <span>Name</span>
                                                <input id="name" type="text" placeholder="Name" name="name" autocomplete="off"
                                                    class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row50">
                                            <div class="inputBox">
                                                <span>Email</span>
                                                <input id="email" type="email" placeholder="Email" name="email" class="form-control"
                                                    required>
                                            </div>
                                            <div class="inputBox">
                                                <span>Mobile</span>
                                                <input id="mob_no" type="text" placeholder="Mobile Number" name="mobile"
                                                    class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row100">
                                            <div class="inputBox">
                                                <span>Message</span>
                                                <textarea id="msg" placeholder="Write Your Message Here..." name="msg"
                                                    class="form-control" required></textarea>
                                            </div>
                                        </div>
                                        <div class="contact-btn">
                                            <div>
                                                <input type="button" value="Send Email" onclick="sendEmail()" class="btn hero-btn">
                                            </div>
                                            <div class="sent-notification text-success fw-bold"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="contact info">
                                <h3>Contact Info</h3>
                                <div class="infoBox">
                                    <div>
                                        <span>
                                            <ion-icon name="location"></ion-icon>
                                        </span>
                                        <p>
                                            Bhavya Srishti Udyog,
                                            Near Prerana vidyalaya campus,
                                            Kiritpur Road, <br>Village – Kathiya,
                                            Post – Ranka, Bemetara (C.G.) – 491335
                                        </p>
                                    </div>
                                    <div>
                                        <span>
                                            <ion-icon name="mail"></ion-icon>
                                        </span>
                                        <a href="mailto: singhchanchal5778@gmail.com">bsunet.com@gmail.com</a>
                                    </div>
                                    <div>
                                        <span>
                                            <ion-icon name="call"></ion-icon>
                                        </span>
                                        <a href="tel: +91 91315 93397">+91 91315 93397</a>
                                        <a href="tel: +91 90989 31607">+91 90989 31607</a>
                                    </div>
                                </div>
                            </div>
                            <div class="contact map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3709.5610311381292!2d81.64943741494243!3d21.60305138569015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a28f9f139f7e0bb%3A0x9a5a3320b76640de!2sBhavya%20Srishti%20Udyog%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1635336261315!5m2!1sen!2sin"
                                    style="border:0;" allowfullscreen="" loading="lazy">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php include('partials/footer.php'); ?>
<script>
    $(document).ready(function () {
            $('#contact').addClass('active');
            $('#index').removeClass('active');
        });
</script>