<!DOCTYPE html>
<?php 
 	  require_once("./header.php");
 	  require_once("./navbar.php");
?>
 <style>
  

 .my-container{
 	border: black;
 }

.espace{
	margin-top: 50px;
}

.espacebas{
	margin-top: 150px;
}

.my-row{
	margin-bottom: 50px;
	margin-top: 50px;
	margin-right: 15px; 
	margin-left: 15px;

	height: 500px;
}

.my-col{
	border: 3px solid navy;
	background-color: #1E90FF;
	border-radius: 10px;
}

.my-text{
	color: black;
	font-size: xx-large;
	font-family: Noto Sans, sans-serif;
	text-align: center;
}
</style>

 <body>
 	<div class="view" style="background-image: url('images/rade1.jpg'); background-repeat: no-repeat;background-size: cover; background-position: center center;
 		<div class="container my-container">

 			<div class="row espace">
 			</div>

 			<div class="row justify-content-around my-row">

 				<div class="col-8 my-col">
 					<p class="my-text">Mes dernières performances</p>
 				</div>
		
 			</div>

 			<div class="row espacebas">
 			</div>


 			<div class="row justify-content-around espace">	
 			</div>

 		</div>
 	</div>
 </body>
 
 </html>
 
 </html>