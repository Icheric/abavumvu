<?php
//fetch.php
include "include/connectdb.php";
if(isset($_POST["action"]))
{
 $output = '';
 if($_POST["action"] == "country")
 {
  $query = "SELECT state FROM country_state_city WHERE country = '".$_POST["query"]."' GROUP BY state";
  $result = mysqli_query($con, $query);
  $output .= '<option value="">Select State</option>';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '<option value="'.$row["state"].'">'.$row["state"].'</option>';
  }
 }
 if($_POST["action"] == "state")
 {
  $query = "SELECT city FROM country_state_city WHERE state = '".$_POST["query"]."'";
  $result = mysqli_query($con, $query);
  $output .= '<option value="">Select City</option>';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '<option value="'.$row["city"].'">'.$row["city"].'</option>';
  }
 }
 echo $output;
}
?>