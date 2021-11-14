
<?php require_once 'authenticate.php';?>
<?php include 'connection.php';?>

<?php include 'header.php';?>
    <!-- Body Content Wrapper -->
    <div class="ms-content-wrapper">
      <div class="row">
        <div class="col-md-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0">
              <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
              <li class="breadcrumb-item"><a href="#">Users Status</a></li>
              <li class="breadcrumb-item active" aria-current="page">Approved</li>
            </ol>
          </nav>
        </div>
          
          
          <div class="col-xl-12">
            <div class="ms-panel">
              <div class="ms-panel-header  ms-panel-custome">
                <h6>Users Status</h6>
                <a href="denied.php" class="ms-text-primary">Denied</a>
              </div>
              <div class="ms-panel-body">
                <div class="table-responsive">
                    <div class="col-xl-12 col-md-12">
                  <div class="ms-panel">
                    
                     <div class="ms-panel-body">
                        <div class="table-responsive">
                           <table class="table table-hover">
                              <thead>
                                 <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Email Address</th>
                                     <th scope="col">Status</th>
                                 </tr>
                              </thead>
                              <tbody>
                                  <?php 
               
              $query="SELECT * FROM tbl_users WHERE status = 'approved' ORDER BY id ASC";
              $result=mysqli_query($conn,$query);
              if(mysqli_num_rows($result)>0)
              {
                while($row=mysqli_fetch_array($result))
                {
                    ?>
                                 <tr>
                                      <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['username']; ?></td>
                                    <td><?php echo $row['email_address']; ?></td>  
                                     <td><?php echo $row['status']; ?></td>
                                 </tr>
                                
                                <?php } } ?>
                                
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </main>
  <!-- Reminder Modal -->
  
  <!-- SCRIPTS -->
  <!-- Global Required Scripts Start -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/perfect-scrollbar.js"> </script>
  <script src="assets/js/jquery-ui.min.js"> </script>
  <!-- Global Required Scripts End -->
  <!-- Page Specific Scripts Start -->
  <script src="assets/js/slick.min.js"> </script>
  <script src="assets/js/moment.js"> </script>
  <script src="assets/js/jquery.webticker.min.js"> </script>
  <script src="assets/js/Chart.bundle.min.js"> </script>
  <script src="assets/js/department.js"> </script>
  <!-- Page Specific Scripts Finish -->
  <!-- Page Specific Scripts Start -->
  <script src="assets/js/datatables.min.js"> </script>
  <script src="assets/js/data-tables.js"> </script>
  <!-- Mednalytics core JavaScript -->

  <script src="assets/js/framework.js"></script>
  <!-- Settings -->
  <script src="assets/js/settings.js"></script>
</body>

</html>