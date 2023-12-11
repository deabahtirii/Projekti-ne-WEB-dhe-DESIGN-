
function validateForm() {
    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value.trim();
    const agree = document.getElementById('agree').checked;

    if (email === '' || password === '') {
      alert('Please fill in all fields');
      return false;
    }

    if (!agree) {
      alert('Please agree to the terms of service');
      return false;
    }


    return true; 
  }
