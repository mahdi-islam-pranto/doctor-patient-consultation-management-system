
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->


        <div class="container-fluid page-body-wrapper">

        <h2 style="text-align: center;">Doctor Information Form</h2>

    <form action="#" method="post" style="max-width: 600px; margin: 0 auto;">
        <label for="doctorName" style="display: block; margin-top: 10px;">Doctor's Name:</label>
        <input type="text" id="doctorName" name="doctorName" required style="width: 100%; padding: 8px; margin-top: 5px; margin-bottom: 10px; box-sizing: border-box;">

        <label for="specialization" style="display: block; margin-top: 10px;">Specialization:</label>
        <input type="text" id="specialization" name="specialization" required style="width: 100%; padding: 8px; margin-top: 5px; margin-bottom: 10px; box-sizing: border-box;">

        <label for="qualification" style="display: block; margin-top: 10px;">Qualification:</label>
        <input type="text" id="qualification" name="qualification" required style="width: 100%; padding: 8px; margin-top: 5px; margin-bottom: 10px; box-sizing: border-box;">

        <label for="experience" style="display: block; margin-top: 10px;">Experience (in years):</label>
        <input type="number" id="experience" name="experience" required style="width: 100%; padding: 8px; margin-top: 5px; margin-bottom: 10px; box-sizing: border-box;">

        <label for="contactNumber" style="display: block; margin-top: 10px;">Contact Number:</label>
        <input type="tel" id="contactNumber" name="contactNumber" required style="width: 100%; padding: 8px; margin-top: 5px; margin-bottom: 10px; box-sizing: border-box;">

        <label for="email" style="display: block; margin-top: 10px;">Email:</label>
        <input type="email" id="email" name="email" required style="width: 100%; padding: 8px; margin-top: 5px; margin-bottom: 10px; box-sizing: border-box;">

        <label for="hospitalAffiliation" style="display: block; margin-top: 10px;">Hospital Affiliation:</label>
        <input type="text" id="hospitalAffiliation" name="hospitalAffiliation" required style="width: 100%; padding: 8px; margin-top: 5px; margin-bottom: 10px; box-sizing: border-box;">

        <label for="availableDays" style="display: block; margin-top: 10px;">Available Days:</label>
        <select id="availableDays" name="availableDays" required style="width: 100%; padding: 8px; margin-top: 5px; margin-bottom: 10px; box-sizing: border-box;">
            <option value="monday">Monday</option>
            <option value="tuesday">Tuesday</option>
            <option value="wednesday">Wednesday</option>
            <option value="thursday">Thursday</option>
            <option value="friday">Friday</option>
            <!-- Add more options as needed -->
        </select>

        <input type="submit" value="Submit" style="background-color: #4CAF50; color: white; padding: 10px 15px; border: none; border-radius: 5px; cursor: pointer;">
    </form>

        

        

        </div>





        <!-- @include('admin.body') -->
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="admin/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin/assets/js/off-canvas.js"></script>
    <script src="admin/assets/js/hoverable-collapse.js"></script>
    <script src="admin/assets/js/misc.js"></script>
    <script src="admin/assets/js/settings.js"></script>
    <script src="admin/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
