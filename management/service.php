<?php
  include('./admin_top.php'); 
  include('../database/database.php');
  include('../database/service_query.php');
?>


        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Service</h1>
          <p class="mb-4"></p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <div class="col-sm-6 col-md-6 text-right" style="float:right;">
                <input type="button" id="btnAdd" class="btn btn-info" value="Add new service" onclick="addNewRow();"/>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>English</th>
                      <th>Korean</th>
                      <th>Status</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>

                  <?php
                   
                  $serviceList = getServiceList();
                  if ($serviceList->num_rows > 0) {
                      
                      while($board = $serviceList->fetch_array())
                      {
                  ?>
                        <tr>
                          <td><?= $board['serviceSeqNo']?></td>
                          <td>
                            <input type="text" class="form-control" name="serviceTypeEn" id="serviceTypeEn_<?= $board['serviceSeqNo']?>" placeholder="Service Type in English" value="<?= $board['serviceTypeEn']?>" />
                          </td>
                          <td>
                            <input type="text" class="form-control" name="serviceTypeKr" id="serviceTypeKr_<?= $board['serviceSeqNo']?>" placeholder="Service Type in Korean" value="<?= $board['serviceTypeKr']?>" />
                          </td>
                          <td>

                            <select id="serviceStatus_<?= $board['serviceSeqNo']?>" name="serviceStatus" class="form-control" style="height:50px;border: 1px solid #ebebeb;">
                                <option value="">Please select status.</option>
                        <?php
                     
                                $selected = "";
                                $serviceStatusList = getServiceStatusList();
                                if ($serviceStatusList->num_rows > 0) {
                          
                                  while($status = $serviceStatusList->fetch_array())
                                  {
                                    if($status['codeNo'] == $board['serviceStatusCode']) {
                                      $selected = " selected=true";
                                    }
                                    else {
                                      $selected = "";
                                    }
                              ?>
                                  <option value="<?=$status['codeNo']?>" <?=$selected?>><?=$status['codeName']?></option>

                              <?php 
                                  }
                                } 
                            ?>
                            </select>

                          </td>
                          <td>
                            <input type="button" id="btnDelete" class="btn btn-dark" value="Delete" onclick="deleteService('<?= $board['serviceSeqNo']?>');"/>
                            <input type="button" id="btnSave" class="btn btn-primary" value="Save" onclick="editService('<?= $board['serviceSeqNo']?>');"/>
                          </td>
                        </tr>
                  <?php 
                      }
                    } 
                    ?>
                    
                  </tbody>
                </table>
                <table id="newServiceForm" style="display:none;">
                  <tr>
                      <td></td>
                      <td>
                        <input type="text" class="form-control" name="serviceTypeEn" id="serviceTypeEn_new" placeholder="Service Type in English" value="" />
                      </td>
                      <td>
                        <input type="text" class="form-control" name="serviceTypeKr" id="serviceTypeKr_new" placeholder="Service Type in Korean" value="" />
                      </td>
                      <td>

                        <select id="serviceStatus_new" name="serviceStatus" class="form-control" style="height:50px;border: 1px solid #ebebeb;">
                            <option value="">Please select status.</option>
                    <?php
                 
                            $serviceStatusList = getServiceStatusList();
                            if ($serviceStatusList->num_rows > 0) {
                      
                              while($status = $serviceStatusList->fetch_array())
                              {
                          ?>
                              <option value="<?=$status['codeNo']?>"><?=$status['codeName']?></option>

                          <?php 
                              }
                            } 
                        ?>
                        </select>

                      </td>
                      <td>
                        <input type="button" id="btnAdd" class="btn btn-info" value="Add" onclick="addService();"/>
                      </td>
                    </tr>
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

  function deleteService (selServiceSeqNo) {

    if(confirm("Are you sure to delete the service?")) {
      try {

          $.ajax({
              url: "<?=$siteLink?>action/deleteServiceAction.php",
              type: "post",
              data: {serviceSeqNo:selServiceSeqNo}
          }).done(function(result) {
              if(result == "success") {
                  alert("Successfully deleted.");
                  location.href = "<?=$siteLink?>management/service.php";
              }
              else {
                  alert(result);
              }
          });
      }
      catch(error){
          console.error(error);
      }
    }
      
  }

  function editService(selServiceSeqNo) {
    try {

          $.ajax({
              url: "<?=$siteLink?>action/editServiceAction.php",
              type: "post",
              data: {serviceSeqNo:selServiceSeqNo, serviceTypeEn:$("#serviceTypeEn_"+selServiceSeqNo).val(), serviceTypeKr:$("#serviceTypeKr_"+selServiceSeqNo).val(), serviceStatus:$("#serviceStatus_"+selServiceSeqNo).val() }
          }).done(function(result) {
              if(result == "success") {
                  alert("Successfully saved.");
                  location.href = "<?=$siteLink?>management/service.php";
              }
              else {
                  alert(result);
              }
          });
      }
      catch(error){
          console.error(error);
      }
  }

  function addService() {
    try {

          $.ajax({
              url: "<?=$siteLink?>action/addServiceAction.php",
              type: "post",
              data: {serviceTypeEn:$("#serviceTypeEn_new").val(), serviceTypeKr:$("#serviceTypeKr_new").val(), serviceStatus:$("#serviceStatus_new").val() }
          }).done(function(result) {
              if(result == "success") {
                  alert("Successfully saved.");
                  location.href = "<?=$siteLink?>management/service.php";
              }
              else {
                  alert(result);
              }
          });
      }
      catch(error){
          console.error(error);
      }
  }

  function addNewRow() {
    $("#newServiceForm").children().clone().appendTo("#dataTable");
  }

  $(document).ready(function(){

      $("#navService").addClass("active");
  });

</script>