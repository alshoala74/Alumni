// get all input fields
const inputs = document.querySelectorAll('input');

// for each input field, add an event listener to check if it's empty
inputs.forEach(input => {
  input.addEventListener('input', () => {
    // if the input field is not empty, hide the label
    if (input.value !== '') {
      input.nextElementSibling.style.display = 'none';
    } else {
      // otherwise, show the label
      input.nextElementSibling.style.display = 'block';
    }
  });
});

function validation() {  
  var id = document.f1.email.value;  
  var ps = document.f1.password.value;  
  if (id.length == "" && ps.length == "") {  
    alert("User Name and Password fields are empty");  
    return false;  
  } else {  
    if (id.length == "") {  
      alert("Email is empty");  
      return false;  
    }   
    if (ps.length == "") {  
      alert("Password field is empty");  
      return false;  
    }  
  }                             
}