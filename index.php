<?php include_once('includes/url.inc.php'); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon"> 
    <title>Feather Caring</title>
    <link rel="canonical" href="<?php echo $base_url;?>" />
 
    <!-- All Stylesheets --> 
    <?php $folder='root'; include_once('includes/stylesheets.inc.php'); ?> 
</head>
<body>  

    <!-- Navigation Menu --> 
    <?php $folder='root'; include_once('includes/header.inc.php'); ?> 

        
    <!-- Header Wrapper Start -->
    <header class="header__wrapper d-flex align-items-end justify-content-center pt-lg-5 position-relative"> 
        <div class="container container__wraper">
            <div class="row g-4 align-items-center"> 
                <div class="col-lg-5 text-center text-lg-start">   
                    <h1 class="display-2 fw-bold text-dark title">
                        <span class="text-dark fw-bold d-sm-block">Persist in Life</span>
                        <span class="text-dark fw-bold d-sm-block">Let Hope Thrive</span> 
                    </h1>
                    <p class="lead-sm fw-normal text-dark mt-3 mb-lg-4">
                        Welcome to Feather Caring, where heartwarming care meets professional excellence, right here in Park Ridge, Brisbane, and Gold Coast.
                    </p>
                    <a href="about.php" class="btn btn-primary height fw-semibold px-4 rounded-pill" aria-label="GET STARTED">GET STARTED</a>
                </div>
                <div class="col-lg-7">
                    <img 
                        src="assets/images/home/hero-thumbnail.webp"
                        srcset="assets/images/home/hero-thumbnail-400.webp 575w,
                                assets/images/home/hero-thumbnail.webp 1200w
                        "
                        width="746" height="557" 
                        alt="Persist"
                        class="img-fluid hero w-100"
                    >
                </div>
            </div><!--.//row-->
        </div><!--.//container-->
        <div class="position-absolute rope__two d-none d-xl-block">
            <img class="img-fluid" width="775" height="787" src="assets/images/home/water-img-1.webp" alt="rope thumbnail">
        </div>
        <div class="position-absolute rope d-none d-xl-block">
            <img class="img-fluid" width="337" height="628" src="assets/images/home/rope.webp" alt="rope thumbnail">
        </div>
    </header>
    <!-- Header Wrapper End -->  

    <!-- services section Start -->
    <?php $folder='root'; include_once('includes/services.inc.php'); ?> 
    <!-- services section End --> 

    <!-- WELCOME TO FEATHER CARING start -->
    <section class="pb-5 pt-4 pt-lg-5 feather__caring">
        <div class="container">
            <div class="row g-4 g-xxl-5">
                <div class="col-lg-7">
                    <p class="lead text-primary fw-semibold text-center text-lg-start mb-0">WELCOME TO FEATHER CARING</p>
                     <h2 class="fs-3 text-dark fw-semibold text-center text-lg-start">
                        Where Heartwarming Care Meets Professional Excellence, Right Here In Park Ridge Brisbane, And Gold Coast.
                    </h2>
                    
                    <div class="d-flex align-items-center position-relative d-none d-lg-block">
                        <div class="circle__1 position-absolute circle rounded-circle">
                            <img src="assets/images/patient/patient-01.webp" class="img-fluid patient__thumb object-cover rounded-circle" alt="Patient thumb">
                        </div>
                        <div class="circle__2 position-absolute circle rounded-circle">
                            <img src="assets/images/patient/patient-02.webp" class="img-fluid patient__thumb object-cover rounded-circle" alt="Patient thumb">
                        </div>
                        <div class="circle__3 position-absolute circle rounded-circle">
                            <img src="assets/images/patient/patient-03.webp" class="img-fluid patient__thumb object-cover rounded-circle" alt="Patient thumb">
                        </div> 
                        <div class="border_right position-absolute"></div>
                        <div class="content__position text-primary lead fw-semibold position-absolute">2800+ SATISFIED PATIENTS</div>
                    </div>  
                </div><!--//.col-->
                <div class="col-lg-5">
                    <p class="text-dark mb-3 mb-lg-4 text-center text-lg-start">
                        Welcome to Feather Caring, where we believe in nurturing lives with compassion and expertise. Nestled in the heart of Park Ridge, and extending our wings to Brisbane and Gold Coast, we are dedicated to enriching the lives of our community members through our personalized care services. Join us on a journey where care meets quality, and every individual’s needs are met with a warm smile and a helping hand.
                    </p>
                    <div class="text-center text-lg-start">
                        <a href="about.php" class="btn btn-primary height fw-semibold px-5 py-3 rounded-pill" aria-label="GET STARTED">GET STARTED</a> 
                    </div>
                </div><!--//.col-->
            </div><!--//.row-->
            <div class="row g-3 mt-5 d-none d-md-flex">
                <div class="col-lg-6 col-md-12 d-flex">
                    <img class="img-fluid w-100 h-100 object-cover" src="assets/images/home/heartwarming-care-01.webp" width="638" height="505" alt="fether thumbnail"  style="border-radius: 1.25rem;object-position: center right;">  
                </div><!--//.col-->
                <div class="col-lg-6 d-flex">
                    <div class="row g-3 w-100">
                        <div class="col-md-6 col-lg-6 ">
                            <img class="img-fluid w-100" src="assets/images/home/heartwarming-care-02.webp" width="302" height="505" alt="fether thumbnail" style="border-radius: 1.25rem;">   
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <img class="img-fluid w-100" src="assets/images/home/heartwarming-care-03.webp" width="302" height="505" alt="fether thumbnail" style="border-radius: 1.25rem;">   
                        </div> 
                    </div>
                </div><!--//.col-->
            </div><!--//.row-->
            <div class="owl-carousel galleryCarousel mt-4 d-md-none">
                <img class="img-fluid w-100" src="assets/images/home/heartwarming-care-02.webp" width="302" height="505" alt="fether thumbnail" style="border-radius: 1.25rem;">   
                <img class="img-fluid w-100" src="assets/images/home/heartwarming-care-03.webp" width="302" height="505" alt="fether thumbnail" style="border-radius: 1.25rem;">  
            </div>
        </div><!--//.container-->
    </section>
    <!-- WELCOME TO FEATHER CARING End --> 

    <!-- Why Choose Feather Caring Start -->
    <section class="py-3 py-lg-4">
        <div class="container-fluid px-0">
            <div class="row g-0">
                <div class="col-lg-6">
                    <img class="img-fluid w-100 h-100" width="906" height="495" src="assets/images/home/home-care-services.webp" alt="home care services"> 
                </div><!--//.col-->
                <div class="col-lg-6">
                    <div class="img__card h-100 d-flex align-items-center justify-content-center" style="background-color: #3BA9E2;">
                        <div class="text-center text-lg-start p-4 p-xl-5 ms-lg-4">
                            <p class="lead text-white fw-semibold mb-0">WHY CHOOSE FEATHER CARING</p>
                            <h2 class="fs-2 col-lg-9 me-auto fw-bold text-white">We Are Home Care Services With Best Experience</h2> 
                        </div>
                    </div>
                </div><!--//.col-->
            </div><!--//.row-->
            <div class="container mt-4 mt-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-6">
                        <p class="text-dark text-center text-lg-start">
                            Choosing the right care provider is a big decision, and at Feather Caring, we understand the weight of this choice. What sets us apart is our unwavering commitment to providing personalized, compassionate care that respects the individuality of each client. We’re not just about ticking boxes; we’re about creating meaningful connections and delivering care that truly enhances lives.
                        </p>
                        <p class="text-dark text-center text-lg-start">
                            At Feather Caring, our approach is a balanced blend of professional expertise and heartfelt empathy. We know that quality care involves more than just meeting physical needs – it’s about nurturing the whole person. Our team is trained to listen, adapt, and respond to the unique situations of each client, ensuring that our care solutions are as individual as the people we serve. This personalized approach means considering the tradeoffs between different care methods and finding the right balance that suits each client’s lifestyle and preferences.
                        </p>
                    </div><!--//.col-->
                    <div class="col-lg-6">
                        <p class="text-dark text-center text-lg-start">
                            We also recognize the importance of staying at the forefront of care techniques and industry standards. Our staff are continuously learning and evolving, which means our clients benefit from the latest advancements in care. Yet, we maintain a warm, down-to-earth approach that makes our clients feel right at home.
                        </p>
                        <p class="text-dark text-center text-lg-start">
                            Choosing Feather Caring means choosing a partner in care who values your independence, respects your dignity, and is committed to enhancing your quality of life. Whether it’s through our community nursing, personal activity assistance, or our engaging community participation programs, we’re here to make a positive impact in your life. It’s not just about providing services; it’s about building a community where everyone feels valued, supported, and cared for.
                        </p>
                    </div><!--//.col-->
                </div><!--//.row-->
            </div><!--//.container-->
        </div><!--//.container-fluid-->
    </section>
    <!-- Why Choose Feather Caring End -->
 
    <!-- Blogs And Updates section Start -->
    <section class="py-4 py-lg-5 blog__wraper" style="background-color: rgba(0, 153, 219, 0.1);">
        <div class="container">
            <div class="text-center py-3 py-lg-4 text-27">
                <h2 class="fs-1 fw-semibold">Blogs And Updates</h2>
                <p>FinTeam was developed by a team of experienced financial planners and technology experts.</p> 
            </div>
            <div class="owl-carousel blogCarousel">
                <div class="blog__card p-4 rounded-4">
                    <a href="#" class="d-block rounded-4 overflow-hidden">
                        <img class="img-fluid" width="372" height="238" src="assets/images/blogs/blog-01.webp" alt="Blogs thumbnail">
                    </a>
                    <div class="title__box">
                        <span class="d-block fw-semibold text-date my-3">23 Aug 2023</span>
                        <h3 class="fs-5 text-primary fw-semibold mb-3 title">
                            <a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting</a>
                        </h3>
                        <p class="text-27 fs-15">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s,
                        </p>
                    </div>
                </div><!--//.blog__card-->
                <div class="blog__card p-4 rounded-4">
                    <a href="#" class="d-block rounded-4 overflow-hidden">
                        <img class="img-fluid" width="372" height="238" src="assets/images/blogs/blog-01.webp" alt="Blogs thumbnail">
                    </a>
                    <div class="title__box">
                        <span class="d-block fw-semibold text-date my-3">23 Aug 2023</span>
                        <h3 class="fs-5 text-primary fw-semibold mb-3 title">
                            <a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting</a>
                        </h3>
                        <p class="text-27 fs-15">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s,
                        </p>
                    </div>
                </div><!--//.blog__card-->
                <div class="blog__card p-4 rounded-4">
                    <a href="#" class="d-block rounded-4 overflow-hidden">
                        <img class="img-fluid" width="372" height="238" src="assets/images/blogs/blog-01.webp" alt="Blogs thumbnail">
                    </a>
                    <div class="title__box">
                        <span class="d-block fw-semibold text-date my-3">23 Aug 2023</span>
                        <h3 class="fs-5 text-primary fw-semibold mb-3 title">
                            <a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting</a>
                        </h3>
                        <p class="text-27 fs-15">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s,
                        </p>
                    </div>
                </div><!--//.blog__card-->
                <div class="blog__card p-4 rounded-4">
                    <a href="#" class="d-block rounded-4 overflow-hidden">
                        <img class="img-fluid" width="" height="" src="assets/images/blogs/blog-01.webp" alt="Blogs thumbnail">
                    </a>
                    <div class="title__box">
                        <span class="d-block fw-semibold text-date my-3">23 Aug 2023</span>
                        <h3 class="fs-5 text-primary fw-semibold mb-3 title">
                            <a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting</a>
                        </h3>
                        <p class="text-27 fs-15">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s,
                        </p>
                    </div>
                </div><!--//.blog__card-->
            </div><!--//.blogCarousel-->
        </div><!--//.container-->
    </section>
    <!-- Blogs And Updates section End -->
   
    <!-- FEEDBACKS section Start -->
    <section class="py-4 py-lg-5 plaholder__testi">
        <div class="container mt-lg-4">
            <div class="text-center">
                <p class="lead text-primary fw-semibold mb-0">FEEDBACKS</p>
                <h2 class="fs-1 text-27 fw-semibold mb-4">Stories From Our Patients</h2>
            </div>
            <div class="col-lg-10 position__img p-lg-5 p-4 d-flex align-items-end justify-content-center mx-auto overflow-hidden" style="background: url(assets/images/home/testi-bg-thumbnail.webp) no-repeat center center / cover;
            box-shadow: inset 0 0 0 2000px rgba(0,0,0,0.41);">
                <div class="testi__box col-lg-9 col-xl-8 col-12 me-auto" style="background-color: #3BA9E2;">
                    <div class="owl-carousel testimonialSlider">
                        <div class=""> 
                            <div class="d-flex align-items-center gap-3 mb-2 author__box">
                                <img class="img-fluid object-cover" width="97" height="97" src="assets/images/testimonial/client-thumb.webp" alt="client thumb">
                                <div class="client__box col">
                                    <span class="d-block fs-4 text-white fw-medium">Labin</span>
                                    <span class="d-block fs-15 text-white fw-medium">Dubai</span>
                                </div>
                            </div>
                            <p class="text-white fs-15">
                                “I’m delighted to inform that M’s blood test were normal and there was no thyroid alteration any longer. We are so happy! Thank you for your amazing work.I’m delighted to inform that M’s blood test were normal and there was no thyroid alteration any longer. We are so happy! Thank you for your amazing work.”
                            </p>
                        </div>
                        <div class=""> 
                            <div class="d-flex align-items-center gap-3 mb-2 author__box">
                                <img class="img-fluid object-cover" width="97" height="97" src="assets/images/testimonial/client-thumb.webp" alt="client thumb">
                                <div class="client__box col">
                                    <span class="d-block fs-4 text-white fw-medium">Labin</span>
                                    <span class="d-block fs-15 text-white fw-medium">Dubai</span>
                                </div>
                            </div>
                            <p class="text-white fs-15">
                                “I’m delighted to inform that M’s blood test were normal and there was no thyroid alteration any longer. We are so happy! Thank you for your amazing work.I’m delighted to inform that M’s blood test were normal and there was no thyroid alteration any longer. We are so happy! Thank you for your amazing work.”
                            </p>
                        </div>
                        <div class=""> 
                            <div class="d-flex align-items-center gap-3 mb-2 author__box">
                                <img class="img-fluid object-cover" width="97" height="97" src="assets/images/testimonial/client-thumb.webp" alt="client thumb">
                                <div class="client__box col">
                                    <span class="d-block fs-4 text-white fw-medium">Labin</span>
                                    <span class="d-block fs-15 text-white fw-medium">Dubai</span>
                                </div>
                            </div>
                            <p class="text-white fs-15">
                                “I’m delighted to inform that M’s blood test were normal and there was no thyroid alteration any longer. We are so happy! Thank you for your amazing work.I’m delighted to inform that M’s blood test were normal and there was no thyroid alteration any longer. We are so happy! Thank you for your amazing work.”
                            </p>
                        </div>
                    </div> 
                </div> 
            </div><!--//.col-lg-10-->
        </div><!--//.container-->
    </section>
    <!-- FEEDBACKS section End -->
   

    <!-- Footer and Script List --> 
    <?php $folder='root'; include_once('includes/footer.inc.php'); ?>  
   
</body>
</html>
 