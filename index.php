<?php include_once('includes/url.inc.php'); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon"> 
    <title>Care allies </title>
    <link rel="canonical" href="<?php echo $base_url;?>" />
 
    <!-- All Stylesheets --> 
    <?php $folder='root'; include_once('includes/stylesheets.inc.php'); ?> 
</head>
<body>  

    <!-- Navigation Menu --> 
    <?php $folder='root'; include_once('includes/header.inc.php'); ?> 

        
    <!-- Header Wrapper Start -->
    <header class="header__wrapper d-flex align-items-end pt-5 pt-lg-0"> 
        <div class="container">
            <div class="row g-4 align-items-center"> 
                <div class="col-lg-7 text-center text-lg-start">  
                    <p class="lead-lg text-dark fw-normal">Care allies disability Services</p>
                    <h1 class=" h1 fw-bold text-dark">
                        <span class="text-dark fw-normal d-sm-block">Empowering Your Journey</span>
                        <span class="text-dark fw-normal d-sm-block">to Independence with</span>
                        <span class="text__bold fw-bold text-primary">CARE</span>
                        <span class="text__bold">ALLIES</span>
                    </h1>
                    <p class="fs-15 fw-normal text-dark mt-3 mb-lg-4">
                        Unlock the potential in you and step into a brighter future with CARE ALLIES, the leading name in disability services in NSW. 
                    </p>
                    <a href="about.php" class="btn btn-primary height fw-medium px-4 rounded-pill" aria-label="KNOW MORE">KNOW MORE</a>
                </div>
                <div class="col-lg-5">
                    <img 
                        src="assets/images/home/hero-thumbnail.webp"
                        srcset="assets/images/home/hero-thumbnail-400.webp 575w
                                assets/images/home/hero-thumbnail.webp 1200w
                        "
                        width="636" height="704" 
                        alt="CARE ALLIES"
                        class="img-fluid w-100"
                    >
                </div>
            </div><!--.//row-->
        </div><!--.//container-->
    </header>
    <!-- Header Wrapper End --> 
    

    <!-- Services Wrapper Start -->
    <?php include_once('includes/services.inc.php'); ?>
    <!-- Services Wrapper End -->  

    <!-- Our Mission at CARE ALLIES start -->
    <section class="pb-5 pt-4 pt-lg-5">
        <div class="container">
            <div class="row g-4 g-xxl-5 align-items-center">
                <div class="col-lg-6">
                    <img 
                        class="img-fluid w-100" 
                        width="624" height="471" 
                        src="assets/images/home/our-mission.webp" 
                        srcset="assets/images/home/our-mission-400.webp 575w
                                assets/images/home/our-mission.webp 1200w
                        "
                        alt="Our Mission"
                    >
                </div><!--//.col-->
                <div class="col-lg-6">
                    <h2 class="h2 fw-normal mb-3">Our Mission at CARE ALLIES</h2>
                    <p class="text-38 mb-3 mb-lg-4">
                        At the heart of our efforts is a simple yet profound belief: every individual deserves a chance to live an independent, fulfilled life. We stand as the beacon of hope and support for those who strive to overcome their challenges and aim to achieve their dreams. It’s not just about providing services; it’s about empowering individuals to get more out of life. The balance between care and empowerment is delicate, and we’ve mastered this art.
                    </p>
                    <a href="about.php" class="btn btn-primary height fw-medium px-5 rounded-pill" aria-label="KNOW MORE">KNOW MORE</a>
                </div><!--//.col-->
            </div><!--//.row-->
        </div><!--//.container-->
    </section>
    <!-- Our Mission at CARE ALLIES End --> 

    <!-- Why choose CARE ALLIES section Start -->
    <section class="pb-3 py-lg-5 choose__care__wraper" style="background-color: rgba(82, 28, 99, 0.12);backdrop-filter: blur(30px);-webkit-backdrop-filter: blur(30px);">
        <div class="container">
            <div class="row g-4 g-lg-5 align-items-center">

                <div class="col-lg-7">
                    <div class="pe-lg-4">
                        <h2 class="h2 mb-3 text-primary fw-normal">Why choose CARE ALLIES</h2>
                        <p class="text-gray mb-lg-5 fs-15">
                            <b>CARE ALLIES Disability Services</b> stand out for their commitment to personalized care, highly qualified staff, and a comprehensive range of support tailored to individual needs. With a reputation for excellence, <b>CARE ALLIES</b> prioritizes community integration and advocates for the rights and well-being of individuals with disabilities, making them a reliable choice for compassionate and effective disability services.
                        </p>
                        <img 
                            class="img-fluid w-100" 
                            width="624" height="270" 
                            src="assets/images/home/why-choose-care.webp" 
                            srcset="assets/images/home/why-choose-care-400.webp 575w
                                    assets/images/home/why-choose-care.webp 1200w
                            "
                            alt="Why choose CARE ALLIES"
                        > 
                    </div>
                </div><!--//.col-->

                <div class="col-lg-5">
                    <div class="d-flex justify-content-between mb-3 mb-lg-4">
                        <div class="choose__box d-flex align-items-center justify-content-center">
                            <img 
                                class="img-fluid" 
                                width="41" height="37" 
                                src="assets/images/icons/personalized-approach.svg" 
                                alt="Personalized Approach"
                            >
                        </div>
                        <div class="choose__content ps-3">
                            <span class="lead-lg text-gray fw-semibold">01</span>
                            <h3 class="lead-lg fw-semibold text-gray">Personalized Approach</h3>
                            <p class="fs-15 text-gray">
                                Our services are not onesizefitsall. We understand your unique journey and tailor our services to align with your goals.
                            </p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between mb-3 mb-lg-4">
                        <div class="choose__box d-flex align-items-center justify-content-center">
                            <img 
                                class="img-fluid" 
                                width="41" height="35" 
                                src="assets/images/icons/experienced-team.svg" 
                                alt="Experienced Team"
                            >
                        </div>
                        <div class="choose__content ps-3">
                            <span class="lead-lg text-gray fw-semibold">02</span>
                            <h3 class="lead-lg fw-semibold text-gray">Experienced Team</h3>
                            <p class="fs-15 text-gray">
                                Years of expertise combined with a passion for making a difference – that’s our team for you!
                            </p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="choose__box d-flex align-items-center justify-content-center">
                            <img 
                                class="img-fluid" 
                                width="41" height="49" 
                                src="assets/images/icons/commitment-excellence.svg" 
                                alt="Commitment To Excellence"
                            >
                        </div>
                        <div class="choose__content ps-3">
                            <span class="lead-lg text-gray fw-semibold">03</span>
                            <h3 class="lead-lg fw-semibold text-gray">Commitment To Excellence</h3>
                            <p class="fs-15 text-gray">
                                Every step we take is towards providing unparalleled service, making your journey with us smooth and transformative.
                            </p>
                        </div>
                    </div>
                </div><!--//.col-->

            </div><!--//.row-->
        </div><!--//.container-->
    </section>
    <!-- Why choose CARE ALLIES section End -->

    <!-- Celebrating Differences, Embracing Abilities Start -->
    <section class="py-3 py-lg-5 our__service">
        <div class="container">
            <h2 class="h2 text-dark fw-normal mb-3 mb-lg-5 text-center">Celebrating Differences, Embracing Abilities</h2>
            <div class="row g-2 g-lg-3">

                <div class="col-lg-4">
                    <div class="service__caption bg-primary text-start">
                        <div class="services__box d-flex align-items-center justify-content-center">
                            <img 
                                class="img-fluid" 
                                width="41" height="37" 
                                src="assets/images/icons/personalized-approach.svg" 
                                alt="Quality Services"
                            >
                        </div>
                        <h3 class="lead-lg text-white fw-bold mb-3 mt-2">Quality Services</h3>
                        <p class="fs-15 text-white">
                            Supported Independent Living (SIL) to Positive Behavior Support, are delivered with the highest level of professionalism and care.
                        </p>
                    </div>
                </div><!--//.col-->
                <div class="col-lg-4">
                    <div class="service__caption bg-secondary text-start">
                        <div class="services__box bg-white d-flex align-items-center justify-content-center">
                            <img 
                                class="img-fluid" 
                                width="41" height="37" 
                                src="assets/images/icons/personalized-care.svg" 
                                alt="Personalized Care"
                            >
                        </div>
                        <h3 class="lead-lg text-primary fw-bold mb-3 mt-2">Personalized Care</h3>
                        <p class="fs-15" style="color: #1A1A1A;">
                            Understanding that each individual’s needs are unique, we tailor our services to suit your specific needs and preferences.
                        </p>
                    </div>
                </div><!--//.col-->
                <div class="col-lg-4">
                    <div class="service__caption bg-primary text-start">
                        <div class="services__box d-flex align-items-center justify-content-center">
                            <img 
                                class="img-fluid" 
                                width="41" height="37" 
                                src="assets/images/icons/commitment-excellence.svg" 
                                alt="Empowering Individuals"
                            >
                        </div>
                        <h3 class="lead-lg text-white fw-bold mb-3 mt-2">Empowering Individuals</h3>
                        <p class="fs-15 text-white">
                            Our services are designed not just to provide care, but to foster independence, confidence, and a sense of self-worth.
                        </p>
                    </div>
                </div><!--//.col-->

            </div><!--//.row-->
        </div><!--//.container-->
    </section>
    <!-- Celebrating Differences, Embracing Abilities End -->
    
    <!-- Our Mission at CARE ALLIES section Start -->
    <section class="py-4 py-md-5">
        <div class="container">
            <div class="row g-4 g-lg-5 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <img 
                        class="img-fluid w-100" 
                        width="624" height="476" 
                        src="assets/images/home/importance-transitions.webp"
                        srcset="assets/images/home/importance-transitions-400.webp 575w,
                                assets/images/home/importance-transitions.webp 1200w
                        " 
                        alt="Our Mission at CARE"
                    >
                </div><!--//.col-->
                <div class="col-lg-6 order-lg-1">
                    <h2 class="h2 text-38 fw-normal mb-3">Our Mission at CARE ALLIES</h2>
                    <p class="text-38 fs-15 mb-4">
                        At the heart of our efforts is a simple yet profound belief: every individual deserves a chance to live an independent, fulfilled life. We stand as the beacon of hope and support for those who strive to overcome their challenges and aim to achieve their dreams. It’s not just about providing services; it’s about empowering individuals to get more out of life. The balance between care and empowerment is delicate, and we’ve mastered this art.
                    </p>
                    <a href="about.php" class="btn btn-primary height fw-medium px-5 rounded-pill" aria-label="KNOW MORE">KNOW MORE</a>
                </div><!--//.col-->
            </div><!--//.row-->
        </div><!--//.container-->
    </section>
    <!-- Our Mission at CARE ALLIES section End --> 

   

    <!-- Footer and Script List --> 
    <?php $folder='root'; include_once('includes/footer.inc.php'); ?>  
   
</body>
</html>
 