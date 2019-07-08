<?php 
  require('../top.php'); 
 ?>
  <link href="<?=$siteLink?>css/form.css" rel="stylesheet">
  <link rel="stylesheet" href="<?=$siteLink?>font-awesome/css/material-design-iconic-font.css">
    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="login_container">
                <div class="signup-content">
                    <form method="POST" id="signupForm" class="signup-form" onsubmit="return false;">
                        <h2 class="form-title login_title">Sign up</h2>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"/>
                        </div>
                        <div class="form-row">
                          <div class="form-group form-half">
                              <input type="text" class="form-input" name="firstName" id="firstName" placeholder="First Name"/>
                          </div>
                          <div class="form-group form-half">
                              <input type="text" class="form-input" name="lastName" id="lastName" placeholder="Last Name"/>
                          </div>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="Password" maxlength="20" minlength="8"/>
                            <span toggle="#password" class="zmdi zmdi-eye-off field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="rePassword" id="rePassword" placeholder="Repeat your password"/>
                            <span toggle="#rePassword" class="zmdi zmdi-eye-off field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-input" name="phoneNumber" id="phoneNumber" placeholder="Your Phone Number"/>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="<?=$siteLink?>pages/auth/login.php" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>
    

<?php require('../bottom.php'); ?>
    
    <script>
    $(document).ready(function(){
    
        $(".toggle-password").click(function() {

            $(this).toggleClass("zmdi-eye zmdi-eye-off");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
              input.attr("type", "text");
            } else {
              input.attr("type", "password");
            }
          });

        $("#submit").on("click", function(){
            
            if(!checkForm()) {
                return;
            }
            

            try {
                // Encrypt password
                /*
                var crypt = new JSEncrypt();

                // Set key
                crypt.setPrivateKey($("#publicKey").val());
                var plainPassword = $("#password").val();
                var encryptedPassword = crypt.encrypt(plainPassword);
                $("#encryptedPassword").val(encryptedPassword);
                */

                //return;

                $.ajax({
                    url: "<?=$siteLink?>action/signupAction.php",
                    type: "post",
                    data: {email:$("#email").val(), firstName:$("#firstName").val(), lastName:$("#lastName").val(), password:$("#password").val(),
                            phoneNumber:$("#phoneNumber").val()}
                    //data: $( "#signupForm" ).serialize()
                }).done(function(result) {
                    if(result == "success") {
                        location.href = "<?=$siteLink?>pages/auth/login.php";
                    }
                    else {
                        alert(result);
                    }
                });
            }
            catch(error){
                console.error(error);
            }
            
        });
            

    });



    function checkForm() {
        if($("#email").val() == null || $("#email").val() == "") {
            alert("Please enter your email.");
            $("#email").focus();
            return false;
        }
        else if(!validateEmail($("#email").val())) {
            alert("Please enter your correct email.");
            $("#email").focus();
            return false;
        }
        else if($("#firstName").val() == null || $("#firstName").val() == "") {
            alert("Please enter your firstName.");
            $("#firstName").focus();
            return false;
        }
        else if($("#lastName").val() == null || $("#lastName").val() == "") {
            alert("Please enter your lastName.");
            $("#lastName").focus();
            return false;
        }
        else if($("#password").val() == null || $("#password").val() == "") {
            alert("Please enter password.");
            $("#password").focus();
            return false;
        }
        else if(!chkPwd( $.trim($("#password").val()))){
           $("#password").focus();
           return false;
        }
        else if($("#rePassword").val() == null || $("#rePassword").val() == "") {
            alert("Please enter confirm password.");
            $("#rePassword").focus();
            return false;
        }
        else if($("#password").val() != $("#rePassword").val()) {
            alert("Password and confirm password should be the same.");
            $("#rePassword").focus();
            return false;
        }
        else if($("#phoneNumber").val() == null || $("#phoneNumber").val() == "") {
            alert("Please enter your phone number.");
            $("#phoneNumber").focus();
            return false;
        }
        else {
            return true;
        }
    }
    </script>