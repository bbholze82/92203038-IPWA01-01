<?php
  $page_title = "Submit data";
?>


<?php include("./assets/snippets/html_head.php");?>

<body>

<?php include("./assets/snippets/html_navbar.php");?>


<div class="container mt-4">
<div class="row">


<div class="col-12">

<h1>Submit data</h1>

<?php
  if ((!is_null($_GET["type"])) && (!is_null($_GET["name"])) && (!is_null($_GET["value"]))):
?>

<?php
  $subm_type = htmlspecialchars($_GET["type"]);
  $subm_name = htmlspecialchars($_GET["name"]);
  $subm_value = htmlspecialchars($_GET["value"]);
?>

<?php

  $conn = new mysqli("localhost","gfdbu","Start24!","greenfoot_data");
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "INSERT INTO co2data (type, name, value) VALUES ({$subm_type},'{$subm_name}',{$subm_value})";
  echo $sql;

  if ($conn->query($sql) === TRUE) {
    header("Location: ./view.php?subresult=2");
  } else {
    header("Location: ./view.php?subresult=1");
  }
?>

<?php endif;?>


 <form>
  <div class="form-row">

   <div class="form-check">
     <input class="form-check-input" type="radio" name="type" id="flexRadioDefault1" value="1" checked>
     <label class="form-check-label" for="flexRadioDefault1">
       Country
     </label>
   </div>

   <div class="form-check">
     <input class="form-check-input" type="radio" name="type" id="flexRadioDefault1" value="1">
     <label class="form-check-label" for="flexRadioDefault1">
       Company
     </label>
   </div>

    <div class="form-group col-md-3 mb-2">
      <label for="inputCity">Name</label>
      <input type="text" class="form-control" id="inputCity" name="name">
    </div>

    <div class="form-group col-md-3 mb-2">
      <label for="inputZip">Million metric tons per year</label>
      <input type="text" class="form-control" id="inputZip" name="value">
    </div>

  </div>

  <button type="submit" class="btn btn-success">Submit</button>

</form>


</div> <!-- /.col -->

</div> <!-- /.row-->
</div> <!-- /.container-->

<div class="b-example-divider"></div>

<?php include("./assets/snippets/html_footer.php");?>

</body>
</html>
