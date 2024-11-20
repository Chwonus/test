<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc="
  crossorigin="anonymous"></script>
    <title>ESP32-CAM Captured Photo Gallery</title>
  </head>
  <body style="background-color:#202125;" id="myESP32CAMPhotos">
    
    <script>
    var totalphotos = 0;
    var last_totalphotos = 0;
    
    loadPhotos();
    
    var timer_1 = setInterval(myTimer_1, 2000);
    
    function myTimer_1() {
      getTotalPhotos();
      if(last_totalphotos != totalphotos) {
        last_totalphotos = totalphotos;
        
        loadPhotos();
      }
    }
    
    function getTotalPhotos() {
      if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
      } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          totalphotos = this.responseText;
        }
      };
      xmlhttp.open("POST","CountImageFile.php",true);
      xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xmlhttp.send("cmd=GTP");
    }
    
    function loadPhotos() {
      if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
      } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("myESP32CAMPhotos").innerHTML = this.responseText;
        }
      };
      xmlhttp.open("GET","loadPhotos.php",true);
      xmlhttp.send();
    }
    </script>
  </body>
</html>
