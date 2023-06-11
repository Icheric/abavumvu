<?php
$province = $_GET['province'];

$data = array(
  "districts" => array()
);

// Add your logic here to fetch the districts based on the selected province
// For this example, we'll return a predefined list of districts for each province

if ($province == "Eastern Province") {
  $data["districts"] = array(
    array(
      "name" => "Nyagatare",
      "sectors" => array("Nyagatare", "Rwimiyaga", "Bugesera", "Gashora")
    ),
    array(
      "name" => "Ngoma",
      "sectors" => array("Gashanda", "Rwamagana", "Fumbwe")
    )
  );
} elseif ($province == "Northern Province") {
  $data["districts"] = array(
    array(
      "name" => "Burera",
      "sectors" => array("Bungwe", "Bwisige")
    ),
    array(
      "name" => "Gicumbi",
      "sectors" => array("Bukure", "Base")
    )
  );
} elseif ($province == "Western Province") {
  $data["districts"] = array(
    array(
      "name" => "Karongi",
      "sectors" => array("Bwishyura", "Gihombo")
    ),
    array(
      "name" => "Rubavu",
      "sectors" => array("Gisenyi", "Nyamyumba")
    )
  );
}

header('Content-Type: application/json');
echo json_encode($data);
?>
