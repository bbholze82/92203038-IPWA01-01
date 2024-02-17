<?php
  $page_title = "View data";
?>

<?php include("./assets/snippets/html_head.php");?>

<body>

<?php include("./assets/snippets/html_navbar.php");?>

<?php if (!is_null($_GET["subresult"])):?>

<div class="container mt-4">

<?php
  $submit_val = intval($_GET["subresult"]);

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

<div class="col-4">

<form>

<div class="form-check">
  <input class="form-check-input" type="radio" name="filter" id="flexRadioDefault1" value="3" checked>
  <label class="form-check-label" for="flexRadioDefault1">
    View all
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="filter" id="flexRadioDefault2" value="1">
  <label class="form-check-label" for="flexRadioDefault2">
    Countries only
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="filter" id="flexRadioDefault3" value="2">
  <label class="form-check-label" for="flexRadioDefault2">
    Companies only
  </label>
</div>

</div><!-- /.col -->


<div class="col-4">

<div class="form-check">
  <input class="form-check-input" type="radio" name="sort" id="flexRadioDefault1" value="1" checked>
  <label class="form-check-label" for="flexRadioDefault1">
    Descending
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="sort" id="flexRadioDefault2" value="2">
  <label class="form-check-label" for="flexRadioDefault2">
    Ascending
  </label>
</div>

</div><!-- /.col -->

<div class="col-4">
  <button type="submit" class="btn btn-success">Reload</button>
</form>

</div><!-- /.col -->


</div><!-- /.row -->
</div><!-- /.container -->


<div class="container mt-4">
<div class="row">

<div class="col-12">

<?php
  $sql = "";
  $conn = new mysqli("localhost","gfdbu","Start24!","greenfoot_data");

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


  $sub_filter_val = 3;
  $sub_sort_val = 1;

  if(!is_null($_GET["filter"])) {
    $sub_filter_val = intval(htmlspecialchars($_GET["filter"]));
  }

  if(!is_null($_GET["sort"])) {
    $sub_sort_val = intval(htmlspecialchars($_GET["sort"]));
  }

  // building sql query

  switch($sub_filter_val) {

    case 1:
            $sql = "SELECT type, name, value FROM co2data WHERE type=1";
            break;
    case 2:
            $sql = "SELECT type, name, value FROM co2data WHERE type=2";
            break;
    case 3:
            $sql = "SELECT type, name, value FROM co2data WHERE type=1 OR type=2";
            break;
  }


  switch($sub_sort_val) {

    case 1:
            $sql = $sql .  " ORDER BY value DESC";
            break;
    case 2:
            $sql = $sql .  " ORDER BY value ASC";
            break;
  }

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

<?php include("./assets/snippets/html_footer.php");?>

</body>
</html>
