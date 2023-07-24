function checkBloodGroupSelected() {

    let bloodGroupSelect = document.getElementsByName("bg")[0];
    let selectedBloodGroup = bloodGroupSelect.value;
  
    if (selectedBloodGroup === "") {
      alert("Please select a blood group.");
      return;
    } else {
      alert("Selected blood group: " + selectedBloodGroup);
      return; 
    }
  }
  