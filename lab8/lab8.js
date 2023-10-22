
function getDataFromForm() {
  var fname = document.querySelector('input[name="fname"]');
  var lname = document.querySelector('input[name="lname"]');

  runAjax(fname, lname);
  alert("it worked!");
}

function runAjax(first_name, last_name) {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    if(this.status === 200) {
      document.getElementById("responseString").innerHTML = this.responseText;
      alert('LOADED')
    }
  }
  xhttp.open('GET', 'ajax.php?fname=' + first_name + '&lname=' + last_name, true);
  xhttp.send();
}
