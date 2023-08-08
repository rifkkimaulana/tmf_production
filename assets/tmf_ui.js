// Exclude Episode
$(document).ready(function () {
  var table = $("#example2").DataTable({
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
});

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

// Exclude Create artikel admin
$(document).ready(function () {
  $(".summernote").summernote({
    height: 300,
    toolbar: [
      ["style", ["bold", "italic", "underline", "clear"]],
      ["para", ["ul", "ol"]],
      ["insert", ["link", "picture", "video"]],
      ["view", ["fullscreen", "codeview"]],
    ],
  });
});
function previewImage(event) {
  const imagePreviewElement = document.getElementById("imagePreview");
  const imageFile = event.target.files[0];
  if (imageFile) {
    const reader = new FileReader();
    reader.onload = function () {
      imagePreviewElement.src = reader.result;
    };
    reader.readAsDataURL(imageFile);
    imagePreviewElement.style.display = "block";
  } else {
    imagePreviewElement.src = "#";
    imagePreviewElement.style.display = "none";
  }
}

let selectedTagsArray = [];

function addTag() {
  const inputElement = document.getElementById("tagInput");
  const tagNames = inputElement.value.split(",").map((tag) => tag.trim());

  if (tagNames.length > 0 && tagNames[0] !== "") {
    const tagContainerElement = document.getElementById("tagList");

    tagNames.forEach((tagName) => {
      const isTagExists = Array.from(tagContainerElement.children).some(
        (tagElement) => tagElement.textContent === tagName
      );

      if (!isTagExists) {
        const newTagElement = document.createElement("span");
        newTagElement.textContent = tagName;
        newTagElement.classList.add("tag");

        const deleteIcon = document.createElement("i");
        deleteIcon.classList.add("fas", "fa-times");
        deleteIcon.addEventListener("click", function () {
          tagContainerElement.removeChild(newTagElement);
          selectedTagsArray = selectedTagsArray.filter(
            (tag) => tag !== tagName
          );
          updateSelectedTags();
        });

        newTagElement.appendChild(deleteIcon);
        tagContainerElement.appendChild(newTagElement);

        if (!selectedTagsArray.includes(tagName)) {
          selectedTagsArray.push(tagName);
        }

        updateSelectedTags();
      }
    });

    inputElement.value = "";
  }
}

function updateSelectedTags() {
  const selectedTagInput = document.getElementById("selectedTagInput");
  selectedTagInput.value = selectedTagsArray.join(",");
}

function handleTagClick(tagName) {
  const tagInputValue = document.getElementById("tagInput");
  tagInputValue.value = tagName;
}

function toggleSavedTags() {
  const savedDirectorList = document.getElementById("savedTagList");
  savedDirectorList.style.display =
    savedDirectorList.style.display === "none" ? "block" : "none";
}

function addCategory() {
  let nama_kategori = document.getElementById("newCategoryInput").value;

  let xhr = new XMLHttpRequest();

  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let categoryContainer = document.getElementById("categoryContainer");
        categoryContainer.innerHTML = xhr.responseText;
        document.getElementById("newCategoryInput").value = "";

        updateSelectedCategories();
      } else {
        console.error("Gagal menambahkan kategori");
      }
    }
  };

  let data = "nama_kategori=" + encodeURIComponent(nama_kategori);

  xhr.open("POST", "artikel/proses_create_kategori.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.send(data);
}

function updateSelectedCategories() {
  var checkboxes = document.querySelectorAll(
    '#categoryContainer input[type="checkbox"]:checked'
  );

  var selectedCategoriesArray = [];

  for (var i = 0; i < checkboxes.length; i++) {
    selectedCategoriesArray.push(checkboxes[i].value);
  }

  var selectedCategoriesString = selectedCategoriesArray.join(",");

  document.getElementById("selectedCategoriesInput").value =
    selectedCategoriesString;
}

var checkboxes = document.querySelectorAll(
  '#categoryContainer input[type="checkbox"]'
);
for (var i = 0; i < checkboxes.length; i++) {
  checkboxes[i].addEventListener("change", updateSelectedCategories);
}

updateSelectedCategories();

// Exclude index artikel admin
$(document).ready(function () {
  var table = $("#example2").DataTable({
    paging: true,
    lengthChange: true,
    searching: true,
    ordering: true,
    info: true,
    autoWidth: false,
    language: {
      lengthMenu: "_MENU_",
      zeroRecords: "Tidak ada data yang ditemukan",
      info: "Menampilkan _START_ hingga _END_ dari total _TOTAL_ entri",
      infoEmpty: "Menampilkan 0 hingga 0 dari 0 entri",
      infoFiltered: "(difilter dari total _MAX_ entri)",
      search: "Cari:",
      paginate: {
        first: "Awal",
        last: "Akhir",
        next: "Berikutnya",
        previous: "Sebelumnya",
      },
    },
    lengthMenu: [5, 10, 50, 100],
    pageLength: 5,
  });

  $("#selectLength").on("change", function () {
    table.page.len($(this).val()).draw();
  });
});

// Exclude index Kategori Admin
$(document).ready(function () {
  var table = $("#example2").DataTable({
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

  $("#checkAll").on("change", function () {
    $('input[name="selected_kategori_artikel[]"]').prop(
      "checked",
      this.checked
    );
  });

  $('input[name="selected_kategori_artikel[]"]').on("change", function () {
    if (
      $('input[name="selected_kategori_artikel[]"]:checked').length ===
      $('input[name="selected_kategori_artikel[]"]').length
    ) {
      $("#checkAll").prop("checked", true);
    } else {
      $("#checkAll").prop("checked", false);
    }
  });
});

// Exclude index Tag artikel admin
$(document).ready(function () {
  var table = $("#example2").DataTable({
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

  $("#checkAll").on("change", function () {
    $('input[name="selected_tag_artikel[]"]').prop("checked", this.checked);
  });

  $('input[name="selected_tag_artikel[]"]').on("change", function () {
    if (
      $('input[name="selected_tag_artikel[]"]:checked').length ===
      $('input[name="selected_tag_artikel[]"]').length
    ) {
      $("#checkAll").prop("checked", true);
    } else {
      $("#checkAll").prop("checked", false);
    }
  });
});

// Exclude update artikel admin
$(document).ready(function () {
  $(".summernote").summernote({
    height: 300,
    toolbar: [
      ["style", ["bold", "italic", "underline", "clear"]],
      ["para", ["ul", "ol"]],
      ["insert", ["link", "picture", "video"]],
      ["view", ["fullscreen", "codeview"]],
    ],
  });
});

function addCategory() {
  let nama_kategori = document.getElementById("newCategoryInput").value;

  let xhr = new XMLHttpRequest();

  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let categoryContainer = document.getElementById("categoryContainer");
        categoryContainer.innerHTML = xhr.responseText;

        document.getElementById("newCategoryInput").value = "";
      } else {
        console.error("Gagal menambahkan kategori");
      }
    }
  };

  let data = "nama_kategori=" + encodeURIComponent(nama_kategori);

  xhr.open("POST", "artikel/proses_create_kategori.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.send(data);
}

function updateSelectedCategories() {
  var checkboxes = document.querySelectorAll(
    '#categoryContainer input[type="checkbox"]:checked'
  );

  var selectedCategoriesArray = [];

  for (var i = 0; i < checkboxes.length; i++) {
    selectedCategoriesArray.push(checkboxes[i].value);
  }

  var selectedCategoriesString = selectedCategoriesArray.join(",");

  document.getElementById("selectedCategoriesInput").value =
    selectedCategoriesString;
}

var checkboxes = document.querySelectorAll(
  '#categoryContainer input[type="checkbox"]'
);
for (var i = 0; i < checkboxes.length; i++) {
  checkboxes[i].addEventListener("change", updateSelectedCategories);
}

updateSelectedCategories();

//let selectedTagsArray = [];

function addTag() {
  const inputElement = document.getElementById("tagInput");
  const tagNames = inputElement.value.split(",").map((tag) => tag.trim());

  if (tagNames.length > 0 && tagNames[0] !== "") {
    const tagContainerElement = document.getElementById("tagList");

    tagNames.forEach((tagName) => {
      const isTagExists = Array.from(tagContainerElement.children).some(
        (tagElement) => tagElement.textContent === tagName
      );

      if (!isTagExists) {
        const newTagElement = document.createElement("span");
        newTagElement.textContent = tagName;
        newTagElement.classList.add("tag");

        const deleteIcon = document.createElement("i");
        deleteIcon.classList.add("fas", "fa-times");
        deleteIcon.addEventListener("click", function () {
          tagContainerElement.removeChild(newTagElement);
          selectedTagsArray = selectedTagsArray.filter(
            (tag) => tag !== tagName
          );
          updateSelectedTags();
        });

        newTagElement.appendChild(deleteIcon);
        tagContainerElement.appendChild(newTagElement);

        if (!selectedTagsArray.includes(tagName)) {
          selectedTagsArray.push(tagName);
        }

        updateSelectedTags();
      }
    });

    inputElement.value = "";
  }
}
function removeTag(tagName) {
  const tagContainerElement = document.getElementById("tagList");
  const tags = tagContainerElement.getElementsByClassName("tag");

  for (let i = 0; i < tags.length; i++) {
    if (tags[i].textContent === tagName) {
      tagContainerElement.removeChild(tags[i]);
      break;
    }
  }

  selectedTagsArray = selectedTagsArray.filter((tag) => tag !== tagName);
  updateSelectedTags();
}
function updateSelectedTags() {
  const selectedTagInput = document.getElementById("selectedTagInput");
  selectedTagInput.value = selectedTagsArray.join(",");
}

function handleTagClick(tagName) {
  const tagInputValue = document.getElementById("tagInput");
  tagInputValue.value = tagName;
}

function toggleSavedTags() {
  const savedDirectorList = document.getElementById("savedTagList");
  savedDirectorList.style.display =
    savedDirectorList.style.display === "none" ? "block" : "none";
}

function previewImage(event) {
  const imagePreviewElement = document.getElementById("imagePreview");
  const defaultImageElement = document.getElementById("defaultImage");
  const imageFile = event.target.files[0];

  if (imageFile) {
    const reader = new FileReader();
    reader.onload = function () {
      imagePreviewElement.src = reader.result;
      imagePreviewElement.style.display = "block";
      defaultImageElement.style.display = "none";
    };
    reader.readAsDataURL(imageFile);
  } else {
    imagePreviewElement.style.display = "none";
    defaultImageElement.style.display = "block";
  }
}

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
