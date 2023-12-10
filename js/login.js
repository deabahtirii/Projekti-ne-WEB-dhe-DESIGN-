function validateForm() {
    const username = document.getElementById('username').value.trim();
    const password = document.getElementById('password').value.trim();

    // Basic validation - check if fields are not empty
    if (username === '' || password === '') {
      alert('Please fill in all fields');
      return false;
    }

    // You can add more complex validation here if needed

    return true; // Allow form submission
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

    // Additional validation logic can be added here

    return true; // Allow form submission
  }
