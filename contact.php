<?php
require_once('./header.php');
?>
<style>
#contact{
    margin-top:180px;
}
.cheight{
        height: 100px;
    }
    .cinfo{
        color :white;
        font-size:1.5rem;
    }
    .cinfo a{
        color:#e0a965;
    }
 @media only screen and (max-width: 375px) {
        #cheight1{
            margin-bottom: 60px;
    }
    .cinfo{
        color :white;
        font-size:1.5rem;
    }
    .cinfo a{
        color:#e0a965;
    }
    #cont{
        margin-top: -60px;
    }
}
</style>
<section class="inner-banner">
    <div class="container" style=" margin-top:180px;">
        <h2 class="inner-banner__title">Contact Us</h2><!-- /.inner-banner__title -->
        <ul class="list-unstyled thm-breadcrumb">
            <li><a href="index-2.php">Home</a></li>
            <li>Get In Touch</li>
        </ul><!-- /.thm-breadcrumb -->
    </div><!-- /.container -->
</section><!-- /.inner-banner -->
<?php
require_once('./mobile-nav.php')
?>
<section class="contact-one">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <form action="" class="contact-one__form contact-form-validated">
                    <div class="block-title text-left">
                        <h6 >Send us a Message</h6><!-- /.block-title__title -->
                        <p class="block-title__text-two">Our offices are located in 4 districts (ERODE,TIRUPPUR, THEENI & NILGIRIs)</p>
                        <!-- /.block-title__text-one -->
                    </div><!-- /.block-title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="case-form-one__field">
                                <input type="text" name="name" placeholder="Your Name">
                            </div><!-- /.case-form-one__field -->
                        </div><!-- /.col-md-6 col-sm-12 -->
                        <div class="col-sm-12">
                            <div class="case-form-one__field">
                                <input type="text" name="email" placeholder="Email">
                            </div><!-- /.case-form-one__field -->
                        </div><!-- /.col-md-6 col-sm-12 -->
                        <div class="col-sm-12">
                            <div class="case-form-one__field">
                                <input type="text" name="subject" placeholder="Subject">
                            </div><!-- /.case-form-one__field -->
                        </div><!-- /.col-md-6 col-sm-12 -->
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="case-form-one__field">
                                <textarea name="message" placeholder="Message"></textarea>
                            </div><!-- /.case-form-one__field -->
                        </div><!-- /.col-md-6 col-sm-12 -->
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="case-form-one__field text-left mb-0">
                                <button type="submit" class="thm-btn case-form-one__btn">Send Message <i class="fa fa-long-arrow-alt-right"></i></button>
                            </div><!-- /.case-form-one__field -->
                        </div><!-- /.col-md-6 col-sm-12 -->
                    </div><!-- /.row -->
                </form><!-- /.contact-one__form -->
            </div><!-- /.col-lg-7 -->

            <div class="col-lg-3">
                <div class="contact-one__info">
                    <div class="block-title text-left">
                        <h3 class="block-title__title">Our Office Location</h3><!-- /.block-title__title --><br>
                        <h4 style="font-weight:bolder;color:black;"><u>Main Office - ERODE</u>
                        </h4><!-- /.block-title__text-one --><h5 style="font-weight:bold;">Contact</h5>
                        <a href="tel:9842722778"><i class="fas fa-phone-alt" > </i> <span style="color:black;font-weight:bold;"> +91 9842722778 </span></a><br>
                        <a href="tel:9361963354"><i class="fas fa-phone-alt"> </i>  <span style="color:black;font-weight:bold;"> +91 9361963354</a > </span><br>
                        <a href="tel:04244270772"><i class="fas fa-tty" id="phone"> </i> <span style="color:black;font-weight:bold;"> &nbsp;  04244270772</span> </a><br>
                        <a href="mailto:admin@cgkindia.legal"><i class="fas fa-envelope" id="email"></i> <span> admin@cgkindia.legal </span></a>

                    </div><!-- /.block-title -->
                    <div class="contact-one__info-single">
                        <h3 class="contact-one__info-title">TIRUPPUR-Address</h3><!-- /.contact-one__info-title -->
                        <p class="contact-one__info-text">Kosumadi Kadu,478, Chetti Kuttai Village,<br>Valayapalayam,Kunnathur,<br>Tirupur District – 638103,Tamilnadu.</p><!-- /.contact-one__info-text -->
                    </div><!-- /.contact-one__info-single -->
                  
                </div><!-- /.contact-one__info -->
            </div><!-- /.col-lg-5 -->
            <div class="col-lg-3">
                <div class="contact-one__info">
                <div class="contact-one__info-single">
                        <h3 class="contact-one__info-title"><i id="icon" style="color:brown;" class="fas fa-map-marker-alt" > </i>  <a href="https://goo.gl/maps/djgR6gyCn99joux88" target="_blank">
 Erode-Address</a> </h3><!-- /.contact-one__info-title -->
                        <!-- <a href="https://goo.gl/maps/gaY7gBgW3CU8LBuQA" target="_blank"> -->
                        <p class="contact-one__info-text">Chinnu Rathinam Complex,54A/10,<br>Annamalai Layout,Nalli Hospital Road,<br>Erode District-638011,Tamilnadu.</p><!-- /.contact-one__info-text -->
                        <!-- </a> -->
                    </div><!-- /.contact-one__info-single -->
                    <div class="contact-one__info-single">
                        <h3 class="contact-one__info-title">NILGIRIS-Address</h3><!-- /.contact-one__info-title -->
                        <p class="contact-one__info-text">5/19A5 Marapalam,Puliyampara(Po),<br>Gudalur Tk,<br>Nilgiri District-643212,Tamilnadu.</p><!-- /.contact-one__info-text -->
                    </div><!-- /.contact-one__info-single -->
                </div><!-- /.contact-one__info -->
            </div><!-- /.col-lg-5 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.contact-one -->

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d977.9570083351585!2d77.71590002918003!3d11.347268199495964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba96f30cafd9df5%3A0x55f0ab59286b3973!2s54B%2C%20Nalli%20Hospital%20Rd%2C%20Municipal%20Colony%2C%20Veerappanchatram%2C%20Santhakadu%2C%20Erode%2C%20Tamil%20Nadu%20638009!5e0!3m2!1sen!2sin!4v1638336666124!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
<section class="cta-one my-1 cheight" >
    <div class="container text-center" id="cont">
        <h3 class="cta-one__title">Need a Legal Solutions<br> Get an Appointment From our <br>CGK INDIA LAW FIRM </h3><!-- /.cta-one__title -->
        <p class="cta-one__phone">
            <i class="fa fa-phone-alt"></i>
            Call us for a quick help!
            <a href="tel:04244270772">0424-4270772</a>
        </p><!-- /.cta-one__phone -->
        <p class="cinfo"> Mail :   <a href="mailto:admin@cgkindia.legal">admin@cgkindia.legal</a> </p>
           <p class="cinfo"> Contact Us : <a href="tel:9842722778">+91 9842722778</a> </p>
      
    </div><!-- /.container -->
</section><!-- /.cta-one -->
<?php
require_once('./footer.php');
?>