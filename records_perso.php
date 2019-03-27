<!DOCTYPE html>
<?php 
 	  require_once("./header.php");
 	  require_once("./navbar.php");
?>
 <style>

.espace{
	margin-top: 25px;
}

.my-row{
	margin-bottom: 50px;
	margin-top: 50px;
	margin-right: 15px; 
	margin-left: 15px;

	height: 350px;
}

.my-col{
	border: 3px solid navy;
	background-color: #1E90FF;
	border-radius: 10px;
}

.my-text{
	color: black;
	font-size: x-large;
	font-family: Noto Sans, sans-serif;
}
</style>

 <body>
 	<div class="view" style="background-image: url('images/rade1.jpg'); background-repeat: no-repeat;background-size: cover; background-position: center center;
 		<div class="container my-container">

 			<div class="row justify-content-around espace">	
 			</div>

 			<div class="row justify-content-around my-row">

 				<div class="col-3 my-col bg-primary justify-content-center text-center">
 				<br>	
 				<img src="/images/kayak.png" class="img">
 				<br>
 				<p class="text my-text">Record en kayak</p>
 				<br>
 				<p class="text">BLABLAPHP</p>	
 				</div>

 				<div class="col-3 my-col bg-primary justify-content-center text-center">
 				<br>	
 				<img src="/images/planche.png" class="img">
 				<br>
 				<p class="text my-text">Record en planche à voile</p>
 				<br>
 				<p class="text">BLABLAPHP</p>	
 				</div>

 				<div class="col-3 my-col bg-primary justify-content-center text-center">
 				<br>	
 				<img src="/images/kite.png" class="img">
 				<br>
 				<p class="text my-text">Record en kitesurf</p>
 				<br>
 				<p class="text">BLABLAPHP</p>	
 				</div>

		
 			</div>
	

 			<div class="row my-row">

 				<div class="col-3 offset-2 my-col text-center">
 				<br>	
 				<img src="/images/paddle.png" class="img">
 				<br>
 				<p class="text my-text">Record en paddle</p>
 				<br>
 				<p class="text">BLABLAPHP</p>	
 				</div>


 				<div class="col-3 offset-2 my-col text-center">
 				<br>	
 				<img src="/images/voile.png" class="img">
 				<br>
 				<p class="text my-text">Record en voile</p>
 				<br>
 				<p class="text">BLABLAPHP</p>	
 				</div>

 			</div>

 			<div class="row justify-content-around espace">	
 			</div>

 		</div>
 	</div>
 </body>
 
 </html>