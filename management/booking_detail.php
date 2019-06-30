<?php
  include('./admin_top.php'); 
  include('../database/database.php');
  include('../database/booking_query.php');
  include('../database/service_query.php');
  $bookingSeqNo = $_GET['bookingSeqNo'];
?>

  <link href="<?=$siteLink?>css/form.css" rel="stylesheet">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Booking</h1>

          <!-- DataTales Example -->
          <?php
                   
          $bookingDetail = getBookingDetail($bookingSeqNo);
          if ($bookingDetail->num_rows > 0) {
              
              while($board = $bookingDetail->fetch_array())
              {
          ?>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"></h6>
                <input type="button" id="btnList" class="btn btn-info" value="List" onclick="goBookingList();"/>
              <div class="col-sm-6 col-md-6 text-right" style="float:right;">
                <input type="button" id="btnDelete" class="btn btn-dark" value="Delete" onclick="deleteBooking();"/>
                <input type="button" id="btnSave" class="btn btn-primary" value="Save" onclick="editBooking();"/>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <form method="POST" id="bookingForm" onsubmit="return false;">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    
                      <tr>
                        <th>No</th>
                        <td><?= $board['bookingSeqNo']?>
                          <input type="hidden" value="<?= $board['bookingSeqNo']?>" name="bookingSeqNo" />
                        </td>
                        <th>Service</th>
                        <td>
                          <select id="serviceType" name="serviceType" class="form-control" style="height:50px;border: 1px solid #ebebeb;">
                              <option value="">Please select service.</option>
                          <?php
                           
                          $serviceList = getServiceListByLan("en");
                          if ($serviceList->num_rows > 0) {
                              
                              $selected = "";
                              while($service = $serviceList->fetch_array())
                              {
                                if($service['serviceSeqNo'] == $board['serviceTypeSeqNo']) {
                                  $selected = " selected=true";
                                }
                                else {
                                  $selected = "";
                                }
                          ?>

                                  <option value="<?php echo $service['serviceSeqNo']?>" <?=$selected?>><?php echo $service['service']?></option>
                          <?php 
                              }
                            } 
                            ?>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <th>First Name</th>
                        <td><input type="text" class="form-input" name="firstName" id="firstName" placeholder="First Name" value="<?= $board['firstName']?>"/></td>
                        <th>Last Name</th>
                        <td><input type="text" class="form-input" name="lastName" id="lastName" placeholder="Last Name" value="<?= $board['lastName']?>"/></td>
                      </tr>
                      <tr>
                        <th>Date</th>
                        <td>
                            <input type="text" class="form-input" name="bookingDatePicker" id="bookingDatePicker" placeholder="Date" readonly="true" value="<?= $board['bookingDateForm']?>" />
                            <input type="hidden" name="bookingDate" id="bookingDate" value="<?= $board['bookingDateForm']?>" />
                        </td>
                        <th>Time</th>
                        <td>
                          <input type="text" class="form-input" name="bookingTime" id="bookingTime" placeholder="Time" value="<?= $board['bookingTime']?>" />
                        </td>
                      </tr>
                      <tr>
                        <th>Phone number</th>
                        <td><input type="text" class="form-input" name="phoneNumber" id="phoneNumber" placeholder="Phone number" value="<?= $board['phoneNumber']?>"/></td>
                        <th>E-mail</th>
                        <td><input type="text" class="form-input" name="email" id="email" placeholder="E-mail" value="<?= $board['email']?>"/></td>
                      </tr>
                      <tr>
                        <th>Description</th>
                        <td colspan="3">
                          <textarea id="description" name="description" class="form-input" placeholder="Please describe your symptoms briefly."><?= $board['description']?></textarea>
                        </td>
                      </tr>
                      <tr>
                        <th>Booking Status</th>
                        <td colspan="3">
                          <select id="bookingStatus" name="bookingStatus" class="form-control" style="height:50px;border: 1px solid #ebebeb;">
                              <option value="">Please select booking status.</option>
                          <?php
                           
                          $bookingStatusList = getBookingStatusList();
                          if ($bookingStatusList->num_rows > 0) {
                              
                              $selected = "";
                              while($bookingStatus = $bookingStatusList->fetch_array())
                              {
                                if($bookingStatus['codeNo'] == $board['bookingStatus']) {
                                  $selected = " selected=true";
                                }
                                else {
                                  $selected = "";
                                }
                          ?>

                                  <option value="<?php echo $bookingStatus['codeNo']?>" <?=$selected?>><?php echo $bookingStatus['codeName']?></option>
                          <?php 
                              }
                            } 
                            ?>
                          </select>
                        </td>
                      </tr>
                      
                    </tbody>
                  </table>
                </form>
              </div>
            </div>
            <?php 
                }
              } 
              ?>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->


<?php
  include('./admin_bottom.php'); 
?>


<style>
    body {padding:0;}
    
    .ui-datepicker-trigger {
        position: relative;
        right: 2.5em;
        float: right;
        color: #999;
        font-size: 18px;
        background: transparent;
        border: none;
        outline: none;
        cursor: pointer;
        margin:0;
        padding:0;
    }

  .form-input {
      width: 95%;
    }
</style>
<script>
    function goBookingList() {
      window.document.location.href="<?=$siteLink?>management/booking_list.php";
    }

    function deleteBooking() {
      if(confirm("Are you sure to remove the booking?")) {
          $.ajax({
              url: "<?=$siteLink?>action/deleteBookingAction.php",
              type: "post",
              data: {bookingSeqNo:<?=$bookingSeqNo?>}
              //data: $( "#signupForm" ).serialize()
          }).done(function(result) {
              if(result == "success") {
                  location.href = "<?=$siteLink?>management/booking_list.php";
              }
              else {
                  alert(result);
                  //$("#result").val(result);
              }
          });
      }
    }

    function editBooking() {
      if(!checkForm()) {
            return;
        }

        $.ajax({
            url: "<?=$siteLink?>action/editBookingAction.php",
            type: "post",
            data: $( "#bookingForm" ).serialize()
        }).done(function(result) {
            if(result == "success") {
                location.href = "<?=$siteLink?>management/booking_list.php";
            }
            else {
                alert(result);
                //$("#result").val(result);
            }
        });
    }


    $(document).ready(function(){

        $("#navBooking").addClass("active");
    
    
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