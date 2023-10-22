
function getDataFromForm() {
  const fname = document.querySelector('input[name="fname"]').value;
  const lname = document.querySelector('input[name="lname"]').value;
  
  runAjax(f_name, l_name);
  alert("it worked!");
}

function runAjax(first_name, last_name) {
  var xhr = new XMLHttpRequest();
  xhr.open('GET', `./ajax.php?fname=${fname}&lame=${lname}`, true);
  xhr.onload = function() {
    if(xhr.status === 200) {
      document.getElementById("responseString").innerHTML = xhttp.responseText;
      alert('LOADED')
    }
  }
  xhr.send();
}
