function checkGenderSelected() {
    
    let genderOptions = document.getElementsByName("gender");
    let selectedGender = "";
  
    for (let i = 0; i < genderOptions.length; i++) {
      if (genderOptions[i].checked) {
        selectedGender = genderOptions[i].value;
        break;
      }
    }
  
    if (selectedGender === "") {
      alert("Please select at least one gender option.");
      return;
    } 
    else {
      alert("Selected gender: " + selectedGender);
      return;
    }
  }