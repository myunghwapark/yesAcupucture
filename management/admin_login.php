<?php 
  $siteLink = "/";
  
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Yes Acupuncture Clinic Management - Login</title>

  <!-- Custom fonts for this template-->
  <link href="<?=$siteLink?>css/management/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?=$siteLink?>css/management/sb-admin-2.css" rel="stylesheet">
  <link href="<?=$siteLink?>img/yes_favicon.ico" rel="shortcut icon">

</head>

<body class="bg-gradient-info">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>
                  <form class="user" id="adminLoginForm" onsubmit="return false;">
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter Email Address..." />
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password" maxlength="20" minlength="8" />
                      <input type="hidden" id="userType" name="userType" valu="G001_001" />
                    </div>
                    <!--
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                  -->
                    <input type="submit" name="btnLogin" id="btnLogin" class="btn btn-info btn-user btn-block" value="Login"/>
                    
                  </form>
                  <hr>
                  <!--
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div>
                -->
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?=$siteLink?>js/jquery.min.js"></script>
  <script src="<?=$siteLink?>js/management/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?=$siteLink?>js/management/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?=$siteLink?>js/management/sb-admin-2.js"></script>
  <script src="<?=$siteLink?>js/common.js"></script>
  <script src="<?=$siteLink?>js/core.min.js"></script>
  <script src="<?=$siteLink?>js/sha256.min.js"></script>

    <script>
    $(document).ready(function(){
    

        $("#btnLogin").on("click", function(){
            if(!checkForm()) {
                return;
            }

            var salt = $("#email").val();
            var encrypt = CryptoJS.SHA256(salt, $("#password").val());

            $.ajax({
                url: "<?=$siteLink?>action/loginAction.php",
                type: "post",
                data: {email:$("#email").val(), password:encrypt.toString(), userType:$("#userType").val()}
                //data: $( "#adminLoginForm" ).serialize()
            }).done(function(result) {
                if(result == "success") {
                    location.href = "<?=$siteLink?>management/booking_list.php";
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
</body>

</html>
