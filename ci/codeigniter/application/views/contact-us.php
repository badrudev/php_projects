<section class="second-box">
        <div class="second-banner-box">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 fifth-content-box">
                        <div class="second-content-box">
                            <div class="first-heading-box">
                                <h3 class="second-heading-01">
                                    Contact Us
                                </h3>
                                <!-- <h1 class="second-heading-02">
                                    Highly advanced Z Level security features
                                </h1> -->
                            </div>
                            <form method="post" action="<?php echo base_url();?>contactForm" id="validation">
                                <div class="form-item" id="name-input">
                                    <input type="text" id="name" name="name" placeholder="Name*">
                                </div>
                                <div class="form-item" id="mobile-input">
                                    <input type="text" id="mobilenumber" name="mobilenumber"
                                        placeholder="Mobile Number*">
                                </div>
                                <div class="form-item" id="email-input">
                                    <input type="email" id="email" name="email" placeholder="Email*">
                                </div>
                                <div class="form-item">
                                    <textarea name="message" id="message" cols="20" rows="5"
                                        placeholder="Message"></textarea>
                                </div>
                                <div class="form-item">
                                    <!-- <button type="submit" class="btn btn-submit" data-bs-toggle="modal"
                                        data-bs-target="#myModal">
                                        Submit</button> -->
										<button type="submit" class="btn btn-submit">
                                        Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="second-image-box">
                            <img src="<?php echo base_url();?>assets/img/about-us-phone-image.png" alt="image"
                                class="second-phone-image-02">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="third-box">
            <div class="third-banner-box">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="first-01-div">
                                <div class="third-icon-image">
                                    <span>
                                        <i aria-hidden="true" class="fas fa-cloud-download-alt"></i>
                                    </span>
                                </div>
                                <div class="third-icon-content">
                                    Download the App
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="first-02-div">
                                <div class="third-icon-image">
                                    <span>
                                        <i aria-hidden="true" class="far fa-id-badge"></i>
                                    </span>
                                </div>
                                <div class="third-icon-content">
                                    Create Your Profile
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="first-03-div">
                                <div class="third-icon-image">
                                    <span>
                                        <i aria-hidden="true" class="fas fa-lock"></i>
                                    </span>
                                </div>
                                <div class="third-icon-content">
                                    Great, You are Safe Now
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- The Modal -->
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <button type="button" class="btn-close closed-btn" data-bs-dismiss="modal"></button>
                    <!-- Modal body -->
                    <div class="modal-body msg-content">
                        <h1 class="msg-content-heading-01">
                            Thank You !
                        </h1>
                        <h2 class="msg-content-heading-02">
                            Your form has been submitted.
                        </h2>
                    </div>
                </div>
            </div>
    </section>
