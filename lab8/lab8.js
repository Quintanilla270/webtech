
function getDataFromForm() {
  const form = document.getElementById('ajaxCall');
  const f_name = form.elements['fname'];
  const l_name = form.elements['lname'];
  runAjax(f_name, l_name);
  alert("it worked!");
}

function runAjax(first_name, last_name) {
}
