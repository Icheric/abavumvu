<?php
$data = array(
  "provinces" => array(
    array(
      "name" => "Eastern Province",
      "districts" => array(
        array(
          "name" => "Nyagatare",
          "sectors" => array("Nyagatare", "Rwimiyaga", "Bugesera", "Gashora")
        ),
        array(
          "name" => "Ngoma",
          "sectors" => array("Gashanda", "Rwamagana", "Fumbwe")
        )
      )
    ),
    array(
      "name" => "Northern Province",
      "districts" => array(
        array(
          "name" => "Burera",
          "sectors" => array("Bungwe", "Bwisige")
        ),
        array(
          "name" => "Gicumbi",
          "sectors" => array("Bukure", "Base")
        )
      )
    ),
    array(
      "name" => "Western Province",
      "districts" => array(
        array(
          "name" => "Karongi",
          "sectors" => array("Bwishyura", "Gihombo")
        ),
        array(
          "name" => "Rubavu",
          "sectors" => array("Gisenyi", "Nyamyumba")
        )
      )
    )
  )
);

header('Content-Type: application/json');
echo json_encode($data);
?>
