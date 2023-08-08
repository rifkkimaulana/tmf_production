// Exclude Episode

// Exclude Dashboard admin
$(document).ready(function () {
  $("#tanggalPicker").datetimepicker({
    format: "YYYY-MM-DD",
  });
});

$(function () {
  $(".datepicker").datepicker({
    dateFormat: "yy-mm-dd",
    changeMonth: true,
    changeYear: true,
    showButtonPanel: true,
  });
});

$(document).ready(function () {
  $("#tanggal_rilis").datetimepicker({
    format: "DD MMM YYYY",
    icons: {
      time: "fas fa-clock",
      date: "fas fa-calendar-alt",
      up: "fas fa-chevron-up",
      down: "fas fa-chevron-down",
      previous: "fas fa-chevron-left",
      next: "fas fa-chevron-right",
      today: "fas fa-calendar-check",
      clear: "fas fa-trash",
      close: "fas fa-times",
    },
  });

  $("#tahun_rilis").datetimepicker({
    format: "YYYY",
    viewMode: "years",
    icons: {
      time: "fas fa-clock",
      date: "fas fa-calendar-alt",
      up: "fas fa-chevron-up",
      down: "fas fa-chevron-down",
      previous: "fas fa-chevron-left",
      next: "fas fa-chevron-right",
      today: "fas fa-calendar-check",
      clear: "fas fa-trash",
      close: "fas fa-times",
    },
  });
});

$(document).ready(function () {
  $("#mulaiTanggalPicker").datetimepicker({
    format: "YYYY-MM-DD",
    icons: {
      time: "fa fa-clock",
      date: "fa fa-calendar",
      up: "fa fa-chevron-up",
      down: "fa fa-chevron-down",
      previous: "fa fa-chevron-left",
      next: "fa fa-chevron-right",
      today: "fa fa-calendar-check-o",
      clear: "fa fa-trash",
      close: "fa fa-times",
    },
  });

  $("#sampaiTanggalPicker").datetimepicker({
    format: "YYYY-MM-DD",
    icons: {
      time: "fa fa-clock",
      date: "fa fa-calendar",
      up: "fa fa-chevron-up",
      down: "fa fa-chevron-down",
      previous: "fa fa-chevron-left",
      next: "fa fa-chevron-right",
      today: "fa fa-calendar-check-o",
      clear: "fa fa-trash",
      close: "fa fa-times",
    },
  });
});

document
  .getElementById("laporanForm")
  .addEventListener("submit", function (event) {
    event.preventDefault();

    var form = this;
    var urlParams = new URLSearchParams(window.location.search);

    var tanggalDari = form.querySelector('input[name="tanggal_dari"]').value;
    var tanggalSampai = form.querySelector(
      'input[name="tanggal_sampai"]'
    ).value;
    var kategori = form.querySelector('select[name="kategori"]').value;

    urlParams.set("page", "laporan_keuangan");
    urlParams.set("tanggal_dari", tanggalDari);
    urlParams.set("tanggal_sampai", tanggalSampai);
    urlParams.set("kategori", kategori);

    window.location.href =
      window.location.pathname + "?" + urlParams.toString();
  });

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
function hideSkeletonScreen() {
  document.getElementById("skeletonScreen").style.display = "none";
  document.getElementById("content").style.display = "block";
}

document.addEventListener("DOMContentLoaded", function () {
  setTimeout(function () {
    hideSkeletonScreen();
  }, 300);
});
