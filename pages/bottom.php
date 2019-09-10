
    <footer>

      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Yes Acupuncure Clinic</h5>
                <ul>
                  <li>
                    <span class="fa-stack fa-lg">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
					</span> 
					<table style="position: relative;margin-top: -36px;left: 50px;">
          				<tr>
          					<th data-tag="mon_fri">Mon to Fri:&nbsp;&nbsp;</th>
          					<td>10:30am to 9pm</td>
          				</tr>
          				<tr>
          					<th data-tag="sat">Sat:&nbsp;&nbsp;</th> 
          					<td>11am to 5pm</td>
          				</tr>
          				<tr>
          					<th data-tag="sun">Sun:&nbsp;&nbsp;</th>
          					<td>Closed</td>
          				</tr>
          			</table>
                  </li>
                  <li>
                    <span class="fa-stack fa-lg">
          						<i class="fa fa-circle fa-stack-2x"></i>
          						<i class="fa fa-phone fa-stack-1x fa-inverse"></i>
          					</span> +64 021 686 354 (Text)<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+64 09 369 1369
                  </li>
                  <li>
                    <span class="fa-stack fa-lg">
          						<i class="fa fa-circle fa-stack-2x"></i>
          						<i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
          					</span> yesnz@hotmail.com
                  </li>

                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Our location</h5>
                <p>Ground Floor, Quay Park Health, 68 Beach Rd. CBD</p>

              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Follow us</h5>
                <ul class="company-social">
                  <li class="social-facebook"><a href="https://www.facebook.com/yesacupunctureclinic" target="_blank"><i class="fa fa-facebook"></i></a></li>
                  <li class="social-instagram"><a href="https://www.instagram.com/p/BcdZ30tB8-W/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                  <li style="position: relative;top: -1px;"><a href="http://blog.daum.net/jhcom76" target="_blank"><img src="<?=$siteLink?>img/daum_logo.png" /></a></li>
                  <!--
                  <li class="social-vimeo"><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
                  <li class="social-dribble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                  -->
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="sub-footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="wow fadeInLeft" data-wow-delay="0.1s">
                <div class="text-left">
                  <p>&copy;Copyright - Yes Acupuncture. All rights reserved.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="wow fadeInRight" data-wow-delay="0.1s">
                <div class="text-right">
                  <div class="credits">
                    <!--
                      All the links in the footer should remain intact. 
                      You can delete the links only if you purchased the pro version.
                      Licensing information: https://bootstrapmade.com/license/
                      Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Medicio
                    -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>


  </div>
  <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

  <!-- Core JavaScript Files -->
  <script src="<?=$siteLink?>js/jquery.min.js"></script>
  <script src="<?=$siteLink?>js/bootstrap.min.js"></script>
  <script src="<?=$siteLink?>js/jquery.easing.min.js"></script>
  <script src="<?=$siteLink?>js/wow.min.js"></script>
  <script src="<?=$siteLink?>js/jquery.scrollTo.js"></script>
  <script src="<?=$siteLink?>js/jquery.appear.js"></script>
  <script src="<?=$siteLink?>js/stellar.js"></script>
  <script src="<?=$siteLink?>plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
  <script src="<?=$siteLink?>js/owl.carousel.min.js"></script>
  <script src="<?=$siteLink?>js/nivo-lightbox.min.js"></script>
  <script src="<?=$siteLink?>js/custom.js"></script>
  <script src="<?=$siteLink?>js/translate.js"></script>
  <script src="<?=$siteLink?>js/common.js"></script>
  <script src="<?=$siteLink?>js/jsencrypt.min.js"></script>
  <script src="<?=$siteLink?>js/jquery.validate.js"></script>
  <script src="<?=$siteLink?>js/core.min.js"></script>
  <script src="<?=$siteLink?>js/sha256.min.js"></script>
<script>
    var currentLng = "<?=$language?>";

    function load(){

      // Set logo
      if(currentLng == "en") {
        $("#logo").attr("src", "<?=$siteLink?>img/logo_en.jpg");
        $("#yes_map").attr("src", "<?=$siteLink?>img/map_en.jpg");
      }
      else {
        $("#logo").attr("src", "<?=$siteLink?>img/logo_kr.jpg");
        $("#yes_map").attr("src", "<?=$siteLink?>img/map_kr.jpg");
      }

      // Set select box
      $('#langDropdown > option').each(function() {
          if($(this).val() == currentLng) {
             $(this).prop('selected', 'selected');
          }
      });

      // Set contents
      var translate = new Translate();
      
      var attributeName = "data-tag";
      translate.init(attributeName, currentLng);
      translate.process(); 
    }
  
    function goAdmin() {
      window.location.href = "<?=$siteLink?>management/booking_list.php";
    } 
  
    function goLogin() {
    	window.location.href = "<?=$siteLink?>pages/auth/login.php";
    } 

    function goLogout() {
      window.location.href = "<?=$siteLink?>action/logoutAction.php";
    }

    function setLogin(){
      $("#btnLogin").hide();
      $("#btnLogout").show();
    }

    function setLogout(){
      $("#btnLogin").show();
      $("#btnLogout").hide();
      $("#btnAdmin").hide();
    }

    $(document).ready(function(){

        $("#langDropdown").on("change", function() {
          currentLng = $(this).find(":selected").val();
          document.cookie = "language="+currentLng;
          load();
        });

        load();
    });
  </script>
  
</body>

</html>


<?php
  if(isset($_SESSION['userType'])) {
    echo "<script>setLogin();</script>";
    if($_SESSION['userType'] == "G001_001") {
      echo "<script>$('#btnAdmin').show();</script>";
    }
    
    $userType = $_SESSION['userType'];
  }
  else {
     echo "<script>setLogout();</script>";
  }
?>