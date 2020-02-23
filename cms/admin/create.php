<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>CMS-Create Admin</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>



    <div class="wrapper">
        <!-- Sidebar Holder -->
        <?php //include('partial/sidebar.php'); ?>

        <!-- Page Content Holder -->
        <div id="content">
            <!-- top nav bar -->
            <div class="container">
              <h2>Create New Admin</h2>
              <form action="process/create_admin.php" method="post">

                <div class="form-group">
                  <label for="name">Name:</label>
                  <input type="text" class="form-control"  placeholder="Enter Name" name="name">
              </div>

              <div class="form-group">
                  <label for="district">District:</label>
                  <input type="text" class="form-control" placeholder="Enter District" name="district">
              </div>

              <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" placeholder="Enter email" name="email">
              </div>

              <div class="form-group">
                  <label for="password">Password:</label>
                  <input type="password" class="form-control" placeholder="Enter password" name="password">
              </div>

              <button type="submit" class="btn btn-default">Create Admin</button>
          </form>
      </div>

  </div>
</div>





<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<!-- Bootstrap Js CDN -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript">
   $(document).ready(function () {
       $('#sidebarCollapse').on('click', function () {
           $('#sidebar').toggleClass('active');
       });
   });
</script>
</body>
</html>
