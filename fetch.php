<?php
$province = $_GET['province'];

$data = array(
  "districts" => array()
);

if ($province == "Eastern Province") {
  $data["districts"] = array(
    array(
      "name" => "Nyagatare",
      "sectors" => ["Nyagatare", "Rwimiyaga", "Bugesera", "Gashora"]
    ),
    array(
      "name" => "Ngoma",
      "sectors" => ["Gashanda", "Rwamagana", "Fumbwe"]
    )
    // ... add more districts and sectors as needed
  );
} elseif ($province == "Northern Province") {
  $data["districts"] = array(
    array(
      "name" => "Burera",
      "sectors" => ["Bungwe", "Bwisige"]
    ),
    array(
      "name" => "Gicumbi",
      "sectors" => ["Bukure", "Base"]
    )
    // ... add more districts and sectors as needed
  );
} elseif ($province == "Western Province") {
  $data["districts"] = array(
    array(
      "name" => "Karongi",
      "sectors" => ["Bwishyura", "Gihombo"]
    ),
    array(
      "name" => "Rubavu",
      "sectors" => ["Gisenyi", "Nyamyumba"]
    )
    // ... add more districts and sectors as needed
  );
}

header('Content-Type: application/json');
echo json_encode($data);
?>
