let LoginForm = document.getElementById("login-form-id");
let RegisterForm = document.getElementById("register-form-id");
let Indicator = document.getElementById("login-register-indicator");
let ForgotPassword = document.getElementById("forgot-password-id");

function register() {
  RegisterForm.style.transform = "translateX(-400px)";
  LoginForm.style.transform = "translateX(-400px)";
  Indicator.style.transform = "translateX(180px)";
  ForgotPassword.style.transform = "translateX(-400px)";
}

function login() {
  RegisterForm.style.transform = "translateX(0px)";
  LoginForm.style.transform = "translateX(0px)";
  Indicator.style.transform = "translateX(0px)";
  ForgotPassword.style.transform = "translateX(0px)";
}
