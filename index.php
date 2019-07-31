<?php 
  include('./pages/top.php'); 
  include('database/database.php');
  ?>


    <!-- Section: intro -->
    <section id="intro" class="intro">
      <div class="intro-content">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
                <h2 class="h-ultra"><label data-tag="intro_title"/></h2>
              </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
                <h4 class="h-light"><label data-tag="intro_title2"/></h4>
              </div>

              <div class="well well-trans">
                <ul class="lead-list">
                    <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong><label data-tag="intro_label1"/></strong><br /><label data-tag="intro_label1_sub" style="font-weight: 100;" /></span></li>
                    <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong><label data-tag="intro_label2"/></strong><br /><label data-tag="intro_label2_sub" style="font-weight: 100;"/></span></li>
                    <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong><label data-tag="intro_label3"/></strong><br /><label data-tag="intro_label3_sub" style="font-weight: 100;"/></span></li>
                    <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong><label data-tag="intro_label4"/></strong><br /><label data-tag="intro_label4_sub" style="font-weight: 100;"/></span></li>
                  </ul>
              </div>

            </div>

            <div class="col-lg-6">
              <div class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                <img src="<?=$siteLink?>img/photo/building.png" class="img-responsive" style="position: relative;top:100px;" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- /Section: intro -->

    <!-- Section: boxes -->
    <section id="boxes" class="home-section paddingtop-80">

      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-md-4">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <div class="box text-center">

                <img src="<?=$siteLink?>img/photo/service_icon1.png" />
                <h4 class="h-bold" data-tag="service_title1">Oriental medicine</h4>
                <p data-tag="service_contents1">
                  &quot;It does not hurt when the blood circulates,<br/> and it hurts if it does not work&quot; which means that if the circulation of the blood is not good, you can get sick through feelings, climate, environment, internal problems and injuries. Oriental medicine treats the whole body rather than the part to find out the cause of the pain.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-md-4">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <div class="box text-center">

                <img src="<?=$siteLink?>img/photo/service_icon2.png" />
                <h4 class="h-bold" data-tag="service_title2">Chiropractic</h4>
                <p data-tag="service_contents2">
                  Chiropractic is a combination of &quot;Cairo&quot; meaning &quot;hand&quot; in Greek and &quot;fructose&quot; in the sense of healing. It makes the bones, joints, and muscles of the spine, including the twisted or curved spine in its original position. It is a natural healing medicine that treats spinal / joint-related diseases without drugs and surgery by making the nerve flow well between the nerves, brain and organs that support it.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-md-4">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <div class="box text-center">
                <img src="<?=$siteLink?>img/photo/service_icon3.png" />
                <h4 class="h-bold" data-tag="service_title3">Physio</h4>
                <p data-tag="service_contents3">
                  Systematic diagnosis of nerve, muscle and skeletal system disease or joint dysfunction releases muscular tension and rigid joints to restore limited range of joints with activation after accident, injury or surgery.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- /Section: boxes -->


    <section id="callaction" class="home-section paddingtop-120">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="callaction bg-gray">
              <div class="row">
                <div class="col-md-8">
                  <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <div class="cta-text">
                      <h3 data-tag="emergency_title"></h3>
                      <p data-tag="emergency_content"></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                    <div class="cta-btn">
                      <a href="tel:+64 21 686 354" class="btn btn-skin btn-lg">Call or text us 021 686 354</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Section: services -->
    <section id="service" class="home-section paddingtop-60">

      <div class="container">

        <div class="row">
          <div class="col-sm-4 col-md-4">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <img src="<?=$siteLink?>img/photo/acupuncture3.jpg" class="img-responsive" alt="" />
            </div>
          </div>
          <div class="col-sm-8 col-md-8">

            <div class="wow fadeInRight" data-wow-delay="0.1s">
              <div class="service-box">
                <div class="service-icon">
                  <img src="<?=$siteLink?>img/acc_logo.png" style="width:45px;" />
                </div>
                <div class="service-desc">
                  <h5 class="h-light" data-tag="acc_title1">ACC</h5>
                  <p data-tag="acc_contents1"></p>
                </div>
              </div>
            </div>
            
            <div class="wow fadeInRight" data-wow-delay="0.1s">
              <div class="service-box">
                <div class="service-icon">
                  <span class="fa fa-stethoscope fa-3x"></span>
                </div>
                <div class="service-desc">
                  <h5 class="h-light" data-tag="acc_title2"></h5>
                  <p data-tag="acc_contents2"></p>
                  <ul>
                  	<li data-tag="acc_contents2_1"></li>
                  	<li data-tag="acc_contents2_2"></li>
                  </ul>
                </div>
              </div>
            </div>


          </div>

        </div>
      </div>
    </section>
    <!-- /Section: services -->


    <!-- Section: team -->
    <section id="doctor" class="home-section bg-gray paddingbot-60">
      <div class="container marginbot-50">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="section-heading text-center">
                <h2 class="h-bold">Staff</h2>
                <p data-tag="doctor_sub">We do our best for the best service.</p>
              </div>
            </div>
            <div class="divider-short"></div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row" style="text-align: center;">
         
              <img src="<?=$siteLink?>img/photo/staff.png" style="width:900px;" alt="staff" />
        </div>
      </div>

    </section>
    <!-- /Section: team -->



    <!-- Section: works -->
    <section id="contactus" class="home-section paddingbot-60">
      <div class="container">
        <div class="row marginbot-50">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="section-heading text-center">
                <h2 class="h-bold">Contact Us</h2>
              </div>
            </div>
            <div class="divider-short"></div>
            
        </div>
      </div>
               

      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-6">
            <div class="wow bounceInUp" data-wow-delay="0.1s" style="text-align: center;">
              <img id="yes_map" src="<?=$siteLink?>img/map_en.jpg" alt="Yes acupuncture map">
            </div>
          </div>

          <div class="col-sm-4 col-md-4">
                
            <!-- mobile number start -->
            <div class="wow fadeInRight" data-wow-delay="0.2s">
              <div class="service-box">
                <div class="service-icon">
                  &nbsp;<span class="fa fa-mobile fa-2x"></span>
                </div>
                <div class="service-desc">
                  <h5 class="h-light"><a href="tel:+64 21 686 354"> 021 686 354 (Text)</a></h5>
                </div>
              </div>
            </div>
            <!-- mobile number end -->
                
            <!-- phone number start -->
            <div class="wow fadeInRight" data-wow-delay="0.2s">
              <div class="service-box">
                <div class="service-icon">
                  <span class="fa fa-phone fa-2x"></span>
                </div>
                <div class="service-desc">
                  <h5 class="h-light"><a href="tel:+64 09 369 1369"> +64 09 369 1369</a></h5>
                </div>
              </div>
            </div>
            <!-- phone number end -->
                
            <!-- email start -->
            <div class="wow fadeInRight" data-wow-delay="0.2s">
              <div class="service-box">
                <div class="service-icon">
                  <span class="fa fa-at fa-2x"></span>
                </div>
                <div class="service-desc">
                  <h5 class="h-light"><a href="mailto:yesnz@hotmail.com">yesnz@hotmail.com</a></h5>
                </div>
              </div>
            </div>
            <!-- email end -->
                
            <!-- kakaotalk start -->
            <div class="wow fadeInRight" data-wow-delay="0.2s">
              <div class="service-box">
                <div class="service-icon">
                  <img src="<?=$siteLink?>img/kakaotalk_mint.png" style="width:32px;" alt="kakaotalk" />
                </div>
                <div class="service-desc">
                  <h5 class="h-light">yesnz</h5>
                </div>
              </div>
            </div>
            <!-- kakaotalk end -->
                
            <!-- address start -->
            <div class="wow fadeInRight" data-wow-delay="0.2s">
              <div class="service-box">
                <div class="service-icon">
                  &nbsp;&nbsp;<span class="fa fa-map-marker fa-2x"></span>
                </div>
                <div class="service-desc">
                  <h5 class="h-light">Ground Floor, Quay Park Health, 68 Beach Rd. CBD</h5>
                </div>
              </div>
            </div>
            <!-- address end -->

          </div>
        </div>
      </div>
    </section>
    <!-- /Section: works -->

    <!-- Section: pricing -->
    <section id="pricing" class="home-section bg-gray paddingbot-60">
      <div class="container marginbot-50">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow lightSpeedIn" data-wow-delay="0.1s">
              <div class="section-heading text-center">
                <h2 class="h-bold" data-tag="price_title">Schedule Of Charges</h2>
                <p data-tag="price_subtitle">Take charge of your health today with our specially designed health packages</p>
              </div>
            </div>
            <div class="divider-short"></div>
          </div>
        </div>
      </div>

      <div class="container">

        <div class="row">

          <div class="col-sm-4 pricing-box">
            <div class="wow bounceInUp" data-wow-delay="0.1s">
              <div class="pricing-content general">
                <h2 data-tag="acc_treatment">ACC Treatement</h2>
                <ul>
                  <li data-tag="acc_treatment_acupuncture">ACC Acupuncture<span>$5</span></li>
                  <li class="sub" data-tag="acc_treatment_acupuncture_student">Student<span>free</span></li>
                  <li data-tag="acc_treatment_physio">ACC Physio<span>$20</span></li>
                  <li data-tag="acc_treatment_chiropractic">ACC Chiropractic<span>$20</span></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-sm-4 pricing-box featured-price">
            <div class="wow bounceInUp" data-wow-delay="0.3s">
              <div class="pricing-content featured">
                <h2 data-tag="acc_combined">ACC Combined</h2>
                <h3 data-tag="acc_combined_price">$7 <span> (Student: $2)</span></h3>
                <ul>
                  <li data-tag="acc_combined_acupuncute">Acupuncture <i class="fa fa-check icon-success"></i></li>
                  <li data-tag="acc_combined_chiropratic">Chiropractic or Physio<i class="fa fa-check icon-success"></i></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-sm-4 pricing-box">
            <div class="wow bounceInUp" data-wow-delay="0.2s">
              <div class="pricing-content general last">
                <h2 data-tag="non_acc_acupunture">Non-ACC Acupuncture</h2>
                <ul>
                  <li data-tag="non_acc_acupunture_initial">General Initial <span>$55</span></li>
                  <li data-tag="non_acc_acupunture_initial_time" class="sub">50 minutes</li>
                  <li data-tag="non_acc_acupunture_followup">General Follow-up<span>$45</span></li>
                  <li data-tag="non_acc_acupunture_followup_time" class="sub">45 minutes</li>
                </ul>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- /Section: pricing -->

    <section id="partner" class="home-section paddingbot-60">
      <div class="container marginbot-50">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow lightSpeedIn" data-wow-delay="0.1s">
              <div class="section-heading text-center">
                <h2 class="h-bold">Our partner</h2>
                <p></p>
              </div>
            </div>
            <div class="divider-short"></div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div>
            <div class="partner">
              <a href="#"><img src="<?=$siteLink?>img/photo/back_care_oleg_tokaev.png" alt="" /></a>
            </div>
          </div>
          <!--
          <div class="col-sm-6 col-md-5">
            <div class="partner">
              <a href="#"><img src="img/dummy/partner-2.jpg" alt="" /></a>
            </div>
          </div>
          -->
        </div>
      </div>
    </section>

<?php include('./pages/bottom.php'); ?>