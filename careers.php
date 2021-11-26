<?php
require_once('./header.php');
?>
<style>
    #services6{
        margin-top: 180px;
        /* margin-bottom: 150px; */
    }
   .cheight{
        height: 80px;
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
    @media only screen and  (max-width: 575px) {
    #services6{
    margin-top: 150px;    
    }
    </style>
<section class="inner-banner" id="services6">
    <div class="container">
        <h2 class="inner-banner__title">Careers</h2><!-- /.inner-banner__title -->
        <ul class="list-unstyled thm-breadcrumb">
            <li><a href="index-2.php">Home</a></li>
            <li>Careers</li>
        </ul><!-- /.thm-breadcrumb -->
    </div><!-- /.container -->
</section><!-- /.inner-banner -->
<?php
require_once('./mobile-nav.php')
?>
<section class="contact-one">
    <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" style="font-weight: bolder;color:black;" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Careers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="font-weight: bolder;color:black;" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Internship</a>
            </li>
        </ul>
        <div class="tab-content pt-5" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="" class="contact-one__form contact-form-validated">
                            <div class="block-title text-left">
                                <h3 class="block-title__title" style="text-align: center;">Work with Us</h3><!-- /.block-title__title -->
                            </div><!-- /.block-title -->
                            <div class="accrodion-grp" data-grp-name="faq-one__accrodion">
                                <div class="accrodion active">
                                    <div class="accrodion-title">
                                        <h3  style="color:black;font-weight:bold;">Current Available Jobs</h3>
                                    </div><br>
                                <h4 style="color:black;"> 1.DOCUMENT WRITER/ DEED WRITER </h4>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <ul><li style="color:black;font-weight:bold;list-style-type:none;"> Required skills:</li>
                                                <li style="list-style-type:none;">skill 1: Should know to do all types of documentation and document registration 
                                        		works such has: sale deed registration, MODT, etc..</li>    
                                        	<h5 style="color:black;font-weight:bold";>Salary-Negotiable</h5>
                                           
                                        </ul>
                                        </div>
                                    </div>
                                   <h4 style="color:black;">2. Office Typist </h4>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <ul>
                                            <li style="color:black;font-weight:bold;list-style-type:none;">Required skills:</li>
                                                <li style="list-style-type:none;"><span style="font-weight:bold;color:black;">1)</span> English and tamil typing.</li> 
												<li style="list-style-type:none;"> <span style="font-weight:bold;color:black;">2)</span>2 years experience in documentation field.</li><br>
                                            	<h5 style="color:black;font-weight:bold";>Salary</h5>
                                            	<li style="list-style-type:none;"> Those are having the first skill the salary will be from ₹6000 to ₹10000</li>
                                            	<li style="list-style-type:none;"> Those who are having both skills the salary is negotiable based on the interview</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form><!-- /.contact-one__form -->
                    </div><!-- /.col-lg-7 -->
                </div><!-- /.row -->
            </div>
            <div class="tab-pane fade " id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="" class="contact-one__form contact-form-validated">
                            <div class="block-title text-left">
                                <h3 class="block-title__title" style="text-align: center;">Internship</h3><!-- /.block-title__title -->
                            </div><!-- /.block-title -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="case-form-one__field">
                                        <input type="text" name="name" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="case-form-one__field">
                                        <input type="text" name="name" placeholder="Date of Birth">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="case-form-one__field">
                                        <input type="text" name="name" placeholder="Permanent Address">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="case-form-one__field">
                                        <input type="text" name="name" placeholder="Present Address">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="case-form-one__field">
                                        <input type="text" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="case-form-one__field">
                                        <input type="text" name="email" placeholder="Contact">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="case-form-one__field">
                                        <input type="text" name="subject" placeholder="No Of Internships">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="case-form-one__field">
                                        <input type="text" name="subject" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="case-form-one__field">
                                        <input type="text" name="subject" placeholder="Name of the firm(s) or advocate(s) with whom you have interned">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="">Preferred Internship Duration From</label>
                                    <div class="case-form-one__field">
                                        <input type="date" name="subject">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="">Preferred Internship Duration To</label>
                                    <div class="case-form-one__field">
                                        <input type="date" name="subject">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="case-form-one__field">
                                        <input type="text" name="subject" placeholder="Area of Interest">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="case-form-one__field">
                                        <input type="text" name="subject" placeholder="Law School/College/Institute">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="case-form-one__field">
                                        <input type="text" name="subject" placeholder="Year/Semester">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="case-form-one__field">
                                        <input type="text" name="subject" placeholder="Marks/Percentage obtained">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="case-form-one__field">
                                        <input type="file" name="subject" placeholder="Upload Your Resume">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="case-form-one__field text-left mb-0">
                                        <button type="submit" class="thm-btn case-form-one__btn">Send Message <i class="fa fa-long-arrow-alt-right"></i></button>
                                    </div>
                                </div>
                            </div><!-- /.row -->
                        </form><!-- /.contact-one__form -->
                    </div><!-- /.col-lg-7 -->
                </div><!-- /.row -->
            </div>
        </div>
    </div><!-- /.container -->
</section><!-- /.contact-one -->
<section class="cta-one my-1 cheight" >
    <div class="container text-center" id="cont">
        <h3 class="cta-one__title">Need an Advice from Expert Lawyers? <br> Get an Appointment Today!</h3><!-- /.cta-one__title -->
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