<?php
  include('./admin_top.php'); 
  include('../database/database.php');
  include('../database/booking_query.php');
?>


        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Booking</h1>
          <p class="mb-4"></p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Booking list</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Date</th>
                      <th>Time</th>
                      <th>Service</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Date</th>
                      <th>Time</th>
                      <th>Service</th>
                    </tr>
                  </tfoot>
                  <tbody>

                  <?php
                   
                  $bookingList = getBookingList();
                  if ($bookingList->num_rows > 0) {
                      
                      while($board = $bookingList->fetch_array())
                      {
                  ?>
                        <tr onclick="goBookingDetail('<?= $board['bookingSeqNo']?>')">
                          <td><?= $board['bookingSeqNo']?></td>
                          <td><?= $board['firstName']?> <?= $board['lastName']?></td>
                          <td><?= $board['bookingDate']?></td>
                          <td><?= $board['bookingTime']?></td>
                          <td><?= $board['serviceType']?></td>
                        </tr>
                  <?php 
                      }
                    } 
                    ?>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

<?php
  include('./admin_bottom.php'); 
?>

    <script>
      function goBookingDetail(bookingSeqNo) {
        window.document.location.href="<?=$siteLink?>management/booking_detail.php?bookingSeqNo="+bookingSeqNo;
      }


    $(document).ready(function(){
      $("#navBooking").addClass("active");
    });
    </script>