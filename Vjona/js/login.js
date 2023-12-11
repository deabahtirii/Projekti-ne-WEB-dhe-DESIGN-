function validateForm() {
    const username = document.getElementById('username').value.trim();
    const password = document.getElementById('password').value.trim();

    // Basic validation 
    if (username === '' || password === '') {
      alert('Please fill in all fields');
      return false;
    }


    return true; 
  }

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
