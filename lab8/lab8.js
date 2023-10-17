
function getDataFromForm() {
  var xhr = new XMLHttpRequest;
  xhr.open('GET', 'index.html', true);
  xhr.send('search=arduino');
  xhr.onload = function() {
    if(xhr.status === 200) {
      alert('LOADED')
    }
  }
  runAjax(f_name, l_name);
  alert("it worked!");
}

function runAjax(first_name, last_name) {
  $.
}
