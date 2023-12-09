
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
    <style>
    body {
      /* background-color: #333; */
      color: #fff;
    }

    table {
      width: 80%;
      border-collapse: collapse;
      margin-top: 20px;
      background-color: #444;
      color: #fff;
    }

    th, td {
      padding: 12px;
      text-align: left;
      border-bottom: 1px solid #555;
    }

    th {
      background-color: #2C3E50; /* Dark blue-gray color */
    }

    tr:hover {
      background-color: #555;
    }
  </style>
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
        <div class="main-panel">

        

        <h2 style="text-align: center;">All Apppointments</h2>
        <center>

        <table>
    <thead>
      <tr>
        <th>Doctor Name</th>
        <th>Phone</th>
        <th>Spaciality</th>
        <th>Room No</th>
        <th>Image</th>
        <th>Delete</th>
        <th>Update</th>
        
      </tr>
    </thead>
    <tbody>
        @foreach($data as $doctor)
      <tr>
        <td>{{$doctor->name}}</td>
        <td>{{$doctor->contact_number}}</td>
        <td>{{$doctor->spaciality}}</td>
        <td>{{$doctor->room}}</td>
        <td><img height="80px" width="80px" src="Doctorimage/{{$doctor->image}}" alt=""></td>
        <td><a class="btn btn-danger" onclick="return confirm('Are you sure to Delete this Doctor?')" href="{{url('deletedoctor',$doctor->id)}}">Delete</a></td>
        <td><a class="btn btn-primary" href="">Update</a></td>


      </tr>
      @endforeach
      
      <!-- Add more rows as needed -->
    </tbody>
  </table>



        </center>



    <!-- <div class="content-wrapper">
    <h5>Heloo Doctor</h5>
      
    </div> -->
    <!-- content-wrapper ends --></div>

        




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
