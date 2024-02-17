<?php

  $work_sum = 0;

  $conn = new mysqli("localhost","gfdbu","Start24!","greenfoot_data");

  $sql = "SELECT type, name, value FROM co2data";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
      $work_sum += $row["value"];
    }

  }

  $conn->close();
?>

<?php
  $total_sum_carbon = $work_sum;
?>
