function showPassword() {
  const input = document.getElementById("form-password");
  input.type = input.type === "password" ? "text" : "password";
}

document.querySelector(".login-form").addEventListener("submit", function (e) {
  const email    = document.getElementById("form-mail").value.trim();
  const password = document.getElementById("form-password").value.trim();
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  let error = "";
  if (!email) {
    error = "E-posta alanı boş bırakılamaz.";
  } else if (!emailRegex.test(email)) {
    error = "Geçerli bir e-posta formatı giriniz (örn: b2412100001@sakarya.edu.tr).";
  } else if (!password) {
    error = "Şifre alanı boş bırakılamaz.";
  }

  if (error) {
    e.preventDefault();
    let errorEl = document.getElementById("login-error");
    if (!errorEl) {
      errorEl = document.createElement("p");
      errorEl.id = "login-error";
      errorEl.style.cssText = "color:red; font-size:13px; margin-top:-10px !important;";
      document.querySelector(".form-buttons").insertAdjacentElement("beforebegin", errorEl);
    }
    errorEl.textContent = error;
  }
});
