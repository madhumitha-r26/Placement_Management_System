  const passwordInput = document.getElementById('password');
  const showPasswordIcon = document.getElementById('show-password');

  showPasswordIcon.addEventListener('click', function() {
    if (passwordInput.type === 'password') {
      passwordInput.type = 'text';
      this.classList.remove("fa-eye");
      this.classList.add("fa-eye-slash");
    } else {
      passwordInput.type = 'password';
      this.classList.remove("fa-eye-slash");
      this.classList.add("fa-eye");
    }
  });
  
