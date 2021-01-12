<!DOCTYPE html>
<html>

<head>
  <title>W3.CSS</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" src="./js/datePlay.js"></script>
  <script type="text/javascript" src="./js/jquery-1.6.1.min.js"></script>

  <!--
  <script type="text/javascript">
    $(document).ready(function(){
      var simple = jojo();
      document.getElementById("nick").innerHTML = simple;
    });


  </script>
  -->
  <style>

    body {background-color: #778899;}

  </style>

</head>

<body>
  <!-- Sidebar -->
  <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
    <button class="w3-bar-item w3-button w3-large w3-border-bottom"
    onclick="w3_close()">Close &times;</button>
    <a href="#" class="w3-bar-item w3-button w3-border-bottom">Link 1</a>
    <a href="#" class="w3-bar-item w3-button w3-border-bottom">Link 2</a>
    <a href="#" class="w3-bar-item w3-button w3-border-bottom">Link 3</a>
  </div>

  <div id="main">

  <!-- Page Content -->
  <div class="w3-black">
    <button id="openNav" class="w3-button w3-black w3-xlarge" onclick="w3_open()">&#9776;</button>
    <div class="w3-container">
      <h1>Welcome to My Page</h1>
    </div>
  </div>

  <script>
    function w3_open() {
      document.getElementById("main").style.marginLeft = "25%";
      document.getElementById("mySidebar").style.width = "25%";
      document.getElementById("mySidebar").style.display = "block";
      document.getElementById("openNav").style.display = 'none';
    }
    function w3_close() {
      document.getElementById("main").style.marginLeft = "0%";
      document.getElementById("mySidebar").style.display = "none";
      document.getElementById("openNav").style.display = "inline-block";
    }
</script>

</body>
</html>
