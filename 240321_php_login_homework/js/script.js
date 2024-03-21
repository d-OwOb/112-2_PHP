function PassTypeToggle() {
  const input = document.getElementById("pass-input");
  if (input.type === "password") {
    input.type = "text";
  } else {
    input.type = "password";
  }

  const btn = document.getElementById("passCtrl");
  btn.classList.toggle("visable");
}

/////////////////////////////////////////////////////////////////

const btn = document.getElementById("passCtrl");
btn.addEventListener("click", (e) => {
  PassTypeToggle();
});
