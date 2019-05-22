<!DOCTYPE html>
<?php 
 	  require_once("./header.php");
 	  require_once("./navbar.php");
    require_once("./auth.php");
?>
 <style>
  input[type=submit]{
  width: 100%;
  padding: 10px 20px;
  margin: 50px 0;
  border: 3px solid #ccc;
  border-radius: 4px;
  background-color: #f1f1f1;
}

 input[type=number], select {
  width: 100%;
  padding: 10px 20px;
  margin: 4px 0;
  border: 3px solid #ccc;
  border-radius: 4px;
  background-color: #f1f1f1;
}
}

 input[type=text], select {
  width: 100%;
  padding: 10px 20px;
  margin: 4px 0;
  border: 3px solid #ccc;
  border-radius: 4px;
  background-color: #f1f1f1;
}
input[type=date] {
  width: 100%;
  padding: 10px 20px;
  margin: 4px 0;
  border: 3px solid #ccc;
  border-radius: 4px;
  background-color: #f1f1f1;
}
input[type=time] {
	width: 100%;
  padding: 10px 20px;
  margin: 2px 0;
  border: 3px solid #ccc;
  border-radius: 4px;
  background-color: #f1f1f1;
}
input[type=text] {
  width: 100%;
  padding: 10px 20px;
  margin: 2px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  border-radius: 4px;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}
.my-btn{

  color:white;
}
 .my-container{
 	border: black;
 }

.espace{
	margin-top: 50px;
}

.espacebas{
	margin-top: 500px;
}

.my-row{
	margin-bottom: 50px;
	margin-top: 50px;
	margin-right: 15px; 
	margin-left: 15px;


	height: 150px;
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
}
</style>

 <body>
 	<div class="view" style="background-image: url('images/rade1.jpg'); background-repeat: no-repeat;background-size: cover; background-position: center center;
 		<div class="container my-container">

 			<div class="row espace">
 			</div>

 			<div class="row justify-content-around my-row">

 				<div class="col-6 my-col ">

 					<p class="text-center my-text"></br>Votre compétition à bien été crée ! </p>
          <a class="btn my-btn" href="index.php">Retour accueil !</a>
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