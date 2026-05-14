const switchButton = document.querySelector("#on-off");
const formWrapper = document.querySelector(".formmain");

switchButton.addEventListener("click", () => {
  formWrapper.classList.toggle("active");
});

const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
const phoneRegex = /^\d+$/;

// ── Native JS butonu ──────────────────────────────────────────────────────────
document.getElementById("btn-js-validate").addEventListener("click", function () {
  let valid = true;

  const isim = document.getElementById("isim");
  const formNameWrapper = document.querySelector(".form-name");
  if (isim.value.trim() === "") {
    formNameWrapper.classList.add("active");
    valid = false;
  } else {
    formNameWrapper.classList.remove("active");
  }

  const soyisim = document.getElementById("soyisim");
  const formSurnameWrapper = document.querySelector(".form-surname");
  if (soyisim.value.trim() === "") {
    formSurnameWrapper.classList.add("active");
    valid = false;
  } else {
    formSurnameWrapper.classList.remove("active");
  }

  const mail = document.getElementById("mail");
  const formMailWrapper = document.querySelector(".form-mail");
  if (mail.value.trim() === "") {
    formMailWrapper.classList.add("active");
    formMailWrapper.classList.remove("active2");
    valid = false;
  } else if (!emailRegex.test(mail.value.trim())) {
    formMailWrapper.classList.remove("active");
    formMailWrapper.classList.add("active2");
    valid = false;
  } else {
    formMailWrapper.classList.remove("active", "active2");
  }

  const telefon = document.getElementById("telefon");
  const formPhoneWrapper = document.querySelector(".form-phone");
  if (telefon.value.trim() === "") {
    formPhoneWrapper.classList.add("active");
    formPhoneWrapper.classList.remove("active2");
    valid = false;
  } else if (!phoneRegex.test(telefon.value.trim())) {
    formPhoneWrapper.classList.remove("active");
    formPhoneWrapper.classList.add("active2");
    valid = false;
  } else {
    formPhoneWrapper.classList.remove("active", "active2");
  }

  const yas = document.getElementById("yas");
  const formAgeWrapper = document.querySelector(".form-age");
  if (yas.value === "") {
    formAgeWrapper.classList.add("active");
    valid = false;
  } else {
    formAgeWrapper.classList.remove("active");
  }

  const gender = document.querySelector('input[name="gender"]:checked');
  const formGenderWrapper = document.querySelector(".form-gender");
  if (!gender) {
    formGenderWrapper.classList.add("active");
    valid = false;
  } else {
    formGenderWrapper.classList.remove("active");
  }

  const mesage = document.getElementById("mesage");
  const formMesageWrapper = document.querySelector(".form-mesage");
  if (mesage.value.trim() === "") {
    formMesageWrapper.classList.add("active");
    valid = false;
  } else {
    formMesageWrapper.classList.remove("active");
  }

  if (valid) {
    document.getElementById("contact-form").submit();
  }
});

// ── Anlık doğrulama ───────────────────────────────────────────────────────────
document.getElementById("isim").addEventListener("input", function () {
  const w = document.querySelector(".form-name");
  this.value.trim() === "" ? w.classList.add("active") : w.classList.remove("active");
});

document.getElementById("soyisim").addEventListener("input", function () {
  const w = document.querySelector(".form-surname");
  this.value.trim() === "" ? w.classList.add("active") : w.classList.remove("active");
});

document.getElementById("mail").addEventListener("input", function () {
  const w = document.querySelector(".form-mail");
  if (this.value.trim() === "") {
    w.classList.add("active");
    w.classList.remove("active2");
  } else if (!emailRegex.test(this.value.trim())) {
    w.classList.remove("active");
    w.classList.add("active2");
  } else {
    w.classList.remove("active", "active2");
  }
});

document.getElementById("telefon").addEventListener("input", function () {
  const w = document.querySelector(".form-phone");
  if (this.value.trim() === "") {
    w.classList.add("active");
    w.classList.remove("active2");
  } else if (!phoneRegex.test(this.value.trim())) {
    w.classList.remove("active");
    w.classList.add("active2");
  } else {
    w.classList.remove("active", "active2");
  }
});

document.getElementById("yas").addEventListener("change", function () {
  const w = document.querySelector(".form-age");
  this.value === "" ? w.classList.add("active") : w.classList.remove("active");
});

document.getElementById("mesage").addEventListener("input", function () {
  const w = document.querySelector(".form-mesage");
  this.value.trim() === "" ? w.classList.add("active") : w.classList.remove("active");
});
