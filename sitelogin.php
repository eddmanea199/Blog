<!DOCTYPE html>
<html lang="en">
<head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <title>Autentificare Site</title>

        <!-- CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144x144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-precomposed.png">
<style>.h1{color:black!important;background: -moz-linear-gradient(270deg, rgba(130,111,81,0.15) 0%, rgba(130,111,81,0.52) 6%, rgba(175,155,121,0.9) 12%, rgba(235,215,176,0.9) 20%, rgba(222,187,113,0.9) 82%, rgba(172,146,95,0.9) 89%, rgba(130,111,81,0.5) 95%, rgba(130,111,81,0.15) 100%); /* ff3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(130,111,81,0.15)), color-stop(6%, rgba(130,111,81,0.52)), color-stop(12%, rgba(175,155,121,0.9)), color-stop(20%, rgba(235,215,176,0.9)), color-stop(82%, rgba(222,187,113,0.9)), color-stop(89%, rgba(172,146,95,0.9)), color-stop(95%, rgba(130,111,81,0.5)), color-stop(100%, rgba(130,111,81,0.15))); /* safari4+,chrome */
background: -webkit-linear-gradient(270deg, rgba(130,111,81,0.15) 0%, rgba(130,111,81,0.52) 6%, rgba(175,155,121,0.9) 12%, rgba(235,215,176,0.9) 20%, rgba(222,187,113,0.9) 82%, rgba(172,146,95,0.9) 89%, rgba(130,111,81,0.5) 95%, rgba(130,111,81,0.15) 100%); /* safari5.1+,chrome10+ */
background: -o-linear-gradient(270deg, rgba(130,111,81,0.15) 0%, rgba(130,111,81,0.52) 6%, rgba(175,155,121,0.9) 12%, rgba(235,215,176,0.9) 20%, rgba(222,187,113,0.9) 82%, rgba(172,146,95,0.9) 89%, rgba(130,111,81,0.5) 95%, rgba(130,111,81,0.15) 100%); /* opera 11.10+ */
background: -ms-linear-gradient(270deg, rgba(130,111,81,0.15) 0%, rgba(130,111,81,0.52) 6%, rgba(175,155,121,0.9) 12%, rgba(235,215,176,0.9) 20%, rgba(222,187,113,0.9) 82%, rgba(172,146,95,0.9) 89%, rgba(130,111,81,0.5) 95%, rgba(130,111,81,0.15) 100%); /* ie10+ */
background: linear-gradient(180deg, rgba(130,111,81,0.15) 0%, rgba(130,111,81,0.52) 6%, rgba(175,155,121,0.9) 12%, rgba(235,215,176,0.9) 20%, rgba(222,187,113,0.9) 82%, rgba(172,146,95,0.9) 89%, rgba(130,111,81,0.5) 95%, rgba(130,111,81,0.15) 100%); /* w3c */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#826F51', endColorstr='#826f51',GradientType=0 ); /* ie6-9 */}.row {
    margin-right: 0px;
    margin-left: 0px;}sub{color:#aeaebe}</style>
    </head>

    <body>

 <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                         <h1 class="h1"><br><strong>Autentificare ADMIN</strong><br><sub>_____________________</sub></h1>
                            <div class="description">
                            	<p>
	                            	<!--daca mai trebuie sa specific ceva, pune aici!-->
                            	</p>
                            </div>
                        </div>
                    </div>


   					<div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3 class="text-center">Introduceti datele de autentificare</h3>
                            	
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-key"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">              
      <!---->
            <form action="qqq.php" role="form" method="POST" class="login-form">
         		<div class="form-group">
			      <label class="sr-only" for="form-username">User<em>(primele 10 caractere)</em></label>
			      <input type="text" name="username" placeholder="aici nume utilizator..." class="form-username form-control" id="username">
			    </div>
  				<div class="form-group">
			      <label class="sr-only" for="form-password">Parola</label>
			      <input type="password" name="password" placeholder="parola dvs. aici..." class="form-password form-control" id="pwd"></div>
			  <button type="submit" name="btnok" class="btn">Autentificare</button>
   </form>
		                    </div>
                        </div>
                    </div>
                   
                </div>
            </div>
            
        </div>
<div class="row"><div class="col-sm-3 col-sm-offset-6"><h5 style="cursor: none;"><small>Software Web Realizat de <span class="pager">Prof.ing.Moroianu -  0748.378.321</span></small></h5></div></div>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
