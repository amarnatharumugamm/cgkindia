<?php
require_once('./header.php');
?>

<style>
    #to {
        color: white;
        position: absolute;
        top: -340px;
        left: 30px;
        font-size:30px;
    }
    .cinfo{
        color :white;
        font-size:1.5rem;
    }
    .cinfo a{
        color:#e0a965;
    }
    #twenty {
        color: white;
        position: absolute;
        top: -600px;
        left: 60px;
        font-size: 40px;
        font-weight: bold;

    }

    #exper {
        font-size: 40px;
        color: #B23427;
        font-weight: bold;
    }

    #office {
        font-size: 21px;
        position: absolute;
        top: -250px;


    }

    #companies {
        font-size:50px;
        position: absolute;
        top: -160px;

    }
    #mobilecom{
        font-size:15px;
        position: absolute;
        top: -30px;
        display:none;
    }

    @media only screen and (min-width:768px) and (max-width: 1022px) {
        #to {
            color: white;
            position: absolute;
            font-size: 20px;
            top: -90px;
        }

        #twenty {
            color: white;
            font-size: 25px;
            position: absolute;
            top: -100px;
            padding-left: 50px;

        }

        #exper {
            font-size: 15px;
            color: #B23427;
            font-weight: bold;
        }

        #office {
            font-size: 10px;
            position: absolute;
            top: -50px;


        }

        #companies {
            font-size: 15px;
            position: absolute;
            top: 10px;

        }
        #mobilecom {
            font-size: 13px;
            position: absolute;
            top: 10px;

        }
        
    }


    @media only screen and (max-width: 600px) {
        
        #to {
            color: white;
            position: absolute;
            top: -15px;
            font-size: 8px;
            left:16px;
        }

        #twenty {
            color: white;
            position: absolute;
            font-size: 13px;
            top: -50px;
            left:20px;

        }

        #exper {
            font-size: 9px;
            color: #B23427;
            font-weight: bold;
        }

        #office {
            font-size: 6px;
            position: absolute;
            top: 0px;
        }

        #companies {
            font-size: 10px;
            position: absolute;
            left:20px;
            top: 15px;

        }
        #mobilecom{
        font-size:10px;
        position: absolute;
        top: 33px;
        left:30px;
        display:block;
    }
        #mobilehide{
        
        display:none;
    }
    .markage{
        margin-left:22px;
    }
    .Registrations{
        margin-left:22px;
    }
    .cancel{
        margin-left:22px;
    }
    .reg{
        margin-left:22px;
    }
    .deed{
        margin-left:22px;
    }

    }
    @media only screen and (min-width: 1024px){
        
        #twenty{
            margin-top: 200px;
        }
        #to{
            margin-top: 60px;
        }
        #office{
            margin-top: 60px;
            font-size:20px;
        }
        #companies{
            margin-top: 60px;
            font-size:25px;
        }
        
    }
   @media only screen and (max-width: 1270px){
        #carouselExampleControls{
            margin-top: 23%;
        }
    }
</style>
<div id="carouselExampleControls" class="carousel slide slides" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="assets/images/slider/slider-1.jpg" alt="First slide">
            <div class="carousel-caption d-block ">
                <h5 id="twenty" class="wow animate__fadeInDown">CGK INDIA LAW FIRM <br> <span id="exper"> ESTABLISHED Since 1997 </span></h5>
                <!-- <h5 id="twenty" class="wow animate__fadeInDown">25 Years of <br> <span id="exper"> Experience </span></h5> -->
                <h5 id="to" class="wow animate__fadeInUp">To Avoid Police station & Court...Meet Us</h5>
                <h5 id="office" class="wow animate__fadeInUp">CGK India Law Firm located at Erode | Tiruppur | Nilgiris | Coimbatore <br> With Services Across All Over India</h5>
                <p id="companies" class="wow animate__fadeInUp">We have <span style="font-weight: bold; color:#B23427"> 48 Empannelments </span><span id="mobilehide"> in Banking & Companies.</span></p>
<p id="mobilecom">in Banking and Companies</p>
            </div>
        </div>
    
        <div class="carousel-item mt-3">
            <img class="d-block w-100"  src="assets/images/slider/slider-2.jpg"  alt="First slide">
            <div class="carousel-caption d-block">
                <h5 id="twenty" class="wow pulse"> CGK INDIA LAW FIRM <br> <span id="exper"> ESTABLISHED Since 1997 </span></h5>
                <h5 id="to" class="wow pulse">To Avoid Police station & Court...Meet Us</h5>
                <h5 id="office" class="wow pulse">CGK India Law Firm located at Erode | Tiruppur | Nilgiris | Coimbatore <br>  With Services Across All Over India</h5>
                <p id="companies" class="wow pulse">We have <span style="font-weight: bold; color:#B23427"> 48 Empannelments </span><span id="mobilehide"> in Banking & Companies.</span></p>
                <p id="mobilecom">in Banking and Companies</p>
            </div>
            </div>
         </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- carousal  end -->

<?php
require_once('./mobile-nav.php')
?>
<section class="case-two">
    <div class="container">
        <div class="case-two__top">
            <div class="block-title">
                <h3 class="block-title__title"><a href="practice.php" style="color:white">Practice Focusing in </a></h3><!-- /.block-title__title -->
            </div><!-- /.block-title -->
        </div><!-- /.case-two__top -->
        <div class="container pb-5" id="boox" style="margin-top: 30px; ">
            <div class="row" style="text-align: center;color:white;">
            <div class="col-lg-3"> <img src="./assets/images/icons/piggy-bank.png" style="width: 30px;">
                    <div id="txt" class="wow pulse">BANKING and NBFC<br>(Non-Banking Financial Company)</div>
                </div>
                <div class="col-lg-6"><img src="./assets/images/icons/motorbike.png" style="width: 30px;">
                    <div id="txt" class="wow pulse">MOTORCYCLE ACCIDENT TRIBUNAL CASES</div>
                </div>  <div class="col-lg-3">

<img src="./assets/images/icons/house.png" style="width: 30px;">
<div id="txt" class="wow pulse"> REAL-ESTATE COMPANIES </div>

</div>
             
               
            </div>
            <div class="row pt-5 pb-5" style="text-align: center;color:white;">

                <div class="col-lg-3"> <img src="./assets/images/icons/deed.png" style="width: 30px;">
                    <div id="txt" class="wow pulse"> DEED REGISTRATIONS </div>
                </div>
                <div class="col-lg-3"> <img src="./assets/images/icons/document.png" style="width: 30px;">
                    <div id="txt" class="wow pulse">DOCUMENTATION </div>
                </div>
<div class="col-lg-3">
<img src="./assets/images/icons/factory.png" style="width: 30px;">
<div id="txt" class="wow pulse"> INDUSTRIES </div>
</div>
              
                <div class="col-lg-3">
                    <img src="./assets/images/icons/balance.png" style="width: 40px;">
                    <div id="txt" class="wow pulse">
                        LEGAL OPINION</div>
                </div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.case-two -->



<div class="container mt-3">
    <div class="d-sm-flex">
        <div class="p-2">
            <div>
                <div>
                    <div>
                        <div>
                            <div class="elementor-widget-container">
                                <div class="ekit-wid-con">
                                    <div style="text-align: left;">
                                        <span style="margin-top: 100px;color: #B23427;
    font-size: 18px;
    font-weight: bold;
    text-transform: uppercase;
    line-height: 22px;
    letter-spacing: 0.54px;
    margin: 0px 0px 15px 0px;padding-top:10px;">
                                            about
                                            CGK INDIA LAW FIRM
                                        </span>
                                        <!-- <h2 style="margin: 0px 10px 10px 0px;
    font-size: 40px;
    line-height: 38px;
    font-weight:bold;color:#252525;padding-top:10px;">
                                            Those who want to avoid police station and Court meet us
                                        </h2> -->
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="elementor-element elementor-element-e88fce5 elementor-widget elementor-widget-elementskit-heading" data-id="e88fce5" data-element_type="widget" data-settings="{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}" data-widget_type="elementskit-heading.default">
                            <div class="elementor-widget-container">
                                <div class="ekit-wid-con">
                                    <div class="elementskit-section-title-wraper text_left   ekit_heading_tablet-   ekit_heading_mobile-">
                                        <h2 class="elementskit-section-title ">

                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-9d72606 elementor-widget elementor-widget-elementskit-drop-caps" data-id="9d72606" data-element_type="widget" data-settings="{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}" data-widget_type="elementskit-drop-caps.default">
                            <div class="elementor-widget-container">
                                <div class="ekit-wid-con">
                                    <div class="ekit-dropcap-wraper">
                                        <p style="color: black;
    font-family: Rubik, Sans-serif; font-size: 18px; font-weight: 400; ">The <b> FOUNDER</b> of <b style="font-size:15px;">CGK INDIA LAW FIRM</b> is Mister <b>C.GOPALAKRISHNAN</b>,
                                            the practicing
                                           as an advocate in all over India, he is a <b>Notary Public
                                            Government of India</b>.
                                            He is also a state Board member of Tamilnadu for
                                            International Human Rights
                                            Commission (IHRC) which is located in Geneva,
                                            Switzerland. This Firm is
                                            Established in the year of 1997. </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-071f0cd elementor-widget elementor-widget-elementskit-heading" data-id="071f0cd" data-element_type="widget" data-settings="{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}" data-widget_type="elementskit-heading.default">
                            <div class="elementor-widget-container">
                                <div class="ekit-wid-con" style="margin-top:20px;">
                                    <div style="    color: black;
    font-size: 18px;
    line-height: 26px;
    letter-spacing: -0.36px;
    margin: -5px 0px 15px 0px;">
                                        <p>The first achievement of this  <b>CGK INDIA LAW FIRM</b> was 
                                            on 1998 of getting an
                                            empanelment in SHRI RAM CHITS TAMILNADU PVT LTD. Our 2nd
                                            achievement is
                                            entered into the Banking sectors by the empanelment of
                                            CITY UNION BANK Erode
                                            main Branch in the year of 2000. These are our primary
                                            platforms that enables
                                            to succeeding empanelments in more than <b>33 banks</b>, non
                                            banking sectors and <b>14
                                            Companies (Including MNC companies).</b> </p>
                                    </div>
                                    <div style="    color: black;
    font-size: 18px;
    line-height: 26px;
    letter-spacing: -0.36px;
    margin: -5px 0px 15px 0px;">
                                        <p><b>Educational Qualification of the Founder:</b><br>
                                            <b>BA</b> – Bachelor of Arts in Corporate Secretaryship<br>
                                            <b>BL</b> – Bachelor Of Law<br>
                                            <b>D.L.L. & A.L.</b> – Diploma in Labour Law & Administrative
                                            Law<br>
                                            <b>M.C.S</b> – Masters in Corporate Secretaryship

                                        </p>
                                    </div>
                                    <div style="color: black;
    font-size: 18px;
    line-height: 26px;
    letter-spacing: -0.36px;
    margin: -5px 0px 15px 0px;">
                                        <p>Our CGK INDIA LAW FIRM <b>Chief Administrative Officer (CAO)</b> is Mister
                                            <b>G.RUBESHKUMAR</b> son
                                            of the Founder Mister C. Gopalakrishnan.
                                            Rubeshkumar has finished his<b > B.Com - Bachelor’s in Corporate
                                            Secretaryship 
                                            in Loyola College, Chennai.</b>
                                            He pursued his higher studies of Masters in <b>Advance Business Management (M.Sc ABM)</b>
                                            and Masters in <b>Finance in Auditing Management Accounting 
                                            & Information systems (M.Sc AMIS), in
                                            Skema Business School located at Paris, France.</b>
                                            This Skema business is one among the 50 Triple
                                            Accredited Business Schools in the world and it is
                                            in 6th World Ranking for Msc Finance. After finishing
                                            his studies <b>he worked as Financial Analyst 
                                            for one year in Paris, France. Now he is pursuing his
                                            L.L.B (Bachelor’s in Law) managing CGK INDIA LAW FIRM  since 2020.</b>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="elementor-element elementor-element-009684c elementor-icon-list--layout-inline elementor-align-left elementor-mobile-align-center elementor-tablet-align-center elementor-widget elementor-widget-icon-list" data-id="009684c" data-element_type="widget" data-settings="{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}" data-widget_type="icon-list.default">
                            <div class="elementor-widget-container">
                                <ul class="elementor-icon-list-items elementor-inline-items">
                                    <li class="elementor-icon-list-item">
                                        <span class="elementor-icon-list-icon">
                                            <i aria-hidden="true" class="fas fa-phone-alt" style="color:green"></i>
                                        </span>
                                        <span class="elementor-icon-list-text"><a href="tel:+919842722778">+91
                                                9842722778</a>
                                        </span>
                                    </li>
                                    <li class="elementor-icon-list-item">
                                        <span class="elementor-icon-list-icon">
                                            <i aria-hidden="true" class="fas fa-phone-alt" style="color:green"></i>
                                        </span>
                                        <span class="elementor-icon-list-text"><a href="tel:+919361963354">+91
                                                9361963354</a>
                                        </span>
                                    </li>
                                    <li class="elementor-icon-list-item">
                                        <span class="elementor-icon-list-icon">
                                            <i aria-hidden="true" class="fas fa-phone-alt" style="color:green"></i>
                                        </span>
                                        <span class="elementor-icon-list-text" ><a href="tel:0424-4270772">
                                                0424-4270772</a>
                                        </span>
                                    </li>
                                    <li class="elementor-icon-list-item">
                                        <span class="elementor-icon-list-icon">
                                            <i aria-hidden="true" class="far fa-envelope" style="color:brown"></i>
                                        </span>
                                      
                                        <span class="elementor-icon-list-text">  <a href="mailto:admin@cgkindia.legal">admin@cgkindia.legal </a></span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="p-2 col-lg-6 col-md-6">
            <section class="elementor-element elementor-element-e563b1b elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="e563b1b" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-element elementor-element-6168fb6 elementor-column elementor-col-100 elementor-inner-column" data-id="6168fb6" data-element_type="column">
                            <div class="elementor-column-wrap  elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-08bb88f elementor-widget elementor-widget-elementskit-heading" data-id="08bb88f" data-element_type="widget" data-settings="{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}" data-widget_type="elementskit-heading.default">
                                        <div class="elementor-widget-container">
                                            <div class="ekit-wid-con">
                                                <div>
                                                    <span style="color: #B23427;display:flex;justify-content:center;
    font-size: 18px;
    font-weight: bold;
    text-transform: uppercase;
    line-height: 22px;
    letter-spacing: 0.54px;
    margin: 0px 0px 6px 0px;
    text-align:center;">Our Expertise</span><br>
                                                    <a  style="display:flex;justify-content:center;color:#B79D5B;  font-weight: bold; line-height: 59px; text-decoration:none; outline:0px;color:#B79D5B;font-size: 42px;" href="mos.php">Modes
                                                        Of Services </a>
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <div style="line-height:35px;color:black;font-weight:bold;font-size:large;">
                <li> All Banking and Corporate Cases </li>
                <li>(LSR) Legal Scrutiny Report </li>
                <li>Legal Notice</li>
                <li> Money Suit Cases</li>
                <li> Real-estate properties services</li>
                <li>MCOP cases (Road accident <span class="deed">cases)</span></li>
<<<<<<< HEAD
                <li> DRT <span class="deed">Cases </span> (Debt  Recovery<span class="deed"> Tribunal)</span> </li>
=======
                <li> DRT <span class="deed">Cases </span> (Debt Tribunal <span class="deed"> Recovery)</span> </li>
>>>>>>> 9696b05f8c0575f926ad4b9b8dce840541afbdac
                <li> ITAT Cases (Income Tax <span class="deed">Appellate Tribunal)</span> </li>
                <li> EP Cases(Execution Petition)  </li>

                <li>Property Dispute Cases</li>
                <li> 138 NI Act (Negotiable Instrument <span class="deed">ACT)</span> </li>

                <li>Sole Arbitrator</li>



                <h4 style="text-align:center;color:#B23427;text-transform:capitalize;margin-top:10px;">
                    All types of Deed Registrations and Documentations  </h4>
                <div style="display:flex;" >
                    <div >
                        <li> Simple <span class="markage">mortgage</span> <span class="deed">Deed</span> <span class="ml-4">Registration &</span> <span class="deed">Cancellation</span> </li>
                        <li> MODT  Deed<br><span class="ml-4">Registration &</span> <span class="deed">Cancellation </span>  </li>
                        
                        <li>Sale Deed </li>
                        <li> Partnership <span class="deed">Deed</span> </li>
                        <li> Power of <span class="deed">Attorney</span> <span class="deed">Deed</span></li>
                        <li> Will Deed </li>
                    </div>
                     <div>
                             <li> Marriage Deed </li>
                             <li>Sale agreement <span class="Registrations">Deed</span></li>
                           <li> Settlement <span class="deed">Deed</span> </li>
                           <li>Exchange Deed</li>
                        <li> Rectification <span class="deed">Deed</span> </li> 
                            <li>Association <span class="deed">Deed</span></li>
                        <li> Trust Deed & <span class="deed">Agency</span> <span class="ml-4">Agreement,etc…</span></li> </div>  </div>
                        <br>
                        <div>
                        <h3 style="text-align:center;color:#B23427;">Revenue Records and Approvals</h3>
                        <li>Joint Patta</li>
                        <li>Individual Patta<br> <span class="ml-4">(Subdivision done by government <span class="deed"> survey
                            department)</span></span></li>
                        <li>Adangal</li>
                        <li>DTCP Approval<br> <span class="ml-4">(Director of town & country <span class="deed">Planning Approval)</span></span></li>
                        <li> Local Board approval for <span class="deed">construction</span></li>
                        <li>  Plan Layout done by the <span class="deed">government surveyor</span></li>
                        <li>  Land Layout Forming by <span class="deed">government surveyor</span> </li>
                        <li> Building Plan Approval<br>
                        <span class="ml-4"> A) House, B) Commercial,C) <span class="deed">Industies</span></span>
                        </li>
                        <li> Trademark Registration </li>
                        <li> ISO Certificate </li>
                    </div> 
            </div>

        </div>
    </div>


</div>







<section class="cta-one">
    <div class="container text-center">
    <h3 class="cta-one__title">Need a Legal Solutions<br> Get an Appointment From our<br> CGK INDIA LAW FIRM <br></h3><!-- /.cta-one__title -->
        <p class="cta-one__phone">
            <i class="fa fa-phone-alt"></i>
            Call us for a quick help!
            <a href="tel:04244270772">0424-4270772</a>
        </p><!-- /.cta-one__phone -->

        <p class="cinfo"> Mail : <a href="mailto:admin@cgkindia.legal">admin@cgkindia.legal</a> </p>
        <p class="cinfo"> Contact Us : <a href="tel:9842722778">+91 9842722778</a>  </p>
        <!-- <ul class="list-unstyled cta-one__contact">
            <li>
                <i class="fas fa-phone-alt"></i>
                <a href="tel:9842722778">9842722778</a>
            </li>
            <li>
                <i class="fas fa-phone-alt"></i>
                <a href="tel:9361963354">9361963354</a>
            </li>
        </ul> -->
        <!-- /.list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.cta-one -->
<section class="case-form-one">
    <div class="container">
        <div class="inner-container wow fadeInUp" data-wow-duration="1500ms">
            <div class="block-title text-center">
                <h3 class="block-title__title">Contact US</h3><!-- /.block-title__title -->
            </div><!-- /.block-title -->
            <form action="http://ashik.templatepath.net/cgk-html-files/assets/inc/sendemail.php" class="case-form-one__form contact-form-validated">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="case-form-one__field">
                            <input type="text" name="name" placeholder="Your Name">
                        </div><!-- /.case-form-one__field -->
                    </div><!-- /.col-md-6 col-sm-12 -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="case-form-one__field">
                            <input type="text" name="email" placeholder="Email">
                        </div><!-- /.case-form-one__field -->
                    </div><!-- /.col-md-6 col-sm-12 -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="case-form-one__field">
                            <input type="text" name="phone" placeholder="Phone">
                        </div><!-- /.case-form-one__field -->
                    </div><!-- /.col-md-6 col-sm-12 -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="case-form-one__field">
                            <i class="far fa-calendar-alt"></i>
                            <input type="text" name="date" class="datepicker" placeholder="Select Day">
                        </div><!-- /.case-form-one__field -->
                    </div><!-- /.col-md-6 col-sm-12 -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="case-form-one__field">
                            <select class="selectpicker" name="time">
                                <option value="">Select Time</option>
                                <option value="8.00-9.00">8.00-9.00</option>
                                <option value="9.01-10.00">9.01-10.00</option>
                                <option value="10.01-11.00">10.01-11.00</option>
                                <option value="12.01-13.00">12.01-13.00</option>
                            </select>
                        </div><!-- /.case-form-one__field -->
                    </div><!-- /.col-md-6 col-sm-12 -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="case-form-one__field">
                            <select class="selectpicker" name="services">
                                <option value="">Service</option>
                                <option value="All Banking and Corporate Cases">All Banking and Corporate Cases</option>
                                <option value="Legal Scrutiny Report ">Legal Scrutiny Report </option>
                                <option value="Legal Notice">Legal Notice</option>
                                <option value="Money Suits Cases">Money Suits Cases</option>
                                <option value="Real-estate properties services">Real-estate properties services</option>
                                <option value="MCOP cases ">MCOP cases </option>
                                <option value="DRT Cases ">DRT Cases </option>
                                <option value="ITAT Cases">ITAT Cases</option>
                                <option value="EP Cases">EP Cases</option>
                                <option value="Property Dispute Cases">Property Dispute Cases</option>
                                <option value="138 NI Act">138 NI Act</option>
                                <option value="Sole Arbitrator">Sole Arbitrator</option>
                            </select>
                        </div><!-- /.case-form-one__field -->
                    </div><!-- /.col-md-6 col-sm-12 -->
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="case-form-one__field">
                            <textarea name="message" placeholder="Message"></textarea>
                        </div><!-- /.case-form-one__field -->
                    </div><!-- /.col-md-6 col-sm-12 -->
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="case-form-one__field text-center mb-0">
                            <button type="submit" class="thm-btn case-form-one__btn">book an appointment <i class="fa fa-long-arrow-alt-right"></i></button>
                        </div><!-- /.case-form-one__field -->
                    </div><!-- /.col-md-6 col-sm-12 -->
                </div><!-- /.row -->
            </form><!-- /.case-form-one__form -->
            <div class="result"></div><!-- /.result -->
        </div><!-- /.inner-container -->
    </div><!-- /.container -->
</section><!-- /.case-form-one -->
<section class="team-one">
    <div class="container">
        <div class="team-one__top">
            <div class="block-title">
                <h3 class="block-title__title"> <a  href="about.php">Expert Lawyers  </a></h3><!-- /.block-title__title -->
            </div><!-- /.block-title -->
            <div class="team-one__more-block">
                <a href="careers.php" class="thm-btn team-one__more-btn">Join our team <i class="fas fa-long-arrow-alt-right"></i></a>
            </div><!-- /.team-one__more-block -->
        </div><!-- /.team-one__top -->
        <div class="row no-gutters">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="team-one__single">
                    <div class="team-one__image">
                        <img src="https://ik.imagekit.io/efvdt4rto0b/team/team-1-_ixdM3khPj.png?updatedAt=1632116212518" alt="our experts" />
                    </div><!-- /.team-one__image -->
                    <div class="team-one__content">
                        <h3 class="team-one__name">C.Gopalakrishnan</h3><!-- /.team-one__name -->
                        <p class="team-one__designation">FOUNDER & CEO</p><!-- /.team-one__designation -->
                    </div><!-- /.team-one__content -->
                </div><!-- /.team-one__single -->
            </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="team-one__single">
                    <div class="team-one__image">
                        <img src="https://ik.imagekit.io/efvdt4rto0b/team/team-2-_iIaZawKukRU.png?updatedAt=1632116215291" alt="our experts" />
                    </div><!-- /.team-one__image -->
                    <div class="team-one__content">
                        <h3 class="team-one__name">G. Rubeshkumar</h3><!-- /.team-one__name -->
                        <p class="team-one__designation">CHIEF ADMINISTRATIVE OFFICER</p><!-- /.team-one__designation -->
                    </div><!-- /.team-one__content -->
                </div><!-- /.team-one__single -->
            </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="team-one__single">
                    <div class="team-one__image">
                        <img src="https://ik.imagekit.io/efvdt4rto0b/team/Ramani_ezMpKBz7d9.png?updatedAt=1632116210147" alt="our experts" height="405px" />
                    </div><!-- /.team-one__image -->
                    <div class="team-one__content">
                        <h3 class="team-one__name">Ramani</h3><!-- /.team-one__name -->
                        <p class="team-one__designation">SENIOR ADVOCATE</p><!-- /.team-one__designation -->
                    </div><!-- /.team-one__content -->
                </div><!-- /.team-one__single -->
            </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
            <div class="container">
                <h3 class="block-title__title" style="text-align: center;">OUR OFFICE</h3>
                <div class="row pt-5 mt-3" style="text-align: center;">
                    <div class="col-lg-3" style="background-color: white;">
                        <img src=" ./assets/images/favicon/location.svg" width="50px" alt="">
                        <h3 style="font-weight:bold">Erode</h3>
                    </div>
                   
                    <div class="col-lg-3" style="background-color: white;">
                        <img src=" ./assets/images/favicon/location.svg" width="50px" alt="">
                        <h3 style="font-weight:bold">Coimbatore</h3>
                    </div>
                    <div class="col-lg-3" style="background-color: white;">
                        <img src=" ./assets/images/favicon/location.svg" width="50px" alt="">
                        <h3 style="font-weight:bold">Nilgiris</h3>
                    </div>
                    <div class="col-lg-3" style="background-color: white;">
                        <img src=" ./assets/images/favicon/location.svg" width="50px" alt="">
                        <h3 style="font-weight:bold">Trippur</h3>
                    </div>
                </div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.team-one -->


<?php
require_once('./footer.php');
?>