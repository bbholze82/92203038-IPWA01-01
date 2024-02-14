<?php
  $page_title = "Frontpage";
  $total_sum_carbon = 0;
?>


<?php include("./assets/templates/html_head.php");?>

<body>

<?php include("./assets/templates/html_navbar.php");?>


<div class="container mt-4">
<div class="row">

<!-- Jumbotron -->
<?php include("./assets/templates/calc_total_sum_carbon.php");?>
<div class="p-5 text-center bg-image rounded-3" style="background-image: url('./assets/static/images/header_image.jpg'); height: 400px;">

    <div class="d-flex justify-content-left align-items-left h-100">
      <div class="text-white">
        <h1 class="mb-3">CO2 emissions in database</h1>
        <h4 class="mb-3"><?php echo $total_sum_carbon;?> million metric tons</h4>
      </div>
    </div>

</div>
<!-- Jumbotron -->

</div><!-- /.row -->
</div><!-- /.container -->


<div class="container mt-4">

<div class="row">

<div class="col-sm-12 col-md-6 col-lg-3">
  <div class="text-center">
    <img src="./assets/static/icons/icon-view.png" class="card-img-top" style="width: 60%;" alt="...">
  </div>
  <div class="text-center">
    <a href="./view.php" class="btn btn-success">View data</a>
  </div>
</div><!-- /.col -->

<div class="col-sm-12 col-md-6 col-lg-3">
  <div class="text-center">
    <img src="./assets/static/icons/icon-submit.png" class="card-img-top" style="width: 60%;" alt="...">
  </div>
  <div class="text-center">
    <a href="./submit.php" class="btn btn-success">Submit data</a>
  </div>
</div><!-- /.col -->

<div class="col-sm-12 col-md-6 col-lg-3">
  <div class="text-center">
    <img src="./assets/static/icons/icon-about.png" class="card-img-top" style="width: 60%;" alt="...">
  </div>
  <div class="text-center">
    <a href="./about.php" class="btn btn-success">About us</a>
  </div>
</div><!-- /.col -->

<div class="col-sm-12 col-md-6 col-lg-3">
  <div class="text-center">
    <img src="./assets/static/icons/icon-contact.png" class="card-img-top" style="width: 60%;" alt="...">
  </div>
  <div class="text-center">
    <a href="#" class="btn btn-success">Contact us</a>
  </div>
</div><!-- /.col -->

</div> <!-- /.row-->

</div> <!-- /.container-->

<?php include("./assets/templates/html_footer.php");?>


<script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
