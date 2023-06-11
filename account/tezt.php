<!DOCTYPE html>
<html>
<head>
  <title>Dynamic Selection</title>
</head>
<body>
  <label for="province-select">Select Province:</label>
  <select id="province-select"></select>

  <br><br>

  <label for="district-select">Select District:</label>
  <select id="district-select"></select>

  <script>
    var data = {
      "provinces": [
        {
          "name": "Eastern Province",
          "districts": [
            {
              "name": "Nyagatare",
              "sectors": ["Nyagatare", "Rwimiyaga", "Bugesera", "Gashora"]
            },
            {
              "name": "Ngoma",
              "sectors": ["Gashanda", "Rwamagana", "Fumbwe"]
            }
            // ... add more districts and sectors as needed
          ]
        },
        {
          "name": "Northern Province",
          "districts": [
            {
              "name": "Burera",
              "sectors": ["Bungwe", "Bwisige"]
            },
            {
              "name": "Gicumbi",
              "sectors": ["Bukure", "Base"]
            }
            // ... add more districts and sectors as needed
          ]
        },
        {
          "name": "Western Province",
          "districts": [
            {
              "name": "Karongi",
              "sectors": ["Bwishyura", "Gihombo"]
            },
            {
              "name": "Rubavu",
              "sectors": ["Gisenyi", "Nyamyumba"]
            }
            // ... add more districts and sectors as needed
          ]
        }
        // ... add more provinces as needed
      ]
    };

    var provinceSelect = document.getElementById("province-select");
    var districtSelect = document.getElementById("district-select");

    // Populate the province select element
    data.provinces.forEach(function(province) {
      var option = document.createElement("option");
      option.value = province.name;
      option.text = province.name;
      provinceSelect.appendChild(option);
    });

    // Function to populate the district select element based on the selected province
    function populateDistricts() {
      var selectedProvince = data.provinces.find(function(province) {
        return province.name === provinceSelect.value;
      });

      // Clear existing options
      districtSelect.innerHTML = "";

      // Populate the district select element
      selectedProvince.districts.forEach(function(district) {
        var option = document.createElement("option");
        option.value = district.name;
        option.text = district.name;
        districtSelect.appendChild(option);
      });
    }

    // Event listener to populate the district select element when the province selection changes
    provinceSelect.addEventListener("change", populateDistricts);

    // Initial population of district select element based on the default province selection
    populateDistricts();
  </script>
</body>
</html>
