  <?php
    session_start();
    include("include/header.php");
    include '../forms/connection.php';
    if (isset($_POST['deletemessage'])) {
        $complaint = $_POST['deletemessage'];


        $query = "DELETE FROM `complaint-user` WHERE `complaint-id`='$complaint'";
        $result = mysqli_query($con, $query);
        if ($result) {
            echo '<script language="javascript">';
            echo 'alert("message deleted successfully")';
            echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Something Wrong!")';
            echo '</script>';
        }
    }



    ?>
  <script type="text/javascript">
      document.addEventListener("DOMContentLoaded", function(event) {
          document.querySelectorAll('img').forEach(function(img) {
              img.onerror = function() {
                  this.style.display = 'none';
              };
          })
      });
  </script>
  <div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
      <div class="container-fluid">
          <div class="page-header-content">
              <h1 class="page-header-title">
                  <div class="page-header-icon"><i data-feather="mail"></i></div>
                  <span>Complaint Messages</span>
              </h1>
          </div>
      </div>
  </div>
  <!--Start Table-->
  <div class="container-fluid mt-n10">
      <div class="card mb-4">
          <div class="card-header">All Complaint</div>
          <div class="card-body">
              <div class="datatable table-responsive">
                  <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Customer Username</th>
                              <th>Captain Username</th>

                              <th>Complaint Message</th>
                              <th>Image</th>
                              <th>Date</th>
                              <th>Send Reply</th>
                              <th>Check</th>
                              <th>Delete</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php
                            include '../forms/connection.php';
                            $query = " SELECT * FROM  `complaint-user` ";
                            $result = mysqli_query($con, $query);
                            if ($result) {
                                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>
                                  <tr>
                                      <td class="show"><?php echo $row['complaint-id']; ?></td>
                                      <td class="show"><?php echo $row['customer-username']; ?></td>
                                      <td class="show"><?php echo $row['captin-username']; ?></td>
                                      <td class="show"><?php echo $row['complaint-details']; ?></td>
                                      <td class="show"><?php echo '<img  src="data:image/jpeg;base64,' . base64_encode($row['image']) . '" border=3 height=100 width=100 />'; ?></td>
                                      <td class="show">date</td>
                                      <td>
                                          <div class=" form-group">
                                              <label for="reply">Send Reply</label>
                                              <textarea class="form-control" id="reply" rows="2"></textarea>

                                          </div>
                                          <button type="button" class="btn btn-primary">Primary</button>
                                      </td>
                                      <td>
                                          <div class="form-check">
                                              <input class="form-check-input" type="radio" name="check" id="underreview" checked>
                                              <label class=" form-check-label" for="underreview">
                                                  Under review
                                              </label>
                                          </div>
                                          <div class="form-check">
                                              <input class="form-check-input" type="radio" name="check" id="reviewed">
                                              <label class="form-check-label" for="reviewed">
                                                  Reviewed
                                              </label>
                                          </div>
                                      </td>
                                      <td>

                                          <form method="post">
                                              <a href="deletelink" onclick="return confirm('Are you sure?')"><button type="submit" name="deletemessage" value="<?= $row['complaint-id'];  ?>" class="btn btn-red btn-icon"><i data-feather="trash-2"></i></button></a>
                                          </form>
                                      </td>
                                  </tr>
                          <?php   }
                            }

                            ?>



                      </tbody>
                  </table>

              </div>
          </div>
      </div>
  </div>
  <!--End Table-->


  <?php include("include/footer.php"); ?>

