<!DOCTYPE html>
<?php 
 	  require_once("./header.php");
 	  require_once("./navbar.php");
?>
 <style>
  input[type=submit]{
  width: 185%;
  padding: 10px 20px;
  margin: 50px 0;
  border: 3px solid #ccc;
  border-radius: 4px;
  background-color: #f1f1f1;

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

 .my-container{
 	border: black;
 }

.espace{
	margin-top: 50px;
}

.espacebas{
	margin-top: 350px;
}

.my-row{
	margin-bottom: 50px;
	margin-top: 50px;
	margin-right: 15px; 
	margin-left: 15px;


	height: 300px;
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

 				<div class="col-8 my-col">

 					<p class="text-center my-text"> Créer votre compétition ! </p>

  					<form class="form-inline">
 						
 						<input type="text" id="Nom" name = "Nom" placeholder="Nom de la compétition">
 							<select id="sport" name="sport" placeholder="Sport">
 								<option value="kayak">Canoë-Kayak</option>
 								<option value="voile">Voile</option>
 								<option value="planche">Planche à voile</option>
 								<option value="paddle">Paddle</option>
 								<option value="kite">Kitesurf</option>
 							</select>
 						<input type="text" id="nbComp" name = "nbComp" placeholder="Nombre de participants : 1-100">
 						<labe for="date">Date de la compétition</label>
   						<input class="form-control" type="date" value="date" id="example-date-input">
   						<input type ="submit" value = "Créer la compétition">
 					</form>
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