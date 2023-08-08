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

// Exclude Create artikel admin

// Exclude index artikel admin

// Exclude index Kategori Admin

// Exclude index Tag artikel admin artikel

// Exclude update artikel admin

// Exclude index users - datatable standar
$(document).ready(function () {
  var table = $("#tmf_datatable").DataTable({
    paging: true,
    lengthChange: true,
    searching: true,
    ordering: true,
    info: true,
    autoWidth: false,
    language: {
      lengthMenu: "_MENU_",
      zeroRecords: "No data found",
      info: "Showing _START_ to _END_ of _TOTAL_ entries",
      infoEmpty: "Showing 0 to 0 of 0 entries",
      infoFiltered: "(filtered from _MAX_ total entries)",
      search: "Cari:",
      paginate: {
        first: "Start",
        last: "End",
        next: "Next",
        previous: "Previous",
      },
    },
    lengthMenu: [5, 10, 50, 100],
    pageLength: 5,
  });

  $("#selectLength").on("change", function () {
    table.page.len($(this).val()).draw();
  });

  // for selected genre
  $("#checkAll").on("change", function () {
    $('input[name="selected_genre[]"]').prop("checked", this.checked);
  });

  $('input[name="selected_genre[]"]').on("change", function () {
    if (
      $('input[name="selected_genre[]"]:checked').length ===
      $('input[name="selected_genre[]"]').length
    ) {
      $("#checkAll").prop("checked", true);
    } else {
      $("#checkAll").prop("checked", false);
    }
  });

  // for selected network
  $("#checkAll").on("change", function () {
    $('input[name="selected_network[]"]').prop("checked", this.checked);
  });

  $('input[name="selected_network[]"]').on("change", function () {
    if (
      $('input[name="selected_network[]"]:checked').length ===
      $('input[name="selected_network[]"]').length
    ) {
      $("#checkAll").prop("checked", true);
    } else {
      $("#checkAll").prop("checked", false);
    }
  });

  //for selected quality
  $("#checkAll").on("change", function () {
    $('input[name="selected_quality[]"]').prop("checked", this.checked);
  });

  $('input[name="selected_quality[]"]').on("change", function () {
    if (
      $('input[name="selected_quality[]"]:checked').length ===
      $('input[name="selected_quality[]"]').length
    ) {
      $("#checkAll").prop("checked", true);
    } else {
      $("#checkAll").prop("checked", false);
    }
  });

  //for selected country
  $("#checkAll").on("change", function () {
    $('input[name="selected_country[]"]').prop("checked", this.checked);
  });

  $('input[name="selected_country[]"]').on("change", function () {
    if (
      $('input[name="selected_country[]"]:checked').length ===
      $('input[name="selected_country[]"]').length
    ) {
      $("#checkAll").prop("checked", true);
    } else {
      $("#checkAll").prop("checked", false);
    }
  });
});

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
