<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['mhmsaid']==0)) {
  header('location:logout.php');
} else {
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Maid Hiring Management System || Feedbacks</title>
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <link rel="stylesheet" href="style.css" />
      <link rel="stylesheet" href="css/responsive.css" />
      <link rel="stylesheet" href="css/colors.css" />
      <link rel="stylesheet" href="css/bootstrap-select.css" />
      <link rel="stylesheet" href="css/perfect-scrollbar.css" />
      <link rel="stylesheet" href="css/custom.css" />
      <link rel="stylesheet" href="js/semantic.min.css" />
      <link rel="stylesheet" href="css/jquery.fancybox.css" />
   </head>
   <body class="inner_page tables_page">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar -->
            <?php include_once('includes/sidebar.php'); ?>
            <!-- Right content -->
            <div id="content">
               <!-- Topbar -->
               <?php include_once('includes/header.php'); ?>
               <!-- End topbar -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>User Feedbacks</h2>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Feedback Submissions</h2>
                                 </div>
                              </div>
                              <div class="table_section padding_infor_info">
                                 <div class="table-responsive-sm">

                                 <!-- Search Form -->
                                 <div class="card-body">
                                    <form method="get" action="feedback.php" class="mb-3">
                                       <div class="row">
                                          <div class="col-md-4">
                                             <input type="text" name="search" class="form-control" placeholder="Search by email or message" value="<?php if(isset($_GET['search'])) echo $_GET['search']; ?>">
                                          </div>
                                          <div class="col-md-2">
                                             <button type="submit" class="btn btn-primary">Search</button>
                                             <a href="feedback.php" class="btn btn-secondary">Reset</a>
                                          </div>
                                       </div>
                                    </form>
                                 </div>

                                 <?php
                                 // ✅ Always use correct table name: feedbacks
                                 $sql = "SELECT * FROM feedbacks";
                                 if(isset($_GET['search']) && $_GET['search'] != ""){
                                     $search = $_GET['search'];
                                     $sql .= " WHERE user_email LIKE :search OR feedback_text LIKE :search";
                                 }
                                 $sql .= " ORDER BY created_at DESC";
                                 
                                 $query = $dbh->prepare($sql);
                                 if(isset($search)){
                                     $query->bindValue(':search', "%$search%", PDO::PARAM_STR);
                                 }
                                 $query->execute();
                                 $results = $query->fetchAll(PDO::FETCH_OBJ);
                                 ?>

                                    <table class="table table-bordered">
                                       <thead>
                                          <tr>
                                             <th class="text-center">Sl.No</th>
                                             <th>User Email</th>
                                             <th>Message</th>
                                             <th>Submitted At</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <?php
                                          $cnt=1;
                                          if($query->rowCount() > 0) {
                                             foreach($results as $row) { ?>
                                             <tr>
                                                <td class="text-center"><?php echo htmlentities($cnt); ?></td>
                                                <td class="font-w600"><?php echo htmlentities($row->user_email); ?></td>
                                                <td class="font-w600"><?php echo htmlentities($row->feedback_text); ?></td>
                                                <td class="font-w600">
                                                   <span class="badge badge-primary"><?php echo htmlentities($row->created_at); ?></span>
                                                </td>
                                             </tr>
                                          <?php $cnt=$cnt+1; } } else { ?>
                                             <tr>
                                                <td colspan="4" class="text-center text-danger">No feedbacks found</td>
                                             </tr>
                                          <?php } ?>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Footer -->
                  <?php include_once('includes/footer.php'); ?>
               </div>
            </div>
         </div>
      </div>
      <!-- Scripts -->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/animate.js"></script>
      <script src="js/bootstrap-select.js"></script>
      <script src="js/owl.carousel.js"></script> 
      <script src="js/Chart.min.js"></script>
      <script src="js/Chart.bundle.min.js"></script>
      <script src="js/utils.js"></script>
      <script src="js/analyser.js"></script>
      <script src="js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/jquery.fancybox.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="js/semantic.min.js"></script>
   </body>
</html>
<?php } ?>
