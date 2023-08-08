// Exclude Episode

// Exclude Dashboard admin

// Exclude Create artikel admin

// Exclude index artikel admin

// Exclude index Kategori Admin

// Exclude index Tag artikel admin artikel

// Exclude update artikel admin

//Dark Mode Script from button navbar admin
var darkModeEnabled = false;

if (localStorage.getItem("darkModeEnabled") === "true") {
  darkModeEnabled = true;
}

function toggleDarkMode() {
  var icon = document.getElementById("dark-mode-icon");
  var body = document.body;

  if (darkModeEnabled) {
    icon.classList.remove("fa-moon");
    icon.classList.add("fa-sun");
    body.classList.remove("dark-mode");
    localStorage.setItem("darkModeEnabled", "false");
    darkModeEnabled = false;
  } else {
    icon.classList.remove("fa-sun");
    icon.classList.add("fa-moon");
    body.classList.add("dark-mode");
    localStorage.setItem("darkModeEnabled", "true");
    darkModeEnabled = true;
  }
}

if (darkModeEnabled) {
  document.getElementById("dark-mode-icon").classList.add("fa-moon");
  document.body.classList.add("dark-mode");
}
document
  .getElementById("dark-mode-toggle")
  .addEventListener("click", toggleDarkMode);

// Exclude skeleton ui for main content id
