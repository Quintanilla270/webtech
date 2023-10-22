
function getDataFromForm() {
  var f_name = document.querySelector('input[name="fname"]').value;
  var l_name = document.querySelector('input[name="lname"]').value;

  runAjax(f_name, l_name);
  alert("it worked!");
}

function runAjax(first_name, last_name) {
  var xhr = new XMLHttpRequest();
  xhr.open('GET', `./ajax.php?fname=${fname}&lname=${lname}`, true);
  xhr.onload = function() {
    if(this.status === 200) {
      document.getElementById("responseString").innerText = this.responseText;
      alert('LOADED')
    }
  }
  xhr.send();
}
