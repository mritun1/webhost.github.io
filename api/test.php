<!DOCTYPE html>
<html>
<body>

<h1>The XMLHttpRequest Object</h1>

<button id="insert" type="button" onclick="Insert()">Insert data</button>
<button type="button" onclick="Update()">Update data</button>
<button type="button" onclick="Delete()">Delete data</button>
<button type="button" onclick="Others()">Delete data</button>


<p id="demo"></p>
 
<script>
$(document).ready(function(){
  $("#insert").click(function(){
    info = [];
    info[0] = 'hi';
    info[1] = 'hello';


    $.ajax({
      type: "POST",
      data: {info:info},
      url: "http://127.0.0.1:8000/api/test2.php",
      success: function(msg){
        //$('.answer').html(msg);
        alert(msg);
      }
    });
  });
});


function Update() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      //document.getElementById("demo").innerHTML = this.responseText;
      alert(this.responseText);
    }
  };
  xhttp.open("POST", "http://127.0.0.1:8000/api/example", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("purpose=Update&id=3&dataname=This is update");
}

function Delete() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      //document.getElementById("demo").innerHTML = this.responseText;
      alert(this.responseText);
    }
  };
  xhttp.open("POST", "http://127.0.0.1:8000/api/example", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("purpose=Delete&id=3");
}

function Others() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      //document.getElementById("demo").innerHTML = this.responseText;
      alert(this.responseText);
    }
  };
  xhttp.open("POST", "http://127.0.0.1:8000/api/example", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("purpose=sdr&id=3");
}
</script>

</body>
</html>
