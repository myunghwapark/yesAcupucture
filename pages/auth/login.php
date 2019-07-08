<?php 
  require('../top.php'); 
  require('../../database/database.php');
 ?>
  <link href="<?=$siteLink?>css/form.css" rel="stylesheet">
  <link rel="stylesheet" href="<?=$siteLink?>font-awesome/css/material-design-iconic-font.css">
        
        <!-- Login Area Start -->
	<div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="login_container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" onsubmit="return false;">
                        <h2 class="form-title login_title">Sign in</h2>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="Password" maxlength="20" minlength="8" />
                            <span toggle="#password" class="zmdi zmdi-eye-off field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign in"/>
                        </div>
                        <!--
                        <div class="form-group">
                            <input type="text" class="form-input" name="result" id="result" placeholder="result"/>
                        </div>
                    -->
                    </form>
                    <p class="loginhere">
                        Do not have an account ? <a href="<?=$siteLink?>pages/auth/signup.php" class="loginhere-link">Sign up here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>
        <!-- Login Area End -->
        

<?php require('../bottom.php'); ?>
    
    <script>
    $(document).ready(function(){
    
    	

        $("#submit").on("click", function(){
            if(!checkForm()) {
                return;
            }

/*
            // Encrypt password
            var crypt = new JSEncrypt();

            // Set key
            crypt.setPrivateKey($('#publicKey').val());
            var plainPassword = $("#password").val();
            var encryptedPassword = crypt.encrypt(plainPassword);
*/
            $.ajax({
                url: "<?=$siteLink?>action/loginAction.php",
                type: "post",
                data: {email:$("#email").val(), password:$("#password").val(), userType:"G001_002"}
                //data: $( "#signupForm" ).serialize()
            }).done(function(result) {
                if(result == "success") {
                    location.href = "<?=$siteLink?>index.php";
                }
                else {
                    alert(result);
                    //$("#result").val(result);
                }
            });
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
        else if($("#password").val() == null || $("#password").val() == "") {
            alert("Please enter password.");
            $("#password").focus();
            return false;
        }
        else if(!chkPwd( $.trim($("#password").val()))){
           $("#password").focus();
           return false;
        }
        else {
            return true;
        }
    }
    </script>