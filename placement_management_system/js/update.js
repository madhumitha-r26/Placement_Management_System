const passwordInput1 = document.getElementById('password1');
const passwordInput2 = document.getElementById('password2');
const showPasswordIcon1 = document.getElementById('show-password1');
const showPasswordIcon2 = document.getElementById('show-password2');

showPasswordIcon1.addEventListener ('click', function() {
  if (passwordInput1.type === 'password') {
    passwordInput1.type = 'text';
    this.classList.remove("fa-eye");
    this.classList.add("fa-eye-slash");
  } else {
    passwordInput1.type = 'password';
    this.classList.remove("fa-eye-slash");
    this.classList.add("fa-eye");
  }
});

showPasswordIcon2.addEventListener('click', function() {
  if (passwordInput2.type === 'password') {
    passwordInput2.type = 'text';
    this.classList.remove("fa-eye");
    this.classList.add("fa-eye-slash");
  } else {
    passwordInput2.type = 'password';
    this.classList.remove("fa-eye-slash");
    this.classList.add("fa-eye");
  }
});
