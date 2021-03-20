<?php

session_start();

if(empty($_SESSION['user_id']))
{
    header("Location: index.php");
}


include_once("clase/operare.php");


$edit=new operare();
$id_p=$edit->strfix($_GET['id']);
$qry=$edit->preluare("SELECT*FROM articole WHERE artID=$id_p");
foreach($qry as $v){
  $titlu=$v['titlu'];
  $continut=$v['continut'];
  $poza=$v['poza'];}

$edit2=new operare();
if(isset($_POST['update'])){
  $id=$id_p;
  $titluX=$edit2->strfix($_POST['titlu']);
  $continutX=$edit2->strfix($_POST['editor1']);
    $rezultat=$edit2->ruleaza("UPDATE articole SET titlu=$titluX, continut=$continutX WHERE artID=$id_p;"); 
  //header("Location:dashboard.php");
echo $titluX, $continutX;
  }
 
?>
<!DOCTYPE html>
<html>
	<title>Panou Control</title>
  <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

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
  <h1 class="w3-xxxlarge">Editare articol</h1>
</header>

<div class="w3-container" style="padding:32px">
<h2>Editare articol nr. <?php echo $id_p;?> </h2>
<form class="w3-container" action="update.php" method="POST">

<label class="w3-text-blue"><b>Titlu</b></label>
<input class="w3-input w3-border" type="text" name="titlu" value="<?php echo $titlu;?>">
 
<label class="w3-text-blue"><b>Continut</b></label>
<textarea class="w3-input w3-border" type="text" name="editor1"><?php echo $continut;?></textarea> 
<button class="w3-btn w3-blue" type="submit" name="update">Update</button>
 
</form>


</div>
</div>

</div>
  <script>CKEDITOR.replace( 'editor1' );
                </script>
    
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

