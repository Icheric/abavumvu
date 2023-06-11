<?php
//fetch.php
include "connectdb.php";
if(isset($_POST["action"]))
{

 $output = '';
 if($_POST["action"] == "country")
 {
  $query = "SELECT state FROM country_state_city WHERE country = '".$_POST["query"]."' GROUP BY state";
  $result = mysqli_query($con, $query);
  $output .= '<option value="">Select Distict</option>';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '<option value="'.$row["state"].'">'.$row["state"].'</option>';
  }
 }

 echo $output;
}
?>