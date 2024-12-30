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
                    <span><a href="index.php">Home</a> / Our Menu</span>
                    <h2>Our Menu</h2>
                </div>
            </div>
        </section>
    <!-- breadcrumb -->

    <!-- food-menu -->
        <section class="food-menu">
            <div class="container-full">
                <div class="section-wrap section-lg">
                    <div class="main-menu-heading" data-aos="fade-up" data-aos-offset="200" data-aos-delay="5" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="true"><h1>Food Menu</h1></div>
                    <div class="qrcode" data-aos="fade-up" data-aos-offset="200" data-aos-delay="5" data-aos-duration="1500" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="true"><img src="assets/img/qrcode/qr.png" alt="qrcode"></div>
                    <div class="find" data-aos="fade-up" data-aos-offset="200" data-aos-delay="5" data-aos-duration="2000" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="true"><p>Find Us At</p></div>  
                    <div class="food-item" data-aos="fade-up" data-aos-offset="200" data-aos-delay="5" data-aos-duration="2500" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="true">
                        <a href="assets/img/menu/menu.pdf" download="food menu">
                            <button class="button primary-button-fill" type="button">Download Our Menu</button>
                        </a>
                    </div> 
                </div>
            </div>
        </section>
    <!-- food-menu -->
    
    <?php include('include/instagram.php') ?>

	<?php include('include/footer.php') ?>

	<?php include('include/script.php') ?>
    
</body>
</html>