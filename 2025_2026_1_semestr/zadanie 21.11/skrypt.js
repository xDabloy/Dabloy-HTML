let darkmode = false;
let button = document.getElementById("toogle");

button.addEventListener("click", function () {
  let mybody = document.getElementsByTagName("body")[0];
  darkmode = !darkmode;
  mybody.classList.toggle("dark-mode");
});

button.addEventListener("click", function () {
  if (button.textContent = darkmode) {
    button.textContent = "White-mode"
  } else {
    button.textContent = "Dark-mode"
  };
});
