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
