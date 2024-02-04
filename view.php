<?php
  $page_title = "View data";
?>

<?php include("./assets/templates/html_head.php");?>

<body>

<?php include("./assets/templates/html_navbar.php");?>

<?php if ($_GET["submitresult"]):?>

<div class="container mt-4">

<?php
  $submit_val = $_GET["submitresult"];

  $submit_msg = "";
  $alert_class = "";

  switch ($submit_val) {
     case 1:
     $submit_msg = "Submit failed. Please try again.";
     $alert_class = "alert alert-danger";
     break;

    case 2:
     $submit_msg = "Submit successfully. ";
     $alert_class = "alert alert-success";
     break;
  }
?>


<div class="<?php echo $alert_class;?>" role="alert">
  <?php echo $submit_msg;?>
</div>

</div><!-- /.container -->

<?php endif;?>


<div class="container mt-4">

<div class="col-12">
<h1>View data</h1>
</div>


<div class="row">

<div class="col-6">

<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="1" checked>
  <label class="form-check-label" for="flexRadioDefault1">
    View all
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="2">
  <label class="form-check-label" for="flexRadioDefault2">
    Countries only
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="3">
  <label class="form-check-label" for="flexRadioDefault2">
    Companies only
  </label>
</div>

</div><!-- /.col -->


<div class="col-6">

<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="1" checked>
  <label class="form-check-label" for="flexRadioDefault1">
    Descending
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="2">
  <label class="form-check-label" for="flexRadioDefault2">
    Ascending
  </label>
</div>

</div><!-- /.col -->


</div><!-- /.row -->
</div><!-- /.container -->


<div class="container mt-4">
<div class="row">

<div class="col-12">

<?php

  $conn = new mysqli("localhost","gfdbu","Start24!","greenfoot_data");
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT type, name, value FROM co2data ORDER BY value DESC";
  $results = $conn->query($sql);

  $conn->close();
?>


<table class="table">

<thead>
<th scope="col">Type</th>
<th scope="col">Name</th>
<th scope="col">Million metric tons per year</th>
</thead>

<tbody>

<?php foreach ($results as $result):?>

<tr>

<?php
  switch($result["type"]) {
    case 1:
      $entry_label = "Country";
      break;

    case 2:
      $entry_label = "Company";
      break;
  }
?>

<td><?php echo $entry_label;?></td>
<td><?php echo $result["name"];?></td>
<td><?php echo $result["value"];?></td>
</tr>

<?php endforeach;?>

</tbody>
</table>

</div> <!-- /.col -->

</div> <!-- /.row-->
</div> <!-- /.container-->

<?php include("./assets/templates/html_footer.php");?>

<script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
