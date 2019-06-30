<?php 
  include('./top.php'); 
  include('./../database/database.php');
  include('./../database/service_query.php');


 ?>
  <link href="<?=$siteLink?>css/form.css" rel="stylesheet">
  <link href="<?=$siteLink?>font-awesome/css/material-design-iconic-font.css" rel="stylesheet">
    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="login_container">
                <div class="signup-content">
                    <form method="POST" id="appointmentForm" class="signup-form" onsubmit="return false;">
                        <h2 class="form-title login_title" data-tag="title_appointment"></h2>
                        <div class="form-row">
                          <div class="form-group form-half">
                              <input type="text" class="form-input" name="firstName" id="firstName" placeholder="First Name"/>
                          </div>
                          <div class="form-group form-half">
                              <input type="text" class="form-input" name="lastName" id="lastName" placeholder="Last Name"/>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group form-half">
                              <input type="text" class="form-input" name="bookingDatePicker" id="bookingDatePicker" placeholder="Date" readonly="true" />
                              <input type="hidden" name="bookingDate" id="bookingDate" />
                          </div>
                          <div class="form-group form-half">
                              <input type="text" class="form-input" name="bookingTime" id="bookingTime" placeholder="Time" />
                          </div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"/>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-input" name="phoneNumber" id="phoneNumber" placeholder="Your Phone Number"/>
                        </div>
                        <div class="form-group">
                            <select id="serviceType" name="serviceType" class="form-control" style="height:50px;border: 1px solid #ebebeb;">
                                <option value="">Please select service.</option>

                        <?php
                         
                        $serviceList = getServiceListByLan($language);
                        if ($serviceList->num_rows > 0) {
                            
                            while($board = $serviceList->fetch_array())
                            {
                        ?>

                                <option value="<?php echo $board['serviceSeqNo']?>"><?php echo $board['service']?></option>
                        <?php 
                            }
                          } 
                          ?>

                            </select>
                        </div>
                        <div class="form-group">
                            <textarea id="description" name="description" class="form-input" placeholder="Please describe your symptoms briefly."></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Submit"/>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>


<?php include('./bottom.php'); ?>
    
    <script>
    $(document).ready(function(){
    
        $( "#bookingDatePicker" ).datepicker({
            //dateFormat: "mm-dd-yy",
            dateFormat: "yy-mm-dd",
            showOn: "both",
            minDate: 0,
            buttonText : '<i class="zmdi zmdi-calendar-alt"></i>',
            beforeShowDay: noSundays,
            onClose:function(theDate) {
                $('#bookingDate').val(theDate);
            }
        });

        $('#bookingTime').timepicker({
            timeFormat: 'H:i',
            step: 60,
            minTime: '11:00',
            maxTime: '20:00',
            defaultTime: '10',
            startTime: '11:00',
            dynamic: false,
            dropdown: true,
            scrollbar: true,
            disableTextInput: true
            //disableTimeRanges:  [[ '10:00:00', '11:00:00' ], [ '13:00:00', '14:00:00' ]] 
        });
/*
        jQuery.validator.setDefaults({
          debug: true,
          success: "valid"
        });

        $("#appointmentForm").validate({
            rules: {
                firstName: {required: true, rangelength: [2, 10]},
                lastName: {required: true},
                bookingDate: {required: true},
                bookingTime: {required: true},
                serviceType: {required: true}
            },
            messages: {

                firstName: {
                    required: "Please, enter first name."
                  , rangelength: "Please enter a name at least 2 characters and a maximum of 10 characters."
                },
                lastName: {
                    required: "Please, enter last name."
                },
                bookingDate: {
                    required: "Please, enter booking date."
                },
                bookingTime: {
                    required: "Please, enter booking time."
                },
                serviceType: {
                    required: "Please select your symptoms."
                }

            }
            

            messages: {

                firstName: {
                    required: "이름을 입력해 주십시오."
                  , rangelength: "이름은 최소 2자 최대 10자 이내로 입력해 주십시오."
                },
                lastName: {
                    required: "성을 입력해 주십시오."
                },
                bookingDate: {
                    required: "예약일자를 입력해주십시오."
                },
                bookingTime: {
                    required: "예약시간을 입력해주십시오."
                },
                serviceType: {
                    required: "증세를 선택해주세요."
                }

            }
            
        });*/

    });

    $(document).ready(function(){

        $("#submit").on("click", function(){
            
            if(!checkForm()) {
                return;
            }

            try {

                $.ajax({
                    url: "<?=$siteLink?>action/bookingAction.php",
                    type: "post",
                    data: $( "#appointmentForm" ).serialize()
                }).done(function(result) {
                    if(result == "success") {
                        alert("Successfully booked.\nWe will contact you.");
                        location.href = "<?=$siteLink?>index.php";
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
        if($("#firstName").val() == null || $("#firstName").val() == "") {
            alert("Please enter your firstName.");
            $("#firstName").focus();
            return false;
        }
        else if($("#lastName").val() == null || $("#lastName").val() == "") {
            alert("Please enter your lastName.");
            $("#lastName").focus();
            return false;
        }
        else if($("#email").val() == null || $("#email").val() == "") {
            alert("Please enter your email.");
            $("#email").focus();
            return false;
        }
        else if(!validateEmail($("#email").val())) {
            alert("Please enter your correct email.");
            $("#email").focus();
            return false;
        }
        else if($("#phoneNumber").val() == null || $("#phoneNumber").val() == "") {
            alert("Please enter your phone number.");
            $("#phoneNumber").focus();
            return false;
        }
        else if($("#bookingDate").val() == null || $("#bookingDate").val() == "") {
            alert("Please enter booking date.");
            $("#bookingDate").focus();
            return false;
        }
        else if($("#bookingTime").val() == null || $("#bookingTime").val() == "") {
            alert("Please enter booking time.");
            $("#bookingTime").focus();
            return false;
        }
        else if($("#serviceType").val() != $("#serviceType").val()) {
            alert("Please enter your phone number.");
            $("#serviceType").focus();
            return false;
        }
        else {
            return true;
        }
    }
    </script>