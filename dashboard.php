<?php

session_start();

if(empty($_SESSION['user_id']))
{
    header("Location: index.php");
}


include_once("clase/operare.php");
 
?>
<!DOCTYPE html>
<html>
	<title>Panou Control</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-teal.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><style>
body {font-family: "Roboto", sans-serif}
.w3-bar-block .w3-bar-item {
  padding: 16px;
  font-weight: bold;
}
</style>
<body>

<nav class="w3-sidebar w3-bar-block w3-collapse w3-animate-left w3-card" style="z-index:3;width:250px;" id="mySidebar">
  <a class="w3-bar-item w3-button w3-border-bottom w3-large" href="#"><img src="https://www.w3schools.com/images/w3schools.png" style="width:80%;"></a>
  <a class="w3-bar-item w3-button w3-hide-large w3-large" href="javascript:void(0)" onclick="w3_close()">Close <i class="fa fa-remove"></i></a>
  <a class="w3-bar-item w3-button" href="#">Adaugare articol</a>
  <a class="w3-bar-item w3-button" href="#">Link 2</a>
  <a class="w3-bar-item w3-button" href="#">Link 3</a>
  <a class="w3-bar-item w3-button w3-teal" href="multumim.php">LOGOUT</a>
</nav>

<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>

<div class="w3-main" style="margin-left:250px;">

<div id="myTop" class="w3-container w3-top w3-theme w3-large">
  <p><i class="fa fa-bars w3-button w3-teal w3-hide-large w3-xlarge" onclick="w3_open()"></i>
  <span id="myIntro" class="w3-hide">Dashboard</span></p>
</div>

<header class="w3-container w3-theme" style="padding:64px 32px">
  <h1 class="w3-xxxlarge">W3.CSS</h1>
</header>

<div class="w3-container" style="padding:32px">
<h2>Lista articole existente</h2>


<table border="1" cellpadding="1" cellspacing="1" class="w3-table-all">
			<thead>
				<tr class="w3-light-grey">
					<th scope="col">
						artID</th>
					<th scope="col">
						TITLU</th>
					<th scope="col">
						CONTINUT</th>
					<th scope="col">
						POZA</th>
					<th scope="col">
						UPDATE</th>
					<th scope="col">
						DELETE</th>
				</tr>
			</thead>
			<tbody>
				<?php
                $crud=new operare();
                $rezultat=$crud->preluare("select*from articole");
                foreach ($rezultat as $key => $row) {
        echo "<tr>";
   //      if (strlen($str) > 10)
   // $str = substr($str, 0, 7) . '...';
        echo "<td>".$row['artID']."</td>";
		echo "<td>".substr($row['titlu'],0,100)."</td>";
		echo "<td>".substr($row['continut'],0,100)."</td>";
		echo "<td><img src='".$row['poza']."' width='50px' height='25px'></td>";
		echo "<td><a href=\"update.php?id=".$row['artID']."\" class=\"w3-button w3-small w3-yellow w3-border\">UPDATE</a></td>";
		echo "<td><a href=\"delete.php?id=".$row['artID']."\" class=\"w3-button w3-small w3-red w3-border\">DELETE</a></td>";
		echo "</tr>";
	}
                
				?>
			</tbody>
		</table>
</div>
</div>

</div>

    
<footer class="w3-container w3-ios-deep-blue w3-center w3-margin-top">
 
  <p>Aplicatie WEB realizata de Eduard</p>
</footer>


     
</div>


<script>
// Open and close the sidebar on medium and small screens
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Change style of top container on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("myTop").classList.add("w3-card-4", "w3-animate-opacity");
    document.getElementById("myIntro").classList.add("w3-show-inline-block");
  } else {
    document.getElementById("myIntro").classList.remove("w3-show-inline-block");
    document.getElementById("myTop").classList.remove("w3-card-4", "w3-animate-opacity");
  }
}

// Accordions
function myAccordion(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-theme";
  } else { 
    x.className = x.className.replace("w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-theme", "");
  }
}
</script>
</body>
</html>

