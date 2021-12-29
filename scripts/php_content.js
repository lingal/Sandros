$(document).ready(function () {
  $("#home").click(function () {
    $('.main-content').load('home.php');
  });
  $("#upload").click(function () {
    $('.main-content').load('/php/templates/upload-form.php');
  });
  $("#creditors").click(function () {
    $('.main-content').load('/php/templates/creditors.php');
  });
  $("#debtors").click(function () {
    $('.main-content').load('/php/templates/debtors.php');
  });

  $("#test").click(function () {
    $('.main-content').load('/php/templates/debtors.php');
  });
});
