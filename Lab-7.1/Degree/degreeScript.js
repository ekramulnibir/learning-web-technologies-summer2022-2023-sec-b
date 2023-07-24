function checkDegreeSelected() {

    let degreeOptions = document.getElementsByName("degree");
    let selectedDegree = ""; 
    let isChecked = false;
  
    for (let i = 0; i < degreeOptions.length; i++) {
      if (degreeOptions[i].checked) {
        isChecked = true;
        selectedDegree = degreeOptions[i].value;
        break;
      }
    }
  
    if (!isChecked) {
      alert("Please select at least one degree option.");
      return false;
    } 
    else {
      alert("Chosen degree: " + selectedDegree); 
    }
  }
  