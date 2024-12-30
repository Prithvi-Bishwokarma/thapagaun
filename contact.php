<html lang="en">
<head>
        <?php include('include/head.php') ?>
</head>
<body>
	<!-- Header -->
        <?php include('include/header.php') ?>
	<!-- Header -->

    <!-- breadcrumb -->
        <section class="breadcrumb">
            <div class="container-full">
                <div class="wrap">
                    <span><a href="index.php">Home</a> / Contact Us</span>
                    <h2>Contact Us</h2>
                </div>
            </div>
        </section>
    <!-- breadcrumb -->

    <!-- Contact -->
        <section class="contact">
            <div class="container">
                <div class="inner-wrap">
                    <div class="section-wrap section-lg">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="contact-form" data-aos="fade-right" data-aos-offset="200" data-aos-delay="5" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="true">
                                    <form onsubmit="return data()" action="https://formspree.io/f/mjkboeyw" method="POST">
                                        <div class="form-control">
                                            <input type="text" name="name" id="n1" placeholder="Name"/>
                                        </div>
                                        <div class="form-control">
                                            <input type="text" name="mobile" id="n2" placeholder="Phone"/>
                                        </div>
                                        <div class="form-control">
                                            <input type="email" name="email" id="n3" placeholder="Email"/>
                                        </div>
                                        <div class="form-control">
                                                <select aria-required="true" id="n4" aria-invalid="false" name="your-subject">
                                                    <option value="Select Events">Select Events</option>
                                                    <option value="Wedding">Wedding</option>
                                                    <option value="Birthday">Birthday</option>
                                                </select>
                                        </div>
                                        <div class="form-control">
                                            <textarea name="message" id="n5" cols="20" rows="10"></textarea>
                                        </div>
                                        <input type="submit" value="Submit" class="button primary-button-fill"/>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="google-map" data-aos="fade-left" data-aos-offset="200" data-aos-delay="5" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="true">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14131.365259881331!2d85.332858!3d27.691299!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19bd0a8b390b%3A0xdbc566cc5aeba2df!2sThapa%20Gaun%20Banquet!5e0!3m2!1sen!2snp!4v1723747813089!5m2!1sen!2snp" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>   
    <!-- Contact -->
    
    <?php include('include/instagram.php') ?>

	<?php include('include/footer.php') ?>

	<?php include('include/script.php') ?>
    
</body>
</html>