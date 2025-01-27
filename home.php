<style>
@import url('https://fonts.googleapis.com/css2?family=DSEG7+Classic:wght@700&display=swap');

    .countdown {
        text-align: center;
        padding: 5%;
    }

    #timer {
        display: flex;
        justify-content: space-evenly;
        margin-top: 5%;
        gap: 10px; /* Control the spacing between the countdown units */
    }

    #timer div {
        font-size: 2rem;
        text-align: center;
        color: white; /* White text color for the labels */
        font-family: 'DSEG7 Classic', sans-serif; /* Use the digital clock font */
    }

    #timer span {
        display: block;
        font-size: 3rem; /* Larger font size for the numbers */
        font-weight: bold;
        color: #ffffff; /* White font for the countdown */
        font-family: 'DSEG7 Classic', sans-serif; /* Digital clock font */
        background-color: #151515; /* Dark background for the countdown boxes */
        padding: 15px 20px; /* Add padding inside the boxes */
        border-radius: 10px; /* Rounded corners for a modern digital look */
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.5); /* Optional shadow for depth */
    }

    @font-face {
    font-family: 'jumper';
    src: url('fonts/jumper.ttf') format('truetype');
    }

    .jumper {
        font-family: 'jumper', sans-serif;
    }
    

  @media (max-width: 600px) {
    #typewriter {
      font-size: 3em; /* Adjust the size for h2 equivalent */
    }
    
    #typewriter::before {
      display: block;
    }


  }

</style>
<section id="poly-container" class="hero_section">
    <div id="poly-output"></div>
        <div class="poly_content">
            
            <div class="container">
                <div class="display-table">
                    <div class="table-cell">
                        <div class="row">
                            &nbsp;<div class="hero_moc hidden-sm hidden-xs"></div><!-- /.hero_moc -->
                                <div class="col-md-8">
                                    <div class="hero_content">
                                        <br>

                                        <h1 id="typewriter" style="color: #ffffff;"></h1>

                                        
                                                <!-- Fullscreen homepage -->

                                            <div id="timer">
                                                <div hidden><span id="months"></span></div>
                                                <div><span id="days"></span></div>
                                                <div><span id="hours"></span> </div>
                                                <div><span id="minutes"></span> </div>
                                                <div><span id="seconds"></span> </div>
                                            </div>
                                            <br><br><br>
                                        <div class="col-md-12" style="text-align: center;">
                                            <a href="#poly-container2" style="border-radius: 10px;" class="app_btn marge">Subscribe now</a>
                                        </div>
                    
                                    </div>
                                    
                                </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section><!-- /.hero_section -->

<style>
    /* Styling the icon container */
    .icon-container {
        display: inline-block;
        width: 100px;
        height: 100px;
        background: radial-gradient(circle at center, #022c5c 0%, #7b797a 100%);
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        /* Optional: Adding a little padding or margin */
        margin: 0 auto;
        padding: 10px;
    }

    /* Styling the actual icon (using Font Awesome or custom image) */
    .icon-container i {
        font-size: 40px;
        color: white;
        /* Ensuring the icon remains centered */
        display: block;
    }

    /* Example if using an img instead of a font icon */
    .icon-container img {
        width: 120%;
        height: 50px;
        /* Center the image */
        display: block;
    }
    .font-size-faq{
        font-size: 20px;
    }

</style>

<section id="features" class="feature_section padding">
            <div class="container">
               <div class="section-heading align-center mb-40">
                   <h2 style="color: #000000 !important;">FAQ's</h2>
                   <p class="font-size-faq">Frequenty Asked Questions</p>
               </div>
               <div class="feature_wrap">
                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="800ms">
                        <img src="img/icons/onehomephone.png" alt="Service" class="feature_moc" width="60%">
                    </div>
                    <div class="col-md-8">
                        <div class=" col-xs-6">
                            <ul class="feature_list text-right xs-no-padding" style="text-align: center !important;">
                                <li class="list_item mb-40 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="800ms" >
                                    <i class="icon-mobile"></i>
                                        <h4 class="mb-10">What services does One Home Solutions offer?</h4>
                                        <p class="font-size-faq">We provide a wide range of property management services, including maintenance, repairs, and renovation.</p>
                                </li>
                                <li class="list_item mb-40 wow fadeInRight" data-wow-delay="200ms" data-wow-duration="800ms">
                                    <i class="icon-phone mb-10"></i>
                                    <h4 class="mb-10">How do I book a service provider?</h4>
                                    <p class="font-size-faq">Simply use our app to connect with accredited service providers and schedule a service.</p>
                                </li>
                                <li class="list_item wow fadeInRight" data-wow-delay="400ms" data-wow-duration="800ms">
                                    <i class="icon-map"></i>
                                    <h4 class="mb-10">Is One Home Solutions available across the Philippines?</h4>
                                    <p class="font-size-faq">Yes, we serve property owners nationwide.</p>
                                </li>
                            </ul>
                        </div>
                        <div class=" col-xs-6">
                            <ul class="feature_list xs-no-padding" style="text-align: center;">
                                <li class="list_item mb-40 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="800ms">
                                    <i class="icon-container"><img src="img/icons/service-white.svg" alt="Service" class="feature_moc" style="width: 160% !important;"></i>
                                    <h4 class="mb-10">Are your service providers accredited?</h4>
                                    <p class="font-size-faq">Yes, all service providers on our platform are carefully vetted and accredited.</p>
                                </li>
                                <li class="list_item mb-40 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="800ms">
                                <i class="icon-container"><img src="img/icons/multiple.svg" alt="Service" class="feature_moc" style="width: 140% !important;"></i>
                                    <h4 class="mb-10">Can I manage multiple properties with One Home Solutions?</h4>
                                    <p class="font-size-faq">Yes, our platform supports the management of multiple properties.</p>
                                </li>
                                <li class="list_item wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="800ms">
                                <i class="icon-container"><img src="img/icons/question-mark.svg" alt="Service" class="feature_moc" ></i>
                                    <h4 class="mb-10">What makes One Home Solutions different from other platforms?</h4>
                                    <p class="font-size-faq">We focus on innovation, quality, and a seamless user experience, making property management stress-free.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- feature-section -->


      
<section id="testimonial" class="testimonial_section" style=" background-image: url(images/backpaintdark.jpg); ">
    <div class="container">
        <div>
            
        <h4 class="glassmorphism" style="color: #ffffff; text-align: center; font-style: normal !important; font-weight: normal !important; text-transform: none; line-height: 1.5;
            letter-spacing: 2 !important; word-spacing: 2 !important;  box-shadow: 0px 16px 32px rgba(0, 0, 0, 5);">
                Abous Us:<br><br>
                One home solutions is a property concierge in the
                Philippines. Designed to simplify the complexities of
                property management, we connect property owners
                with a wide network of accredited service providers
                and suppliers. Whether it's routine maintenance,
                renovation, or specialized services, our platform
                offers seamless access to trusted professionals.<br><br>

                With a focus on innovation and quality, One Home
                Solutions is committed to setting new industry
                standards, making property management more
                efficient and stress-free. Our goal is to create a
                reliable and easy-to-use platform that helps property
                owners and take care of their investments with 
                confidence. Whether you're managing a single home 
                or multiple properties, One Home Solutions is here to<br>
                provide the support you need.
            </h4>

        </div>
    </div>
</section><!-- /.testimonial_section -->
        
<section style="background-color: #7b797a !important;" ><br>
    <div class="container" >
        <div style="width:100%; max-width:500px; margin:auto; ">
            <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/reel/C_cchTFRXHi/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style="border-radius: 20px !important; background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/reel/C_cchTFRXHi/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> 
                <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g>
                    <path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631">                       
                    </path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/reel/C_cchTFRXHi/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by OHS (@onehomeph)</a></p></div></blockquote>
                    <script async src="//www.instagram.com/embed.js"></script>
        </div>
    </div>
</section>


        
<style>
    .form-container {
        background: rgba(255, 255, 255, 0.1);
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.18);
        width: 100%;
        max-width: 500px;
    }

    form {
        display: flex;
        flex-direction: column;
    }


    label {
        color: #fff;
        margin-bottom: 10px;
    }



    button {
        padding: 10px;
        border: none;
        border-radius: 5px;
        background-color: #8e2de2;
        color: #fff;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button:hover {
        background-color: #4a00e0;
    }
    h5, h6{
        color: #fff;
    }
    
    .pricing_table {
        box-shadow: 0px 16px 32px rgba(0, 0, 0, 5);
    }

    .no-margin {
        font-size: 125% !important;
        color: #fff;
    }
    #poly-container{
        height: 800px; /* Increase as needed */
    }

    #poly-container2 {
        height: 700px; /* Increase as needed */
    }

    .pricing_head {
        color: #fff !important;
        
    }

    .register{
        color: #fff !important;

    }

    .register h4{
        color: #fff !important;
        text-align: center;
    }

    .register .pricing_table{
        color: #fff !important;
        text-align: center;
        border-radius: 20px !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
    }

    .register:hover {
        transform: scale(1.1); /* Zoom in on hover */
        transition: all 0.5s ease;
        color: #fff;
        cursor: pointer;
    }

</style>

<section id="poly-container2" class="hero_section">
    <div id="poly-output2"></div>
        <div class="poly_content">
            
            <div class="container">
                <div class="heading align-center mb-40"><br><br><br><br><br>
                    <h2 class="register">Join Us and Get Started</h2>
                    <p class="register">Connecting Homes, Fixing Lives.</p>
                </div><br><br>

                <div class="pricing_items" style="text-align: center;">
    <!-- First Choices -->
                    <div id="firstChoices" class="pricing_items" style="text-align: center;">
                        <!-- Subscriber pricing box -->
                        <span id="openModalBtn2">
                            <div class="col-md-3 col-xs-6 sm-padding register" style="display: inline-block; float: none;">
                                <div class="pricing_table mid_table wow flipInY" data-wow-delay="200ms" data-wow-duration="1000ms">
                                    <div>
                                        <br><br><br>
                                        <h4>Subscriber</h4>
                                        <br><br>
                                    </div>
                                </div>
                            </div><!-- pricing 2 -->
                        </span>
                        <!-- Service Provider pricing box -->
                        <div id="serviceProviderBtn" class="col-md-3 col-xs-6 sm-padding register" style="display: inline-block; float: none;">
                            <div class="pricing_table mid_table wow flipInY" data-wow-delay="400ms" data-wow-duration="1000ms">
                                <div>
                                    <br><br><br>
                                    <h4>Service Provider</h4>
                                    <br><br>
                                </div>
                            </div>
                        </div><!-- pricing 3 -->
                    </div>

                    <!-- Second Choices (with Independent and Company options) -->
                    <div id="secondChoices" class="pricing_items" style="text-align: center; display: none;">
                        <!-- Independent Service Provider pricing box -->
                        <span id="openModalBtn">
                            <div class="col-md-3 col-xs-6 sm-padding register" style="display: inline-block; float: none;">
                                <div class="pricing_table mid_table wow flipInY" data-wow-delay="200ms" data-wow-duration="1000ms">
                                    <div>
                                        <br><br><br>
                                        <h4>Independent Service Provider</h4>
                                        <br><br>
                                    </div>
                                </div>
                            </div><!-- pricing 2 -->
                        </span>

                        <!-- Service Provider (Company) pricing box -->
                        <div id="openCompanyProvider" class="col-md-3 col-xs-6 sm-padding register" style="display: inline-block; float: none;">
                            <div class="pricing_table mid_table wow flipInY" data-wow-delay="400ms" data-wow-duration="1000ms">
                                <div>
                                    <br><br><br>
                                    <h4>Service Provider (Company)</h4>
                                    <br><br>
                                </div>
                            </div>
                        </div><!-- pricing 3 -->
                        
                        <!-- Go Back button -->
                        <div style="margin-top: 20px;">
                            <button id="goBackBtn" class="app_btn">Go Back</button>
                        </div>
                    </div>
                </div>

            </div>

            </div>


    </div>
</section><!-- /.hero_section -->

<?php 
    include 'modal-form.php';
    include 'modal-form2.php';
?>
<script>
    // Elements for initial and transformed displays
    var firstChoices = document.getElementById("firstChoices");
    var secondChoices = document.getElementById("secondChoices");

    // Service Provider button from initial choices
    var serviceProviderBtn = document.getElementById("serviceProviderBtn");

    // Go Back button
    var goBackBtn = document.getElementById("goBackBtn");

    // Show the second choices (Independent/Company) when Service Provider is selected
    serviceProviderBtn.onclick = function() {
        firstChoices.style.display = "none";  // Hide the initial choices
        secondChoices.style.display = "block";  // Show the transformed choices
    };

    // Go back to the first choices when "Go Back" is clicked
    goBackBtn.onclick = function() {
        secondChoices.style.display = "none";  // Hide the second choices
        firstChoices.style.display = "block";  // Show the initial choices
    };
</script>


<script>
    document.getElementById('myForms').addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent form submission
        grecaptcha.ready(function() {
            grecaptcha.execute('6LfaaVkqAAAAAOwKZTEsCxP8Lx6S6D9rPGLuwmPH', {action: 'submit'}).then(function(token) {
                // Set the token in the hidden input field
                document.getElementById('recaptchaResponse').value = token;
                
                // Now submit the form after reCAPTCHA is added
                document.getElementById('myForms').submit();
            });
        });
    });

</script>
<script src="<?php echo WEB_ROOT; ?>js/ph-address-selector.js"></script>
<script>

    document.addEventListener("DOMContentLoaded", function () {
    const text = "We're creating something beyond ordinary.<br><br>The next BIG thing is almost here, are you ready?";
    let index = 0;
    const speed = 50; // typing speed in milliseconds

    function typeWriter() {
        // Check if it's a <br> tag
        if (text.substring(index, index + 4) === "<br>") {
        document.getElementById("typewriter").innerHTML += "<br>";
        index += 4; // skip over the <br> tag
        } else {
        document.getElementById("typewriter").innerHTML += text.charAt(index);
        index++;
        }
        
        if (index < text.length) {
        setTimeout(typeWriter, speed);
        }
    }

    typeWriter();
    });

</script>