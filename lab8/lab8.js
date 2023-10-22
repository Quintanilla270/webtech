
function getDataFromForm() {
  var f_name = document.querySelector('input[name="fname"]');
  var l_name = document.querySelector('input[name="lname"]');

  runAjax(f_name, l_name);
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
  xhttp.open('GET', './ajax.php?fname=${fname}&lname=${lname}', true);
  xhttp.send();
}
