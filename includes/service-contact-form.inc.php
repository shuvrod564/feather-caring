


<form action="<?php echo $base_url;?>submit-service-contact-form.inc.php" method="POST" id="serviceContactForm" class="row gx-4 gy-4 gy-lg-5 contact__form mt-4">
    <div class="col-md-4">
        <input type="text" name="name" id="name" class="form-control bg-transparent rounded-0 border-0 px-0" placeholder="First Name">
        <div class="small text-danger error" id="name_error"></div>
    </div><!--.//col-->
    <div class="col-md-4">
        <input type="text" name="last_name" id="lastName" class="form-control bg-transparent rounded-0 border-0 px-0" placeholder="Last Name">
        <div class="small text-danger error" id="lastName_error"></div>
    </div><!--.//col-->
    <div class="col-md-4">
        <input type="text" name="email" id="email" class="form-control bg-transparent rounded-0 border-0 px-0" placeholder="Email Address">
        <div class="small text-danger error" id="email_error"></div>
    </div><!--.//col-->
    <div class="col-md-4">
        <input type="text" name="phone" id="phone" class="form-control bg-transparent rounded-0 border-0 px-0" placeholder="Phone No">
        <div class="small text-danger error" id="phone_error"></div>
    </div><!--.//col-->
    
    <div class="col-md-4">
        <input type="text" name="about" id="about" class="form-control bg-transparent rounded-0 border-0 px-0" placeholder="How did you hear about us?">
        <div class="small text-danger error" id="about_error"></div>
    </div><!--.//col-->
    <div class="col-md-4">
        <input type="text" name="enquiry" id="enquiry" class="form-control bg-transparent rounded-0 border-0 px-0" placeholder="Nature of your enquiry?">
        <div class="small text-danger error" id="enquiry_error"></div>
    </div><!--.//col--> 
    <div class="col-12">
        <div class="text-center pb-4">
            <button class="btn btn-primary rounded-pill height px-4 px-md-5 py-lg-3 fw-semibold fs-15" type="submit">ENQUIRY NOW</button> 
        </div>
    </div><!--.//col--> 
</form><!--.//form-->